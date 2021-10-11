<?php
    use App\Core\Controller;

    class UserController extends Controller{
        private $userModel;
        private $orderModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
            $this->orderModel = $this->model("OrderModel");
        }
        function Index(){
            $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);
            $_SESSION['user']['avatar'] = $data["user"]["avatar"];

            //Delivered Orders
            $data["deliveredOrders"] = $this->orderModel->getDeliveredOrders($_SESSION["user"]["id"]);
            if($data["deliveredOrders"]==0) $data["deliveredOrders"]=[];
            else{
                foreach($data["deliveredOrders"] as $index => $order){
                    $data[$order["id"]]["vege"] = $this->orderModel->getVegeInOrder($order["id"]);
                }
            }

            //Delivering Orders
            $data["deliveringOrders"] = $this->orderModel->getDeliveringOrders($_SESSION["user"]["id"]);
            if( $data["deliveringOrders"]==0) $data["deliveringOrders"]=[];
            else{
                foreach($data["deliveringOrders"] as $index => $order){
                    $data[$order["id"]]["vege"] = $this->orderModel->getVegeInOrder($order["id"]);
                }
            }

            //Prepairing Orders
            $data["preparingOrders"] = $this->orderModel->getPreparingOrders($_SESSION["user"]["id"]);
            if($data["preparingOrders"]==0) $data["preparingOrders"]=[];
            else{
                foreach($data["preparingOrders"] as $index => $order){
                    $data[$order["id"]]["vege"] = $this->orderModel->getVegeInOrder($order["id"]);
                }
            }

            //No processed Orders
            $data["noProcessedOrders"] = $this->orderModel->getNoProcessedOrders($_SESSION["user"]["id"]);
            if($data["noProcessedOrders"]==0) $data["noProcessedOrders"]=[];
            else{
                foreach($data["noProcessedOrders"] as $index => $order){
                    $data[$order["id"]]["vege"] = $this->orderModel->getVegeInOrder($order["id"]);
                }
            }    

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