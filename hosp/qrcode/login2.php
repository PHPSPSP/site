<?
session_start();
include "config2.php";

$cpfnew = $_POST['cpf'];
$local = $_POST['local'];

list ($part1, $part2, $part3, $part4) = split ('[/.-]', $cpfnew);
$cpf = "$part1-$part2-$part3/0000-$part4";
$cpf2 = "$part1.$part2.$part3/0000-$part4";

$sql = mysql_query("SELECT * FROM sarvigil WHERE CGC='$cpf' OR CGC='$cpf2'");
$cnt = @mysql_num_rows($sql);

while($linha = mysql_fetch_array($sql))

if($cnt >= 1){
	
	$_SESSION['nomecand'] = $linha['NOMEVIGIL'];
	$_SESSION['idnome'] = $linha['CODVIGIL'];
	$_SESSION['cpf'] = $cpf;
	$_SESSION['local'] = $local;
	$_SESSION['cliente'] = $cliente;
	
  header("Location: ".$url."/".$pgsc);
} else {

header("Location: ".$url."/".$pger);

}
echo $cprg;
		
		
?>