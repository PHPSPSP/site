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

    $html[$i] .= "<tr align='center' border='1' bordercolor='#EAEAEA' cellspacing='0' cellpadding='0'>";
	$html[$i] .= "<td align='center'><b>LEGENDA:</b></td>";
    $html[$i] .= "<td style='background-color:#449d44; border-style: groove;'></td>";
    $html[$i] .= "<td align='left' style='border-style: groove;'><b>CONFORME</b></td>";
    $html[$i] .= "<td></td>";
	$html[$i] .= "<td style='background-color:#d9534f; border-style: groove;'></td>";
    $html[$i] .= "<td align='left' style='border-style: groove;'><b>NÃO CONFORME</b></td>";
    $html[$i] .= "<td></td>";
	$html[$i] .= "<td style='background-color:#f0ad4e; border-style: groove;'></td>";
    $html[$i] .= "<td align='left' style='border-style: groove;'><b>NÃO APLICÁVEL</b></td>";
    $html[$i] .= "</tr>";

    $html[$i] .= "<tr>";
    $html[$i] .= "</tr>";


    $html[$i] .= "<tr align='center' bgcolor='#EAEAEA' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0' style='border-style: groove;'>";
	$html[$i] .= "<td align='center'><b>CLIENTE / ATIVIDADE</b></td>";
    $html[$i] .= "<td align='center'><b>SUPERVISOR</b></td>";
    $html[$i] .= "<td align='center'><b>DATA DA VISITA</b></td>";

	$html[$i] .= "<td align='center'><b>ROTINA</b></td>";
    $html[$i] .= "<td align='center'><b>POSTURA</b></td>";
	$html[$i] .= "<td align='center'><b>UNIFORME</b></td>";
    $html[$i] .= "<td align='center'><b>LIVRO DE OCORRÊNCIA</b></td>";
    $html[$i] .= "<td align='center'><b>CARTÃO DE PONTO</b></td>";
	$html[$i] .= "<td align='center'><b>PASTA DE ROTINA / MANUAL / FOR</b></td>";
	$html[$i] .= "<td align='center'><b>PRODUTOS E EQUIPAMENTOS</b></td>";
	$html[$i] .= "<td align='center'><b>EPI</b></td>";
	$html[$i] .= "<td align='center'><b>ESTOQUE DE PRODUTOS E EQUIPAMENTOS</b></td>";
	$html[$i] .= "<td align='center'><b>CONTATO COM CLIENTE</b></td>";
	$html[$i] .= "<td align='center'><b>OUTROS</b></td>";

	$html[$i] .= "<td align='center'><b>OBSERVAÇÕES</b></td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
}

$i = 1;

while($ret = mysql_fetch_array($executar_query)){

	$nomesup = $ret['nomesup'];
	$nomeposto = $ret['nomeposto'];
	$tipo = $ret['tipo'];
	$data = $ret['data'];
	$observacao = $ret['observacao'];

	$rotina = $ret['rotina'];
	switch ($rotina) {
		case "conf": $rotina2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $rotina2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $rotina2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$uniforme = $ret['uniforme'];
	switch ($uniforme) {
		case "conf": $uniforme2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $uniforme2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $uniforme2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$ocorrencia = $ret['ocorrencia'];
	switch ($ocorrencia) {
		case "conf": $ocorrencia2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $ocorrencia2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $ocorrencia2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$cartao = $ret['cartao'];
	switch ($cartao) {
		case "conf": $cartao2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $cartao2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $cartao2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$pastamanual = $ret['pastamanual'];
	switch ($pastamanual) {
		case "conf": $pastamanual2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $pastamanual2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $pastamanual2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$equipamento = $ret['equipamento'];
	switch ($equipamento) {
		case "conf": $equipamento2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $equipamento2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $equipamento2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$epi = $ret['epi'];
	switch ($epi) {
		case "conf": $epi2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $epi2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $epi2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$estoqueprod = $ret['estoqueprod'];
	switch ($estoqueprod) {
		case "conf": $estoqueprod2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $estoqueprod2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $estoqueprod2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$cliente = $ret['cliente'];
	switch ($cliente) {
		case "conf": $cliente2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $cliente2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $cliente2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$outros = $ret['outros'];
	switch ($outros) {
		case "conf": $outros2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $outros2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $outros2 = "<td style='background-color:#f0ad4e;'></td>"; break;};
	$postura = $ret['postura'];
	switch ($postura) {
		case "conf": $postura2 = "<td style='background-color:#449d44;'></td>"; break;
		case "inconf": $postura2 = "<td style='background-color:#d9534f;'></td>"; break;
		case "naplica": $postura2 = "<td style='background-color:#f0ad4e;'></td>"; break;};

    $html[$i] .= "<table>";
    $html[$i] .= "<tr align='center' border='1' bordercolor='#EAEAEA' style='border-style: groove;'>";
	$html[$i] .= "<td align='left'><b>$nomeposto</b> - $tipo</td>";
	$html[$i] .= "<td align='center'>$nomesup</td>";
	$html[$i] .= "<td align='center'>".date('d/m/Y', strtotime($data))."</td>";
	
	$html[$i] .= "$rotina2";
	$html[$i] .= "$postura2";
	$html[$i] .= "$uniforme2";
	$html[$i] .= "$ocorrencia2";
	$html[$i] .= "$cartao2";
	$html[$i] .= "$pastamanual2";
	$html[$i] .= "$equipamento2";
	$html[$i] .= "$epi2";
	$html[$i] .= "$estoqueprod2";
	$html[$i] .= "$cliente2";
	$html[$i] .= "$outros2";
		
	$html[$i] .= "<td align='left'>$observacao</td>";
    $html[$i] .= "</tr>";
    $html[$i] .= "</table>";
    $i++;
}  
 
$arquivo = 'Relatorio_de_Visitas '.$dataa .'.xls';
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