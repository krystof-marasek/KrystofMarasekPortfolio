<!-- INTRODUCTION -->

<div class="primary-block-component container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex">

	  	    <div class="primary-block-text-container d-flex justify-content-center flex-column col-lg-6 col-12">
	  	      	<div class="primary-block-text-content-container">
	  	      	  	<h2>
                        <?php echo $attributes["header"]?>
	  	      	  	</h2>
	  	      	  	<p>
                        <?php echo $attributes["text"]?>
                    </p>
	  	      	  	<div class="primary-block-text-button col-12 d-flex justify-content-start align-item-center">
		    			<a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-primary"><?php echo $attributes["button-text"]?></button></a>
	  	      	  	</div>
	  	      	</div>
	  	    </div>
            <div class="primary-block-video col-lg-6 col-12 d-flex align-items-center">
                <div class="introduction-video">
                    <iframe width="560" height="315" src="<?php echo $attributes["video-link"]?>" title="<?php echo $attributes["video-title"]?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
	  	    </div>

        </div>
	</div>
</div>