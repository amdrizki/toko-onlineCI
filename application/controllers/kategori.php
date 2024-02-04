<?php 

class Kategori extends CI_Controller{
	public function pakaian_pria()
	{
		$data['pakaian_pria'] = $this->model_kategori->data_pria()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kaos_pria', $data);
		$this->load->view('templates/footer');
	}
	
	public function pakaian_wanita()
	{
		$data['pakaian_wanita'] = $this->model_kategori->data_wanita()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kaos_wanita', $data);
		$this->load->view('templates/footer');
	}
	
	public function pakaian_anak()
	{
		$data['pakaian_anak'] = $this->model_kategori->data_anak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kaos_anak', $data);
		$this->load->view('templates/footer');
	}
}