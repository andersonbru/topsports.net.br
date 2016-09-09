<?php
include_once('topo.php');
include_once('cabecalho.php');
include_once('menu.php');
?>
<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		    	<h3 class="titulos">Produtos <small>Categoria</small></h3>
		    </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
			<h4 class="titulos text-left">Categorias</h4>
			<ul class="azul-topsports">
			<?php
			for ($i=1; $i <= 20; $i++) {
				echo '<li>Categoria '.$i.'</li>';				 
			}			
			?>
			</ul>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
			
			<?php
			$qtd_pagina = 12;
			
			$total_prod = 50;
            $paginas =  (($total_prod % $qtd_pagina) > 0) ? (int)($total_prod / $qtd_pagina) + 1 : ($total_prod / $qtd_pagina);
			
			if (isset($_GET['p'])) {
              $pagina = (int)$_GET['p'];
            } else {
              $pagina = 1;
            }
            $pagina = max(min($paginas, $pagina), 1);
            $offset = ($pagina - 1) * $qtd_pagina;
			
			
			
			?>
			
			
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
		</div>
	</div>
	
	<div class="row text-center">
		<nav aria-label="Page navigation text-center">
			<!--
			<ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
		    	<li><a href="#">1</a></li>
		    	<li><a href="#">2</a></li>
		    	<li><a href="#">3</a></li>
		    	<li><a href="#">4</a></li>
		    	<li><a href="#">5</a></li>
		    	<li>
			    	<a href="#" aria-label="Next">
			        	<span aria-hidden="true">&raquo;</span>
			      	</a>
		    	</li>
		  	</ul>
		  	-->
		  			  	   
            <ul class="pagination">
                <?php
                if ($total_prod > 0) {
                    for ($n = 1; $n <= $paginas; $n++) {
                        echo '<li class="'.($n==$pagina?'active':'').'"><a href="#">'.$n.'</a></li>';
                    }
                }
                ?>                            
            </ul>
		  	
		</nav>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		    </div>
		</div>
	</div>
	
</div> <!-- /container -->
<?php
include_once('rodape.php');
?>
