<?php
use App\Core\Controller;

    class ProductsController extends Controller{
        private $vegeModel;
        private $cateModel;
        private $feedbackModel;

        function __construct(){
            $this->vegeModel = $this->model("VegetablesModel");
            $this->cateModel = $this->model("CategoriesModel");
            $this->feedbackModel = $this->model("FeedbacksModel");
        }

        //Get vegtables to show on page and pagination
        function Index(){
            //Get the number of vegetables in DB
            $numOfVege = $this->vegeModel->count();
            $data["num_of_page"] = ceil($numOfVege/NUM_OF_VEGE_ON_PAGE);

            //Get vegetables to show on page
            if(!isset($_GET["page"]) || $_GET["page"]<1 || $_GET["page"]>$data["num_of_page"]){
                $page=1;
            }
            else{
                $page = $_GET["page"];
            }

            $limit = ($page - 1) * NUM_OF_VEGE_ON_PAGE;
            $vegeOnPage = $this->vegeModel->getVege($limit , NUM_OF_VEGE_ON_PAGE);
            if(!$vegeOnPage){
                $vegeOnPage=[];
            }

            //Results saved
            $data["vege_to_show"] = $vegeOnPage;
            $data["page"] = $page;

            //Get vote rating
            foreach($vegeOnPage as $i => $vege){
                $rate =  $this->feedbackModel->avg_rating($vege["id"]);
                if($rate == NULL) $rate=0; 
                $data[$vege["id"]]["rating"] = $rate;
            }

            //Get all of categories
            $data["cate"] = $this->cateModel->all();

            $this->view("products/index", $data);
        }

        //Get cake by categories to show and pagination
        function categories(){
            //Get all of categories
            $data["cate"] = $this->cateModel->all();
            
            //Process idCate
            if(!isset($_GET['id'])){
                $idCate = 1;
            }
            else{
                $idCate = $_GET['id'];
            }

            //Count the number of pages
            $numOfVege = $this->vegeModel->countVegeByCategories($idCate);
            $data["num_of_page"] = ceil($numOfVege/NUM_OF_VEGE_ON_PAGE);

            //Process page
            if(!isset($_GET["page"]) || $_GET["page"]<1 || $_GET["page"]>$data["num_of_page"]){
                $page=1;
            }
            else{
                $page = $_GET["page"];
            }

            //Get cakes by categories
            $limit = ($page - 1) * NUM_OF_VEGE_ON_PAGE;
            $vegeByCate = $this->vegeModel->getVegeByCategories($idCate, $limit, NUM_OF_VEGE_ON_PAGE);
            if(!$vegeByCate){
                $vegeByCate=[];
            }

            //Results saved
            $data["vege_to_show"] = $vegeByCate;
            $data["page"] = $page;
            $data["id_cate"] = $idCate;

            //Get vote rating
            foreach($vegeByCate as $i => $vege){
                $rate =  $this->feedbackModel->avg_rating($vege["id"]);
                if($rate == NULL) $rate=0; 
                $data[$vege["id"]]["rating"] = $rate;
            }

            $this->view("products/categories", $data);
        }

        //Search cakes by key
        function search(){
            //Get all of categories
            $data["cate"] = $this->cateModel->all();
            
            $key = $_GET["key"];
            $veges = $this->vegeModel->getByKey($key);
            if(!$veges){
                $veges=[];
            }
            $data["vege_to_show"] = $veges;

            //Get vote rating
            foreach($veges as $i => $vege){
                $rate =  $this->feedbackModel->avg_rating($vege["id"]);
                if($rate == NULL) $rate=0; 
                $data[$vege["id"]]["rating"] = $rate;
            }
            $this->view("products/search", $data);
        }

        //Detail
        function detail($id){
            $veges1 = $this->vegeModel->getVegeDetail($id);
            if(!$veges1){
                $veges1=[];
            }
            else{
                $veges2 = $this->vegeModel->getVegeByCate($veges1['id_veg_type']);
                if(!$veges2){
                    $veges2=[];
                }

                $data["vege_to_show"] = $veges1;
                $data["vege_by_cate"] = $veges2;
            }

            $feedback = $this->feedbackModel->show($id);
            if($feedback == false){
                $feedback=[];
            }
            $data["feedback"] = $feedback;

            $avg = $this->feedbackModel->avg_rating($id);
            $data["avg_rating"] = $avg;

            $num_of_fb = $this->feedbackModel->count($id);
            $data["num_of_feedback"] = $num_of_fb;

            foreach($veges2 as $i => $vege){
                $rate =  $this->feedbackModel->avg_rating($vege["id"]);
                if($rate == NULL) $rate=0; 
                $data[$vege["id"]]["rating"] = $rate;
            }
            
            $this->view("products/detail", $data);
        }

        function addComment($id){
            if(!isset($_POST["rate"])) $vote = 5;
            else $vote = $_POST["rate"];

            $cmt = $_POST["comment-content"];

            $result = $this->feedbackModel->addComment($cmt, $vote, $id, $_SESSION);
            if($result==true) header("Location: ".DOCUMENT_ROOT."/products/detail/".$id);
            else echo "Add failed!";
        }
    }
?>