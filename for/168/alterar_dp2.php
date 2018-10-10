<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

session_start();
include("../privado.php");
include("../listas.php");

$sql = "SELECT * FROM for054arq WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$datanow = date("d/m/Y H:i:s");

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$nome = $_SESSION['nome'];

if($nome!=""){
	
$id2 = $_POST['id2'];
$campo4 = $_POST['campo4'];
$campo5 = $_POST['campo5'];
$campo6 = $_POST['campo6'];
$campo7 = $_POST['campo7'];
$campo8 = $_POST['campo8'];
$campo9 = $_POST['campo9'];
$campo10 = $_POST['campo10'];
$campo11 = $_POST['campo11'];
$campo12 = $_POST['campo12'];
$campo13 = $_POST['campo13'];
$campo14 = $_POST['campo14'];
$campo15 = $_POST['campo15'];
$campo16 = $_POST['campo16'];
$campo17 = $_POST['campo17'];
$campo18 = $_POST['campo18'];
$respleg = $_POST['respleg'];
$emusuario = $_SESSION['mail'];
$to = "$nome <$emusuario>";
$assunto = utf8_encode("FOR 168 - Cadastro de Clientes - $campo4 - Alteracao");
$datee = date("Y");
$today = utf8_encode(ucfirst(strftime("%A, %d de %B de %Y", strtotime("today"))));
$mensagem = '<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body style="margin: 0; padding: 0;">

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
<td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="http://200.183.153.86/assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td>
</tr></tbody></table>

</td></tr></tbody></table></td></tr><tr><td height="40"></td></tr><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"><tr><td height="7"></td></tr></table></td></tr><tr><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="628"><tbody><tr>
<td colspan="2" style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;"> FOR 168 - Cadastro de Clientes - Alteração</td></tr><tr><td height="20" colspan="2"></td></tr><tr>
</tr>
<tr>
  <td colspan="2" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Olá<br>
    Venho através deste informar a alteração do Cadastro do Cliente: <b> '. $campo4 .' </b> :<br />
<br />
Contratante / Razão Social: <b> '. $campo4 .' </b></td>
</tr>
<tr>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Rua e Bairro: <b> '. $campo5 .'</b></td>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">CEP: <b> '. $campo7 .' </b></td>
</tr>
<tr>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Cidade: <b> '. $campo6 .' </b></td>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">CNPJ: <b> '. $campo8 .' </b></td>
</tr>
<tr>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">I.Est.: <b> '. $campo9 .'</b></td>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> I. Mun: <b> '. $campo10 .' </b></td>
</tr>
<tr>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Fone / Fax: <b> '. $campo11 .'</b></td>
  <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Página Web: <b> '. $campo12 .' </b></td>
</tr>
<tr><td height="20" colspan="2"></td></tr>
<tr>
  <td colspan="2" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">E-mail para cobrança e envio de documentos: <b> '. $campo13 .' </b> <br />
Local Implantação: <b> '. $campo14 .' </b></td>
</tr>
<tr>
  <td width="50%" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Contato Comercial / Faturam.: <b> '. $campo15 .' </b></td>
  <td width="50%" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">E-mail: <b> '. $campo16 .' </b></td>
</tr>
<tr>
  <td width="50%" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Responsável Legal: <b> '. $campo17 .' </b></td>
  <td width="50%" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">CPF: <b> '. $campo18 .' </b></td>
</tr>
<tr>
  <td colspan="2" style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">Gestor do Contrato: <b> '. $respleg .' </b> <br>
    <br>
Att.<br>
'. $nome .' </td>
</tr>
<tr><td height="30" colspan="2"></td></tr><tr><td colspan="2"><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td></tr><tr><td height="25" colspan="2"></td></tr><tr>
<td colspan="2" style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td></tr><tr>
<td colspan="2" style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td></tr></tbody></table>

</td></tr><tr><td height="35"></td></tr></tbody></table>

</td></tr><tr bgcolor="#f1f2f7">
<td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
<tbody><tr bgcolor="#d9534f"><td>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="660"  style="font-size: 14px; border: 0;"><tbody><tr><td>

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;"><tbody><tr>
<td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;">'. $ver_for_168 .'</td>
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
        $headers .= "From: \"$nome\" <$emusuario>\n";
		$headers .= "Cc: \"Vanessa Lima\" <vanessa.lima@spsp.com.br>, \"Daniel Barros\" <daniel.barros@spsp.com.br>, \"Ana Pereira\" <ana.pereira@spsp.com.br>, \"Dayse Rocha\" <dayse.rocha@spsp.com.br>, \"Camila Sotelo\" <camila.sotelo@spsp.com.br>, \"Claudia Franzen\" <claudia.franzen@spsp.com.br>, \"Fabiana Tomasela\" <fabiana.tomasela@spsp.com.br>, \"Deise Lourenco\" <deise.lourenco@spsp.com.br>\n";
		$headers .= "Bcc: \"Gustavo Guedes\" <gustavo.guedes@spsp.com.br>\n";
        $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\n";
        $headers .= "$boundary\n";
                    
		if(!mail($to, $assunto,$mens,$headers ,"-r".$email)){
		$headers .= "Return-Path: " . $email . $quebra_linha;                
		mail($to, $assunto,$mens,$headers);}
		
echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Dados cadastrais alterados com sucesso!');</SCRIPT>");
		
    $sql_UP = "UPDATE for054arq SET 
campo4='".mysql_real_escape_string($_POST['campo4'])."',
campo5='".mysql_real_escape_string($_POST['campo5'])."',
campo6='".mysql_real_escape_string($_POST['campo6'])."',
campo7='".mysql_real_escape_string($_POST['campo7'])."',
campo8='".mysql_real_escape_string($_POST['campo8'])."',
campo9='".mysql_real_escape_string($_POST['campo9'])."',
campo10='".mysql_real_escape_string($_POST['campo10'])."',
campo11='".mysql_real_escape_string($_POST['campo11'])."',
campo12='".mysql_real_escape_string($_POST['campo12'])."',
campo13='".mysql_real_escape_string($_POST['campo13'])."',
campo14='".mysql_real_escape_string($_POST['campo14'])."',
campo15='".mysql_real_escape_string($_POST['campo15'])."',
campo16='".mysql_real_escape_string($_POST['campo16'])."',
campo17='".mysql_real_escape_string($_POST['campo17'])."',
campo18='".mysql_real_escape_string($_POST['campo18'])."',
respleg='".mysql_real_escape_string($_POST['respleg'])."'
WHERE id='".mysql_real_escape_string($_POST['id2'])."'";
    $query = mysql_query($sql_UP) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='FOR1682.php';</SCRIPT>");		

}
?>