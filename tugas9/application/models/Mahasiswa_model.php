<?php
class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa(){
        $this->db->select("nim, nama, prodi_kode");
        $query=$this->db->get("mahasiswa");
        return $query->result();
    }

    public function findByNIM($NIM){
        // $this->db->where("nim", $NIM);
        $sql="SELECT mahasiswa.nim, mahasiswa.nama AS nama_mahasiswa,  gender(mahasiswa.gender) AS jenis_kelamin, mahasiswa.tmp_lahir, mahasiswa.tgl_lahir, prodi.nama AS nama_prodi, mahasiswa.prodi_kode AS kode_prodi, mahasiswa.alamat, mahasiswa.photos
        FROM mahasiswa JOIN prodi ON(mahasiswa.prodi_kode=prodi.kode) WHERE nim="."$NIM";
        $query=$this->db->query($sql);
        return $query->row();
    }

    public function save($data){
        $sql="INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, alamat) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql="UPDATE mahasiswa SET nim=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, prodi_kode=?, alamat=? WHERE nim=?";
        $this->db->query($sql, $data);
    }
    public function getAllJurusan(){
        $this->db->select("kode, nama");
        $query=$this->db->get("prodi");
        return $query->result();
    }
    public function hapus($nim){
        $this->db->where("nim", $nim);
        $this->db->delete('mahasiswa');
    }
    public function updateFoto($foto){
        $sql="UPDATE mahasiswa SET photos=? WHERE nim=?";
        $this->db->query($sql, $foto);
    }

}



?>