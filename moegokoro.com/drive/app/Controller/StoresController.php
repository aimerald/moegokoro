<?php

class StoresController extends AppController{
	
	public $helpers = array("Html","Form");
	public $uses = array("Product","Store","Operation");

	public function index(){
		$this->set("products",$this->Product->find("all"));
		
		//クッキーの存在を確認し実行するコード
		if($this->Session->check("Order")){
			$this->set("orders",$this->Session->read("Order"));
			$this->set("has", $this->has_zero($this->Session->read("Order")));
		}else{
			$this->Session->write("Order",array());
			$this->set("orders",$this->Session->read("Order"));
			$this->set("has",false);
		}
	}
	
			
	public function buy($id = null){
		if($this->request->is("get")){
		}else{
			$orders = $this->Session->read("Order");
			array_push($orders, $id);
			$this->Session->write("Order",$orders);
			$this->Session->setFlash($this->Session->read("Order"));
			$this->redirect(array("action"=>"index"));
		}
	}
	
	//編集ボタン
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
	
	//確認ページ
	public function check(){
		$this->set("orders",$this->Session->read("Order"));
		$orders = $this->Session->read("Order");
		$order_count = array_count_values($orders);
		$product_names = array();
		
		//Viewに表示するための項目 書きなおし前
		$order_name = array();
		$products = array();
		foreach($orders as $order){
			array_push($products, $this->Product->findById($order));
		}
		$result = 0;
		foreach($products as $order){
			array_push($order_name, $order["Product"]["name"]);
			$result += $order["Product"]["price"];
		}
		$order_count = array_count_values($order_name);
		$order_name = array_unique($order_name);
		$this->set("products",$products);
		$this->set("order_count",$order_count);
		$this->set("order_name",$order_name);
		
		//割安パンの有無で価格を１００円だけ変更するこーど
		if($this->has_zero($this->Session->read("Order"))){
			$this->set("result",($result + 100));
		}else{
			$this->set("result",$result);
		}
	}
	
	
	public function confirm(){
		$order_numbers = $this->Session->read("Order");
		$id = time();
		$this->Operation->save(array("id"=>$id));
		foreach($order_numbers as $order){
			$this->Store->create();
			$this->Store->set(array(
				"operation_id"=> $id,
				"product_id" => $order
			));
			$this->Store->save();
		}
		$this->set("orders",$order_numbers);
		$this->Session->delete("Order");
		$this->redirect(array("action"=>"index"));
	}
/*
	public function confirm(){
		$orders = $this->Session->read("Order");
		$this->set("orders",$orders);
		
		$id = time();
		foreach($orders as $order){
		
			$this->Store->create(false);
			$this->Store->set(array(
				"order_id" => $id,
				"product_id" => $order
			));
			$this->Store->save();
		}
	}
*/
	
	public function destroy(){
		$this->Session->delete("Order");
		$this->redirect(array("action"=>"index"));
	}


	//２個めから１００円パンについての関数
	function has_zero($ids){
		$products = array();
		foreach($ids as $id){
			$this->Product->id = $id;
			array_push($products, $this->Product->read());
		}
		foreach($products as $product){
			if(intval($product["Product"]["category"]) == 0){
				return true;
			}
		}
		return false;
	}

	
	/*
public function title(){
		$this->set("products",$this->Product->find("all"));
	}
*/
	
	
//商品データの一斉変更に使えます。
/*
	public function change(){
		$datas = $this->Product->find("all");
		foreach($datas as $data){
			if($data["Product"]["price"] == 100){
				$this->Product->save(array(
					"id"=>$data["Product"]["id"],
					"category"=> 0
				));
			}else{
				$this->Product->save(array(
					"id"=>$data["Product"]["id"],
					"category"=> 1
				));
			}
		}
		$this->Session->setFlash("Changed!");
		$this->redirect(array("action"=>"index"));
	}
*/





















}
?>