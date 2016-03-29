<?php get_header(); ?>
<div class="content">
	<section id="main-content">
	<?php 
		_e('<h2>404 - NOT FOUND!!!</h2>'); 
		get_search_form( );
		_e('<h3>Categories</h3>');
		echo ('<div class="404-cat-list">');
		wp_list_categories(array('title_li' => '') );
		echo ('</div>');
	?>
	</section>
</div>
<?php get_footer(); ?>
