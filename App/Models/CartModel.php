<?php

    use App\Core\Database;

    class CartModel extends Database{

        function addToCart($data){
            $id_user = $data["userId"];
            $id_vege = $data["vegeId"];
            $amount = isset($data["amount"]) ? $data["amount"] : 1;
            $isSuccess = true;

            $numIndex = $this->numOfVege($id_vege, $id_user);
            $amount += $numIndex;

            //Trong gio hang da co sp nay => Tang so luong len
            if ($numIndex > 0){
                $stmt = $this->conn->prepare("UPDATE carts SET amount=? WHERE id_veg=? AND id_user=?");
                $stmt->bind_param("iii", $amount, $id_vege, $id_user);
                $stmt->execute();
                $result = $stmt->affected_rows;
                if($result<1) $isSuccess = false;
            }
            else{//Chua co san pham nay => Them moi
                $stmt = $this->conn->prepare("INSERT INTO carts VALUES(?, ?, ?)");
                $stmt->bind_param("iii", $id_user, $id_vege,  $amount);
                $stmt->execute();
                $result = $stmt->affected_rows;
                if($result<1) $isSuccess = false;
            }

            $numInCart = $this->countVegeInCart($id_user);
            return [
                "isSuccess" => $isSuccess,
                "numInCart" => $numInCart
            ];
        }

        //Kiem tra trong gio hang da co sp nay chua
        function numOfVege($id_vege, $id_user){
            $stmt = $this->conn->prepare("SELECT amount FROM carts WHERE id_veg=? AND id_user=?");
            $stmt->bind_param("ii", $id_vege, $id_user);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                $result=$result->fetch_assoc();
                return $result["amount"];
            }
            return 0;
        }

        //So loai rau trong gio hang
        function countVegeInCart($id_user){
            $stmt = $this->conn->prepare("SELECT id_veg FROM carts WHERE id_user=?");
            $stmt->bind_param("i", $id_user);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                return $result->num_rows;
            }
            else{
                return 0;
            }
        }

        function getVegeFromCart($id_user){
            $stmt = $this->conn->prepare("CALL sp_selectVegInCartByUser(?)");
            $stmt->bind_param("i", $id_user);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return 0;
            }
        }

        // Delete item in cart
        function deleteItemInCart($data){
            $id_user = $data["userId"];
            $id_vege = $data["vegeId"];
            $isSuccess = true;
         
            $stmt = $this->conn->prepare("DELETE FROM carts WHERE id_veg=? AND id_user=?");
            $stmt->bind_param("ii",$id_vege, $id_user);
            $stmt->execute();
            $result = $stmt->affected_rows;
            if($result<1) $isSuccess = false;
            return $isSuccess;
        }

        function updateQuantity($data){
            $id_user = $data["userId"];
            $id_vege = $data["vegeId"];
            $quantity = $data["num"];
            $isSuccess = true;
         
            $stmt = $this->conn->prepare("UPDATE carts SET amount=? WHERE id_veg=? AND id_user=?");
            $stmt->bind_param("iii",$quantity, $id_vege, $id_user);
            $stmt->execute();
            $result = $stmt->affected_rows;
            if($result<1) $isSuccess = false;
            return $isSuccess;
        }

        function getById($id){
            $userId = $id;
            $stmt = $this->conn->prepare("SELECT * FROM carts WHERE id_user=?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return 0;
            }
        }

        function deleteAll($id_user){
            $isSuccess = true;
        
            $stmt = $this->conn->prepare("DELETE FROM carts WHERE id_user=?");
            $stmt->bind_param("i",$id_user);
            $stmt->execute();
            $result = $stmt->affected_rows;
            if($result<1) $isSuccess = false;
            return $isSuccess;
        }
    }
?>