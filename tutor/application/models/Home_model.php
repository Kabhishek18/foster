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
	//Update User

     public function UpdateUser($auth){
        $data =array('users_name'=> $auth['users_name'], 
                     'users_mobile'=> $auth['users_mobile'],   
                        );


        $this->db->where('users_id',$auth['users_id']);
        $update = $this->db->update($this->users,$data);
        return $update?true:false;
    }
    //Update USer Image
    public function UpdateUserImage($auth){
        $data =array('users_image'=> $auth['users_image']  
                        );


        $this->db->where('users_id',$auth['users_id']);
        $update = $this->db->update($this->users,$data);
        return $update?true:false;
    }
    //Update User Password
    public function UpdatePassword($auth){
        $data =array('users_password'=> $auth['users_password']  
                        );


        $this->db->where('users_id',$auth['users_id']);
        $update = $this->db->update($this->users,$data);
        return $update?true:false;
    }


    //Bank Detail Update
    public function UpdateBankAccount($auth,$id){
        $data =array('users_bankaccount'=> $auth  
                        );
        $this->db->where('users_id',$id);
        $update = $this->db->update($this->users,$data);
        return $update?true:false;
    }

    //Update Pan Image
    public function UpdatePanImage($auth){
        $data =array('users_pancard'=> $auth['users_pancard']  
                        );


        $this->db->where('users_id',$auth['users_id']);
        $update = $this->db->update($this->users,$data);
        return $update?true:false;
    }

    //Email Verify
     public function EmailVerify($users_token,$users_email_verify){
        $this->db->where('users_token',$users_token);
        $update = $this->db->update($this->users,array('users_email_verify'=> $users_email_verify));
        return $update?true:false;
    }





}
