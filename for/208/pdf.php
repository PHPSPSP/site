<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");

$date = date("d/m/Y H:i");
	$email = $_POST['emailuser'];
	$nome = $_POST['usuario'];	
	$nomecol = $_POST['nomecol'];	
	$re = $_POST['re'];
	$empresa = $_POST['empresa'];
  $data10 = implode("/",array_reverse(explode("-",$_POST['data10'])));
	$atualsup = $_POST['atualsup'];
	$novasup = $_POST ['novasup'];	
	$cliatual = $_POST['cliatual'];		
	$clinovo = $_POST['clinovo'];
	$posto1 = $_POST['posto1'];
	$posto2 = $_POST['posto2'];	
	$movimentacao = $_POST['movimentacao'];	
	$colsubs =  $_POST['colsubs'];
	$recolsubs = $_POST['recolsubs'];
	$outromotivo = $_POST['outromotivo'];
	$novafunc = $_POST['novafunc'];
	$salario = $_POST['salario'];
	$funcsal = $_POST['funcsal'];
	$pedcliente = $_POST['pedcliente'];
	$clisabe = $_POST['clisabe'];
	$subsposto = $_POST['subsposto'];
	$nomesubs = $_POST['nomesubs'];		
	$resubs = $_POST['resubs'];
	$vtransporte = $_POST['vtransporte'];
	$condutor = $_POST['condutor'];
	$altbenef = $_POST['altbenef'];

	$vr = $_POST['vr'];
	$sal = $_POST['sal'];
	$dt = $_POST['dt'];
	$ad = $_POST['ad'];
	$ad2 = $_POST['ad2'];
	$ad3 = $_POST['ad3'];
	$ad4 = $_POST['ad4'];
	$ad5 = $_POST['ad5'];
	
  $ins = $_POST['ins'];
	$pr = $_POST['pr'];
	$gp = $_POST['gp'];
	$gs = $_POST['gs'];
	$vt = $_POST['vt'];
	$cb = $_POST['cb'];
	$ot = $_POST['ot'];
	$he = $_POST['he'];

	$vrt = $_POST['vrt'];
	$salt = $_POST['salt'];
	$dtt = $_POST['dtt'];
	$adt = $_POST['adt'];
	$adt2 = $_POST['adt2'];
	$adt3 = $_POST['adt3'];
	$adt4 = $_POST['adt4'];
	$adt5 = $_POST['adt5'];

	$inst = $_POST['inst'];
	$prt = $_POST['prt'];
	$gpt = $_POST['gpt'];
	$gst = $_POST['gst'];
	$vtt = $_POST['vtt'];
	$cbt = $_POST['cbt'];
	$ott = $_POST['ott'];
	$het = $_POST['het'];

	if ($_POST['vr'] == ""){$vr_1 = "";}else{$vr_1 = "<table width='100%'><tr><td width='40%'>$vr </td><td width='60%'> <strong>$vrt</strong> </td></tr></table><br>";};
	if ($_POST['sal'] == ""){$sal_1 = "";}else{$sal_1 = "<table width='100%'><tr><td width='40%'>$sal </td><td width='60%'> <strong>$salt</strong> </td></tr></table><br>";};
	if ($_POST['dt'] == ""){$dt_1 = "";}else{$dt_1 = "<table width='100%'><tr><td width='40%'>$dt </td><td width='60%'> <strong>$dtt</strong> </td></tr></table><br>";};
	if ($_POST['ad'] == ""){$ad_1 = "";}else{$ad_1 = "<table width='100%'><tr><td width='40%'>$ad </td><td width='60%'> <strong>$adt</strong> </td></tr></table><br>";};
	if ($_POST['ad2'] == ""){$ad2_1 = "";}else{$ad2_1 = "<table width='100%'><tr><td width='40%'>$ad2 </td><td width='60%'> <strong>$adt2</strong> </td></tr></table><br>";};
	if ($_POST['ad3'] == ""){$ad3_1 = "";}else{$ad3_1 = "<table width='100%'><tr><td width='40%'>$ad3 </td><td width='60%'><strong> $adt3</strong> </td></tr></table><br>";};
	if ($_POST['ad4'] == ""){$ad4_1 = "";}else{$ad4_1 = "<table width='100%'><tr><td width='40%'>$ad4 </td><td width='60%'> <strong>$adt4</strong> </td></tr></table><br>";};
	if ($_POST['ad5'] == ""){$ad5_1 = "";}else{$ad5_1 = "<table width='100%'><tr><td width='40%'>$ad5 </td><td width='60%'> <strong>$adt5</strong> </td></tr></table><br>";};
	if ($_POST['ins'] == ""){$ins_1 = "";}else{$ins_1 = "<table width='100%'><tr><td width='40%'>$ins </td><td width='60%'> <strong>$inst %</strong> </td></tr></table><br>";};
	if ($_POST['pr'] == ""){$pr_1 = "";}else{$pr_1 = "<table width='100%'><tr><td width='40%'>$pr </td><td width='60%'><strong> $prt %</strong> </td></tr></table><br>";};
	if ($_POST['gp'] == ""){$gp_1 = "";}else{$gp_1 = "<table width='100%'><tr><td width='40%'>$gp </td><td width='60%'> <strong>$gpt</strong> </td></tr></table><br>";};
	if ($_POST['gs'] == ""){$gs_1 = "";}else{$gs_1 = "<table width='100%'><tr><td width='40%'>$gs </td><td width='60%'> <strong>$gst</strong> </td></tr></table><br>";};
	if ($_POST['vt'] == ""){$vt_1 = "";}else{$vt_1 = "<table width='100%'><tr><td width='40%'>$vt </td><td width='60%'> <strong>$vtt</strong> </td></tr></table><br>";};
	if ($_POST['cb'] == ""){$cb_1 = "";}else{$cb_1 = "<table width='100%'><tr><td width='40%'>$cb </td><td width='60%'> <strong>$cbt</strong> </td></tr></table><br>";};
	if ($_POST['ot'] == ""){$ot_1 = "";}else{$ot_1 = "<table width='100%'><tr><td width='40%'>$ot </td><td width='60%'> <strong>$ott</strong> </td></tr></table><br>";};
	if ($_POST['he'] == ""){$he_1 = "";}else{$he_1 = "<table width='100%'><tr><td width='40%'>$he </td><td width='60%'> <strong>$het</strong> </td></tr></table><br>";};
	$escatual = $_POST['escatual'];
	$novaescala = $_POST['novaescala'];
	$folgfix1= $_POST['folgfix1'];
	$folgfix12= $_POST['folgfix12'];
	$folgfix2= $_POST['folgfix2'];
	$folgfix22= $_POST['folgfix22'];
	if ($folgfix12==""){if ($folgfix1==""){$folgfixx1="";}else{$folgfixx1=" <br>Folga: $folgfix1";};}else{$folgfixx1=" <br>Folga: $folgfix1 e $folgfix12";};
	if ($folgfix22==""){if ($folgfix2==""){$folgfixx2="";}else{$folgfixx2=" <br>Folga: $folgfix2";};}else{$folgfixx2=" <br>Folga: $folgfix2 e $folgfix22";};	
	$observ = $_POST['observ'];
	$examemudf = $_POST['examemudf'];
	$exameesp = $_POST['exameesp'];
	$nomeexameesp = $_POST['nomeexameesp'];
  $tipagem = $_POST['tipagem'];

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");
	
$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escatual = $dados1['R6_DESC'];

$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$novaescala."'");
$dados2 = mysql_fetch_array($consulta2);
$novaescala = $dados2['R6_DESC'];
	
	$motivomovim = "$movimentacao $outromotivo $novafunc $salario $funcsal";
	
if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}
?><!DOCTYPE html>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body style="margin: 20px; padding: 0;">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 0; background-color:#d9534f">
  <tr>
    <td><table  width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="border: 0;">
        <tr>
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 5px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 14px; font-family: Helvetica, Arial, sans-serif; text-align:center"><strong> FOR 208 - Movimenta&ccedil;&atilde;o de Colaboradores</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color: #ffffff;">
  <tr>
    <td><table align="center" border="0" cellpadding="0" cellspacing="0">
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:9px; font-family: Helvetica, Arial, sans-serif;" >
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td style="color: #666666; f0ad4e  font-family: Helvetica, Arial, sans-serif;">
          
          <table width="100%">
              <tr>
                <td width="15%">Colaborador:<br></td>
                <td width="85%"><strong><?php echo "$nomecol"; ?></strong></td>
              </tr>
              <tr>
                <td width="15%">RE:<br></td>
                <td width="85%"><strong><?php echo "$re"; ?></strong></td>
              </tr>
              <tr>
                <td width="15%">Empresa:<br></td>
                <td width="85%"><strong><?php echo "$empresa"; ?></strong></td>
              </tr>
              <tr>
                <td width="15%">Tipo Sanguíneo:<br></td>
                <td width="85%"><strong><?php echo "$tipagem"; ?></strong></td>
              </tr>
              <tr>
                <td colspan="2"><br></td>
              </tr>
              <tr>
                <td width="15%">Data da movimenta&ccedil;&atilde;o:<br></td>
                <td width="85%"><strong><?php echo "$data10"; ?></strong></td>
              </tr>
            </table>
            <br>
            <br>
            <table width="100%">
              <tr>
                <td width="18%">Supervis&atilde;o Atual: <br></td>
                <td width="30%"><strong><?php echo "$atualsup"; ?></strong></td>
                <td width="22%">Nova Supervis&atilde;o: <br></td>
                <td width="30%"><strong><?php echo "$novasup"; ?></strong></td>
              </tr>
              <tr>
                <td width="18%"> Cliente/Cidade: <br></td>
                <td width="30%"><strong><?php echo "$cliatual"; ?></strong></td>
                <td width="22%">Novo Cliente/Cidade: <br></td>
                <td width="30%"><strong><?php echo "$clinovo"; ?></strong></td>
              </tr>
              <tr>
                <td width="18%"> Posto: <br></td>
                <td width="30%"><strong><?php echo "$posto1"; ?></strong></td>
                <td width="22%"> Novo Posto: <br></td>
                <td width="30%"><strong><?php echo "$posto2"; ?></strong></td>
              </tr>
            </table>
            <br>
            <br>
            <strong>Dados da Movimenta&ccedil;&atilde;o</strong><br>
            <table width="100%">
              <tr>
                <td width="35%">Motivo da Movimenta&ccedil;&atilde;o: </td>
                <td width="65%"><strong><?php echo "$motivomovim"; ?></strong></td>
              </tr>
            </table>
            <?php if ($colsubs!="") {echo "<table width='100%'>
              <tr>
                <td  width='35%'>Nome do colaborador substitu&iacute;do: </td>
                <td  width='40%'><strong>$colsubs</strong></td>
                <td  width='10%'>RE: </td>
                <td  width='15%'><strong>$recolsubs</strong></td>
              </tr>
            </table>";} ?>
            <table width="100%">
              <tr>
                <td width="35%">Pedido do Cliente: </td>
                <td width="65%"><strong><?php echo "$pedcliente"; ?></strong></td>
              </tr>
            </table>
            <?php if ($clisabe!="") {echo "<table width='100%'>
              <tr>
                <td width='35%'>O Cliente foi informado sobre a altera&ccedil;&atilde;o? </td>
                <td width='65%'><strong>$clisabe</strong></td>
              </tr>
            </table>";}  ?>
            <table width="100%">
              <tr>
                <td width="35%">Haver&aacute; substituto no Posto Atual: </td>
                <td width="65%"><strong><?php echo "$subsposto"; ?></strong></td>
              </tr>
            </table>
            <?php if ($nomesubs!="") {echo "<table width='100%'>
              <tr>
                <td width='35%' >Nome do substituto: </td>
                <td colspan='40%'><strong>$nomesubs</strong></td>
                <td width='10%'>RE: </td>
                <td width='15%'><strong>$resubs</strong></td>
              </tr>
            </table>";}  ?>
            <br>
            <br>
            <strong>Exames</strong><br>
            <table width='100%'>
              <tr>
                <td width="45%">&Eacute; necess&aacute;rio exame de Mudan&ccedil;a de Fun&ccedil;&atilde;o: </td>
                <td width="55%"><strong><?php echo "$examemudf"; ?></strong></td>
              </tr>
              <tr>
                <td width="45%">A nova fun&ccedil;&atilde;o exige exames espec&iacute;ficos: </td>
                <td width="55%"><strong><?php echo "$exameesp"; ?> - <?php echo "$nomeexameesp"; ?></strong></td>
              </tr>
              <tr>
                <td width="45%">O colaborador movimentado realizar&aacute; Servi&ccedil;os de Condutor:</td>
                <td width="55%"><strong><?php echo "$condutor"; ?></strong></td>
              </tr>
            </table>
            <?php if ($altbenef!=""){ echo " <table width='100%'>
              <tr>
                <td><br><strong> $altbenef </strong> <br> $vr_1 $sal_1 $dt_1 $ad_1 $ad2_1 $ad3_1 $ad4_1 $ad5_1 $ins_1 $pr_1 $gp_1 $gs_1 $vt_1 $cb_1 $he_1 $ot_1</td>
              </tr>
            </table>" ; } ?>
            <br>
            <br>
            <strong>Escala e Hor&aacute;rios</strong>
            <table width='100%'>
              
              <tr>
                <td><strong>Antigo</strong><br>
Escala : Entrada 1 - Saída 1 / Entrada 2 - Saída 2 </td>
                <td><strong>Novo</strong><br>
Escala : Entrada 1 - Saída 1 / Entrada 2 - Saída 2</td>
              </tr>
              <tr>
                <td><strong><?php echo "$escatual $folgfixx1"; ?></strong></td>
                <td><strong><?php echo "$novaescala $folgfixx2"; ?></strong></td>
              </tr>
            </table>
            <?php if ($observ!="") {echo "<br>
            <br>
            <strong>Observa&ccedil;&otilde;es</strong><br>
            <table width='100%'>
              <tr>
                <td><strong>$observ</strong></td>
              </tr>
            </table>";} ?>
            <br>
            <br>
            <table width='100%'>
              <tr>
                <td width="50%"><strong>Lan&ccedil;amento HK:</strong></td>
                <td width="50%"><strong>Lan&ccedil;amento DP:<br>
                  </strong></td>
              </tr>
              <tr>
                <td width="50%">Ass: __________________________</td>
                <td width="50%">Ass: __________________________<br></td>
              </tr>
              <tr>
                <td width="50%">Data: _____/_____/___________</td>
                <td width="50%">Data: _____/_____/___________</td>
              </tr>
            </table></td>
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
        <tr style="color: #666666; f0ad4e  font-family: Helvetica, Arial, sans-serif;">
          <td> Solicitante<br>
            Nome: <strong><?php echo "$nome"; ?></strong><br>
            E-mail: <strong><?php echo "$email"; ?></strong><br>
            Data e Hora: <strong><?php echo "$date"; ?></strong></td>
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
                <td align="left" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><?php echo "$ver_for_208"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>