<?php 
class manage extends CI_Controller{

	public function index(){

		parent::__construct();

		$this->load->helper("url");
		$this->load->view("bookManagement/index");
	}

	

	public function addRecord(){

		
		$this->load->view("bookManagement/add");
	}

	public function insertrecord(){
		 $data  = array(
				"name" => $_POST['bkname'],
				"author" => $_POST['autname'],
				"title" => $_POST['title'],
				"batchid" => $_POST['batchid'],
				"edition" => $_POST['edition']  );



		$this->load->model("management");
		$inserted = $this->management->insert($data);
		if ($inserted) {

				$result['data'] =  $this->management->viewRecords();
				// echo "<pre>"; print_r($result);
				$this->load->view("bookManagement/viewRecords",$result);
		}
}



	
public function viewrecords(){
		$this->load->model("management");
		$result['data'] = $this->management->viewRecords();
		$this->load->view("bookManagement/viewRecords",$result);
	}




	public function delete(){
		
		$this->load->model("management");
		$deleteview['result'] = $this->management->delete();

		$this->load->view("bookManagement/detele", $deleteview);
		//$this->load->model("management");
		//$this->management->delete(47);

	}

	public function deleteBook($id){
		
		$this->load->model("management");
		$deleted = $this->management->deleteBook($id);
		
		$deleteview['result'] = $this->management->delete();

		$this->load->view("bookManagement/detele", $deleteview);
					

	}



	public function edit(){
		
		$this->load->model("management");
		$editBooks['records'] = $this->management->editpage();
		
		$this->load->view("bookManagement/editpage", $editBooks);
		
					

	}



	public function updateRecord($id){


		$this->load->model("management");
		$record['result'] = $this->management->getinfotoupdate($id);	
			// print_r($record);
		$this->load->view("bookManagement/update", $record);
		
					

	}




	public function updateBookRecord($id){

		$data = array(
					"name" => $_POST['bkname'],
					"author" => $_POST['autname'],
					"edition" => $_POST['edition'],
					"title" => $_POST['title'],
					"batchid" => $_POST['batchid']
			);


		$this->load->model("management");
		$recordupdated = $this->management->update($id, $data);	
			// print_r($record);
		if($recordupdated){
		$this->edit();
		}
					

	}







}

?>
