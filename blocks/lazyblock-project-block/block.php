<?php foreach($attributes["projects"] as $project): ?>

    <div id="<?php echo $project["project-id"]?>" class="secondary-block-component container-fluid overflow-hidden">
    	<div class="container">
    	  	<div class="row d-flex">
                
                <div class="secondary-block-text-container d-flex justify-content-center flex-column col-lg-6 col-12">
    	  	      	<div class="secondary-block-text-content-container">
    	  	      	  	<h2>
                            <?php echo $project["header"]?>
    	  	      	  	</h2>
    	  	      	  	<p>
                            <?php echo $project["description"]?>
                        </p>
						<div class="secondary-block-buttons">
    	  	      	  		<div class="secondary-block-text-button d-flex justify-content-start align-item-center" data-aos="zoom-in-up">
    		    				<a href="<?php echo $project["button-link"]?>"><button type="button" class="btn btn-primary" style="margin:0;"><?php echo $project["button-text"]?></button></a>
    	  	      	  		</div>
							<?php if ( isset( $project['button-2-link'] ) ) : ?>
								<div id="margin-for-button" class="secondary-block-text-button d-flex justify-content-start align-item-center" data-aos="zoom-in-up" data-aos-delay="100">
    		    					<a href="<?php echo $project["button-2-link"]?>"><button type="button" class="btn btn-primary" style="margin:0;"><?php echo $project["button-2-text"]?></button></a>
    	  	      	  			</div>
							<?php endif; ?>
						</div>
    	  	      	</div>
    	  	    </div>
                <div class="secondary-block-video col-lg-6 col-12 d-flex align-items-center">
                    <div class="showcase-video" data-aos="fade-left" data-aos-duration="750">
                        <iframe width="560" height="315" src="<?php echo $project["video-link"]?>" title="<?php echo $project["video-title"]?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
    	  	    </div>  

            </div>
    	</div>
    </div>

<?php endforeach ?>