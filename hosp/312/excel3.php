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

$tempo1 = $_POST['tempo1'];
$tempo2 = $_POST['tempo2'];
$tempo3 = $_POST['tempo3'];
$mtempo1 = $_POST['mtempo1'];
$mtempo2 = $_POST['mtempo2'];
$mtempo3 = $_POST['mtempo3'];

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
	$html[$i] .= "<td colspan='3'><b><font size='+2'>Checklist Entrega de Quartos</font></b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='3'><b>".$totalreg."</b> Quartos Entregues</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr bgcolor='#FF6464'>";	
	$html[$i] .= "<td colspan='2' align='center'><b>TOTAL DE PERCA INICIAL</b></td>";
	$html[$i] .= "<td colspan='2' align='center'><b>TOTAL DE TEMPO DA LIMPEZA</b></td>";
	$html[$i] .= "<td colspan='2' align='center'><b>TOTAL DE PERCA NO INFORME</b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "<tr>";	
	$html[$i] .= "<td colspan='2' align='center'>".$tempo1."</td>";
	$html[$i] .= "<td colspan='2' align='center'>".$tempo2."</td>";
	$html[$i] .= "<td colspan='2' align='center'>".$tempo3."</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr bgcolor='#FF6464'>";	
	$html[$i] .= "<td colspan='2' align='center'><b>MÉDIA DE PERCA INICIAL</b></td>";
	$html[$i] .= "<td colspan='2' align='center'><b>MÉDIA DE TEMPO DA LIMPEZA</b></td>";
	$html[$i] .= "<td colspan='2' align='center'><b>MÉDIA DE PERCA NO INFORME</b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "<tr>";	
	$html[$i] .= "<td colspan='2' align='center'>".$mtempo1."</td>";
	$html[$i] .= "<td colspan='2' align='center'>".$mtempo2."</td>";
	$html[$i] .= "<td colspan='2' align='center'>".$mtempo3."</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	
    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' bgcolor='#FF6464'>";
	$html[$i] .= "<td align='center'><b>QUARTO</b></td>";
    $html[$i] .= "<td align='center'><b>DATA</b></td>";
	$html[$i] .= "<td align='center'><b>TIPO LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>LÍDER</b></td>";
    $html[$i] .= "<td align='center'><b>HORA LIBERADO</b></td>";
    $html[$i] .= "<td align='center'><b>HORA INÍCIO LIMPEZA</b></td>";
    $html[$i] .= "<td align='center'><b>HORA FIM LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>HORA ENVIO CHECKLIST</b></td>";
	$html[$i] .= "<td align='center'><b>PERCA INICIAL</b></td>";
	$html[$i] .= "<td align='center'><b>TEMPO DA LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>PERCA NO INFORME</b></td>";
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
	$horain = $ret['horain'];
	$tipolimpeza = $ret['tipolimpeza'];
	$horafin = $ret['horafin'];
	$datahora = $ret['datahora'];
	$horaliberado = $ret['horaliberado'];

$datahorah = date('H:i', strtotime($datahora));

$pinicial = gmdate('H:i', abs(strtotime($horain) - strtotime($horaliberado)));
$tlimpeza = gmdate('H:i', abs(strtotime($horafin) - strtotime($horain)));
if ($datahorah < $empresas->horafin){$pinformacao = (gmdate('H:i', abs(strtotime($datahorah )+ '12:00') - strtotime($horafin)));} else {$pinformacao = gmdate('H:i', abs(strtotime($datahorah) - strtotime($horafin)));};

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center'>";
	$html[$i] .= "<td align='center'>$quarto</td>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";
	$html[$i] .= "<td align='left'>$tipolimpeza</td>";
	$html[$i] .= "<td align='left'>$lider</td>";
	$html[$i] .= "<td align='center'>".date('H:i', strtotime($horaliberado))."</td>";
	$html[$i] .= "<td align='center'>".date('H:i', strtotime($horain))."</td>";
	$html[$i] .= "<td align='center'>".date('H:i', strtotime($horafin))."</td>";
	$html[$i] .= "<td align='center'>".date('H:i', strtotime($datahora))."</td>";
	$html[$i] .= "<td align='center'>".$pinicial."</td>";
	$html[$i] .= "<td align='center'>".$tlimpeza."</td>";
	$html[$i] .= "<td align='center'>".$pinformacao."</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Checklist_Entrega_de_Quartos Gerencial '.$hoje.'.xls';
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