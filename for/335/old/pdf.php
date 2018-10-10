<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
include("../privado.php");

$nome = $_SESSION['nome'];
$email = $_SESSION['mail'];

$ano_for = date('Y');

$date = date("d/m/Y H:i");
$gestor = nl2br($_POST['gestor']);
$empresa = nl2br($_POST['empresa']);
$supervisor = nl2br($_POST['supervisor']);
$regiao = nl2br($_POST['regiao']);
$tipoextra = nl2br($_POST['tipoextra']);
$razaosocial = nl2br($_POST['razaosocial']);
$codigocli = nl2br($_POST['codigocli']);
$cnpj = nl2br($_POST['cnpj']);
$tipofatur = nl2br($_POST['tipofatur']);
$endereco = nl2br($_POST['endereco']);
$outrofatur = nl2br($_POST['outrofatur']);

$atividade = nl2br($_POST['atividade']);
$dataalt = nl2br($_POST['dataalt']);
$numcolab = nl2br($_POST['numcolab']);
$datafim = nl2br($_POST['datafim']);

$escalaatual = nl2br($_POST['escalaatual']);
$horaatual = nl2br($_POST['horaatual']);
$intervaloatual = nl2br($_POST['intervaloatual']);
$postos = nl2br($_POST['postos']);

$cobrancaradio = nl2br($_POST['cobrancaradio']);
$cobrancaval = nl2br($_POST['cobrancaval']);
$radiocob1 = nl2br($_POST['radiocob1']);
$radiocob2 = nl2br($_POST['radiocob2']);
$radiocob3 = nl2br($_POST['radiocob3']);
$sumularadio = nl2br($_POST['sumularadio']);
$radiosumula1 = nl2br($_POST['radiosumula1']);
$radiosumula2 = nl2br($_POST['radiosumula2']);
$vencitoradio = nl2br($_POST['vencitoradio']);
$radiovencito1 = nl2br($_POST['radiovencito1']);
$radiovencito2 = nl2br($_POST['radiovencito2']);
$outrovencto = nl2br($_POST['outrovencto']);
$materiais = nl2br($_POST['materiais']);
$locequip = nl2br($_POST['locequip']);
$cobprodutradio = nl2br($_POST['cobprodutradio']);
$radiocobpro1 = nl2br($_POST['radiocobpro1']);
$radiocobpro2 = nl2br($_POST['radiocobpro2']);

$insalcheck = nl2br($_POST['insalcheck']);
$insalobs = nl2br($_POST['insalobs']);
$insalperc = nl2br($_POST['insalperc']);
$periccheck = nl2br($_POST['periccheck']);
$pericobs = nl2br($_POST['pericobs']);
$pericoperc = nl2br($_POST['pericoperc']);
$assidcheck = nl2br($_POST['assidcheck']);
$assidobs = nl2br($_POST['assidobs']);
$assidperc = nl2br($_POST['assidperc']);
$assidval = nl2br($_POST['assidval']);
$gratifcheck = nl2br($_POST['gratifcheck']);
$gratifobs = nl2br($_POST['gratifobs']);
$gratifperc = nl2br($_POST['gratifperc']);
$gratifval = nl2br($_POST['gratifval']);
$valtranspcheck = nl2br($_POST['valtranspcheck']);
$valtranspobs = nl2br($_POST['valtranspobs']);
$convmedcheck = nl2br($_POST['convmedcheck']);
$convmedobs = nl2br($_POST['convmedobs']);
$convodontocheck = nl2br($_POST['convodontocheck']);
$convodontoobs = nl2br($_POST['convodontoobs']);
$valimentacheck = nl2br($_POST['valimentacheck']);
$valimentaobs = nl2br($_POST['valimentaobs']);
$vrefeicaocheck = nl2br($_POST['vrefeicaocheck']);
$vrefeicaoobs = nl2br($_POST['vrefeicaoobs']);

$observacao = nl2br($_POST['observacao']);
$solcliente = nl2br($_POST['solcliente']);

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$query = mysql_query('SHOW TABLE STATUS LIKE "for335"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'] - 1;  // para o pdf nao vir com o codigo do FOR errado pois quando é chamado o geraphp.php ja é feito uma inserção com o ultimo ID disponivel

$cod = "$codfirma$idd/$ano_for";

$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escalaatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escalaatual2 = $dados1['R6_DESC'];

if(empty($nome)){
header("Location: http://www.spsp.com.br/for/proibido.php");
}else{

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
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 5px 0; color: #FFFFFF; font-size: 14px; font-family: Helvetica, Arial, sans-serif; text-align:center">
              <tr>
                <td align="center"><strong>FOR 335 - Implantação de Serviços Extras (temporário)</strong>
                  </td>
              </tr>
              <tr>
                <td align="center">Nº de controle <? echo "$cod"; ?></td>
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
          <td style="color: #666666;f0ad4e  font-family: Helvetica, Arial, sans-serif;"><table width='100%'>
              <tr>
                <td colspan="6" align="center"><strong><font size="+2">FOR 335 - Implantação de Serviços Extras (temporário)</font></strong><br>
                  Período de 05 dias até qualquer data determinada
              <br>
              </td>
              </tr>
              <tr>
                <td colspan="6" ><strong>Dados da SPSP:</strong></td>
              </tr>
              <tr>
                <td width="10%" align="right">Gestor:</td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$gestor"; ?></strong></td>
                <td width="10%" align="right">Empresa: </td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$empresa"; ?></strong></td>
                <td width="34%" colspan="2"></td>
              </tr>
              <tr>
                <td width="10%" align="right">Supervisor:</td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$supervisor"; ?></strong></td>
                <td width="10%" align="right">Filial: </td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$regiao"; ?></strong></td>
                <td width="10%" align="right">Serviço Extra: </td>
                <td width="24%" bgcolor="#F3F3F3"><strong><? echo "$tipoextra"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td colspan="2" ><strong>Dados do Cliente:</strong></td>
              </tr>
              <tr>
                <td width="25%" align="right">Contratante / Razão Social: </td>
                <td width="75%" bgcolor="#F3F3F3"><strong><? echo "$razaosocial"; ?></strong></td>
              </tr>
              <tr>
                <td width="25%" align="right">Endereço: </td>
                <td width="75%" bgcolor="#F3F3F3"><strong><? echo "$endereco"; ?></strong></td>
              </tr>
            </table>
            <table  width='100%'>
              <tr>
                <td width="5%" align="right">CNPJ:</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$cnpj"; ?></strong></td>
                <td width="10%" align="right">Codigo do Cliente:</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$codigocli"; ?></strong></td>
                <td width="10%" align="right">Faturamento:</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$tipofatur $outrofatur"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="5"><strong>Informações da Atividade / Posto:</strong></td>
              </tr>
              <tr>
                <td width="20%" align="right">Atividade:</td>
                <td width="24%" bgcolor="#F3F3F3"><strong><? echo "$atividade"; ?></strong></td>
                <td width="12%">&nbsp;</td>
                <td width="20%" align="right">Data de Início:</td>
                <td width="24%" bgcolor="#F3F3F3"><strong><? echo "$dataalt"; ?></strong></td>
              </tr>
              <tr>
                <td align="right">Nº de Colaboradores:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$numcolab"; ?></strong></td>
                <td>&nbsp;</td>
                <td align="right">Data de Término:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$datafim"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="5"><strong>Informações de Escala/Horário:</strong></td>
              </tr>
              <tr>
                <td width="10%" align="right">Escala:</td>
                <td width="43%" align="left" bgcolor="#F3F3F3"><strong><? echo "$escalaatual"; ?></strong> - <strong><? echo "$escalaatual2"; ?></strong></td>
                <td width="14%"></td>
                <td width="10%" align="right">Horário:</td>
                <td width="23%" align="left" bgcolor="#F3F3F3"><strong><? echo "$horaatual"; ?></strong></td>
              </tr>
              <tr>
                <td width="10%" align="right">Postos:</td>
                <td width="43%" align="left" bgcolor="#F3F3F3"><strong><? echo "$postos"; ?></strong></td>
                <td width="14%"></td>
                <td width="10%" align="right">Intervalo:</td>
                <td width="23%" align="left" bgcolor="#F3F3F3"><strong><? echo "$intervaloatual"; ?></strong></td>
              </tr>
            </table>
                        <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="5"><strong>Informações de Cobrança / Custo:</strong></td>
              </tr>
              <tr>
                <td width="15%">Valor a Cobrar: </td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$cobrancaradio $cobrancaval"; ?></strong></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td width="15%">Sumula 444: </td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$sumularadio"; ?></strong></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td width="15%">Vencimento: </td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$vencitoradio $outrovencto"; ?></strong></td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td width="15%">Materiais: </td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$materiais"; ?></strong></td>
                <td width="10%"></td>
                <td width="15%">Produtos: </td>
                <td></td>
              </tr>
              <tr>
                <td width="15%">Locação Equipamentos: </td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$locequip"; ?></strong></td>
                <td width="10%"></td>
                <td width="15%">Cobrar Separado: </td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$cobprodutradio"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="9"><strong>Benefícios Contrato:</strong></td>
              </tr>
              <tr>
                <td width="20%">Insalubridade: </td>
                <td width="5%" align="center" bgcolor="#F3F3F3"><strong><? echo "$insalcheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td width="50%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$insalobs"; ?></strong></td>
                <td width="5%">&nbsp;</td>
                <td width="5%" align="right" bgcolor="#F3F3F3" ><strong><? echo "$insalperc"; ?></strong></td>
                <td width="10%" align="left" >%</td>
              </tr>
              <tr>
                <td width="20%">Periculosidade: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$periccheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td width="50%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$pericobs"; ?></strong></td>
                <td width="5%">&nbsp;</td>
                <td width="5%" align="right" bgcolor="#F3F3F3" ><strong><? echo "$pericoperc"; ?></strong></td>
                <td width="10%" align="left" >%</td>
              </tr>
              <tr>
                <td width="20%">Assiduidade: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$assidcheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td width="45%" bgcolor="#F3F3F3"><strong><? echo "$assidobs"; ?></strong></td>
                <td width="5%">&nbsp;</td>
                <td width="5%" align="right" bgcolor="#F3F3F3"><strong><? echo "$assidperc"; ?></strong></td>
                <td width="5%" >%</td>
                <td width="5%" align="right" >R$</td>
                <td width="10%" bgcolor="#F3F3F3" ><strong><? echo "$assidval"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Gratificação: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$gratifcheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td width="45%" bgcolor="#F3F3F3"><strong><? echo "$gratifobs"; ?></strong></td>
                <td width="5%">&nbsp;</td>
                <td width="5%" align="right" bgcolor="#F3F3F3"><strong><? echo "$gratifperc"; ?></strong></td>
                <td width="5%" >%</td>
                <td width="5%" align="right" >R$</td>
                <td width="10%" bgcolor="#F3F3F3" ><strong><? echo "$gratifval"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Vale Transporte: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$valtranspcheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$valtranspobs"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Convênio Médico: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$convmedcheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$convmedobs"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Convênio Odontológico: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$convodontocheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$convodontoobs"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Vale Alimentação: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$valimentacheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$valimentaobs"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Vale Refeição: </td>
                <td align="center" bgcolor="#F3F3F3"><strong><? echo "$vrefeicaocheck"; ?></strong></td>
                <td width="5%" align="right">Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$vrefeicaoobs"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td width="20%">Observações:</td>
                <td width="80%" bgcolor="#F3F3F3"><strong><? echo "$observacao"; ?></strong></td>
              </tr>
              <tr>
                <td>Solicitante Cliente:</td>
                <td width="80%" bgcolor="#F3F3F3"><strong><? echo "$solcliente"; ?></strong></td>
              </tr>
            </table>
            <br>
            <br>
            </td>
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
          <td>Responsável pela comunicação<br>
            Nome: <b><? echo "$nome"; ?></b><br>
            E-mail: <b><? echo "$email"; ?></b><br>
            Data e Hora: <b><? echo "$date"; ?></b></td>
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
                <td align="left" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><?php echo "$ver_for_335"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
<?php }; ?>