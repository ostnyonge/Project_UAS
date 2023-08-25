

<?php

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'pembeli' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'dashboard';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_pembeli', 'm_pembeli');
		$this->load->model('M_penjualan', 'm_penjualan');
		$this->load->model('M_pengguna', 'm_pengguna');
		
	}
	public function index(){
		$this->data['title'] = 'Halaman Dashboard';
		$this->data['jumlah_barang'] = $this->m_barang->jumlah();
		$this->data['jumlah_pembeli'] = $this->m_pembeli->jumlah();
		$this->data['jumlah_penjualan'] = $this->m_penjualan->jumlah();
		$this->data['jumlah_pengguna'] = $this->m_pengguna->jumlah();
		
		$this->load->view('dashboard', $this->data);
	}
}