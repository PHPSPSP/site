<?
/*ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
ini_set( 'display_errors', '0' );*/
header("Content-type: text/html; charset=UTF-8");
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");

	$date = date("d/m/Y H:i:s");
	$date2 = date("Y-m-d");
	$nome = nl2br($_POST['nome']);
	$end = $_POST['end'];
	$no = $_POST['no'];
	$comp = $_POST['comp'];
	$cep = $_POST['cep'];
	$cidade = nl2br($_POST['cidade']);
	$estado = $_POST['estado'];
	$bairro = $_POST['bairro'];
	$civil = $_POST['civil'];
	$nascto = $_POST['nascto'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];	
	$fone = $_POST['fone'];
	$cel = $_POST['cel'];	
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$deficiente = $_POST['deficiente'];
	$dependentes = $_POST['dependentes'];
	$tdeficiencia = $_POST['tdeficiencia'];
$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
$datee = date("Y");
	$Facebook = $_POST["Facebook"];
	$Google = $_POST["Google"];
	$Cartazes = $_POST["Cartazes"];
	$TV = $_POST["TV"];
	$Jornal = $_POST["Jornal"];
	$Revista = $_POST["Revista"];
	$Indicacao = $_POST["Indicacao"];
	$anexcurric = $_POST['anexcurric'];
	$anexcurric2 = $_POST['anexcurric2'];
	$instrucao = $_POST['instrucao'];
	$serie1 = $_POST['serie1'];
	$nest1 = nl2br($_POST['nest1']);
	$dconcl1 = $_POST['dconcl1'];
	$ncurso1 = nl2br($_POST['ncurso1']);
	$ensipos = $_POST['ensipos'];
	$serie2 = $_POST['serie2'];
	$ncurso2 = nl2br($_POST['ncurso2']);
	$nest2 = nl2br($_POST['nest2']);
	$dconcl2 = $_POST['dconcl2'];
	$ncurso3 = nl2br($_POST['ncurso3']);
	$nest3 = nl2br($_POST['nest3']);
	$dconcl3 = $_POST['dconcl3'];
	$ncurso4 = nl2br($_POST['ncurso4']);
	$nest4 = nl2br($_POST['nest4']);
	$dconcl4 = $_POST['dconcl4'];
	$emp1 = nl2br($_POST['emp1']);
	$cargo1 = nl2br($_POST['cargo1']);
	$pa1 = $_POST['pa1'];	
	$pa12 = $_POST['pa12'];
	$empat = $_POST['empat'];
	$emp2 = nl2br($_POST['emp2']);
	$cargo2 = nl2br($_POST['cargo2']);
	$pa2 = $_POST['pa2'];
	$pa22 = $_POST['pa22'];
	$empat2 = $_POST['empat2'];
	$mensagem = nl2br($_POST['mensagem']);

	echo nl2br($mensagem);
	echo nl2br($cidade);
	echo nl2br($nest1);
	echo nl2br($ncurso1);
	echo nl2br($nest2);
	echo nl2br($ncurso2);
	echo nl2br($nest3);
	echo nl2br($ncurso3);
	echo nl2br($emp1);
	echo nl2br($cargo1);
	echo nl2br($emp2);
	echo nl2br($cargo2);
	echo nl2br($info);

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = mysql_query('SHOW TABLE STATUS LIKE "curso"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];
	
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
$mail->Subject  = "Inscricao Externa Curso - Agente de Portaria - $nome"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Nova Inscrição Externa - Curso de Formação de Agente de Portaria</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Matrícula Nº: <b> '. $idd .'</b></td></tr><tr><td height="20" ></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;"> Dados Pessoais:</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Nome: <strong>'. $nome .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Endereço: <strong>'. $end .'</strong>, <strong>'. $no .'</strong> - <strong>'. $bairro .'</strong> - <strong>'. $comp .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">CEP: <strong>'. $cep .'</strong> - Cidade: <strong>'. $cidade .'</strong> / <strong>'. $estado .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Data de nascimento: <strong>'. $nascto .'</strong> - Idade: <strong>'. $idade .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Estado civil: <strong>'. $civil .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Sexo: <strong>'. $sexo .'</strong> - Dependentes: <strong>'. $dependentes .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">CPF: <strong>'. $cpf .'</strong> - RG: <strong>'. $rg .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Telefone: <strong>'. $fone .'</strong> - Celular: <strong>'. $cel .'</strong> - Recado: <strong>'. $recado .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">E-mail: <strong>'. $email .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><strong>'. $deficiente .'</strong> <strong>'. $tdeficiencia  .'</strong></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;">Escolaridade:</td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Grau de escolaridade: <strong>'. $instrucao.'</strong> <strong>'. $serie1 .'</strong> <strong>'. $dconcl1 .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Curso: <strong>'. $ncurso1 .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Instituição de Ensino: <strong>'. $nest1 .'</strong></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;">Cursos Complementares:</td></tr><tr><td>&nbsp;</td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Curso: <strong>'. $ncurso3 .'</strong></span></td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Instituição de Ensino: <strong>'. $nest3 .'</strong> </span></td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Concluído em: <strong>'. $dconcl3 .'</strong></span></td></tr><tr><td>&nbsp;</td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Curso: <strong>'. $ncurso4 .'</strong></span></td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Instituição de Ensino: <strong>'. $nest4 .'</strong></span></td></tr><tr><td><span style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Concluído em: <strong>'. $dconcl4 .'</strong></span></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;">Experiências Profissionais:</td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Última empresa que trabalhou: <strong>'. $emp1 .'</strong> <strong>'. $empat .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Cargo ocupado: <strong>'. $cargo1 .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Período: de <strong>'. $pa1 .'</strong> a <strong>'. $pa12 .'</strong></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Penúltima empresa que trabalhou: <strong>'. $emp2 .'</strong> <strong>'. $empat2 .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Cargo ocupado: <strong>'. $cargo2 .'</strong></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Período: de <strong>'. $pa2 .'</strong> a <strong>'. $pa22 .'</strong></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;">O candidato conheceu o curso através de:</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><b>'. $Facebook .' - </b><b>'. $Google .' - </b><b>'. $Cartazes .' - </b><b>'. $Indicacao .' </b></td></tr><tr><td>&nbsp;</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif; border-top:1px #6c6c6c solid;">Informações complementares:</td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><b>'. $mensagem .'</b></td></tr><tr><td height="30" ></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" ></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Este e-mail tem apenas caráter informativo, favor não responder.<br>Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria</td><td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
$mail->AltBody = 'ERRO';
$mail->AddAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']);      // attachment

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Obrigado por se interessar em fazer o curso de Agente de Portaria! Suas informacoes foram enviadas para a SPSP. Entraremos em contato assim que possivel. Para concretizacao da inscricao alguns documentos poderao ser solicitados para comprovacao das informacoes que constam no seu formulario enviado. Matricula numero $idd');</SCRIPT>");

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$query = "INSERT INTO curso(date, nome, end, no, comp, cep, cidade, estado, bairro, civil, nascto, cpf, rg, fone, cel, email, sexo, idade, dependentes, anexcurric, instrucao, serie1, nest1, dconcl1, ncurso1, ncurso3, nest3, dconcl3, ncurso4, nest4, dconcl4, emp1, cargo1, pa1, pa12, empat, emp2, cargo2, pa2, pa22, empat2, mensagem, Facebook, Google, Cartazes, TV, Jornal, Revista, Indicacao) VALUES('$date2', '$_POST[nome]', '$_POST[end]', '$_POST[no]', '$_POST[comp]', '$_POST[cep]', '$_POST[cidade]', '$_POST[estado]', '$_POST[bairro]', '$_POST[civil]', '$_POST[nascto]', '$_POST[cpf]', '$_POST[rg]', '$_POST[fone]', '$_POST[cel]', '$_POST[email]', '$_POST[sexo]', '$_POST[idade]', '$_POST[dependentes]', '$_POST[anexcurric2]', '$_POST[instrucao]', '$_POST[serie1]', '$_POST[nest1]', '$_POST[dconcl1]', '$_POST[ncurso1]', '$_POST[ncurso3]', '$_POST[nest3]', '$_POST[dconcl3]', '$_POST[ncurso4]', '$_POST[nest4]', '$_POST[dconcl4]', '$_POST[emp1]', '$_POST[cargo1]', '$_POST[pa1]', '$_POST[pa12]', '$_POST[empat]', '$_POST[emp2]', '$_POST[cargo2]', '$_POST[pa2]', '$_POST[pa22]', '$_POST[empat2]', '$_POST[mensagem]', '$_POST[Facebook]', '$_POST[Google]', '$_POST[Cartazes]', '$_POST[TV]', '$_POST[Jornal]', '$_POST[Revista]', '$_POST[Indicacao]')";
mysql_query($query);

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.spsp.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'noreply@spsp.com.br'; // Usuário do servidor SMTP
$mail->Password = '3m2i5s7s7'; // Senha da caixa postal utilizada
$mail->From = "noreply@spsp.com.br"; 
$mail->FromName = "Grupo SPSP";
$mail->AddAddress($email,$nome);
/*$mail->AddBCC('gustavo.guedes@spsp.com.br','Gustavo Guedes');*/
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = "Confirmação - Cadastro Curso de Agente de Portaria"; // Assunto da mensagem
$mail->Body = '<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7"><tr><td height="30"></td></tr><tr bgcolor="#f1f2f7" style="background-color: #f1f2f7"><td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f" style="background-color: #d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td></tr></table><table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td></tr></table></td></tr></table></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;"><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"><img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"></a></td></tr></table></td></tr></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tr><td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> Curso de Formação de Agente de Portaria</td></tr><tr><td height="20"></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><p>Obrigado por se interessar em fazer o curso de Agente de Portaria! Suas informações foram enviadas para a SPSP. Entraremos em contato assim que possivel.<br /> Para concretização da inscrição alguns documentos poderão ser solicitados para comprovação das informações que constam no seu formulário enviado.</p></td></tr><tr><td height="20" ></td></tr><tr><td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Matrícula Nº: <b> '. $idd .'</b></td></tr><tr><td height="30" ></td></tr><tr><td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" ></td></tr><tr><td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Este e-mail tem apenas caráter informativo, favor não responder.<br>Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></table></td></tr><tr><td height="35"></td></tr><tr bgcolor="#f1f2f7"><td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;"><tr bgcolor="#d9534f"><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;"><tr><td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;"><tr><td width="25%" align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria</td><td width="75%" align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td height="30"></td></tr></table>';
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