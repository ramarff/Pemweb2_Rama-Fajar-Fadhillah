<?php
class Wisata_model extends CI_Model{
    public function getAll(){
        $this->db->select("tempat_wisata.id AS id, tempat_wisata.nama AS nama_tempat, jenis_wisata.nama AS jenis");
        $this->db->join('jenis_wisata', 'jenis_wisata.id = tempat_wisata.jenis_id');
        $query=$this->db->get("tempat_wisata");
        return $query->result();
    }
    public function getById($id){
        $this->db->select("
        *,
        tempat_wisata.nama AS nama_wisata,
        jenis_wisata.nama AS jenis,
        kecamatan.nama AS kecamatan");
        $this->db->join('jenis_wisata', 'jenis_wisata.id = tempat_wisata.jenis_id');
        $this->db->join('kecamatan', 'kecamatan.id = tempat_wisata.kecamatan_id');
        $query=$this->db->get_where("tempat_wisata", array("tempat_wisata.id" => $id));
        return $query->row();
    }
    public function getByNama($nama){
        $sql="SELECT *, 
              tempat_wisata.nama AS nama_wisata,
              jenis_wisata.nama AS jenis,
              kecamatan.nama AS kecamatan
              FROM tempat_wisata JOIN kecamatan ON tempat_wisata.kecamatan_id=kecamatan.id 
              JOIN jenis_wisata ON jenis_wisata.id=tempat_wisata.jenis_id
              WHERE tempat_wisata.nama='$nama';";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function getTempatWisata($jenis){
        $sql="SELECT 
        tempat_wisata.nama AS nama_tempat, 
        jenis_wisata.nama AS jenis,
        kecamatan.nama AS kecamatan, 
        harga_tiket, skor_rating 
        FROM tempat_wisata JOIN kecamatan ON tempat_wisata.kecamatan_id=kecamatan.id 
        JOIN jenis_wisata ON jenis_wisata.id=tempat_wisata.jenis_id
        WHERE jenis_wisata.nama='$jenis';";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function getAllKomen(){
        // $sql="SELECT * FROM komentar";
        $this->db->select('users.username AS username, komentar.isi AS komentar');
        $this->db->join('users', 'komentar.users_id = users .id');
        $query=$this->db->get("komentar");
        return $query->result();
    }
    public function tambah($nama, $alamat,$latlong,$jenis, $skor, $harga, $foto1, $foto2, $foto3,$kecamatan, $website, $fasilitas){
        $data=array(
            "id" => "default", 
            "nama" => $nama,
            "alamat" => $alamat,
            "latlong" => $latlong,
            "jenis_id" => $jenis,
            "skor_rating" => $skor,
            "harga_tiket" => $harga,
            "foto1" => $foto1,
            "foto2" => $foto2,
            "foto3" => $foto3,
            "kecamatan_id" => $kecamatan,
            "website" => $website,
            "fasilitas" => $fasilitas
        );
        $this->db->insert("tempat_wisata",$data);
    }
    public function updateFoto($foto){
        $sql="UPDATE tempat_wisata SET photos=? WHERE nim=?";
        $this->db->query($sql, $foto);
    }
    public function hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('tempat_wisata');
    }

}



?>