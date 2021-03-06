<?php
namespace App\Model;

use PDO;

class UserService {
    public $User;
    public $db;
    public $salt = "Zo4rU5Z1Y";

    public function __construct(){

    }

    public function registerUser($User){
        try {
            $this->User = $User;
            $this->db = new Database();
            $sql_check = "SELECT * FROM users WHERE username = :username";

            $stmt = $this->db->connect()->prepare($sql_check);

            $stmt->bindValue("username", $User->username, PDO::PARAM_STR);
            $stmt->execute();
            $valid = $stmt->fetchColumn();
            if($valid){
                $this->db->disconnect();
                return false;
            }
            else {
                $sql = "INSERT INTO users(username, password) VALUES(:username, :password)";
                $stmt = $this->db->connect()->prepare($sql);
                $stmt->bindValue("username", $User->username, PDO::PARAM_STR);
                $stmt->bindValue("password", hash("sha256", $User->password.$this->salt), PDO::PARAM_STR);
                $stmt->execute();
                $this->db->disconnect();
                return true;
            }
        }catch
            (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
    }
    public function loginUser($User){
        try {
            $this->db = new Database();
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1";

            $stmt = $this->db->connect()->prepare($sql);

            $stmt->bindValue("username", $User->username, PDO::PARAM_STR);
            $stmt->bindValue("password", hash("sha256", $User->password.$this->salt), PDO::PARAM_STR);
            $stmt->execute();

            $valid = $stmt->fetchColumn();

            if ($valid) {
                return true;
            } else {
                return false;
            }
        }   catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
    }

}