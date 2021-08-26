<?php
    namespace App\Core;
    
    class Controller{
        //Call model
        function model($model){
            if(file_exists(MODEL . DS . $model . ".php")){
                require_once MODEL . DS . $model . ".php";
                return new $model;
            }
            else{
                echo "Not found model: ".$model;
            }
            
        }

        // Call view
        function view($view, $data=[]){
            if($GLOBALS["isAdmin"]==true){
                if(file_exists(VIEW . DS . "admin". DS . $view . ".php")){
                    require_once VIEW . DS . "admin/shared/layout.php";
                }
                else{
                    echo "Not found view: ".$view;
                }

            }
            else{
                if(file_exists(VIEW . DS . $view . ".php")){
                    require_once VIEW . DS . "shared/layout.php";
                }
                else{
                    echo "Not found view: ".$view;
                }
            }
        }
    }
?>