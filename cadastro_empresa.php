<?php 
session_start();

if(isset($_SESSION['nome'])){
}else{
	header("location: index.php");
	die();
}
$link = mysql_connect('127.0.0.1','root','');

mysql_select_db('DataBase',$link);

$query = "SELECT MAX(  `codigo` ) AS article FROM empresas";
$query = mysql_query($query,$link);
$resultado = mysql_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Cadastro de empresas	
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
	<form action="cadastrar_empresa.php" method="POST">
		<input class="input" type="number" name="codigo" placeholder="código" min="<?php echo $resultado['article']+1; ?>"><br><br>
		<input class="input" type="text" name="razao" placeholder="razão social"><br><br>
		<input class="input" type="text" name="fantasia" placeholder=" fantasia"><br><br>
		<input class="input" type="password" name="senha" placeholder="senha"><br><br>
		<input type="submit" class="btn orange" name="Gravar"><br><br>
	</form>
	<a  href="seletor.php"><button class="btn orange">Voltar</button></a>
	</center>	
</body>
</html>
<?php 
if(isset($_GET['error']) == true){
	echo "<center><h3 style='color: #e74c3c; font-family: sans-serif'>Houve um erro</h3></center>";
	echo mysql_error();
}
 ?>