<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('zero');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="http://summer-windmill.net/js/zero.js"></script>
</head>
<body>
<!--
	<div class="header ">
		<h1 class="title">
			<?php echo $this->Html->link("店頭へ", 'http://moegokoro.com/drive'); ?>
		</h1>
	</div>
-->
	<div class="margin_top">
		<?php //echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer">
		<?php //echo $this->Html->link(
				//$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				//'http://www.cakephp.org/',
				//array('target' => '_blank', 'escape' => false)
			//);
		?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
