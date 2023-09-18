<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	date_default_timezone_set('Asia/Jakarta');

	class Transaksi extends CI_Model {

		public function __construct() {
	      	parent::__construct();
	      	$this->load->database();
	      	$this->user = $this->session->userdata("user");
	      	$this->user_login = $this->session->userdata("user_login");
	    }

	    public function GetTransaksi($param, $disable_page=false){
			$args["search"] = "";
            $return_data["data"] = "";
            $return_data["paging"]["Count"] = "";
            // START SEARCH & FILTER
			if(!empty($param["Search"])) {
				$this->db->where("(
					nama_properti LIKE '%".$param["Search"]."%' OR
					alamat_properti LIKE '%".$param["Search"]."%')"
				, NULL, FALSE);
			}
    		$this->db->where("status_delete", 0);
    		$this->db->where("status_verifikasi", 1);
        	$this->db->where("id_penerbit", $this->user->id);
			if(isset($param["filter"]["jenis"]) and $param["filter"]["jenis"] != "") {
            	$this->db->where("jenis", $param["filter"]["jenis"]);
            	$this->db->group_by("id_properti");
			}
			if(isset($param["filter"]["array_id"]) and !empty($param["filter"]["array_id"])) {
				$this->db->where_not_in("id", $param["filter"]["array_id"]);
			}
            // END SEARCH & FILTER
            if(!empty($param["Sort"])) {
            	$param["Sort"] = explode(" ",trim($param["Sort"]));
            	$this->db->order_by($param["Sort"][0], $param["Sort"][1]);
			}
	    	if(!empty($param["Limit"])) $args["Limit"] = $param["Limit"];
            if(!empty($param["Page"])) $args["Page"] = $param["Page"];
            if(empty($param["Page"])){
            	$args["Limit"] = "10";
            	$args["Page"] = "1";
            }
            if(empty($param["Limit"])){
            	$args["Limit"] = "10";
            }
            if($disable_page == true){
            	$args["Limit"] = "0";
            	$args["Page"] = "0";
            }
            $this->db->limit($args["Limit"], ($args["Limit"]*$args["Page"])-$args["Limit"]);
			if(!empty($param["filter"]["id"])) {
				$this->db->where("id", $param["filter"]["id"]);
				$return_data["data"] = $this->db->get("v_transaksi")->result();
			} else {
				$return_data["data"] = $this->db->get("v_transaksi")->result();
	            // START SEARCH & FILTER 
				if(!empty($param["Search"])) {
					$this->db->where("(
						nama_properti LIKE '%".$param["Search"]."%' OR
						alamat_properti LIKE '%".$param["Search"]."%')"
					, NULL, FALSE);
				}
	    		$this->db->where("status_delete", 0);
	    		$this->db->where("status_verifikasi", 1);
	        	$this->db->where("id_penerbit", $this->user->id);
				if(isset($param["filter"]["jenis"]) and $param["filter"]["jenis"] != "") {
	            	$this->db->where("jenis", $param["filter"]["jenis"]);
            		$this->db->group_by("id_properti");
				}
				if(isset($param["filter"]["array_id"]) and !empty($param["filter"]["array_id"])) {
					$this->db->where_not_in("id", $param["filter"]["array_id"]);
				}
	            // END SEARCH & FILTER
	            $return_data["paging"]["Count"] = count($return_data["data"]);
	            $return_data["paging"]["DataDari"] = ($args["Limit"]*$args["Page"])-$args["Limit"]+1;
	            $return_data["paging"]["DataSampai"] = $return_data["paging"]["DataDari"]+$return_data["paging"]["Count"]-1;
	            $return_data["paging"]["HalKe"] = $args["Page"];
	            $return_data["paging"]["Total"] = $this->db->get("v_transaksi")->num_rows();
	            $return_data["paging"]["InfoPage"] = $return_data["paging"]["DataDari"]." - ".$return_data["paging"]["DataSampai"]." from ".$return_data["paging"]["Total"];
	            if($return_data["paging"]["Count"] != 0 && (int)$args["Limit"] != 0){
	            	$return_data["paging"]["JmlHalTotal"] = ceil($return_data["paging"]["Total"]/(int)$args["Limit"]);
	            } else {
	            	$return_data["paging"]["JmlHalTotal"] = 1;
	            }
	            if((int)$return_data["paging"]["HalKe"] < $return_data["paging"]["JmlHalTotal"]){
	            	$return_data["paging"]["IsNext"] = true;
	            } else {
	            	$return_data["paging"]["IsNext"] = false;
	            }
	            $return_data["paging"]["IsPaging"] = true;
	            if((int)$return_data["paging"]["HalKe"] <= 1){
	            	$return_data["paging"]["IsPrev"] = false;
	            } else {
	            	$return_data["paging"]["IsPrev"] = true;
	            }
			}
			if(!empty($param["Search"])) {
				$this->db->where("(
					nama_properti LIKE '%".$param["Search"]."%' OR
					alamat_properti LIKE '%".$param["Search"]."%')"
				, NULL, FALSE);
			}
    		$this->db->where("status_delete", 0);
    		$this->db->where("status_verifikasi", 1);
        	$this->db->where("id_penerbit", $this->user->id);
			if(isset($param["filter"]["jenis"]) and $param["filter"]["jenis"] != "") {
            	$this->db->where("jenis", $param["filter"]["jenis"]);
			}
			if(isset($param["filter"]["array_id"]) and !empty($param["filter"]["array_id"])) {
				$this->db->where_not_in("id", $param["filter"]["array_id"]);
			}
        	$return_data["data_next"] = $this->db->get("v_transaksi")->result();

        	
            if($disable_page == true){
            	$dana_terpakai = 0;
				$this->db->where("id_penerbit", $this->user->id);
				$GetKelolaDana = $this->db->get("v_kelola_dana")->result();
				if(!empty($GetKelolaDana)) {
					foreach ($GetKelolaDana as $item) {
						$dana_terpakai += (int)$item->total;
					}
				}
				$return_data["dana_terpakai"] = $dana_terpakai;
            }
		    return $return_data;
		}

		public function HtmlTransaksi($param){
		    $rHtml ="";
			$query = $this->GetTransaksi($param);
			$array_id = array();
			if(isset($param["filter"]["array_id"]) and !empty($param["filter"]["array_id"])) {
				foreach ($param["filter"]["array_id"] as $item_id) {
					array_push($array_id, $item_id);
				}
			}
			if(isset($param["filter"]["jenis"]) and $param["filter"]["jenis"] != "") {
				if(!empty($query["data"])) {
					foreach ($query["data"] as $item) {
	                    $total_investasi = 0;
	                    $total_saham = 0;
						foreach ($query["data_next"] as $item_next) {
							if($item->id_properti == $item_next->id_properti){
								$total_investasi += $item_next->nominal;
	                    		$total_saham += $item_next->total_saham;
							}
						}
	                    $harga_per_saham = round($total_investasi/$total_saham);
	                    $keuntungan = ($harga_per_saham*$total_saham)-$total_investasi;

	                    $foto = json_decode($item->foto_properti);
	                    if(empty($foto)){
	                        $foto = "<img style='width: 100%; height:auto;' src='".base_url("/assets/images/default-placeholder.png")."'>";
	                    } else {
	                        $foto = "<img style='width: 100%; height:auto;' src='".$this->config->item("cdn_url")."/".$foto[0]."'>";
	                    }
	                    $rHtml .= "<tr>
									    <td><a href='".base_url()."properti/detail.html?id=".$item->id_properti."'><center style='max-height: 130px; overflow: hidden;'>".$foto."</center></a></td>
									    <td>
									    	<label class='bold'><a href='".base_url()."properti/detail.html?id=".$item->id_properti."'>".$item->nama_properti."</a></label><br><br>
									    	<label>".$item->alamat_properti."</label>
									    	<br><br>
									    	<a href='".base_url()."properti/detail.html?id=".$item->id_properti."' class='btn btn-primary text-white'>Beli Lagi</a>
									    </td>
									    <td class='text-right'>
									    	<label class='mb-1'>Total Investasi : </label><br>
									    	<label class='mb-1'>Rata-Rata Saham : </label><br>
									    	<label class='mb-1'>Total Saham : </label><br>
									    	<label class='mb-1'>Periode Dividen : </label><br>
									    </td>
									    <td class='text-right'>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($total_investasi, true)."</label><br>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($harga_per_saham, true)."</label><br>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($total_saham)."</label><br>
									    	<label class='bold mb-1'>".$item->dividen_period."</label><br>
									    </td>
									</tr>";

									    	/*<a class='btn btn-outline-danger text-danger'>Jual</a>
									    	<label class='mb-1'>ROI : </label><br>
									    	<label class='mb-1'>Keuntungan : </label>
									    	<label class='bold mb-1'>".$item->roi."%</label><br>
									    	<label class='bold text-success mb-1'>".$this->foglobal->rupiah($keuntungan, true)."</label>*/
						array_push($array_id, $item->id);
					}
				} else {
					$rHtml = "<tr><td colspan='4' style='padding: 20px !important;' class='text-center'><span class='badge badge-pill badge-warning text-white p-3'>Tidak ada data</span></td></tr>";
				}
			} else {
				if(!empty($query["data"])) {
					foreach ($query["data"] as $item) {
	                    $foto = json_decode($item->foto_properti);
	                    if(empty($foto)){
	                        $foto = "<img style='width: 100%; height:auto;' src='".base_url("/assets/images/default-placeholder.png")."'>";
	                    } else {
	                        $foto = "<img style='width: 100%; height:auto;' src='".$this->config->item("cdn_url")."/".$foto[0]."'>";
	                    }
	                    $rHtml .= "<tr>
									    <td><a href='".base_url()."properti/detail.html?id=".$item->id_properti."'><center style='max-height: 130px; overflow: hidden;'>".$foto."</center></a></td>
									    <td>
									    	<label class='bold'><a href='".base_url()."properti/detail.html?id=".$item->id_properti."'>".$item->nama_properti."</a></label><br><br>
									    	<label>".$item->alamat_properti."</label><br>
									    	<label class='mt-1'>".$item->jenis." berhasil</label><br>
									    	<label class='mt-1'>".date("d M Y H:i", strtotime($item->tgl))."</label>
									    </td>
									    <td class='text-right'>
									    	<label class='mb-1'>Total Saham : </label><br>
									    	<label class='mb-1'>Harga Saham : </label><br>
									    	<label class='mb-1'>".$item->jenis." : </label><br>
									    	<label class='mb-1'>Biaya Administrasi : </label><br>
									    	<label class='mb-1'>Total Pembayaran : </label><br>
									    </td>
									    <td class='text-right'>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($item->total_saham)."</label><br>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah((int)($item->nominal/$item->total_saham), true)."</label><br>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($item->nominal, true)."</label><br>
									    	<label class='bold text-danger mb-1'>".$this->foglobal->rupiah($item->biaya_administrasi, true)."</label><br>
									    	<label class='bold mb-1'>".$this->foglobal->rupiah($item->total_transaksi, true)."</label><br>
									    </td>
									</tr>";
						array_push($array_id, $item->id);
					}
				} else {
					$rHtml = "<tr><td colspan='4' style='padding: 20px !important;' class='text-center'><span class='badge badge-pill badge-warning text-white p-3'>Tidak ada data</span></td></tr>";
				}
			}
			$Paging = (!empty($query["paging"])) ? $query["paging"] : "";
			$ReturnData = ["lsdt" => $rHtml, "paging" => $Paging, "array_id" => $array_id];
            return json_encode($ReturnData);
		}
	}
