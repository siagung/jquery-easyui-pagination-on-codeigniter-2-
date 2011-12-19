<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * barang_ctl
 *
 * Created on Mar 19, 2011, 10:41:15 AM
 */

/**
 *
 * @author agung
 */

class Barang_ctl extends CI_Controller {
        private $pagesize = 20;
	function __construct()
	{
		parent::__construct();
                $this->load->database();
		$this->load->model('barang_model');
                $this->load->helper(array('url','form','rupiah'));
	}

	 function index() {
        $this->barang_model->limit = 5;
        $this->barang_model->offset = $this->uri->segment(3);

        $result['query'] = $this->barang_model->listBarang();
        $result['numrec'] = $this->barang_model->numRec();

        $this->load->view('barang_view', $result);
    }

    function search_barang() {
        if (isset($_POST['descp_msg']) && $_POST['descp_msg'] != NULL) {
            $vDescp = $_POST['descp_msg'];
        }
        else
            $vDescp = '';

        if (isset($_POST['pageNumber']) && $_POST['pageNumber'] != NULL) {
            $idoffset = $_POST['pageNumber'] - 1;
        }
        else
            $idoffset=0;

        $this->barang_model->limit =  $this->pagesize;
        $this->barang_model->offset = $idoffset *  $this->pagesize;
        $result['offset'] = $this->barang_model->offset;
        $result['rec'] = $this->barang_model->numRec_page($vDescp);
        $result['query'] = $this->barang_model->listBarang_page($vDescp);

        $this->load->view('barang_view_page', $result);
    }
}

/* End of file barang_ctl */