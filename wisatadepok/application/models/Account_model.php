<?php
class Account_model extends CI_Model{
    public function getAll(){
        $query=$this->db->get("users");
        return $query->result();
    }
    public function getById($id){
        $query=$this->db->get_where("users", array("id" => $id));
        return $query->row();
    }
    public function login($name, $pass){
        $sql="SELECT * FROM users WHERE username=? and password=MD5(?)";
        $data=[$name, $pass];
        $query=$this->db->query($sql, $data);
        return $query->row();
    }
    public function register($name, $email, $password, $role){
        $sql="INSERT INTO users (id, username, password, email, created_at, last_login, role) VALUES (?,?,MD5(?),?,now(),?,?)";
        $data=[  "id" => "default",
                 "username" => $name, 
                 "password"=>$password, 
                 "email"=>$email, 
                 "last_login" => "default",
                 "role" => $role,
                ];
        $this->db->query($sql, $data);
    }
}
 ?>