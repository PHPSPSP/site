<?php
header("Content-Type: application/json; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include_once('../config.php');
include('../privado.php');

$re1 = $_GET['re'];

$sql = "SELECT P.NOMEPOS, P.CODPOS, V.CODVIGIL, V.RG, V.NOMEVIGIL, V.CGC, V.TELEFONE, V.CODPOS, C.NOMECLI, C.CODCLI, T.DESCRICAO SUPERVISOR FROM sarposto P, sarvigil V, sarclien C, sartab T WHERE V.CODVIGIL = " . $re1 . " AND P.CODCLI = V.CODCLI AND P.CODPOS = V.CODPOS AND C.CODCLI = V.CODCLI AND (T.CODTAB LIKE CONCAT('130%', V.AREA) OR T.CODTAB LIKE CONCAT('1300%', V.AREA) OR T.CODTAB LIKE CONCAT('13000%', V.AREA)) AND V.DTDEMISSAO IS NULL GROUP BY V.CODVIGIL ORDER BY V.NOMEVIGIL ASC";
$res = @mysql_query($sql) or die(@mysql_error());
$resposta = array();

while ($row = @mysql_fetch_array($res)) {
	$resposta['NOMEPOS'] = utf8_encode($row['NOMEPOS']);
	$resposta['CODPOS'] = utf8_encode($row['CODPOS']);
	$resposta['CODCLI'] = utf8_encode($row['CODCLI']);
	$resposta['CODVIGIL'] = utf8_encode($row['CODVIGIL']);
	$resposta['RG'] = utf8_encode($row['RG']);
	$resposta['NOMEVIGIL'] = utf8_encode($row['NOMEVIGIL']);
	$resposta['CGC'] = utf8_encode($row['CGC']);
	$resposta['TELEFONE'] = utf8_encode($row['TELEFONE']);
	$resposta['NOMECLI'] = utf8_encode($row['NOMECLI']);
	$resposta['SUPERVISOR'] = utf8_encode($row['SUPERVISOR']);
}

echo json_encode($resposta);