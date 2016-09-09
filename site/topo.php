<?php
session_start();
require('conexao/config.php');
require('conexao/connection.php');
require('conexao/database.php');
$con = DBConnect();
if(!isset($EMPRESA)){
	$EMPRESA = array();
}
$EMPRESA = array();
$dados = DBLeftJoin('empresa e',
					'left join '.DB_PREFIX.'_cidades c on c.id = e.id_cidades
					 left join '.DB_PREFIX.'_estados u on u.id = c.id_estados',
					'',
					'e.*, c.cidade, u.estado, u.sigla');
foreach ($dados[0] as $key => $value) {
	$EMPRESA[$key] = $value;	
}
$EMPRESA['brasao']		= 'img/brasao.png';
$EMPRESA['autor']		= 'Anderson Roberto - anderson_r_oliveira@hotmail.com';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="<?=$EMPRESA['descricao']?>">
	    <meta name="author" content="<?=$EMPRESA['autor']?>">
	    <link rel="icon" href="img/<?=$EMPRESA['favicon']?>">
	
	    <title><?=$EMPRESA['titulo']?></title>
	
	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.min.css?v=<?=date('dmYHis')?>" rel="stylesheet">
	    <!-- Bootstrap theme -->
	    <link href="css/bootstrap-theme.min.css?v=<?=date('dmYHis')?>" rel="stylesheet">
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <link href="assets/css/ie10-viewport-bug-workaround.css?v=<?=date('dmYHis')?>" rel="stylesheet">
	
	    <!-- Custom styles for this template -->
	    <link href="css/theme.css?v=<?=date('dmYHis')?>" rel="stylesheet">
	    <link href="css/style.css?v=<?=date('dmYHis')?>" rel="stylesheet">
	
	    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	    <script src="assets/js/ie-emulation-modes-warning.js?v=<?=date('dmYHis')?>"></script>
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
	
	<body>
    
