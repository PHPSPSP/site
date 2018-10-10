<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../listas.php");

$noome = $_SESSION['nome'];
$ano_for = date('Y');

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "lid" && $_SESSION['tipo'] != "cli"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>


<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<link rel='shortcut icon' href='http://www.spsp.com.br/assets/images/SPSP-favicon.ico' />
<title>Grupo SPSP - FOR Online</title>
<meta name='description' content='SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade.'/>
<meta name='keywords' content='trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa'/>
<meta name='copyright' content='SPSP'/>
<meta name='author' content='SPSP'/>
<meta name='email' content='spsp@spsp.com.br'/>
<meta name='Charset' content='UTF-8'/>
<meta name='Distribution' content='Global'/>
<meta name='Rating' content='General'/>
<meta name='Robots' content='INDEX,FOLLOW'/>
<meta name='Revisit-after' content='31 Days'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta content='yes' name='apple-mobile-web-app-capable'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
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
<link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
<script src='http://code.jquery.com/jquery-1.12.4.min.js'></script>
</head>
<body class='normal-header'  onload='time()'>
<div id='masthead' class='navbar navbar-static-top navbar-stuck navbar-scrolled swatch-white' role='banner'>
  <div class='container'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.main-navbar'> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
      <a href='../../index.php' class='navbar-brand'> <img src='../../assets/images/SPSP-logo-top.png' alt='SPSP - Grupo Empresarial de Serviços'></a> </div>
    <nav >
      <ul id='menu-one-page' class='nav navbar-nav navbar-left'>
		<li><a>Olá <b><?php echo $noome ?></b> - <span id='txt'></span></a></li>
      </ul>
    </nav>
    <nav class='collapse navbar-collapse main-navbar' role='navigation'>
      <ul id='menu-one-page' class='nav navbar-nav navbar-right'>
        <li><a href='../logado.php'>Início</a></li>
        <li><a href='../altsenha.php'>Alterar Senha</a></li>
        <li><a href='../reg.php'>Configuração</a></li>
        <li class='nav-highlight'><a href='$url/logout.php'>Sair do Sistema</a> </li>
      </ul>
    </nav>
  </div>
</div>



    


<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal" style="font-size: 30px;"> Tempo de Setup</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center">
            <?

if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();
		$lider = $_GET['l'];
		$cliente = $_GET['p'];
		$tipolimpeza = $_GET['tl'];
		$ordem = $_GET['o'];
		$colaborador = $_GET['c'];
		$inicio2 = $_GET['inicio2'];
		$final2 = $_GET['final2'];
		$ordemservico = " AND (os01!='' OR os02!='' OR os03!='' OR os04!='' OR os05!='' OR os06!='' OR os07!='' OR os08!='' OR os09!='' OR os10!='' OR os11!='' OR os12!='' OR os13!='' OR os14!='' OR os15!='' OR os16!='' OR os17!='' OR os18!='' OR os19!='' OR os20!='' OR os21!='' OR os22!='' OR os23!='' OR os24!='' OR os25!='' OR os26!='')";
		
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
	
			$sql .= $ordemservico;
			$sql .= ' group by quarto, horafin, horaliberado, horain'.$ordem;

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);

/*".$sql."<br /> $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Quartos com Abertura de Ordem de Serviço<br />
<br />

<strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'><strong>
<thead style='line-height: 2; color:#fff; background-color:#FF6464' >
<tr>    <td width='10%' align='center'>DATA LIMPEZA</td>
	<td width='10%' align='center'>TIPO</td>
	<td width='15%' align='center'>LÍDER</td>
    <td width='25%' align='center'>COLABORADOR</td>
    <td width='8%' align='center'>QUARTO</td>
	<td width='20%' align='center'>ITEM</td>
	<td width='12%' align='center'>CHAMADO</td>
		</tr>
	</thead>
	
	</strong>
	<tbody>";

while($empresas = mysql_fetch_object($q_empresas)){

if ($empresas->os01=="") {$eos01="style='display:none'";} else {$eos01="style=''";};
if ($empresas->os02=="") {$eos02="style='display:none'";} else {$eos02="style=''";};
if ($empresas->os03=="") {$eos03="style='display:none'";} else {$eos03="style=''";};
if ($empresas->os04=="") {$eos04="style='display:none'";} else {$eos04="style=''";};
if ($empresas->os05=="") {$eos05="style='display:none'";} else {$eos05="style=''";};
if ($empresas->os06=="") {$eos06="style='display:none'";} else {$eos06="style=''";};
if ($empresas->os07=="") {$eos07="style='display:none'";} else {$eos07="style=''";};
if ($empresas->os08=="") {$eos08="style='display:none'";} else {$eos08="style=''";};
if ($empresas->os09=="") {$eos09="style='display:none'";} else {$eos09="style=''";};
if ($empresas->os10=="") {$eos10="style='display:none'";} else {$eos10="style=''";};
if ($empresas->os11=="") {$eos11="style='display:none'";} else {$eos11="style=''";};
if ($empresas->os12=="") {$eos12="style='display:none'";} else {$eos12="style=''";};
if ($empresas->os13=="") {$eos13="style='display:none'";} else {$eos13="style=''";};
if ($empresas->os14=="") {$eos14="style='display:none'";} else {$eos14="style=''";};
if ($empresas->os15=="") {$eos15="style='display:none'";} else {$eos15="style=''";};
if ($empresas->os16=="") {$eos16="style='display:none'";} else {$eos16="style=''";};
if ($empresas->os17=="") {$eos17="style='display:none'";} else {$eos17="style=''";};
if ($empresas->os18=="") {$eos18="style='display:none'";} else {$eos18="style=''";};
if ($empresas->os19=="") {$eos19="style='display:none'";} else {$eos19="style=''";};
if ($empresas->os20=="") {$eos20="style='display:none'";} else {$eos20="style=''";};
if ($empresas->os21=="") {$eos21="style='display:none'";} else {$eos21="style=''";};
if ($empresas->os22=="") {$eos22="style='display:none'";} else {$eos22="style=''";};
if ($empresas->os23=="") {$eos23="style='display:none'";} else {$eos23="style=''";};
if ($empresas->os24=="") {$eos24="style='display:none'";} else {$eos24="style=''";};
if ($empresas->os25=="") {$eos25="style='display:none'";} else {$eos25="style=''";};
if ($empresas->os26=="") {$eos26="style='display:none'";} else {$eos26="style=''";};

print "

<tr  ". $eos01 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Cama</td>
<td width='12%' align='center'>".$empresas->os01."</td>
</tr>

<tr  ". $eos02 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Colchão</td>
<td width='11%' align='center'>".$empresas->os02."</td>
</tr>

<tr  ". $eos03 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Mesa Cabeceira</td>
<td width='11%' align='center'>".$empresas->os03."</td>
</tr>

<tr  ". $eos04 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Suporte de Soro</td>
<td width='11%' align='center'>".$empresas->os04."</td>
</tr>

<tr  ". $eos05 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Escadinha</td>
<td width='11%' align='center'>".$empresas->os05."</td>
</tr>

<tr  ". $eos06 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Poltrona/Sofá</td>
<td width='11%' align='center'>".$empresas->os06."</td>
</tr>

<tr  ". $eos07 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Toalheiro</td>
<td width='11%' align='center'>".$empresas->os07."</td>
</tr>

<tr  ". $eos08 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Papeleira</td>
<td width='11%' align='center'>".$empresas->os08."</td>
</tr>

<tr  ". $eos09 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Saboneteira</td>
<td width='11%' align='center'>".$empresas->os09."</td>
</tr>

<tr  ". $eos10 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Armário</td>
<td width='11%' align='center'>".$empresas->os10."</td>
</tr>

<tr  ". $eos11 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>TV</td>
<td width='11%' align='center'>".$empresas->os11."</td>
</tr>

<tr  ". $eos12 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Controle Remoto</td>
<td width='11%' align='center'>".$empresas->os12."</td>
</tr>

<tr  ". $eos13 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Controle Ar Condicionado</td>
<td width='11%' align='center'>".$empresas->os13."</td>
</tr>

<tr  ". $eos14 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Caixa Acoplada Banheiro</td>
<td width='11%' align='center'>".$empresas->os14."</td>
</tr>

<tr  ". $eos15 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Vaso Sanitário</td>
<td width='11%' align='center'>".$empresas->os15."</td>
</tr>

<tr  ". $eos16 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Lixeira</td>
<td width='11%' align='center'>".$empresas->os16."</td>
</tr>

<tr  ". $eos17 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Espelho</td>
<td width='11%' align='center'>".$empresas->os17."</td>
</tr>

<tr  ". $eos18 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Barra de Proteção</td>
<td width='11%' align='center'>".$empresas->os18."</td>
</tr>

<tr  ". $eos19 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Lâmpadas</td>
<td width='11%' align='center'>".$empresas->os19."</td>
</tr>

<tr  ". $eos20 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Ralos</td>
<td width='11%' align='center'>".$empresas->os20."</td>
</tr>

<tr  ". $eos21 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Espelho de Tomada</td>
<td width='11%' align='center'>".$empresas->os21."</td>
</tr>

<tr  ". $eos22 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Pisos</td>
<td width='11%' align='center'>".$empresas->os22."</td>
</tr>

<tr  ". $eos23 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Paredes</td>
<td width='11%' align='center'>".$empresas->os23."</td>
</tr>

<tr  ". $eos24 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Portas e Maçanetas</td>
<td width='11%' align='center'>".$empresas->os24."</td>
</tr>

<tr  ". $eos25 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Mini Bar</td>
<td width='11%' align='center'>".$empresas->os25."</td>
</tr>

<tr  ". $eos26 .">
<td width='10%' align='center'>".date('d/m/Y', strtotime($empresas->data))."</td>
<td width='10%' align='left'>".$empresas->tipolimpeza."</td>
<td width='15%' align='left'>".$empresas->usuario."</td>
<td width='25%' align='left'>".$empresas->colaborador."</td>
<td width='8%' align='center'>".$empresas->quarto."</td>
<td width='20%' align='center'>Telefone</td>
<td width='11%' align='center'>".$empresas->os26."</td>
</tr>
";

}

print "
</tbody>
</table>";

?>
            <br />
            <form enctype="multipart/form-data" action="excel2.php" method="post" name="formulario" id="formulario">
            <input type="text" value="<? echo $sql ?>" name="excel2" hidden="hidden" id="excel2"  />
            <input type="text" value="<? echo $totalreg ?>" name="totalreg" hidden="hidden" id="totalreg"  />
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
<section id='services' class='section swatch-black' style='min-height:50px'>
  <div class='background-overlay grid-overlay-0 ' style='background-color: rgba(60,60,60,1);'></div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 '>
        <header class='text-center element-small-top element-small-bottom condensed'>
          <div class='row'>
            <div class='col-md-12 '>
              <div class='col-md-6 col-sm-6 col-xs-12'> <img src='../../assets/images/SPSP-logo-bott.png' alt='SPSP - Grupo Empresarial de Serviços' style='height: 70px !important'> </div>
              <div class='col-md-6 col-sm-6 col-xs-12' style='text-align:center; line-height:1 !important'> <br>
                SPSP - Sistema de Prestação de Serviços Padronizados<br>
                Todos os direitos reservados - Marília/SP - <?php echo $ano_for ?> </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  </div>
</section>
<script src='../../assets/js/packages.min.js'></script> 
<script src='../../assets/js/theme.min.js'></script> 

<script language='javascript' type='text/javascript'>

function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();

   	str_segundo = new String (s);
	if (str_segundo.length == 1)
      	s = '0' + s;

   	str_minuto = new String (m);
   	if (str_minuto.length == 1)
      	m = '0' + m;

   	str_hora = new String (h);
   	if (str_hora.length == 1)
      	h = '0' + h;

document.getElementById('txt').innerHTML=h+':'+m+':'+s;


setTimeout('time()',1000);
} 


    </script>
</body>
</html>
<!--<tr ". $eos#01# .">*<td width='#01#' align='center'><b>".date('d/m/Y', strtotime($empresas->data))."</b></td>*<td width='#01#' align='left'><b>".$empresas->cliente1."</b></td>*<td width='#01#' align='left'><b>".$empresas->usuario."</b></td>*<td width='#01#' align='left'>".$empresas->colaborador."</td>*<td width='#01#' align='center'>".$empresas->quarto."</td>*<td width='#01#' align='center'>#Cama#</td>*<td width='#01#' align='center'>".$empresas->os#01#."</td>*</tr>-->