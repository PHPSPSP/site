<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
/*include("../listas.php");*/

$base_url = 'http://200.183.153.86/';
$date = date("d/m/Y H:i");
	$email = $_POST['emailuser'];
	$nome = nl2br($_POST['usuario']);	
	$data = nl2br($_POST['data']);
    $empresa =  nl2br($_POST['empresa']);
    $servico =  nl2br($_POST['servico']);
    $campo4 = nl2br($_POST['cliente']);
	$cei = nl2br($_POST['cei']);
    $campo8 = nl2br($_POST['cnpj']);
    $campo2 = nl2br($_POST['codigo']);
    $campo6 = nl2br($_POST['cidade']);
    $funcionarios = nl2br($_POST['funcionarios']);
    $aviso = nl2br($_POST['aviso']);
	$equipamentos = nl2br($_POST['equipamentos']);
	$retirar = nl2br($_POST['retirar']);
	$obs = nl2br($_POST['obs']);
	$quais = nl2br($_POST['quais']);
	$mensagem = nl2br($_POST['mensagem']);

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table    width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style="border: 0; margin: 15px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align: center"><strong>FOR 249 - Comunicado de Encerramento de Serviço</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;">
  <tr>
    <td height="30"></td>
  </tr>
  <tr>
    <td><table align="center" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"><div style="width: 550px;"> <font size="+2">
              <center>
                COMUNICADO
              </center>
              </font><br/>
              <br/>
              <div style="text-align:justify; -webkit-hyphens: none; -moz-hyphens: none; -ms-hyphens: none; hyphens: none; line-height:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venho por meio deste, comunicar que a partir de <b><? echo "$data"; ?></b>, será encerrado  as atividades de <b><? echo "$servico"; ?></b> da empresa <b><? echo "$empresa"; ?></b> com o cliente <b><? echo "$campo4"; ?></b>, CNPJ <b><? echo "$campo8"; ?></b>, CEI <b><? echo "$cei"; ?></b>, código <b><? echo "$campo2"; ?></b>, cidade <b><? echo "$campo6"; ?></b>.</div>
              <br/>
              <br/>
              Quantidade funcionarios: <b><? echo "$funcionarios"; ?></b><br/>
              Será cobrado  aviso? <b><? echo "$aviso"; ?></b> - <b><? echo "$obs"; ?></b><br/>
              Existem equipamentos da empresa a serem retirados? <b><? echo "$retirar"; ?></b> <br/>
              Quais? <b><? echo "$quais"; ?></b><br/>
              Já foram retirados os equipamentos do posto? <b><? echo "$equipamentos"; ?></b> <br/>
              <br/>
              Motivo do encerramento: <b><? echo "$mensagem"; ?></b> </div></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">
          <td> Responsável<br>
            Nome: <b><? echo "$nome"; ?></b><br>
            E-mail: <b><? echo "$email"; ?></b><br>
            Data e Hora: <b><? echo "$date"; ?></b></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
</table>
<table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color: #808080">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"   style="border: 0;">
        <tr>
          <td><table height="40"  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
              <tr>
                <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><? echo "$ver_for_249"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>