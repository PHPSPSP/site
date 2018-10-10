<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../config.php");
include("../privado.php");
include("../listas.php");

if ($_SESSION['nome'] != "Cristiane Ribeiro" && $_SESSION['nome'] != "Camila Sotelo" && $_SESSION['tipo'] != "adm"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  

		$consulta_mov=mysql_query("SELECT * FROM movimentacao WHERE id = '" . (int)$_POST['id'] . "'");
		while ($linha_mov = mysql_fetch_array($consulta_mov)) {
			$nomecol = $linha_mov['nomecol'];
			$movimentacao = $linha_mov['movimentacao'];
			$nomesup = $linha_mov['nome'];
			$data10 = $linha_mov['data10'];	
				
			$emailsup = $linha_mov['email'];
			$cliente_posto = $linha_mov['clinovo'];
			$novasup = $linha_mov['novasup'];
			$posto_atividade = $linha_mov['posto2'];}

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$novasup'"); 
while ($dados = mysql_fetch_array($consulta))
$emailnovasup=$dados['mail'];
			
$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$base_url = 'http://200.183.153.86/';

$datee = date("Y");
$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));

$motdevolv = $_POST['motdevolv'];
                  
require("../../phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "$usuario";
$mail->AddAddress($emailsup,$nomesup);
/*$mail->AddCC('fabiana.tomasela@spsp.com.br','Fabiana Tomasela');
$mail->AddCC('deise.lourenco@spsp.com.br','Deise Lourenço');*/
$mail->AddCC('camila.sotelo@spsp.com.br','Camila Sotelo');
$mail->AddCC('tissiana.funai@spsp.com.br','Tissiana Funai');
$mail->AddCC('jacqueline.araujo@spsp.com.br','Jacqueline Araujo');
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Devolução - FOR 208 - $cliente_posto - $posto_atividade"; // Assunto da mensagem
$mail->Body = '<html><body style="margin: 0; padding: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"> <tbody><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"> <td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"> <tbody> <tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"> <tbody><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"> <tbody><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;">'. utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today")))) .'</td></tr></tbody></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"> <tbody><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"> <tbody><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"> <tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="'. $base_url .'assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td height="7"></td></tr></table></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"> <tbody><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;">Devolução - FOR 208 - Movimentação de Colaboradores</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Olá<br><br>Esse e-mail informa a devolução do FOR 208 referente ao colaborador <b>'. $nomecol .'</b> que deverá ser movimentado em <b>'. date('d/m/Y', strtotime($data10)) .'</b> para o posto <b>'. "$cliente_posto - $posto_atividade" .'</b> pelo motivo de <b>'. $movimentacao .'</b>.<br><br>Motivo da Devolução:<br><b>'. $motdevolv .'</b><br><br>Por favor <b>'. $nomesup .'</b>, refaça essa movimentação com a alteração solicitada!<br><br>Att.<br>'. $usuario .'</td></tr><tr><td height="30"></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25"></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder.</td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail.</td></tr></tbody></table></td></tr><tr><td height="35"></td></tr></tbody></table></td></tr><tr bgcolor="#f1f2f7"> <td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"> <tbody> <tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"> <tbody><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"> <tbody><tr><td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;">'. $ver_for_208 .'</td><td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. date('Y') .'. Todos os direitos reservados.</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="30"></td></tr></tbody></table></body></html>';
$mail->AltBody = 'ERRO';

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

/*var_dump($enviado);
exit;*/

if ($enviado) {
		
$sql = "UPDATE movimentacao SET 
status='Devolvido',
movimentado='".mysql_real_escape_string($_POST['movimentado'])."',
motdevolv='".mysql_real_escape_string($_POST['motdevolv'])."',
datamovimentado='".mysql_real_escape_string($_POST['datamovimentado'])."'
WHERE id = ".(int)$_POST['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro na devolução da Movimentação!');
        window.history.go(-2);
        </SCRIPT>\");");}

if ($sql) {echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Movimentação devolvida com sucesso!');
        window.history.go(-2);
        </SCRIPT>");}
		
		};
?>