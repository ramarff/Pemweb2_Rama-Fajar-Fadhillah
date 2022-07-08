<?php
class Layanan extends CI_Controller{
    public function index(){
        $data=["title" => "Layanan", "user" => "rama"];
        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/layouts/navbar');
        $this->load->view('frontend/wisata/services');
		$this->load->view('frontend/layouts/partner');
        $this->load->view('frontend/layouts/footer');
    }
}
?>