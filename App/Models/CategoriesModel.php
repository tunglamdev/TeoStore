<?php

    use App\Core\Database;

    class CategoriesModel extends Database{

        function all(){
            $sql = "SELECT * FROM veg_types";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        function getCateById($cateId){
            $stmt = $this->conn->prepare("SELECT * FROM veg_types WHERE id=?");
            $stmt->bind_param("i",$cateId);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                return $result->fetch_assoc();
            }
            else{
                return false;
            }
        }

        // Admin
        //Create new cate processing
        function insert($data){
            $name = $data["name"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("INSERT INTO veg_types VALUES (NULL, ?, ?)");
            $stmt->bind_param("ss",$name, $image);
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
            $name = $data["name"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("UPDATE veg_types SET name=?, image=? WHERE id=?");
            $stmt->bind_param("ssi",$name, $image, $id);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if($result>0){
                return true;
            }
            else{
                return false;
            }
        }

        function deleteCate($data){
            $id = $data["cateId"];
            $stmt = $this->conn->prepare("DELETE FROM veg_types WHERE id=?");
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