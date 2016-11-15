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
	}

	
}    