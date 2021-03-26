<?php

class UserLogin_model{

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function loginSet(){
        return;
    }

    public function registerSet(){
        return;
    }

    public function tambahUser($data){

        $password = $data['password'];
        $cfr_password = $data['cfr_password'];

        if ($password == $cfr_password) {
        
            $query = "INSERT INTO user (username, password) VALUES (:username, :password)";
    
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $password);
            
            $this->db->execute();
            return $this->db->rowCount();
        }

    }

    public function loginUser($data){

        $username = $data['username'];
        $password = $data['password'];

        // $cfr_password = $data['cfr_password'];

        // if ($password == $) {
        
            $query = "SELECT * FROM user WHERE username = :username AND password = :password"; // buat queri select
    
            $this->db->query($query);
            $this->db->bind('username', $username);
            $this->db->bind('password', $password);
            
            $this->db->execute();
            return $this->db->rowCount();
        // }

    }


}