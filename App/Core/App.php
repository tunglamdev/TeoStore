<?php
    namespace App\Core;

    class App{

        public $controller = "Home";
        public $action = "Index";
        public $params = [];

        function __construct(){
            $GLOBALS["isAdmin"] = false;

            //Cat url luu vao mang arr
            $arr = $this->urlProcess();
            
            //Xu li Controller in Admin
            if(strcmp(strtolower($arr[0]), "admin")==0){
                $GLOBALS["isAdmin"] = true;
                unset($arr[0]);
                if(isset($arr[1])){
                    if(file_exists(CONT.DS."admin".DS.ucfirst($arr[1])."Controller.php")){
                        $this->controller = ucfirst($arr[1]);
                        unset($arr[1]);
                    }
                }
                $this->controller = $this->controller."Controller";
                require_once CONT.DS."admin".DS.$this->controller.".php";
                $this->controller = new $this->controller;

                //Xu ly Action in Admin
                if(isset($arr[2])){
                    if(method_exists($this->controller, $arr[2])){
                        $this->action = $arr[2];
                    }
                    unset($arr[2]);
                } 

                //Xu ly params in Admin
                $this->params = $arr ? array_values($arr) : [];
            }
            else{
                //Xu ly Controller in Client
                if(file_exists(CONT.DS.ucfirst($arr[0])."Controller.php")){
                    $this->controller = ucfirst($arr[0]);
                    unset($arr[0]);
                }
                $this->controller = $this->controller."Controller";
                require_once CONT.DS.$this->controller.".php";
                $this->controller = new $this->controller;
    
                //Xu ly Action in Client
                if(isset($arr[1])){
                    if(method_exists($this->controller, $arr[1])){
                        $this->action = $arr[1];
                    }
                    unset($arr[1]);
                }

                 //Xu ly params in Client
                $this->params = $arr ? array_values($arr) : [];
            }
           
            //Vao lop controller, chay ham action voi tham so params
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function urlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"],"/")));
            }
            else{
                return
                [ "home","index" ];
            }
        }
    }
?>