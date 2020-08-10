<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
    }


	public function Authentication($auth)
	{	
		$this->db->select('*');
		$this->db->from('users');
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



	public function GetCoupon($id = '')
    {

         
         $this->db->select('*');
        $this->db->from($this->coupon);
       
        if($id){
            $array = array('id' => $id, 'coupon_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('coupon_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }





    public function DeleteCoupon($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->coupon);
       return $update?true:false;
    }

    public function StatusUpdates($data)
    {
        
        $update = $this->db->query("update userorder SET order_status='".$data['order_status']."' where id='".$data['id']."'");
        return $update?true:false;
    }

}
