<div class="frame">
	<div class="frame_3">
		
	</div>
	<div class="frame_9">
		<table class="table">
			<tr>
				<td>オーダーID</td>
				<td>売上</td>
			</tr>
			
			<?php
			foreach($orders as $order){
				echo("<tr>");
					echo("<td>");
						echo($order["Operation"]["id"]);
					echo("</td>");
					echo("<td>");
					
					echo("</td>");
				echo("</tr>");
			}
			?>
		</table>
	</div>
</div>