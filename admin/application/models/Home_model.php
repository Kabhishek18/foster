<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'admin';
        $this->students   = 'users';
        $this->tutors   = 'tutors';
        $this->category   = 'categories';
        $this->course   = 'courses';
        $this->batch   = 'batches';
    }


	public function Authentication($auth)
	{	
		$this->db->select('*');
		$this->db->from($this->users);
		$array = array('users_email' => $auth['users_email'],'users_password' => $auth['users_password']);
		$this->db->where($array);
		$query = $this->db->get();
		if($query->num_rows() !=0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	public function CheckEmail($auth)
	{
		$this->db->select('*');
		$this->db->from($this->users);
		$array = array('users_email' => $auth['users_email']);
		$this->db->where($array);
		$query = $this->db->get();
		if($query->num_rows() !=0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function ListStudent($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->students);
       
        if($id){
            $array = array('users_id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}

	public function ListTutor($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->tutors);
       
        if($id){
            $array = array('users_id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}
 	
     //Get Active Tutor List
    public function ListTutorActive()
    {
        $this->db->select('tutors.*');
        $this->db->from('tutors');
        $this->db->join('tutors_avail', 'tutors.users_id = tutors_avail.tutor_id');
        $this->db->where("(tutors.users_status ='0' AND tutors_avail.avail_type='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }

	public function ListCategory($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('category_id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}


    public function ChangeCategory($reg)
    {   
        if ($reg['category_id']) {
            $this->db->where('category_id',$reg['category_id']);
            $update = $this->db->update($this->category,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->category,$reg);
            return $insert?true:false;
        }
    }

    public function DeleteCategory($reg)
    {
        $this->db->where('category_id',$reg);
        $update = $this->db->delete($this->category);
       return $update?true:false;
    }

	public function ListCourse($id = '')
	{
		$this->db->select('*');
        $this->db->from($this->course);
       
        if($id){
            $array = array('course_id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
	}

	public function ChangeCourse($reg)
	{	
		if ($reg['course_id']) {
			$this->db->where('course_id',$reg['course_id']);
        	$update = $this->db->update($this->course,$reg);
       		return $update?true:false;
		}
		else{
			$insert = $this->db->insert($this->course,$reg);
        	return $insert?true:false;
    	}
	}

    public function DeleteCourse($reg)
    {
        $this->db->where('course_id',$reg);
        $update = $this->db->delete($this->course);
       return $update?true:false;
    }

    public function ListBatch($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->batch);
       
        if($id){
            $array = array('batch_id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('batch_start', 'desc');
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function ChangeBatch($reg)
    {
        if ($reg['batch_id']) {
            $this->db->where('batch_id',$reg['batch_id']);
            $update = $this->db->update($this->batch,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->batch,$reg);
            return $insert?true:false;
        }
    }

     public function DeleteBatch($reg)
    {
        $this->db->where('batch_id',$reg);
        $update = $this->db->delete($this->batch);
       return $update?true:false;
    }


}
