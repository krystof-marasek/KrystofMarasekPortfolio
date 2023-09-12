<!-- ABILITY MENU -->

<div class="ability-menu-component container-fluid">
  
	<div class="ability-menu-row g-0 container">
		<div class="filter-row row g-0">
            <div class="filters">
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-one-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn" data-aos="flip-down" data-aos-delay="100">
                                <?php if ( isset( $attributes["ability-one-icon"]['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $attributes["ability-one-icon"]['url'] ); ?>" alt="<?php echo esc_attr( $attributes["ability-one-icon"]['alt'] ); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-one-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-two-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn" data-aos="flip-down" data-aos-delay="200">
                                <?php if ( isset( $attributes["ability-two-icon"]['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $attributes["ability-two-icon"]['url'] ); ?>" alt="<?php echo esc_attr( $attributes["ability-three-icon"]['alt'] ); ?>">
                                <?php endif; ?>  
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-two-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter col-12 col-md-4 p-0">
                    <a href="<?php echo $attributes["ability-three-link"]?>">
                        <div class="filter-container">
                            <div class="filter-btn" data-aos="flip-down" data-aos-delay="300">
                                <?php if ( isset( $attributes["ability-three-icon"]['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $attributes["ability-three-icon"]['url'] ); ?>" alt="<?php echo esc_attr( $attributes["ability-three-icon"]['alt'] ); ?>">
                                <?php endif; ?>                          
                            </div>
                            <div class="filter-name">
                                <p class="filter-name-text"><?php echo $attributes["ability-three-name"]?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

	</div>

</div>