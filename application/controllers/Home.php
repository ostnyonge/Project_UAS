

<?php

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'pembeli' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'home';
		
		
	}
	public function index(){
		$this->data['title'] = 'Home';
		
		
		$this->load->view('home', $this->data);
	}
}