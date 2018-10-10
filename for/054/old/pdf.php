<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");

$ano_for = date('Y');

    $date = date("d/m/Y H:i");
    $email = $_POST['emailuser'];
    $nome = nl2br($_POST['usuario']);
    $campo2 = nl2br($_POST['campo2']);
    $empresa = nl2br($_POST['empresa']);
    $regiao = nl2br($_POST['regiao']);
    $campo4 = nl2br($_POST['campo4']);
    $cei = nl2br($_POST['cei']);
    $ceifiscal = nl2br($_POST['ceifiscal']);
    $sefipcei = nl2br($_POST['sefipcei']);
    $ceifixo = nl2br($_POST['ceifixo']);
    $obscei = nl2br($_POST['obscei']);
    $campo5 = nl2br($_POST['campo5']);
    $campo6 = nl2br($_POST['campo6']);
    $campo7 = nl2br($_POST['campo7']);
    $campo8 = nl2br($_POST['campo8']);
    $campo9 = nl2br($_POST['campo9']);
    $campo10 = nl2br($_POST['campo10']);
    $campo11 = nl2br($_POST['campo11']);
    $campo12 = nl2br($_POST['campo12']);
    $campo13 = nl2br($_POST['campo13']);
    $campo14 = nl2br($_POST['campo14']);
    $campo15 = nl2br($_POST['campo15']);
    $campo16 = nl2br($_POST['campo16']);
    $campo17 = nl2br($_POST['campo17']);
    $campo18 = nl2br($_POST['campo18']);

if ($_POST['campo19'] == "OUTRA: "){$campo192 = $_POST['outraatv'];}else{$campo192 = $_POST['campo19'];};

    $campo20 = nl2br($_POST['campo20']);
    $campo22 = nl2br($_POST['campo22']);
    $hora1 = nl2br($_POST['hora1']);
    $hora2 = nl2br($_POST['hora2']);
    $campo21 = nl2br($_POST['campo21']);
    $hora3 = nl2br($_POST['hora3']);
    $hora4 = nl2br($_POST['hora4']);
    $escatual = nl2br($_POST['escatual']);
    $especif1 = nl2br($_POST['especif1']);
    $folgfix1 = nl2br($_POST['folgfix1']);
    $dias241 = nl2br($_POST['dias241']);
    $hora5 = nl2br($_POST['hora5']);
    $hora6 = nl2br($_POST['hora6']);
    $campo212 = nl2br($_POST['campo212']);
    $hora7 = nl2br($_POST['hora7']);
    $hora8 = nl2br($_POST['hora8']);
    $escatual2 = nl2br($_POST['escatual2']);
    $especif2 = nl2br($_POST['especif2']);
    $folgfix2 = nl2br($_POST['folgfix2']);
    $dias242 = nl2br($_POST['dias242']);
    $hora9 = nl2br($_POST['hora9']);
    $hora10 = nl2br($_POST['hora10']);
    $campo213 = nl2br($_POST['campo213']);
    $hora11 = nl2br($_POST['hora11']);
    $hora12 = nl2br($_POST['hora12']);
    $escatual3 = nl2br($_POST['escatual3']);
    $especif3 = nl2br($_POST['especif3']);
    $folgfix3 = nl2br($_POST['folgfix3']);
    $dias243 = nl2br($_POST['dias243']);
    $obsesc = nl2br($_POST['obsesc']);
    $trabsab = nl2br($_POST['trabsab']);
    $trabsab2 = nl2br($_POST['trabsab2']);
    $trabsab3 = nl2br($_POST['trabsab3']);
    $txtsab = nl2br($_POST['txtsab']);
    $txtsab2 = nl2br($_POST['txtsab2']);
    $txtsab3 = nl2br($_POST['txtsab3']);
    $horas1 = nl2br($_POST['horas1']);
    $horas2 = nl2br($_POST['horas2']);
    $horas3 = nl2br($_POST['horas3']);
    $horas4 = nl2br($_POST['horas4']);
    $horas5 = nl2br($_POST['horas5']);
    $horas6 = nl2br($_POST['horas6']);
    $campo24 = nl2br($_POST['campo24']);
    $campo25 = nl2br($_POST['campo25']);
    $campo26 = nl2br($_POST['campo26']);
    $campo27 = nl2br($_POST['campo27']);
    $campo28 = nl2br($_POST['campo28']);
    $campo29 = nl2br($_POST['campo29']);
    $campo30 = nl2br($_POST['campo30']);
    $campo31 = nl2br($_POST['campo31']);
    $campo32 = nl2br($_POST['campo32']);
    $campo33 = nl2br($_POST['campo33']);
    $campo34 = nl2br($_POST['campo34']);
    $campo35 = nl2br($_POST['campo35']);
    $campo36 = nl2br($_POST['campo36']);
    $campo37 = nl2br($_POST['campo37']);
    $campo38 = nl2br($_POST['campo38']);
    $campo39 = nl2br($_POST['campo39']);
    $campo40 = nl2br($_POST['campo40']);
    $campo41 = nl2br($_POST['campo41']);
    $campo42 = nl2br($_POST['campo42']);
    $campo43 = nl2br($_POST['campo43']);
    $campo44 = nl2br($_POST['campo44']);
    $campo45 = nl2br($_POST['campo45']);
    $campo46 = nl2br($_POST['campo46']);
    $campo47 = nl2br($_POST['campo47']);
    $campo48 = nl2br($_POST['campo48']);
    $mensagem = nl2br($_POST['mensagem']);
    $cabecalho = nl2br($_POST['cabecalho']);
    $fatura = nl2br($_POST['fatura']);
    $locaequip = nl2br($_POST['locaequip']);
    $matconsumo = nl2br($_POST['matconsumo']);
    $uniforme = nl2br($_POST['uniforme']);
    $locarma = nl2br($_POST['locarma']);
    $adicrico = nl2br($_POST['adicrico']);
    $insalubri = nl2br($_POST['insalubri']);
    $periculosi = nl2br($_POST['periculosi']);
    $premassid = nl2br($_POST['premassid']);
    $gratadic = nl2br($_POST['gratadic']);
    $tipogratific = nl2br($_POST['tipogratific']);
    $vtransporte = nl2br($_POST['vtransporte']);
    $pajudacusto = nl2br($_POST['pajudacusto']);
    $convmedico = nl2br($_POST['convmedico']);
    $convodonto = nl2br($_POST['convodonto']);
    $visaaliment = nl2br($_POST['visaaliment']);
    $vpempresaprest = nl2br($_POST['vpempresaprest']);
    $visarestaur = nl2br($_POST['visarestaur']);
    $refpostotrab = nl2br($_POST['refpostotrab']);
    $regcon = nl2br($_POST['regcon']);
    $respleg = nl2br($_POST['respleg']);
    $salario1 = nl2br($_POST['salario1']);
	$salario2 = nl2br($_POST['salario2']);
	$salario3 = nl2br($_POST['salario3']);
    $soma = $_POST['campo21'] + $_POST['campo212'] + $_POST['campo213'];
    $totalfun = "- Numero total de empregados: $soma";
    $art71 = nl2br($_POST['art71']);
    $art71d = nl2br($_POST['art71d']);
    $art71n = nl2br($_POST['art71n']);
    $art71p2 = nl2br($_POST['art71p2']);
    $art71dp2 = nl2br($_POST['art71dp2']);
    $art71np2 = nl2br($_POST['art71np2']);
    $art71p3 = nl2br($_POST['art71p3']);
    $art71dp3 = nl2br($_POST['art71dp3']);
    $art71np3 = nl2br($_POST['art71np3']);
    $sumula = nl2br($_POST['sumula']);
    $cobrasumula = nl2br($_POST['cobrasumula']);
    $usaepi = nl2br($_POST['usaepi']);
    $campol31 = nl2br($_POST['campol31']);
    $locaequipv = nl2br($_POST['locaequipv']);
    $locaequipc = nl2br($_POST['obsepi']);
    $campom31 = nl2br($_POST['campom31']);
    $matconsv = nl2br($_POST['matconsv']);
    $gestor = nl2br($_POST['gestor']);
	$mensalvalor = nl2br($_POST['mensalvalor']);
	$taxaadesao = nl2br($_POST['taxaadesao']);
	
$num = "$_POST[cabecalho]";
switch ($num) {
case "Implantacao Inicial": $numfor = ""; break;
case "Ampliacao": $numfor = "-1"; break;
case "Reducao": $numfor = "-2"; break;}

$firma = "$_POST[empresa]";
switch ($firma) {
case "SPSP Terceirizacao": $codfirma = "SP"; break;
case "Locatempo Trabalho Temporario": $codfirma = "LT"; break;
case "SPSP Seguranca Patrimonial": $codfirma = "AD"; break;
case "SPBrasil Adm. de Condominios": $codfirma = "SB"; break;}

$salario = nl2br($_POST['salario']);
switch ($salario) {
case "": $txtsal1 = ""; break;
case "Piso da Categoria": $txtsal1 = "Piso da Categoria"; break;
case "Valor Diferenciado": $txtsal1 = "$salario1"; break;}

$salario22 = nl2br($_POST['salario22']);
switch ($salario22) {
case "": $txtsal2 = ""; break;
case "Piso da Categoria": $txtsal2 = "Piso da Categoria"; break;
case "Valor Diferenciado": $txtsal2 = "$salario2"; break;}

$salario33 = nl2br($_POST['salario33']);
switch ($salario33) {
case "": $txtsal3 = ""; break;
case "Piso da Categoria": $txtsal3 = "Piso da Categoria"; break;
case "Valor Diferenciado": $txtsal3 = "$salario3"; break;}

/*$salval = "$_POST[salario]";
switch ($salval) {
case "NAO": $txtsal = "Nao informado"; break;
case "UNI": $txtsal = "Valor unico de: R$ $salario1"; break;
case "DIF": $txtsal = "Valores diferentes: 1º R$ $salario2  e  2º R$ $salario3"; break;}*/

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$query = mysql_query('SHOW TABLE STATUS LIKE "for054fim"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'] - 1;  // para o pdf nao vir com o codigo do FOR errado pois quando é chamado o geraphp.php ja é feito uma inserção com o ultimo ID disponivel

$cod = "$codfirma$idd/$ano_for";

$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escatual = $dados1['R6_DESC'];

$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escatual2."'");
$dados2 = mysql_fetch_array($consulta2);
$escatual2 = $dados2['R6_DESC'];

$consulta3 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escatual3."'");
$dados3 = mysql_fetch_array($consulta3);
$escatual3 = $dados3['R6_DESC'];

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
          <td><table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"  style=" border: 0; margin: 5px 0;">
              <tr>
                <td align="center" style="color: #FFFFFF; font-size: 14px; font-family: Helvetica, Arial, sans-serif; text-align:center"><strong> FOR 054<? echo "$numfor"; ?> - Relat&oacute;rio de <? echo "$cabecalho"; ?> de Servi&ccedil;os</strong><br />
                  N&#186; de controle <? echo "$cod"; ?></td>
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
                <td colspan="4" ><strong>Dados da Implantação:</strong></td>
              </tr>
              <tr>
                <td width="20%" >Tipo de Implantação:</td>
                <td width='30%' bgcolor="#F3F3F3"><strong><? echo "$cabecalho"; ?></strong></td>
                <td width='20%'>Código Cliente: </td>
                <td width='30%' bgcolor="#F3F3F3"><strong><? echo "$campo2"; ?></strong></td>
              </tr>
              <tr>
                <td>Gestor:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$gestor"; ?></strong></td>
                <td>Empresa: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$empresa"; ?></strong></td>
              </tr>
              <tr>
                <td>Supervisor:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo48"; ?></strong></td>
                <td>Filial: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$regiao"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td colspan="2" ><strong>Dados do Cliente:</strong><br />
                  * Preencher conforme CNPJ da empresa, que deverá estar anexo a implantação.</td>
              </tr>
              <tr>
                <td width="25%">Contratante / Razão    Social *: </td>
                <td width="75%" bgcolor="#F3F3F3"><strong><? echo "$campo4"; ?></strong></td>
              </tr>
            </table>
            <table  width='100%'>
              <tr>
                <td width="15%">Rua e Bairro *:</td>
                <td colspan="3" bgcolor="#F3F3F3"><strong><? echo "$campo5"; ?></strong></td>
              </tr>
              <tr>
                <td>Cidade *:</td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$campo6"; ?></strong></td>
                <td width="15%">CEP *: </td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$campo7"; ?></strong></td>
              </tr>
              <tr>
                <td>Telefone / Fax:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo11"; ?></strong></td>
                <td>Página Web: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo12"; ?></strong></td>
              </tr>
            </table>
            <table  width='100%'>
              <tr>
                <td width="10%">CNPJ *:</td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$campo8"; ?></strong></td>
                <td width="10%">I.Est.:</td>
                <td width="23%" bgcolor="#F3F3F3"><strong><? echo "$campo9"; ?></strong></td>
                <td width="10%">I.Mun.: </td>
                <td width="24%" bgcolor="#F3F3F3"><strong><? echo "$campo10"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td colspan="7" ><strong>CEI:</strong><br />
                  Se há CEI, informe se deve incluir nº do CEI nos itens abaixo.</td>
              </tr>
              <tr>
                <td width="20%">CEI: </td>
                <td width="80%" colspan="6" bgcolor="#F3F3F3"><strong><? echo "$cei"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Incluir nº do CEI:</td>
                <td width="7%">Nota Fiscal:</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$ceifiscal"; ?></strong></td>
                <td width="7%">SEFIP: </td>
                <td width="16%" bgcolor="#F3F3F3"><strong><? echo "$sefipcei"; ?></strong></td>
                <td width="30%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">O nº do CEI sera único e fixo mensal:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$ceifixo"; ?></strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Obs.:</td>
                <td colspan="6" bgcolor="#F3F3F3"><strong><? echo "$obscei"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td colspan="4" ><strong>Dados do Posto/Gestor de Contrato:</strong><br />
                  ** Obrigatório anexar cópia do contrato social ou estatuto e última alteração contratual (se houver), RG e CPF do responsável e procuração caso a pessoa que for assinar não constar no contrato social.</td>
              </tr>
              <tr>
                <td width="20%">Local Implantação:</td>
                <td width="80%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$campo14"; ?></strong></td>
              </tr>
              <tr>
                <td colspan="2" width="50%">E-mail para cobrança e envio de documentos: </td>
                <td width="50%" colspan="2" bgcolor="#F3F3F3"><strong><? echo "$campo13"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Contato Comercial/Fatur.:</td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$campo15"; ?></strong></td>
                <td width="20%">E-mail: </td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$campo16"; ?></strong></td>
              </tr>
              <tr>
                <td>Responsável Legal **:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo17"; ?></strong></td>
                <td>CPF: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo18"; ?></strong></td>
              </tr>
              <tr>
                <td width="20%">Gestor do Contrato:</td>
                <td width="80%" colspan="3" bgcolor="#F3F3F3"><strong><? echo "$respleg"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="3"><strong>Informações da Atividade que será Implantada:</strong><br />
                  *** É necessário preencher um formulário separado para cada atividade / função exercida.</td>
              </tr>
              <tr>
                <td width="40%">Atividade***:</td>
                <td width="20%">&nbsp;</td>
                <td width="40%">Data de Início:</td>
              </tr>
              <tr>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo192"; ?></strong></td>
                <td>&nbsp;</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo24"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="3"><strong>Informações de Escala/Horário:</strong></td>
              </tr>
              <tr>
                <td width="40%">Postos:</td>
                <td width="20%">&nbsp;</td>
                <td width="40%">H/mês:</td>
              </tr>
              <tr>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo20"; ?></strong></td>
                <td>&nbsp;</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo22"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td colspan="5">Escala das Equipes:</td>
              </tr>
              <tr>
                <td width="8%">Nº Col.:</td>
                <td width="15%">Horario: </td>
                <td width="15%">Intervalo: </td>
                <td width="50%">Escala:</td>
                <td width="12%">Salário:</td>
              </tr>
              <tr>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo21"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora1"; ?> as <? echo "$hora2"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora3"; ?> as <? echo "$hora4"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$escatual"; ?> <? echo "$especif1"; ?> <? echo "$folgfix1"; ?> <? echo "$dias241"; ?> <? echo "$trabsab"; ?><? echo "$txtsab"; ?><? echo "$horas1"; ?> <? echo "$horas2"; ?><? echo "$art71"; ?><? echo "$art71d"; ?><? echo "$art71n"; ?></strong></td>
                <td bgcolor="#F3F3F3"><? echo "$txtsal1"; ?></td>
              </tr>
              <tr>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo212"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora5"; ?> as <? echo "$hora6"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora7"; ?> as <? echo "$hora8"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$escatual2"; ?> <? echo "$especif2"; ?> <? echo "$folgfix2"; ?> <? echo "$dias242"; ?> <? echo "$trabsab2"; ?><? echo "$txtsab2"; ?><? echo "$horas3"; ?> <? echo "$horas4"; ?><? echo "$art71p2"; ?><? echo "$art71dp2"; ?><? echo "$art71np2"; ?></strong></td>
                <td bgcolor="#F3F3F3"><? echo "$txtsal2"; ?></td>
              </tr>
              <tr>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo213"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora9"; ?> as <? echo "$hora10"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$hora11"; ?> as <? echo "$hora12"; ?></strong></td>
                <td bgcolor="#F3F3F3"><strong><? echo "$escatual3"; ?> <? echo "$especif3"; ?> <? echo "$folgfix3"; ?> <? echo "$dias243"; ?> <? echo "$trabsab3"; ?><? echo "$txtsab3"; ?><? echo "$horas5"; ?> <? echo "$horas6"; ?><? echo "$art71p3"; ?><? echo "$art71dp3"; ?><? echo "$art71np3"; ?></strong></td>
                <td bgcolor="#F3F3F3"><? echo "$txtsal3"; ?></td>
              </tr>
              <tr>
                <td colspan="2">Observações sobre as escalas:</td>
                <td colspan="3" bgcolor="#F3F3F3"><strong><? echo "$obsesc"; ?> <? echo "$totalfun"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="7"><strong>Informações de Cobrança/Custo do Contrato:</strong></td>
              </tr>
              <tr>
                <td width="20%">Vencimento da Fatura:</td>
                <td width="10%" bgcolor="#F3F3F3"><? echo "$campo25"; ?></td>
                <td width="20%">Duração do Contrato:</td>
                <td width="20%" bgcolor="#F3F3F3"><? echo "$campo26"; ?></td>
                <td width="20%">Forma de Faturamento: </td>
                <td width="10%" colspan="2" bgcolor="#F3F3F3"><? echo "$fatura"; ?></td>
              </tr>
              <tr>
                <td>Reajuste do Contrato:</td>
                <td colspan="6" bgcolor="#F3F3F3"><? echo "$regcon"; ?></td>
              </tr>
              <tr>
                <td width="20%">Mensalidade:</td>
                <td width="30%" colspan="2" bgcolor="#F3F3F3"><? echo "$mensalvalor"; ?></td>
                <td width="20%">&nbsp;</td>
                <td width="20%">Taxa de adesão:</td>
                <td  width="10%" colspan="2" bgcolor="#F3F3F3"><? echo "$taxaadesao"; ?></td>
              </tr>
              <tr>
                <td width="30%" colspan="2"> Incluso no Custo a Súmula 444:</td>
                <td width="20%" bgcolor="#F3F3F3"><? echo "$sumula"; ?></td>
                <td width="40%" colspan="3">Em caso negativo, será cobrado do cliente:</td>
                <td width="10%" bgcolor="#F3F3F3"><? echo "$cobrasumula"; ?></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td width="25%">Locação de equipamento:</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$locaequip"; ?></strong></td>
                <td width="25%">Valor incluso no custo?</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$locaequipv"; ?></strong></td>
              </tr>
              <tr>
                <td>Valor do equipamento:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campol31"; ?></strong></td>
                <td>Descreva:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo27"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td width="25%">Material de consumo:</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$matconsumo"; ?></strong></td>
                <td width="25%">Valor incluso no custo?</td>
                <td width="25%" bgcolor="#F3F3F3"><strong><? echo "$matconsv"; ?></strong></td>
              </tr>
              <tr>
                <td>Valor do material:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campom31"; ?></strong></td>
                <td>Descreva:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo28"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td width="20%">Uniforme:</td>
                <td width="80%" bgcolor="#F3F3F3"><strong><? echo "$uniforme"; ?> <? echo "$campo29"; ?> <? echo "$campo30"; ?></strong></td>
              </tr>
              <tr>
                <td>Fornecimento de EPI's:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$usaepi"; ?> - <? echo "$obsepi"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td width="25%">Locação de armamentos:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$locarma"; ?></strong></td>
                <td width="25%">Caso positivo - Quantidade:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$campo31"; ?></strong></td>
                <td width="10%">Obs: </td>
                <td width="30%" bgcolor="#F3F3F3" ><strong><? echo "$campo32"; ?></strong></td>
              </tr>
              <tr>
                <td>Adicional de Risco de Vida: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$adicrico"; ?></strong></td>
                <td>Caso positivo - Porcentual:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo33"; ?></strong></td>
                <td>Obs: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo34"; ?></strong></td>
              </tr>
              <tr>
                <td>Insalubridade:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$insalubri"; ?></strong></td>
                <td>Caso positivo - Porcentual:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo35"; ?></strong></td>
                <td>Obs: </td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo36"; ?></strong></td>
              </tr>
              <tr>
                <td>Periculosidade:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$periculosi"; ?></strong></td>
                <td>Caso positivo - Porcentual:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo37"; ?></strong></td>
                <td>Obs:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo38"; ?></strong></td>
              </tr>
              <tr>
                <td>Prêmio por assiduidade:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$premassid"; ?></strong></td>
                <td>Caso positivo - Porcentual:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo39"; ?></strong></td>
                <td>ou  Valor:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo40"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <table width="100%">
              <tr>
                <td width="20%">Gratificação adicional:</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$gratadic"; ?></strong></td>
                <td width="50%">Caso positivo - Gratificação do posto ou do colaborador?</td>
                <td width="20%" bgcolor="#F3F3F3"><strong><? echo "$tipogratific"; ?></strong></td>
              </tr>
            </table>
            <table width="100%">
              <tr>
                <td width="25%">Informações da gratificação:</td>
                <td width="35%" bgcolor="#F3F3F3"><strong><? echo "$campo41"; ?></strong></td>
                <td width="10%">Porcentual:</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$campo42"; ?></strong></td>
                <td width="10%">ou Valor R$:</td>
                <td width="10%" bgcolor="#F3F3F3"><strong><? echo "$campo43"; ?> cada</strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width="100%">
              <tr>
                <td colspan="6"><strong>Benefícios:</strong></td>
              </tr>
              <tr>
                <td width="15%">Vale Transporte: </td>
                <td  width="5%" bgcolor="#F3F3F3"><strong><? echo "$vtransporte"; ?></strong></td>
                <td width="40%">Ajuda de custo/Transporte no posto:</td>
                <td width="5%" bgcolor="#F3F3F3"><strong><? echo "$pajudacusto"; ?></strong></td>
                <td width="5%">Obs.:</td>
                <td width="30%" bgcolor="#F3F3F3"><strong><? echo "$campo44"; ?></strong></td>
              </tr>
              <tr>
                <td>Convênio Médico:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$convmedico"; ?></strong></td>
                <td>Convênio Odontológico:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$convodonto"; ?></strong></td>
                <td>Obs.:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo45"; ?></strong></td>
              </tr>
              <tr>
                <td>Visa Alimentação:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$visaaliment"; ?></strong></td>
                <td>Valor padrão  Empresa Prestadora:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$vpempresaprest"; ?></strong></td>
                <td>Obs.:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo46"; ?></strong></td>
              </tr>
              <tr>
                <td>Visa Refeição:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$visarestaur"; ?></strong></td>
                <td>Refeição no posto de trabalho:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$refpostotrab"; ?></strong></td>
                <td>Obs.:</td>
                <td bgcolor="#F3F3F3"><strong><? echo "$campo47"; ?></strong></td>
              </tr>
            </table>
            <br />
            <br />
            <hr style="height: 1px; border-style: none; background-color: #cccccc;">
            <br />
            <table width='100%'>
              <tr>
                <td colspan="2"><strong>Departamentos Comunicados - Enviar e-mail com solicitação de comprovação do recebimento:</strong></td>
              </tr>
              <tr>
                <td colspan="2">Será enviado um e-mail automaticamente para os seguintes departamentos:<br>
                  Diretoria / Gerência / Depto. Pessoal / Depto. Financeiro / Depto. Jurídico / SGI / Recursos Humanos / Compras</td>
              </tr>
              <tr>
                <td width="20%">Observações:</td>
                <td width="80%" bgcolor="#F3F3F3"><strong><? echo "$mensagem"; ?></strong></td>
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
                <td align="left" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"><?php echo "$ver_for_54"; ?></td>
                <td align="right" style="color: #fefefe; font-size: 9px; font-family: Helvetica, Verdana, sans-serif; padding: 10px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>