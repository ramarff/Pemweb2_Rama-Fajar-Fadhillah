<?php
class Account_model extends CI_Model{
    public function getAllUsers(){
        $this->db->select("nim, nama, prodi_kode");
        $query=$this->db->get("mahasiswa");
        return $query->result();
    }

    public function findByUsername($username){
        // $this->db->where("nim", $NIM);
        
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function login($name, $pass){
        $sql="SELECT * FROM users WHERE name=? and password=MD5(?)";
        $data=[$name, $pass];
        $query=$this->db->query($sql, $data);
        return $query->row();
    }
    public function register($name, $email, $password, $role){
        $sql="INSERT INTO users (id, name, email, password, created_at, updated_at, role, last_login) VALUES (?,?,?,MD5(?),now(),?,?,?)";
        $data=[  "id" => "default",
                 "name" => $name, 
                 "email"=>$email, 
                 "password"=>$password, 
                 "updated_at" => "default",
                 "role" => $role,
                 "last_login" => "default"
                ];
        $this->db->query($sql, $data);
    }
}
?>