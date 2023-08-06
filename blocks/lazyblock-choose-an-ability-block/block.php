<!-- CHOOSE AN ABILITY -->

<div id="my-abilities" class="choose-ability-component container-fluid">
  
	<div class="choose-ability-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="choose-ability-container d-flex flex-column justify-content-between">
					<div class="choose-ability-header-container">
						<h1><?php echo $attributes["header"]?></h1>
					</div>
					<div class="choose-ability-text-container d-flex flex-column align-items-center">
						<p><?php echo $attributes["text"]?></p>
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

        <div class="filter-row row g-0">
            <div class="filters">
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-three-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/GameDesign.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-three-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-two-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/VideoProduction.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-two-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-one-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/WebDesign.svg" alt="">
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-one-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

	</div>

</div>