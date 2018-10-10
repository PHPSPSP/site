<?
/*ini_set('display_errors',1); ini_set('display_startup_erros',1); error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
    window.close();
        </SCRIPT>");}else{  

$n = $_GET['n'];
$i = $_GET['i'];
$clienteativo = $_SESSION['cliente'];
$date = date("Y-m-d h:i:s");

  $controle = array();

  foreach ($_GET as $k => $v) { if (preg_match('/enxoval/i', $k)) { $controle[] = array( 'enxoval' => $v, 'contagem' => $_GET['contagem' . preg_replace('/enxoval/i', '', $k)] ); } }

  $controle2 = array();

  foreach ($_GET as $k => $v) { if (preg_match('/extra/i', $k)) { $controle2[] = array( 'extra' => $v ); } }

$sql = mysql_query("UPDATE spsp1.lavanderia_local SET lavanderia_nome_local='".$n."' WHERE lavanderia_id_local = '".$i."'");

  if($sql){
    foreach ($controle as $c) {
      mysql_query("INSERT INTO lavanderia_controle (lavanderia_local, lavanderia_enxoval, contagem_padrao, lavanderia_cliente, data_hora) VALUES('$i', '" . $c["enxoval"] ."', '" . $c["contagem"] . "', '$clienteativo', '".$date."')");}

    foreach ($controle2 as $e) {
      mysql_query("INSERT INTO lavanderia_extra (lavanderia_local, lavanderia_enxoval, lavanderia_cliente, data_hora) VALUES('$i', '" . $e["extra"] ."', '$clienteativo', '".$date."')");}

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Local alterado com sucesso!');
    window.location.href='cad_local_laundry.php';
    </SCRIPT>");
    exit;} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Não foi possível alterar esse local!');
    window.location.href='cad_local_laundry.php';
        </SCRIPT>");
}
};