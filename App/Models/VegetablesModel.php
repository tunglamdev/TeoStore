<?php

    use App\Core\Database;

    class VegetablesModel extends Database{

        function all(){
            $sql = "SELECT * FROM vegetables";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

         //Count all vegetables on DB
         function count(){
            $sql = "SELECT id FROM vegetables";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return false;
            }
        }

        //Get vegetables to show on page (Pagination)
        function getVege($limit, $num){
            $stmt = $this->conn->prepare("SELECT * FROM vegetables LIMIT ?, ?");
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

        //Search vegetables by key
        function getVegeByKey($key){
            $key = "%".$key."%";
            $stmt = $this->conn->prepare("SELECT * FROM vegetables WHERE name LIKE ?");
            $stmt->bind_param("s", $key);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                $cakes = $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                $cakes =[];
            }

            return $cakes;
        }

        //Get vegetables by categories to show on page
        function getVegeByCategories($idCate, $limit, $num){
            $stmt = $this->conn->prepare("SELECT * FROM vegetables WHERE id_veg_type = ? LIMIT ?, ?");
            $stmt->bind_param("iii", $idCate, $limit, $num);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        //Count vegetables by categories
        function countVegeByCategories($idCate){
            $stmt = $this->conn->prepare("SELECT id FROM vegetables WHERE id_veg_type = ?");
            $stmt->bind_param("i", $idCate);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return false;
            }
        }

        //get vegetables by id
        function getVegeById($idCake){
            $stmt = $this->conn->prepare("SELECT * FROM vegetables WHERE id = ?");
            $stmt->bind_param("i", $idCake);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_assoc();
            }
            else{
                return false;
            }
        }
    }
?>