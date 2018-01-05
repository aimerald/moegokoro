<div class="frame">
	<div class="frame_8">
		<h1>編集ページ</h1>
		<?php echo($this->Form->create("Product",array("action"=>"edit"))); ?>
		<?php echo($this->Form->input("name")); ?>
		<?php echo($this->Form->input("description")); ?>
		<?php echo($this->Form->input("price")); ?>
		<?php echo($this->Form->input("image")); ?>
		<?php echo($this->Form->end("投稿")); ?>
	</div>
	<div class="frame_4"></div>
</div>