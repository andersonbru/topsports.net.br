<?php
include_once('topo.php');
include_once('cabecalho.php');
include_once('menu.php');
?>
<div class="container">
	
	<div class="row">
		<div class="">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				<?php
				for ($i=0; $i < 5; $i++) { 
					echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" class="'.($i==0?'active':'').'"></li>';
				}
				?>
				</ol>
				<div class="carousel-inner" role="listbox">					
				<?php
				for ($i=0; $i < 5; $i++) { 
					echo '<div class="item '.($i==0?'active':'').'">
			    			<img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="'.$i.'" class="img img-responsive" style="max-height:300px; width:100%" />
			  			</div>';	
				}
				?>					
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  	<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		  			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  			<span class="sr-only">Next</span>
				</a>
		    </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		    	<h3 class="titulos">Promoções da Semana</h3>
		    </div>
		</div>
	</div>
	<div class="row">
    	<?php
    	for ($i=0; $i <= 3; $i++) { 
			echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="thumbnail">
				      <img class="img-responsive" src="'.$EMPRESA['brasao'].'" alt="alt" />
				      <div class="caption">
				        <h4>Produto '.$i.'</h4>
				        <p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          	<p class="text-right"><a class="btn btn-primary btn-xs" href="#" role="button">Ver Mais »</a></p>
				      </div>
				    </div>
				  </div>';
		}
    	?>
    </div>        
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header"></div>
		</div>
	</div>
	<!-- Produtos Promoções Final -->
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="titulos text-center">Propaganda</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		    	<h3 class="titulos">Destaques</h3>
		    </div>
		</div>
	</div>
	
	<?php
	
	$qtd = 25;
	$f   = 1;
	for ($i=1; $i <= $qtd; $i++) {
			 
		if($f==1){
			echo '<div class="row">';
		}
		
		echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="thumbnail">
				      <img class="img-responsive" src="'.$EMPRESA['brasao'].'" alt="alt" />
				      <div class="caption">
				        <h4>Produto '.$i.'</h4>
				        <p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          	<p class="text-right"><a class="btn btn-primary btn-xs" href="#" role="button">Ver Mais »</a></p>
				      </div>
				    </div>
				  </div>';
						  
		if($f==4){
			echo '</div><br />';
			$f = 0;
		}
		
		$f++;
	}
	if($f<4){
		echo '</div>';
	} 
	?>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header"></div>
		</div>
	</div>
	<!-- Destaque Final -->
    
</div> <!-- /container -->
<?php
include_once('rodape.php');
?>
