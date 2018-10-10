<?
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	

$l = $_POST['l'];
$m = $_POST['m'];

$sql = mysql_query("SELECT * FROM usuarios WHERE login='$l' OR mail='$m'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  $s = md5(md5(md5(md5($_POST['s']))));
  
  $a=mysql_query("INSERT INTO usuarios(nome, mail, login, tipo, senha, senha2, gestor, id_hk, regiao) VALUES('$_POST[n]', '$_POST[m]', '$_POST[l]', '$_POST[t]', '$s', '$_POST[s]', '$_POST[g]', '$_POST[hk]', '$_POST[r]')");
  $id_mae = mysql_insert_id();
  if($a){
	  
	$b=mysql_query("INSERT INTO npacesso(user, acesso_comercial, acesso_compras_almoxarifado, acesso_controladoria, acesso_dp, acesso_dp_bauru, acesso_politicas_spsp, acesso_juridico, acesso_manutencao, acesso_res, acesso_sgi, acesso_sst, acesso_operacional, acesso_spbrasil, acesso_ti, acesso_treinamento, acesso_geral_compras, acesso_geral_rh, acesso_geral_financeiro, acesso_geral_frota, acesso_geral_gestao, acesso_geral_mkt, acesso_geral_spsp_seg, acesso_geral_sgi, acesso_geral_sst, acesso_geral_ti) VALUES($id_mae, '".$_POST['acesson_comercial']."', '".$_POST['acesson_compras_almoxarifado']."', '".$_POST['acesson_controladoria']."', '".$_POST['acesson_dp']."', '".$_POST['acesson_dp_bauru']."', '".$_POST['acesson_politicas_spsp']."', '".$_POST['acesson_juridico']."', '".$_POST['acesson_manutencao']."', '".$_POST['acesson_res']."', '".$_POST['acesson_sgi']."', '".$_POST['acesson_sst']."', '".$_POST['acesson_operacional']."', '".$_POST['acesson_spbrasil']."', '".$_POST['acesson_ti']."', '".$_POST['acesson_treinamento']."', '".$_POST['acesson_geral_compras']."', '".$_POST['acesson_geral_rh']."', '".$_POST['acesson_geral_financeiro']."', '".$_POST['acesson_geral_frota']."', '".$_POST['acesson_geral_gestao']."', '".$_POST['acesson_geral_mkt']."', '".$_POST['acesson_geral_spsp_seg']."', '".$_POST['acesson_geral_sgi']."', '".$_POST['acesson_geral_sst']."', '".$_POST['acesson_geral_ti']."')");
	$c=mysql_query("INSERT INTO acesso(user, acesso_almoxarifado, acesso_atendimento, acesso_comercial, acesso_compras, acesso_controladoria, acesso_dp, acesso_financeiro, acesso_gestao, acesso_juridico, acesso_manutencao, acesso_mkt, acesso_res, acesso_sgi, acesso_sst, acesso_tecnico, acesso_supervisao, acesso_ti, acesso_treinamento, acesso_geral_almoxarifado, acesso_geral_dp, acesso_geral_financeiro, acesso_geral_frota, acesso_geral_res, acesso_geral_sgi, acesso_geral_sst, acesso_geral_treinamento) VALUES($id_mae, '".$_POST['acesso_almoxarifado']."', '".$_POST['acesso_atendimento']."', '".$_POST['acesso_comercial']."', '".$_POST['acesso_compras']."', '".$_POST['acesso_controladoria']."', '".$_POST['acesso_dp']."', '".$_POST['acesso_financeiro']."', '".$_POST['acesso_gestao']."', '".$_POST['acesso_juridico']."', '".$_POST['acesso_manutencao']."', '".$_POST['acesso_mkt']."', '".$_POST['acesso_res']."', '".$_POST['acesso_sgi']."', '".$_POST['acesso_sst']."', '".$_POST['acesso_tecnico']."', '".$_POST['acesso_supervisao']."', '".$_POST['acesso_ti']."', '".$_POST['acesso_treinamento']."', '".$_POST['acesso_geral_almoxarifado']."', '".$_POST['acesso_geral_dp']."', '".$_POST['acesso_geral_financeiro']."', '".$_POST['acesso_geral_frota']."', '".$_POST['acesso_geral_res']."', '".$_POST['acesso_geral_sgi']."', '".$_POST['acesso_geral_sst']."', '".$_POST['acesso_geral_treinamento']."')");
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuario cadastrado com sucesso!');
		window.location.href='reg.php';
        </SCRIPT>");
    exit;
  }
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario ou endereco de e-mail ja esta registrado em nosso banco de dados!');
		window.location.href='reg.php';
        </SCRIPT>");
}
};

?>