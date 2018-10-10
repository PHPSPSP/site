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
$(document).ready(function($) {
	$('#example2').DataTable({
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
              <h1 class="super hairline bordered bordered-normal"> Relatório de Lavanderia - Entrega de Enxoval</h1>
            </header>
          </div>
        </div>
		<div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET')
	{	$where = Array();
		$u = $_GET['u'];
		$l = $_GET['l'];
		$e = $_GET['e'];
		$c = $_GET['c'];
		$inicio2 = $_GET['inicio2'];
		$final2 = $_GET['final2'];
		$o = $_GET['o'];
		
if($inicio2!=""){
	$inicio2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio2'])));
	$final2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final2'])));}
	else{$inicio2="1900-01-01"; $final2="2900-12-31";}
		
		if( $u ){ $where[] = " lavanderia_usuario = '{$u}'"; }
		if( $l ){ $where[] = " lavanderia_local = '{$l}'"; }
		if( $e ){ $where[] = " lavanderia_enxoval = '{$e}'"; }
		if( $c ){ $where[] = " lavanderia_enfermagem = '{$c}'"; }
		if( $inicio2 ){ $where[] = " data_hora BETWEEN '{$inicio2}' and '{$final2}'"; }}
		
		$sql = "SELECT * FROM lavanderia_controle ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
			
			$sql .= $o;

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);

/*".$sql."<br /> $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Entregas Realizadas<br />
<br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'><strong>
<thead style='line-height: 2; color:#fff; background-color:#FF6464' >
<tr><td width='10%' align='center'>DATA DA ENTREGA</td>
	<td width='15%' align='center'>LOCAL</td>
	<td width='15%' align='center'>ENXOVAL</td>
	<td width='10%' align='center'>QTD PADRÃO</td>
	<td width='10%' align='center'>QTD CONTAGEM</td>
	<td width='10%' align='center'>QTD ENTREGUE</td>
    <td width='15%' align='center'>COLABORADOR</td>
    <td width='15%' align='center'>ENFERMEIRO</td>
</tr>
</thead>
</strong>
<tbody>";

while($empresas = mysql_fetch_object($q_empresas)){

$consulta=mysql_query("SELECT lavanderia_nome_local FROM lavanderia_local where lavanderia_id_local = ".$empresas->lavanderia_local); 
while ($dados = mysql_fetch_array($consulta)) $rlocal = $dados['lavanderia_nome_local'];

$consulta=mysql_query("SELECT lavanderia_nome_enxoval FROM lavanderia_enxoval where lavanderia_id_enxoval = ".$empresas->lavanderia_enxoval); 
while ($dados = mysql_fetch_array($consulta)) $renxoval = $dados['lavanderia_nome_enxoval'];

$consulta=mysql_query("SELECT lavanderia_nome_enfermagem FROM lavanderia_enfermagem where lavanderia_id_enfermagem = ".$empresas->lavanderia_enfermagem); 
while ($dados = mysql_fetch_array($consulta)) $renfermagem = $dados['lavanderia_nome_enfermagem'];

$consulta=mysql_query("SELECT nome FROM usuarios where id = ".$empresas->lavanderia_usuario); 
while ($dados = mysql_fetch_array($consulta)) $rnome = $dados['nome'];

print "<tr bordercolor='#ccc'>
    <td width='10%' align='center'><b>".date('d/m/Y', strtotime($empresas->data_hora))."</b></td>
    <td width='15%' align='left'>".$rlocal."</td>
	<td width='15%' align='left'><b>".$renxoval."</b></td>
	<td width='10%' align='center'><b>".$empresas->contagem_padrao."</b></td>
	<td width='10%' align='center'><b>".$empresas->contagem_existente."</b></td>
	<td width='10%' align='center'><b>".$empresas->contagem_entrega."</b></td>
    <td width='15%' align='left'>".$rnome."</td>
    <td width='15%' align='center'>".$renfermagem."</td>
  </tr>
";}
print "
</tbody>
</table>";
?>
            <br />
            <form enctype="multipart/form-data" action="excel.php" method="post" name="formulario" id="formulario">
            <input type="text" value="<? echo $sql ?>" name="excel2" hidden="hidden" id="excel2"  />
              <input type="button" name="volta" id="volta" value="Voltar" onclick="history.go(-1)" />
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
              <!-- <input type="submit" name="excelsgi" id="excelsgi" value="Gerar Excel" /> -->
            </form>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Relatório de Lavanderia - Entrega Extra</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET')
	{	$where = Array();
		$u = $_GET['u'];
		$l = $_GET['l'];
		$e = $_GET['e'];
		$c = $_GET['c'];
		$inicio2 = $_GET['inicio2'];
		$final2 = $_GET['final2'];
		$o = $_GET['o'];
		
if($inicio2!=""){
	$inicio2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio2'])));
	$final2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final2'])));}
	else{$inicio2="1900-01-01"; $final2="2900-12-31";}
		
		if( $u ){ $where[] = " lavanderia_usuario = '{$u}'"; }
		if( $l ){ $where[] = " lavanderia_local = '{$l}'"; }
		if( $e ){ $where[] = " lavanderia_enxoval = '{$e}'"; }
		if( $c ){ $where[] = " lavanderia_enfermagem = '{$c}'"; }
		if( $inicio2 ){ $where[] = " data_hora BETWEEN '{$inicio2}' and '{$final2}'"; }}
		
		$sql = "SELECT * FROM lavanderia_extra ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
			
			$sql .= $o;

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);

/*".$sql."<br /> $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Entregas Realizadas<br />
<br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example2' class='display'><strong>
<thead style='line-height: 2; color:#fff; background-color:#FF6464' >
<tr><td width='10%' align='center'>DATA DA ENTREGA</td>
	<td width='20%' align='center'>LOCAL</td>
	<td width='20%' align='center'>ENXOVAL</td>
	<td width='10%' align='center'>QTD ENTREGUE</td>
    <td width='20%' align='center'>COLABORADOR</td>
    <td width='20%' align='center'>ENFERMEIRO</td>
</tr>
</thead>
</strong>
<tbody>";

while($empresas = mysql_fetch_object($q_empresas)){

$consulta=mysql_query("SELECT lavanderia_nome_local FROM lavanderia_local where lavanderia_id_local = ".$empresas->lavanderia_local); 
while ($dados = mysql_fetch_array($consulta)) $rlocal = $dados['lavanderia_nome_local'];

$consulta=mysql_query("SELECT lavanderia_nome_enxoval FROM lavanderia_enxoval where lavanderia_id_enxoval = ".$empresas->lavanderia_enxoval); 
while ($dados = mysql_fetch_array($consulta)) $renxoval = $dados['lavanderia_nome_enxoval'];

$consulta=mysql_query("SELECT lavanderia_nome_enfermagem FROM lavanderia_enfermagem where lavanderia_id_enfermagem = ".$empresas->lavanderia_enfermagem); 
while ($dados = mysql_fetch_array($consulta)) $renfermagem = $dados['lavanderia_nome_enfermagem'];

$consulta=mysql_query("SELECT nome FROM usuarios where id = ".$empresas->lavanderia_usuario); 
while ($dados = mysql_fetch_array($consulta)) $rnome = $dados['nome'];

print "<tr bordercolor='#ccc'>
    <td width='10%' align='center'><b>".date('d/m/Y', strtotime($empresas->data_hora))."</b></td>
    <td width='20%' align='left'>".$rlocal."</td>
	<td width='20%' align='left'><b>".$renxoval."</b></td>
	<td width='10%' align='center'><b>".$empresas->contagem_entrega."</b></td>
    <td width='20%' align='left'>".$rnome."</td>
    <td width='20%' align='center'>".$renfermagem."</td>
  </tr>
";}
print "
</tbody>
</table>";
?>
            <br />
            <form enctype="multipart/form-data" action="excel.php" method="post" name="formulario" id="formulario">
            <input type="text" value="<? echo $sql ?>" name="excel2" hidden="hidden" id="excel2"  />
              <input type="button" name="volta" id="volta" value="Voltar" onclick="history.go(-1)" />
              <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
              <!-- <input type="submit" name="excelsgi" id="excelsgi" value="Gerar Excel" /> -->
            </form>

          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>