<h1>新規投稿ページ！</h1>

<?php echo($this->Form->create("Post")); ?>
<?php echo($this->Form->input("title"));?>
<?php echo($this->Form->input("body"));?>
<?php echo($this->Form->end("Create!"));?>
