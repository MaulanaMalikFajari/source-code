<?php
class Pelanggan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Pelanggan_model');
		$this->load->model('General_model');

	}
	function index(){
		$query = $this->Pelanggan_model->data_pelanggan();
		$data = array(
			'title' => 'Halaman Dashboard Administrator - E-Commerce',
			'isi' => 'pelanggan/pelanggan_view',
			'data' => $query
		);
		$this->load->view('layout/wrapper', $data);
	}//end fungsi tampil

	public function tambah() {
		$this->form_validation->set_rules('kd_pelanggan','Kode pelanggan','required');
		$this->form_validation->set_rules('nama_pelanggan','Nama pelanggan','required');
		$this->form_validation->set_rules('alamat_pelanggan','Alamat pelanggan','required');
		$this->form_validation->set_rules('telp_pelanggan','Telp pelanggan','required');
		//dijalankan jika diklik Button Tambah di pelanggan_view.php
		if ($this->form_validation->run() === FALSE){
			$data = array(
				'title'		=> 'Menambah Pelanggan',
				'isi'		=> 'pelanggan/tambah_pelanggan'
			);
			$this->load->view ('layout/wrapper', $data);
		}else{
			//Dijalankan jika klik button simpan di tambah_pelanggan.php
			$data = array(
					'kd_pelanggan'		=> $this->input->post('kd_pelanggan'),
					'nama_pelanggan'		=> $this->input->post('nama_pelanggan'),
					'alamat_pelanggan'		=> $this->input->post('alamat_pelanggan'),
					'kota_pelanggan'		=> $this->input->post('kota_pelanggan'),
					'telp_pelanggan'		=> $this->input->post('telp_pelanggan'),
					'password'				=> $this->input->post('password'),
					'email_pelanggan'		=> $this->input->post('email_pelanggan')
			);
			$this->General_model->add_new('pelanggan',$data);
			redirect(base_url().'pelanggan/');
		}

	}//fungsi tambah
	public function edit($id=''){
		$this->form_validation->set_rules('kd_pelanggan','Kode Pelanggan','required');
		$this->form_validation->set_rules('nama_pelanggan','Nama Pelanggan','required');
		$this->form_validation->set_rules('alamat_pelanggan','Alamat Pelanggan','required');
		$this->form_validation->set_rules('telp_pelanggan','Telp Pelanggan','required');
		if ($this->form_validation->run() === FALSE){
			$data = array(
			'title'			=> 'Edit Pelanggan',
			'isi'			=> 'pelanggan/edit_pelanggan',
			'data'			=>	$this->Pelanggan_model->info_pelanggan($id),
			'kd_pelanggan'	=>	$id
			);
			$this->load->view('layout/wrapper', $data);
		}else{
			$data = array (
			'nama_pelanggan'			=> $this->input->post('nama_pelanggan'),
			'alamat_pelanggan'			=> $this->input->post('alamat_pelanggan'),
			'kota_pelanggan'			=> $this->input->post('kota_pelanggan'),
			'telp_pelanggan'			=> $this->input->post('telp_pelanggan'),
			'password'					=> $this->input->post('password'),
			'email_pelanggan'			=> $this->input->post('email_pelanggan')
			);
			$where_data['kd_pelanggan'] = $this->input->post('kd_pelanggan');
			$this->General_model->edit_data('pelanggan',$data, $where_data);
			redirect(base_url().'pelanggan/');
		}
	}//fungsi edit
	public function delete($id=''){
		$where_data['kd_pelanggan'] = $id;
		$this->General_model->delete_data('pelanggan', $where_data);
		redirect(base_url().'pelanggan/');
	}//fungsi delete
}