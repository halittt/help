<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class User_Model extends CI_Model 
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
    }
	
    public function signin()
	{
		$this->load->view('login');
	}

	public function get_tickets() {
        $query = $this->db->get('tickets');
        return $query->result_array();
    }
	
	public function Login($email,$password) 
    {
		
    	$qry = $this->db->get_where('users',array('Email'=>$email, 'Password'=>$password));
        
        if ($qry->num_rows()>0) 
        {
			
			$row= $qry->row();
			$this->session->set_userdata($email); //setting session

			//You can further redirect users to Dashboard by using
			redirect(base_url().'index.php/User/dashboard');
			exit;
		}
		else 
		{
			echo 'Incorrect Username or Password';
			exit;
			//redirect(base_url().'index.php/User/'); redirect back to login
		}
    }
	 
	 public function Save($email,$password) 
    {
		
    	$sql ="INSERT INTO users (Email,Password) values ('$email','$password')";
		$result = $this->db->query($sql);
		redirect(base_url().'index.php/User/'); 
        
    }

}	

?>