<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");

include("../config.php");

$colorsuccess = "<td align='left' height='20' style='background-color:#449d44;'></td>";
$colorwarning = "<td align='left' height='20' style='background-color:#f0ad4e;'></td>";
$colordanger = "<td align='left' height='20' style='background-color:#d9534f;'></td>";


$dataout = $_POST['dataout'];
$datatopo = $_POST['dataout'];
switch ($datatopo) {
case "": $data = date('d-m-Y'); $date = date('d-m-Y H:i:s'); break;
case !"": $data = $dataout; $date = $dataout; break;}

$cliente = $_POST['cliente'];
$ativ = $_POST['ativ']; 
$dtadmissao = $_POST['dtadmissao']; 
$colabora = $_POST['colabora']; 
$datain = $_POST['datain']; 
$observacao=$_POST['observacao'];

$q01=$_POST['q01'];
$q02=$_POST['q02'];
$q03=$_POST['q03'];
$q04=$_POST['q04'];
$q05=$_POST['q05'];
$q06=$_POST['q06'];
$q07=$_POST['q07'];
$q08=$_POST['q08'];
$q09=$_POST['q09'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];


$consulta_posto=mysql_query("SELECT NOMEPOS FROM sarposto WHERE CODPOS = '" . $ativ . "' AND CODCLI = '" . $cliente . "'");
		
		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $cliente . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];
		}
		
		while ($posto = mysql_fetch_array($consulta_posto)) {
            $posto_atividade = $posto['NOMEPOS'];
		}

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 10px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align:center"><strong> FOR 218 - Check List AVSST</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;">
  <tr>
    <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:12px; font-family: Helvetica, Arial, sans-serif;" >
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td style="color: #666666; font-family: Helvetica, Arial, sans-serif;"><strong>Dados da Vistoria:</strong><br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Cliente: <strong><? echo "$cliente_posto"; ?></strong><br>
                  Atividade: <strong><? echo "$posto_atividade"; ?></strong><br>
                  Supervisor: <strong><? echo "$usuario"; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> Data da Visita: <strong><? echo "$data"; ?></strong> <br>
                  Colaborador: <strong><? echo "$colabora"; ?></strong> <br>
                  Data de Admissão: <strong><? echo "$dtadmissao"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <strong>Legenda:</strong><br>
            <table style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr >
                <td width="4%" height='20px' align="left" style="background-color:#449d44;"></td>
                <td width="20%" align="left">= Conforme</td>
                <td width="4%" height='20px' align="left" style="background-color: #d9534f;"></td>
                <td width="20%" align="left">= Não Conforme</td>
                <td width="4%" height='20px' align="left" style="background-color: #f0ad4e;"></td>
                <td width="48%" align="left">= Não Aplicável</td>
              </tr>
            </table>
            <br />
            <br />
            <strong>Equipe:</strong><br>
            <table style="color: #666666; font-size: 8px;  font-family: Helvetica, Arial, sans-serif;" width="100%" bordercolor="#CCCCCC" border="1" cellspacing="0" cellpadding="0">
              <tr >
                <td width="10%" align="center" valign="middle">Uniforme</td>
                <td width="10%" align="center" valign="middle">Identificação Colaborador</td>
                <td width="10%" align="center" valign="middle">Cartão de Ponto</td>
                <td width="10%" align="center" valign="middle">Epi</td>
                <td width="10%" align="center" valign="middle">Aso - Exame Periódico</td>
                <td width="10%" align="center" valign="middle">Apresentação Pessoal</td>
                <td width="10%" align="center" valign="middle">Postura</td>
                <td width="10%" align="center" valign="middle">Integração - Treinamentos - NRs / Reciclagens</td>
                <td width="10%" align="center" valign="middle">Rotina de Trabalho</td>
                <td width="10%" align="center" valign="middle">Execução das Atividades</td>
              </tr>
              <tr>
                
<?php echo $q01=="conf"?"$colorsuccess":($q01 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q02=="conf"?"$colorsuccess":($q02 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q03=="conf"?"$colorsuccess":($q03 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q04=="conf"?"$colorsuccess":($q04 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q05=="conf"?"$colorsuccess":($q05 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q06=="conf"?"$colorsuccess":($q06 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q07=="conf"?"$colorsuccess":($q07 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q08=="conf"?"$colorsuccess":($q08 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q09=="conf"?"$colorsuccess":($q09 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q10=="conf"?"$colorsuccess":($q10 == "naplica" ? "$colorwarning" : "$colordanger"); ?>

                
              </tr>
            </table>
            <br>
            <br />
            <strong>Local de Trabalho:</strong><br>
            <table style="color: #666666; font-size: 8px;  font-family: Helvetica, Arial, sans-serif;" width="100%" bordercolor="#CCCCCC" border="1" cellspacing="0" cellpadding="0">
              <tr >
    <td width="12%" align="center" valign="middle">Posto de Trabalho</td>
                <td width="13%" align="center" valign="middle">Temperatura</td>
                <td width="12%" align="center" valign="middle">Ruído</td>
                <td width="13%" align="center" valign="middle">Ergonomia</td>
                <td width="12%" align="center" valign="middle">Risco Físico</td>
                <td width="13%" align="center" valign="middle">Risco Químico</td>
                <td width="12%" align="center" valign="middle">Riscos Biológico</td>
                <td width="13%" align="center" valign="middle">Disponibilidade de Água Potável</td>
              </tr>
              <tr>
<?php echo $q11=="conf"?"$colorsuccess":($q11 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q12=="conf"?"$colorsuccess":($q12 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q13=="conf"?"$colorsuccess":($q13 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q14=="conf"?"$colorsuccess":($q14 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q15=="conf"?"$colorsuccess":($q15 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q16=="conf"?"$colorsuccess":($q16 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q17=="conf"?"$colorsuccess":($q17 == "naplica" ? "$colorwarning" : "$colordanger"); ?>
<?php echo $q18=="conf"?"$colorsuccess":($q18 == "naplica" ? "$colorwarning" : "$colordanger"); ?>

              </tr>
            </table></td>
        </tr>
        <tr><td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">
         <? if ($observacao!="") {echo "<br><strong>Descrição da N/C ou observações:</strong><br>$observacao";} ?></td>
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
        <tr style="color: #666666; font-family: Helvetica, Arial, sans-serif;">
          <td> <strong>Responsável</strong><br>
            Nome: <b><? echo "$nome"; ?></b><br>
            E-mail: <b><? echo "$email"; ?></b><br>
            Data e Hora do início: <b><? echo "$datain"; ?></b><br>
            Data e Hora do envio: <b><? echo "$date"; ?></b></td>
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
                <td align="left" style="color: #fefefe; font-size: 10px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><? echo "$ver_for_218"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 10px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>