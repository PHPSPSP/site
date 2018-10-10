<?

 include("config.php");
session_destroy();
header("Location: ".$url."/index.php?");
?>
