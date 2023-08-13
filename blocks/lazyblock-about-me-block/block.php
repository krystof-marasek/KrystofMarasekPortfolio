<!-- ABOUT ME BLOCK -->

<div id="about-me" class="about-me-block-component container-fluid overflow-hidden">
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
	  	  	<div class="about-me-block-image col-lg-6 col-12 d-flex align-items-center" data-aos="fade-right" data-aos-duration="750">>
				<?php if ( isset( $attributes['image']['url'] ) ) : ?>
  					<img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
				<?php endif; ?>
	  	  	</div>
	  	  	<div class="about-me-block-text-container d-flex justify-content-center flex-column col-lg-6 col-12">
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