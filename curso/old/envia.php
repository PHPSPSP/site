<?
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
ini_set( 'display_errors', '0' );

$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
$datee = date("Y");

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
	
    if($candidato!=""){

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");

$query = mysql_query('SHOW TABLE STATUS LIKE "curso"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];

$destinatario = "gustavo.guedes@spsp.com.br; dayse.rocha@spsp.com.br";

		$MailRecipiente = $destinatario;
        $assunto    =  "Inscricao Curso de Formacao de Agente de Portaria";
                  
        $mensagem    =    '
		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7">
  <tr>
    <td height="30"></td>
  </tr>
  <tr bgcolor="#f1f2f7" style="background-color: #f1f2f7">
    <td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
        <tr bgcolor="#d9534f" style="background-color: #d9534f">
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;">
              <tr>
                <td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                    <tr>
                      <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td>
                    </tr>
                  </table>
                  <table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                    <tr>
                      <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;">
        <tr>
          <td height="40"></td>
        </tr>
        <tr>
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660">
              <tr>
                <td><table align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="http://sistemas.spsp.com.br/assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="40"></td>
        </tr>
        <tr>
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628" style="color: #666666; font-size: 12px; font-family: Helvetica, Verdana, sans-serif;">
              <tr>
                <td colspan="2" align="center" style="color: #d9534f; font-size: 16px; font-family: Helvetica, Verdana, sans-serif;">Inscrição  - Curso de Formação de Agente de Portaria</td>
              </tr>
              <tr>
                <td height="20" colspan="2"></td>
              </tr>
              <tr>
                <td colspan="2" style="font-size:18px" align="center" > 
                 <strong>Matrícula Nº: '. $idd .' </strong></td>
              </tr>
                            <tr>
                <td height="20" colspan="2"></td>
              </tr>
              <tr>
                <td >RE:</td>
                <td ><strong>'. $re .'</strong></td>
              </tr>
              <tr>
                <td >Nome:</td>
                <td ><strong>'. $candidato .'</strong></td>
              </tr>
              <tr>
                <td >E-mail:</td>
                <td ><strong>'. $email .'</strong></td>
              </tr>
              <tr>
                <td >Supervisor:</td>
                <td ><strong>'. $supervisor .'</strong></td>
              </tr>
              <tr>
                <td >Cliente:</td>
                <td ><strong>'. $cliente .'</strong></td>
              </tr>
                            <tr>
                <td height="20" colspan="2" ></td>
              </tr>
              <tr>
                <td colspan="2" >O candidato conheceu o CURSO através de:</td>
              </tr>
              <tr>
                <td colspan="2" ><strong> '. $Facebook .' - '. $Google .' - '. $Cartazes .' - '. $Indicacao .' </strong></td>
              </tr>
              <tr>
                <td height="30" colspan="2" ></td>
              </tr>
              <tr>
                <td colspan="2" ><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
              </tr>
              <tr>
                <td height="25" colspan="2" ></td>
              </tr>
              <tr>
                <td colspan="2" style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td>
              </tr>
              <tr>
                <td colspan="2" style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="35"></td>
        </tr>
        <tr bgcolor="#f1f2f7">
          <td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
              <tr bgcolor="#d9534f">
                <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;">
                    <tr>
                      <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                          <tr>
                            <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria </td>
                            <td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="30"></td>
  </tr>
</table>
		';
                    
        $boundary = "XYZ-" . date("dmYis") . "-ZYX";
                    
        $mens = "--$boundary\n";
        $mens .= "Content-Transfer-Encoding: 8bits\n";
        $mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
        $mens .= "$mensagem\n";
        $mens .= "--$boundary--\r\n";
                    
        $headers  = "MIME-Version: 1.1\n";
        $headers .= "From: \"$candidato - \" <$email>\n";
		$headers .= "Bcc: \"Gustavo Guedes - <gustavo.guedes@spsp.com.br>\n";
        $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\n";
		$headers .= "Content-Transfer-Encoding: 8bits\n";
        $headers .= "$boundary\n";
		$headers .= "Content-type: text/html; charset=UTF-8";
		

	if(!mail($MailRecipiente,$assunto,$mens,utf8_decode($headers) ,"-r".$MailRecipiente)){ // Se for Postfix
    $headers .= "Return-Path: " . $MailRecipiente . $quebra_linha; // Se "não for Postfix"                    
        mail($MailRecipiente,$assunto,$mens,utf8_decode($headers));}

$nome_do_site= "SPSP - Grupo Empresarial de Servicos";
$email_para_onde_vai_a_mensagem = "rh@spsp.com.br";
$nome_de_quem_recebe_a_mensagem = "SPSP - Grupo Empresarial de Servicos";

$assunto_da_mensagem_de_resposta = "Confirmacao";
$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site < $email_para_onde_vai_a_mensagem>\n";
$configuracao_da_mensagem_de_resposta= '
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7">
  <tr>
    <td height="30"></td>
  </tr>
  <tr bgcolor="#f1f2f7" style="background-color: #f1f2f7">
    <td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
        <tr bgcolor="#d9534f" style="background-color: #d9534f">
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;">
              <tr>
                <td><table align="left" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                    <tr>
                      <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> '. $today .' </td>
                    </tr>
                  </table>
                  <table align="right" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                    <tr>
                      <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;">
        <tr>
          <td height="40"></td>
        </tr>
        <tr>
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660">
              <tr>
                <td><table align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="http://sistemas.spsp.com.br/assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="40"></td>
        </tr>
        <tr>
          <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628" style="color: #666666; font-size: 12px; font-family: Helvetica, Verdana, sans-serif;">
              <tr>
                <td align="center" style="color: #d9534f; font-size: 16px; font-family: Helvetica, Verdana, sans-serif;">Inscrição - Curso de Formação de Agente de Portaria</td>
              </tr>
              <tr>
                <td height="20"></td>
              </tr>
              <tr>
                <td style="font-size:18px" align="center" ><strong>Matrícula Nº: '. $idd .' </strong></td>
              </tr>
              <tr>
                <td height="20"></td>
              </tr>
              <tr>
                <td >Obrigado <strong> '. $candidato.' </strong> por se interessar em fazer o curso de Agente de Portaria! </td>
              </tr>
              <tr>
                <td > Suas informacoes foram enviadas para o departamento do Curso. </td>
              </tr>
              <tr>
                <td > Aguarde nosso contato para confirmação da matrícula e informação sobre a data do curso! </td>
              </tr>
              <tr>
                <td height="20" ></td>
              </tr>
              <tr>
                <td >Atenciosamente,</td>
              </tr>
              <tr>
                <td ><strong>Grupo SPSP</strong></td>
              </tr>
              <tr>
                <td height="30" ></td>
              </tr>
              <tr>
                <td ><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
              </tr>
              <tr>
                <td height="25" ></td>
              </tr>
              <tr>
                <td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td>
              </tr>
              <tr>
                <td style="color: #aaaaaa; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="35"></td>
        </tr>
        <tr bgcolor="#f1f2f7">
          <td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
              <tr bgcolor="#d9534f">
                <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660" style="font-size: 14px; border: 0;">
                    <tr>
                      <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size: 14px; border: 0;">
                          <tr>
                            <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> Curso Agente de Portaria</td>
                            <td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; '. $datee .' . Todos os direitos reservados. </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="30"></td>
  </tr>
</table>';

                    
        $headers  = "MIME-Version: 1.1\n";
		$headers .= "$cabecalho_da_mensagem_de_resposta";
        $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\n";
		$headers .= "Content-Transfer-Encoding: 8bits\n";
        $headers .= "$boundary\n";
		$headers .= "Content-type: text/html; charset=UTF-8";

if($assunto_digitado_pelo_usuario=="n"){$assunto = "$assunto_da_mensagem_de_resposta";}else{$assunto = "Re: $assunto";}

		$boundary = "XYZ-" . date("dmYis") . "-ZYX";

        $mensagem = "--$boundary\n";
        $mensagem .= "Content-Transfer-Encoding: 8bits\n";
        $mensagem .= "Content-Type: text/html; charset=\"UTF-8\"\n\n";
        $mensagem .= "$configuracao_da_mensagem_de_resposta\n";
        $mensagem .= "--$boundary--\r\n";
		
if(!mail($email,$assunto,$mensagem,$headers ,"-r".$email)){
$headers .= "Return-Path: " . $email . $quebra_linha;
mail($email,$assunto,$mensagem,$headers);}

    echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Obrigado por se interessar em fazer o curso de Agente de Portaria! Suas informacoes foram enviadas para a SPSP. Entraremos em contato assim que possivel. Matricula numero $idd');</SCRIPT>");

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");

$query = "INSERT INTO curso(supervisor, cliente, date, nome, email, re, fone, cel, Facebook, Google, Cartazes, TV, Jornal, Revista, Indicacao) VALUES('$_POST[supervisor]', '$_POST[cliente]', '$date2', '$_POST[candidato]', '$_POST[email]', '$_POST[re]', '$_POST[fone]', '$_POST[cel]', '$_POST[Facebook]', '$_POST[Google]', '$_POST[Cartazes]', '$_POST[TV]', '$_POST[Jornal]', '$_POST[Revista]', '$_POST[Indicacao]')";
mysql_query($query);}

?>

<SCRIPT LANGUAGE='JavaScript'>
window.location.href='logado.php';
</SCRIPT>