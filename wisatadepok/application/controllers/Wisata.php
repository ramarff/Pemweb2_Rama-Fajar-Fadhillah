<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	public function index()
	{
		$this->load->model("Wisata_model", "wisata");
		$data=[
			"title" => "Wisata Depok",
			"kolam_renang" => $this->wisata->getTempatWisata("Kolam Renang"),
			"taman_kota" => $this->wisata->getTempatWisata("Taman Kota"),
			"pemancingan" => $this->wisata->getTempatWisata("Pemancingan"),
			"situ" => $this->wisata->getTempatWisata("sungai"),
			"tempat_ibadah" => $this->wisata->getTempatWisata("tempat_ibadah"),
			"agrowisata" => $this->wisata->getTempatWisata("agrowisata"),
		];
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/layouts/navbar');
		$this->load->view('frontend/wisata/index');
		$this->load->view('frontend/layouts/partner');
		$this->load->view('frontend/layouts/footer');
	}
	public function detail($jenis, $nama){
		$this->load->model("Wisata_model", "wisata");
		$nama=(strpos($nama, "%20")) ?  implode(" ",explode("%20",$nama)) : $nama;
		$data=["title" => $nama, "tempat_wisata" => $this->wisata->getByNama($nama), 	"komen" => $this->wisata->getAllKomen()];
		// echo $nama;
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/layouts/navbar');
		$this->load->view('frontend/wisata/detail');
		$this->load->view('frontend/layouts/partner');
		$this->load->view('frontend/layouts/footer');

	}
	public function booking($nama)
	{
		$this->load->model("Wisata_model", "wisata");
		$nama=(strpos($nama, "%20")) ?  implode(" ",explode("%20",$nama)) : $nama;
		$data=["title" => "Tentang Kami",  "tempat_wisata" => $this->wisata->getByNama($nama)];
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/layouts/navbar');
		$this->load->view('frontend/wisata/booking');
		$this->load->view('frontend/layouts/partner');
		$this->load->view('frontend/layouts/footer');
	}

}
