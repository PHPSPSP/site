<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include '../config.php';

$busca = $_POST['excel2'];
 
$query = "$busca";
$executar_query = mysql_query($query);
$contar = mysql_num_rows($executar_query);
$dataa = date("d-m-Y");
 
for($i=0;$i<1;$i++){   
$html[$i] = "";
    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' bgcolor='#FF6464'>";
	$html[$i] .= "<td align='center'><b>DATA DE ENVIO</b></td>";
    $html[$i] .= "<td align='center'><b>DATA MOVIMENTAÇÃO</b></td>";
    $html[$i] .= "<td align='center'><b>SUPERVISOR</b></td>";
	$html[$i] .= "<td align='center'><b>GESTOR</b></td>";
    $html[$i] .= "<td align='center'><b>FILIAL / POSTO</b></td>";
	$html[$i] .= "<td align='center'><b>RE</b></td>";
    $html[$i] .= "<td align='center'><b>NOME COLABORADOR</b></td>";
    $html[$i] .= "<td align='center'><b>MOTIVO</b></td>";
	$html[$i] .= "<td align='center'><b>STATUS</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}
 
$i = 1;

if (!function_exists('diff_day')) {
    function diff_day($higher, $lower) {
        $t1 = strtotime($higher);
        $t2 = strtotime($lower);
        return floor($t1 - $t2) / (60 * 60 * 24);
    }
}

while($ret = mysql_fetch_array($executar_query)){

	$novasup = $ret['novasup'];
	$data10 = $ret['data10'];
	$hora5 = $ret['hora5'];
	$date = $ret['date'];
	$hora_cad = $ret['hora_cad'];
	
	$higher = $data10/*.$hora5*/;
	$lower = $date/*.$hora_cad*/;


	/*if (diff_hour($higher, $lower) > 48) {*/
	if (diff_day($higher, $lower) >= 2) {
	$bgcolor = "bgcolor='#EAEAEA'";
	} else {
	$bgcolor = "bgcolor='#d9534f' style='color:#FFF'";
	}
	
	$mococa = mysql_query("SELECT G.nome FROM usuarios S, usuarios G WHERE G.id = S.gestor AND S.nome = '".$novasup."' LIMIT 1");
	$nome_gestor = "";
	while ($linha = mysql_fetch_array($mococa)) {$nome_gestor = $linha['nome'];}
	
	$novasup = $ret['novasup'];
	$cliatual = $ret['cliatual'];
	$re = $ret['re'];
	$nomecol = $ret['nomecol'];
	$movimentacao = $ret['movimentacao'];
	$outromotivo = $ret['outromotivo'];
	$status = $ret['status'];
	
	if ($status == "Efetivado") {
	$bgcolor2 = "bgcolor='#5d89ac' style='color:#FFF'";
	} else {
	$bgcolor2 = "";
	}

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' $bgcolor>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($date))."</td>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data10))."</td>";
	$html[$i] .= "<td align='center'>$novasup</td>";
	$html[$i] .= "<td align='center'>$nome_gestor</td>";
	$html[$i] .= "<td align='center'>$cliatual</td>";
	$html[$i] .= "<td align='center'>$re</td>";
	$html[$i] .= "<td align='center'>$nomecol</td>";
	$html[$i] .= "<td align='center'>$movimentacao $outromotivo</td>";
	$html[$i] .= "<td align='center' $bgcolor2>$status</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Relatorio_de_Movimentacao '.$dataa .'.xls';
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