<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

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
              <h1 class="super hairline bordered bordered-normal"> Contagem de Propostas Enviadas</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();
		$comercial = $_GET['s'];
		$ordem = $_GET['o'];
		$palavra = $_GET['p'];
		
$inicioo = $_GET['inicio'];
$finall = $_GET['final'];

if ($inicioo!="") {$inicio = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio'])));} else {};
if ($finall!="") {$final = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final'])));} else {};
					
		if( $comercial ){ $where[] = " usuario = '{$comercial}'"; }
		if( $palavra ){ $where[] = " nomecliente  LIKE '%$palavra%'"; }
		if( $inicio ){ $where[] = " datapro BETWEEN '{$inicio}' and '{$final}'"; }}
				
		$sql = "SELECT * FROM proposta ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
			$sql .= $ordem;

// Faz a query no banco de dados para o total desta página
$q_empresas = mysql_query($sql);
// Faz a query contando o total completo de resultados
$total = mysql_query($sql);
// Conta o total de registros
$totalreg = mysql_num_rows($total);

/*<br />   ".$sql."    $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<b>".$totalreg."</b> Propostas Enviadas<br />
<br />
<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0'><tr style='color:#FFF; background-color:#FF6464'>
    <td width='10%' align='center'>DATA</td>
    <td width='15%' align='center'>COMERCIAL</td>
    <td width='45%' align='center'>CLIENTE</td>
    <td width='15%' align='center'>QTD COLABORADORES</td>
    <td width='15%' align='center'>VALOR TOTAL</td>
	</tr></table></strong>";

$totalll=0;
$totallq=0;

// Exibe os dados com orientação a objetos
while($empresas = mysql_fetch_object($q_empresas)){

$colabtotal = ($empresas->colab1+$empresas->colab2+$empresas->colab3+$empresas->colab4+$empresas->colab5+$empresas->colab6+$empresas->colab7+$empresas->colab8+$empresas->colab9+$empresas->colab10+$empresas->colab11+$empresas->colab12+$empresas->colab13+$empresas->colab14+$empresas->colab15);

$valortotal = (float) (($empresas->vunit1*$empresas->colab1)+($empresas->vunit2*$empresas->colab2)+($empresas->vunit3*$empresas->colab3)+($empresas->vunit4*$empresas->colab4)+($empresas->vunit5*$empresas->colab5)+($empresas->vunit6*$empresas->colab6)+($empresas->vunit7*$empresas->colab7)+($empresas->vunit8*$empresas->colab8)+($empresas->vunit9*$empresas->colab9)+($empresas->vunit10*$empresas->colab10)+($empresas->vunit11*$empresas->colab11)+($empresas->vunit12*$empresas->colab12)+($empresas->vunit13*$empresas->colab13)+($empresas->vunit14*$empresas->colab14)+($empresas->vunit15*$empresas->colab15)+($empresas->vunite1*$empresas->quant1)+($empresas->vunite2*$empresas->quant2)+($empresas->vunite3*$empresas->quant3)+($empresas->vunite4*$empresas->quant4)+($empresas->vunite5*$empresas->quant5)+($empresas->vunite6*$empresas->quant6)+($empresas->vunite7*$empresas->quant7)+($empresas->vunite8*$empresas->quant8)+($empresas->vunite9*$empresas->quant9)+($empresas->vunite10*$empresas->quant10)+($empresas->vunite11*$empresas->quant11)+($empresas->vunite12*$empresas->quant12)+($empresas->vunite13*$empresas->quant13)+($empresas->vunite14*$empresas->quant14)+($empresas->vunite15*$empresas->quant15));

$imposto=($valortotal/100)+($valortotal/100*11)+($valortotal/100*3)+($valortotal/100*4.65);

$divisao = (($valortotal*100)-($imposto*100));

$divisao = number_format((($valortotal*100)-($imposto*100))/100,2,',','.');

$impostoss=$empresas->impostos;

if ($impostoss!="impostosim"){$valorfinal=$valortotal;}else{$valorfinal=((($valortotal*100)-($imposto*100))/100);};

$totalll += $valorfinal;
$totallq += $colabtotal;
$valorfinal=number_format($valorfinal,2,',','.');

print "<table width='100%' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0'><tr bgcolor='#EAEAEA'>
    <td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->datapro))."</td>
	<td width='15%' align='left'>".$empresas->usuario."</td>
    <td width='45%' align='left'>".$empresas->nomecliente."</td>    
    <td width='15%' align='center'>".$colabtotal."</td>
    <td width='15%' align='right'>R$ ".$valorfinal."</td>
  </tr>
</table>
";

}

$totall=number_format($totalll,2,',','.');

print "<table width='100%' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0'><tr bgcolor='#c9c9c9'>
    <td width='70%' align='center'><b>TOTAL</b></td>
    <td width='15%' align='center'><b>".$totallq."</b></td>
    <td width='15%' align='right'><b>R$ ".$totall."</b></td>
  </tr>
</table>";

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
