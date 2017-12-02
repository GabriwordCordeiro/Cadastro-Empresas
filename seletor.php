<?php 
session_start();

if(isset($_SESSION['nome'])){

}else{
	header("location: index.php");
	die();
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<a href='cadastro_empresa.php'><button class="btn orange">Cadastro de empresas</button></a><br>
 	<a href='listar_empresa.php'><button class="btn orange">listar empresas</button></a><br>
 	<a href='encerrar.php'><button class="btn orange">encerrar</button></a><br>
 </body>
 </html>