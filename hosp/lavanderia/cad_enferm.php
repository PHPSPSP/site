<?
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
$clienteativo = $_SESSION['cliente'];

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
    window.close();
        </SCRIPT>");}else{  

$n = $_POST['n'];
$c = $_POST['c'];
$s = md5(md5(md5(md5($_POST['s']))));

$sql = mysql_query("SELECT * FROM lavanderia_enfermagem WHERE lavanderia_coren_enfermagem='$c'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  
  $a=mysql_query("INSERT INTO lavanderia_enfermagem(lavanderia_nome_enfermagem, lavanderia_coren_enfermagem, lavanderia_senha_enfermagem, lavanderia_cliente_enfermagem) VALUES('$n', '$c', '$s', '$clienteativo')");
  if($a){
  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Enfermagem cadastrado com sucesso!');
    window.location.href='cad_enferm_laundry.php';
    </SCRIPT>");
    exit;
  }
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Este enfermeiro ja esta registrado em nosso banco de dados!');
    window.location.href='cad_enferm_laundry.php';
        </SCRIPT>");
}
};

?>