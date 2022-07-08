<?php
class Account extends CI_Controller{
    private function path($file, $title){
        $this->load->view("backend/layouts/header", $title);
        $this->load->view("backend/account/$file");
        $this->load->view("backend/layouts/footer");
    }
    public function login(){
        $data=["title" => "Masuk"];
        $this->load->model("Account_model", "user");
        $this->load->view('frontend/account/header', $data);
		$this->load->view('frontend/account/login');
        $this->load->view('frontend/account/footer');
        if(isset($_POST["masuk"])){
            $username=$this->input->post("username");
            $password=$this->input->post("password");
            $row=$this->user->login($username, $password);
            if(isset($row) ){
                $this->session->set_userdata("user_public", $row->username);
                $this->session->set_userdata("role", $row->role);
                redirect(base_url(""));
            }
            else{                  
                redirect(base_url("account/login/"));
            }
        }

    }
    public function register(){
        $data=["title" => "Buat Akun"];
        $this->load->model("Account_model", "user");    
        $this->load->view('frontend/account/header', $data);
		$this->load->view('frontend/account/register');
        $this->load->view('frontend/account/footer');
        if(isset($_POST["daftar"])){
            $username=$this->input->post("username");
            $email=$this->input->post("email");
            $password=$this->input->post("password");
            $this->user->register($username, $email, $password, $role="publik");
            redirect(base_url("account/login"));
        }

    }
    public function admin($pages){
         $this->load->model("Account_model", "user");
         $error=[True, False];
         switch($pages){
            case "login":
                if(isset($_POST["masuk"])){
                    $username=$this->input->post("username");
                    $password=$this->input->post("password");
                    $row=$this->user->login($username, $password);
                    if(isset($row) ){
                        $this->session->set_userdata("USERNAME", $row->username);
                        $this->session->set_userdata("ROLE", $row->role);
                        redirect(admin("wisata"));
                    }elseif($row->role !== "administrator"){
                        redirect(base_url("account/admin/login/"));
                    }
                    else{                  
                        redirect(base_url("account/admin/login/"));
                    }
                }
                $this->path("login", ["title" => "Login"]);
            break;
            case "register":
                    if(isset($_POST["daftar"])){
                        $username=$this->input->post("username");
                        $email=$this->input->post("email");
                        $password=$this->input->post("password");
                        $this->user->register($username, $email, $password, $role="administrator");
                        redirect(base_url("account/admin/login"));
                    }
                    $this->path("register", ["title" => "Buat Akun"],);
            break;
            case "logout":
                $this->session->unset_userdata("USERNAME");
                $this->session->unset_userdata("ROLE", $row->role);
                $this->session->set_userdata("user_public", $row->username);
                $this->session->set_userdata("role", $row->role);
                redirect(base_url("account/admin/login"));
         }
    }
}
?>