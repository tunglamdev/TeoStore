<?php
    use App\Core\Controller;

    class OrdersController extends Controller{
        private $orderModel;
        private $statusModel;
        function __construct(){
            $this->orderModel = $this->model("OrderModel");
            $this->statusModel = $this->model("StatusModel");
        }

        function Index(){
            $data["order"] = $this->orderModel->all();
            $data["status"] = $this->statusModel->all();
            $this->view("orders/index", $data);
        }

        function details($id){
            $data["details"] = $this->orderModel->getOrderDetails($id);
            $data["id"] = $id;
            $this->view("orders/details", $data);
        }

        function update(){
            if(isset($_GET)){
                $result = $this->orderModel->updateStatus($_GET);
                echo $result;
                return;
            }
            else echo "Can not update this order!"; 
        }
    }
?>