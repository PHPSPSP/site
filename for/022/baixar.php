<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$arquivo = $_GET["arquivo"];
$testa = substr($arquivo,-3);
$bloqueados = array('php','tml','htm');
if(!in_array($testa,$bloqueados)){
if(isset($arquivo) && file_exists($arquivo)){
switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){
case "pdf":
$tipo="application/pdf";
break;
case "exe":
$tipo="application/octet-stream";
break;
case "zip":
$tipo="application/zip";
break;
case "doc":
$tipo="application/msword";
break;
case "xls":
$tipo="application/vnd.ms-excel";
break;
case "ppt":
$tipo="application/vnd.ms-powerpoint";
break;
case "gif":
$tipo="image/gif";
break;
case "png":
$tipo="image/png";
break;
case "jpg":
$tipo="image/jpg";
break;
case "mp3":
$tipo="audio/mpeg";
break;
}
header("Content-Type: ".$tipo);
header("Content-Length: ".filesize($arquivo));
header("Content-Disposition: attachment; filename=".basename($arquivo));
readfile($arquivo);
exit;
}
}else{
echo "Arquivo protegido!";
exit;
}
?>