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
$d = $_POST['d'];
$n = $_POST['n']; 
$e = $_POST['e'];
$u = $_POST['u'];
$s = md5(md5(md5(md5($_POST['s']))));
$date = date("Y-m-d h:i:s");
$confere = false;

$updates = array();

foreach ($_POST as $k => $v) {
	if (preg_match('/^e/i', $k)) {
		$updates[] = array(
			'entregue' => $_POST['e' . preg_replace('/^e/i', '', $k)],
			'nome' => $_POST['n' . preg_replace('/^e/i', '', $k)],
			'id' => preg_replace('/[^0-9]/', '', $k)
		);
	}
}

$consulta = mysql_query("SELECT * FROM spsp1.lavanderia_enfermagem where lavanderia_coren_enfermagem = '$d' and lavanderia_senha_enfermagem = '$s'");
while ($dados = mysql_fetch_array($consulta))
$confere1 = $dados['lavanderia_id_enfermagem'];

$consulta = mysql_query("SELECT * FROM spsp1.lavanderia_controle where lavanderia_local = '$l'");
while ($dados = mysql_fetch_array($consulta))
$local = $dados['lavanderia_enxoval'];

$consulta = mysql_query("SELECT * FROM spsp1.usuarios where nome = '$u'");
while ($dados = mysql_fetch_array($consulta))
$ui = $dados['id'];

foreach ($updates as $update) {
		mysql_query("INSERT lavanderia_extra SET 
contagem_entrega='".mysql_real_escape_string($update['entregue'])."', 
lavanderia_usuario='".$ui."', 
lavanderia_enfermagem='".$confere1."',
lavanderia_local='".$l."', 
lavanderia_enxoval='".mysql_real_escape_string($update['nome'])."', 
data_hora='".$date."'");
	}

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Entrega extra de enxoval realizada com sucesso!');
    window.history.back();
        </SCRIPT>");