<?php
class Logs_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_logs_list()
	{
		
		$query = $this->db->get('logs');
		$logs =  $query->result_array();
		
		foreach($logs as $lognum => $log) {
			$query = $this->db->select('FName, LName, chars.id')->where(array('LogID' => $log['id']))->join('chars', 'chars.id = logchars.charID')->get('logchars');
			$log['chars'] = $query->result_array();
			$logs[$lognum] = $log;
		}
		
		return $logs;
	}
	
	public function get_log($id) {
		$query = $this->db->where(array('id' => $id))->get('logs');
		$log = $query->row_array();
		
		if ($log) {
			$query = $this->db->select("filename")->where(array('id' => $id))->get('logs');
			$row = $query->row();
		
	
			$filename = $row->filename;
		
			$contents = file_get_contents("application/data/logs/" . $filename);
			$contents = str_replace("\n", "<br/>", htmlspecialchars($contents));
			$log['text'] = $contents;
		}
		
		return $log;
	}
	
	public function add_log()
	{
		$this->load->helper('url');
		
		/*$data = array(
				'owner' => $owner,
				'fName' => $this->input->post('fName'),
				'lName' => $this->input->post('lName'),
				'gender' => $this->input->post('gender'),
				'bday' => $this->input->post('bday'),
				'description' => $this->input->post('description'),
				'personality' => $this->input->post('personality'),
				'history' => $this->input->post('history'),
				'notes' => $this->input->post('notes'),
				
		);
	
		return $this->db->insert('chars', $data);*/
	}
}