<div class="frame">
	<div class="frame_12">
		<table class="table">
			<tr>
				<td>ID</td>
				<td>画像</td>
				<td>商品名</td>
				<td>説明</td>
				<td>価格</td>
				<td>操作</td>
			</tr>
			
			<?php foreach($products as $product): ?>
				<tr>
					<td>
						<?php echo(h($product["Product"]["id"])); ?>
					</td>
					<td>
						<?php echo(h($product["Product"]["image"])); ?>
					</td>
					<td>
						<?php echo(h($product["Product"]["name"])); ?>
					</td>
					<td>
						<?php echo(h($product["Product"]["description"])); ?>
					</td>
					<td>
						<?php echo(h($product["Product"]["price"])); ?>
					</td>
					<td>
						<?php echo $this->Html->link("編集","edit/".$product["Product"]["id"]);?>
						<?php echo($this->Html->link("削除","delete/".$product["Product"]["id"]));?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		
		<?php echo $this->Html->link("新規投稿",array("action"=>"add")); ?>
		
	</div>
	<?php echo $this->Html->link("店頭へ",array("controller"=>"stores","action"=>"index")); ?>
</div>
