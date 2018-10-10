<?
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "adm"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
    window.close();
        </SCRIPT>");}else{  

$n = $_POST['n'];

$sql = mysql_query("SELECT * FROM lavanderia_enxoval WHERE lavanderia_nome_enxoval='$n'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  
  $a=mysql_query("INSERT INTO lavanderia_enxoval(lavanderia_nome_enxoval) VALUES('$n')");
  if($a){
  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Enxoval cadastrado com sucesso!');
    window.location.href='cad_enxoval_laundry.php';
    </SCRIPT>");
    exit;
  }
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Este enxoval ja esta registrado em nosso banco de dados!');
    window.location.href='cad_enxoval_laundry.php';
        </SCRIPT>");
}
};

?>