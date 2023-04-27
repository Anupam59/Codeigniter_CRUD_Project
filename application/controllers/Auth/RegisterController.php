<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

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
		$this->load->view('auth/register');
		$this->load->view('auth/common/footer');
	}


	public function register(){
		$this->load->view('auth/common/header');


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
		if ($this->form_validation->run()){
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'password'=>$this->input->post('password'),
			);
			$register_user = new UserModel;
			$check = $register_user->registerUser($data);
			if ($check){
				$this->session->set_flashdata('status','Registered Successfully. Go to Login.');
				redirect(base_url('login'));
			}else{
				$this->session->set_flashdata('status','Something Went To Wrong !.');
				redirect(base_url('register'));
			}
		}else{
			$this->index();
		}

		$this->load->view('auth/common/footer');
	}


}
