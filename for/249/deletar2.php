<?

session_start();
include("../privado.php");
include("../listas.php");

$sql = "SELECT * FROM for05412 WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$datanow2 = $linha['campo24'];

$datanow = date("d/m/Y");
$datano = implode(array_reverse(explode("/", $datanow))); 
$datano2 = implode(array_reverse(explode("/", $datanow2)));

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$nome = $_SESSION['nomeuser'];

if ($datano > $datano2){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao pode cancelar um FOR apos a data de inicio das atividades. Entre em contato com o Departamento de Marketing.');
		window.location.href='FOR2491.php';
        </SCRIPT>");}else{}
    
?>