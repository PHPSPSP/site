<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

$colorsuccess = "<td width='5%' align='center' style='background-color:#449d44;'></td>";
$colorwarning = "<td width='5%' align='center' style='background-color:#f0ad4e;'></td>";
$colordanger = "<td width='5%' align='center' style='background-color:#d9534f;'></td>";

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Tratativas de Não Conformidades de Relatório de Visitas</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

/*$data = implode("-",array_reverse(explode("-",$data)));*/

$inicioo = $_GET['inicio'];
$finall = $_GET['final'];

if ($inicioo!="") {$inicio = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio'])));} else {};
if ($finall!="") {$final = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final'])));} else {};

/*$data1 = $_GET['data1'];
$data2 = $_GET['data2'];
$data3 = $_GET['data3'];
$data4 = $_GET['data4'];
$data5 = $_GET['data5'];
$data6 = $_GET['data6'];

$date1 = "$data3-$data2-$data1";
$date2 = "$data6-$data5-$data4";*/
		
/*if( $date ){ $where[] = " SUBSTRING_INDEX(data, '-', 1) >= '{$data1}' AND
SUBSTRING_INDEX(data, '-', 1) <= '{$data4}' AND
SUBSTRING_INDEX(SUBSTRING_INDEX(data, '-', 2), '-', -1) >= '{$data2}' AND
SUBSTRING_INDEX(SUBSTRING_INDEX(data, '-', 2), '-', -1) <= '{$data5}' AND
SUBSTRING_INDEX(data, '-', -1) >= '{$data3}' AND
SUBSTRING_INDEX(data, '-', -1) <= '{$data6}'"; }}*/
		
$sql = "SELECT * FROM visita WHERE nomesup = '".$nomeuser."' AND rotina = 'inconf' OR postura = 'inconf' OR uniforme = 'inconf' OR ocorrencia = 'inconf' OR cartao = 'inconf' OR pastamanual = 'inconf' OR equipamento = 'inconf' OR epi = 'inconf' OR estoqueprod = 'inconf' OR cliente = 'inconf' OR outros = 'inconf' AND data BETWEEN '".$inicio."' and '".$final."' order by data";

// Faz a query no banco de dados para o total desta página
$q_empresas = mysql_query($sql);
// Faz a query contando o total completo de resultados
$total = mysql_query($sql);
// Conta o total de registros
$totalreg = mysql_num_rows($total);

/*<br />   ".$sql."    $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Resultados do filtro<br />".$sql."
<br />

<strong>Legenda:</strong><br>
                        <table style='color: #666666;' width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr >
                <td width='4%' height='20px' align='left' style='background-color:#449d44;'></td>
                <td width='20%' align='left'> = Conforme</td>
                <td width='4%' height='20px' align='left' style='background-color: #d9534f;'></td>
                <td width='20%' align='left'> = Não Conforme</td>
                <td width='4%' height='20px' align='left' style='background-color: #f0ad4e;'></td>
                <td width='48%' align='left'> = Não Aplicável</td>
              </tr>
            </table>
			


<br />
<font size='-2'><strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0'><tr style='color:#FFF; background-color:#FF6464'>
    <td width='23%' align='center'>Cliente / Atividade</td>
    <td width='15%' align='center'>Supervisor</td>
    <td width='7%' align='center'>Data da Visita</td>
	<td width='5%' align='center' style='font-size:10'>Rotina</td>
    <td width='5%' align='center' style='font-size:10'>Postura</td>
    <td width='5%' align='center' style='font-size:10'>Uniforme</td>
    <td width='5%' align='center' style='font-size:10'>Livro de Ocorrência</td>
    <td width='5%' align='center' style='font-size:10'>Cartão de Ponto</td>
	<td width='5%' align='center' style='font-size:10'>Pasta de Rotina / Manual / FOR</td>
    <td width='5%' align='center' style='font-size:10'>Produtos e Equipam.</td>
    <td width='5%' align='center' style='font-size:10'>EPI</td>
	<td width='5%' align='center' style='font-size:10'>Estoque de Prod. e Equip.</td>
	<td width='5%' align='center' style='font-size:10'>Contato com Cliente</td>
    <td width='5%' align='center' style='font-size:10'>Outros</td>
	</tr></table></strong></font>";

/*<td width='17%' align='center'>Cliente / Atividade</td>
    <td width='9%' align='center'>Supervisor</td>
    <td width='7%' align='center'>Data da Visita</td>
    <td width='6%' align='center'>Hr. Inicial</td>
    <td width='6%' align='center'>Hr. Final</td>
	
	<td width='17%' align='center'><b>".$empresas->nomeposto."</b><br />".$empresas->tipo."</td>
    <td width='9%' align='center'>".$empresas->nomesup."</td>
    <td width='7%' align='center'><b>".date('d/m/Y', strtotime($empresas->data))."</b></td>
	<td width='6%' align='center'>".$empresas->horac."</td>
    <td width='6%' align='center'>".$empresas->horas."</td>
	*/

// Exibe os dados com orientação a objetos
while($empresas = mysql_fetch_object($q_empresas)){
	
if ($empresas->observacao == ""){$obser = "style='display:none'";} else {$obser = "";};
	

	
print "<font size='-2'><table width='100%' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0'><tr bgcolor='#EAEAEA'>
    <td width='23%' align='center'><b>".$empresas->nomeposto."</b><br />".$empresas->tipo."</td>
    <td width='15%' align='center'>".$empresas->nomesup."</td>
    <td width='7%' align='center'><b>".date('d/m/Y', strtotime($empresas->data))."</b></td>
    

".($empresas->rotina=="conf"?"$colorsuccess":($empresas->rotina == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->postura=="conf"?"$colorsuccess":($empresas->postura == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->uniforme=="conf"?"$colorsuccess":($empresas->uniforme == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->ocorrencia=="conf"?"$colorsuccess":($empresas->ocorrencia == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->cartao=="conf"?"$colorsuccess":($empresas->cartao == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->pastamanual=="conf"?"$colorsuccess":($empresas->pastamanual == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->equipamento=="conf"?"$colorsuccess":($empresas->equipamento == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->epi=="conf"?"$colorsuccess":($empresas->epi == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->estoqueprod=="conf"?"$colorsuccess":($empresas->estoqueprod == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->cliente=="conf"?"$colorsuccess":($empresas->cliente == "naplica" ? "$colorwarning" : "$colordanger"))."
".($empresas->outros=="conf"?"$colorsuccess":($empresas->outros == "naplica" ? "$colorwarning" : "$colordanger"))."
  </tr>
</table>

<table width='100%' border='1' bordercolor='#EAEAEA' cellspacing='0' cellpadding='0' $obser $observdisplaymostra>
	<tr bgcolor='#EAEAEA'><td><font color='#666666'><b>Observação: </b></font>".$empresas->observacao."</td></tr>
</table></font>
";}

?>
            <br />
            <form enctype="multipart/form-data" action="" method="post" name="formulario" id="formulario">
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
            </form>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_10"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
