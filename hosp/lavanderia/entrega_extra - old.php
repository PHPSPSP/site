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
			'id' => preg_replace('/[^0-9]/', '', $k)
		);
	}
}

$consulta = mysql_query("SELECT * FROM spsp1.lavanderia_enfermagem where lavanderia_coren_enfermagem = '$d' and lavanderia_senha_enfermagem = '$s'");
while ($dados = mysql_fetch_array($consulta)) {
	$confere1 = $dados['lavanderia_id_enfermagem'];
	$confere = true;
}

$consulta = mysql_query("SELECT * FROM spsp1.usuarios_hosp where nome = '$u'");
while ($dados = mysql_fetch_array($consulta))
$ui = $dados['id'];

$sql = mysql_query("SELECT * FROM lavanderia_enfermagem WHERE lavanderia_coren_enfermagem='$d'");
$cnt = @mysql_num_rows($sql);
if($cnt > 0){

if ($confere) {


foreach ($updates as $update) {
		mysql_query("UPDATE lavanderia_extra SET 
contagem_entrega='".mysql_real_escape_string($update['entregue'])."', 
lavanderia_usuario='".$ui."', 
lavanderia_enfermagem='".$confere1."',
data_hora='".$date."'
WHERE lavanderia_id_extra = '".$update['id']."'");
	}

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Entrega extra de enxoval realizada com sucesso!');
    window.history.back();
	</script
        </SCRIPT>");
}

else {echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('A senha informada não confere com o coren informado!');
	window.history.back();
	</SCRIPT>");}

	} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Este enfermeiro não está cadastrado em nosso banco de dados!');
	window.history.back();
	</SCRIPT>");
};