<?
include("config.php");
if(!empty($_SESSION['login'])){}else{
header("Location: ".$url."/".$pger);
}
?>