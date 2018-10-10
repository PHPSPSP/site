<?php
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/
include "config2.php";
header("Content-type: text/html; charset=UTF-8");
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");

$local = $_GET['local'];

$cpfnew = $_GET['cpf'];
list ($part1, $part2, $part3, $part4) = split ('[/.-]', $cpfnew);
$cpf = "$part1-$part2-$part3/0000-$part4";
$cpf2 = "$part1.$part2.$part3/0000-$part4";
$sql = mysql_query("SELECT * FROM sarvigil WHERE CGC='$cpf' OR CGC='$cpf2'");
$cnt = @mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql))
$nomecand = $linha['NOMEVIGIL'];

$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
$datee = date("Y");

require("../../phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "Grupo SPSP";
$mail->AddAddress('flavia.colugnati@spsp.com.br','Flávia Colugnati');
$mail->AddBCC('gustavo.guedes@spsp.com.br','Gustavo Guedes');
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Checklist - Controle de Higienizacao"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr>  <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr>  <td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Controle - Controle de Higiene</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Confirmação de higiene iniciada no local <b> '. $local .'</b>, pelo colaborador <b> '. $nomecand .' </b> . </td></tr><tr><td height="30" ></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" ></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Este e-mail tem apenas caráter informativo, favor não responder.<br>Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr>  <td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Checklist - Controle de Higiene</td>  <td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
 $mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = "INSERT INTO higiene(local, cpf, data) VALUES('$local', '$cpf', NOW())";
mysql_query($query);
	
	if ($conexao) {echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Controle de Higienização Confirmado. Você já pode fechar o sistema.');</SCRIPT>");}
	else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Problema no Banco de Dados.');</SCRIPT>");
}

} else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Não foi possível realizar o checklist.');</SCRIPT>");
 
echo "Informações do erro: " . $mail->ErrorInfo;
}

?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> <?php echo $today; ?> </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="20"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="20"></td></tr><tr>
  <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr>
  <td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align:center"> QR Code marcado com sucesso!<br />O Checklist foi enviado, você já pode fechar o sistema.</td></tr></table></td></tr><tr><td height="20"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr>
    <td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Checklist - Local</td>
    <td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; <?php echo $datee ?> . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>