<?php 
  session_start();
  // Estamos verificando se a sessão não existe OU o autenticado esteja setado como não e o retornando para o index
  if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] == "NÃO"){
    header("Location: index.php?login=erro2");
  }
?>