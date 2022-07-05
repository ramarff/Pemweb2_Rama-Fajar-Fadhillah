<?php
class Prodi extends CI_Controller{
        public function index(){
            $this->load->model("Prodi_model","prodi");
            $data=["title" => "Prodi Kampus", "prodi" => $this->prodi->getAllProdi()];
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar');   
            $this->load->view('prodi/index', $data);
            $this->load->view('layouts/footer');
        }

        public function addProdi(){
            $this->load->model("Prodi_model","prodi");
            $data=["title" => "Prodi Kampus"];
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar');   
            $this->load->view('prodi/add', $data);
            $this->load->view('layouts/footer');
        }
        public function edit(){
            $this->load->model("Prodi_model","prodi");
            $data=["title" => "Prodi Kampus"];
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar');   
            $this->load->view('prodi/add', $data);
            $this->load->view('layouts/footer');
        }
}

?>