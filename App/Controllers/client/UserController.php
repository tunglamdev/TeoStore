<?php
    use App\Core\Controller;

    class UserController extends Controller{
        private $userModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
        }
        function Index(){
            $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);
            $_SESSION['user']['avatar'] = $data["user"]["avatar"];
            $this->view("user/index", $data);
        }

        function update(){
            $result = $this->userModel->updateInfor($_SESSION["user"]["id"], $_POST);
            if ($result) header("Location: ".DOCUMENT_ROOT."/user");
            else echo "Update fail!";
        }

        function upload(){
            $result = $this->userModel->uploadAvatar($_SESSION["user"]["id"], $_FILES);
            if ($result==true) header("Location: ".DOCUMENT_ROOT."/user");
            else echo "Update fail!";
        }
    }
?>