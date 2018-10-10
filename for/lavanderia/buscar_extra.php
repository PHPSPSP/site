<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
?>

<b>Extra:</b><br>
<div class='col-md-6'>Nome</div>
<div class='col-md-6'>Contagem da Entrega</div>
<?
$l = $_GET['l'];
$lista_extra_array = array();
$consulta = mysql_query("SELECT e.lavanderia_id_enxoval, e.lavanderia_nome_enxoval, c.lavanderia_local, c.lavanderia_enxoval, c.contagem_entrega, c.lavanderia_id_extra FROM lavanderia_extra c, lavanderia_enxoval e where c.lavanderia_local=".$l." and e.lavanderia_id_enxoval = c.lavanderia_enxoval");
while ($dados = mysql_fetch_array($consulta)){
$lista_extra_array[] = "<br>
<div class='col-md-6'><div style='display: none;'><input type='text' size='3' class='text-center' id='n".$dados['lavanderia_id_extra']."' name='n".$dados['lavanderia_id_extra']."' readonly value='".$dados['lavanderia_enxoval']."'></div>".$dados['lavanderia_nome_enxoval']."</div>
<div class='col-md-6'><input type='text' size='3' class='text-center' id='e".$dados['lavanderia_id_extra']."' name='e".$dados['lavanderia_id_extra']."'></div>";
}
$lista_extra = implode("", $lista_extra_array);
echo $lista_extra;
?>