<?php

    use App\Core\Database;

    class CakeTypeModel extends Database{

        function all(){
            $sql = "SELECT * FROM cake_types";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }
    }
?>