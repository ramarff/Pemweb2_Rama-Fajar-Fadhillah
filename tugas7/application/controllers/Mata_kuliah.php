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
		$list_matkul=[$this->matkul1, $this->matkul2, $this->matkul3];
		if(isset($_POST["tambah"] )){
			$this->load->model('Matakuliah_model','matkul4');
			$this->matkul4->id=3;
			$this->matkul4->nama=$this->input->post("matkul");
			$this->matkul4->sks=$this->input->post("sks");
			$this->matkul4->kode=$this->input->post("kode");
			array_push($list_matkul, $this->matkul4);
		}

		 
		$data=["judul"=>"Mata Kuliah", "mata_kuliah" => $list_matkul];
		$this->load->view("templates/header", $data);
		$this->load->view("mata-kuliah/index", $data);
		$this->load->view("templates/footer", $file="matkul");
	}

	
}


 ?>