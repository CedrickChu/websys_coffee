<?php
include_once("db_conn.php");

class user {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    public function user($id)  {
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->db->getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute(); 
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            throw $e; 
        }
    }
    public function createUser($username, $password, $first_name, $last_name, $email_add, $mobile) {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, password, first_name, last_name, email_add, mobile) VALUES (:username, :password, :first_name, :last_name, :email_add, :mobile)";
            $stmt = $this->db->getConnection()->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
            $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $stmt->bindParam(':email_add', $email_add, PDO::PARAM_STR);
            $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
            $stmt->execute();
            return $this->db->getConnection()->lastInsertId(); 
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            throw $e;
        }
    }
    public function getUserByUsername($username) {
        try {
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->db->getConnection()->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            throw $e;
        }
    }
    public function getUserByEmail($email_add) {
        try {
            $sql = "SELECT * FROM users WHERE email_add = :email_add";
            $stmt = $this->db->getConnection()->prepare($sql);
            $stmt->bindParam(':username', $email_add, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            throw $e;
        }
    }
    public function updateUserProfile($id, $data) {
        try {
            $updatePassword = isset($data['password']) ? ', password = :password' : '';
    
            $sql = "UPDATE users 
                    SET username = :username, 
                        first_name = :first_name, 
                        last_name = :last_name, 
                        email_add = :email_add, 
                        mobile = :mobile 
                        $updatePassword
                    WHERE id = :id";
    
            $stmt = $this->db->getConnection()->prepare($sql);
    
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':username', $data['username'], PDO::PARAM_STR);
            $stmt->bindParam(':first_name', $data['first_name'], PDO::PARAM_STR);
            $stmt->bindParam(':last_name', $data['last_name'], PDO::PARAM_STR);
            $stmt->bindParam(':email_add', $data['email_add'], PDO::PARAM_STR);
            $stmt->bindParam(':mobile', $data['mobile'], PDO::PARAM_STR);
    
            if (isset($data['password'])) {
                $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
                $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
            }
    
            $stmt->execute();
    
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            throw $e;
        }
    }
}