			<!-- Blog Posts -->
            
		      <h1 class="mt-5 blog-h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			  <h2 class="blog-h2">By <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php the_time(); ?></h2>
			  <?php if ( has_post_thumbnail() ) {?>
				<div class="row">
				<div class="col-md-3">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div class="col-md-9 align-left">
					<?php the_excerpt(); ?>
				</div>
	</div>
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>
			  
			  <a class="float-right" href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
		
			  