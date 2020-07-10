<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
	} 


	public function index()
	{

		$data['berita'] = $this->m_berita->data_berita()->result();

		$this->load->view('v_berita', $data);
	}

	public function tberita(){

		$this->load->view('v_tberita');

	}
	public function tambah_berita(){

		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');

		//rule validation
		$this->form_validation->set_rules('judul','Judul','required', array('required' => "*Judul tidak boleh kosong"));
		$this->form_validation->set_rules('tanggal','Tanggal','date|required', array('required' => "*Tanggal tidak boleh kosong"));
		$this->form_validation->set_rules('isi','Isi','required', array('required' => "*Isi tidak boleh kosong"));

		if ($this->form_validation->run() != FALSE) {
			$data = array(
				'judul' => $judul,
				'tanggal' => $tanggal,
				'isi' => $isi
		);

		$this->m_berita->simpan_data($data);
		redirect('berita');

		} else {

			$this->load->view('v_tberita');
		}

	}

	public function eberita($id){

		$where = array('id_berita'=>$id);
		$data['berita'] = $this->m_berita->eberita($where)->result();
		$this->load->view('v_eberita', $data);
	}
	public function update_berita(){

		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');

		$data = array(

			'judul' => $judul,
			'tanggal' => $tanggal,
			'isi' => $isi
		);

		$where = array('id_berita'=>$id);
		$this->m_berita->update_berita($where, $data);

		redirect('berita');

	}
	public function hapus_berita($id){
		$where = array('id_berita' => $id);
		$this->m_berita->hapus_berita($where); 
		redirect('berita');
	}

}
