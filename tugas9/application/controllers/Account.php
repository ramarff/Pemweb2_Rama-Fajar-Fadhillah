<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller {
	public function login()
	{
        $this->load->model("Account_model", "user");
		$data=["title" => "Login", ""];
		$this->load->view('layouts/header', $data);
		$this->load->view('account/login');
		$this->load->view('layouts/footer');
        if(isset($_POST["masuk"])){
            $username=$this->input->post("username");
            $password=$this->input->post("password");
            
            $row=$this->user->login($username, $password);
            if(isset($row)){
                $this->session->set_userdata("USERNAME", $row->name);
                $this->session->set_userdata("ROLE", $row->role);
                redirect(base_url("mahasiswa"));
            }else{
                redirect(base_url("account/login"));
            }
            // redirect(base_url());
        }
	}
    public function register()
	{
        $this->load->model("Account_model", "user");
		$data=["title" => "Buat Akun"]; 
		$this->load->view('layouts/header', $data);
		$this->load->view('account/register');
		$this->load->view('layouts/footer');

        if(isset($_POST["daftar"])){
           $username=$this->input->post("username");
           $email=$this->input->post("email");
           $password=$this->input->post("password");
           $this->user->register($username, $email, $password, $role="admin");
           redirect(base_url("account/login"));
        }
        
	}
    public function logout(){
        $this->session->unset_userdata("USERNAME");
        $this->session->unset_userdata("ROLE", $row->role);
        redirect(base_url("account/login"));
    }
}
?>