<!-- ABOUT ME BLOCK -->

<div class="about-me-block-component container-fluid overflow-hidden">
	<div class="container">

		<div class="about-me-header-row row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="about-me-header-container d-flex flex-column justify-content-between">
					<div class="about-me-header">
    	                <h1><?php echo $attributes["header"]?></h1>
					</div>
				</div>
			</div>
		</div>

	  	<div class="about-me-row row d-flex">
	  	  	<div class="about-me-block-image col-xl-6 col-lg-10 col-12 d-flex align-items-center">
				<?php if ( isset( $attributes['image']['url'] ) ) : ?>
  					<img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
				<?php endif; ?>
	  	  	</div>
	  	  	<div class="about-me-block-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
	  	  	  	<div class="about-me-block-text-content-container">
	  	  	  	  	<h2>
                        <?php echo $attributes["subheader"]?>
	  	  	  	  	</h2>
	  	  	  	  	<p>
                        <?php echo $attributes["text"]?>	  	  	  	  	
                    </p>
	  	  	  	</div>
	  	  	</div>
	  	</div>

	</div>
</div>

<div class="header-divider-component container-fluid" style="padding: 30px 0; background-color: var(--bs-secondary-background);">
  
	<div class="header-divider-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="header-divider-container d-flex flex-column justify-content-between">
					<div class="header-divider-text-container">
						<h1>NEWS FEED</h1>
					</div>
					<div class="header-divider-text-container d-flex flex-column align-items-center">
						<p>Here are the latest events happening in my life:</p>
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

<div class="news-feed-block-component container-fluid overflow-hidden">
	<div class="container">

		<div class="news-feed-row row d-flex justify-content-between align-items-start">
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
				  	<div class="card h-100">
				    	<img src="<?php echo get_template_directory_uri(); ?>/img/GDH-certificate.jpg" class="card-img-top" alt="...">
				    	<div class="card-body">
				    	  	<h3 class="card-title">Card title</h3>
				    	  	<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
				    	</div>
				  	</div>
				</div>
				<div class="col">
				  	<div class="card h-100">
				    	<img src="<?php echo get_template_directory_uri(); ?>/img/graduation-photo.jpg" class="card-img-top" alt="...">
				    	<div class="card-body">
				    	  	<h3 class="card-title">Card title</h3>
				    	  	<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
				    	</div>
				  	</div>
				</div>
				<div class="col">
				  	<div class="card h-100">
				    	<img src="<?php echo get_template_directory_uri(); ?>/img/visiongame-internship-1.jpg" class="card-img-top" alt="...">
				    	<div class="card-body">
				    	  	<h3 class="card-title">Card title</h3>
				    	  	<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
				    	</div>
				  	</div>
				</div>
				<div class="col">
				  	<div class="card h-100">
				    	<img src="<?php echo get_template_directory_uri(); ?>/img/The-Last-of-Us-Project.jpg" class="card-img-top" alt="...">
				    	<div class="card-body">
				    	  	<h3 class="card-title">Card title</h3>
				    	  	<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
				    	</div>
				  	</div>
				</div>
				<div class="col">
				  	<div class="card h-100">
				    	<img src="<?php echo get_template_directory_uri(); ?>/img/Incursio-short-movie.jpg" class="card-img-top" alt="...">
				    	<div class="card-body">
				    	  	<h3 class="card-title">Card title</h3>
				    	  	<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>

	</div>
</div>