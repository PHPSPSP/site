<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "cli"){
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
            <header class="text-center element-short-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"><img src='../../assets/images/SPSP-logo-top.png' alt='SPSP - Grupo Empresarial de Serviços' width="500"><br /><br /><br /><br /><br />
</h1>
              <h1 class="super hairline bordered bordered-normal"> Book de Colaboradores </h1>
            </header>
            
            
          </div>
        </div>
        <div style="clear:both; page-break-after:always"></div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center">
          <br />
     <?php
if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();

$cliente = $_GET['cliente'];
$cliente2 = $_GET['cliente2'];
$cliente3 = $_GET['cliente3'];
$cliente4 = $_GET['cliente4'];
$posto = $_GET['posto'];
$posto = $_GET['posto1'];
$posto = $_GET['posto2'];
$posto = $_GET['posto3'];
$posto = $_GET['posto4'];
$posto = $_GET['posto5'];
$posto = $_GET['posto6'];
if ($posto1!=""){$posto1p=" OR VI.CODPOS= $posto1";$parent="(";$parent2=")";};
if ($posto2!=""){$posto2p=" OR VI.CODPOS= $posto2";};
if ($posto3!=""){$posto3p=" OR VI.CODPOS= $posto3";};
if ($posto4!=""){$posto4p=" OR VI.CODPOS= $posto4";};
if ($posto5!=""){$posto5p=" OR VI.CODPOS= $posto5";};
if ($posto6!=""){$posto6p=" OR VI.CODPOS= $posto6";};
$supervisor = $_GET['supervisor'];
	if( $cliente2 != "" ){ $virg=", "; $pare=" in ("; $pare2=")"; } else {$pare="=";}
	if( $cliente3 != "" ){ $virg2=", ";}
			
		if( $cliente ){ $where[] = " VI.CODCLI $pare ".$cliente." $virg $cliente2 $virg2 $cliente3 $pare2 "; }
		if( $cliente4 ){ $where[] = " CL.NOMECLI like '%".$cliente4."%'"; }
		if( $posto ){ $where[] = $parent." VI.CODPOS=".$posto."".$posto1p."".$posto2p."".$posto3p."".$posto4p."".$posto5p."".$posto6p."".$parent2; }
		if( $supervisor ){ $where[] = " VI.AREA=REPLACE(".$supervisor.", '130', '')"; }
		{ $where[] = " VI.DTDEMISSAO IS NULL AND CL.CODCLI = VI.CODCLI AND PO.CODCLI = VI.CODCLI AND PO.CODPOS = VI.CODPOS AND DE.CODCID=VI.CODCID ORDER BY VI.NOMEVIGIL;"; }}
				
		$sql = "SELECT VI.SEXO, VI.CODVIGIL, VI.NOMEVIGIL, VI.DTADMISSAO, VI.ENDERECO, VI.COMPLEMENT, VI.BAIRRO, VI.CEP, VI.TELEFONE, VI.RG, VI.CGC, VI.CTPS, VI.CTPSER, VI.UFCTPS, VI.PIS, VI.DTNASC, VI.NOMEMAE, VI.NOMEPAI, CL.NOMECLI, PO.NOMEPOS, DE.NOMECID, DE.ESTADO, (SELECT DESCRICAO FROM sartab WHERE CODTAB LIKE CONCAT('130%', VI.AREA) LIMIT 1) DESCRICAO1, (SELECT DESCRICAO FROM sartab WHERE CODTAB LIKE CONCAT('140%', VI.ZONA) LIMIT 1) DESCRICAO2, (SELECT DESCRICAO FROM sartab WHERE CODTAB LIKE CONCAT('160%', VI.CARGO) LIMIT 1) DESCRICAO3 FROM sarvigil VI, sarclien CL, sarposto PO, sarcidad DE ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );

$q_empresas = mysql_query($sql);
$total = mysql_query($sql);
$totalreg = mysql_num_rows($total);			



			$totalNotFound = 0;
			
			while($empresas = mysql_fetch_object($q_empresas)){
				$img = 'img/' . $empresas->CODVIGIL . '.jpg';

				if (!file_exists(dirname(__FILE__) . '/' . $img)) {
					$totalNotFound++;
					if ($empresas->SEXO == 1) {
						$img = 'img/masc.jpg';
					} else {
						$img = 'img/fem.jpg';
					}
					
					
				}

/*<br />".$sql."<br />print "Total de ".$totalreg." colaboradores<br /><br />";*/
/*print "<br />";".$empresas->DESCRICAO2."</b><br />*/

print "
<table width='100%' align='center' border='1' bordercolor='#6c6c6c' cellspacing='0' cellpadding='0'>		
	<tr>
		<td align='center' width='20%' height='150px'>
		<img src='" . $img . "' width='100'>
		</td>
		<td style='padding-left:20px' width='80%'><br />
		Colaborador: <b>".$empresas->CODVIGIL."</b> - <font size='+1' color='#FF0000'><b>".utf8_encode($empresas->NOMEVIGIL)."</b></font><br />
		Cargo: <b>".utf8_encode($empresas->DESCRICAO3) ."</b><br />
		Data de Admissão: <b>".date('d/m/Y',strtotime($empresas->DTADMISSAO))."</b><br />
		Cliente / Posto: <b>".utf8_encode($empresas->NOMECLI)." - ".utf8_encode($empresas->NOMEPOS)."</b><br />
		Supervisor: <b>".utf8_encode($empresas->DESCRICAO1)."</b><br /><br />
		</td>	
	</tr>
	<tr>
		<td colspan='2' style='padding-left:20px' height='320px'><br />
		Endereço: <b>".utf8_encode($empresas->ENDERECO)."".$empresas->COMPLEMENT."</b><br />
		Bairro: <b>".utf8_encode($empresas->BAIRRO)."</b><br />
		Cidade/UF: <b>".utf8_encode($empresas->NOMECID)."/".utf8_encode($empresas->ESTADO)."</b><br />
		CEP: <b>".utf8_encode($empresas->CEP)."</b><br />
		Telefone: <b>".utf8_encode($empresas->TELEFONE)."</b><br /><br />
		RG: <b>".utf8_encode($empresas->RG)."</b><br />
		CPF: <b>".str_replace("/0000","",utf8_encode($empresas->CGC))."</b><br />
		CTPS: <b>".utf8_encode($empresas->CTPS)."-".utf8_encode($empresas->CTPSER)."/".utf8_encode($empresas->UFCTPS)."</b><br />
		PIS: <b>".utf8_encode($empresas->PIS)."</b><br /><br />
		Data de Nascimento: <b>".date('d/m/Y',strtotime($empresas->DTNASC))."</b><br />
		Nome da Mães: <b>".utf8_encode($empresas->NOMEMAE)."</b><br />
		Nome do Pai: <b>".utf8_encode($empresas->NOMEPAI)."</b><br /><br />
		</td>
	</tr>
</table><br />
";}

/*<br />".$sql."<br />print "Total de ".$totalNotFound." colaboradores sem foto";*/


?>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            Book de Colaboradores<br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
