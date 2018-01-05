<h1>商品一覧</h1>
 <?php echo($this->Html->link("売上データの破棄",array("action"=>"destroy")));?>
 
<?php //foreach($orders as $order): ?>
	<?php //echo($order); ?>
<?php //endforeach; ?>

<div class="frame">
	<div class="frame_12">
		<div class="products">
			<?php foreach($products as $product): ?>
				<div class="product" id="product_<?php echo $product["Product"]["id"];?>">
					<!-- 	画像があるか否かの確認 -->
					<?php 
						if($product["Product"]["image"] != null){
							echo($this->Html->image($product["Product"]["image"],array("class"=>"image")));
						}else{
							echo($this->Html->image('http://collection.nmwa.go.jp/artize/img/NoImageL.jpg',array("class"=>"image")));
						}
					?>
					<h1><?php echo $product["Product"]["name"]; ?></h1>
					<p><?php echo $product["Product"]["description"]; ?></p>
					<span>
						<?php 
							if($has){
								echo "￥".$product["Product"]["price"];
							}else{
								if($product["Product"]["category"] == 0){
									echo "￥".($product["Product"]["price"] + 100);
								}else{
									echo "￥".$product["Product"]["price"];
								}
							}
						?>
					 </span><br/>
					<?php echo($this->Form->postLink("追加",array("action"=>"buy",$product["Product"]["id"]))); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php 
if(count($orders) >= 1){
	echo($this->Html->link("Check",array("action"=>"check")));	
}
 ?>
 
<?php //echo(debug($has)); ?>