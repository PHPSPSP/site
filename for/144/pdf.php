<?php
header('Content-type: text/html; charset=UTF-8',true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");

$dataout = $_POST['dataout'];
$datatopo = $_POST['dataout'];
switch ($datatopo) {
case "": $data = date('d-m-Y'); $date = date('d-m-Y H:i:s'); break;
default: $data = $dataout; $date = $dataout; break;}

$colorsuccess = "<td height='20' width='20%' style='background-color:#449d44;'></td>";
$colorwarning = "<td height='20' width='20%' style='background-color:#f0ad4e;'></td>";
$colordanger = "<td height='20' width='20%' style='background-color:#d9534f;'></td>";

$cliente = $_POST['cliente'];
$ativ = $_POST['ativ']; 
$datain = $_POST['datain']; 
$observacao=$_POST['observacao'];
$codfor=$_POST['codfor'];

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}

include("perguntas.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 5px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-align:center"><strong> FOR 144-<? echo "$codfor"; ?> - Check List Supervis&atilde;o</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;">
  <tr>
    <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:9px; font-family: Helvetica, Arial, sans-serif;" >
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td style="color: #666666; font-family: Helvetica, Arial, sans-serif;"><strong>Dados da Vistoria:</strong><br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr style="color: #666666; font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Cliente: <strong><?php echo utf8_decode($cliente_posto); ?></strong><br>
                  Atividade: <strong><?php echo $post->ativ; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> Supervisor: <strong><? echo "$usuario"; ?></strong><br />
                  Data da Visita: <strong><? echo "$data"; ?></strong> <br></td>
              </tr>
            </table>
            <br />
            <br />
            <strong>Legenda:</strong><br>
            <table style="color: #666666;  font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr >
                <td width="4%" height='20px' align="left" style="background-color:#449d44;"></td>
                <td width="20%" align="left">= Conforme</td>
                <td width="4%" height='20px' align="left" style="background-color: #d9534f;"></td>
                <td width="20%" align="left">= N&atilde;o Conforme</td>
                <td width="4%" height='20px' align="left" style="background-color: #f0ad4e;"></td>
                <td width="48%" align="left">= N&atilde;o Aplic&aacute;vel</td>
              </tr>
            </table>
            <br />
            <br />
            
            <? echo "$conteudo"; ?>
            
      </td>
        </tr>
        <tr>
          <td style="color: #666666;  font-family: Helvetica, Arial, sans-serif;"><? if ($observacao!="") {echo utf8_decode("<br><strong>Descrição da N/C ou observações:</strong><br>$observacao");} ?></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr style="color: #666666; font-family: Helvetica, Arial, sans-serif;">
          <td><strong>Respons&aacute;vel</strong><br>
          
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr style="color: #666666; font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">
                Nome: <b><? echo "$nome"; ?></b><br>
            E-mail: <b><? echo "$email"; ?></b>
            </td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> 
                Data e Hora do in&iacute;cio: <b><? echo "$datain"; ?></b><br>
            Data e Hora do envio: <b><? echo "$date"; ?></b>
            </td>
              </tr>
            </table>
            
            
            
            </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
</table>
<table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color: #808080">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"   style="border: 0;">
        <tr>
          <td><table height="40"  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
              <tr>
                <td align="left" style="color: #fefefe; font-size: 8px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><? echo "$ver_for_144 - $codfor"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 8px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>