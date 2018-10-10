<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	

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
              <h1 class="super hairline bordered bordered-normal"> Relatório de Movimentações</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  >
            <?

if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();
		$supervisor = $_GET['s'];
		$motivo = $_GET['c'];
		$ordem = $_GET['o'];
		$re = $_GET['p'];
		$status = $_GET['status'];
		$inicio = $_GET['inicio'];
		$inicio2 = $_GET['inicio2'];
		$final = $_GET['final'];
		$final2 = $_GET['final2'];
		
if($inicio!=""){$inicio = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio'])));
$final = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final'])));}else{$inicio="";}

if($inicio2!=""){$inicio2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio2'])));
$final2 = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final2'])));}else{$inicio2="";}
		
		if( $supervisor ){ $where[] = " novasup = '{$supervisor}'"; }
		if( $motivo ){ $where[] = " movimentacao = '{$motivo}'"; }
		if( $re ){ $where[] = " re  LIKE '%$re%'"; }
		if( $status ){ $where[] = " status = '{$status}'"; }
		if( $inicio ){ $where[] = " data10 BETWEEN '{$inicio}' and '{$final}'"; }
		if( $inicio2 ){ $where[] = " date BETWEEN '{$inicio2}' and '{$final2}'"; }}
		
		$sql = "SELECT * FROM movimentacao ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
			$sql .= $ordem;
			

// Faz a query no banco de dados para o total desta página
$q_empresas = mysql_query($sql);
// Faz a query contando o total completo de resultados
$total = mysql_query($sql);
// Conta o total de registros
$totalreg = mysql_num_rows($total);

/*<br />   ".$sql."    $reg_inicial - $reg_final : <b>$cliente</b> - <b>$supervisor</b> - <b>$atividade</b> - <b>$conformidade</b> - <b>$palavra</b> - <b>$inicio - $final</b>*/
print "<br /><b>".$totalreg."</b> Movimentações Encontradas<br />
<br />

<strong>Legenda:</strong><br>
			<table style='color: #666666;' width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr >
			    <td width='4%' height='20px' align='left' style='background-color: #d9534f;'></td>
                <td width='1%' align='left'></td>
				<td width='95%' align='left'> = Em Atraso</td>
              </tr>
            </table>

<br />
<font size='-2'><strong>
<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0'><tr style='color:#FFF; background-color:#FF6464'>
    <td width='8%' align='center'>DATA DE ENVIO</td>
    <td width='10%' align='center'>DATA MOVIMENTAÇÃO</td>
    <td width='12%' align='center'>SUPERVISOR</td>
	<td width='12%' align='center'>GESTOR</td>
    <td width='15%' align='center'>FILIAL / POSTO</td>
	<td width='6%' align='center'>RE</td>
    <td width='16%' align='center'>NOME COLABORADOR</td>
    <td width='13%' align='center'>MOTIVO</td>
	<td width='8%' align='center'>STATUS</td>
	</tr></table></strong></font>";

if (!function_exists('diff_hour')) {
    /**
     * Get the difference in hours between two datetimes.
     *
     * @param $higher must be in 'Y-m-d H:i:s' format.
     * @param $lower must be in 'Y-m-d H:i:s' format.
     */
    function diff_hour($higher, $lower) {
        $t1 = strtotime($higher);
        $t2 = strtotime($lower);
        
        return abs($t1 - $t2) / 3600;
    }
}

if (!function_exists('diff_day')) {
	function diff_day($higher, $lower) {
        $t1 = strtotime($higher);
        $t2 = strtotime($lower);
        
        return floor($t1 - $t2) / (60 * 60 * 24);
    }
}

// Exibe os dados com orientação a objetos
while($empresas = mysql_fetch_object($q_empresas)){

$higher = $empresas->data10;//.' '.$empresas->hora5;
$lower = $empresas->date;//.' '.$empresas->hora_cad;

if (diff_day($higher, $lower) >= 2) {
	$bgcolor = "bgcolor='#EAEAEA'";
} else {
	$bgcolor = "bgcolor='#d9534f' style='color:#FFF'";
}

$mococa = mysql_query("SELECT G.nome FROM usuarios S, usuarios G WHERE G.id = S.gestor AND S.nome = '".$empresas->novasup."' LIMIT 1");

$nome_gestor = "";

while ($linha = mysql_fetch_array($mococa)) {
	$nome_gestor = $linha['nome'];
}

if ($_SESSION['nome'] != "Camila Sotelo" && $_SESSION['nome'] != "Cristiane Ribeiro"){
if ($empresas->status == "Pendente")
{$statusbot = "<a class='btn btn-warning'>Pendente</a>";};
if ($empresas->status == "Efetivado")
{$statusbot = "<a class='btn btn-info'>Efetivado</a>";};
if ($empresas->status == "Devolvido")
{$statusbot = "<a class='btn btn-danger'>Devolvido</a>";};
;} else {if ($empresas->status == "Pendente")
{$statusbot = "<a class='btn btn-warning' href='FOR2082.php?id=".$empresas->id."'>Pendente</a>";};
if ($empresas->status == "Efetivado")
{$statusbot = "<a class='btn btn-info' href='FOR2082.php?id=".$empresas->id."'>Efetivado</a>";};
if ($empresas->status == "Devolvido")
{$statusbot = "<a class='btn btn-danger'>Devolvido</a>";};;};

print "<font size='-2'><table width='100%' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0'><tr $bgcolor>
    <td width='8%' align='center'><b>".date('d/m/Y', strtotime($empresas->date))."</b></td>
    <td width='10%' align='center'><b>".date('d/m/Y', strtotime($empresas->data10))."</b></td>	
    <td width='12%' align='center'><b>".$empresas->novasup."</b></td>
	<td width='12%' align='center'><b>".$nome_gestor."</b></td>
    <td width='15%' align='center'>".$empresas->cliatual."</td>
    <td width='6%' align='center'>".$empresas->re."</td>
	<td width='16%' align='center'>".$empresas->nomecol."</td>
    <td width='13%' align='center'>".$empresas->movimentacao."".$empresas->outromotivo."</td>
	<td width='8%' align='center'>".$statusbot."</td>
  </tr>
</table>

</font>
";}

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
            <? echo "$ver_for_208"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); }; ?>
