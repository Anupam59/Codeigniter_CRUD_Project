<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function demo()
	{
		$this->load->view('about');
	}
}
