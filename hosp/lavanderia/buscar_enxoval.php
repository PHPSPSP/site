<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
$clienteativo = $_SESSION['cliente'];

?>

<b>Enxoval:</b><br>
<div class='col-md-3'>Nome</div>
<div class='col-md-3'>Contagem Padrão</div>
<div class='col-md-3'>Contagem Existente</div>
<div class='col-md-3'>Contagem da Entrega</div>
<?
$l = $_GET['l'];
$lista_enxoval_array = array();
$consulta2 = mysql_query("SELECT data_hora FROM lavanderia_controle WHERE lavanderia_local = '".$l."' AND lavanderia_cliente = '".$clienteativo."' ORDER BY lavanderia_id_controle DESC limit 1");
$dados2 = mysql_fetch_array($consulta2);
$ultimo=$dados2['data_hora'];

$consulta = mysql_query("SELECT e.lavanderia_id_enxoval, e.lavanderia_nome_enxoval, e.lavanderia_cliente_enxoval, c.lavanderia_local, c.lavanderia_enxoval, c.contagem_padrao, c.lavanderia_id_controle, c.data_hora FROM lavanderia_controle c, lavanderia_enxoval e where e.lavanderia_cliente_enxoval = '$clienteativo' AND c.lavanderia_local='$l' and e.lavanderia_id_enxoval = c.lavanderia_enxoval AND c.data_hora = '".$ultimo."'");
while ($dados = mysql_fetch_array($consulta)){
$lista_enxoval_array[] = "<br>
<div class='col-md-3'><div style='display: none;'><input type='text' size='3' class='text-center' id='n".$dados['lavanderia_id_controle']."' name='n".$dados['lavanderia_id_controle']."' readonly value='".$dados['lavanderia_enxoval']."'></div>".$dados['lavanderia_nome_enxoval']."</div>
<div class='col-md-3'><input type='text' size='3' class='text-center' id='p".$dados['lavanderia_id_controle']."' name='p".$dados['lavanderia_id_controle']."' readonly value='".$dados['contagem_padrao']."'></div>
<div class='col-md-3'><input type='text' size='3' class='text-center' id='c".$dados['lavanderia_id_controle']."' name='c".$dados['lavanderia_id_controle']."'></div>
<div class='col-md-3'><input type='text' size='3' class='text-center' id='e".$dados['lavanderia_id_controle']."' name='e".$dados['lavanderia_id_controle']."'></div>";
}
$lista_enxoval = implode("", $lista_enxoval_array);
echo $lista_enxoval;
?>