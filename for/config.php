<?
session_start();

$host    = "mysql01.spsp1.hospedagemdesites.ws";                   //Servidor
$user    = "spsp1";                        //Usu�rio
$pass    = "S7s7master*10*";                            //Senha
$bd      = "spsp1";                            //Base de Dados

mysql_connect($host, $user, $pass);
mysql_select_db($bd);

$site    = "spsp";                        //Nome do site
$url     = "http://www.spsp.com.br/for";   //Pasta onde est� o script sem "/" no final

$pger    = "proibido.php";              //P�gina que receber� os redirecionamentos de p�ginas restritas se n�o logadas
$pgsc    = "logado.php";                //P�gina que receber� o redirecionamento quando logado
$cprg    = "echo ('<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='proibido.php';
        </SCRIPT>');"; //N�o remova
		
$usermail = 'noreply@spsp.com.br';
$pwdmail = '3m2i5s7s7';
$hostmail = 'smtp.spsp.com.br';
$portmail = 587;
?>