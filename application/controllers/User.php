<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->helper('url');
		$this->load->library('parser');
		$this->load->library('session');
		$this->load->model('Ticket_Model');
    }

	public function index()
	{
		//Try retriving data:
   		$session_id = $this->session->userdata('session_id');
   		echo $session_id;
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('Register');
	}
	public function Save()
	{
		
		$this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == false)
		{
			echo 'Please enter correct email.';
			exit;
		}
		
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false)
		{
			
			echo 'Please enter password.';
			exit;
		}
		
		if ($this->form_validation->run() == true)
		{
			
			$email = $this->input->post('email');
			$password = md5(trim($this->input->post('password')));
			$res = $this->User_Model->Save($email,$password);
			exit;
		}
	}
	public function Login()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == false)
		{
			echo 'Please enter correct email.';
			exit;
		}
		
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false)
		{
			
			echo 'Please enter password.';
			exit;
		}
		
		if ($this->form_validation->run() == true)
		{
			
			$email = $this->input->post('email');
			$password = md5(trim($this->input->post('password')));
			$res = $this->User_Model->login($email,$password);
			echo $res; 
			exit;
		}
	}
	public function dashboard()
	{
		
		$data['tickets'] = $this->User_Model->get_tickets();
		$data['getquestion'] = $this->Ticket_Model->GetQuestions();
		$this->load->view('welcome', $data);

		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/User/'); 
	}
}


?>