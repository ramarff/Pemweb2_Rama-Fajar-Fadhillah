<?php 
class Mata_kuliah extends CI_Controller{
	public function index(){
		$this->load->model('Matakuliah_model','matkul1');
		$this->matkul1->id=1;
		$this->matkul1->nama='Basis Data';
		$this->matkul1->sks='4';
		$this->matkul1->kode='NF001';
	
		$this->load->model('Matakuliah_model','matkul2');
		$this->matkul2->id=2;
		$this->matkul2->nama='Pemrograman Web 2';
		$this->matkul2->sks=3;
		$this->matkul2->kode='NF002';
	
		$this->load->model('Matakuliah_model','matkul3');
		$this->matkul3->id=3;
		$this->matkul3->nama='Bahasa Inggris';
		$this->matkul3->sks='3';
		$this->matkul3->kode='NF003';

		 
		$data=["judul"=>"Mata Kuliah", "mata_kuliah" => [$this->matkul1, $this->matkul2, $this->matkul3]];
		$this->load->view("templates/header", $data);
		$this->load->view("mata-kuliah/index", $data);
		$this->load->view("templates/footer", $file="matkul");
	}

	
}


 ?>