 </main>

    <footer>
      <div class="container">
	  <!-- Logo -->	
      <div class="row">
	      <div class="col-12 text-center">
	        <a href="http://meghanfagan.com/" title="Home"><img class="footerlogo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Meghan Fagan Logo"></a>
	      </div>
		</div>
       <div class="row">
         <div class="col text-center">
           <p class="copyright mt-3">&copy;
     	
			<script>
			var dteNow = new Date();
			var intYear = dteNow.getFullYear();
			document.write(intYear);
			</script>
     
     		Meghan Fagan. All rights reserved.</p> 
		 </div>
	   </div>
      </div>
      
      <!-- Back to Top Button -->
      <button onclick="topFunction()" id="myBtn" title="Return to Top of Page">&#9650;<br />Back to<br />Top</button>
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Custom JavaScripts
	<script src="scripts.js"></script> -->
  
	<!--GOOGLE ANALYTICS-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58497922-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<?php wp_footer(); ?>
  </body>
</html>
