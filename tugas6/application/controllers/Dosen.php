<?php 	
class Dosen extends CI_Controller{
	public function index(){
		$this->load->model('Dosen_model','dosen1');
		$this->dosen1->id=1;
		$this->dosen1->nidn='12001';
		$this->dosen1->nama='Sirojul Munir';
		$this->dosen1->gender='L';
		$this->dosen1->pendidikan='Teknik Informatika';
	
		$this->load->model('Dosen_model','dosen2');
		$this->dosen2->id=2;
		$this->dosen2->nidn="12002";
		$this->dosen2->nama='Reza Rahadian';
	 	$this->dosen2->gender='L';
		$this->dosen2->pendidikan='Teknik Nuklir';
	
		$this->load->model('Dosen_model','dosen3');
		$this->dosen3->id=3;
		$this->dosen3->nidn='12002';
		$this->dosen3->nama='Tifanny Nabrian';
		$this->dosen3->gender='P';
		$this->dosen3->pendidikan='Sistem Informasi';


		$data=["judul"=>"Daftar Dosen", "dosen" => [$this->dosen1, $this->dosen2, $this->dosen3]];
		$this->load->view("templates/header", $data);
		$this->load->view("dosen/index");
		$this->load->view("templates/footer", $file="dosen");
	}
}


 ?>