<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include '../config.php';

$busca = $_POST['excel2'];
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
	$html[$i] .= "<td colspan='4' align='center'><b><font size='+2'>Checklist Higienização de Banheiros</font></b></td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
	$html[$i] .= "<table>";
	$html[$i] .= "<tr>";
	$html[$i] .= "<td colspan='4'><b>".$totalreg."</b> Banheiros Higienizados</td>";
	$html[$i] .= "</tr>";
	$html[$i] .= "</table><br>";
    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' bgcolor='#FF6464'>";
	$html[$i] .= "<td align='center'><b>DATA DA LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>HORA DA LIMPEZA</b></td>";
	$html[$i] .= "<td align='center'><b>COLABORADOR</b></td>";
	$html[$i] .= "<td align='center'><b>BANHEIRO</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}
 
$i = 1;

while($ret = mysql_fetch_array($executar_query)){

	$data = $ret['data'];
	$cliente = $ret['cpf'];
	$local = $ret['local'];
	
$cpf2 = $ret['cpf'];
$sqlll = mysql_query('SELECT * FROM sarvigil WHERE CGC = "'.$cpf2.'" AND DTDEMISSAO IS NULL');
$linha2 = mysql_fetch_object($sqlll);
$nomecand = $linha2->NOMEVIGIL;

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center'>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";
	$html[$i] .= "<td align='center'>".date('H:i', strtotime($data))."</td>";
	$html[$i] .= "<td align='left'>$nomecand</td>";
	$html[$i] .= "<td align='center'>$local</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}
 
$arquivo = 'Higienizacao_Banheiros '.$hoje.'.xls';
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