<?php

class ProductsController extends AppController{
	
	public $helpers = array("Html","Form");
	
	public function edit($id = null){
		$this->Product->id = $id;
		if($this->request->is("get")){
			$this->request->data = $this->Product->read();
		}else{
			if($this->Product->save($this->request->data)){
				$this->Session->setFlash("Success edit");
				$this->redirect(array("action"=>"index","controller"=>"Admins"));
			}else{
				$this->Session->setFlash("Failed edit");
				$this->redirect(array("action"=>"index","controller"=>"Admins"));
			}
		}
		
	}

	
	public function delete($id){
		if($this->request->is("get")){
			$this->Session->setFlash("Failed to access");
			$this->redirect(array("action"=>"index"));
		}			
		if($this->request->is("ajax")){
			if($this->Post->delete($id)){
				$this->autoRender = false;
				$this->autoLayout = false;
				$response = array("id"=>$id);
				$this->header("Content-Type: application/json");
				echo(json_encode($response));
				exit();
			}
			$this->redirect(array("action"=>"index"));
		}
	}
	
}