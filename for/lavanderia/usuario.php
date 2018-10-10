<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$d = $_GET['d'];

$result = mysql_query("SELECT lavanderia_nome_enfermagem FROM spsp1.lavanderia_enfermagem WHERE lavanderia_coren_enfermagem =\"".htmlentities($d)."\"");

$row = mysql_fetch_row($result);

if ($row){echo "<script type='text/javascript'>alert('Coren encontrado com sucesso');</script>";}
else {echo "<script type='text/javascript'>alert('Digite um Coren válido');</script>";}


?>