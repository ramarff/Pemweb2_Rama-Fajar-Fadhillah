<?php
class Kecamatan_model extends CI_Model{
    public function getAll(){
        $query=$this->db->get("kecamatan");
        return $query->result();
    }
    public function getById($id){
        $query=$this->db->get_where("kecamatan", array("id" => $id));
        return $query->row();
    }
    public function tambah($nama){
        $data=array("id" => "default", "nama" => $nama);
        $this->db->insert("kecamatan",$data);
    }
    public function hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('kecamatan');
    }
    public function edit($id, $nama){
        $data = array('nama' => $nama);
        $this->db->where('id', $id);
        $this->db->update('kecamatan', $data);
    }
  
}
?>