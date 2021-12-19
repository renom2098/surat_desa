<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_surat extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('m_pengSurat', 'model');
	}

	function _templateTop() {
		$this->load->view('peng_surat_template/header');
		$this->load->view('peng_surat_template/sidebar');
	}

	function _templateBottom(){
		$this->load->view('peng_surat_template/footer');
	}

	public function index(){
		$this->_templateTop();
		$this->load->view('peng_surat/home');
		$this->_templateBottom();
	}

	public function status_surat(){
		$data["data"]=$this->model->get_dataSurat();
		$this->_templateTop();
		$this->load->view('peng_surat/status_surat', $data);
		$this->_templateBottom();
	}

	public function insert_dataSurat(){
        $this->model->insert_dataSurat();
        redirect("pengajuan_surat");
    }

    public function viewEditDataSurat($id){
    	$data["dataStatus"]=$this->model->status_surat();
    	$data["data"]=$this->model->get_dataSuratByID($id);
		$this->_templateTop();
        $this->load->view('peng_surat/v_editData', $data);
        $this->_templateBottom();
    }

    public function update_dataSurat(){
        $this->model->update_dataSurat();
        redirect("pengajuan_surat/status_surat");
    }

}