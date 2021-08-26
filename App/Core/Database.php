<?php
    namespace App\Core;
    use mysqli;

    class Database{
        public $conn;
        function __construct(){
            $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
            if($this->conn->connect_errno){
                die("Fail connection: ".$this->conn->connect_errno);
            }
            $this->conn -> set_charset("utf8");
        }
    }
?>