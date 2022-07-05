<?php
class Mahasiswa extends CI_Controller{

    public function index(){
        $this->load->model("Mahasiswa_model","mahasiswa");
        $data=["title" => "Daftar Mahasiswa", "mahasiswa" => $this->mahasiswa->getAllMahasiswa()];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layouts/footer');
    }

    public function detail(){
        $nim=$this->input->get("nim");
        $this->load->model("Mahasiswa_model", "mahasiswa");
        $data=["title" => "Daftar Mahasiswa", "mahasiswa" => $this->mahasiswa->findByNIM($nim)];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah_mahasiswa(){
        $this->load->model("Mahasiswa_model", "mahasiswa");
        $data=["title" => "Tambah Mahasiswa", "jurusan" => $this->mahasiswa->getAllJurusan()];
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('layouts/footer');
    }

    public function saveData(){
        $this->load->model("Mahasiswa_model", "mahasiswa");
        $nim=$this->input->post("nim");
        $nama=$this->input->post("nama");
        $gender=$this->input->post("jk");
        $tmp_lahir=$this->input->post("tmp_lahir");
        $tgl_lahir=$this->input->post("tgl_lahir");
        $prodi_kode=$this->input->post("prodi");
        $alamat=$this->input->post("alamat");
        $nimEdit=$this->input->post("nimEdit");
       
        $data=[$nim, $nama, $gender, $tmp_lahir,$tgl_lahir,$prodi_kode, $alamat];

        if (isset($_POST["batal"])){
            redirect(base_url()."mahasiswa");
        }else if(isset($_POST["edit"])){
            array_push($data, $nimEdit);
            $this->mahasiswa->update($data);
        }else{
            $this->mahasiswa->save($data);
        }
        redirect(base_url()."/mahasiswa", "refresh");

    }

    public function edit(){
        $nim=$this->input->get("nim");
        $this->load->model("Mahasiswa_model","mahasiswa");
        $data=["title" => "Daftar Mahasiswa", "mahasiswa" => $this->mahasiswa->findByNIM($nim),  "jurusan" => $this->mahasiswa->getAllJurusan()];
        $this->load->view('layouts/header', $data);
        // $this->load->view('layouts/navbar');
        // $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function hapus(){
        $nim=$this->input->get("nim");
        $this->load->model("Mahasiswa_model","mahasiswa");
        $this->mahasiswa->hapus($nim);
        redirect(base_url()."/mahasiswa", "refresh");
    }

    public function upload()
    {
            $this->load->model("Mahasiswa_model", "mahasiswa");
            $config['upload_path']          = "/xampp/htdocs/jadwal_skripsi/img/";
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 1024;
            $config['max_height']           = 1300;

            $foto=explode(".", $_FILES["foto"]["name"]);
            $ext=end($foto);
            $nim=explode("-", $this->input->post("namePhoto"))[1];
            $new_name=time()."-".$this->input->post("namePhoto").".".$ext;
            $config["file_name"]=$new_name;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->load->view('mahasiswa/detail', $error);
                    var_dump(print_r($error));
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $data=[$new_name, $nim];
                    $this->mahasiswa->updateFoto($data);
                    redirect(base_url()."/mahasiswa/detail?nim=$nim");

            }
    }

}

?>