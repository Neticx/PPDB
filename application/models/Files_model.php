<?php
class Files_model extends CI_Model {
    // var $tabel = 'kartu'; //buat variabel tabel
 
    function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from('kartu');
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert('kartu', $data);
       return TRUE;
    }
}
?>
