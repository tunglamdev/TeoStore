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

        function getOrigById($origId){
            $stmt = $this->conn->prepare("SELECT * FROM originals WHERE id=?");
            $stmt->bind_param("i",$origId);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows>0){
                return $result->fetch_assoc();
            }          
            else{
                return false;
            }
        }

        // Admin
        //Create new orig processing
        function insert($data){
            $seed = $data["seed"];
            $planting = $data["planting"];

            $stmt = $this->conn->prepare("INSERT INTO originals VALUES (NULL, ?, ?)");
            $stmt->bind_param("ss",$seed, $planting);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if($result>0){
                return true;
            }
            else{
                return false;
            }
        }

        //Edit cate processing
        function update($data){
            $id = $data["id"];
            $seed = $data["seed"];
            $planting = $data["planting"];

            $stmt = $this->conn->prepare("UPDATE originals SET seed=?, planting_place=? WHERE id=?");
            $stmt->bind_param("ssi",$seed, $planting, $id);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if($result>0){
                return true;
            }
            else{
                return false;
            }
        }

        function deleteOrig($data){
            $id = $data["origId"];
            $stmt = $this->conn->prepare("DELETE FROM originals WHERE id=?");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if($result<1){
                return false;
            }
            else{
                return true;
            }
        }
    }
?>