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
		$list_dosen=[$this->dosen1, $this->dosen2, $this->dosen3];
		if(isset($_POST["tambah"]  )){
			$this->load->model('Mahasiswa_model','dosen4');
			$this->dosen4->nidn=$this->input->post("nidn");
			$this->dosen4->nama=$this->input->post("nama");
			$this->dosen4->gender=$this->input->post("jk");
			$this->dosen4->pendidikan=$this->input->post("ipk");
			array_push($list_dosen, $this->dosen4);
		}

		$data=["judul"=>"Daftar Dosen", "dosen" => $list_dosen];
		$this->load->view("templates/header", $data);
		$this->load->view("dosen/index");
		$this->load->view("templates/footer", $file="dosen");
	}
}


 ?>