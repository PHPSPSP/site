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
              <h1 class="super hairline bordered bordered-normal">Relatório - Higiene de Locais</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET')
	{	$where = Array();
		$local = $_GET['b'];
		$ordem = $_GET['o'];
		$cpf = $_GET['c'];
		$inicio2 = $_GET['inicio2'];
		$final2 = $_GET['final2'];
		
if($inicio2!=""){
	$inicio2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio2'])));
	$final2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final2'])));}
	else{$inicio2="1900-01-01"; $final2="2900-12-31";}
		
		if( $local ){ $where[] = " local = '{$local}'"; }
		if( $cpf ){ $where[] = " cpf = '{$cpf}'"; }
		if( $inicio2 ){ $where[] = " data BETWEEN '{$inicio2}' and '{$final2}'"; }}
		
		$sql = "SELECT * FROM higiene ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );

      $sql .= "group by DATE_FORMAT(data, '%Y-%m-%d %H:%i'), local";
			$sql .= $ordem;

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);

/*".$sql."*/
print "<br /><b>".$totalreg."</b> Locais Higienizados<br /><br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'><strong>
<thead style='color:#fff; background-color:#FF6464' >
  <tr>
	  <td width='20%' align='center'>DATA DA HIGIENE</td>
    <td width='20%' align='center'>HORA DA HIGIENE</td>
    <td width='35%' align='center'>COLABORADOR</td>
    <td width='25%' align='center'>LOCAL</td>
  </tr>
</thead>
	
	</strong>
	<tbody>";

while($empresas = mysql_fetch_object($q_empresas)){

$cpf2 = $empresas->cpf;
$sqlll = mysql_query('SELECT * FROM sarvigil WHERE CGC = "'.$cpf2.'" AND DTDEMISSAO IS NULL');
$linha2 = mysql_fetch_object($sqlll);
$nomecand = $linha2->NOMEVIGIL;

print "
  <tr bordercolor='#ccc'>
    <td width='20%' align='center'><b>".date('d/m/Y', strtotime($empresas->data))."</b></td>
    <td width='20%' align='center'><b>".date('H:i', strtotime($empresas->data))."</b></td>
    <td width='35%' align='left'>".$nomecand."</td>
    <td width='25%' align='center'>".$empresas->local."</td>
  </tr>
";}
print "</tbody></table>";
?>
            <br />
            <form enctype="multipart/form-data" action="excel.php" method="post" name="formulario" id="formulario">
              <input type="text" value="<? echo $sql ?>" name="excel2" hidden="hidden" id="excel2"  />
              <input type="button" name="volta" id="volta" value="Voltar" onclick="history.go(-1)" />
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
              <input type="submit" name="excelsgi" id="excelsgi" value="Gerar Excel" />
            </form>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            FOR QR Code<br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>