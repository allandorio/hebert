<div id="sidebar">
	<ul>

		<?php 
			$opc = array(
				"order"=>"ASC",
				"title_li"=>"<strong>Links Quentes</strong>"
			);
			wp_list_categories($opc);
		?>
	</ul>
</div>