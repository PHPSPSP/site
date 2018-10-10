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
		mysql_query("UPDATE lavanderia_controle SET 
contagem_existente='".mysql_real_escape_string($update['existente'])."',  
contagem_entrega='".mysql_real_escape_string($update['entregue'])."', 
lavanderia_usuario='".$ui."', 
lavanderia_enfermagem='".$confere1."',
data_hora='".$date."'
WHERE lavanderia_id_controle = '".$update['id']."'");
	}
/*$lista_enxoval_array = array();

$consulta = mysql_query("SELECT e.lavanderia_id_enxoval, e.lavanderia_nome_enxoval, c.lavanderia_local, c.lavanderia_enxoval, c.contagem_padrao, c.lavanderia_id_controle FROM lavanderia_controle c, lavanderia_enxoval e where c.lavanderia_local=".$l." and e.lavanderia_id_enxoval = c.lavanderia_enxoval");

while ($dados = mysql_fetch_array($consulta)){

}

$lista_enxoval = implode("", $sql_array);
echo $lista_enxoval;*/

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Atualização de enxoval realizado com sucesso!');
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