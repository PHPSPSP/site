<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include '../config.php';

$busca = $_POST['excel2'];
$dataaa = date("Y-m-d H:i:s");
$hoje = date('d/m/Y H.i', strtotime($dataaa));

$forver = $_POST['forver'];
$coltotalred = $_POST['coltotalred'];

$query = "$busca";
$executar_query = mysql_query($query);
$contar = mysql_num_rows($executar_query);

$total = mysql_query($query);
$totalreg = mysql_num_rows($total);
/*".$forver." - */
for($i=0;$i<1;$i++){   
$html[$i] = "";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='4' align='center'><b><font size='+2'>Relatório de Redução de Colaboradores</font></b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='4'><b>".$totalreg."</b> Reduções Realizadas</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='4'><b>".$coltotalred."</b> Colaboradores Reduzidos</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' bgcolor='#FF6464'>";
	$html[$i] .= "<td align='center'><b>DATA DA REDUÇÃO</b></td>";
	$html[$i] .= "<td align='center'><b>GESTOR</b></td>";
	$html[$i] .= "<td align='center'><b>SUPERVISOR</b></td>";
	$html[$i] .= "<td align='center'><b>COLABORADORES REDUZIDOS</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}
 
$i = 1;

while($ret = mysql_fetch_array($executar_query)){

	$data2 = $ret['data2'];
	$gestor = $ret['gestor'];
	$supervisor = $ret['campo48'];
	
$totalcol = $ret['campo21'] + $ret['campo212'] + $ret['campo213'];

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center'>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data2))."</td>";
	$html[$i] .= "<td align='left'>$gestor</td>";
	$html[$i] .= "<td align='left'>$supervisor</td>";
	$html[$i] .= "<td align='center'>$totalcol</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Reducao_Colaboradores '.$hoje.'.xls';
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename={$arquivo}" );
header ("Content-Description: SPSP" );
 
for($i=0;$i<=$contar;$i++){  
    echo $html[$i];
}
?>