<?php

    use App\Core\Database;

    class OrderModel extends Database{

        //Get id-order of delivered orders by id-user
        function getDeliveredOrders($userId){
            $status = 4;
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ii", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get id-order of delivering orders by id-user
        function getDeliveringOrders($userId){
            $status = 3;
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ii", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return 0;
        }

        //Get id-order of prepairing orders by id-user
        function getPreparingOrders($userId){
            $status = 2;
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ii", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get id-order of no-processed orders by id-user
        function getNoProcessedOrders($userId){
            $status = 1;
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ii", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get cakes of every order
        function getVegeInOrder($orderId){
            $stmt = $this->conn->prepare("CALL sp_getVegeInOrder(?)");
            $stmt->bind_param("i", $orderId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        function book($userId){
            $stmt = $this->conn->prepare("CALL sp_book(?)");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_assoc();
            }
            else return false;
        }

        function addToDetails($data){
            $orderId = $data["id_order"];
            $vegeId = $data["id_vege"];
            $amount = $data["amount"];
            $stmt = $this->conn->prepare("INSERT INTO order_details VALUES (?,?,?)");
            $stmt->bind_param("iii", $orderId, $vegeId, $amount);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if ($result>0){
                return true;
            }
            else return false;
        }

        // Admin
        function all(){
            $sql = "SELECT O.id as id, U.name as username, U.phone as phone, U.address as address, S.name as status FROM orders O JOIN users U ON O.id_user = U.id
                                                                                                                                JOIN status S ON O.id_status = S.id";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        function getOrderDetails($orderId){
            $stmt = $this->conn->prepare("CALL sp_getOrderDetails(?)");
            $stmt->bind_param("i", $orderId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }
    }
?>