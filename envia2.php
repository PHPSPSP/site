<?php 
header("Content-type: text/html; charset=UTF-8");
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
/*ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
ini_set( 'display_errors', '0' );*/

require_once "recaptchalib.php";
// sua chave secreta
$secret = "6LeBXBUUAAAAADaRW51_kShBiIErTIU5DPGYFCEl";
// resposta vazia
$response = null;
// verifique a chave secreta
$reCaptcha = new ReCaptcha($secret);
// se submetido, verifique a resposta
if (!$_POST["g-recaptcha-response"]) {
echo '<p>Sua mensagem NÃO foi enviada! Clique no botão anti spam "Não sou um Robô" para validar as informações.  <br> <a href="javascript: window.history.go(-1)">TENTE NOVAMENTE</a> </p>';
exit;
}
else {
$response = $reCaptcha->verifyResponse(
$_SERVER["REMOTE_ADDR"],
$_POST["g-recaptcha-response"]
);

$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
$datee = date("Y");
$name = $_POST['name'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$message = $_POST['message'];
$Facebook = $_POST['Facebook'];
$Google = $_POST['Google'];
$Cartazes = $_POST['Cartazes'];
$TV = $_POST['TV'];
$Jornal = $_POST['Jornal'];
$Revista = $_POST['Revista'];
$Indicacao = $_POST['Indicacao'];
$data = date("Y-m-d");

require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "$name - Fale Conosco ";
$mail->AddAddress('leticia.araujo@spsp.com.br','Leticia Araujo');
$mail->AddBCC('gustavo.guedes@spsp.com.br','Gustavo Guedes');
$mail->AddBCC('dayse.rocha@spsp.com.br','Dayse Rocha');
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Fale Conosco - SPSP"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tbody><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tbody><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tbody><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tbody><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></tbody></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tbody><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tbody><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tbody><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Fale Conosco - SPSP </td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Olá </td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Confira abaixo a mensagem recebida através do formulário de contato do site SPSP: </td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Nome: <b> '. $name .' </b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> E-mail: <b> '. $email .'</b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Região: <b> '. $adress .' </b></td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><br><strong>Mensagem:</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> '. $message .' </td></tr><tr><td height="30"></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25"></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></tbody></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tbody><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tbody><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tbody><tr><td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Fale Conosco </td><td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="30"></td></tr></tbody></table>';
$mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Mensagem enviada com sucesso!');</SCRIPT>");
	
$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = "INSERT INTO faleconosco(name, email, adress, message, Facebook, Google, Cartazes, TV, Jornal, Revista, Indicacao, data) VALUES('$_POST[name]', '$_POST[email]', '$_POST[adress]', '$_POST[message]', '$_POST[Facebook]', '$_POST[Google]', '$_POST[Cartazes]', '$_POST[TV]', '$_POST[Jornal]', '$_POST[Revista]', '$_POST[Indicacao]', NOW())";
mysql_query($query);


$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "Grupo SPSP ";
$mail->AddAddress($email,$name);
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "SPSP - Fale Conosco"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628" style="color: #666666; font-size: 12px; font-family: Helvetica, Verdana, sans-serif;"><tr><td align="center" style="color: #d9534f; font-size: 16px; font-family: Helvetica, Verdana, sans-serif;">Fale Conosco - SPSP</td></tr><tr><td height="20"></td></tr><tr><td> Olá '. $name .' </td></tr><tr><td height="20"></td></tr><tr><td>Obrigado por falar conosco!</td></tr><tr><td>Suas informações foram enviadas para a comunicação da SPSP.</td></tr><tr><td>Entraremos em contato em breve com uma resposta para sua requisição.</td></tr><tr><td>&nbsp;</td></tr><tr><td>Atenciosamente,</td></tr><tr><td><strong>SPSP - Grupo Empresarial de Servicos</strong></td></tr><tr><td height="30"></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25"></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Fale Conosco </td><td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
$mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

} else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Não foi possível enviar a mensagem.');</SCRIPT>");
 
echo "Informações do erro: " . $mail->ErrorInfo;
}

}
 
?>

<SCRIPT LANGUAGE='JavaScript'>
window.location.href='index.php';
</SCRIPT>