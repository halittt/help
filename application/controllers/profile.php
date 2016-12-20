<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
		$this->load->model('Ticket_Model');

	}
	
	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$data['tickets'] = $this->user_model->get_tickets();
		$data['getquestion'] = $this->Ticket_Model->GetQuestions();
		$this->load->view('welcome', $data);
	}


}