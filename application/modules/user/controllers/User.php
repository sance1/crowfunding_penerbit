<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		if(!empty($this->session->userdata("user"))) {
            redirect("");
        } else {
            $this->load->view("user/login");
        }
	}
	public function login(){
		if(!empty($this->session->userdata("user"))) {
            redirect("");
        } else {
            $this->load->view("user/login");
        }
	}
	
	public function profil_pengguna(){
		if(!empty($this->session->userdata("user"))) {
			$this->db->where("name", "Untuk di Perhatikan");
            $this->load->view("user/profil_pengguna");
        } else {
            redirect("home");
        }
	}
	public function histori_dana(){
		if(!empty($this->session->userdata("user"))) {
			$this->db->where("name", "Untuk di Perhatikan");
            $this->load->view("user/histori_dana");
        } else {
            redirect("home");
        }
	}
	public function logout() {
        $this->session->sess_destroy();
        redirect("user/login");
    }
    
	public function verifikasi_penerbit(){
		if(!empty($this->session->userdata("user"))) {
			if($this->session->userdata("user")->status_verify_send == 0){
				$this->db->where("id_penerbit", $this->session->userdata("user")->id);
				$GetPenerbit = $this->db->get("tb_verifikasi_penerbit")->result();
				$this->load->view("user/verifikasi_penerbit", array(
		            "penerbit" => $GetPenerbit
		        ));
			} else {
        		$this->session->sess_destroy();
				redirect("");
			}
        } else {
            redirect("");
        }
	}

	public function lupa_password(){
		if(!empty($this->session->userdata("user"))) {
            redirect("");
        } else {
            $this->load->view("user/lupa_password");
        }
	}
	public function reset_password(){
		$code = $_GET["code"];
		$this->db->where("code", $code);
		$this->db->where("status", 0);
		$this->db->where("expired_at >=", date("Y-m-d H:i:s"));
		$GetResetPassword = $this->db->get("tb_reset_password")->result();
      	if(!empty($GetResetPassword)) {
      		// $this->db->where("id", $GetResetPassword[0]->id_penerbit);
      		$this->load->view("user/reset_password", array(
	            "id_user" => $GetResetPassword[0]->id_penerbit
	        ));
      	} else {
      		redirect("");
      	}
	}
}