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
        window.alert('Este usuario nao e autorizado a alterar!');
        window.close();
        </SCRIPT>");}else{  

$id=$_GET['id'];
$st=$_GET['status'];

if ($st=="1"){$status="0";}else{$status="1";};

$sql = "UPDATE spsp1.lavanderia_local SET lavanderia_status_local='".$status."' WHERE lavanderia_id_local = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel alterar o local.');
window.location.href='cad_local_laundry.php';
</SCRIPT>\");");

};

?><SCRIPT LANGUAGE='JavaScript'>
    window.alert('Local alterado com sucesso!');
    window.location.href='cad_local_laundry.php';
    </SCRIPT>