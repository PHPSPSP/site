<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");

$colorsuccess = "height='10' style='background-color:#449d44;'";
$colorwarning = "height='10' style='background-color:#f0ad4e;'";
$colordanger = "height='10' style='background-color:#d9534f;'";
$nocolor = "height='10'";

$quarto = $_POST['quarto']; 
$lacre = $_POST['lacre']; 
$datahora = date('d-m-Y H:i:s');
$data = $_POST['data']; 
$horain = $_POST['horain']; 
$horafin = $_POST['horafin']; 
$horalimpeza = $horain ." - ". $horafin;
$colaborador = $_POST['colaborador'];
$colaborador2 = $_POST['colaborador2'];
$colaboradores = $colaborador ." e ". $colaborador2;
$cliente1 = $_POST['cliente1']; 
$usuario = $_POST['usuario'];
$email = $_SESSION['mail'];  
$tipolimpeza = $_POST['tipolimpeza'];
$horaliberado = $_POST['horaliberado'];

$q01 = $_POST['q01'];
$q02 = $_POST['q02'];
$q03 = $_POST['q03'];
$q04 = $_POST['q04'];
$q05 = $_POST['q05'];
$q06 = $_POST['q06'];
$q07 = $_POST['q07'];
$q08 = $_POST['q08'];
$q09 = $_POST['q09'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];
$q18 = $_POST['q18'];
$q19 = $_POST['q19'];
$q20 = $_POST['q20'];
$q21 = $_POST['q21'];
$q22 = $_POST['q22'];
$q23 = $_POST['q23'];
$q24 = $_POST['q24'];
$q25 = $_POST['q25'];
$q26 = $_POST['q26'];

$q011 = $_POST['q011'];
$q021 = $_POST['q021'];
$q031 = $_POST['q031'];
$q041 = $_POST['q041'];
$q051 = $_POST['q051'];
$q061 = $_POST['q061'];
$q071 = $_POST['q071'];
$q081 = $_POST['q081'];
$q091 = $_POST['q091'];
$q101 = $_POST['q101'];
$q111 = $_POST['q111'];
$q121 = $_POST['q121'];
$q131 = $_POST['q131'];
$q141 = $_POST['q141'];
$q151 = $_POST['q151'];
$q161 = $_POST['q161'];
$q171 = $_POST['q171'];
$q181 = $_POST['q181'];
$q191 = $_POST['q191'];
$q201 = $_POST['q201'];
$q211 = $_POST['q211'];
$q221 = $_POST['q221'];
$q231 = $_POST['q231'];
$q241 = $_POST['q241'];
$q251 = $_POST['q251'];
$q261 = $_POST['q261'];

$obs01 = $_POST['obs01'];
$obs02 = $_POST['obs02'];
$obs03 = $_POST['obs03'];
$obs04 = $_POST['obs04'];
$obs05 = $_POST['obs05'];
$obs06 = $_POST['obs06'];
$obs07 = $_POST['obs07'];
$obs08 = $_POST['obs08'];
$obs09 = $_POST['obs09'];
$obs10 = $_POST['obs10'];
$obs11 = $_POST['obs11'];
$obs12 = $_POST['obs12'];
$obs13 = $_POST['obs13'];
$obs14 = $_POST['obs14'];
$obs15 = $_POST['obs15'];
$obs16 = $_POST['obs16'];
$obs17 = $_POST['obs17'];
$obs18 = $_POST['obs18'];
$obs19 = $_POST['obs19'];
$obs20 = $_POST['obs20'];
$obs21 = $_POST['obs21'];
$obs22 = $_POST['obs22'];
$obs23 = $_POST['obs23'];
$obs24 = $_POST['obs24'];
$obs25 = $_POST['obs25'];
$obs26 = $_POST['obs26'];

$os01 = $_POST['os01'];
$os02 = $_POST['os02'];
$os03 = $_POST['os03'];
$os04 = $_POST['os04'];
$os05 = $_POST['os05'];
$os06 = $_POST['os06'];
$os07 = $_POST['os07'];
$os08 = $_POST['os08'];
$os09 = $_POST['os09'];
$os10 = $_POST['os10'];
$os11 = $_POST['os11'];
$os12 = $_POST['os12'];
$os13 = $_POST['os13'];
$os14 = $_POST['os14'];
$os15 = $_POST['os15'];
$os16 = $_POST['os16'];
$os17 = $_POST['os17'];
$os18 = $_POST['os18'];
$os19 = $_POST['os19'];
$os20 = $_POST['os20'];
$os21 = $_POST['os21'];
$os22 = $_POST['os22'];
$os23 = $_POST['os23'];
$os24 = $_POST['os24'];
$os25 = $_POST['os25'];
$os26 = $_POST['os26'];  

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 10px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align:center"><strong> FOR 312 - Check List Entrega de Quarto</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;">
  <tr>
    <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:10px; font-family: Helvetica, Arial, sans-serif; color: #666666" >
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td style="color: #666666; font-family: Helvetica, Arial, sans-serif;"><strong>Dados da Vistoria Limpeza  <? echo "$tipolimpeza"; ?>:</strong><br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr style="color: #666666; font-size: 10px;  font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Cliente: <strong><? echo "$cliente1"; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> Quarto: <strong><? echo "$quarto"; ?></strong><br></td>
              </tr>
              <tr style="color: #666666; font-size: 10px;  font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Lider <strong><? echo "$usuario"; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Lacre: <strong><? echo "$lacre"; ?></strong></td>
              </tr>
              <tr style="color: #666666; font-size: 10px;  font-family: Helvetica, Arial, sans-serif;">
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Colaborador: <strong><? echo "$colaboradores"; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Data da Limpeza: <strong><? echo date('d/m/Y',  strtotime($data)); ?></strong></td>
              </tr>
              <tr style="color: #666666; font-size: 10px;  font-family: Helvetica, Arial, sans-serif;">
                <td valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Data e Hora do FOR: <strong><? echo "$datahora"; ?></strong></td>
                <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Hora da Limpeza: <strong><? echo "$horalimpeza"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table style="color: #666666; font-size: 8px;  font-family: Helvetica, Arial, sans-serif;" width="100%" bordercolor="#CCCCCC" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#E5E5E5" width="20%" height="15px" align="center" valign="middle">Itens</td>
                <td bgcolor="#E5E5E5" width="10%" height="15px" align="center" valign="middle">Limpeza</td>
                <td bgcolor="#E5E5E5" width="10%" height="15px" align="center" valign="middle">Organização</td>
                <td bgcolor="#E5E5E5" width="40%" height="15px" align="center" valign="middle">OBS</td>
                <td bgcolor="#E5E5E5" width="20%" height="15px" align="center" valign="middle">Abertura de OS</td>
              </tr>
              <tr>
                <td align="center">Cama</td>
                <td align="center" <?php echo $q01=="Conforme"?"$colorsuccess":($q01 == "Não Aplica" ? "$colorwarning" : ($q01 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q011=="Conforme"?"$colorsuccess":($q011 == "Não Aplica" ? "$colorwarning" : ($q011 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs01"; ?></td>
                <td align="center"><? echo "$os01"; ?></td>
              </tr>
              <tr>
                <td align="center">Colchão</td>
                <td align="center" <?php echo $q02=="Conforme"?"$colorsuccess":($q02 == "Não Aplica" ? "$colorwarning" : ($q02 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q021=="Conforme"?"$colorsuccess":($q021 == "Não Aplica" ? "$colorwarning" : ($q021 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs02"; ?></td>
                <td align="center"><? echo "$os02"; ?></td>
              </tr>
              <tr>
                <td align="center">Mesa Cabeceira</td>
                <td align="center" <?php echo $q03=="Conforme"?"$colorsuccess":($q03 == "Não Aplica" ? "$colorwarning" : ($q03 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q031=="Conforme"?"$colorsuccess":($q031 == "Não Aplica" ? "$colorwarning" : ($q031 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs03"; ?></td>
                <td align="center"><? echo "$os03"; ?></td>
              </tr>
              <tr>
                <td align="center">Suporte de Soro</td>
                <td align="center" <?php echo $q04=="Conforme"?"$colorsuccess":($q04 == "Não Aplica" ? "$colorwarning" : ($q04 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q041=="Conforme"?"$colorsuccess":($q041 == "Não Aplica" ? "$colorwarning" : ($q041 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs04"; ?></td>
                <td align="center"><? echo "$os04"; ?></td>
              </tr>
              <tr>
                <td align="center">Escadinha</td>
                <td align="center" <?php echo $q05=="Conforme"?"$colorsuccess":($q05 == "Não Aplica" ? "$colorwarning" : ($q05 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q051=="Conforme"?"$colorsuccess":($q051 == "Não Aplica" ? "$colorwarning" : ($q051 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs05"; ?></td>
                <td align="center"><? echo "$os05"; ?></td>
              </tr>
              <tr>
                <td align="center">Poltrona / Sofá</td>
                <td align="center" <?php echo $q06=="Conforme"?"$colorsuccess":($q06 == "Não Aplica" ? "$colorwarning" : ($q06 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q061=="Conforme"?"$colorsuccess":($q061 == "Não Aplica" ? "$colorwarning" : ($q061 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs06"; ?></td>
                <td align="center"><? echo "$os06"; ?></td>
              </tr>
              <tr>
                <td align="center">Toalheiro</td>
                <td align="center" <?php echo $q07=="Conforme"?"$colorsuccess":($q07 == "Não Aplica" ? "$colorwarning" : ($q07 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q071=="Conforme"?"$colorsuccess":($q071 == "Não Aplica" ? "$colorwarning" : ($q071 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs07"; ?></td>
                <td align="center"><? echo "$os07"; ?></td>
              </tr>
              <tr>
                <td align="center">Papelaria</td>
                <td align="center" <?php echo $q08=="Conforme"?"$colorsuccess":($q08 == "Não Aplica" ? "$colorwarning" : ($q08 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q081=="Conforme"?"$colorsuccess":($q081 == "Não Aplica" ? "$colorwarning" : ($q081 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs08"; ?></td>
                <td align="center"><? echo "$os08"; ?></td>
              </tr>
              <tr>
                <td align="center">Saboneteira</td>
                <td align="center" <?php echo $q09=="Conforme"?"$colorsuccess":($q09 == "Não Aplica" ? "$colorwarning" : ($q09 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q091=="Conforme"?"$colorsuccess":($q091 == "Não Aplica" ? "$colorwarning" : ($q091 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs09"; ?></td>
                <td align="center"><? echo "$os09"; ?></td>
              </tr>
              <tr>
                <td align="center">Armário</td>
                <td align="center" <?php echo $q10=="Conforme"?"$colorsuccess":($q10 == "Não Aplica" ? "$colorwarning" : ($q101 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q101=="Conforme"?"$colorsuccess":($q101 == "Não Aplica" ? "$colorwarning" : ($q101 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs10"; ?></td>
                <td align="center"><? echo "$os10"; ?></td>
              </tr>
              <tr>
                <td align="center">TV</td>
                <td align="center" <?php echo $q11=="Conforme"?"$colorsuccess":($q11 == "Não Aplica" ? "$colorwarning" : ($q11 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q111=="Conforme"?"$colorsuccess":($q111 == "Não Aplica" ? "$colorwarning" : ($q111 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs11"; ?></td>
                <td align="center"><? echo "$os11"; ?></td>
              </tr>
              <tr>
                <td align="center">Controle Remoto</td>
                <td align="center" <?php echo $q12=="Conforme"?"$colorsuccess":($q12 == "Não Aplica" ? "$colorwarning" : ($q12 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q121=="Conforme"?"$colorsuccess":($q121 == "Não Aplica" ? "$colorwarning" : ($q121 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs12"; ?></td>
                <td align="center"><? echo "$os12"; ?></td>
              </tr>
              <tr>
                <td align="center">Controle Ar Condicionado</td>
                <td align="center" <?php echo $q13=="Conforme"?"$colorsuccess":($q13 == "Não Aplica" ? "$colorwarning" : ($q13 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q131=="Conforme"?"$colorsuccess":($q131 == "Não Aplica" ? "$colorwarning" : ($q131 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs13"; ?></td>
                <td align="center"><? echo "$os13"; ?></td>
              </tr>
              <tr>
                <td align="center">Caixa Acoplada Banheiro</td>
                <td align="center" <?php echo $q14=="Conforme"?"$colorsuccess":($q14 == "Não Aplica" ? "$colorwarning" : ($q14 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q141=="Conforme"?"$colorsuccess":($q141 == "Não Aplica" ? "$colorwarning" : ($q141 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs14"; ?></td>
                <td align="center"><? echo "$os14"; ?></td>
              </tr>
              <tr>
                <td align="center">Vaso Sanitário</td>
                <td align="center" <?php echo $q15=="Conforme"?"$colorsuccess":($q15 == "Não Aplica" ? "$colorwarning" : ($q15 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q151=="Conforme"?"$colorsuccess":($q151 == "Não Aplica" ? "$colorwarning" : ($q151 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs15"; ?></td>
                <td align="center"><? echo "$os15"; ?></td>
              </tr>
              <tr>
                <td align="center">Lixeira</td>
                <td align="center" <?php echo $q16=="Conforme"?"$colorsuccess":($q16 == "Não Aplica" ? "$colorwarning" : ($q16 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q161=="Conforme"?"$colorsuccess":($q161 == "Não Aplica" ? "$colorwarning" : ($q161 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs16"; ?></td>
                <td align="center"><? echo "$os16"; ?></td>
              </tr>
              <tr>
                <td align="center">Espelho</td>
                <td align="center" <?php echo $q17=="Conforme"?"$colorsuccess":($q17 == "Não Aplica" ? "$colorwarning" : ($q17 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q171=="Conforme"?"$colorsuccess":($q171 == "Não Aplica" ? "$colorwarning" : ($q171 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs17"; ?></td>
                <td align="center"><? echo "$os17"; ?></td>
              </tr>
              <tr>
                <td align="center">Barra de Proteção</td>
                <td align="center" <?php echo $q18=="Conforme"?"$colorsuccess":($q18 == "Não Aplica" ? "$colorwarning" : ($q18 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q181=="Conforme"?"$colorsuccess":($q181 == "Não Aplica" ? "$colorwarning" : ($q181 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs18"; ?></td>
                <td align="center"><? echo "$os18"; ?></td>
              </tr>
              <tr>
                <td align="center">Lâmpadas</td>
                <td align="center" <?php echo $q19=="Conforme"?"$colorsuccess":($q19 == "Não Aplica" ? "$colorwarning" : ($q19 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q191=="Conforme"?"$colorsuccess":($q191 == "Não Aplica" ? "$colorwarning" : ($q191 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs19"; ?></td>
                <td align="center"><? echo "$os19"; ?></td>
              </tr>
              <tr>
                <td align="center">Ralos</td>
                <td align="center" <?php echo $q20=="Conforme"?"$colorsuccess":($q20 == "Não Aplica" ? "$colorwarning" : ($q20 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q201=="Conforme"?"$colorsuccess":($q201 == "Não Aplica" ? "$colorwarning" : ($q201 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs20"; ?></td>
                <td align="center"><? echo "$os20"; ?></td>
              </tr>
              <tr>
                <td align="center">Espelho de Tomada</td>
                <td align="center" <?php echo $q21=="Conforme"?"$colorsuccess":($q21 == "Não Aplica" ? "$colorwarning" : ($q21 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q211=="Conforme"?"$colorsuccess":($q211 == "Não Aplica" ? "$colorwarning" : ($q211 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs21"; ?></td>
                <td align="center"><? echo "$os21"; ?></td>
              </tr>
              <tr>
                <td align="center">Pisos</td>
                <td align="center" <?php echo $q22=="Conforme"?"$colorsuccess":($q22 == "Não Aplica" ? "$colorwarning" : ($q22 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q221=="Conforme"?"$colorsuccess":($q221 == "Não Aplica" ? "$colorwarning" : ($q221 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs22"; ?></td>
                <td align="center"><? echo "$os22"; ?></td>
              </tr>
              <tr>
                <td align="center">Paredes</td>
                <td align="center" <?php echo $q23=="Conforme"?"$colorsuccess":($q23 == "Não Aplica" ? "$colorwarning" : ($q23 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q231=="Conforme"?"$colorsuccess":($q231 == "Não Aplica" ? "$colorwarning" : ($q231 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs23"; ?></td>
                <td align="center"><? echo "$os23"; ?></td>
              </tr>
              <tr>
                <td align="center">Portas e Maçanetas</td>
                <td align="center" <?php echo $q24=="Conforme"?"$colorsuccess":($q24 == "Não Aplica" ? "$colorwarning" : ($q24 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q241=="Conforme"?"$colorsuccess":($q241 == "Não Aplica" ? "$colorwarning" : ($q241 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs24"; ?></td>
                <td align="center"><? echo "$os24"; ?></td>
              </tr>
              <tr>
                <td align="center">Mini Bar</td>
                <td align="center" <?php echo $q25=="Conforme"?"$colorsuccess":($q25 == "Não Aplica" ? "$colorwarning" : ($q25 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q251=="Conforme"?"$colorsuccess":($q251 == "Não Aplica" ? "$colorwarning" : ($q251 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs25"; ?></td>
                <td align="center"><? echo "$os25"; ?></td>
              </tr>
              <tr>
                <td align="center">Telefone</td>
                <td align="center" <?php echo $q26=="Conforme"?"$colorsuccess":($q26 == "Não Aplica" ? "$colorwarning" : ($q26 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center" <?php echo $q261=="Conforme"?"$colorsuccess":($q261 == "Não Aplica" ? "$colorwarning" : ($q261 == "Não Conforme" ? "$colordanger" : "$nocolor")); ?>></td>
                <td align="center"><? echo "$obs26"; ?></td>
                <td align="center"><? echo "$os26"; ?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="15"></td>
        </tr>
        <tr>
          <td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
        </tr>
        <tr>
          <td>
              <font size="-2"><strong>Legenda:</strong></font>
            <table style="color: #666666; font-size: 8px;  font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr >
                <td width="15%" height='15px' align="center" style="background-color:#449d44; color:#FFF; font-weight:bold">Conforme</td>
                <td width="15%" height='15px' align="center" style="background-color: #d9534f; color:#FFF;font-weight:bold">Não Conforme</td>
                <td width="15%" height='15px' align="center" style="background-color: #f0ad4e; color:#FFF;font-weight:bold">Não Aplica</td>
                <td width="55%" align="left"></td>
              </tr>
            </table></td>
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
                <td align="left" style="color: #fefefe; font-size: 10px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><? echo "$ver_for_312"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 10px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>