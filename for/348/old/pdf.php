<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");

$ano_for = date('Y');

    $date = date("d/m/Y H:i");
    $email = $_POST['emailuser'];
    $nome = nl2br($_POST['usuario']);
$gestor = nl2br($_POST['gestor']);
$empresa = nl2br($_POST['empresa']);
$supervisor = nl2br($_POST['supervisor']);
$regiao = nl2br($_POST['regiao']);
$razaosocial = nl2br($_POST['razaosocial']);
$codigocli = nl2br($_POST['codigocli']);
$cnpj = nl2br($_POST['cnpj']);
$atividade = nl2br($_POST['atividade']);
$dataalt = nl2br($_POST['dataalt']);
$numcolab = nl2br($_POST['numcolab']);
$nomecolab = nl2br($_POST['nomecolab']);
$escalaatual = nl2br($_POST['escalaatual']);
$horaatual = nl2br($_POST['horaatual']);
$intervaloatual = nl2br($_POST['intervaloatual']);
$hsabadoatual = nl2br($_POST['hsabadoatual']);
$outrohoraatual = nl2br($_POST['outrohoraatual']);
$novaescala = nl2br($_POST['novaescala']);
$novohora = nl2br($_POST['novohora']);
$novointervalo = nl2br($_POST['novointervalo']);
$novohsabado = nl2br($_POST['novohsabado']);
$novooutrohora = nl2br($_POST['novooutrohora']);
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
$art71diucheck = nl2br($_POST['art71diucheck']);
$art71diuobs = nl2br($_POST['art71diuobs']);
$art71notcheck = nl2br($_POST['art71notcheck']);
$art71notobs = nl2br($_POST['art71notobs']);
$art71sdfdcheck = nl2br($_POST['art71sdfdcheck']);
$art71sdfdobs = nl2br($_POST['art71sdfdobs']);
$art71sdfdcheck = nl2br($_POST['art71sdfdcheck']);
$art71sdfnobs = nl2br($_POST['art71sdfnobs']);
$sum444check = nl2br($_POST['sum444check']);
$sum444obs = nl2br($_POST['sum444obs']);
$materialcheck = nl2br($_POST['materialcheck']);
$materialval = nl2br($_POST['materialval']);
$materialitem = nl2br($_POST['materialitem']);
$radiomat1 = nl2br($_POST['radiomat1']);
$radiomat2 = nl2br($_POST['radiomat2']);
$produtocheck = nl2br($_POST['produtocheck']);
$produtoval = nl2br($_POST['produtoval']);
$produtoitem = nl2br($_POST['produtoitem']);
$radioprod1 = nl2br($_POST['radioprod1']);
$radioprod2 = nl2br($_POST['radioprod2']);
$locequipcheck = nl2br($_POST['locequipcheck']);
$locequipval = nl2br($_POST['locequipval']);
$locequipitem = nl2br($_POST['locequipitem']);
$radiolequip1 = nl2br($_POST['radiolequip1']);
$radiolequip2 = nl2br($_POST['radiolequip2']);
$observacao = nl2br($_POST['observacao']);
$solcliente = nl2br($_POST['solcliente']);
$materialradio = nl2br($_POST['materialradio']);
$produtoradio = nl2br($_POST['produtoradio']);
$locequipradio = nl2br($_POST['locequipradio']);

$firma = "$_POST[empresa]";
switch ($firma) {
case "SPSP Terceirizacao": $codfirma = "SP"; break;
case "Locatempo Trabalho Temporario": $codfirma = "LT"; break;
case "SPSP Seguranca Patrimonial": $codfirma = "AD"; break;
case "SPBrasil Adm. de Condominios": $codfirma = "SB"; break;}

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$datecod = date("H-i/d-m");
$cod = "$codfirma$datecod/$ano_for";

$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escalaatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escalaatual2 = $dados1['R6_DESC'];

$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$novaescala."'");
$dados2 = mysql_fetch_array($consulta2);
$novaescala2 = $dados2['R6_DESC'];

if(empty($usuario)){
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
                <td align="center"><strong>FOR 348 - Alteração Contratual</strong>
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
                <td colspan="4" align="center"><strong><font size="+2">FOR 348 - Alteração Contratual</font></strong><br>
<br>
</td>
              </tr>
              <tr>
                <td colspan="4" ><strong>Dados da SPSP:</strong></td>
              </tr>
              <tr>
                <td width="15%" align="right">Gestor:</td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$gestor"; ?></strong></td>
                <td width="15%" align="right">Empresa: </td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$empresa"; ?></strong></td>
              </tr>
              <tr>
                <td align="right">Supervisor:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$supervisor"; ?></strong></td>
                <td align="right">Filial: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$regiao"; ?></strong></td>
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
                <td width="25%" align="right">Contratante / Razão    Social: </td>
                <td width="75%" bgcolor="#F3F3F3"><strong><? echo "$razaosocial"; ?></strong></td>
              </tr>
            </table>
            <table  width='100%'>
              <tr>
                <td width="15%" align="right">CNPJ:</td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$cnpj"; ?></strong></td>
                <td width="20%" align="right">Codigo do Cliente:</td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$codigocli"; ?></strong></td>
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
                <td width="20%" align="right">Nº de Colaboradores</td>
                <td width="24%" bgcolor="#F3F3F3"><strong><? echo "$numcolab"; ?></strong></td>
              </tr>
              <tr>
                <td align="right">Data da Alteração:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$dataalt"; ?></strong></td>
                <td>&nbsp;</td>
                <td align="right">Nome do Colaborador</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$nomecolab"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="9"><strong>Informações de Escala/Horário:</strong></td>
              </tr>
              <tr>
                <td width="43%" colspan="4"><strong>Anterior</strong></td>
                <td width="14%"></td>
                <td width="43%" colspan="4"><strong>Novo</strong></td>
              </tr>
<tr>
<td width="10%" align="right">Escala:</td>
<td width="33%" colspan="3" align="left" bgcolor="#F3F3F3"><strong><? echo "$escalaatual"; ?></strong> - <strong><? echo "$escalaatual2"; ?></strong></td>
<td width="14%"></td>
<td width="10%" align="right">Escala:</td>
<td width="33%" colspan="3" align="left" bgcolor="#F3F3F3"><strong><? echo "$novaescala"; ?></strong> - <strong><? echo "$novaescala2"; ?></strong></td>
</tr>
              <tr>
                <td width="20%" colspan="2">Horário</td>
                <td width="3%"></td>
                <td width="20%">Intervalo</td>
                <td width="14%"></td>
                <td width="20%" colspan="2">Horário</td>
                <td width="3%"></td>
                <td width="20%">Intervalo</td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#F3F3F3"><strong><? echo "$horaatual"; ?></strong></td><td></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$intervaloatual"; ?></strong></td><td></td>
                <td colspan="2" bgcolor="#F3F3F3"><strong><? echo "$novohora"; ?></strong></td><td></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$novointervalo"; ?></strong></td>
              </tr>
              <tr>
                <td colspan="2">Horário Sábado</td><td></td>
                <td>Horário Outros Dias</td><td></td>
                <td colspan="2">Horário Sábado</td><td></td>
                <td>Horário Outros Dias</td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#F3F3F3"><strong><? echo "$hsabadoatual"; ?></strong></td><td></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$outrohoraatual"; ?></strong></td><td></td>
                <td colspan="2" bgcolor="#F3F3F3"><strong><? echo "$novohsabado"; ?></strong></td><td></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$novooutrohora"; ?></strong></td>
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
                <td colspan="9">Legenda:</td>
              </tr>
              <tr>
                <td colspan="9"><table width="100%" border="0" cellspacing="0" cellpadding="000">
                  <tr>
                    <td width="5%" align="center" bgcolor="#CCCCCC"><strong>1</strong></td>
                    <td width="15%"> Incluir</td>
                    <td width="5%" align="center" bgcolor="#CCCCCC"><strong>2</strong></td>
                    <td width="15%"> Retirar</td>
                    <td width="5%" align="center" bgcolor="#cccccc"><strong>3</strong></td>
                    <td width="55%"> Alterar</td>
                  </tr>
                </table></td>
              </tr>
<tr>
<td width="5%" align="center" bgcolor="#F3F3F3"><strong><? echo "$insalcheck"; ?></strong></td>
<td width="20%">Insalubridade </td>
<td width="5%" align="right">Obs.:</td>
<td width="50%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$insalobs"; ?></strong></td>
<td width="5%">&nbsp;</td>
<td width="5%" align="right" bgcolor="#F3F3F3" ><strong><? echo "$insalperc"; ?></strong></td>
<td width="10%" align="left" >%</td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$periccheck"; ?></strong></td>
  <td width="20%">Periculosidade </td>
  <td width="5%" align="right">Obs.:</td>
  <td width="50%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$pericobs"; ?></strong></td>
  <td width="5%">&nbsp;</td>
  <td width="5%" align="right" bgcolor="#F3F3F3" ><strong><? echo "$pericoperc"; ?></strong></td>
  <td width="10%" align="left" >%</td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$assidcheck"; ?></strong></td>
  <td width="20%">Assiduidade </td>
  <td width="5%" align="right">Obs.:</td>
  <td width="45%" bgcolor="#F3F3F3"><strong><? echo "$assidobs"; ?></strong></td>
  <td width="5%">&nbsp;</td>
  <td width="5%" align="right" bgcolor="#F3F3F3"><strong><? echo "$assidperc"; ?></strong></td>
  <td width="5%" >%</td>
  <td width="5%" align="right" >R$</td>
  <td width="10%" bgcolor="#F3F3F3" ><strong><? echo "$assidval"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$gratifcheck"; ?></strong></td>
  <td width="20%">Gratificação </td>
  <td width="5%" align="right">Obs.:</td>
  <td width="45%" bgcolor="#F3F3F3"><strong><? echo "$gratifobs"; ?></strong></td>
  <td width="5%">&nbsp;</td>
  <td width="5%" align="right" bgcolor="#F3F3F3"><strong><? echo "$gratifperc"; ?></strong></td>
  <td width="5%" >%</td>
  <td width="5%" align="right" >R$</td>
  <td width="10%" bgcolor="#F3F3F3" ><strong><? echo "$gratifval"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$valtranspcheck"; ?></strong></td>
  <td width="20%">Vale Transporte</td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$valtranspobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$convmedcheck"; ?></strong></td>
  <td width="20%">Convênio Médico </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$convmedobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$convodontocheck"; ?></strong></td>
  <td width="20%">Convênio Odontológico</td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$convodontoobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$valimentacheck"; ?></strong></td>
  <td width="20%">Vale Alimentação </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$valimentaobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$vrefeicaocheck"; ?></strong></td>
  <td width="20%">Vale Refeição </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$vrefeicaoobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$art71diucheck"; ?></strong></td>
  <td width="20%">Artigo 71 Diurno </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$art71diuobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$art71notcheck"; ?></strong></td>
  <td width="20%">Artigo 71 Noturno </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$art71notobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$art71sdfdcheck"; ?></strong></td>
  <td width="20%">Artigo 71 SDF diurno </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$art71sdfdobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$art71sdfdcheck"; ?></strong></td>
  <td width="20%">Artigo 71 SDF Noturno </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$art71sdfnobs"; ?></strong></td>
</tr>
<tr>
  <td align="center" bgcolor="#F3F3F3"><strong><? echo "$sum444check"; ?></strong></td>
  <td width="20%">Súmula 444 </td>
  <td width="5%" align="right">Obs.:</td>
  <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$sum444obs"; ?></strong></td>
</tr>



</table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="8"><strong>Outras Informações:</strong></td>
              </tr>
              <tr>
                <td colspan="8">Legenda:</td>
              </tr>
              <tr>
                <td colspan="8"><table width="100%" border="0" cellspacing="0" cellpadding="000">
                  <tr>
                    <td width="5%" align="center" bgcolor="#CCCCCC"><strong>1</strong></td>
                    <td width="15%"> Incluir</td>
                    <td width="5%" align="center" bgcolor="#CCCCCC"><strong>2</strong></td>
                    <td width="15%"> Retirar</td>
                    <td width="5%" align="center" bgcolor="#cccccc"><strong>3</strong></td>
                    <td width="55%"> Alterar</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td width="5%" align="center" bgcolor="#F3F3F3"><strong><? echo "$materialcheck"; ?></strong></td>
                <td  width="15%">Materiais </td>
                <td width="5%" align="right">R$</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$materialval"; ?></strong></td>
                <td width="15%" align="right">Cobrar separado:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$materialradio"; ?></strong></td>
                <td width="5%" align="right">Itens</td>
                <td width="40%" bgcolor="#F3F3F3"><strong><? echo "$materialitem"; ?></strong></td>
              </tr>
              <tr>
                <td width="5%" align="center" bgcolor="#F3F3F3"><strong><? echo "$produtocheck"; ?></strong></td>
                <td  width="15%">Produtos</td>
                <td width="5%" align="right">R$</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$produtoval"; ?></strong></td>
                <td width="15%" align="right">Cobrar separado:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$produtoradio"; ?></strong></td>
                <td width="5%" align="right">Itens</td>
                <td width="40%" bgcolor="#F3F3F3"><strong><? echo "$produtoitem"; ?></strong></td>
              </tr>
              <tr>
                <td width="5%" align="center" bgcolor="#F3F3F3"><strong><? echo "$locequipcheck"; ?></strong></td>
                <td  width="15%"> Locação Equipamentos</td>
                <td width="5%" align="right">R$</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$locequipval"; ?></strong></td>
                <td width="15%" align="right">Cobrar separado:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$locequipradio"; ?></strong></td>
                <td width="5%" align="right">Itens</td>
                <td width="40%" bgcolor="#F3F3F3"><strong><? echo "$locequipitem"; ?></strong></td>
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
                <td align="left" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><?php echo "$ver_for_348"; ?></td>
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