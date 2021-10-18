<?php
    use App\Core\Controller;

    class ProductsController extends Controller{
        private $vegeModel;
        private $cateModel;
        private $origModel;
        function __construct(){
            $this->vegeModel = $this->model("VegetablesModel");
            $this->cateModel = $this->model("CategoriesModel");
            $this->origModel = $this->model("OriginalModel");
        }

        function Index(){
            $result = $this->vegeModel->all();
            if ($result != false) $data["vege"] = $result;
            
            $this->view("products/index", $data);
        }

        function create(){
            $result1 = $this->cateModel->all();
            if ($result1 != false) $data["categories"] = $result1;

            $result2 = $this->origModel->all();
            if ($result2 != false) $data["orig"] = $result2;

            $this->view("products/create", $data);
        }

        function store(){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/products/create");
            else{
                $data["cate"] = $_POST["cate"];
                $data["name"] = $_POST["name"];
                $data["weight"] = $_POST["weight"];
                $data["price"] = $_POST["price"];
                $data["orig"] = $_POST["orig"];

                if(isset($_FILES["image"])){
                    if($_FILES["image"]["name"] != ""){
                        $randomNum = time();
                        $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                        $newImageName = $randomNum.".".$imageExt;
                    }
                }

                move_uploaded_file($_FILES["image"]["tmp_name"], IMG.DS."vegetables".DS.$newImageName);
                $data["image"] = $newImageName;
                
                $result = $this->vegeModel->insert($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/products");
                else header("Location: ".DOCUMENT_ROOT."/admin/products/create");
            }
        }

        
        function edit($vegeId){
            $result1 = $this->cateModel->all();
            if ($result1 != false) $data["categories"] = $result1;

            $result2 = $this->vegeModel->getVegeById($vegeId);
            if ($result2 != false) $data["vege"] = $result2;

            $result3 = $this->origModel->all();
            if ($result3 != false) $data["orig"] = $result3;
            $this->view("products/edit", $data);
        }

        function update($vegeId){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/products/edit");
            else{
                $data["id"] = $vegeId;
                $data["cate"] = $_POST["cate"];
                $data["name"] = $_POST["name"];
                $data["weight"] = $_POST["weight"];
                $data["price"] = $_POST["price"];
                $data["orig"] = $_POST["orig"];

                if($_FILES["image"]["name"] != ""){
                    $randomNum = time();
                    $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                    $newImageName = $randomNum.".".$imageExt;
                    move_uploaded_file($_FILES["image"]["tmp_name"], IMG.DS."vegetables".DS.$newImageName);
                    $data["image"] = $newImageName;
                }      
                else{
                    $data["image"] = $_POST["old-image"];
                }

                $result = $this->vegeModel->update($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/products");
                else header("Location: ".DOCUMENT_ROOT."/admin/products/edit");
            }
        }

        
        function delete(){
            if(isset($_GET)){
                $result = $this->vegeModel->deleteVege($_GET);
                echo $result;
                return;
            }
            else echo "Can not delete this item!"; 
        }
    }
?>