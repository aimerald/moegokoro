<?php

class PostsController extends AppController{
	
	public $helpers = array("Html","Form");
	
	public function index(){
		$this->set("posts",$this->Post->find("all"));
	}
	
	public function view($id = null){
		$this->Post->id = $id;
		$this->set("post",$this->Post->read());
	}
	
	public function add(){
		if($this->request->is("post")){
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash("Created!");
				$this->redirect(array("action"=>"index"));
			}else{
				$this->Session->setFlash("Failed!");
				$this->redirect(array("action"=>"index"));
			}
		}
	}
	
	public function edit(){
		
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