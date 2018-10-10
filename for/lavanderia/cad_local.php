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

$sql = mysql_query("SELECT * FROM lavanderia_local WHERE lavanderia_nome_local='$n'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){

  $controle = array();

  foreach ($_POST as $k => $v) {
    if (preg_match('/enxoval/i', $k)) {
      $controle[] = array(
        'enxoval' => $v,
        'contagem' => $_POST['contagem' . preg_replace('/enxoval/i', '', $k)]
      );
    }
  }

  $controle2 = array();

  foreach ($_POST as $k => $v) {
    if (preg_match('/extra/i', $k)) {
      $controle2[] = array(
        'extra' => $v
      );
    }
  }
  
  $a=mysql_query("INSERT INTO lavanderia_local (lavanderia_nome_local) VALUES('$n')");
  if($a){

    $id = mysql_insert_id();
    /*$consulta = mysql_query("SELECT * FROM spsp1.lavanderia_local where lavanderia_nome_local = '$n' ");
    $dados = mysql_fetch_array($consulta);
    $id = $dados['lavanderia_id_local'];
    $le = $_POST['enxoval' . $dados["lavanderia_id_enxoval"]];
    $lc = $_POST['contagem' . $dados["lavanderia_id_enxoval"]];*/

    foreach ($controle as $c) {
      mysql_query("INSERT INTO lavanderia_controle (lavanderia_local, lavanderia_enxoval, contagem_padrao) VALUES('$id', '" . $c["enxoval"] ."', '" . $c["contagem"] . "')");
    }

    foreach ($controle2 as $e) {
      mysql_query("INSERT INTO lavanderia_extra (lavanderia_local, lavanderia_enxoval) VALUES('$id', '" . $e["extra"] ."')");
    }
  
    //$b=mysql_query("INSERT INTO lavanderia_controle (lavanderia_local, lavanderia_enxoval, contagem_padrao) VALUES('$id', '$le', '$lc')");


  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Local cadastrado com sucesso!');
    window.location.href='cad_local_laundry.php';
    </SCRIPT>");
    exit;
  }
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Este local ja esta registrado em nosso banco de dados!');
    window.location.href='cad_local_laundry.php';
        </SCRIPT>");
}
};

?>