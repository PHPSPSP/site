<?
/*ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
ini_set( 'display_errors', '0' );*/
header("Content-type: text/html; charset=UTF-8");
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");

	$date = date("d/m/Y H:i:s");
	$date2 = date("Y-m-d");
	$candidato = nl2br($_POST['candidato']);
	$supervisor = nl2br($_POST['supervisor']);
	$cliente = nl2br($_POST['cliente']);
	$re = $_POST['re'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$cel = $_POST['cel'];
	$Facebook = $_POST["Facebook"];
	$Google = $_POST["Google"];
	$Cartazes = $_POST["Cartazes"];
	$TV = $_POST["TV"];
	$Jornal = $_POST["Jornal"];
	$Revista = $_POST["Revista"];
	$Indicacao = $_POST["Indicacao"];

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = mysql_query('SHOW TABLE STATUS LIKE "curso"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];

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
$mail->FromName = "$candidato";
$mail->AddAddress('edna.souza@spsp.com.br','Edna Souza');
$mail->AddAddress('recepcao.bauru@spsp.com.br','Recepção Bauru');
/*$mail->AddBCC('gustavo.guedes@spsp.com.br','Gustavo Guedes');*/
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Inscrição Curso de Formação de Agente de Portaria"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Nova Inscrição - Curso de Formação de Agente de Portaria</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Matrícula Nº: <b> '. $idd .'</b></td></tr><tr><td height="20" ></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Dados Pessoais:</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">RE: <b> '. $re .' </b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Nome: <b> '. $candidato .' </b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">E-mail: <b> '. $email .' </b></td></tr><tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Supervisor: <b> '. $supervisor .'</b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Cliente: <b> '. $cliente .' </b></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">O candidato conheceu o curso através de:</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><b>'. $Facebook .' - </b><b>'. $Google .' - </b><b>'. $Cartazes .' - </b><b>'. $Indicacao .' </b></td></tr><tr><td height="30" ></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" ></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Este e-mail tem apenas caráter informativo, favor não responder.<br>Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria</td><td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
$mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Obrigado por se interessar em fazer o curso de Agente de Portaria! Suas informações foram enviadas para a SPSP. Entraremos em contato assim que possivel. Anote o número da sua Matricula: $idd');</SCRIPT>");

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = "INSERT INTO curso(supervisor, cliente, date, nome, email, re, fone, cel, Facebook, Google, Cartazes, TV, Jornal, Revista, Indicacao) VALUES('$_POST[supervisor]', '$_POST[cliente]', '$date2', '$_POST[candidato]', '$_POST[email]', '$_POST[re]', '$_POST[fone]', '$_POST[cel]', '$_POST[Facebook]', '$_POST[Google]', '$_POST[Cartazes]', '$_POST[TV]', '$_POST[Jornal]', '$_POST[Revista]', '$_POST[Indicacao]')";
mysql_query($query);

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "Grupo SPSP";
$mail->AddAddress($email,$candidato);
/*$mail->AddBCC('gustavo.guedes@spsp.com.br','Gustavo Guedes');*/
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Confirmação - Cadastro Curso de Agente de Portaria"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Curso de Formação de Agente de Portaria</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><p>Obrigado por se interessar em fazer o curso de Agente de Portaria! Suas informações foram enviadas para a SPSP. Entraremos em contato assim que possivel.</p></td></tr><tr><td height="20" ></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Matrícula Nº: <b> '. $idd .'</b></td></tr><tr><td height="30" ></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" ></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Este e-mail tem apenas caráter informativo, favor não responder.<br>Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria</td><td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
$mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

} else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Não foi possível realizar seu cadastro.');</SCRIPT>");
 
echo "Informações do erro: " . $mail->ErrorInfo;
}

?>

<SCRIPT LANGUAGE='JavaScript'>
window.location.href='../../index.php';
</SCRIPT>