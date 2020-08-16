<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'tutors';
    }


	public function Authentication($auth)
	{	
		$this->db->select('*');
		$this->db->from($this->users);
		$array = array('users_email' => $auth['email'],'users_password' => $auth['password']);
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

	//Insert User
	public function InsertUsers($data)
    {
         $insert = $this->db->insert($this->users,$data);
        return $insert?true:false;
    }
	

    //Email Verify
     public function EmailVerify($users_token,$users_email_verify){
        $this->db->where('users_token',$users_token);
        $update = $this->db->update($this->users,array('users_email_verify'=> $users_email_verify));
        return $update?true:false;
    }





}
