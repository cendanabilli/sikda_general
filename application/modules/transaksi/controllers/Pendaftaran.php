<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// is_login();
		// $this->load->model('global/M_global', 'global_mdb');
		$this->load->model('transaksi/Pendaftaran_model', 'mdb0');
	}

	public function index()
	{
		$data = [];

		// $conf = [
		// 	'select' => 'title, is_aktif',
		// 	'table'  => 'tbl_menu',
		// 	'where'  => [
		// 		'title IN (\'Laporan SKP By Pertanyaan\', \'Laporan SKP By Mesin\', \'Laporan Queue\') ' => null
		// 	],
		// ];
		// $menu = $this->global_mdb->get($conf);
		// $data['menu'] = rebuild_req($menu, 'title', 'is_aktif');

		// if ($data['menu']['Laporan SKP By Pertanyaan'] == 'y' || $data['menu']['Laporan SKP By Mesin'] == 'y'){
			// $data['pertanyaan'] = $this->mdb0->get_pertanyaan();
		// }
		$this->template->load('template/template', 'transaksi/v_pendaftaran', $data);
		// echo CI_VERSION;
	}
	/*************************************************************************/
	function getAjaxDataPendaftaran()
    {
        $list = $this->mdb0->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[]=$no;
            $row[]=$field->SHORT_KD_PASIEN;
            $row[]=$field->CMLAMA;
            $row[]=$field->NAMA_LENGKAP;
            $row[]=$field->KK;
            $row[]=$field->TGL_LAHIR;
            $row[]=$field->UMUR;
            $row[]=$field->ALAMAT;
            // $row[]=$field->NO_KK;
            // $row[]=$field->NO_PENGENAL;
            // $row[]=$field->KD_PASIEN;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mdb0->count_all(),
            "recordsFiltered" => $this->mdb0->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    	public function add()
	{
		$data = [];
		$this->template->load('template/template', 'transaksi/v_add_pendaftaran', $data);
		// echo CI_VERSION;
	}
	public function addProcess()
	{
		$insertfamily=$this->mdb0->add_familyFolder();
		$arrayalertflashdata=array();
		if($insertfamily!=1){
			$array=array('color' =>'danger' ,'status'=>'Gagal','message'=>'Error Menyimpan data KK '.$this->db->error()['message'] );
			$arrayalertflashdata[]=$array;
			$this->session->set_flashdata('alert', $arrayalertflashdata);
			redirect(base_url()."transaksi/pendaftaran.html");

		}
		else if($insertfamily==1){
				$array=array('color' =>'success' ,'status'=>'Sukses','message'=>'Sukses Menyimpan data KK' );
		$arrayalertflashdata[]=$array;
		$this->session->set_flashdata('alert', $arrayalertflashdata);
			redirect(base_url()."transaksi/pendaftaran/add.html");
		}
		// print_r($insertfamily);
		// print_r($this->session->flashdata('alert'));
	}
	
}
?>
