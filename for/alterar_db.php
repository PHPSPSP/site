<?php
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

include("privado.php");

if ($_POST['t']=="Desativado"){ $senha=""; $senha2="desativado*"; } else { $senha = md5(md5(md5(md5($_POST['s'])))); $senha2=$_POST['s']; };

$sql_a = "SELECT * FROM acesso WHERE user = ".(int)$_GET['id']; $resultado5 = mysql_query($sql_a) or die ("Não foi possível realizar a consulta."); $linha_a = mysql_fetch_array($resultado5, MYSQL_ASSOC);

$sql = "UPDATE usuarios SET 
nome='".mysql_real_escape_string($_POST['nome'])."', 
mail='".mysql_real_escape_string($_POST['mail'])."', 
login='".mysql_real_escape_string($_POST['login'])."', 
tipo='".mysql_real_escape_string($_POST['t'])."',
gestor='".mysql_real_escape_string($_POST['gestor'])."',
id_hk='".mysql_real_escape_string($_POST['hk'])."',
regiao='".mysql_real_escape_string($_POST['regiao'])."',
senha='".mysql_real_escape_string($senha)."',
senha2='".mysql_real_escape_string($senha2)."'
WHERE id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

if ($sql) {
	
if ($linha_a['user']==""){			

$sql2 = "INSERT INTO npacesso(user, acesso_comercial, acesso_compras_almoxarifado, acesso_controladoria, acesso_dp, acesso_dp_bauru, acesso_politicas_spsp, acesso_juridico, acesso_manutencao, acesso_res, acesso_sgi, acesso_sst, acesso_operacional, acesso_spbrasil, acesso_ti, acesso_treinamento, acesso_geral_compras, acesso_geral_rh, acesso_geral_financeiro, acesso_geral_frota, acesso_geral_gestao, acesso_geral_mkt, acesso_geral_spsp_seg, acesso_geral_sgi, acesso_geral_sst, acesso_geral_ti) VALUES('".(int)$_GET['id']."', '".$_POST['acesson_comercial']."', '".$_POST['acesson_compras_almoxarifado']."', '".$_POST['acesson_controladoria']."', '".$_POST['acesson_dp']."', '".$_POST['acesson_dp_bauru']."', '".$_POST['acesson_politicas_spsp']."', '".$_POST['acesson_juridico']."', '".$_POST['acesson_manutencao']."', '".$_POST['acesson_res']."', '".$_POST['acesson_sgi']."', '".$_POST['acesson_sst']."', '".$_POST['acesson_operacional']."', '".$_POST['acesson_spbrasil']."', '".$_POST['acesson_ti']."', '".$_POST['acesson_treinamento']."', '".$_POST['acesson_geral_compras']."', '".$_POST['acesson_geral_rh']."', '".$_POST['acesson_geral_financeiro']."', '".$_POST['acesson_geral_frota']."', '".$_POST['acesson_geral_gestao']."', '".$_POST['acesson_geral_mkt']."', '".$_POST['acesson_geral_spsp_seg']."', '".$_POST['acesson_geral_sgi']."', '".$_POST['acesson_geral_sst']."', '".$_POST['acesson_geral_ti']."')";

$resultado2 = mysql_query($sql2)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

if ($sql2){
$sql3 = "INSERT INTO acesso(user, acesso_almoxarifado, acesso_atendimento, acesso_comercial, acesso_compras, acesso_controladoria, acesso_dp, acesso_financeiro, acesso_gestao, acesso_juridico, acesso_manutencao, acesso_mkt, acesso_res, acesso_sgi, acesso_sst, acesso_tecnico, acesso_supervisao, acesso_ti, acesso_treinamento, acesso_geral_almoxarifado, acesso_geral_dp, acesso_geral_financeiro, acesso_geral_frota, acesso_geral_res, acesso_geral_sgi, acesso_geral_sst, acesso_geral_treinamento) VALUES('".(int)$_GET['id']."', '".$_POST['acesso_almoxarifado']."', '".$_POST['acesso_atendimento']."', '".$_POST['acesso_comercial']."', '".$_POST['acesso_compras']."', '".$_POST['acesso_controladoria']."', '".$_POST['acesso_dp']."', '".$_POST['acesso_financeiro']."', '".$_POST['acesso_gestao']."', '".$_POST['acesso_juridico']."', '".$_POST['acesso_manutencao']."', '".$_POST['acesso_mkt']."', '".$_POST['acesso_res']."', '".$_POST['acesso_sgi']."', '".$_POST['acesso_sst']."', '".$_POST['acesso_tecnico']."', '".$_POST['acesso_supervisao']."', '".$_POST['acesso_ti']."', '".$_POST['acesso_treinamento']."', '".$_POST['acesso_geral_almoxarifado']."', '".$_POST['acesso_geral_dp']."', '".$_POST['acesso_geral_financeiro']."', '".$_POST['acesso_geral_frota']."', '".$_POST['acesso_geral_res']."', '".$_POST['acesso_geral_sgi']."', '".$_POST['acesso_geral_sst']."', '".$_POST['acesso_geral_treinamento']."')";

$resultado3 = mysql_query($sql3)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

};

}else{
				
$sql2 = "UPDATE npacesso SET 
acesso_comercial='".mysql_real_escape_string($_POST['acesson_comercial'])."',
acesso_compras_almoxarifado='".mysql_real_escape_string($_POST['acesson_compras_almoxarifado'])."',
acesso_controladoria='".mysql_real_escape_string($_POST['acesson_controladoria'])."',
acesso_dp='".mysql_real_escape_string($_POST['acesson_dp'])."',
acesso_dp_bauru='".mysql_real_escape_string($_POST['acesson_dp_bauru'])."',
acesso_politicas_spsp='".mysql_real_escape_string($_POST['acesson_politicas_spsp'])."',
acesso_juridico='".mysql_real_escape_string($_POST['acesson_juridico'])."',
acesso_manutencao='".mysql_real_escape_string($_POST['acesson_manutencao'])."',
acesso_res='".mysql_real_escape_string($_POST['acesson_res'])."',
acesso_sgi='".mysql_real_escape_string($_POST['acesson_sgi'])."',
acesso_sst='".mysql_real_escape_string($_POST['acesson_sst'])."',
acesso_operacional='".mysql_real_escape_string($_POST['acesson_operacional'])."',
acesso_spbrasil='".mysql_real_escape_string($_POST['acesson_spbrasil'])."',
acesso_ti='".mysql_real_escape_string($_POST['acesson_ti'])."',
acesso_treinamento='".mysql_real_escape_string($_POST['acesson_treinamento'])."',
acesso_geral_compras='".mysql_real_escape_string($_POST['acesson_geral_compras'])."',
acesso_geral_rh='".mysql_real_escape_string($_POST['acesson_geral_rh'])."',
acesso_geral_financeiro='".mysql_real_escape_string($_POST['acesson_geral_financeiro'])."',
acesso_geral_frota='".mysql_real_escape_string($_POST['acesson_geral_frota'])."',
acesso_geral_gestao='".mysql_real_escape_string($_POST['acesson_geral_gestao'])."',
acesso_geral_mkt='".mysql_real_escape_string($_POST['acesson_geral_mkt'])."',
acesso_geral_spsp_seg='".mysql_real_escape_string($_POST['acesson_geral_spsp_seg'])."',
acesso_geral_sgi='".mysql_real_escape_string($_POST['acesson_geral_sgi'])."',
acesso_geral_sst='".mysql_real_escape_string($_POST['acesson_geral_sst'])."',
acesso_geral_ti='".mysql_real_escape_string($_POST['acesson_geral_ti'])."'
WHERE user = ".(int)$_GET['id'];

$resultado2 = mysql_query($sql2)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

if ($sql2){
$sql3 = "UPDATE acesso SET 
acesso_almoxarifado='".mysql_real_escape_string($_POST['acesso_almoxarifado'])."',
acesso_atendimento='".mysql_real_escape_string($_POST['acesso_atendimento'])."',
acesso_comercial='".mysql_real_escape_string($_POST['acesso_comercial'])."',
acesso_compras='".mysql_real_escape_string($_POST['acesso_compras'])."',
acesso_controladoria='".mysql_real_escape_string($_POST['acesso_controladoria'])."',
acesso_dp='".mysql_real_escape_string($_POST['acesso_dp'])."',
acesso_financeiro='".mysql_real_escape_string($_POST['acesso_financeiro'])."',
acesso_gestao='".mysql_real_escape_string($_POST['acesso_gestao'])."',
acesso_juridico='".mysql_real_escape_string($_POST['acesso_juridico'])."',
acesso_manutencao='".mysql_real_escape_string($_POST['acesso_manutencao'])."',
acesso_mkt='".mysql_real_escape_string($_POST['acesso_mkt'])."',
acesso_res='".mysql_real_escape_string($_POST['acesso_res'])."',
acesso_sgi='".mysql_real_escape_string($_POST['acesso_sgi'])."',
acesso_sst='".mysql_real_escape_string($_POST['acesso_sst'])."',
acesso_tecnico='".mysql_real_escape_string($_POST['acesso_tecnico'])."',
acesso_supervisao='".mysql_real_escape_string($_POST['acesso_supervisao'])."',
acesso_ti='".mysql_real_escape_string($_POST['acesso_ti'])."',
acesso_treinamento='".mysql_real_escape_string($_POST['acesso_treinamento'])."',
acesso_geral_almoxarifado='".mysql_real_escape_string($_POST['acesso_geral_almoxarifado'])."',
acesso_geral_dp='".mysql_real_escape_string($_POST['acesso_geral_dp'])."',
acesso_geral_financeiro='".mysql_real_escape_string($_POST['acesso_geral_financeiro'])."',
acesso_geral_frota='".mysql_real_escape_string($_POST['acesso_geral_frota'])."',
acesso_geral_res='".mysql_real_escape_string($_POST['acesso_geral_res'])."',
acesso_geral_sgi='".mysql_real_escape_string($_POST['acesso_geral_sgi'])."',
acesso_geral_sst='".mysql_real_escape_string($_POST['acesso_geral_sst'])."',
acesso_geral_treinamento='".mysql_real_escape_string($_POST['acesso_geral_treinamento'])."'
WHERE user = ".(int)$_GET['id'];

$resultado3 = mysql_query($sql3)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

};};

};

echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Alteracao realizada com sucesso!');
window.location.href='listareg.php';
</SCRIPT>");
?>