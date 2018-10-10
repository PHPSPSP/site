<?
session_start();
include("privado.php");
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
if ($usuario != ''){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a essa lista.');
		window.location.href='index.php';
        </SCRIPT>");}else{};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>
<? include("topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Consulta de Currículos</h1>
            </header>
          </div>
        </div>
        <?

$pagina = $_GET['pagina'];
if(!$pagina){
	$page = "1";
}else{
	$page = $pagina;
}
$regs = 30;
$inicio = $page-1;
$inicio = $inicio*$regs;

if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();
		$regiao = $_GET['r'];
		$area = $_GET['a'];
		$situacao = $_GET['s'];
		$ordem = $_GET['o'];
		$sexo = $_GET['x'];
		$deficiente = $_GET['d'];
		$palavra = $_GET['p'];
		$comeco = $_GET['comeco'];
		$termino = $_GET['termino'];

if($comeco!=""){$comeco = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['comeco'])));
$termino = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['termino'])));}else{$comeco="";}

$area2 = $_GET['a'];switch ($area2) {case "": $chave2 = ""; break;case !"": $chave2 = " ) "; break;}

$final = " limit $inicio,$regs ";

if ($regiao == "" &&  $situacao == "" &&  $sexo == "" &&  $comeco == "" &&  $termino == "" &&  $palavra == "" &&  $deficiente == "") {
$andw = " WHERE"; $chave = " GROUP BY nome,end,mensagem $ordem ";} else {
$andw = " AND ("; $chave = " $chave2 GROUP BY nome,end,mensagem $ordem ";}

		if( $area ){ $where2[] = " area1 = '{$area}'"; }
		if( $area ){ $where2[] = " area2 = '{$area}'"; }
		if( $area ){ $where2[] = " area3 = '{$area}'"; }
		if( $area ){ $where2[] = " area4 = '{$area}'"; }
		if( $area ){ $where2[] = " area5 = '{$area}'"; }
		if( $area ){ $where2[] = " area6 = '{$area}'"; }
		if( $area ){ $where2[] = " area7 = '{$area}'"; }
		if( $area ){ $where2[] = " area8 = '{$area}'"; } 
		if( $regiao ){ $where[] = " regiao = '{$regiao}'"; }
		if( $sexo ){ $where[] = " sexo = '{$sexo}'"; }
		if( $deficiente ){ $where[] = " deficiente = '{$deficiente}'"; }
		if( $palavra ){ $where[] = " CONCAT (nome, email, serie1, nest1, ncurso1, serie2, ncurso2, nest2, ncurso3, nest3, ncurso4, nest4, emp1, cargo1, emp2, cargo2, mensagem) LIKE '%$palavra%'"; }
		if( $comeco ){ $where[] = " date BETWEEN '{$comeco}' and '{$termino}'"; }
		if( $situacao ){ $where[] = " status = '{$situacao}'"; }}
		
		
		$sql = "SELECT * FROM curric ";
		if( sizeof( $where ) ) $sql .= ' WHERE '.implode( ' AND ',$where );
		if( sizeof( $where2 ) ) $sql .=  $andw .implode ( ' OR ',$where2 );
			$sql .= $chave;
			$sql .= $final;

			
				
		$sql2 = "SELECT * FROM curric ";
		if( sizeof( $where ) ) $sql2 .= ' WHERE '.implode( ' AND ',$where );
		if( sizeof( $where2 ) ) $sql2 .=  $andw .implode ( ' OR ',$where2 );
			$sql2 .= $chave;



// Faz a query no banco de dados para o total desta página
$q_empresas = mysql_query($sql);
// Faz a query contando o total completo de resultados
$total = mysql_query($sql2);
// Conta o total de registros
$totalreg = mysql_num_rows($total);
// Verifica o número total de páginas, e arredonda o valor
$totalpag = ceil($totalreg/$regs);

/*".$sql."<br />".$sql2."<br />*/

print "
<br /><b>".$totalreg."</b> Curriculos Encontrados<br />
<br />

			<div class='os-animation animated fadeIn table-responsive' data-os-animation='fadeIn' data-os-animation-delay='0s' style='animation-delay: 0s;'>
			<table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
			<tr>
            <th class='col-md-4  col-sm-4 col-xs-4 text-center'>Nome</th>
			<th class='col-md-2  col-sm-2 col-xs-2 text-center'>Região</th>
			<th class='col-md-2  col-sm-2 col-xs-2 text-center'>Data Cadastro</th>
			<th class='col-md-2  col-sm-2 col-xs-2 text-center'>Situação</th>
            <th colspan='2' class='col-md-2  col-sm-2 col-xs-2 text-center'>Ações</th>
            </tr>
			</thead>
			</table>
            </div>
			";

// Exibe os dados com orientação a objetos
while($empresas = mysql_fetch_object($q_empresas)){	print "
            <div class='os-animation animated fadeIn table-responsive' data-os-animation='fadeIn' data-os-animation-delay='0s' style='animation-delay: 0s;'>

    <table class='table table-hover table-condensed' style='margin-bottom:0'>
<tr>
            <td class='col-md-4  col-sm-4 col-xs-4 text-left'>".$empresas->nome." ".$empresas->image."</td>
			<td class='col-md-2  col-sm-2 col-xs-2 text-center'>".$empresas->regiao."</td>
			<td class='col-md-2  col-sm-6 col-xs-2 text-center'>".date('d/m/Y', strtotime($empresas->date))."</td>
			<td class='col-md-2  col-sm-2 col-xs-2 text-center'><img src='img/".$empresas->status."0.png' width='18' height='18' title='".$empresas->image2."'/> &nbsp;&nbsp; ".$empresas->status."</td>
            <td class='col-md-1  col-sm-1 col-xs-1 text-center'><a class='btn btn-info' href=\"alterac.php?id=".$empresas->id."\">Alterar</a></td>
            <td class='col-md-1  col-sm-1 col-xs-1 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir(\"deletar2.php?id=" . $empresas->id . "\");'>Excluir</a></td>
        </tr>
    </table>
	</div>
";}
print "<br />";

$url = $_SERVER ['REQUEST_URI'];

$filtro = array('&pagina=2' => '','&pagina=3' => '','&pagina=4' => '','&pagina=5' => '','&pagina=6' => '','&pagina=7' => '','&pagina=8' => '','&pagina=9' => '','&pagina=10' => '','&pagina=11' => '','&pagina=12' => '','&pagina=13' => '','&pagina=14' => '','&pagina=15' => '','&pagina=16' => '','&pagina=17' => '','&pagina=18' => '','&pagina=19' => '','&pagina=20' => '','&pagina=21' => '','&pagina=22' => '','&pagina=23' => '','&pagina=24' => '','&pagina=25' => '','&pagina=26' => '');

$texto = "SPSP";

$url2 = strTr($url, $filtro);


// Criaremos os Links para o Anterior e Próximo
$prevlink = $page-1;
$nextlink = $page+1;

// Verifica se existe Página Anterior
if($page > 1){    print "<a href=\"$url2&pagina=".$prevlink."\"><input type='button' name='volta' class='btn btn-info' value='Alterior'/></a>";}else{	print "";}

// Imprime o Espaçamento, e as informações (1 de 10) Páginas
print " (".$page." de ".$totalpag.") ";

// Verifica se existe Próxima Página
if($page < $totalpag){    print "<a href=\"$url2&pagina=".$nextlink."\"><input type='button' name='volta' class='btn btn-info' value='Próxima'/></a>";}else{	print "";}

?>
        <br />
        <br />
        <input type="button" name="volta" id="volta" value="Pesquisar Novamente" onclick="window.location.href='relatorio.php';" />
        <br />
        <br />
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">
function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente excluir esse currículo?")) {
    document.location = delUrl;  }}
</script>
<? include("roda.php"); ?>
