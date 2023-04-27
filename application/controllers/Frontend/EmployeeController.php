<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

//	public function index(){
//		$this->load->view('frontend/common/header');
//		$this->load->model('EmployeeModel','emp');
//		$data['employee'] = $this->emp->getEmployee();
//		$this->load->view('frontend/employee/employee',$data);
//		$this->load->view('frontend/common/footer');
//	}

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
	}


	public function index()
	{

		$this->load->view('frontend/common/header');
		
//		$this->load->model('EmployeeModel');
		$this->load->model('EmployeeModel','emp');
		//$this->data['users'] = $this->my_model->getusers();

		$this->load->library('pagination');
		$perPage=2;
		$config['base_url'] = base_url('employee');
		$page=0;

		if($this->input->get('page'))
		{
			$page = $this->input->get('page');
		}
		$start_index=0;
		if($page != 0)
		{
			$start_index = $perPage * ($page - 1);
		}

		$total_rows = 0;

		if($this->input->get('search_text') != null) {
			$search_text = $this->input->get('search_text');
			$this->data['employee'] = $this->emp->getEmployee($perPage,$start_index,$search_text,$is_count=0);
			$total_rows = $this->emp->getEmployee(null,null,$search_text,$is_count=1);
		}
		else
		{
			$this->data['employee'] = $this->emp->getEmployee($perPage,$start_index,null,$is_count=0);
			$total_rows = $this->emp->getEmployee(null,null,null,$is_count=1);
		}

		$config['total_rows'] = $total_rows;

		$config['per_page']= $perPage;
		$config['enable_query_strings']= true;
		$config['use_page_numbers']= true;
		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['reuse_query_string']= true;
		$config['full_tag_open']= '<ul  class="pagination">';
		$config['full_tag_close']= '</ul>';
		$config['first_link']= 'First';
		$config['last_link']= 'Last';
		$config['first_tag_open']=  '<li  class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link']= '&laquo';

		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link']= '&raquo';

		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$this->data['page'] =$page;
		$this->data['links']= $this->pagination->create_links();
		
//		$this->load->view('welcome_message',$this->data);

		$this->load->view('frontend/employee/employee',$this->data);

		$this->load->view('frontend/common/footer');
	}
	
	
	
	
	
	
	
	
	
	

	public function create(){
		$this->load->view('frontend/common/header');
		$this->load->view('frontend/employee/create_employee');
		$this->load->view('frontend/common/footer');
	}

	public function store(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		if ($this->form_validation->run()){
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
			];
			$this->load->model('EmployeeModel','emp');
			$this->emp->insertEmployee($data);
			redirect(base_url('employee'));
		}else{
			$this->create();
		}
	}


	public function edit($id){
		$this->load->view('frontend/common/header');

		$this->load->model('EmployeeModel','emp');
		$data['employee'] = $this->emp->editEmployee($id);
		$this->load->view('frontend/employee/edit_employee',$data);

		$this->load->view('frontend/common/footer');
	}


	public function update($id){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		if ($this->form_validation->run()){
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
			];
			$this->load->model('EmployeeModel','emp');
			$this->emp->updateEmployee($data,$id);
			redirect(base_url('employee'));
		}else{
			$this->edit($id);
		}

	}


	public function delete($id){
		$this->load->model('EmployeeModel','emp');
		$this->emp->deleteEmployee($id);
		redirect(base_url('employee'));
	}
}
