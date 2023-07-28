<!-- NEWS FEED BLOCK -->

<div id="news-feed" class="header-divider-component container-fluid" style="padding: 40px 0; background-color: var(--bs-secondary-background);">
  
	<div class="header-divider-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="header-divider-container d-flex flex-column justify-content-between">
					<div class="header-divider-text-container">
						<h1><?php echo $attributes["header-divider"]?></h1>
					</div>
					<div class="header-divider-text-container d-flex flex-column align-items-center">
						<p><?php echo $attributes["header-divider-text"]?></p>
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
			<div class="row row-cols-1 row-cols-md-2 g-4" style="margin-top: 0;">
                <?php foreach($attributes["news"] as $news): ?>
				    <div class="col">
				      	<div class="card h-100">
                            <?php if ( isset( $news["image"]['url'] ) ) : ?>
                                <img class="card-img-top" src="<?php echo esc_url( $news["image"]['url'] ); ?>" alt="<?php echo esc_attr( $news["image"]['alt'] ); ?>">
                            <?php endif; ?>
				        	<div class="card-body">
				        	  	<h3 class="card-title"><?php echo $news["card-title"]?></h3>
				        	  	<p class="card-text"><?php echo $news["card-text"]?></p>
				    			<a href="<?php echo $news["button-link"]?>">
                                    <button type="button" class="btn btn-primary"><?php echo $news["button-text"]?></button>
                                </a>
				        	</div>
				      	</div>
				    </div>
                <?php endforeach ?>
			</div>
		</div>

	</div>
</div>