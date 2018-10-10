<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$d = $_GET['d'];
$s = md5(md5(md5(md5($_GET['s']))));
$s2 = $_GET['s'];

$result = mysql_query("SELECT lavanderia_nome_enfermagem FROM spsp1.lavanderia_enfermagem WHERE lavanderia_coren_enfermagem =\"".htmlentities($d)."\" AND lavanderia_senha_enfermagem =\"".htmlentities($s)."\"");

$row = mysql_fetch_row($result);

if ($row){
    echo "<script type='text/javascript'>alert('Senha validada com sucesso');</script>";
    echo ('<br><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Gravar" style="width:30%">');}
else {
    echo "<script type='text/javascript'>alert('A senha informada não é compatível com o Coren digitado');</script>";}


?>