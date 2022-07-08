<?php
class Admin extends CI_Controller{
    private function path($folder, $file, $title, $data){
        $this->load->view("backend/layouts/header", $title, $data);
        $this->load->view("backend/layouts/sidebar");
        $this->load->view("backend/layouts/navbar");
        $this->load->view("backend/$folder/$file", $data);
        $this->load->view("backend/layouts/footer");
    }
    public function wisata($pages="index", $id=0){
        $this->load->model("Kecamatan_model", "kecamatan");    
        $this->load->model("Jenis_model", "jenis");    
        $this->load->model("Wisata_model", "wisata");    
        $title=["Daftar Wisata", "Tambah Data Wisata", "Edit Data Wisata","Detail Wisata"];
        $data=["kecamatan" => $this->kecamatan->getAll(), 
                "jenis" => $this->jenis->getAll(), 
                "wisata" => $this->wisata->getAll(),
                "detail" => $this->wisata->getById($id)

             ];
        switch($pages){
           case "index":
                $this->path("wisata","index", ["title" => $title[0]], $data);
           break;
           case "tambah":
                if(isset($_POST["batal"])){
                        redirect(admin("wisata"));
                }elseif(isset($_POST["tambah"])){
                        $nama=$this->input->post("nama");
                        $alamat=$this->input->post("alamat");
                        $latlong=$this->input->post("latlong");
                        $jenis=$this->input->post("jenis");
                        $harga=$this->input->post("harga");
                        $files1=explode(".",$_FILES["foto1"]["name"]);
                        $ext1=end($files1);
                        $files2=explode(".",$_FILES["foto2"]["name"]);
                        $ext2=end($files2);
                        $files1=explode(".",$_FILES["foto3"]["name"]);
                        $ext1=end($files1);
                        $files3=explode(".",$_FILES["foto3"]["name"]);
                        $ext3=end($files1);
                        $foto1=time()."-".$files1[0].".".$ext1;
                        $foto2=time()."-".$files2[0].".".$ext2;
                        $foto3=time()."-".$files3[0].".".$ext3;
                        $kecamatan=$this->input->post("kecamatan");
                        $website=$this->input->post("website");
                        $fasilitas=$this->input->post("fasilitas");
                        $this->wisata->tambah($nama, $alamat,$latlong,$jenis, 0, $harga, $foto1, $foto2, $foto3,$kecamatan, $website, $fasilitas);
                        $this->FotoSatu();
                        $this->FotoDua();
                        $this->FotoTiga();
                        redirect(admin("wisata"));
                }
                $this->path("wisata","tambah", ["title" => $title[1]],   $data);
           break;
           case "edit":
                if(isset($_POST["batal"])){
                    redirect(admin("wisata"));
                }
                $this->path("wisata","edit",["title" => $title[2]],  $data);
           break;
           case "detail":
                $this->path("wisata","detail", ["title" => $title[3]], $data);
           break;
           case "hapus":
                $this->wisata->hapus($id);
                redirect(admin("wisata"));
            break;
        }
      
    }
    public function kecamatan($pages="index", $id=0){
        $this->load->model("Kecamatan_model", "kecamatan");    
        $title=["Daftar Kecamatan", "Tambah Data Kecamatan", "Edit Data Kecamatan"];
        $data=["kecamatan" => $this->kecamatan->getAll(), "detail" => $this->kecamatan->getById($id)];
        switch($pages){
                case "index":
                     $this->path("kecamatan","index", ["title" => $title[0]], $data);
                break;
                case "tambah":
                     if(isset($_POST["batal"])){
                         redirect(admin("kecamatan"));
                     }elseif(isset($_POST["tambah"])){
                        $nama=$this->input->post("nama");
                        $this->kecamatan->tambah($nama);
                        redirect(admin("kecamatan"));
                     }
                     $this->path("kecamatan","tambah", ["title" => $title[1]],  $data);
                break;
                case "edit":
                    if(isset($_POST["batal"])){
                        redirect(admin("kecamatan"));
                     }elseif(isset($_POST["simpan"])){
                        $id=$this->input->post("idEdit");
                        $nama=$this->input->post("nama");
                        $this->kecamatan->edit($id,$nama);
                        redirect(admin("kecamatan"));
                     }
                     $this->path("kecamatan","edit",["title" => $title[2]],  $data);
                break;
                case "hapus":
                    $this->kecamatan->hapus($id);
                    redirect(admin("kecamatan"));
                break;
        }
        
    }
    public function jenis_wisata($pages="index", $id=0){
        $title=["Daftar Jenis Wisata", "Tambah Data Jenis Wisata", "Edit Data Jenis Wisata"];
        $this->load->model("Jenis_model", "jenis");    
        $data=["jenis" => $this->jenis->getAll(), "detail" => $this->jenis->getById($id)];
        switch($pages){
                case "index":
                     $this->path("jenis_wisata","index", ["title" => $title[0]], $data);
                break;
                case "tambah":
                    if(isset($_POST["batal"])){
                        redirect(admin("jenis_wisata"));
                    }elseif(isset($_POST["tambah"])){
                       $nama=$this->input->post("nama");
                       $this->jenis->tambah($nama);
                       redirect(admin("jenis_wisata"));
                    }
                    $this->path("jenis_wisata","tambah", ["title" => $title[1]],  $data);
                break;
                case "edit":
                    if(isset($_POST["batal"])){
                        redirect(admin("jenis_wisata"));
                     }elseif(isset($_POST["simpan"])){
                        $id=$this->input->post("idEdit");
                        $nama=$this->input->post("nama");
                        $this->jenis->edit($id, $nama);
                        redirect(admin("jenis_wisata"));
                     }
                     $this->path("jenis_wisata","edit",["title" => $title[2]],  $data);
                break;
                case "hapus":
                    $this->jenis->hapus($id);
                    redirect(admin("jenis_wisata"));
                break;
        }
    }
    public function users($pages="index", $id=0){
        $this->load->model("Account_model", "account");
        $title=["Daftar Users", "Tambah Users", "Edit Data Jenis Wisata","Info Users"];
        $data=["users" => $this->account->getAll(), "detail" => $this->account->getById($id)];
        switch($pages){
                case "index":
                     $this->path("users","index", ["title" => $title[0]], $data);
                break;
                case "tambah":
                    if(isset($_POST["batal"])){
                        redirect(admin("users"));
                     }
                     $this->path("users","tambah",["title" => $title[2]],  $data);
                break;
                case "edit":
                    if(isset($_POST["batal"])){
                        redirect(admin("users"));
                     }
                     $this->path("users","edit",["title" => $title[2]],  $data);
                break;
                case "detail":
                     $this->path("users","detail",["title" => $title[3]],  $data);
                break;
        }
       
    }
    public function booking(){
        $data=[];
        $this->path("booking","index", ["title" => "Daftar Pengunjung"], $data);
    }
    public function ulasan($pages="index"){
        $this->load->model("Ulasan_model", "ulasan");
        $data=["ulasan" => $this->ulasan->getAll()];
        $this->path("ulasan","index", ["title" => "Daftar Ulasan"], $data);
    }
    public function fotoSatu(){
        $config['upload_path']          = "/xampp/htdocs/wisatadepok/assets/images/wisata/";
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1300;

        $files1=explode(".",$_FILES["foto1"]["name"]);
        $ext1=end($files1);
        $foto1=time()."-".$files1[0].".".$ext1;
        $config["file_name"]=$foto1;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto1');
        $this->upload->data();
    }
    public function fotoDua(){
        $config['upload_path']          = "/xampp/htdocs/wisatadepok/assets/images/wisata/";
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1300;

        $files2=explode(".",$_FILES["foto2"]["name"]);
        $ext2=end($files2);
        $foto2=time()."-".$files2[0].".".$ext2;
        $config["file_name"]=$foto2;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto2');
        $this->upload->data();
    }
    public function fotoTiga(){
        $config['upload_path']          = "/xampp/htdocs/wisatadepok/assets/images/wisata/";
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1300;

        $files3=explode(".",$_FILES["foto3"]["name"]);
        $ext3=end($files3);
        $foto3=time()."-".$files3[0].".".$ext3;
        $config["file_name"]=$foto1;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto3');
        $this->upload->data();
    }


}
?>