<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php 

session_start();

if(isset($_SESSION['nome'])){
}else{
	header("location: index.php");
	die();
}

$link = mysql_connect('127.0.0.1','root','');

mysql_select_db('DataBase',$link);

$query = "SELECT  `fantasia` FROM empresas";
$exec = mysql_query($query);
while ($resultado = mysql_fetch_assoc($exec)){
	echo "<p>".$resultado['fantasia']."</p>";

}


 ?>
 <a  href="seletor.php"><button class="btn orange">Voltar</button></a>
 </body>
</html>