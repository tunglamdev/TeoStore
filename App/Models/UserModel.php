<?php

    use App\Core\Database;

    class UserModel extends Database{

        //Add new user into database
        function register($data){
            $name = $data["name"];
            $password = password_hash($data["password"], PASSWORD_DEFAULT);
            $email = $data["email"];
            $phone = $data["phone"];
            $role=1;
            $address = $data["address"];
            $avatar="default.jpg";

            $stmt = $this->conn->prepare("INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $name, $phone, $address, $password, $email, $role, $avatar);
            $stmt->execute();

            $result = $stmt->affected_rows;

            if($result<1) return false;
            else return true;
        }

        //Authenticate when user login
        function authenticate($data){    
            $email = $data["email"];
            $password = $data["password"];

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){

                $result = $result->fetch_assoc();

                if (password_verify($password, $result["password"])==true) return [true, $result];
                else return "Password incorrect!";

                // if ($password === $result["password"]) return [true, $result];
                // else return "Password incorrect!";

            }
            else return [false,''];
        }

        //Authenticate when admin login
        function adminAuthenticate($data){    
            $email = $data["email"];
            $password = $data["password"];
            $role=0;
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=? AND role=?");
            $stmt->bind_param("si", $email, $role);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){

                $result = $result->fetch_assoc();

                // if (password_verify($password, $result["password"])==true) return [true, $result];
                // else return "Password incorrect!";

                if ($password === $result["password"]) return [true, $result];
                else return "Password incorrect!";
            }
            else return [false,''];
        }

        //Check email exist
        function checkEmailExist($email){    
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return true;
            }
            else return false;
        }

        //Update user information
        function updateInfor($id_user, $data){
            $stmt = $this->conn->prepare("UPDATE users SET name=?, email=?, phone=?, address=? WHERE id=?");
            $stmt->bind_param("ssssi", $data["name"], $data["email"], $data["phone"], $data["address"], $id_user);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if ($result==1 || $result==0){
                return true;
            }
            else return false;
        }

        //Get user information
        function getInfor($id_user){
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id=?");
            $stmt->bind_param("s", $id_user);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_assoc();
            }
            else return false;
        }

        //Upload avatar
        function uploadAvatar($id_user, $data){
            $url = $data["file"]["name"];
            move_uploaded_file($data["file"]["tmp_name"], IMG.DS."users".DS.$data["file"]["name"]);
            $stmt = $this->conn->prepare("UPDATE users SET avatar=? WHERE id=?");
            $stmt->bind_param("ss", $url, $id_user);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if ($result>0){
                return true;
            }
            else return false;
        }

        function getAll(){
            $sql = "SELECT name, phone, address, email FROM users WHERE role=1";
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