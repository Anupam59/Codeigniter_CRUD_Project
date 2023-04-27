<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if ($this->session->has_userdata('authenticated')){
			$this->session->set_flashdata('status','You are already Logged In !.');
			redirect(base_url('user-profile'));
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('UserModel');
	}

	public function index(){
		$this->load->view('auth/common/header');
		$this->load->view('auth/login');
		$this->load->view('auth/common/footer');
	}

	public function login(){
		$this->load->view('auth/common/header');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()){
			$data = array(
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
			);
			$login_user = new UserModel;
			$check = $login_user->loginUser($data);
			if ($check){
				echo $check->name;
				$auth_userdetails = array(
					'name'=>$check->name,
					'email'=>$check->email,
					'phone'=>$check->phone,
				);

				$this->session->set_userdata('authenticated','1');
				$this->session->set_userdata('auth_user',$auth_userdetails);
				$this->session->set_flashdata('status','You are Logged In Successfully Done !.');
				redirect(base_url('user-profile'));
			}else{
				$this->session->set_flashdata('status','Invalid Email And Password !.');
				redirect(base_url('login'));
			}
		}else{
			$this->index();
		}

		$this->load->view('auth/common/footer');
	}
}
