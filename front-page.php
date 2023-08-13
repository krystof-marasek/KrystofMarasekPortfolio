<?php get_header();?>

<!-- <div class="warning">
	<h1 style="text-align:center;">DISCLAIMER! THIS WEBSITE IS STILL UNDER DEVELOPMENT. THANK YOU FOR UNDERSTANDING.</h1>
</div> -->

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
