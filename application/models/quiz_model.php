<?php
class Quiz_model extends CI_Model {
	
	
	
	public function __construct(){
		
	}
	
	public function selectQuiz(){
		
		
		
		/* $q1="select * from online_es.question";
		$r1=mysql_query($q1);
		$r2=mysql_fetch_array($r1);
			
		return $r2;	 */
		$this->db->select();
		
		
		$query = $this->db->get('question')->result();
		
		return json_encode($query); 
		//print_r($query);
	}
}
?>