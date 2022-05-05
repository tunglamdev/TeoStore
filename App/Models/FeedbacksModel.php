<?php

    use App\Core\Database;

    class FeedbacksModel extends Database{

        function show($id){
            $vegeID = $id;
            $stmt = $this->conn->prepare("SELECT F.comment, F.vote, F.time, U.name, U.avatar
                                            FROM feedbacks F JOIN users U ON F.id_user=U.id
                                            WHERE id_veg=?");
            $stmt->bind_param("i",$vegeID);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        function avg_rating($id){
            $vegeID = $id;
            $stmt = $this->conn->prepare("SELECT avg(vote) as avg FROM feedbacks WHERE id_veg=?");
            $stmt->bind_param("i",$vegeID);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows>0){
                $result=$result->fetch_assoc();
                return $result["avg"];
            }
            return 0;
        }

        function count($id){
            $vegeID = $id;
            $stmt = $this->conn->prepare("SELECT * FROM feedbacks WHERE id_veg=?");
            $stmt->bind_param("i",$vegeID);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return 0;
            }
        }

        function addComment($comment, $vote, $id, $dataSession){
            $cmt = $comment;
            $star = $vote;
            $userID = $dataSession["user"]["id"];
            $vegeID = $id;
            $stmt = $this->conn->prepare("INSERT INTO feedbacks(comment, vote, id_user, id_veg) VALUES(?,?,?,?)");
            $stmt->bind_param("siii", $cmt, $star, $userID, $vegeID);
            $stmt->execute();

            $result = $stmt->affected_rows;
            if($result<1){
                return false;
            }
            else{
                return true;
            }
        }

        // Admin
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