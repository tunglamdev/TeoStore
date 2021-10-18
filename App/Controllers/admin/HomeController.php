<?php
    use App\Core\Controller;
    class HomeController extends Controller{
        function Index(){
            $this->view("home/index", []);
        }
    }
?>