<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
	var $table = 'vw_pasien'; //nama tabel dari database
    // var $column_order = array(null, 'user_nama','user_email','user_alamat'); //field yang ada di table user
    // var $column_order = array(null, 'user_nama','user_email','user_alamat'); //field yang ada di table user
    var $column_order = array(null, 'SHORT_KD_PASIEN','CMLAMA','NAMA_LENGKAP','KK','TGL_LAHIR' ,'UMUR','ALAMAT','NO_KK','NO_PENGENAL','KD_PASIEN'); //field yang ada di table user
    var $column_search = array('SHORT_KD_PASIEN'); //field yang diizin untuk pencarian 
    var $order = array('KD_PASIEN'=> 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function add_familyFolder()
    {
        $datafamily = array(
							'KD_FAMILY_FOLDER' => $this->get_maxKodeFamilyFolder(),
							'NO_KK' => $this->input->post('no_kk'),
							'NAMA_KK' => $this->input->post('nama_kk'),
							// 'ninput_oleh' => $this->session->userdata('user_name'),
							'ninput_oleh' => "billi",
							'ninput_tgl' => date("Y-m-d")
						);
		return $this->db->insert('family_folders',$datafamily);
    }
    public function get_maxKodeFamilyFolder()
    {
       $kdfamily = $this->db->query("select max(KD_FAMILY_FOLDER) as total from family_folder")->row();
			return $kdfamily = $kdfamily->total+1;
    }
}
