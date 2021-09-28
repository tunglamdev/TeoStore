<?php
    use App\Core\Controller;

    class CartController extends Controller{
        private $cartModel;

        function __construct(){
            $this->cartModel = $this->model("CartModel");
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
    }
?>