<?php
namespace models;

use config\Database;
use PDO;

class user{

    protected $connection;

    public function __construct()
    {
        $this->connection=Database::connect();
    }

    public function login($email, $password){
        $query = "SELECT * FROM users WHERE email = :email";
        $result=$this->connection->prepare($query);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        $row= $result->fetch(PDO::FETCH_ASSOC);
        if ($result->rowCount() > 0){
            if (password_verify($password,$row["password_hash"])){
               
                return $row;
            }
            return false;
            
        }
        return;

    }

    public function register($email, $password, $name) {
        $query = "INSERT INTO users (full_name, password_hash, email) VALUES (:name, :password, :email)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $result= $stmt->execute();
        if ($result) {
            return true;
        }
        return;
    }
    

}

?>