<?
/*ini_set('display_errors',1); ini_set('display_startup_erros',1); error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Este usuario nao e autorizado a cadastrar!'); window.close(); </SCRIPT>");}else{  

$n = $_GET['n'];
$i = $_GET['i'];

$sql = "UPDATE spsp1.lavanderia_enxoval SET
lavanderia_nome_enxoval='".$n."'
WHERE lavanderia_id_enxoval = '".$i."'";

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel alterar o enxoval.');
window.location.href='cad_enxoval_laundry.php';
</SCRIPT>\");");

};

?>
<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Enxoval alterado com sucesso!');
    window.location.href='cad_enxoval_laundry.php';
    </SCRIPT>