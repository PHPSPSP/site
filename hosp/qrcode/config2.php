<?
$host    = "mysql01.spsp1.hospedagemdesites.ws";                   //Servidor
$user    = "spsp1";                        //Usu�rio
$pass    = "S7s7master*10*";                            //Senha
$bd      = "spsp1";                            //Base de Dados
mysql_connect($host, $user, $pass);
mysql_select_db($bd);
$site    = "spsp";                        //Nome do site
$url     = "http://www.spsp.com.br/curso/cad";   //Pasta onde est� o script sem "/" no final
$pger    = "proibido2.php";              //P�gina que receber� os redirecionamentos de p�ginas restritas se n�o logadas
$pgsc    = "controle-higiene.php?local=".$_POST['local']."&cpf=".$_POST['cpf'];                //P�gina que receber� o redirecionamento quando logado
$cprg    = "echo ('<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='proibido2.php';
        </SCRIPT>');"; //N�o remova
?>