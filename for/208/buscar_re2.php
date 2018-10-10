<?php
header("Content-Type: application/json; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include_once('../config.php');
include('../privado.php');

$re2 = $_GET['recolsubs'];

$sql = "SELECT V.CODVIGIL, V.NOMEVIGIL, T.DESCRICAO SUPERVISOR FROM sarvigil V, sarclien C, sartab T WHERE V.CODVIGIL = " . $re2 . " AND C.CODCLI = V.CODCLI AND (T.CODTAB LIKE CONCAT('130%', V.AREA) OR T.CODTAB LIKE CONCAT('1300%', V.AREA) OR T.CODTAB LIKE CONCAT('13000%', V.AREA)) AND V.DTDEMISSAO IS NULL GROUP BY V.CODVIGIL ORDER BY V.NOMEVIGIL ASC";
$res = @mysql_query($sql) or die(@mysql_error());
$resposta = array();

while ($row = @mysql_fetch_array($res)) {
	$resposta['CODVIGIL'] = utf8_encode($row['CODVIGIL']);
	$resposta['NOMEVIGIL'] = utf8_encode($row['NOMEVIGIL']);
	$resposta['SUPERVISOR'] = utf8_encode($row['SUPERVISOR']);
}

echo json_encode($resposta);