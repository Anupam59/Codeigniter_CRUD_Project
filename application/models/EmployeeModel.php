<?php

class EmployeeModel extends CI_Model {

//	public function getEmployee(){
//		$employee =  $this->db->get('employee');
//		return $employee->result();
//	}

	public function getEmployee($perPage,$start_index,$search_text=null,$is_count=0){
		if($perPage !='' && $start_index != '')
		{
			$this->db->limit($perPage,$start_index);
		}
		if($search_text!=NULL)
		{
			$this->db->like('name',$search_text,'both');
			$this->db->or_like('email',$search_text,'both');
			$this->db->or_like('phone',$search_text,'both');
		}
		if($is_count==1)
		{
			$query = $this->db->get('employee');
			return $query->num_rows();
		}
		else
		{
			$query = $this->db->get('employee');
			return $query->result_array();
		}

	}

	public function insertEmployee($data){
		return $this->db->insert('employee',$data);
	}

	public function editEmployee($id){
		$query = $this->db->get_where('employee',['id' => $id]);
		return $query->row();
	}

	public function updateEmployee($data,$id){
		return $this->db->update('employee', $data, ['id' => $id]);
	}

	public function deleteEmployee($id){
		return $this->db->delete('employee',['id' => $id]);
	}

}
