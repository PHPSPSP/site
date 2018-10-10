<?php

/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../privado.php");


$u = $_POST['u']; 
$l = $_POST['l']; 
$c = $_POST['c']; 
$e = $_POST['e']; 
$d = $_POST['d'];
$u = $_POST['u'];
$s = md5(md5(md5(md5($_POST['s']))));
$date = date("Y-m-d h:i:s");
$confere = false;

$updates = array();

foreach ($_POST as $k => $v) {
	if (preg_match('/^e/i', $k)) {
		$updates[] = array(
			'existente' => $_POST['c' . preg_replace('/^e/i', '', $k)],
			'entregue' => $v,
			'id' => preg_replace('/[^0-9]/', '', $k)
		);
	}
}

$consulta = mysql_query("SELECT * FROM spsp1.usuarios_hosp where nome = '$u'");
while ($dados = mysql_fetch_array($consulta))
$ui = $dados['id'];

foreach ($updates as $update) {
		mysql_query("UPDATE lavanderia_controle SET 
contagem_existente='".mysql_real_escape_string($update['existente'])."',  
contagem_entrega='".mysql_real_escape_string($update['entregue'])."', 
lavanderia_usuario='".$ui."', 
lavanderia_enfermagem='".$confere1."',
data_hora='".$date."'
WHERE lavanderia_id_controle = '".$update['id']."'");
	}

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Atualização de enxoval realizado com sucesso!');
    window.history.back();
        </SCRIPT>");