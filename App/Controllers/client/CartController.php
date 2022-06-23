<?php
    use App\Core\Controller;

    class CartController extends Controller{
        private $cartModel;
        private $orderModel;
        private $vegeModel;

        function __construct(){
            $this->cartModel = $this->model("CartModel");
            $this->orderModel = $this->model("OrderModel");
            $this->vegeModel = $this->model("VegetablesModel");
        }

        function Index(){
            $data["cart"] = $this->cartModel->getVegeFromCart($_SESSION["user"]["id"]);
            if (!isset($data["cart"]) || $data["cart"]==0) $data["cart"]=[];
            $this->view("cart/index", $data);
        }

        function add(){
            if(isset($_GET)){
                $result = $this->cartModel->addToCart($_GET);
                echo json_encode($result);
                return;
            }
            else echo "Can not add to cart!";   
        }

        function amountInCart(){
            if(isset($_SESSION["user"])){
                echo $result = $this->cartModel->countVegeInCart($_SESSION["user"]["id"]);
                return;
            }
            else{
                echo "0";
            }
        }

        function delete(){
            if(isset($_GET)){
                $result = $this->cartModel->deleteItemInCart($_GET);
                echo $result;
                return;
            }
            else echo "Can not delete this item!"; 
        }

        function quantity(){
            if(isset($_GET)){
                $result = $this->cartModel->updateQuantity($_GET);
                echo $result;
                return;
            }
            else echo "Can not update quantity!"; 
        }

        function order(){
            if(isset($_GET)){
                $check = true;
                $result1 = $this->orderModel->book($_GET["userId"]);
                $result2 = $this->cartModel->getById($_GET["userId"]);
                //var_dump($result2);
                foreach ($result2 as $i => $item){
                    $data["id_order"] = $result1["orderId"];
                    $data["id_vege"] = $item["id_veg"];
                    $data["amount"] = $item["amount"];
                    $result3 = $this->vegeModel->getVegeById($data["id_vege"]);
                    if ($result3["sale_price"]==NULL) $data["price"] = $result3["price"];
                    else $data["price"] = $result3["sale_price"];
                    $check = $this->orderModel->addToDetails($data);
                }
                $check = $this->cartModel->deleteAll($_GET["userId"]);
                echo $check;
                return;
            }
            else echo "Can not update quantity!"; 
        }
    }
?>