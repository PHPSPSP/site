<?
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

session_start();
include("../privado.php");
include("../listas.php");

$sql = "SELECT * FROM for054fim WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$campo48 = $linha['campo48'];
$outraatv = $linha['outraatv'];
$cei = $linha['cei'];
$regiao = $linha['regiao'];
$cod = $linha['cod'];
$cabecalho = $linha['cabecalho'];
if ($linha['campo19'] == "Outra: "){$campo192 = $linha['outraatv'];}else{$campo192 = $linha['campo19'];};
$campo4 = $linha['campo4'];
$campo24 = $linha['campo24'];
$datanow2 = $linha['campo24'];

$datanow = date("d/m/Y");
$datano = implode(array_reverse(explode("/", $datanow))); 
$datano2 = implode(array_reverse(explode("/", $datanow2)));

$email = $_SESSION['mail'];
$nome = $_SESSION['nome'];

if ($datano > $datano2){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao pode cancelar um FOR apos a data de inicio das atividades. Entre em contato com o Departamento de Marketing.');
		window.location.href='FOR2491.php';
        </SCRIPT>");}else{

/*$usuario22 = $linha['emailuser'];
			
if ($email != $usuario22){	echo ("<SCRIPT LANGUAGE='JavaScript'>
    	    window.alert('Voce nao tem permissao para cancelar esse FOR! Somente o usuario responsavel pelo informe do mesmo pode cancela-lo.');
			window.location.href='FOR2491.php';
	        </SCRIPT>");}else{*/
	
    if($email!=""){

session_start();

include("../listas.php");
$email = $_SESSION['mail'];
$nome = $_SESSION['nome'];
$to = "$nome <$email>";
$assunto =  "FOR 249 - CANCELAMENTO de Implantação - $campo4 - $campo192";
$datee = date("Y");
$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
                  
$mensagem = '
<html><body style="margin: 0; padding: 0;">

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7">
<tbody><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7">
<td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
<tbody><tr bgcolor="#d9534f" style="background-color: #d9534f"><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="660"  style="font-size: 14px; border: 0;"><tbody><tr><td>

<table align="left" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;"><tbody><tr>
<td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td>
</tr></tbody></table>

<table align="right" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;"><tbody><tr>
<td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td>
</tr></tbody></table>

</td></tr></tbody></table></td></tr></tbody></table>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tbody><tr>
<td height="40"></td></tr><tr><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tbody><tr><td>
<table align="center" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
<td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="http://sistemas.spsp.com.br/assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td>
</tr></tbody></table>

</td></tr></tbody></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td height="7"></td></tr></table></td></tr><tr><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tbody><tr>
<td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> FOR 249 - Comunicado de Cancelamento e Encerramento de Serviços</td></tr><tr><td height="20"></td></tr><tr>
<td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Olá<br><br>
Esse e-mail informa o <b>CANCELAMENTO</b> do  <b>FOR 054  '. $cod .' </b> referente a <b> '. $cabecalho .' </b> de serviços de <b> '. $campo192 .' </b> para a contratante <b> '. $campo4 .' </b> que seria iniciado em <b> '. $campo24 .' </b>!<br><br>
Att.<br> '. $nome .' </td>
</tr><tr><td height="30"></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25"></td></tr><tr>
<td style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td></tr><tr>
<td style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></tbody></table>

</td></tr><tr><td height="35"></td></tr></tbody></table>

</td></tr><tr bgcolor="#f1f2f7">
<td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
<tbody><tr bgcolor="#d9534f"><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="660"  style="font-size: 14px; border: 0;"><tbody><tr><td>

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;"><tbody><tr>
<td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;">$ver_for_249</td>
<td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></tbody></table>

</td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="30"></td></tr></tbody></table>

</body></html>';

        $boundary = "XYZ-" . date("dmYis") . "-ZYX";
                    
        $mens = "--$boundary\n";
        $mens .= "Content-Transfer-Encoding: 8bits\n";
        $mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
        $mens .= "$mensagem\n";
        $mens .= "--$boundary--\r\n";
                    
        $headers  = "MIME-Version: 1.0\n";
		
        $headers .= "From: \"$nome\" <$email>\n";
		$headers .= "Cc: \"Murilo Martins\" <murilo.martins@spsp.com.br>, \"Damaris Loureco\" <damaris.lourenco@spsp.com.br>, \"Daniel Garcia\" <daniel.garcia@spsp.com.br>, \"Rodolfo Martini\" <rodolfo.martini@spsp.com.br>, \"Vanessa Lima\" <vanessa.lima@spsp.com.br>, \"Daniel Barros\" <daniel.barros@spsp.com.br>, \"Dayse Rocha\" <dayse.rocha@spsp.com.br>, \"Marinalva Rosa\" <marinalva.rosa@spsp.com.br>, \"Ana Pereira\" <ana.pereira@spsp.com.br>, \"Jacqueline Araujo\" <jacqueline.araujo@spsp.com.br>, \"Camila Sotelo\" <camila.sotelo@spsp.com.br>, \"Claudia Franzen\" <claudia.franzen@spsp.com.br>, \"Mariana Stefanini\" <mariana.stefanini@spsp.com.br>, \"Murilo Martins\" <murilo.martins@spsp.com.br>, \"Rodrigo Martins\" <rodrigo.martins@spsp.com.br>, \"Gervan Matos\" <gervan.matos@spsp.com.br>, \"Priscila Almeida\" <priscila.almeida@spsp.com.br>, \"Maria Helena Peraccini\" <mh.peraccini@spsp.com.br>, \"Deise Lourenco\" <deise.lourenco@spsp.com.br>, \"Fabiana Tomasela\" <fabiana.tomasela@spsp.com.br>, \"Regina Gomes\" <regina.gomes@spsp.com.br>, \"Mariana Batista\" <mariana.batista@spsp.com.br>, \"Fernanda Silva\" <fernanda.silva@spsp.com.br>, \"Gilcelia Nascimento\" <gilcelia.nascimento@spsp.com.br>, \"Saulo Cirino\" <sm.cirino@gmail.com>, \"$nome2\" <$email2>, \"$nome3\" <$email3>, \"$nome4\" <$email4>, \"$nome5\" <$email5>, \"$nome6\" <$email6>, \"$nome7\" <$email7>, \"$gestor\" <$emailgestor>, \"$campo48\" <$emailsup>\n";
		$headers .= "Bcc: \"Gustavo Guedes\" <gustavo.guedes@spsp.com.br>\n";
        $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\n";
        $headers .= "$boundary\n";
                    
		if(!mail($to, $assunto,$mens,$headers ,"-r".$email)){
		$headers .= "Return-Path: " . $email . $quebra_linha;                
		mail($to, $assunto,$mens,$headers);}
		
/*echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('FOR 054 cancelado com sucesso!');</SCRIPT>");
	
    $sql_DELETE = "DELETE FROM for054fim WHERE id = ".(int)$_GET['id'];
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='FOR2491.php';
        </SCRIPT>");		
}*/ }}
    
?>