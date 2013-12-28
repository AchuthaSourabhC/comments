<?php

class Comment_Model extends Model {

	function __construct(){
		parent::__construct();
	}
	
	public function loadAll(){
		
		$stmt = $this->db->prepare("SELECT  * FROM  comments ORDER BY  parent_id,created_at ");
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		//echo json_encode($rows);
		return $rows;
	}
	
	public function add(){
	
		$stmt = $this->db->prepare("INSERT INTO comments (parent_id, post_id, message) VALUES (:parent_id, :post_id, :message)");
		$res = $stmt->execute(array(':parent_id' => $_POST['parent_id'], ':post_id' => 0, ':message' => $_POST['message']));
		$id = $this->db->lastInsertId(); 

		$rows = array('id' => $id, 'parent_id' => $_POST['parent_id'], 'message' => $_POST['message']);;

		if($res){
			$rows['status'] = 1;
			//echo json_encode($rows);
		}else{
			$rows['status'] = 0;
			//echo json_encode($rows);
		}
		return $rows;
			
	}
	
	
	
	
	
}