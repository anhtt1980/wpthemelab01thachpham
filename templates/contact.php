<?php  
/*
	Template name: Contact
*/
?>
<?php get_header(); ?>
<div class="content">
	<section id="main-content">
		<div class="contact-info">
			<h4>Dia chi</h4>
			<p>Thien Son plaza</p>
			<p>123456737459
		</div>
		<div class="contact-info">
			<?php echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]' ); ?>
		</div>
		<dir class="contact-info"></dir>
	</section>
	<section id="sidebar">
		<?php get_sidebar( ); ?>
	</section>
</div>
<?php get_footer(); ?>
