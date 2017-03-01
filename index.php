<?php
	get_header();
?>

<div id="main">
	<div id="conteudo">
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
		?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<hr/>
		<?php
				}
			}
			else{
				echo "Não há post algum aqui e portanto, podem ralar daqui";
			}
		?>
	</div>
	<?php  get_sidebar();	?>
	
</div>
<div id="e"></div>

	<?php get_footer(); ?>
