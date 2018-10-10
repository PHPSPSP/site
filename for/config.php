<?
session_start();

$host    = "mysql01.spsp1.hospedagemdesites.ws";                   //Servidor
$user    = "spsp1";                        //Usuário
$pass    = "S7s7master*10*";                            //Senha
$bd      = "spsp1";                            //Base de Dados

mysql_connect($host, $user, $pass);
mysql_select_db($bd);

$site    = "spsp";                        //Nome do site
$url     = "http://www.spsp.com.br/for";   //Pasta onde está o script sem "/" no final

$pger    = "proibido.php";              //Página que receberá os redirecionamentos de páginas restritas se não logadas
$pgsc    = "logado.php";                //Página que receberá o redirecionamento quando logado
$cprg    = "echo ('<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='proibido.php';
        </SCRIPT>');"; //Não remova
		
$usermail = 'noreply@spsp.com.br';
$pwdmail = '3m2i5s7s7';
$hostmail = 'smtp.spsp.com.br';
$portmail = 587;
?>