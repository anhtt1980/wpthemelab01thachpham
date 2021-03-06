<?php  
/*
	Template name: Full width
*/
	<?php get_header(); ?>
<div class="content">
	<section id="main-content" class="full-width">
		<?php if (have_posts()) : while (have_posts ()) : the_post(); ?>
			<?php get_template_part('content', get_post_format( )); ?>
		<?php endwhile ?>
		<?php thachpham_pagination(); ?>
		<?php else: ?>
			<?php get_template_part('content', 'none'); ?>
		<?php endif ?>
	</section>
</div>
<?php get_footer(); ?>
