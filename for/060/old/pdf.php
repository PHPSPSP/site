<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

if (!function_exists('getExcerpt')) {
    function getExcerpt($str, $startPos = 0, $maxLength = 500)
    {       if (strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength - 3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt .= '...';
        } else { $excerpt = $str; } return strip_tags($excerpt); }}
if (!function_exists('stepBy500')) {
    function stepBy500($n,$x=500) {
        return (ceil($n)%$x === 0) ? ceil($n) : round(($n+$x/2)/$x)*$x;
    }
}
$mysqli       = new mysqli('mysql05.spsp1.hospedagemdesites.ws', 'spsp14', 'S7s7master*10*', 'spsp14');
$mysqli_hk    = new mysqli('mysql01.spsp1.hospedagemdesites.ws', 'spsp1', 'S7s7master*10*', 'spsp1');
$query_hk     = $mysqli_hk->query("SELECT (SELECT COUNT(*) FROM sarclien WHERE DTENCERRA IS NULL) clientes, (SELECT COUNT(*) FROM sarvigil WHERE DTDEMISSAO IS NULL) colabs, (SELECT TIMESTAMPDIFF(YEAR, '1994-08-21', CURDATE())) idade");
$query_hk_cid = $mysqli_hk->query("SELECT CI.NOMECID FROM sarclien CL, sfgrupo SF, sarcidad CI WHERE SF.CODCLI=CL.CODCLI AND CI.CODCID=SF.CODCID AND CL.DTENCERRA IS NULL GROUP BY CI.NOMECID ORDER BY CI.NOMECID");
$info         = array();
while ($result = $query_hk->fetch_assoc()) {
    $info['clientes'] = ceil($result['clientes'] / 10) * 10;
    $info['colabs']   = stepBy500($result['colabs']);
    $info['idade']    = $result['idade']; }
$info['cidade'] = ceil($query_hk_cid->num_rows / 10) * 10;

$clientes = $info['clientes'];
$colabs = $info['colabs'];
$idade = $info['idade'];
$cidades = $info['cidade'];

$base_url = 'http://200.183.153.86/';

if(empty($usuario)){
header("Location: http://www.spsp.com.br/for/proibido.php");}else{}

extract($_POST, EXTR_OVERWRITE);

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$font = $_POST['font'];
$nomecliente = $_POST['nomecliente'];
$negrito = $_POST['negrito'];
$italico = $_POST['italico'];
$sublinhado = $_POST['sublinhado'];
$total15 = $_POST['vtotal15'];
$total14 = $_POST['vtotal14'];
$total13 = $_POST['vtotal13'];
$total12 = $_POST['vtotal12'];
$total11 = $_POST['vtotal11'];
$total10 = $_POST['vtotal10'];
$total9 = $_POST['vtotal9'];
$total8 = $_POST['vtotal8'];
$total7 = $_POST['vtotal7'];
$total6 = $_POST['vtotal6'];
$total5 = $_POST['vtotal5'];
$total4 = $_POST['vtotal4'];
$total3 = $_POST['vtotal3'];
$total2 = $_POST['vtotal2'];
$total1 = $_POST['vtotal1'];
$totale1 = $_POST['vtotale1'];
$totale2 = $_POST['vtotale2'];
$totale3 = $_POST['vtotale3'];
$totale4 = $_POST['vtotale4'];
$totale5 = $_POST['vtotale5'];
$totale6 = $_POST['vtotale6'];
$totale7 = $_POST['vtotale7'];
$totale8 = $_POST['vtotale8'];
$totale9 = $_POST['vtotale9'];
$totale10 = $_POST['vtotale10'];
$totale11 = $_POST['vtotale11'];
$totale12 = $_POST['vtotale12'];
$totale13 = $_POST['vtotale13'];
$totale14 = $_POST['vtotale14'];
$totale15 = $_POST['vtotale15'];
$totalnf1 = $_POST['vtotalnf1'];
$totalnf2 = $_POST['vtotalnf2'];
$totalnf3 = $_POST['vtotalnf3'];
$totalnf4 = $_POST['vtotalnf4'];
$totalnf = $_POST['vtotalnf'];
$totalbrut = $_POST['totalbruto'];
$unit1 = $_POST['vunit1'];
$unit2 = $_POST['vunit2'];
$unit3 = $_POST['vunit3'];
$unit4 = $_POST['vunit4'];
$unit5 = $_POST['vunit5'];
$unit6 = $_POST['vunit6'];
$unit7 = $_POST['vunit7'];
$unit8 = $_POST['vunit8'];
$unit9 = $_POST['vunit9'];
$unit10 = $_POST['vunit10'];
$unit11 = $_POST['vunit11'];
$unit12 = $_POST['vunit12'];
$unit13 = $_POST['vunit13'];
$unit14 = $_POST['vunit14'];
$unit15 = $_POST['vunit15'];
$unite1 = $_POST['vunite1'];
$unite2 = $_POST['vunite2'];
$unite3 = $_POST['vunite3'];
$unite4 = $_POST['vunite4'];
$unite5 = $_POST['vunite5'];
$unite6 = $_POST['vunite6'];
$unite7 = $_POST['vunite7'];
$unite8 = $_POST['vunite8'];
$unite9 = $_POST['vunite9'];
$unite10 = $_POST['vunite10'];
$unite11 = $_POST['vunite11'];
$unite12 = $_POST['vunite12'];
$unite13 = $_POST['vunite13'];
$unite14 = $_POST['vunite14'];
$unite15 = $_POST['vunite15'];
$total = $_POST['vtotal'];
$totale = $_POST['vtotale'];
$vtotal15 = number_format($total15, 2, ',', '.');
$vtotal14 = number_format($total14, 2, ',', '.');
$vtotal13 = number_format($total13, 2, ',', '.');
$vtotal12 = number_format($total12, 2, ',', '.');
$vtotal11 = number_format($total11, 2, ',', '.');
$vtotal10 = number_format($total10, 2, ',', '.');
$vtotal9 = number_format($total9, 2, ',', '.');
$vtotal8 = number_format($total8, 2, ',', '.');
$vtotal7 = number_format($total7, 2, ',', '.');
$vtotal6 = number_format($total6, 2, ',', '.');
$vtotal5 = number_format($total5, 2, ',', '.');
$vtotal4 = number_format($total4, 2, ',', '.');
$vtotal3 = number_format($total3, 2, ',', '.');
$vtotal2 = number_format($total2, 2, ',', '.');
$vtotal1 = number_format($total1, 2, ',', '.');
$vtotale1 = number_format($totale1, 2, ',', '.');
$vtotale2 = number_format($totale2, 2, ',', '.');
$vtotale3 = number_format($totale3, 2, ',', '.');
$vtotale4 = number_format($totale4, 2, ',', '.');
$vtotale5 = number_format($totale5, 2, ',', '.');
$vtotale6 = number_format($totale6, 2, ',', '.');
$vtotale7 = number_format($totale7, 2, ',', '.');
$vtotale8 = number_format($totale8, 2, ',', '.');
$vtotale9 = number_format($totale9, 2, ',', '.');
$vtotale10 = number_format($totale10, 2, ',', '.');
$vtotale11 = number_format($totale11, 2, ',', '.');
$vtotale12 = number_format($totale12, 2, ',', '.');
$vtotale13 = number_format($totale13, 2, ',', '.');
$vtotale14 = number_format($totale14, 2, ',', '.');
$vtotale15 = number_format($totale15, 2, ',', '.');
$vtotalnf1 = number_format($totalnf1, 2, ',', '.');
$vtotalnf2 = number_format($totalnf2, 2, ',', '.');
$vtotalnf3 = number_format($totalnf3, 2, ',', '.');
$vtotalnf4 = number_format($totalnf4, 2, ',', '.');
$vtotalnf = number_format($totalnf, 2, ',', '.');
$totalbruto = number_format($totalbrut, 2, ',', '.');
$vunit1 = number_format($unit1, 2, ',', '.');
$vunit2 = number_format($unit2, 2, ',', '.');
$vunit3 = number_format($unit3, 2, ',', '.');
$vunit4 = number_format($unit4, 2, ',', '.');
$vunit5 = number_format($unit5, 2, ',', '.');
$vunit6 = number_format($unit6, 2, ',', '.');
$vunit7 = number_format($unit7, 2, ',', '.');
$vunit8 = number_format($unit8, 2, ',', '.');
$vunit9 = number_format($unit9, 2, ',', '.');
$vunit10 = number_format($unit10, 2, ',', '.');
$vunit11 = number_format($unit11, 2, ',', '.');
$vunit12 = number_format($unit12, 2, ',', '.');
$vunit13 = number_format($unit13, 2, ',', '.');
$vunit14 = number_format($unit14, 2, ',', '.');
$vunit15 = number_format($unit15, 2, ',', '.');
$vunite1 = number_format($unite1, 2, ',', '.');
$vunite2 = number_format($unite2, 2, ',', '.');
$vunite3 = number_format($unite3, 2, ',', '.');
$vunite4 = number_format($unite4, 2, ',', '.');
$vunite5 = number_format($unite5, 2, ',', '.');
$vunite6 = number_format($unite6, 2, ',', '.');
$vunite7 = number_format($unite7, 2, ',', '.');
$vunite8 = number_format($unite8, 2, ',', '.');
$vunite9 = number_format($unite9, 2, ',', '.');
$vunite10 = number_format($unite10, 2, ',', '.');
$vunite11 = number_format($unite11, 2, ',', '.');
$vunite12 = number_format($unite12, 2, ',', '.');
$vunite13 = number_format($unite13, 2, ',', '.');
$vunite14 = number_format($unite14, 2, ',', '.');
$vunite15 = number_format($unite15, 2, ',', '.');
$vtotal = number_format($total, 2, ',', '.');
$vtotale = number_format($totale, 2, ',', '.');
$totallinhas = $_POST['totallinhas'];
$totallinhas2 = $_POST['totallinhas2'];
$totallinhas3 = $_POST['totallinhas3'];
$impostos = $_POST['impostos'];
$vliss = $_POST['vliss'];
$timbre = $_POST['timbre'];
$obsescala = $_POST['obsescala'];
$obsescalae = $_POST['obsescalae'];
$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$inscricaoest = $_POST['inscricaoest'];
$endfatur = $_POST['endfatur'];
$endprest = $_POST['endprest'];
$emailnfe = $_POST['emailnfe'];
$contatocom = $_POST['contatocom'];
$fonemailcom = $_POST['fonemailcom'];
$codpro = $_POST['codpro'];

$nomerepresentante = $_POST['nomerepresentante'];
$endereco = $_POST['endereco'];
$obsimposto = $_POST['obsimposto'];
$cobraferiado = $_POST['cobraferiado'];
$beneficios = $_POST['beneficios'];
$pagamento = $_POST['pagamento'];
$reajuste = $_POST['reajuste'];
$validadecont = $_POST['validadecont'];
$inicio = $_POST['inicio'];
$validadeprop = $_POST['validadeprop'];
$obsgeral = $_POST['obsgeral'];

if ($usuario == "Mary Martins" || $usuario == "Marcello Cross"){$bauru = "b";} else {$bauru = "";};

if ($_POST['option1'] != ""){$cobraferiado2 = "<br /><br /><b>Súmula 444:</b><br />$cobraferiado";} else {};
if ($_POST['option2'] != ""){$beneficios2 = "<br /><br /><b>Benefícios para Colaboradores:</b><br />$beneficios";} else {};
if ($_POST['option3'] != ""){$pagamento2 = "<br /><br /><b>Condições de Pagamento:</b><br />$pagamento";} else {};
if ($_POST['option4'] != ""){$reajuste2 = "<br /><br /><b>Reajuste do Contrato:</b><br />$reajuste";} else {};
if ($_POST['option5'] != ""){$validadecont2 = "<br /><br /><b>Validade do Contrato:</b><br />$validadecont";} else {};
if ($_POST['option6'] != ""){$inicio2 = "<br /><br /><b>Início dos Serviços:</b><br />$inicio";} else {};
if ($_POST['option7'] != ""){$validadeprop2 = "<br /><br /><b>Validade da Proposta:</b><br />$validadeprop";} else {};
if ($_POST['option8'] != ""){$obsgeral2 = "<br /><br /><b>Considerações:</b><br />$obsgeral";} else {};

if ($_POST['option11'] != ""){$obsescala2 = "<div style='text-align:justify; font-size:10px'>$obsescala</div ><br />";} else {};
if ($_POST['option12'] != ""){$obsescalae2 = "<div style='text-align:justify; font-size:10px'>$obsescalae</div ><br />";} else {};
if ($_POST['option13'] != ""){$obsimposto2 = "<div style='text-align:justify; font-size:10px'>$obsimposto</div >";} else {};

$data = date('d-m-Y');
$dia = date("d");
$mês = date("n");
$ano = date("Y");
$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$atvs2 = "$ativ2"; switch ($atvs2) {case! "": $atividade2 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto2</td>
    <td align='center' valign='middle'>$colab2</td>
    <td align='left' valign='middle'>$ativ2</td>
    <td align='center' valign='middle'>$cargh2</td>
    <td align='center' valign='middle'>$turno2</td>
	<td align='center' valign='middle'>$escala2</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'> R$ $vtotal2</td>
  </tr>
"; $escopo2 = "$ativ2 $turno2 $escala2<br />"; break;}
$atvs3 = "$ativ3"; switch ($atvs3) {case! "": $atividade3 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto3</td>
    <td align='center' valign='middle'>$colab3</td>
    <td align='left' valign='middle'>$ativ3</td>
    <td align='center' valign='middle'>$cargh3</td>
    <td align='center' valign='middle'>$turno3</td>
	<td align='center' valign='middle'>$escala3</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'> R$ $vtotal3</td>
  </tr>
"; $escopo3 = "$ativ3 $turno3 $escala3<br />"; break;}
$atvs4 = "$ativ4"; switch ($atvs4) {case! "": $atividade4 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto4</td>
    <td align='center' valign='middle'>$colab4</td>
    <td align='left' valign='middle'>$ativ4</td>
    <td align='center' valign='middle'>$cargh4</td>
    <td align='center' valign='middle'>$turno4</td>
	<td align='center' valign='middle'>$escala4</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal4</td>
  </tr>
"; $escopo4 = "$ativ4 $turno4 $escala4<br />"; break;}
$atvs5 = "$ativ5"; switch ($atvs5) {case! "": $atividade5 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto5</td>
    <td align='center' valign='middle'>$colab5</td>
    <td align='left' valign='middle'>$ativ5</td>
    <td align='center' valign='middle'>$cargh5</td>
    <td align='center' valign='middle'>$turno5</td>
	<td align='center' valign='middle'>$escala5</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal5</td>
  </tr>
"; $escopo5 = "$ativ5 $turno5 $escala5<br />"; break;}
$atvs6 = "$ativ6"; switch ($atvs6) {case! "": $atividade6 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto6</td>
    <td align='center' valign='middle'>$colab6</td>
    <td align='left' valign='middle'>$ativ6</td>
    <td align='center' valign='middle'>$cargh6</td>
    <td align='center' valign='middle'>$turno6</td>
	<td align='center' valign='middle'>$escala6</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal6</td>
  </tr>
"; $escopo6 = "$ativ6 $turno6 $escala6<br />"; break;}
$atvs7 = "$ativ7"; switch ($atvs7) {case! "": $atividade7 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto7</td>
    <td align='center' valign='middle'>$colab7</td>
    <td align='left' valign='middle'>$ativ7</td>
    <td align='center' valign='middle'>$cargh7</td>
    <td align='center' valign='middle'>$turno7</td>
	<td align='center' valign='middle'>$escala7</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal7</td>
  </tr>
"; $escopo7 = "$ativ7 $turno7 $escala7<br />"; break;}
$atvs8 = "$ativ8"; switch ($atvs8) {case! "": $atividade8 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto8</td>
    <td align='center' valign='middle'>$colab8</td>
    <td align='left' valign='middle'>$ativ8</td>
    <td align='center' valign='middle'>$cargh8</td>
    <td align='center' valign='middle'>$turno8</td>
	<td align='center' valign='middle'>$escala8</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal8</td>
  </tr>
"; $escopo8 = "$ativ8 $turno8 $escala8<br />"; break;}
$atvs9 = "$ativ9"; switch ($atvs9) {case! "": $atividade9 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto9</td>
    <td align='center' valign='middle'>$colab9</td>
    <td align='left' valign='middle'>$ativ9</td>
    <td align='center' valign='middle'>$cargh9</td>
    <td align='center' valign='middle'>$turno9</td>
	<td align='center' valign='middle'>$escala9</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal9</td>
  </tr>
"; $escopo9 = "$ativ9 $turno9 $escala9<br />"; break;}
$atvs10 = "$ativ10"; switch ($atvs10) {case! "": $atividade10 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto10</td>
    <td align='center' valign='middle'>$colab10</td>
    <td align='left' valign='middle'>$ativ10</td>
    <td align='center' valign='middle'>$cargh10</td>
    <td align='center' valign='middle'>$turno10</td>
	<td align='center' valign='middle'>$escala10</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal10</td>
  </tr>
"; $escopo10 = "$ativ10 $turno10 $escala10<br />"; break;}
$atvs11 = "$ativ11"; switch ($atvs11) {case! "": $atividade11 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto11</td>
    <td align='center' valign='middle'>$colab11</td>
    <td align='left' valign='middle'>$ativ11</td>
    <td align='center' valign='middle'>$cargh11</td>
    <td align='center' valign='middle'>$turno11</td>
	<td align='center' valign='middle'>$escala11</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal11</td>
  </tr>
"; $escopo11 = "$ativ11 $turno11 $escala11<br />"; break;}
$atvs12 = "$ativ12"; switch ($atvs12) {case! "": $atividade12 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto12</td>
    <td align='center' valign='middle'>$colab12</td>
    <td align='left' valign='middle'>$ativ12</td>
    <td align='center' valign='middle'>$cargh12</td>
    <td align='center' valign='middle'>$turno12</td>
	<td align='center' valign='middle'>$escala12</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal12</td>
  </tr>
"; $escopo12 = "$ativ12 $turno12 $escala12<br />"; break;}
$atvs13 = "$ativ13"; switch ($atvs13) {case! "": $atividade13 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto13</td>
    <td align='center' valign='middle'>$colab13</td>
    <td align='left' valign='middle'>$ativ13</td>
    <td align='center' valign='middle'>$cargh13</td>
    <td align='center' valign='middle'>$turno13</td>
	<td align='center' valign='middle'>$escala13</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal13</td>
  </tr>
"; $escopo13 = "$ativ13 $turno13 $escala13<br />"; break;}
$atvs14 = "$ativ14"; switch ($atvs14) {case! "": $atividade14 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto14</td>
    <td align='center' valign='middle'>$colab14</td>
    <td align='left' valign='middle'>$ativ14</td>
    <td align='center' valign='middle'>$cargh14</td>
    <td align='center' valign='middle'>$turno14</td>
	<td align='center' valign='middle'>$escala14</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal14</td>
  </tr>
"; $escopo14 = "$ativ14 $turno14 $escala14<br />"; break;}
$atvs15 = "$ativ15"; switch ($atvs15) {case! "": $atividade15 = "
  <tr>
    <td height='20' align='center' valign='middle'>$posto15</td>
    <td align='center' valign='middle'>$colab15</td>
    <td align='left' valign='middle'>$ativ15</td>
    <td align='center' valign='middle'>$cargh15</td>
    <td align='center' valign='middle'>$turno15</td>
	<td align='center' valign='middle'>$escala15</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotal15</td>
  </tr>
"; $escopo15 = "$ativ15 $turno15 $escala15<br />"; break;}

$servico = $_POST["ativ1"]; switch ($servico) {case! "": $servicos = "
<font color='#FF7174'>Proposta Comercial nº $codpro - $nomecliente</font><br /><br />
Serviços:<br />
<table width='100%' border='1' cellspacing='0' bordercolor='#CCCCCC'>
  <tr style='color:#FFFFFF'>
    <td width='10%' height='21' align='center' valign='middle' bgcolor='#FF7174'><strong>Posto</strong></td>
    <td width='10%' align='center' valign='middle' bgcolor='#FF7174'><strong>Colab.</strong></td>
    <td width='28%' align='center' valign='middle' bgcolor='#FF7174'><strong>Atividade</strong></td>
    <td width='14%' align='center' valign='middle' bgcolor='#FF7174'><strong>C. Horária</strong></td>
    <td width='10%' align='center' valign='middle' bgcolor='#FF7174'><strong>Turno</strong></td>
	<td width='10%' align='center' valign='middle' bgcolor='#FF7174'><strong>Escala</strong></td>
    <td width='18%' align='center' valign='middle' bgcolor='#FF7174'><strong>Valor Total</strong></td>
  </tr>
  <tr>
    <td height='20' align='center' valign='middle'>$posto1</td>
    <td align='center' valign='middle'>$colab1</td>
    <td align='left' valign='middle'>$ativ1</td>
    <td align='center' valign='middle'>$cargh1</td>
    <td align='center' valign='middle'>$turno1</td>
	<td align='center' valign='middle'>$escala1</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'> R$ $vtotal1</td>
  </tr>
  $atividade2
  $atividade3
  $atividade4
  $atividade5
  $atividade6
  $atividade7
  $atividade8
  $atividade9
  $atividade10
  $atividade11
  $atividade12
  $atividade13
  $atividade14
  $atividade15
  <tr>
    <td height='21' colspan='6' align='right' valign='middle' bgcolor='#666666' style='color:#FFFFFF'><strong>TOTAL</strong></td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'><strong>R$ $vtotal</strong></td>
  </tr>
</table><br />
$obsescala2<br /><br />
"; $escopo1 = "$ativ1 $turno1 $escala1<br />"; break;}

$equi2 = "$equip2"; switch ($equi2) {case! "": $equipamento2 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant2</td>
    <td align='left' valign='middle'>$equip2 $descri2</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale2</td>
  </tr>
"; break;}
$equi3 = "$equip3"; switch ($equi3) {case! "": $equipamento3 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant3</td>
    <td align='left' valign='middle'>$equip3 $descri3</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale3</td>
  </tr>
"; break;}
$equi4 = "$equip4"; switch ($equi4) {case! "": $equipamento4 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant4</td>
    <td align='left' valign='middle'>$equip4 $descri4</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale4</td>
  </tr>
"; break;}
$equi5 = "$equip5"; switch ($equi5) {case! "": $equipamento5 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant5</td>
    <td align='left' valign='middle'>$equip5 $descri5</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale5</td>
  </tr>
"; break;}
$equi6 = "$equip6"; switch ($equi6) {case! "": $equipamento6 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant6</td>
    <td align='left' valign='middle'>$equip6 $descri6</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale6</td>
  </tr>
"; break;}
$equi7 = "$equip7"; switch ($equi7) {case! "": $equipamento7 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant7</td>
    <td align='left' valign='middle'>$equip7 $descri7</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale7</td>
  </tr>
"; break;}
$equi8 = "$equip8"; switch ($equi8) {case! "": $equipamento8 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant8</td>
    <td align='left' valign='middle'>$equip8 $descri8</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale8</td>
  </tr>
"; break;}
$equi9 = "$equip9"; switch ($equi9) {case! "": $equipamento9 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant9</td>
    <td align='left' valign='middle'>$equip9 $descri9</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale9</td>
  </tr>
"; break;}
$equi10 = "$equip10"; switch ($equi10) {case! "": $equipamento10 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant10</td>
    <td align='left' valign='middle'>$equip10 $descri10</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale10</td>
  </tr>
"; break;}
$equi11 = "$equip11"; switch ($equi11) {case! "": $equipamento11 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant11</td>
    <td align='left' valign='middle'>$equip11 $descri11</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale11</td>
  </tr>
"; break;}
$equi12 = "$equip12"; switch ($equi12) {case! "": $equipamento12 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant12</td>
    <td align='left' valign='middle'>$equip12 $descri12</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale12</td>
  </tr>
"; break;}
$equi13 = "$equip13"; switch ($equi13) {case! "": $equipamento13 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant13</td>
    <td align='left' valign='middle'>$equip13 $descri13</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale13</td>
  </tr>
"; break;}
$equi14 = "$equip14"; switch ($equi14) {case! "": $equipamento14 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant14</td>
    <td align='left' valign='middle'>$equip14 $descri14</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale14</td>
  </tr>
"; break;}
$equi15 = "$equip15"; switch ($equi15) {case! "": $equipamento15 = "
  <tr>
    <td height='20' align='center' valign='middle'>$quant15</td>
    <td align='left' valign='middle'>$equip15 $descri15</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale15</td>
  </tr>
"; break;}
/*    <td width='18%' align='center' valign='middle' bgcolor='#FF7174'><strong>Observação</strong></td>*/
$equipamento = $_POST["equip1"]; switch ($equipamento) {case! "": $equipamentos = "
Equipamentos / Atividades:<br />
<table width='100%' border='1' cellspacing='0' bordercolor='#CCCCCC'>
  <tr style='color:#FFFFFF'>
    <td width='20%' height='21' align='center' valign='middle' bgcolor='#FF7174'><strong>Quantidade</strong></td>
    <td width='60%' align='center' valign='middle' bgcolor='#FF7174'><strong>Equipamento /Atividade</strong></td>
    <td width='20%' align='center' valign='middle' bgcolor='#FF7174'><strong>Valor</strong></td>
  </tr>
  <tr>
    <td height='20' align='center' valign='middle'>$quant1</td>
    <td align='left' valign='middle'>$equip1 $descri1</td>
    <td align='right' valign='middle' bgcolor='#CCCCCC'>R$ $vtotale1</td>
  </tr>
  $equipamento2
  $equipamento3
  $equipamento4
  $equipamento5
  $equipamento6
  $equipamento7
  $equipamento8
  $equipamento9
  $equipamento10
  $equipamento11
  $equipamento12
  $equipamento13
  $equipamento14
  $equipamento15
  <tr>
    <td height='21' colspan='2' align='right' valign='middle' bgcolor='#666666' style='color:#FFFFFF'><strong>TOTAL</strong></td>
    <td align='right' valign='middle' bgcolor='#CCCCCC' ><strong>R$ $vtotale</strong></td>
  </tr>
</table><br />
$obsescalae2<br /><br />
"; break;}

if ($impostos == "impostonao") { $imposto = "";}
else {$imposto = "<table width='100%' border='0'>
  <tr>
    <td align='left' bgcolor='#CCCCCC'>Retenção de INSS sobre NF $vunitnff1</td>
    <td align='right' width='20%' bgcolor='#CCCCCC'>R$ $vtotalnf1</td></tr>
  <tr>
    <td align='left' bgcolor='#CCCCCC'>Retenção de IRRF sobre NF $vunitnff2</td>
    <td align='right' width='20%' bgcolor='#CCCCCC'>R$ $vtotalnf2</td></tr>
  <tr>
    <td align='left' bgcolor='#CCCCCC'>Retenção de PIS/COFINS/CSLL sobre NF $vunitnff3</td>
    <td align='right' width='20%' bgcolor='#CCCCCC'>R$ $vtotalnf3</td></tr>
  <tr>
    <td align='left' bgcolor='#CCCCCC'>Retenção de ISS $vliss % sobre NF $vunitnff4</td>
    <td align='right' width='20%' bgcolor='#CCCCCC'>R$ $vtotalnf4</td></tr>
  <tr bgcolor='#FF7174' style='color:#FFFFFF'>
    <td align='left'><strong>VALOR TOTAL Líquido da Nota Fiscal (boleto)</strong></td>
    <td align='right' width='20%'><strong>R$ $vtotalnf</strong></td></tr></table><br />
	$obsimposto2";}

$totalgeral = "<table width='100%' border='0' >
  <tr bgcolor='#FF7174' style='color:#FFFFFF'>
    <td align='left'><strong>VALOR TOTAL Bruto da Nota Fiscal</strong></td>
    <td width='20%' align='right'><strong>R$ $totalbruto</strong></td></tr></table>";

$cid = "$usuario"; switch ($cid) {
case "Gustavo Guedes": $cidade = "Marília"; $fone = "(14) 99140-2448  /  (14) 3311-4000"; $assdig = "<img src='images/gustavo.jpg'/>"; break;
case "Daniel Garcia": $cidade = "Marília"; $fone = "(14) 99601-0534  /  (14) 3311-4000"; $assdig = "<img src='images/daniel.jpg'/>"; break;
case "Janine Garconi": $cidade = "Marília"; $fone = "(14) 99131-3581  /  (14) 3311-4000"; $assdig = "<img src='images/janine.jpg'/>"; break;
case "Rodolfo Martini": $cidade = "Marília"; $fone = "(14) 99721-1656  /  (14) 3311-4000"; $assdig = "<img src='images/rodolfo.jpg'/>"; break;
case "Patricia Plaza": $cidade = "Marília"; $fone = "(14) 99797-0010  /  (14) 3311-4000"; $assdig = "<img src='images/patricia.jpg'/>"; break;
case "Meire Fontana": $cidade = "Marília"; $fone = "(14) 99601-0461  /  (14) 3311-4000"; $assdig = "<img src='images/meire.jpg'/>"; break;
case "Celso Mendes": $cidade = "Marília"; $fone = "(14) 99125-1844  /  (14) 3311-4000"; $assdig = "<img src='images/celso.jpg'/>"; break;
case "Michele Santiago": $cidade = "Araraquara"; $fone = "(14) 99745-1308  /  (16) 99213-7898  /  (14) 3311-4000"; $assdig = "<img src='images/michele.jpg'/>"; break;
case "Marcello Cross": $cidade = "Bauru"; $fone = "(14) 99669-2588  /  (14) 3234-7484"; $assdig = "<img src='images/cross.jpg'/>"; break;
case "Disney Candido": $cidade = "Pompéia"; $fone = "(14) 99758-1318  /  (14) 3311-4000"; $assdig = "<img src='images/disney.jpg'/>"; break;
case "Marcelo Bertacini": $cidade = "Limeira"; $fone = "(14) 99741-8641  /  (19) 3446-1000"; $assdig = "<img src='images/bertacini.jpg'/>"; break;
case "Mary Martins": $cidade = "Bauru"; $fone = "(14) 99601-0523  /  (14) 3234-7484"; $assdig = "<img src='images/mary.jpg'/>"; break;}

if ($timbre == "timbresim") {$assinatura = "
<br />
$assdig<br />
$usuario<br />
Departamento Comercial<br />
$fone<br />
$email<br />";}
else {$assinatura = "
<br /><br />
<br /><br />
$usuario<br />
Departamento Comercial<br />
$fone<br />
$email<br />
";};

$timbreq = "$timbre"; switch ($timbreq) {
case "timbresim":
$capa = "<div style='page-break-after:always; height:100%; width:100%'>
<img src='images/top1$bauru.jpg' /></div>";
$timbretop = "<div style='page-break-after:always; height:100%; margin-left:40px; margin-right:20px'><img src='images/top2.jpg' width='100%'/><br /><div style='height:26cm'><br />";
$timbreroda = "</div><img src='images/bot2.jpg'/></div>";
$pagebreak = "</div><img src='images/bot2.jpg'/></div><div style='page-break-after:always; height:100%; margin-left:40px; margin-right:20px'><img src='images/top2.jpg' width='100%'/><br /><div style='height:26cm'><br />";break;
case "timbrenao":
$capa = "<div style='page-break-after:always; height:100%; margin-left:40px; margin-right:20px'>
<div style='height: 21cm'></div>
<div style='height: 7cm; padding-left:70px'>
<center><br /><br /><br /><br /><br /><br /><font style='font-family:tahoma; font-weight:bold; font-size:20px'>$nomecliente</font><br /></center></div>
</div>";
$timbretop = "<div style='page-break-after:always; height:100%; margin-left:40px; margin-right:20px'><img src='images/blk1.jpg' width='100%'/><br /><div style='height:26cm'><br />";
$timbreroda = "</div><img src='images/blk2.jpg'/></div>";
$pagebreak = "</div><img src='images/blk2.jpg'/></div><div style='page-break-after:always; height:100%; margin-left:40px; margin-right:20px'><img src='images/blk1.jpg' width='100%'/><br /><div style='height:26cm'><br />";
break;}

$abertura = "$timbretop<div style='text-align:justify'>
$cidade, $dia de $meses[$mês] de $ano.<br /><br /><br />
<font color='#FF7174'>Proposta Comercial nº $codpro</font><br /><br /><br /><br />
A(o)<br />
$nomerepresentante<br />
$nomecliente<br /><br /><br />
Apresentamos a seguir a proposta comercial para a prestação de serviços em suas instalações.<br />
Nesta proposta contempla o escopo técnico operacional e condições comerciais formatados de forma personalizada para melhor atendê-los.<br /><br />
Gostaríamos de agradecer pela oportunidade de apresentar nossas soluções em serviços e colocamo-nos à disposição para esclarecer quaisquer dúvidas que porventura ocorram.<br /><br /><br /><br />
Cordialmente,
$assinatura
</div >$timbreroda
";

$somos = "$timbretop<div style='text-align:justify'>
<b>Escopo da Proposta:</b><br /><br />
Local da Prestação de Serviços: $endereco<br /><br />
<b>Serviços Propostos:</b><br />
$escopo1
$escopo2
$escopo3
$escopo4
$escopo5
$escopo6
$escopo7
$escopo8
$escopo9
$escopo10
$escopo11
$escopo12
$escopo13
$escopo14
$escopo15<br /><br />
<b>Sobre a SPSP</b><br /><br />
Fundada em 20 de agosto de 1994, atuante no mercado de prestação de serviços, a SPSP é uma das mais conceituadas empresas de terceirização do país. Durante mais de duas décadas de trajetória modernizou processos, conquistou experiência e incorporou novas tecnologias, oferecendo aos seus clientes serviços qualificados e padronizados. A SPSP consolidou como uma das suas principais características, a estreita e transparente relação com seus parceiros. São $colabs colaboradores atuando em $clientes clientes distribuídos em $cidades cidades do estado de São Paulo.<br /><br />
Sua matriz está localizada em Marília, já as suas filiais em Bauru, São José do Rio Preto, Araraquara, Limeira, Jundiaí e São José do Rio Pardo para melhor atender seus clientes. O Grupo SPSP é especializado na capacitação de profissionais para as áreas de vigilância, portaria, limpeza, zeladoria, recepção e jardinagem em condomínios, hospitais e indústrias.<br />
Sua estrutura é composta por um amplo quadro de Supervisores Operacionais e Gestores de Contratos que, preparados tecnicamente e dotados de equipamentos especializados para executar suas atividades, sustentam um relacionamento permanente com os colaboradores e parceiros garantindo a qualidade dos serviços.<br /><br />
<b>Missão</b><br />
Ser um parceiro estratégico, reconhecido por sua geração de valor para o cliente.<br /><br />
<b>Visão</b><br />
Ser a melhor empresa de facilities do interior paulista, gerando parcerias duradouras através de relacionamento próximo, eficiente gestão de pessoas e inovação.<br /><br />
<b>Valores</b><br />
Atendimento e compromisso com cliente;<br />
Espírito de trabalho em equipe;<br />
Valorizar pessoas pelo desempenho;<br />
Gestão voltada para inovação e melhoria contínua.<br />
</div >$timbreroda
";

$finalização = "$timbretop<div style='text-align:justify'>
<b>Termos do Contrato</b>
$pagamento2
$beneficios2
$cobraferiado2
$reajuste2
$validadecont2
$inicio2
$validadeprop2
$obsgeral2<br /><br /><br />
$cidade, $dia de $meses[$mês] de $ano.<br />
$assinatura
</div >$timbreroda
";

$aceite = "$timbretop<div style='text-align:justify'>
<font color='#FF7174'>Termo de Aceite - Proposta nº $codpro</font><br /><br />
Estamos de acordo com as condições apresentadas na proposta e através deste termo damos o nosso aceite. Autorizamos o início dos serviços e o seu respectivo faturamento, nas condições expressas na presente proposta.<br /><br />
O presente contrato deverá ser assinado pelas partes nos próximos 30 (trinta) dias.<br /><br />
Para tanto, firmamos a presente.<br /><br />
____________________,_____ de________________________ de 20____.<br /><br /><br />
<table border='1px' width='100%' align='left'>
<tr><td width='40%'><strong>Razão Social:</strong></td><td width='60%'>$razaosocial</td></tr>
<tr><td><strong>CNPJ:</strong></td><td>$cnpj</td></tr>
<tr><td><strong>Nome do Responsável:</strong></td><td>$contatocom</td></tr>
<tr><td><strong>CPF do Responsável:</strong></td><td>$fonemailcom</td></tr>
</table><br /><br />
Assinatura:_______________________________________________<br /><br />
Nome:<br /><br />
Função:
</div >$timbreroda";

if ($totallinhas >= 18){$pagebreak1="$pagebreak";}else{};

if ($pagebreak1==""){if ($impostos=="impostosim"){if ($totallinhas >= 6){$pagebreak2="$pagebreak";}
else{if ($totallinhas >= 8){$pagebreak2="$pagebreak";}else{};};}else{};}
else{if ($impostos=="impostosim"){if ($totallinhas3 >= 9){$pagebreak2="$pagebreak";}else{};}else{};};

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>
<style>
body {font-family:Tahoma, Geneva, sans-serif;}
</style>
</head>
<body>



<?php echo "$capa"; ?>
<?php echo "$abertura"; ?>
<?php echo "$somos"; ?>
<?php echo "$timbretop"; ?>
<?php echo "$servicos"; ?>
<?php echo "$pagebreak1"; ?>
<?php echo "$equipamentos"; ?>
<?php echo "$pagebreak2"; ?>
<?php echo "$totalgeral"; ?>
<?php echo "$imposto"; ?>
<?php echo "$timbreroda"; ?>
<?php echo "$finalização"; ?>
<?php echo "$aceite"; ?>


</body>
</html>