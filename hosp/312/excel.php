<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include '../config.php';

$busca = $_POST['excel2'];
$busca1 = $_POST['excel21'];
$busca2 = $_POST['excel22'];
$forver = $_POST['forver'];
$dataaa = date("Y-m-d H:i:s");
$hoje = date('d/m/Y H.i', strtotime($dataaa));

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
	$html[$i] .= "<td colspan='6' align='center'><b><font size='+2'>Checklist Entrega de Quartos</font></b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='6'><b>".$totalreg."</b> Quartos Entregues</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='6'><b>".$busca1."</b> Quartos com <b>Não Conformidades</b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='6'><b>".$busca2."</b> Quartos com Abertura de <b>Ordem de Serviço</b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' bgcolor='#FF6464'>";
	$html[$i] .= "<td align='center'><b>DATA DA LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>TIPO DA LIMPEZA</b></td>";
    $html[$i] .= "<td align='center'><b>CLIENTE</b></td>";
    $html[$i] .= "<td align='center'><b>LÍDER</b></td>";
	$html[$i] .= "<td align='center'><b>COLABORADOR</b></td>";
	$html[$i] .= "<td align='center'><b>QUARTO</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}
 
$i = 1;



while($ret = mysql_fetch_array($executar_query)){

	$data = $ret['data'];
	$cliente = $ret['cliente1'];
	$lider = $ret['usuario'];
	$colaborador = $ret['colaborador'];
	$quarto = $ret['quarto'];
	$tipolimpeza = $ret['tipolimpeza'];

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center'>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";
	$html[$i] .= "<td align='left'>$tipolimpeza</td>";
	$html[$i] .= "<td align='left'>$cliente</td>";
	$html[$i] .= "<td align='left'>$lider</td>";
	$html[$i] .= "<td align='left'>$colaborador</td>";
	$html[$i] .= "<td align='center'>$quarto</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Checklist_Entrega_de_Quartos Listagem '.$hoje.'.xls';
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