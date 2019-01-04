<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// is_login();
		// $this->load->model('global/M_global', 'global_mdb');
		// $this->load->model('beranda/Beranda_model', 'mdb0');
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
		$this->template->load('template/template', 'beranda/beranda', $data);
		// echo CI_VERSION;
	}
}
?>
