<?

session_start();
include("./config.php");
$l = $_POST['l'];
$s = $_POST['s'];
$s = md5(md5(md5(md5($s))));

$sql = mysql_query("SELECT * FROM user WHERE login='$l' AND senha='$s'");
$cnt = @mysql_num_rows($sql);

while($linha = mysql_fetch_array($sql))

if($cnt >= 1){
	
	$_SESSION['nome'] = $linha['nome'];
	$_SESSION['id'] = $linha['id'];
	$_SESSION['tipo'] = $linha['tipo'];
	$_SESSION['mail'] = $linha['mail'];
	$_SESSION['senha2'] = $linha['senha2'];
	$_SESSION['login'] = $l;
  header("Location: ".$url."/".$pgsc);
} else {

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuario ou Senha errada.');
		window.location.href='index.php';
        </SCRIPT>");

}
echo $cprg;
?>