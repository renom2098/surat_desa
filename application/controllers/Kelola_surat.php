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

    /*public function aksi_uploadSurat(){
		$config['upload_path']          = './file_surat/';
		$config['allowed_types']        = 'pdf|doc|docx';
		$config['max_size']             = 3000;
		$config['encrypt_name']			= FALSE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file_surat_dsd'))
		{
				echo "gagal!";
		}
		else
		{
			$nomor_kk = $this->input->post('nomor_kk');
            $nomor_nik = $this->input->post('nomor_nik');
            $dari = $this->input->post('dari');
            $agama = $this->input->post('agama');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $pekerjaan = $this->input->post('pekerjaan');
            $alamat = $this->input->post('alamat');
            $nama_surat = $this->input->post('nama_surat');
            $deskripsi_surat = $this->input->post('deskripsi_surat');
            $status_surat = $this->input->post('status_surat');
            $komentar_surat = $this->input->post('komentar_surat');

            $file = $this->upload->data();
            $file_surat_dsd = $file['file_name'];

            $this->model->update_dataSurat(array(
                'nomor_kk' => $nomor_kk,
                'nomor_nik' => $nomor_nik,
                'dari' => $dari,
                'agama' => $agama,
                'jenis_kelamin' => $jenis_kelamin,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'pekerjaan' => $pekerjaan,
                'alamat' => $alamat,
                'nama_surat' => $nama_surat,
                'deskripsi_surat' => $deskripsi_surat,
                'status_surat' => $status_surat,
                'komentar_surat' => $komentar_surat,

                'file_surat_dsd' => $file_surat_dsd
                ), array('id' => $this->input->post('id')
                    )
            );
			redirect('kelola_surat');
		}
	}*/

	public function aksi_upload(){
		$config['upload_path']          = './file_surat/';
		$config['allowed_types']        = 'xls|xlsx|pdf|doc|docx';
		$config['max_size']             = 5000;
		$config['encrypt_name']			= FALSE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('file_surat'))
		{
			echo "gagal!";
		}
		else
		{
			$data['file_surat_dsd'] = $this->upload->data("file_name");
		}
	}

	public function update_dataSurat(){
        $this->model->update_dataSurat();
        redirect("kelola_surat");
    }

}