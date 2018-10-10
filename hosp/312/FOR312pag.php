<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>
<? include("../topo.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../assets/table/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../assets/table/resources/syntax/shCore.css">
	<!--<link rel="stylesheet" type="text/css" href="../../assets/table/resources/demo.css">-->
	<script type="text/javascript" language="javascript" src="../../assets/table/media/js/jquery.dataTables.js">	</script>
	<script type="text/javascript" language="javascript" src="../../assets/table/resources/syntax/shCore.js">	</script>
	<script type="text/javascript" language="javascript" src="../../assets/table/resources/demo.js">	</script>
	<script type="text/javascript" language="javascript" class="init">
$(document).ready(function($) {
	$('#example').DataTable({
		"language": {
            "lengthMenu": "Mostrando _MENU_ resultados por página",
            "zeroRecords": "Nenhum dado foi encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Não há registros",
            "infoFiltered": "(filtrando de _MAX_ registros)",
			"paginate": {
				"first":      "Primeira",
				"last":       "Última",
				"next":       "Próxima",
				"previous":   "Anterior"
			},
			"search": "Pesquisar"
        }
	});
} );
	</script>
    


<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Relatório de Checklist - Entrega de Quartos</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET')
	{	$where = Array();
		$lider = $_GET['l'];
		$cliente = $_GET['p'];
		$tipolimpeza = $_GET['tl'];
		$ordem = $_GET['o'];
		$colaborador = $_GET['c'];
		$inicio2 = $_GET['inicio2'];
		$final2 = $_GET['final2'];
		$ordemservico = ' AND (os01!="" OR os02!="" OR os03!="" OR os04!="" OR os05!="" OR os06!="" OR os07!="" OR os08!="" OR os09!="" OR os10!="" OR os11!="" OR os12!="" OR os13!="" OR os14!="" OR os15!="" OR os16!="" OR os17!="" OR os18!="" OR os19!="" OR os20!="" OR os21!="" OR os22!="" OR os23!="" OR os24!="" OR os25!="" OR os26!="")';
		$naoconforme = ' AND (q01="Não Conforme" OR q02="Não Conforme" OR q03="Não Conforme" OR q04="Não Conforme" OR q05="Não Conforme" OR q06="Não Conforme" OR q07="Não Conforme" OR q08="Não Conforme" OR q09="Não Conforme" OR q10="Não Conforme" OR q11="Não Conforme" OR q12="Não Conforme" OR q13="Não Conforme" OR q14="Não Conforme" OR q15="Não Conforme" OR q16="Não Conforme" OR q17="Não Conforme" OR q18="Não Conforme" OR q19="Não Conforme" OR q20="Não Conforme" OR q21="Não Conforme" OR q22="Não Conforme" OR q23="Não Conforme" OR q24="Não Conforme" OR q25="Não Conforme" OR q26="Não Conforme")';
		
if($inicio2!=""){
	$inicio2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio2'])));
	$final2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final2'])));}
	else{$inicio2="1900-01-01"; $final2="2900-12-31";}
		
		if( $lider ){ $where[] = " usuario = '{$lider}'"; }
		if( $cliente ){ $where[] = " cliente1 = '{$cliente}'"; }
		if( $colaborador ){ $where[] = " colaborador = '{$colaborador}'"; }
		if( $tipolimpeza ){ $where[] = " tipolimpeza = '{$tipolimpeza}'"; }
		if( $inicio2 ){ $where[] = " data BETWEEN '{$inicio2}' and '{$final2}'"; }}
		
		$sql = "SELECT * FROM for312 ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
			
			$sql2 = $sql . $naoconforme.' group by quarto, horafin, horaliberado, horain';
			$sql3 = $sql . $ordemservico.' group by quarto, horafin, horaliberado, horain';
			$sql .= ' group by quarto, horafin, horaliberado, horain '.$ordem;

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);

$total2 = mysql_query($sql2);
$totalreg2 = mysql_num_rows($total2);

$total3 = mysql_query($sql3);
$totalreg3 = mysql_num_rows($total3);

/*".$sql."<br /> $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Quartos Entregues<br />
<br />
<b>".$totalreg2."</b> Quartos com <b>Não Conformidades</b><br />
<br />
<b>".$totalreg3."</b> Quartos com Abertura de <b>Ordem de Serviço</b><br />
<br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'><strong>
<thead style='line-height: 2; color:#fff; background-color:#FF6464' >
<tr>    <td width='15%' align='center'>DATA DA LIMPEZA</td>
	<td width='15%' align='center'>TIPO</td>
	<td width='20%' align='center'>LÍDER</td>
    <td width='40%' align='center'>COLABORADOR</td>
    <td width='10%' align='center'>QUARTO</td>
		</tr>
	</thead>
	
	</strong>
	<tbody>";

while($empresas = mysql_fetch_object($q_empresas)){

print "<tr bordercolor='#ccc'>
    <td width='15%' align='center'><b>".date('d/m/Y', strtotime($empresas->data))."</b></td>
    <td width='15%' align='left'>".$empresas->tipolimpeza."</td>
	<td width='20%' align='left'><b>".$empresas->usuario."</b></td>
    <td width='40%' align='left'>".$empresas->colaborador."</td>
    <td width='10%' align='center'>".$empresas->quarto."</td>
  </tr>


";}
print "
</tbody>
</table>";
?>
            <br />
            <form enctype="multipart/form-data" action="excel.php" method="post" name="formulario" id="formulario">
            <input type="text" value="<? echo $sql ?>" name="excel2" hidden="hidden" id="excel2"  />
            <input type="text" value="<? echo $totalreg2 ?>" name="excel21" hidden="hidden" id="excel21"  />
            <input type="text" value="<? echo $totalreg3 ?>" name="excel22" hidden="hidden" id="excel22"  />
            <input type="text" value="<? echo "$ver_for_312"; ?>" name="forver" hidden="hidden" id="forver"  />
              <input type="button" name="volta" id="volta" value="Voltar" onclick="history.go(-1)" />
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
              <input type="submit" name="excelsgi" id="excelsgi" value="Gerar Excel" />
            </form>

          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_312"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>