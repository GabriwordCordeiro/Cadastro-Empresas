<!DOCTYPE html>
<html>
  <head>
    <?php 
       if(isset($_COOKIE["nome"]) && isset($_COOKIE["senha"])){
          //verificar a existencia se SIM mandar para o verifica no verifica pegar a variavel do cookie ou variavel
          //header("location:verifica.php");
        $nome = $_COOKIE["nome"];
        $senha = $_COOKIE["senha"];
        }else{
          $nome = "";
          $senha = "";
        }

     ?>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
  </head>
  <body>
    <center>
    <div class="img">
      <img src="img/ico.png" alt="icone" id="icon">
    </center>
    </div>
    <form class="" action="verifica.php" method="post">
      <center>
        <div id="login">
          <input type="text" name="name"  placeholder="Name" class="input"  value="<?php  echo $nome;?>"><br><br>
          <input type="password" name="password"  placeholder="Senha" class="input" value="<?php  echo $senha;?>"><br><br>
          <input type="submit" name="Enviar" value="Enviar" class="btn green">
        </div>
      </center>
    </form>
<!--     <div class="link" >
      <center>
        <h2><i>**Teste**</i></h2>
        <button type="button" name="button" class="btn"><a href="index.html">index.html</a></button>
        <button type="button" name="button" class="btn"><a href="verifica.php">verifica.php</a></button>
      </center>
    </div>
 -->  </body>
</html>

