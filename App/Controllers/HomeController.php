<?php

    use App\Core\Controller;

    class HomeController extends Controller{
        private $cakeModel;
        private $caketypeModel;

        function __construct(){
            $this->cakeModel = $this->model("CakeModel");
            $this->caketypeModel = $this->model("CakeTypeModel");
        }

        function Index(){
            $this->view("home/index", []);
        }
    }
?>