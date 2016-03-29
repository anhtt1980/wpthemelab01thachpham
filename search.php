<?php get_header(); ?>
<div class="content">
	<section id="main-content">
		<div class="search-info">
			<?php 
				$search_query = new WP_Query('s='.$s.'&showpost=-1');
				$search_keyword = wp_specialchars($s, 1);
				$search_count = $search_query->post_count;

				echo "<pre>".$search_count." results returned.</pre>";

				printf(__('Found %1$s results', 'thachpham'), $search_count);
			?>
		</div>
	</section>
	<section id="sidebar">
		<?php get_sidebar( ); ?>
	</section>
</div>
<?php get_footer(); ?>
