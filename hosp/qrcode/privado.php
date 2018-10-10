<?
include("config.php");
if(!empty($_SESSION['cpf'])){}else{
header("Location: ".$url."/".$pger);
}
?>