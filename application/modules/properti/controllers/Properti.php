<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properti extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->foglobal->CheckSessionLogin();
	}
	public function detail(){
		$GetBookmark = [];
		if($this->session->userdata("user")){
			$this->db->where("id_pemodal", $this->session->userdata("user")->id);
			$this->db->where("id_properti", $_GET["id"]);
			$GetBookmark = $this->db->get("tb_bookmark")->result();
			$GetBookmark = $GetBookmark[0];
		}
		$this->db->where("id", $_GET["id"]);
		$GetProperti = $this->db->get("v_properti")->result();
     	$this->db->where("id", $_GET["id"]);
     	$param["total_view"] = (int)$GetProperti[0]->total_view + 1;
	    $this->db->update("tb_properti", $param);
        $this->load->view("properti/detail", array(
            "properti" => $GetProperti[0],
            "bookmark" => $GetBookmark
        ));
	}
	public function tambah(){
        $this->load->view("properti/tambah");
	}
	public function edit(){
		$this->db->where("id", $_GET["id"]);
		$this->db->where("id_penerbit", $this->session->userdata("user")->id);
		$GetProperti = $this->db->get("v_properti")->result();

		$this->db->where("id_properti", $_GET["id"]);
		$GetDokumen = $this->db->get("tb_properti_dokumen")->result();

		$this->db->where("id_properti", $_GET["id"]);
		$GetGrafik = $this->db->get("tb_properti_progres")->result();

        $this->load->view("properti/edit", array(
            "properti" => $GetProperti[0],
            "dokumen" => $GetDokumen,
            "grafik" => $GetGrafik
        ));
	}
}