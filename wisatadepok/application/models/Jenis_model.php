<?php
class Jenis_model extends CI_Model{
    public function getAll(){
        $query=$this->db->get("jenis_wisata");
        return $query->result();
    }
    public function getById($id){
        $query=$this->db->get_where("jenis_wisata", array("id" => $id));
        return $query->row();
    }
    public function tambah($nama){
        $data=array("id" => "default", "nama" => $nama);
        $this->db->insert("jenis_wisata",$data);
    }
    public function hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('jenis_wisata');
    }
    public function edit($id, $nama){
        $data = array('nama' => $nama);
        $this->db->where('id', $id);
        $this->db->update('jenis_wisata', $data);
    }
}
?>