<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller 
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
    }

	public function Index()
	{
		$this->load->model('Ticket_Model'); 
		
		
		$category = $this->input->post('category');
		$question = $this->input->post('question');
		if ($this->input->post()){
			$this->Ticket_Model->Question('user_id',$category,$question); 
		}
		

		$this->load->view('newticket');
	}
}


?>