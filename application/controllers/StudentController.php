<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Authentication');
	}

	public function index(){
		$this->load->model('StudentModel','stud');
//		$student = $this->StudentModel->student_data();
//		$student = new StudentModel;
		$student = $this->stud->student_data();

//		echo $student->student_data();
		echo $student;
	}

	public function show($id){
		$this->load->model('StudentModel','stud');
		$user = $this->stud->student_show($id);
		echo $user;
	}


	public function demo(){
		$this->load->model('StudentModel','stud');
		$user = $this->stud->student_demo();
		$data['title'] = $this->stud->student_demo();
		$data['body'] = "This is Data Body";
		$this->load->view('student',$data);
	}

}
