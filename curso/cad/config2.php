<?
$host    = "mysql01.spsp1.hospedagemdesites.ws";                   //Servidor
$user    = "spsp1";                        //Usuário
$pass    = "S7s7master*10*";                            //Senha
$bd      = "spsp1";                            //Base de Dados
mysql_connect($host, $user, $pass);
mysql_select_db($bd);
$site    = "spsp";                        //Nome do site
$url     = "http://www.spsp.com.br/curso/cad";   //Pasta onde está o script sem "/" no final
$pger    = "proibido2.php";              //Página que receberá os redirecionamentos de páginas restritas se não logadas
$pgsc    = "controle-higiene.php?local=".$_POST['local']."&cpf=".$_POST['cpf'];                //Página que receberá o redirecionamento quando logado
$cprg    = "echo ('<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='proibido2.php';
        </SCRIPT>');"; //Não remova
?>