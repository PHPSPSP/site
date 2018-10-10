<?
/*ini_set('display_errors',1); ini_set('display_startup_erros',1); error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Este usuario nao e autorizado a cadastrar!'); window.close(); </SCRIPT>");}else{  

$n = $_GET['n'];
$c = $_GET['c'];
$i = $_GET['i'];
$s = $_GET['s'];
if ($s) {$s2 = md5(md5(md5(md5($s)))); $senha=", lavanderia_senha_enfermagem='".$s2."'";}else{};

$sql = "UPDATE spsp1.lavanderia_enfermagem SET
lavanderia_nome_enfermagem='".$n."',
lavanderia_coren_enfermagem='".$c."'
$senha
WHERE lavanderia_id_enfermagem = '".$i."'";

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel alterar o enfermeiro.');
window.location.href='cad_enferm_laundry.php';
</SCRIPT>\");");

};

?>
<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Enfermeiro alterado com sucesso!');
    window.location.href='cad_enferm_laundry.php';
    </SCRIPT>