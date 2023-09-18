<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->foglobal->CheckSessionLogin();
      	$this->user = $this->session->userdata("user");
	}
	public function index()
	{
		$this->db->where("id_penerbit", $this->user->id);
		$GetProperti = $this->db->get("v_properti")->result();
		if(!empty($GetProperti)){
			$this->db->where("id_properti", $GetProperti[0]->id);
			$GetTransaksi = $this->db->get("v_transaksi")->result();
		} else {
			$GetTransaksi = "";
		}
        $this->load->view("home/index", array(
            "properti" => $GetProperti,
            "transaksi" => $GetTransaksi
        ));
	}
}