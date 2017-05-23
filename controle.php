<?php
  $nome = (int)$_GET["a"];
  var_dump( $nome);

  $ip = $_SERVER["REMOTE_ADDR"];  //pegar ip dinamico
  $pastaUsada = $_SERVER["SCRIPT_NAME"];//pasta que esta sendo acessada
  echo $pastaUsada;

/*
criado por EMERSON RODRIGUES
 este sistema conterá algumas funcionalidades escritas no comentario
 */
//acesso de usuarios
//carrinho de compras
//log de compras LOGIN / DATA / HORA / PASTA ACESSADA / EVENTO
//gerar boleto
 ?>
