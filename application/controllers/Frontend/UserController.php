<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
	}

	public function index(){
		$this->load->view('frontend/common/header');
//		echo "User Profile Page";
		$this->load->view('frontend/user/user_profile');
		$this->load->view('frontend/common/footer');
	}

}
