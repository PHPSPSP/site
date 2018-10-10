<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("privado.php");
include("config.php");



  $a=mysql_query("INSERT INTO vagas(funcao, observacao, regiao, usuario) VALUES('$_POST[funcao]','$_POST[observacao]','$_POST[regiao]','$_POST[id2]')");
  if($a){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Vaga cadastrada com sucesso!');
    window.location.href='cadvagas.php';
        </SCRIPT>");
    exit;
  
} else {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Esta vaga nao pode ser cadastrada!');
    window.location.href='cadvagas.php';
        </SCRIPT>");
}

?>