<?php get_header();?>

<!-- INTRODUCTION -->

<div class="primary-block-component container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex">

	  	    <div class="primary-block-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
	  	      	<div class="primary-block-text-content-container">
	  	      	  	<h2>
                        Hello there, <br>
                        My name is Krystof Marasek
	  	      	  	</h2>
	  	      	  	<p>
                        I am a Multimedia Designer experienced mainly in Web Development, Video Production, and Video Game Design.	  	  	  	  	
                    </p>
	  	      	  	<div class="primary-block-text-button col-12 d-flex justify-content-start align-item-center">
		    			<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
	  	      	  	</div>
	  	      	</div>
	  	    </div>
            <div class="primary-block-video col-xl-6 col-lg-10 col-12 d-flex align-items-center">
                <div class="introduction-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pi7V7JDnC2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
	  	    </div>

        </div>
	</div>
</div>

<!-- CHOOSE AN ABILITY -->

<div id="my-abilities" class="choose-ability-component container-fluid">
  
	<div class="choose-ability-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="choose-ability-container d-flex flex-column justify-content-between">
					<div class="choose-ability-text-container">
						<h1>CHOOSE AN ABILITY</h1>
					</div>
					<div class="choose-ability-text-container d-flex flex-column align-items-center">
						<p>What projects that I have worked on <br>would you like to see?</p>
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

        <div class="filter-row row g-0">
            <div class="filters">
                <div class="col-6 col-sm-4 p-0">
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
                <div class="col-6 col-sm-4 p-0">
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
                <div class="col-6 col-sm-4 p-0">
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
            </div>
        </div>

	</div>

</div>

<!-- CONTACT ME -->

<div class="contact-me-component container-fluid">
  
	<div class="contact-me-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-me-header-container d-flex flex-column justify-content-between">
					<div class="contact-me-header">
                        <h1>CONTACT ME</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contact-me-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
            <div class="contact-me-container col-lg-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">

                <div class="contact-me">

                    <div class="col-12 col-sm-6 p-0">
                        <div class="contacts" data-aos="zoom-in" data-aos-duration="500">
                            <div id="email" class="contacts-container">
                                <div class="email-box">
                                    <div class="contacts-text-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/emailme.svg" alt="">
                                        <!-- <p class="contacts-text">Email Me</p> -->
                                    </div>
                                </div>
                                <div class="email-box">
                                    <p class="contacts-text">krystofmarasek@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 p-0">
                        <div class="contacts">
                            <div id="message" class="contacts-container">
                                <div class="message-box">
                                    <div class="contacts-text-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt="">
                                        <!-- <p class="contacts-text"><a href="https://linkedin.com/in/krystof-marasek">Message Me</a></p> -->
                                    </div>
                                </div>
                                <div class="message-box">
                                    <p class="contacts-text"><a href="https://linkedin.com/in/krystof-marasek">Kryštof Marášek</a></p>
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

                <?php echo do_shortcode('[wpforms id="50"]'); ?>

	        </div>
        </div>
	</div>

</div>

<?php get_footer();
