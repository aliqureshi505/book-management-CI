<?php 

class management extends CI_Model{
	public function __construct(){
		parent::__construct();

		$this->load->database();
	}


	public function insert($data){

      

      	$query = $this->db->insert("bookrecords", $data);

      	if ($query) {
      		return true;
      	}

	}

	public function viewRecords(){
		$this->db->order_by("id", "desc");
		$res = $this->db->get("bookrecords");
		return $res->result_array();

	}



	public function delete(){

		$this->db->order_by("id", "desc");
		$res = $this->db->get("bookrecords");
		return $res->result_array();

		// $this->db->where("id", 47);
		// $query = $this->db->delete("bookrecords");

		// if($query){
		// 	echo "good";
		// }
	}




	public function deleteBook($id){


		$this->db->where("id", $id);
		$query = $this->db->delete("bookrecords");

		if($query){
			return true;
		}
	}



		public function editpage(){


		$this->db->order_by("id", "desc");
		$res = $this->db->get("bookrecords");
		return $res->result_array();

	}

	

	public function getinfotoupdate($id){


		$this->db->where("id", $id);
		$res = $this->db->get("bookrecords");
		return $res->result_array();
		
	}	



	public function update($id, $data){


		$this->db->where("id", $id);
		$res = $this->db->update("bookrecords", $data);
		return true;
	}	
	




}


?>