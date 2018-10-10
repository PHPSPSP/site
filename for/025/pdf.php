<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
/*include("../listas.php");*/

$base_url = 'http://200.183.153.86/';

$date = date("d/m/Y H:i");
$nome = $_POST['usuario'];
$nomecol = $_POST['nomecol'];
$re = $_POST['re'];
$rgcolab = $_POST['rgcolab'];
$empresa= $_POST['empresa'];
$endere= $_POST['endere'];
$bcasa= $_POST['bcasa'];
$ccas= $_POST['ccasa'];

$data10 = $_POST['data10'];
$clinovo= $_POST['clinovo'];
$novaescala= $_POST['novaescala'];
$folgfix2= $_POST['folgfix2'];
$folgfix22= $_POST['folgfix22'];
	if ($folgfix22==""){if ($folgfix2==""){$folgfixx2="";}else{$folgfixx2=" - Folga: $folgfix2";};}else{$folgfixx2=" Folga: $folgfix2 e $folgfix22";};

$corpomsn = "Vimos por meio deste, comunicar ao referido colaborador (a) que por motivos de remanejando em seu quadro de colaboradores, a partir de <strong> $data10 </strong>, &nbsp;passar&aacute; a exercer suas atividades na sede &nbsp;do cliente <strong> $clinovo </strong>, localizada no endere&ccedil;o <strong> $endere </strong>, Bairro <strong> $bcasa </strong>, cidade/estado <strong> $ccasa </strong>, na escala e hor&aacute;rio <strong> $novaescala $folgfixx2</strong>, atendendo os requisitos mencionados na cl&aacute;usula vig&eacute;sima terceira da respectiva Conven&ccedil;&atilde;o Coletiva &ndash; Comunica&ccedil;&atilde;o com anteced&ecirc;ncia m&iacute;nima de 48 (quarenta e oito) horas.";

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<!--<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>-->
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table    width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style="border: 0; margin: 15px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align: center"><strong> FOR 025 - Comunicado de Transfer&ecirc;ncia e Altera&ccedil;&atilde;o de Escala</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;" width="100%">
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td style="color: #666666; font-size: 12px; font-family: Helvetica, Arial, sans-serif;"> Ao<br>
            Colaborador: <strong><?php echo "$nomecol"; ?></strong> <br>
            RE: <strong><?php echo "$re"; ?></strong> <br>
            Empresa: <strong><?php echo "$empresa"; ?></strong><br>
            <br>
            <br>
            <center>
              <font size="+2"><strong>COMUNICADO</strong></font>
            </center>
            <br>
            <br>
            <div style="text-align:justify; -webkit-hyphens: none; -moz-hyphens: none; -ms-hyphens: none; hyphens: none; line-height:normal; width:100%; style="word-wrap:normal"">
            <table width="100%" style="word-wrap:normal; -webkit-hyphens: none; -moz-hyphens: none; -ms-hyphens: none; hyphens: none; ">
            <tr>
            <td><?php echo "$corpomsn"; ?>          
            </td></tr></table></div>
            <br>
            <br/>
            RECEBIDO EM ______/______/________, &agrave;s _____:______hs.<br>
            <br>
            ___________________________________<br>
            Assinatura do colaborador<br>
            Nome: <strong><?php echo "$nomecol"; ?></strong><br>
            RG: <strong><?php echo "$rgcolab"; ?></strong></td>
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
          <td> Respons&aacute;vel<br>
            Nome: <strong><?php echo "$nome"; ?></strong><br>
            E-mail: <strong><?php echo "$email"; ?></strong><br>
            Data e Hora: <strong><?php echo "$date"; ?></strong></td>
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
                <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><?php echo "$ver_for_25"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>