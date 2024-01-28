<?php 

  session_start();


  // Remover índices do array de sessão
  // unset()

  // Destruir as variável de sessão
  // Ao destruir a sessão as variáveis de sessão ainda ficam disponivel ate uma proxima requisição
  // session_distroy()

  session_destroy();
  header("location: index.php")
?>