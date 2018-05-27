<!-- Sidebar -->
			<div class="col-lg-4 mt-5 mb-5">
				
				<!-- Connect Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg connect">
						<h2 class="mt-3 hborderbottom">Connect</h2>
						<!-- Social media icons from Tina Mailhot-Roberge - veodesign.com -->
				 		 <ul class="lists-inline pl-0 pt-2">
					 		 <li class="list-inline-item pr-2">
								  <a href="https://twitter.com/meghanfagan_art" title="Follow Me on Twitter" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="Twitter Icon"></a>
					 		 </li>
							  <li class="list-inline-item pr-2">
					 		 	<a href="https://www.linkedin.com/in/meghanfagan/" title="Find Me on LinkedIn" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin-icon.png" alt="LinkedIn Icon"></a>
							  </li>
							  <li class="list-inline-item">
					  			<a href="mailto:meghan.fagan@meghanfagan.com?Subject=Hello%20from%20Meghan%20Fagan's%20Portfolio" title="Email Me" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/email-icon.png" alt="Email Icon"></a>	
					  </li>
				  		</ul>
					</div>
				</div>
				
				<!-- Recent Posts Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg recentposts">
						<h2 class="mt-3 hborderbottom">Recent Posts</h2>
						<ul>
							<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

							<?php 
								endwhile;
								wp_reset_postdata();
							?>
						</ul>
					</div>
				</div>

				<!-- Recent Comments Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg">
						<h2 class="mt-3 hborderbottom">Recent Comments</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent massa tellus, dignissim eget arcu pharetra, ultrices pretium orci.</p>
					</div>
				</div>
		
				<!-- Archives Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg">
						<h2 class="mt-3 hborderbottom">Archives</h2>
						<ol class="list-unstyled">
							<?php wp_get_archives('type=monthly'); ?>
						</ol>
					</div>
				</div>
				
				<!-- Categories Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg categories">
						<h2 class="mt-3 hborderbottom">Categories</h2>
						<ul>
						<?php echo do_shortcode("[categories orderby=count title_li='']"); ?>
						</ul>
						 
					</div>
				</div>
				
				<!-- Tags Box -->
				<div class="row mt-4">
					<div class="col-12 blog-sidebar-bg categories">
						<h2 class="mt-3 hborderbottom">Tags</h2>
						<ul>
						<?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
						</ul
						 
					</div>
				</div>