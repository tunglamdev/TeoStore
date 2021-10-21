<?php
    use App\Core\Controller;

    class OrdersController extends Controller{
        private $origModel;
        function __construct(){
            $this->orderModel = $this->model("OrderModel");
        }

        function Index(){
            $data["order"] = $this->orderModel->all();
            foreach($data["order"] as $i => $order){
                $data[$order["id"]]["details"] = $this->orderModel->getOrderDetails($order["id"]);
            }
            $this->view("orders/index", $data);
        }
    }
?>