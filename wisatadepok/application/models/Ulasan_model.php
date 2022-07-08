<?php
class Ulasan_model extends CI_Model{
    public function getAll(){
        $this->db->select('*, tempat_wisata.nama AS nama_wisata, users.username AS username');
        $this->db->join('users', 'komentar.users_id = users .id');
        $this->db->join('tempat_wisata', 'tempat_wisata.id = komentar.wisata_id');
        $query=$this->db->get("komentar");
        return $query->result();
    }
    public function getAllKomen(){
        // $sql="SELECT * FROM komentar";
        $this->db->select('users.username AS username, komentar.isi AS komentar');
        $this->db->join('users', 'komentar.users_id = users .id');
        $query=$this->db->get("komentar");
        return $query->result();
    }
}
?>