<?php get_header();?>

<!-- <div class="warning">
	<h1 style="text-align:center;">DISCLAIMER! THIS WEBSITE IS STILL UNDER DEVELOPMENT. THANK YOU FOR UNDERSTANDING.</h1>
</div> -->

<!-- INTRODUCTION -->

<div class="primary-block-component container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex">

	  	    <div class="primary-block-text-container d-flex justify-content-center flex-column col-lg-6 col-12">
	  	      	<div class="primary-block-text-content-container">
	  	      	  	<h2>
                        Hello there, <br>
                        My name is Krystof Marasek
	  	      	  	</h2>
	  	      	  	<p>
                        I am a Multimedia Designer experienced in Web Development, Video Production, and Video Game Design.	  	  	  	  	
                    </p>
	  	      	  	<div class="primary-block-text-button col-12 d-flex justify-content-start align-item-center">
		    			<a href=""><button type="button" class="btn btn-primary">Read More</button></a>
	  	      	  	</div>
	  	      	</div>
	  	    </div>
            <div class="primary-block-video col-lg-6 col-12 d-flex align-items-center">
                <div class="introduction-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pi7V7JDnC2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
	  	    </div>

        </div>
	</div>
</div>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
