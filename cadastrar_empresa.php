<?php
	session_start();
	$link = mysql_connect('127.0.0.1','root','');
	mysql_set_charset('utf8');
	mysql_select_db('DataBase',$link);

if(isset($_SESSION['nome'])){
}else{
	header("location: index.php");
	die();
}
$codigo = $_POST['codigo'];
$razao = $_POST['razao'];
$fantasia = $_POST['fantasia'];
$senha = $_POST['senha'];

	$query = "INSERT INTO empresas (codigo,razao,fantasia,senha) VALUES ('$codigo', '$razao', '$fantasia', '$senha')";
	$exec = mysql_query($query);

	if($exec)
	{
		header("location: seletor.php");
	}else{
		header("location: cadastro_empresa.php?error=true");
	}
 ?>
