<?php

class StudentModel extends CI_Model {
	public function student_data(){
		$class = $this->student_class();
		return $student_name = "Anupam,   Class:-".$class;
	}

	private function student_class(){
		return $class = "BSC";
	}

	public function student_show($id){
		if ($id == 1){
			return $user = "User Id = 1";
		}elseif ($id == 2){
			return $user = "User Id = 2";
		}else{
			return $user = "User Id = all";
		}
	}

	public function student_demo(){
		return $title = "This IS Model Data ";
	}
}
