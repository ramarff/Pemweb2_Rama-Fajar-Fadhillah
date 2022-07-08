<?php
class About extends CI_Controller{
    public function index(){
        $data=["title" => "Acara", "user" => "rama"];
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/layouts/navbar');
		$this->load->view('frontend/wisata/about');
		$this->load->view('frontend/layouts/footer');
    }
}
?>