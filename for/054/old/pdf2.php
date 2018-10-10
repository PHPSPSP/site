<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

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

if ($_POST['campo19'] == "Outra: "){$campo192 = $_POST['outraatv'];}else{$campo192 = $_POST['campo19'];};

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
    $forv = nl2br($_POST['forv']);
    $salario = nl2br($_POST['salario']);
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

$salval = "$_POST[salario]";
switch ($salval) {
case "NAO": $txtsal = "Nao informado"; break;
case "UNI": $txtsal = "Valor unico de: R$ $salario1"; break;
case "DIF": $txtsal = "Valores diferentes: 1º R$ $salario2  e  2º R$ $salario3"; break;}

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$query = mysql_query('SHOW TABLE STATUS LIKE "for054fim"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];

$cod = "$codfirma$idd/$ano_for";


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
<style type='text/css'>
body,td,th,a,h1,h2,h3,h4,h5,h6 {font-family: "Trebuchet MS", Arial, Helvetica, sans-serif; font-size:10px;}
</style>
</head>
<body>

<div style="margin:20px; width:556px">

<div style="width:556px; text-align:center; background-color:#F0F0F0"><font size="+3">FOR 054<? echo "$numfor"; ?> - Relatório de <? echo "$cabecalho"; ?> de Serviços</font><br />
<font size="+1">Nº de controle <? echo "$cod"; ?></font></div>
<div style="clear:both"></div><br />
<b>Dados da Implantação:</b><br />
<div style="width: 550px; padding: 2px; background-color: #DFDFDF;">
<table width='550'>
  
  <tr>
    <td width="102" >Tipo de Implantação:</td>
    <td width='166' bgcolor="#FFFFFF"><? echo "$cabecalho"; ?></td>
    <td width='79'>&nbsp;&nbsp;Código Cliente: </td>
    <td width='183' bgcolor="#FFFFFF"><? echo "$campo2"; ?></td>
  </tr>
  <tr>
    <td width="102" >Gestor:</td>
    <td width='166' bgcolor="#FFFFFF"><? echo "$gestor"; ?></td>
    <td width='79'>&nbsp;&nbsp;Empresa: </td>
    <td width='183' bgcolor="#FFFFFF"><? echo "$empresa"; ?></td>
  </tr>
  <tr>
    <td width="102" >Supervisor:</td>
    <td width='166' bgcolor="#FFFFFF"><? echo "$campo48"; ?></td>
    <td width='79'>&nbsp;&nbsp;Filial: </td>
    <td width='183' bgcolor="#FFFFFF"><? echo "$regiao"; ?></td>
    </tr></table>
</div><div style="clear:both"></div><br />

<b>Dados do Cliente:</b><br />
* Preencher conforme CNPJ da empresa, que deverá estar anexo a implantação.<br />
<div style="width:550px; background-color:#DFDFDF; padding:2px; ">
<table width="550"><tr>
    <td width="135">Contratante / Razão    Social *: </td>
    <td width="403" bgcolor="#FFFFFF"><? echo "$campo4"; ?></td>
    </tr></table>
    <table width="550">
    <tr>
    <td width='73'>Rua e Bairro *:</td>
    <td width="465" bgcolor="#FFFFFF"><? echo "$campo5"; ?></td>
    </tr></table>
    <table width="550"><tr>
    <td width='58'>Cidade *:</td><td width='298' bgcolor="#FFFFFF"><? echo "$campo6"; ?></td>
    <td width='41'>&nbsp;&nbsp;CEP *: </td>
    <td width='133' bgcolor="#FFFFFF"><? echo "$campo7"; ?></td>
</tr></table>
    <table width="550"><tr>
    <td width="78">Telefone / Fax:</td>
    <td colspan="3" bgcolor="#FFFFFF"><? echo "$campo11"; ?></td>
    <td width='70'>&nbsp;&nbsp;Página Web: </td>
    <td width="186" colspan="2" bgcolor="#FFFFFF"><? echo "$campo12"; ?></td>
    </tr>
</table><table width="550"><tr>
    <td width="43">CNPJ *:</td>
    <td colspan="2" bgcolor="#FFFFFF"><? echo "$campo8"; ?></td>
    <td width="40">&nbsp;&nbsp;I.Est.:</td><td width='120' bgcolor="#FFFFFF"><? echo "$campo9"; ?></td>
    <td width='47'>&nbsp;&nbsp;I.Mun.: </td>
    <td width='120' bgcolor="#FFFFFF"><? echo "$campo10"; ?></td>
</tr></table>
    
</div><div style="clear:both"></div><br />

<b>CEI:</b><br />
Se há CEI, informe se deve incluir nº do CEI nos itens abaixo.<br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
<table width="538">
  <tr>
    <td width="35">CEI: </td>
    <td colspan="2" bgcolor="#FFFFFF"><? echo "$cei"; ?></td>
    <td width="337">&nbsp;</td></tr></table>
    <table width="544">
  <tr>
    <td width="112" >Incluir nº do CEI na =&gt;</td>
    <td width="61">&nbsp;&nbsp;Nota Fiscal:</td>
    <td width="37" bgcolor="#FFFFFF"><? echo "$ceifiscal"; ?></td>
    <td width="46">&nbsp;&nbsp;SEFIP: </td>
    <td width="37" bgcolor="#FFFFFF"><? echo "$sefipcei"; ?></td>
    <td width="182">&nbsp;&nbsp;O nº do CEI sera único e fixo mensal:</td>
    <td width="37" bgcolor="#FFFFFF"><? echo "$ceifixo"; ?></td>
  </tr></table><table width="545">
  <tr>
    <td width="36">Obs.:</td>
    <td width="497" bgcolor="#FFFFFF"><? echo "$obscei"; ?></td>
    </tr>
</table>

</div><div style="clear:both"></div><br />

<b>Dados do Posto/Gestor de Contrato:</b><br />
** Obrigatório anexar cópia do contrato social ou estatuto e última alteração contratual (se houver), RG e CPF do <br />responsável e procuração caso a pessoa que for assinar não constar no contrato social.<br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
<table width="550">
    <tr>
    <td width='93'>Local Implantação: </td>
    <td width="445" colspan="4" bgcolor="#FFFFFF"><? echo "$campo14"; ?></td>
    </tr></table>
<table width="550"><tr>
    <td width="228">E-mail para cobrança e envio de documentos: </td>
    <td width="310" bgcolor="#FFFFFF"><? echo "$campo13"; ?></td>
    </tr></table>
    <table width="550">
    <tr>
    <td colspan="2">Contato Comercial/Fatur.:</td>
    <td width="203" bgcolor="#FFFFFF"><? echo "$campo15"; ?></td>
    <td width='42'>&nbsp;&nbsp;E-mail: </td>
    <td width='137' bgcolor="#FFFFFF"><? echo "$campo16"; ?></td>
    </tr></table>
    <table width="550">
    <tr>
    <td width='108'>Responsável Legal **:</td>
    <td colspan="2" bgcolor="#FFFFFF"><? echo "$campo17"; ?></td>
    <td width='42'>&nbsp;&nbsp;CPF: </td>
    <td width='129' bgcolor="#FFFFFF"><? echo "$campo18"; ?></td>
</tr>
</table>
<table width="550">
    <tr>
    <td width='102'>Gestor do Contrato:</td>
    <td colspan="2" bgcolor="#FFFFFF"><? echo "$respleg"; ?></td>
    <td width="69"></td>
    </tr>
</table></div><div style="clear:both"></div><br />


<b>Informações da Atividade que será Implantada:</b><br />
*** É necessário preencher um formulário separado para cada atividade / função exercida.<br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
<table width="550"><tr>
      <td width="375">Atividade***:</td>
      <td width="163">Data de Início:</td>
</tr><tr>
      <td width="375" bgcolor="#FFFFFF"><? echo "$campo192"; ?></td>
      <td width="163" bgcolor="#FFFFFF"><? echo "$campo24"; ?></td>
</tr></table>
</div><div style="clear:both"></div><br />

<div style="page-break-before: always">

<b>Informações de Escala/Horário:</b><br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
<table width="550"><tr>
      <td width="94">Postos:</td>
      <td width="111">H/mês:</td>
      <td width="329"></td>
</tr><tr>
      <td width="94" bgcolor="#FFFFFF"><? echo "$campo20"; ?></td>
      <td width="111" bgcolor="#FFFFFF"><? echo "$campo22"; ?></td>
      <td width="329"></td>
</tr></table>
<br />
<br /><hr />

<br />
Escala das Equipes:<br />
<table width="550"><tr>
      <td width="38">Nº Col.:</td>
      <td width="89">Horario: </td>
      <td width="90">Intervalo: </td>
      <td width="313">Escala:</td>
</tr><tr>
      <td width="38" bgcolor="#FFFFFF"><? echo "$campo21"; ?></td>
      <td width="89" bgcolor="#FFFFFF"><? echo "$hora1"; ?> as <? echo "$hora2"; ?></td>
      <td width="90" bgcolor="#FFFFFF"><? echo "$hora3"; ?> as <? echo "$hora4"; ?></td>
      <td width="313" bgcolor="#FFFFFF"><? echo "$escatual"; ?> <? echo "$especif1"; ?> <? echo "$folgfix1"; ?> <? echo "$dias241"; ?> <? echo "$trabsab"; ?><? echo "$txtsab"; ?><? echo "$horas1"; ?> <? echo "$horas2"; ?><? echo "$art71"; ?><? echo "$art71d"; ?><? echo "$art71n"; ?></td></tr><tr>
      <td width="38" bgcolor="#FFFFFF"><? echo "$campo212"; ?></td>
      <td width="89" bgcolor="#FFFFFF"><? echo "$hora5"; ?> as <? echo "$hora6"; ?></td>
      <td width="90" bgcolor="#FFFFFF"><? echo "$hora7"; ?> as <? echo "$hora8"; ?></td>
      <td width="313" bgcolor="#FFFFFF"><? echo "$escatual2"; ?> <? echo "$especif2"; ?> <? echo "$folgfix2"; ?> <? echo "$dias242"; ?> <? echo "$trabsab2"; ?><? echo "$txtsab2"; ?><? echo "$horas3"; ?> <? echo "$horas4"; ?><? echo "$art71p2"; ?><? echo "$art71dp2"; ?><? echo "$art71np2"; ?></td></tr><tr>
      <td width="38" bgcolor="#FFFFFF"><? echo "$campo213"; ?></td>
      <td width="89" bgcolor="#FFFFFF"><? echo "$hora9"; ?> as <? echo "$hora10"; ?></td>
      <td width="90" bgcolor="#FFFFFF"><? echo "$hora11"; ?> as <? echo "$hora12"; ?></td>
      <td width="313" bgcolor="#FFFFFF"><? echo "$escatual3"; ?> <? echo "$especif3"; ?> <? echo "$folgfix3"; ?> <? echo "$dias243"; ?> <? echo "$trabsab3"; ?><? echo "$txtsab3"; ?><? echo "$horas5"; ?> <? echo "$horas6"; ?><? echo "$art71p3"; ?><? echo "$art71dp3"; ?><? echo "$art71np3"; ?></td></tr></table>
<br />
<br /><hr /><br />



      <table width="550"><tr>
      <td width="142">Observações sobre as escalas:</td>
      <td width="396" bgcolor="#FFFFFF"><? echo "$obsesc"; ?> <? echo "$totalfun"; ?></td></tr></table><br /><br />
<table width="500"><tr>
      <td width="50">Salário:</td>
      <td width="450" bgcolor="#FFFFFF"><? echo "$txtsal"; ?></td>
</tr></table>

</div><div style="clear:both"></div><br />

<b>Informações de Cobrança/Custo do Contrato:</b><br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
<table width="550"><tr>
      <td width="112">Vencimento da Fatura:</td>
      <td width="32" bgcolor="#FFFFFF"><? echo "$campo25"; ?></td>
      <td width="115">&nbsp;&nbsp;&nbsp;&nbsp;Duração do Contrato:</td>
      <td width="39" bgcolor="#FFFFFF"><? echo "$campo26"; ?></td>
      <td width="122">&nbsp;&nbsp;&nbsp;&nbsp;Forma de Faturamento: </td>
      <td width="102" bgcolor="#FFFFFF"><? echo "$fatura"; ?></td></tr>
      <tr> <td colspan="2">Reajuste do Contrato:</td>
        <td colspan="4" bgcolor="#FFFFFF"><? echo "$regcon"; ?></td>
      </tr>
    </table>
    
     
  <table width="550">
    <tr>
      <td width="163">
Incluso no Custo a Súmula 444:</td>
      <td width="47" bgcolor="#FFFFFF"><? echo "$sumula"; ?></td>
      <td width="251">&nbsp;&nbsp;&nbsp;=&gt; Em caso negativo - Será cobrado do cliente:</td>
      <td width="69" bgcolor="#FFFFFF"><? echo "$cobrasumula"; ?></td>
    </tr>
  </table>
  <br />
  <br /><hr /><br />

  <table width="550">
    <tr>
      <td colspan="2">Locação de equipamento:</td>
      <td bgcolor="#FFFFFF"><? echo "$locaequip"; ?></td>
      <td width="43">&nbsp;</td>
      <td width="191">&nbsp;&nbsp;=&gt; Valor incluso no custo?</td>
      <td width="47" bgcolor="#FFFFFF"><? echo "$locaequipv"; ?></td>
      </tr>
      <tr>
      <td width="115">Valor do equipamento:</td>
      <td width="51" bgcolor="#FFFFFF"><? echo "$campol31"; ?></td>
      <td width="75">&nbsp;&nbsp;&nbsp;&nbsp; Descreva:</td>
      <td colspan="3" bgcolor="#FFFFFF"><? echo "$campo27"; ?></td>
    </tr></table><br /><br />

  <table width="550">
     <tr>
      <td colspan="2">Material de consumo:</td>
      <td bgcolor="#FFFFFF"><? echo "$matconsumo"; ?></td>
      <td width="43">&nbsp;</td>
      <td width="191">&nbsp;&nbsp;=&gt; Valor incluso no custo?</td>
      <td width="47" bgcolor="#FFFFFF"><? echo "$matconsv"; ?></td>
      </tr>
    <tr>
      <td width="115">Valor do material:</td>
      <td width="51" bgcolor="#FFFFFF"><? echo "$campom31"; ?></td>
      <td width="75">&nbsp;&nbsp;&nbsp;&nbsp; Descreva:</td>
      <td colspan="3" bgcolor="#FFFFFF"><? echo "$campo28"; ?></td>
      </tr>  </table><br /><br />

  <table width="550">
    <tr>
      <td width="57">Uniforme:</td>
      <td width="481" colspan="7" bgcolor="#FFFFFF"><? echo "$uniforme"; ?> <? echo "$campo29"; ?> <? echo "$campo30"; ?></td>
      </tr></table><br /><br />

  <table width="550">
       <tr>
      <td width="122">Fornecimento de EPI's:</td>
      <td width="416" colspan="7" bgcolor="#FFFFFF"><? echo "$usaepi"; ?> - <? echo "$obsepi"; ?></td>
      </tr></table><br /><br />

  <table width="550">
    <tr>
      <td width="133">Locação de armamentos:</td>
      <td width="36" bgcolor="#FFFFFF"><? echo "$locarma"; ?></td>
      <td width="149">&nbsp;&nbsp;=&gt;Caso positivo - Quantidade:</td>
      <td width="37" bgcolor="#FFFFFF"><? echo "$campo31"; ?></td>
      <td width="35">&nbsp;&nbsp;Obs: </td>
      <td width="132"  bgcolor="#FFFFFF"><? echo "$campo32"; ?></td>
      </tr></table><br />
<table width="550">
    <tr>
      <td  width="133">Adicional de Risco de Vida: </td>
      <td width="36" bgcolor="#FFFFFF"><? echo "$adicrico"; ?></td>
      <td width="149">&nbsp;&nbsp;=&gt;Caso positivo - Porcentual:</td>
      <td width="37" bgcolor="#FFFFFF"><? echo "$campo33"; ?></td>
      <td width="35">&nbsp;&nbsp;Obs: </td>
      <td width="132"  bgcolor="#FFFFFF"><? echo "$campo34"; ?></td>
      </tr>  </table><br /><br />

  <table width="550">
    <tr>
      <td width="70">Insalubridade:</td>
      <td width="33" bgcolor="#FFFFFF"><? echo "$insalubri"; ?></td>
      <td width="162" >&nbsp;&nbsp;=&gt;Em caso positivo - Porcentual:</td>
      <td width="35" bgcolor="#FFFFFF"><? echo "$campo35"; ?></td>
      <td width="30">&nbsp;&nbsp;Obs: </td>
      <td width="192" colspan="2" bgcolor="#FFFFFF"><? echo "$campo36"; ?></td>
      </tr></table><br />

  <table width="550">
    <tr>
      <td width="70">Periculosidade:</td>
      <td width="33" bgcolor="#FFFFFF"><? echo "$periculosi"; ?></td>
      <td width="162" >&nbsp;&nbsp;=&gt;Em caso positivo - Porcentual:</td>
      <td width="35" bgcolor="#FFFFFF"><? echo "$campo37"; ?></td>
      <td width="30">&nbsp;&nbsp;Obs:</td>
      <td width="192" colspan="2" bgcolor="#FFFFFF"><? echo "$campo38"; ?></td>
      </tr>  </table><br /><br />

  <table width="550">
    <tr>
      <td width="119">Prêmio por assiduidade:</td>
      <td width="30" bgcolor="#FFFFFF"><? echo "$premassid"; ?></td>
      <td colspan="2">&nbsp;&nbsp;=&gt;Em caso positivo - Porcentual:</td>
      <td width="56" bgcolor="#FFFFFF"><? echo "$campo39"; ?></td>
      <td width="61">&nbsp;&nbsp;ou  Valor:</td>
      <td width="84" bgcolor="#FFFFFF"><? echo "$campo40"; ?></td>
      </tr></table><br />

  <table width="550">
    <tr>
      <td width="119">Gratificação adicional:</td>
      <td width="30" bgcolor="#FFFFFF"><? echo "$gratadic"; ?></td>
      <td colspan="4">&nbsp;&nbsp;=&gt;Em caso positivo - Gratificação do posto ou do colaborador?</td>
      <td width="83" bgcolor="#FFFFFF"><? echo "$tipogratific"; ?></td>
      </tr>
  </table>
  <table width="550">
    <tr>
      <td width="106">Informações da gratificação:</td>
      <td width="146" bgcolor="#FFFFFF"><? echo "$campo41"; ?></td>
      <td width="57">&nbsp;&nbsp;Porcentual:</td>
      <td width="55" bgcolor="#FFFFFF"><? echo "$campo42"; ?></td>
      <td width="64">&nbsp;&nbsp;ou Valor R$:</td>
      <td width="52" bgcolor="#FFFFFF"><? echo "$campo43"; ?></td>
      <td width="38">&nbsp;&nbsp;cada</td>
    </tr>
  </table></div><div style="clear:both"></div><br />
</div>

<div style="page-break-before: always">
<b>Benefícios:</b><br />
<div style="width:550px; padding:2px; background-color:#DFDFDF; ">
  <table width="550">
    <tr>
    <td width="86">Vale Transporte: </td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$vtransporte"; ?></td>
    <td width="169">&nbsp;&nbsp;Ajuda de custo/Transporte no posto:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$pajudacusto"; ?></td>
    <td width="37">&nbsp;&nbsp;Obs.:</td>
    <td width="176" bgcolor="#FFFFFF"><? echo "$campo44"; ?></td>
  </tr>
  <tr>
    <td width="86">Convênio Médico:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$convmedico"; ?></td>
    <td width="169">&nbsp;&nbsp;Convênio Odontológico:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$convodonto"; ?></td>
    <td width="37">&nbsp;&nbsp;Obs.:</td>
    <td width="176" bgcolor="#FFFFFF"><? echo "$campo45"; ?></td>
  </tr>
  <tr>
    <td width="86">Visa Alimentação:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$visaaliment"; ?></td>
    <td width="169">&nbsp;&nbsp;Valor padrão  Empresa Prestadora:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$vpempresaprest"; ?></td>
    <td width="37">&nbsp;&nbsp;Obs.:</td>
    <td width="176" bgcolor="#FFFFFF"><? echo "$campo46"; ?></td>
  </tr>
  <tr>
    <td width="86">Visa Refeição:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$visarestaur"; ?></td>
    <td width="169">&nbsp;&nbsp;Refeição no posto de trabalho:</td>
    <td width="27" bgcolor="#FFFFFF"><? echo "$refpostotrab"; ?></td>
    <td width="37">&nbsp;&nbsp;Obs.:</td>
    <td width="176" bgcolor="#FFFFFF"><? echo "$campo47"; ?></td>
  </tr>
</table>
</div><div style="clear:both"></div><br />
<b>Departamentos Comunicados - Enviar e-mail com solicitação de comprovação do recebimento:</b><br />
Será enviado um e-mail automaticamente para os seguintes departamentos:<br />

<table width='556' bgcolor="#DFDFDF">
    <tr>
    <td><center>
    Diretoria / Gerência / Depto. Pessoal / Depto. Financeiro / Depto. Jurídico / SGI / Recursos Humanos / Compras
    </center><br /></td>
  </tr>
  </table>
  
  
<table width="556" bgcolor="#DFDFDF"><tr>
      <td width="76">Observações: </td>
      <td width="462" bgcolor="#FFFFFF"><? echo "$mensagem"; ?></td>
</tr></table>

<table  width='556' bgcolor="#DFDFDF"><tr><td>
<br />Responsável pela Comunicação: <b><? echo "$nome"; ?></b> |  E-mail: <b><? echo "$email"; ?></b><br />
Data e Hora da Comunicação: <b><? echo "$date"; ?></b></td></tr></table>

<br />
<font size="-2">FOR 054 - <? echo "$forv"; ?></font>

</div>
</body>
</html>