<?php get_header(); ?>
    <!-- Body -->
     <section>
	  <span class="anchor" id="blogbody"></span>
       <div class="bg-light">
        <div class="container">
          <div class="row">
          <div class="col-lg-8 blog-post-bg mb-5">
			  
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
	 					 comments_template();
					endif;

	  			  endwhile;
				endif;
			?>
			
		  </div>
			
			<?php get_sidebar(); ?>
			
			</div>  
		  </div>
         </div>
        </div>
    </section>
    
    <?php get_footer(); ?>