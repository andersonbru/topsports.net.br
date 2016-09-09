<!-- Fixed navbar -->
<div class="row">
	<nav class="navbar navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only"><img src="<?=$_SESSION['empresa']['brasao']?>" class="img img-responsive"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>	      
	    </div>
	    <div id="navbar" class="navbar-collapse collapse">
	    	<ul class="nav navbar-nav">
	      		<li class="active"><a href="index.php">Principal</a></li>
	        	<li><a href="empresa.php">Empresa</a></li>
	        	<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
		          	<ul class="dropdown-menu">
		            	<li><a href="#">Action</a></li>
		            	<li><a href="#">Another action</a></li>
		            	<li><a href="#">Something else here</a></li>
		            	<li role="separator" class="divider"></li>
		            	<li class="dropdown-header">Nav header</li>
		            	<li><a href="#">Separated link</a></li>
		            	<li><a href="#">One more separated link</a></li>
		          	</ul>
		        </li>
	        	<li><a href="contato.php">Contato</a></li>	        
	      	</ul>
	      	
	      	<form class="navbar-form navbar-right" action="" method="post">
		        <div class="input-group">
			    	<input type="text" class="form-control" id="pesquisar" name="pesquisar" placeholder="Pesquisar">
			      	<span class="input-group-btn">
			        	<button class="btn btn-default" type="button">
			        		<span class="glyphicon glyphicon-search azul-topsports" aria-hidden="true"></span>
			        	</button>
			      	</span>
			    </div>
	      	</form>
	      	
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>	
</div>
