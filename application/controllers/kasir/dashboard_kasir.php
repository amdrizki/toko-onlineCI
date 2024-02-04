<?php

class Dashboard_kasir extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('role_id') !='3'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda harus Login!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('auth/login');
		}
	}
	
	public function index()
	{
		$this->load->view('templates_kasir/header');
		$this->load->view('templates_kasir/sidebar');
		$this->load->view('kasir/dashboard');
		$this->load->view('templates_kasir/footer');
		
	}
	
	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates_kasir/header');
		$this->load->view('templates_kasir/sidebar');
		$this->load->view('kasir/detail_barang', $data);
		$this->load->view('templates_kasir/footer');
	}
}	