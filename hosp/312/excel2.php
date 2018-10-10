<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include '../config.php';

$busca = $_POST['excel2'];
$forver = $_POST['forver'];
$totalreg = $_POST['totalreg'];
$dataaa = date("Y-m-d H:i:s");
$hoje = date('d/m/Y H.i', strtotime($dataaa));

$q_empresas = mysql_query($busca);
$contar = mysql_num_rows($q_empresas);

/*".$forver." - */
for($i=0;$i<1;$i++){   
$html[$i] = "";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='8' align='center'><b><font size='+2'>Abertura de Chamados - Entrega de Quartos</font></b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
    $html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='8'><b>".$totalreg."</b> Quartos com Abertura de <b>Ordem de Serviço</b></td>";
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
	$html[$i] .= "<td align='center'><b>ITEM</b></td>";
	$html[$i] .= "<td align='center'><b>CHAMADO</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}
 
$i = 1;

while($ret = mysql_fetch_array($q_empresas)){

	$data = $ret['data'];
	$cliente = $ret['cliente1'];
	$lider = $ret['usuario'];
	$colaborador = $ret['colaborador'];
	$quarto = $ret['quarto'];
	$tipolimpeza = $ret['tipolimpeza'];
	$os01 = $ret['os01'];
	$os02 = $ret['os02'];
	$os03 = $ret['os03'];
	$os04 = $ret['os04'];
	$os05 = $ret['os05'];
	$os06 = $ret['os06'];
	$os07 = $ret['os07'];
	$os08 = $ret['os08'];
	$os09 = $ret['os09'];
	$os10 = $ret['os10'];
	$os11 = $ret['os11'];
	$os12 = $ret['os12'];
	$os13 = $ret['os13'];
	$os14 = $ret['os14'];
	$os15 = $ret['os15'];
	$os16 = $ret['os16'];
	$os17 = $ret['os17'];
	$os18 = $ret['os18'];
	$os19 = $ret['os19'];
	$os20 = $ret['os20'];
	$os21 = $ret['os21'];
	$os22 = $ret['os22'];
	$os23 = $ret['os23'];
	$os24 = $ret['os24'];
	$os25 = $ret['os25'];
	$os26 = $ret['os26'];

if ($os01=="") {$eos01="<!--"; $eos012="-->";} else {$eos01=""; $eos012="";};
if ($os02=="") {$eos02="<!--"; $eos022="-->";} else {$eos02=""; $eos022="";};
if ($os03=="") {$eos03="<!--"; $eos032="-->";} else {$eos03=""; $eos032="";};
if ($os04=="") {$eos04="<!--"; $eos042="-->";} else {$eos04=""; $eos042="";};
if ($os05=="") {$eos05="<!--"; $eos052="-->";} else {$eos05=""; $eos052="";};
if ($os06=="") {$eos06="<!--"; $eos062="-->";} else {$eos06=""; $eos062="";};
if ($os07=="") {$eos07="<!--"; $eos072="-->";} else {$eos07=""; $eos072="";};
if ($os08=="") {$eos08="<!--"; $eos082="-->";} else {$eos08=""; $eos082="";};
if ($os09=="") {$eos09="<!--"; $eos092="-->";} else {$eos09=""; $eos092="";};
if ($os10=="") {$eos10="<!--"; $eos102="-->";} else {$eos10=""; $eos102="";};
if ($os11=="") {$eos11="<!--"; $eos112="-->";} else {$eos11=""; $eos112="";};
if ($os12=="") {$eos12="<!--"; $eos122="-->";} else {$eos12=""; $eos122="";};
if ($os13=="") {$eos13="<!--"; $eos132="-->";} else {$eos13=""; $eos132="";};
if ($os14=="") {$eos14="<!--"; $eos142="-->";} else {$eos14=""; $eos142="";};
if ($os15=="") {$eos15="<!--"; $eos152="-->";} else {$eos15=""; $eos152="";};
if ($os16=="") {$eos16="<!--"; $eos162="-->";} else {$eos16=""; $eos162="";};
if ($os17=="") {$eos17="<!--"; $eos172="-->";} else {$eos17=""; $eos172="";};
if ($os18=="") {$eos18="<!--"; $eos182="-->";} else {$eos18=""; $eos182="";};
if ($os19=="") {$eos19="<!--"; $eos192="-->";} else {$eos19=""; $eos192="";};
if ($os20=="") {$eos20="<!--"; $eos202="-->";} else {$eos20=""; $eos202="";};
if ($os21=="") {$eos21="<!--"; $eos212="-->";} else {$eos21=""; $eos212="";};
if ($os22=="") {$eos22="<!--"; $eos222="-->";} else {$eos22=""; $eos222="";};
if ($os23=="") {$eos23="<!--"; $eos232="-->";} else {$eos23=""; $eos232="";};
if ($os24=="") {$eos24="<!--"; $eos242="-->";} else {$eos24=""; $eos242="";};
if ($os25=="") {$eos25="<!--"; $eos252="-->";} else {$eos25=""; $eos252="";};
if ($os26=="") {$eos26="<!--"; $eos262="-->";} else {$eos26=""; $eos262="";};



    $html[$i] .= "<table>";
	
$html[$i] .= "$eos01 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Cama</td>";$html[$i] .= "<td align='center'>$os01</td>";$html[$i] .= "</tr> $eos012";
$html[$i] .= "$eos02 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Colchão</td>";$html[$i] .= "<td align='center'>$os02</td>";$html[$i] .= "</tr> $eos022";
$html[$i] .= "$eos03 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Mesa Cabeceira</td>";$html[$i] .= "<td align='center'>$os03</td>";$html[$i] .= "</tr> $eos032";
$html[$i] .= "$eos04 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Suporte de Soro</td>";$html[$i] .= "<td align='center'>$os04</td>";$html[$i] .= "</tr> $eos042";
$html[$i] .= "$eos05 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Escadinha</td>";$html[$i] .= "<td align='center'>$os05</td>";$html[$i] .= "</tr> $eos052";
$html[$i] .= "$eos06 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Poltrona/Sofá</td>";$html[$i] .= "<td align='center'>$os06</td>";$html[$i] .= "</tr> $eos062";
$html[$i] .= "$eos07 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Toalheiro</td>";$html[$i] .= "<td align='center'>$os07</td>";$html[$i] .= "</tr> $eos072";
$html[$i] .= "$eos08 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Papeleira</td>";$html[$i] .= "<td align='center'>$os08</td>";$html[$i] .= "</tr> $eos082";
$html[$i] .= "$eos09 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Saboneteira</td>";$html[$i] .= "<td align='center'>$os09</td>";$html[$i] .= "</tr> $eos092";
$html[$i] .= "$eos10 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Armário</td>";$html[$i] .= "<td align='center'>$os10</td>";$html[$i] .= "</tr> $eos102";
$html[$i] .= "$eos11 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>TV</td>";$html[$i] .= "<td align='center'>$os11</td>";$html[$i] .= "</tr> $eos112";
$html[$i] .= "$eos12 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Controle Remoto</td>";$html[$i] .= "<td align='center'>$os12</td>";$html[$i] .= "</tr> $eos122";
$html[$i] .= "$eos13 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Controle Ar Condicionado</td>";$html[$i] .= "<td align='center'>$os13</td>";$html[$i] .= "</tr> $eos132";
$html[$i] .= "$eos14 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Caixa Acoplada Banheiro</td>";$html[$i] .= "<td align='center'>$os14</td>";$html[$i] .= "</tr> $eos142";
$html[$i] .= "$eos15 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Vaso Sanitário</td>";$html[$i] .= "<td align='center'>$os15</td>";$html[$i] .= "</tr> $eos152";
$html[$i] .= "$eos16 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Lixeira</td>";$html[$i] .= "<td align='center'>$os16</td>";$html[$i] .= "</tr> $eos162";
$html[$i] .= "$eos17 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Espelho</td>";$html[$i] .= "<td align='center'>$os17</td>";$html[$i] .= "</tr> $eos172";
$html[$i] .= "$eos18 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Barra de Proteção</td>";$html[$i] .= "<td align='center'>$os18</td>";$html[$i] .= "</tr> $eos182";
$html[$i] .= "$eos19 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Lâmpadas</td>";$html[$i] .= "<td align='center'>$os19</td>";$html[$i] .= "</tr> $eos192";
$html[$i] .= "$eos20 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Ralos</td>";$html[$i] .= "<td align='center'>$os20</td>";$html[$i] .= "</tr> $eos202";
$html[$i] .= "$eos21 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Espelho de Tomada</td>";$html[$i] .= "<td align='center'>$os21</td>";$html[$i] .= "</tr> $eos212";
$html[$i] .= "$eos22 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Pisos</td>";$html[$i] .= "<td align='center'>$os22</td>";$html[$i] .= "</tr> $eos222";
$html[$i] .= "$eos23 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Paredes</td>";$html[$i] .= "<td align='center'>$os23</td>";$html[$i] .= "</tr> $eos232";
$html[$i] .= "$eos24 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Portas e Maçanetas</td>";$html[$i] .= "<td align='center'>$os24</td>";$html[$i] .= "</tr> $eos242";
$html[$i] .= "$eos25 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Mini Bar</td>";$html[$i] .= "<td align='center'>$os25</td>";$html[$i] .= "</tr> $eos252";
$html[$i] .= "$eos26 <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Telefone</td>";$html[$i] .= "<td align='center'>$os26</td>";$html[$i] .= "</tr> $eos262";




	$html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Checklist_Entrega_de_Quartos Abertura de Chamados '.$hoje.'.xls';
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

<!--$html[$i] .= "<tr align='center' $eos05 >";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Cama</td>";$html[$i] .= "<td align='center'>$os05</td>";$html[$i] .= "</tr>";


$html[$i] .= "$eos*01* <tr align='center'>";$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";$html[$i] .= "<td align='left'>$tipolimpeza</td>";$html[$i] .= "<td align='left'>$cliente</td>";$html[$i] .= "<td align='left'>$lider</td>";$html[$i] .= "<td align='left'>$colaborador</td>";$html[$i] .= "<td align='center'>$quarto</td>";$html[$i] .= "<td align='center'>Cama</td>";$html[$i] .= "<td align='center'>$os*01*</td>";$html[$i] .= "</tr> $eos*01*2";-->