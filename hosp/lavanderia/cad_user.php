<?
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	

$l = $_POST['l'];
$n = $_POST['n'];
$c = $_POST['c'];
$s = md5(md5(md5(md5($_POST['s']))));

$sql = mysql_query("SELECT * FROM lavanderia_usuario WHERE lavanderia_login_usuario='$l'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  
  $a=mysql_query("INSERT INTO lavanderia_usuario(lavanderia_nome_usuario, lavanderia_login_usuario, lavanderia_senha_usuario, lavanderia_cliente_usuario) VALUES('$n', '$l', '$s', '$c')");
  if($a){
	
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Usuario cadastrado com sucesso!');
		window.location.href='cad_user_laundry.php';
    </SCRIPT>");
    exit;
  }
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Este usuario ja esta registrado em nosso banco de dados!');
		window.location.href='cad_user_laundry.php';
        </SCRIPT>");
}
};

?>