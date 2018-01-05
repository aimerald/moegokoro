<div class="frame">
	<div class="frame_12">
		<h3>合計金額</h3>
		
		<h2><?php echo("￥".$orders); ?></h2>
		<h1>ご注文ありがとうございました。</h1>
		
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
						echo "<p></P>";
					} ?>
				</td>
				<td>
					<?php foreach($order_name as $order){
						echo "<p>".$order_count[$order]."</p>";
					} ?> 
				</td>
			</tr>
		</table>
		<?php echo $this->Html->link("トップページへ",array("action"=>"index")); ?>
	</div>
</div>

<div class="frame">
	<?php echo(debug($orders)); ?>
	<?php foreach($orders as $o){
		echo(gettype($o));
	}
	?>
</div>