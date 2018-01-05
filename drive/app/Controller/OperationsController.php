<?php

class OperationsController extends AppController{
	
	public $helpers = array("Html","Form");
	public $uses = array("Product","Store","Operation");

	//完成7/25
	public function index(){
		$options["conditions"] = array("Operation.finish"=>0);
		$orders = $this->Operation->find("all",$options);
		
		foreach($orders as $order){
			$products[$order["Operation"]["id"]] = array();
			$product_names[$order["Operation"]["id"]] = array();
			$counts[$order["Operation"]["id"]] = array();
			
			foreach($order["Store"] as $p){
				$this->Product->id = $p["product_id"];
				array_push($products[$order["Operation"]["id"]],
					$this->Product->read());
			}
			
			foreach($products[$order["Operation"]["id"]] as $name){
				array_push($product_names[$order["Operation"]["id"]],
					$name["Product"]["name"]);
			}
			$counts[$order["Operation"]["id"]] = array_count_values(
				$product_names[$order["Operation"]["id"]]);
		}
		
		//Send view data
		$this->set("orders",$products);
		$this->set("product_names",$product_names);
		$this->set("counts",$counts);
	}
		
	//完成7/25
	public function edit($id = null){
		if($this->request->is("get")){
			$this->Session->setFlash("Failed to access");
			$this->redirect(array("action"=>"index"));
		}			
		if($this->request->is("post")){
			$this->Operation->id = $id;
			
			if($this->Operation->save(array("finish"=>1))){
				$this->redirect(array("action"=>"index"));
			}else{
				$this->Session->setFlash("変更失敗");
				$this->redirect(array("action"=>"index"));
			}
		}
		
		/*書きなおし前
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
*/
	}
	
	//
	public function all(){
/*
		$options = array(
			"conditions" => array(
				"Operation.created" => 
			)
		);
*/
		$orders = $this->Operation->find("all");
		if(count($orders) == 0){
			$this->Session->setFlash("データが無いよ");
		}else{
			
			
			//ビューへのデータ送信
			$this->set("orders",$orders);
			//$this->set("count",$count);
		}
	}
	
}

?>