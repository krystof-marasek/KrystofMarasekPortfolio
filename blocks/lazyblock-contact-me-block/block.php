<!-- CONTACT ME -->

<div id="contact-me" class="contact-me-component container-fluid">
  
	<div class="contact-me-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-me-header-container d-flex flex-column justify-content-between">
					<div class="contact-me-header">
                        <h1><?php echo $attributes["header"]?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contact-me-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
            <div class="contact-me-container col-lg-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">

                <div class="contact-me">

                    <div class="col-12 col-md-6 p-0">
                        <div class="contacts">
                            <div id="email" class="contacts-container" data-aos="zoom-out">
                                <div class="email-box">
                                    <div class="contacts-icon-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/emailme.svg" alt="">
                                    </div>
                                </div>
                                <div class="email-box">
                                    <p class="contacts-text"><?php echo $attributes["email"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 p-0">
                        <div class="contacts">
                            <div id="message" class="contacts-container" data-aos="zoom-out">
                                <div class="message-box">
                                    <div class="contacts-icon-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt="">
                                    </div>
                                </div>
                                <div class="message-box">
                                    <p class="contacts-text"><a href="<?php echo $attributes["linkedin-link"]?>"><?php echo $attributes["linkedin-name"]?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

	        </div>
        </div>
	</div>

    <div class="contact-me-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
            <div class="contact-me-container col-lg-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">

                <?php echo do_shortcode( $attributes["message-form"] ); ?>

	        </div>
        </div>
	</div>

</div>