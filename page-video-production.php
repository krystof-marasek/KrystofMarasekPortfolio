<?php get_header();?>

<!-- ABILITY INTRODUCTION -->

<div class="header-divider-component container-fluid">
  
	<div class="header-divider-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="header-divider-container d-flex flex-column justify-content-between">
					<div class="header-divider-text-container">
						<h1>VIDEO PRODUCTION</h1>
					</div>
					<div class="header-divider-text-container d-flex flex-column align-items-center">
						<p>Here are all the video related projects I have worked on:</p>
					</div>
				</div>
			</div>
		</div>

        <div class="divider-row row g-0">
            <div class="col-3 p-0"></div>
            <div class="col-6 p-0">
                <div id="divider-container">
                    <div id="divider"></div>
                </div>
            </div>
            <div class="col-3 p-0"></div>
        </div>

	</div>

</div>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>

<!-- ABILITY MENU -->

<div class="ability-menu-component container-fluid">
  
	<div class="ability-menu-row g-0 container">
		<div class="filter-row row g-0">
            <div class="filters">
                <div class="filter col-12 col-md-4 p-0">
                    <a href="/video-game-design">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/GameDesign.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text">Video Game Design</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="/video-production">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/VideoProduction.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text">Video Production</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="/web-development">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/WebDesign.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text">Web Development</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

	</div>

</div>
<?php get_footer();