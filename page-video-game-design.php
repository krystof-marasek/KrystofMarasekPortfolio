<?php get_header();?>

<div class="ability-introduction-component container-fluid">
  
	<div class="ability-introduction-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="ability-introduction-container d-flex flex-column justify-content-between">
					<div class="ability-introduction-text-container">
						<h1>VIDEO GAME DESIGN</h1>
					</div>
					<div class="ability-introduction-text-container d-flex flex-column align-items-center">
						<p>Here are all the video games related projects I have worked on:</p>
					</div>
				</div>
			</div>
		</div>

        <div class="divider-row row g-0">
            <div class="col-3 col-sm-5 p-0"></div>
            <div class="col-6 col-sm-2 p-0">
                <div id="divider-container">
                    <div id="divider"></div>
                </div>
            </div>
            <div class="col-3 col-sm-5 p-0"></div>
        </div>

	</div>

</div>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();