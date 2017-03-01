<div id="sidebar">
	<ul>

		<?php 
			$opc = array(
				"order"=>"ASC",
				"title_li"=>"<h4>Links Quentes</h4>"
			);
			wp_list_categories($opc);
		?>
	</ul>
</div>