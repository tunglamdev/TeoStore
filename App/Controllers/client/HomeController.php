<?php

    use App\Core\Controller;

    class HomeController extends Controller{
        private $cateModel;
        private $vegeModel;

        function __construct(){
            $this->cateModel = $this->model("CategoriesModel");
            $this->vegeModel = $this->model("VegetablesModel");
            $this->feedbackModel = $this->model("FeedbacksModel");
        }

        function Index(){
            //Get all of categories
            $data["cate"] = $this->cateModel->all();
           
            //Get all of vegetables
            $data["vege"] = $this->vegeModel->all();

            //Get sale vegetables
            $data["sale"] = $this->vegeModel->getSale();

            //Get the number of vegetables
            $numOfVege = $this->vegeModel->count();
 
            // Get vegetables to show on Menu (Pagination)
            if(isset($_GET["page"])){
                $page = $_GET["page"];
            }
            else{
                $page=1;
            }
 
            $limit = ($page - 1) * NUM_OF_VEGE_ON_PAGE;
            $vegeOnPage = $this->vegeModel->getVege($limit , NUM_OF_VEGE_ON_PAGE);
 
            $data["num_of_vege"] = $numOfVege;
            $data["vege_to_show"] = $vegeOnPage;

            foreach($vegeOnPage as $i => $vege){
                $rate =  $this->feedbackModel->avg_rating($vege["id"]);
                if($rate == NULL) $rate=0; 
                $data[$vege["id"]]["rating"] = $rate;
            }
 
            $this->view("home/index", $data);
        }
    }
?>