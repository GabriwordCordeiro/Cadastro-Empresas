<?php 
session_start();

if(isset($_COOKIE["nome"]) && isset($_COOKIE["senha"])){
	$nome = $_COOKIE["nome"];
	$senha = $_COOKIE["senha"];
}else{
	$nome = $_POST['name'];
	$senha = $_POST['password'];
	}

$link = mysql_connect('127.0.0.1','root','');

mysql_select_db('DataBase',$link);

if(!$link){
	echo ('error'.mysql_error());
}
 date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d H:i:s");


//Anti SQL Injection
$nome = addslashes($nome);
$senha = addslashes($senha);

$query_in = "UPDATE `usuarios` SET ultimo_log = CURRENT_TIMESTAMP WHERE username = '$nome' && senha = '$senha'";
$query = mysql_query($query_in,$link);

$_SESSION['nome'] = $nome;
$_SESSION['hrlogin'] = $data;

//echo $nome.$email.$ddd.$telefone.$texto;

$query = "SELECT username,senha FROM usuarios where username = '$nome' && senha = '$senha' ";
$query = mysql_query($query,$link);

$resultado = mysql_fetch_assoc($query);

if($resultado){
	header("Location: seletor.php");
	setcookie("nome",$nome,time()+(60*60*24*180)*2);
	setcookie("senha",$senha,time()+(60*60*24*180)*2);
	
}else{
	header("Location: index.php");
}




?>