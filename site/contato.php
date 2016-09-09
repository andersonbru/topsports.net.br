<?php
include_once('topo.php');
include_once('cabecalho.php');
include_once('menu.php');
?>
<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-header">
		    	<h3 class="titulos">Contato</h3>
		    </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php
			if (isset($_POST['enviar'])) {
				
				if($_SESSION['captcha']==$_POST['captchar']){
					$data = FALSE;
					if($data){
						unset($_SESSION['informacoes']);
						echo '<p class="alert alert-success text-center">
							<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							Mensagem enviada com sucesso, em breve entraremos em contato.
						  </p>';
						
					}else{
						$_SESSION['informacoes'] = $_POST;
						echo '<p class="alert alert-danger text-center">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							Erro ao enviar a mensagem tente novamente.
						  </p>';
					}
				}else{
					$_SESSION['informacoes'] = $_POST;
					echo '<p class="alert alert-warning text-center">
							<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
							Preencha corretamente o captcha.
						  </p>';
				}
					
			}
			?>
			<form class="form-horizontal validarForm" action="contato.php" method="post">
				<div class="form-group">
			    	<label for="nome" class="col-sm-2 control-label">Nome:*</label>
			    	<div class="col-sm-10">
			      		<input type="hidden" class="form-control" id="enviar" name="enviar" value="enviar" placeholder="Nome">
			      		<input type="text" class="form-control obrigatorio" id="nome" name="nome" value="<?=$_SESSION['informacoes']['nome']?>" placeholder="Nome">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="email" class="col-sm-2 control-label">E-mail:*</label>
			    	<div class="col-sm-10">
			      		<input type="email" class="form-control obrigatorio" id="email" name="email" value="<?=$_SESSION['informacoes']['email']?>" placeholder="E-mail">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="telefone" class="col-sm-2 control-label">Telefone:*</label>
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control obrigatorio telefone" id="telefone" name="telefone" value="<?=$_SESSION['informacoes']['telefone']?>" placeholder="Telefone">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="estado" class="col-sm-2 control-label">Estado:*</label>
			    	<div class="col-sm-10">
			      		<select class="form-control obrigatorio" name="estado" id="estado">
			      			<?php
			      			//$_SESSION['informacoes']['estado'];
			      			?>
			      			<option value="">--Selecione--</option>
			      		</select>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="cidade" class="col-sm-2 control-label">Cidade:*</label>
			    	<div class="col-sm-10">
			      		<select class="form-control obrigatorio" name="cidade" id="cidade">
			      			<?php
			      			//$_SESSION['informacoes']['cidade'];
			      			?>
			      			<option value="">--Selecione--</option>
			      		</select>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="mensagem" class="col-sm-2 control-label">Mensagem:*</label>
			    	<div class="col-sm-10">
			      		<textarea class="form-control obrigatorio" name="mensagem" rows="6"><?=$_SESSION['informacoes']['mensagem']?></textarea>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="estado" class="col-sm-2 control-label">Captchar:*</label>
			    	<div class="col-sm-5">
			    		<img src="captcha.php" alt="código captcha" class="img-responsive" />
			    	</div>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control obrigatorio" id="captchar" name="captchar" placeholder="Captchar" />
			    	</div>			    	
			  	</div>
			  	
			  
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-primary">Enviar</button>
			    	</div>
			  	</div>
			</form>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p><span class="glyphicon glyphicon-earphone azul-topsports" aria-hidden="true"></span> <?=$EMPRESA['telefone']?></p>
					<p><span class="glyphicon glyphicon-envelope azul-topsports" aria-hidden="true"></span> <?=$EMPRESA['email']?></p>
					<p><span class="glyphicon glyphicon-home azul-topsports" aria-hidden="true"></span> <?=$EMPRESA['endereco']?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.841695507635!2d-49.07164804983497!3d-22.32182598524027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67a52dae72a7%3A0xcab18ed0c278dbff!2sR.+Batista+de+Carvalho%2C+9-63+-+Centro%2C+Bauru+-+SP!5e0!3m2!1spt-BR!2sbr!4v1473268283517" width="500" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
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
