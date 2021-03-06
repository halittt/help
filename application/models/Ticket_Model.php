<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Ticket_Model extends CI_Model 
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
	}
	
    public function Question($user_id,$category,$question) 
    {
		
		$data = array(
			'users_id' => $user_id, 
			'category' => $category,
			'question' => $question,
			'time' => time() 	
			);
    	
		$result = $this->db->insert('tickets', $data);
		return $data;
	}

	public function GetQuestions(){
		return $this->db->get('tickets')->result();

	}

	public function DelQuestions($id){
		$this->db->where('id', $id);
		$this->db->delete('tickets');
	}
}    