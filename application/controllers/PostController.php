<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
	}

	public function index(){
		echo "This is PostController";
//		$this->load->view('welcome_message');
	}

	public function blog($url){
		echo $url;
		echo "This is Blog Page";
	}

	public function blogedit($url){
		echo $url;
		echo "This is Blog Edit Page";
	}


}
