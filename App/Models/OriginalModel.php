<?php

    use App\Core\Database;

    class OriginalModel extends Database{

        function all(){
            $sql = "SELECT * FROM originals";
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