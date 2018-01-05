<?php echo($this->Html->link("売上一覧へ",array("action"=>"all"))); ?>
<h1>注文一覧</h1>

<table class="table">
	<tr>
		<td>注文番号</td>
		<td>商品</td>
		<td>個数</td>
		<td>操作</td>
	</tr>
	
<?php 
		foreach($orders as $key =>$datas){
			echo("<tr id='order_".$key."'>");
				echo("<td>".$key."</td>");
				
				echo("<td>");
					foreach($counts[$key] as $k => $v){
						echo($k."<br/><br/>");
					}
				echo("</td>");
				
				echo("<td>");
					foreach($counts[$key] as $k => $v){
						echo($v."<br/><br/>");
					}
				echo("</td>");
				
				echo("<td>");
					echo($this->Form->postLink("操作",array("action"=>"edit/".$key)));
				echo("</td>");
			echo("</tr>");
		}
?>
</table>

<?php 
//echo(debug($product_names));
//echo(debug($counts));
 ?>
 
<!--
 <script>
 	window.reload();
	 $(function(){
		 $("a.finished").click(function(){
			 $.post("/drive/operations/edit/"+ $(this).data("order-id"),{},function(res){
				 $("#order_" + res.id).fadeOut("faset");
			 });
		 });
	 });
 </script>
-->