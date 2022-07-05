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

			$list_mhs=[$this->mhs1, $this->mhs2];
			if(isset($_POST["tambah"]  )){
				$this->load->model('Mahasiswa_model','mhs3');
				$this->mhs3->nim=$this->input->post("nim");
				$this->mhs3->nama=$this->input->post("nama");
				$this->mhs3->gender=$this->input->post("jk");
				$this->mhs3->ipk=$this->input->post("ipk");
				array_push($list_mhs, $this->mhs3);
			}
			$data=["judul"=>"Daftar Mahasiswa", "mahasiswa" => $list_mhs];
			$this->load->view("templates/header", $data);
			$this->load->view("mahasiswa/index", $data);
			$this->load->view("templates/footer");
		}


	
}


 ?>