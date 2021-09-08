<?php
    use App\Core\Controller;

    class AboutController extends Controller{
        function Index(){
            $this->view("about/index", []);
        }
    }
?>