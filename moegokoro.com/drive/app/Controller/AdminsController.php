<?php

class AdminsController extends AppController{
	
	public $helpers = array("Html","Form");
	public $uses = array("Product");

	public function index(){
		$this->set("products",$this->Product->find("all"));
	}
	
	public function add($id = null){
		if($this->request->is("post")){
			if($this->Product->save($this->request->data)){
				$this->Session->setFlash("投稿成功");
				$this->redirect(array("action"=>"index"));
			}
		}
	}
	
	public function edit($id = null){
		$this->Product->id = $id;
		if($this->request->is("get")){
			$this->request->data = $this->Product->read();
		}else{
			if($this->Product->save($this->request->data)){
				$this->Session->setFlash("Success edit");
				$this->redirect(array("action"=>"index"));
			}else{
				$this->Session->setFlash("Failed edit");
				$this->redirect(array("action"=>"index"));
			}
		}
		
	}
	public function delete($id = null){
		$this->Product->id = $id;
		if($this->Product->delete()){
			$this->Session->setFlash("Deleted");
			$this->redirect(array("action"=>"index"));
		}else{
			$this->Session->setFlash("Delete failed");
			$this->redirect(array("action"=>"index"));
		}
	}
}

?>