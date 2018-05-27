			<!-- Blog Posts -->
            
		      <h1 class="mt-5 blog-h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			  <h2 class="blog-h2">By <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php the_time(); ?></h2>
			  
			  <?php if ( has_post_thumbnail() ) {
  				the_post_thumbnail();
			  } ?>

			  <?php the_content(); ?>
			  
			  <a href="<?php comments_link(); ?>">