<?php
    use App\Core\Controller;

    class CartController extends Controller{
        private $cartModel;

        function __construct(){
            $this->cartModel = $this->model("CartModel");
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
    }
?>