<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_surat extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('m_kelSurat', 'model');
	}

	function _templateTop() {
		$this->load->view('kel_surat_template/header');
		$this->load->view('kel_surat_template/sidebar');
	}

	function _templateBottom(){
		$this->load->view('kel_surat_template/footer');
	}

	public function index(){
		$data["data"]=$this->model->get_dataSurat();
		$this->_templateTop();
		$this->load->view('kel_surat/home', $data);
		$this->_templateBottom();
	}

	public function viewEditDataSurat($id){
    	$data["dataStatus"]=$this->model->status_surat();
    	$data["data"]=$this->model->get_dataSuratByID($id);
		$this->_templateTop();
        $this->load->view('kel_surat/v_formEditSurat', $data);
        $this->_templateBottom();
    }

    public function aksi_upload(){
        $status_surat = $this->input->post('status_surat');
        $komentar_surat = $this->input->post('komentar_surat');
        $file_surat_dsd = $this->input->post('file_surat_dsd');


        $config['upload_path']          = './data_surat/';
        $config['allowed_types']        = 'docx|doc|pdf';
        $config['max_size']             = 10000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if( ! $this->upload->do_upload('file_surat_dsd')){
        	/*$error = array('error' => $this->upload->display_errors());
            echo '<div class="alert alert-danger">'.$error['error'].'</div>';
            die();*/
            $file_surat_dsd=$this->upload->data('file_name');
        	$data = array(
        	'status_surat' => $status_surat,
        	'komentar_surat' => $komentar_surat,
        	'file_surat_dsd' => $file_surat_dsd
        	);

	        $this->model->update_dataSurat($data);
	        redirect("kelola_surat");

        } else {
        	$file_surat_dsd=$this->upload->data('file_name');
        	$data = array(
        	'status_surat' => $status_surat,
        	'komentar_surat' => $komentar_surat,
        	'file_surat_dsd' => $file_surat_dsd
        	);

	        $this->model->update_dataSurat($data);
	        redirect("kelola_surat");
        }
	}

	public function delete_dataSurat($id){
        $this->model->delete_dataSurat($id);
        redirect("kelola_surat");
    }

}