<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * barang_model
 *
 * Created on Feb 21, 2011, 10:57:01 PM
 */

/**
 *
 * @author agung
 */
class Barang_model extends CI_Model {

    public $limit;
    public $offset;

    function __construct() {
        parent::__construct();
    }

    public function listBarang() {
        $query = $this->db->limit($this->limit, $this->offset)
                        ->get('barang');
        return $query->result_array();
    }

    public function listBarang_page($descp) {
        $query = $this->db->select('plu,descp,satuan,harga')
                        ->from('barang')
                        ->like('descp', $descp)
                        ->get('', $this->limit, $this->offset);
        return $query->result_array();
    }

     public function numRec() {
        $result = $this->db->from('barang');
        return $result->count_all();
    }

    public function numRec_page($descp) {
        $result = $this->db->like('descp', $descp)
                        ->from('barang')
                        ->count_all_results();
        return $result;
    }
}

/* End of file barang_model */