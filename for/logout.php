<?
/*
     phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da versão:      15/01/2006
     Número da versão:    001
     Versão:              1.1
     Desenvolvido em Poços de Caldas, MG
     http://www.phpx.com.br/
     logout.php
*/
include("config.php");
session_destroy();
header("Location: ".$url."/index.php?");
?>