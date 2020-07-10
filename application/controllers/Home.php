<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_anggota');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
	} 


	public function index()
	{
		$data['anggota'] = $this->m_anggota->data_anggota()->result();

		$this->load->view('v_home', $data);
	}

	public function tambah(){

		$this->load->view('v_tambah');

	}
	public function tambah_data(){
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		//rule validation
		$this->form_validation->set_rules('nama','Nama','required', array('required' => "*Nama tidak boleh kosong"));
		$this->form_validation->set_rules('hp','No.HP','numeric|required', array('required' => "*No.Hp tidak boleh kosong"));
		$this->form_validation->set_rules('alamat','Alamat','required', array('required' => "*Alamat tidak boleh kosong"));
		$this->form_validation->set_rules('email','Email','required', array('required' => "*Email tidak boleh kosong"));

		if ($this->form_validation->run() != FALSE) {
			$data = array(
				'nama' => $nama,
				'hp' => $hp,
				'alamat' => $alamat,
				'email' => $email
			); 

		$this->m_anggota->simpan_data($data); 

			redirect('home');

		} else {

			$this->load->view('v_tambah');
		}

	}
	public function edit($id){

		$where = array('id_anggota'=>$id);
		$data['anggota'] = $this->m_anggota->edit_data($where)->result();
		$this->load->view('v_edit', $data);
	}
	public function edit_anggota(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'hp' => $hp,
			'alamat' => $alamat,
			'email' => $email
		);

		$where = array('id_anggota'=>$id);
		$this->m_anggota->update_data($where, $data);

		redirect('home');

	}
	public function hapus($id){
		$where = array('id_anggota' => $id);
		$this->m_anggota->hapus_data($where); 
		redirect('home');
	}

}
