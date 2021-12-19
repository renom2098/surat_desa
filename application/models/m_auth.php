<?php

class m_auth extends CI_Model {

	public function _login($username, $password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sar= array('id' => $row->id,
					'username' => $row->username,
					'password' => $row->password,
					'level' => $row->level);
			}
		$this->session->set_userdata($sar);
		$lvl=$this->session->userdata('level');
		if ($lvl == 1) {
			redirect('admin');
		}
		elseif($lvl == 2){
			redirect('kelola_surat');
		}
		elseif($lvl == 3){
			redirect('pengajuan_surat');
		}
		}
		else{
			redirect('auth');
		}
	}

}