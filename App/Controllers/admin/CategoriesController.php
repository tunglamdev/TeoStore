<?php
    use App\Core\Controller;

    class CategoriesController extends Controller{
        private $cateModel;
        function __construct(){
            $this->cateModel = $this->model("CategoriesModel");
        }

        function Index(){
            $result = $this->cateModel->all();
            if ($result != false) $data["cate"] = $result;
            
            $this->view("categories/index", $data);
        }

        function create(){
            $this->view("categories/create", []);
        }

        function store(){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/categories/create");
            else{
                $data["name"] = $_POST["name"];

                if(isset($_FILES["image"])){
                    if($_FILES["image"]["name"] != ""){
                        $randomNum = time();
                        $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                        $newImageName = $randomNum.".".$imageExt;
                    }
                }

                move_uploaded_file($_FILES["image"]["tmp_name"], IMG.DS."categories".DS.$newImageName);
                $data["image"] = $newImageName;
                
                $result = $this->cateModel->insert($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/categories");
                else header("Location: ".DOCUMENT_ROOT."/admin/categories/create");
            }
        }

        
        function edit($cateId){
            $result = $this->cateModel->getCateById($cateId);
            if ($result != false) $data["cate"] = $result;
            $this->view("categories/edit", $data);
        }

        function update($cateId){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/categories/edit");
            else{
                $data["id"] = $cateId;
                $data["name"] = $_POST["name"];

                if($_FILES["image"]["name"] != ""){
                    $randomNum = time();
                    $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                    $newImageName = $randomNum.".".$imageExt;
                    move_uploaded_file($_FILES["image"]["tmp_name"], IMG.DS."categories".DS.$newImageName);
                    $data["image"] = $newImageName;
                }      
                else{
                    $data["image"] = $_POST["old-image"];
                }

                $result = $this->cateModel->update($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/categories");
                else header("Location: ".DOCUMENT_ROOT."/admin/categories/edit");
            }
        }

        
        function delete(){
            if(isset($_GET)){
                $result = $this->cateModel->deleteCate($_GET);
                echo $result;
                return;
            }
            else echo "Can not delete this cate!"; 
        }
    }
?>