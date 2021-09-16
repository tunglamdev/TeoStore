<?php
use App\Core\Controller;

    class ProductsController extends Controller{
        private $vegeModel;
        private $cateModel;

        function __construct(){
            $this->vegeModel = $this->model("VegetablesModel");
            $this->cateModel = $this->model("CategoriesModel");
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
            $this->view("products/search", $data);
        }

    }
?>