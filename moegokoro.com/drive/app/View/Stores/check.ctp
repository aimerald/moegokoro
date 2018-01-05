 <?php echo($this->Html->link("売上データの破棄",array("action"=>"destroy")));?>
<table class="table">
<tr>
	<td>注文日</td>
	<td>商品一覧</td>
	<td>注文数</td>
</tr>
<tr>
	<td><?php echo date("n月j日 H時i分"); ?></td>
	<td>
		<?php foreach($order_name as $order){
			echo "<p>".$order."</P>";
		} ?>
	</td>
	<td>
		<?php foreach($order_name as $order){
			echo "<p>".$order_count[$order]."</p>";
		} ?> 
	</td>
</tr>
</table>


<h1>合計金額￥<?php echo($result); ?></h1>
<?php echo($this->Html->link("商品を追加する",array("action"=>"index"))); ?>
<br/>
<?php echo $this->Html->link("注文を確定する",array("action"=>"confirm")); ?>