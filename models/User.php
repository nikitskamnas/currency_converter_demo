<?php

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getByUsername($username){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }

    public function addUser($username, $password){
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        return $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
    }
    public function verifiyUser($username, $password){
        $user=$this->getByUsername($username);
        if($user && password_verify($password, $user['password'])){
            return $user;
        }else{
            return false;
        }

    }
}
?>