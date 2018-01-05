<h1>Hello world</h1

<ul>
	<?php foreach($posts as $post): ?>
		<li id="post_<?php echo($post["Post"]["id"]); ?>">
			<?php echo($post["Post"]["title"]); ?>
			<?php echo($this->Html->link("削除","#",array("class"=>"delete","data-post-id"=>$post["Post"]["id"]))); ?>
		</li>
	<?php endforeach;?>
</ul>

<?php echo($this->Html->link("新規投稿",array("action"=>"add")));?>

<script>
	$(function(){
		$("a.delete").click(function(){
			$.post("/drive/posts/delete/"+ $(this).data("post-id"),{},function(res){
				$("#post_" + res.id).fadeOut("fast");
			},"json");
		});
	});
</script>