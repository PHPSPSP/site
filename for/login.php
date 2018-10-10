<?
@session_start();
include("./config.php");
$l = $_POST['l'];
$s = $_POST['s'];
$s = md5(md5(md5(md5($s))));

$sql = mysql_query("SELECT * FROM usuarios WHERE login='$l' AND senha='$s'");
$cnt = @mysql_num_rows($sql);

while($linha = mysql_fetch_array($sql))


if($cnt >= 1){
	
	$_SESSION['nome'] = $linha['nome'];
	$_SESSION['tipo'] = $linha['tipo'];
	$_SESSION['id'] = $linha['id'];
	$_SESSION['mail'] = $linha['mail'];
	$_SESSION['senha2'] = $linha['senha2'];
	$_SESSION['gestoruser'] = $linha['gestor'];
	$_SESSION['login'] = $l;
    $_SESSION['hosp'] = $linha['hosp'];;
	$_SESSION['regiao'] = $linha['regiao'];
  header("Location: ".$url."/".$pgsc);
} else {


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuario ou Senha errada.');
		window.location.href='index.php';
        </SCRIPT>");

}
echo $cprg;
?>