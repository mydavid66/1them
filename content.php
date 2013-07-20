<div id="preloader-container">
	<div id="container">	
<!--start my code -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="widget portfolio graphics homepage">
		<div class="entry-container span4">
			<div class="widget-slider">
				<div class="flexslider" style="height:229px">
					<ul class="slides">
			    		<li><?php if (has_post_thumbnail()) { ?>
			
				     		 <div class="entry-image">
				     		 	<a href="<?php  echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" class="fancybox">
				     		 		<span class="entry-image-overlay"></span>
				     		 		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" alt="" />
				     		 	</a>
				     		 </div>
				     		 <?php } else {
				     		 	echo "<div class='entry-image'>
				     		 	<a href='images/index.jpg'  class='fancybox'>
				     		 		<span class='entry-image-overlay'></span>
				     		 		<img src='images/index.jpg' alt='' />
				     		 	</a>
				     		 </div><br>";
				     		  } ?>

			    		</li>
					</ul>
				</div>
			</div>

	  				<div class="entry drop-shadow curved">
						<!-- Portfolio Heading -->
						<h5 class="heading">
							<a href="<?php the_permalink() ?>">	
								<?php the_title() ?>
							</a>
						</h5>
						
						<!-- Portfolio Description -->
						<p><b><?php the_excerpt()?><br>
						<?php the_content() ?><br>
						<?php the_category() ?><br>
						<?php the_author() ?><br>
						<?php the_tags()?>
						</b>
						</p>
		   		 	
				   		<div class="stripes"></div>

			   		</div>
	 </div>
</div>

	<?php endwhile; // end of the loop. ?>
</div>
</div>
