
	<footer class="footer fundo-rodape">
    	<div class="container">
     		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
     			<h4 class="titulos text-left">Sobre nós</h4>
     			<p class="text-justify font-branco">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 30px;">
				<div class="row">
					<h4 class="titulos text-left">Produtos</h4>
					<?php
					$fg = 1;
					for ($i=1; $i <= 20; $i++) {
						if($fg==1){
							echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">';
							echo '<ul class="font-branco">';
						} 
						
						echo '<li>Categoria '.$i.'</li>';
						
						$fg++;
						if($fg==11){
							echo '</ul>';
							echo '</div>';
							$fg = 1;
						} 
					}
					/*
					if($fg<10){
						echo '</ul>';
						echo '</div>';
					}
					*/
					?>
						
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<center>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/TopSportsS/?fref=ts&tabs=timeline&width=450&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1442042802762843" width="450" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>	
				</center>
				
			</div>
      	</div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->    
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script src="js/jquery.mask.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
<?php
DBClose($con);
?>