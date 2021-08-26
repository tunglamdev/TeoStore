<?php

    use App\Core\Database;

    class CakeModel extends Database{

        function all(){
            $sql = "SELECT * FROM cakes";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        function count(){
            $sql = "SELECT id FROM cakes";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return false;
            }
        }

        function getCake($limit, $num){
            $stmt = $this->conn->prepare("SELECT * FROM cakes LIMIT ?, ?");
            $stmt->bind_param("ii", $limit, $num);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }
    }
?>