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
              <h1 class="super hairline bordered bordered-normal">Relatório de Redução de Colaboradores</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET')
	{	$where = Array();
		$gestor = $_GET['g'];
		$supervisor = $_GET['s'];
		$ordem = $_GET['o'];
		$reducao = "Reducao";
		$inicio2 = $_GET['inicio2'];
		if ($inicio2=="1900-01-01"){$inicio2 = "";}else{$inicio2 = $_GET['inicio2'];};
		
if($inicio2!=""){
	$inicio = $_GET['inicio2'];
	$final = $_GET['final2'];}
	else{$inicio="1900-01-01"; $final="2900-12-31";}
		
		if( $gestor ){ $where[] = " gestor = '{$gestor}'"; }
		if( $supervisor ){ $where[] = " campo48 = '{$supervisor}'"; }
		if( $reducao ){ $where[] = " cabecalho = '{$reducao}'"; }
		if( $inicio2 ){ $where[] = " data2 BETWEEN '{$inicio}' and '{$final}'"; }}
		
		$sql = "SELECT * FROM for054fim ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
		
		$sql2 = "SELECT * FROM for054arq ";
		if( sizeof( $where ) ) $sql2 .= ' WHERE '.implode( ' AND ',$where );

		$sql3 = "(". $sql .") UNION (". $sql2 .")". $ordem;

$q_empresas = mysql_query($sql3);
$total = mysql_query($sql3);
$totalreg = mysql_num_rows($total);

/**/
print "<br /><b>".$totalreg."</b> Reduções Realizadas<br />".$sql3."<br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'><strong>
<thead style='color:#fff; background-color:#FF6464' >
  <tr>
	<td width='20%' align='center'>DATA DA REDUÇÃO</td>
    <td width='30%' align='center'>GESTOR</td>
    <td width='30%' align='center'>SUPERVISOR</td>
	<td width='20%' align='center'>TOTAL DE COLABORADORES REDUZIDOS</td>
  </tr>
</thead>
	
	</strong>
	<tbody>";

$coltotalred = 0;

while($empresas = mysql_fetch_object($q_empresas)){

$totalcol = $empresas->campo21 + $empresas->campo212 + $empresas->campo213;

$coltotalred += $totalcol;

print "
  <tr bordercolor='#ccc'>
    <td width='20%' align='center'><b>".date('d/m/Y', strtotime($empresas->data2))."</b></td>
    <td width='30%' align='left'>".$empresas->gestor."</td>
    <td width='30%' align='left'>".$empresas->campo48."</td>
	<td width='20%' align='center'>".$totalcol."</td>
  </tr>
";}
print "</tbody></table>
<br>
Total de <b>".$coltotalred."</b> colaboradores reduzidos.<br><br>";
?>
            <br />
            <form enctype="multipart/form-data" action="excel.php" method="post" name="formulario" id="formulario">
              <input type="text" value="<? echo $sql3 ?>" name="excel2" hidden="hidden" id="excel2"  />
              <input type="text" value="<? echo $coltotalred ?>" name="coltotalred" hidden="hidden" id="coltotalred"  />
              <input type="button" name="volta" id="volta" value="Voltar" onclick="history.go(-1)" />
              <input type="text" value="<? echo "$ver_for_54"; ?>" name="forver" hidden="hidden" id="forver"  />
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
              <input type="submit" name="excelsgi" id="excelsgi" value="Gerar Excel" />
            </form>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_54"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>