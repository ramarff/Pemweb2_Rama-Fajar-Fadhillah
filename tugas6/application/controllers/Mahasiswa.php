<?php 
class Mahasiswa extends CI_Controller{

	public function index(){
		$this->load->model('Mahasiswa_model','mhs1');
		$this->mhs1->id=1;
		$this->mhs1->nim='010001';
		$this->mhs1->nama='Rama Fajar Fadhillah';
		$this->mhs1->gender='L';
		$this->mhs1->ipk=3.85;

		$this->load->model('Mahasiswa_model','mhs2');
		$this->mhs2->id=2;
		$this->mhs2->nim='010002';
		$this->mhs2->nama='Fatimah Aznur';
		$this->mhs2->gender='P';
		$this->mhs2->ipk=3.35;

		$this->load->model('Mahasiswa_model','mhs3');
		$this->mhs3->id=3;
		$this->mhs3->nim='010003';
		$this->mhs3->nama='Muhammad Fikri';
		$this->mhs3->gender='P';
		$this->mhs3->ipk=3.70;

		$data=["judul"=>"Daftar Mahasiswa", "mahasiswa" => [$this->mhs1, $this->mhs2, $this->mhs3]];
		$this->load->view("templates/header", $data);
		$this->load->view("mahasiswa/index", $data);
		$this->load->view("templates/footer", $file="mahasiswa");
	}

	
}


 ?>