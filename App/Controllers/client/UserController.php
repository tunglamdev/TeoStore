<?php
    use App\Core\Controller;

    class UserController extends Controller{
        private $userModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
        }
        function Index(){
            $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);
            $this->view("user/index", $data);
        }

        function update(){
            $result = $this->userModel->updateInfor($_SESSION["user"]["id"], $_POST);
            if ($result==true) $this->Index();
            else echo "Update fail!";
        }
    }
?>