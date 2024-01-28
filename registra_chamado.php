<?php
session_start();

// Montagem do texto
foreach ($_POST as $indice => $valor) {
  $_POST[$indice] = str_replace("#", "-", $valor);
}

// $titulo = str_replace("#", "-", $_POST["titulo"]);
// $categoria = str_replace("#", "-", $_POST["categoria"]);
// $descricao = str_replace("#", "-", $_POST["descricao"]);

// $texto = str_replace("#", " ", implode("#", $_POST));
$texto = $_SESSION["id"] . "#" .  implode("#", $_POST);

$format = $texto . PHP_EOL;


// função para abrir um arquivo, primeiro parametro é o nome e o segunto e o modo(a -> apenas para escrita)
$arquivo = fopen("../../app_help_desk/arquivo.hd", "a");

// Escrevendo no arquivo
fwrite($arquivo, $format);

// Fechando o arquivo
fclose($arquivo);

header("Location: abrir_chamado.php");

// echo $format;
