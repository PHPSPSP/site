<?
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");

if ($_SESSION['tipo'] != "1"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	

$l = $_POST['l'];
$m = $_POST['m'];

$sql = mysql_query("SELECT * FROM usuarios_hosp WHERE login='$l' OR mail='$m'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  $s = md5(md5(md5(md5($_POST['s']))));
  
  $a=mysql_query("INSERT INTO usuarios_hosp(nome, mail, login, tipo, senha, senha2, gestor, id_hk, regiao, cliente) VALUES('$_POST[n]', '$_POST[m]', '$_POST[l]', '$_POST[t]', '$s', '$_POST[s]', '$_POST[g]', '$_POST[hk]', '$_POST[r]', '$_POST[c]')");
  $id_mae = mysql_insert_id();
  if($a){
	
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