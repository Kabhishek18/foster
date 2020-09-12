<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
        $this->categories   = 'categories';
        $this->courses   = 'courses';
        $this->order   = 'orders';
    }


    //Category 
	public function GetCategories($id = '')
    {
         $this->db->select('*');
        $this->db->from($this->categories);
       
        if($id){
            $array = array('category_id' => $id, 'category_status' => '0','category_parent_id' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('category_status' => '0','category_parent_id' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    // Category and course Join
    public function GetCategoriesCourse($value)
    {
        $this->db->select('*');
        $this->db->from('courses');
        $this->db->join('categories', 'categories.category_id = courses.course_parent_id AND categories.category_id  ='.$value);
        $this->db->where("(categories.category_status='0' AND courses.course_status='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }

    // Subategory and course Join

     public function GetSubCategoriesCourse($value)
    {
        $this->db->select('*');
        $this->db->from('courses');
        $this->db->join('categories', 'categories.category_id = courses.course_parent_id AND categories.category_parent_id  ='.$value);
        $this->db->where("(categories.category_status='0' AND courses.course_status='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }

    // Product
    public function GetCourses($id)
    {
         $this->db->select('*');
        $this->db->from($this->courses);
       
        if($id){
            $array = array('course_id' => $id, 'course_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('category_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

     // Tutor
    public function InsertOrder($data)
    {
         $insert = $this->db->insert($this->order,$data);
        return $insert?true:false;
    }
}
