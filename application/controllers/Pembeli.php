<?php

use Dompdf\Dompdf;

class pembeli extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'pembeli' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'pembeli';
		$this->load->model('M_pembeli', 'm_pembeli');
	}

	public function index(){
		$this->data['title'] = 'Data pembeli';
		$this->data['all_pembeli'] = $this->m_pembeli->lihat();
		$this->data['no'] = 1;

		$this->load->view('pembeli/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'pembeli'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Tambah pembeli';

		$this->load->view('pembeli/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'pembeli'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_pembeli' => $this->input->post('kode_pembeli'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'username_pembeli' => $this->input->post('username_pembeli'),
			'password_pembeli' => $this->input->post('password_pembeli'),
		];

		if($this->m_pembeli->tambah($data)){
			$this->session->set_flashdata('success', 'Data pembeli <strong>Berhasil</strong> Ditambahkan!');
			redirect('pembeli');
		} else {
			$this->session->set_flashdata('error', 'Data pembeli <strong>Gagal</strong> Ditambahkan!');
			redirect('pembeli');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'pembeli'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Ubah pembeli';
		$this->data['pembeli'] = $this->m_pembeli->lihat_id($id);

		$this->load->view('pembeli/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'pembeli'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_pembeli' => $this->input->post('kode_pembeli'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'username_pembeli' => $this->input->post('username_pembeli'),
			'password_pembeli' => $this->input->post('password_pembeli'),
		];

		if($this->m_pembeli->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data pembeli <strong>Berhasil</strong> Diubah!');
			redirect('pembeli');
		} else {
			$this->session->set_flashdata('error', 'Data pembeli <strong>Gagal</strong> Diubah!');
			redirect('pembeli');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'pembeli'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('penjualan');
		}

		if($this->m_pembeli->hapus($id)){
			$this->session->set_flashdata('success', 'Data pembeli <strong>Berhasil</strong> Dihapus!');
			redirect('pembeli');
		} else {
			$this->session->set_flashdata('error', 'Data pembeli <strong>Gagal</strong> Dihapus!');
			redirect('pembeli');
		}
	}

	public function export(){
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_pembeli'] = $this->m_pembeli->lihat();
		$this->data['title'] = 'Laporan Data pembeli';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('pembeli/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data pembeli Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}