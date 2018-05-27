<?php get_header(); ?>
    <!-- Body -->
     <section>
	  <span class="anchor" id="blogbody"></span>
       <div class="bg-light">
        <div class="container">
          <div class="row">
          <div class="col-lg-8 blog-post-bg mb-5">
			  
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						get_template_part( 'content', get_post_format() );
					} // end while ?>
					
					<nav>
	<ul class="pagination pt-3">
	<div class="nav-previous alignleft mr-2"><?php next_posts_link( 'Older Posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>

	</ul>
</nav>
	
				<?php } // end if
			?>
			
		  </div>
			
			<?php get_sidebar(); ?>
			
			</div>  
		  </div>
         </div>
        </div>
    </section>
    
    <?php get_footer(); ?>