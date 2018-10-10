<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm"){
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
              <h1 class="super hairline bordered bordered-normal">FOR 054 - Incompletos / Pendentes</h1>
            </header>
          </div>
        </div>
     <div class="row">
     
<?php
$result=mysql_query("select * from for054");
echo "
 <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
        <tr>
            <th class='col-md-2  col-sm-2 col-xs-6 text-center'>Atividade</th>
			<th class='col-md-4  col-sm-4 col-xs-6 text-center'>Contratante</th>
			<th class='col-md-2  col-sm-2 col-xs-6 text-center'>Usuário</th>
            <th class='col-md-4  col-sm-4 col-xs-6 text-center' colspan='2'>Ações</th>
            </tr>
	</thead>
    </table>
</div>
";
while($row=mysql_fetch_array($result))
echo "
	<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
    <table class='table table-hover table-condensed' style='margin-bottom:0'>
		<tr>
            <td class='col-md-2  col-sm-2 col-xs-6 text-left'>".nl2br($row['campo19']).nl2br($row['outraatv'])." id ".$row['id']."</td>
			<td class='col-md-4  col-sm-4 col-xs-6 text-left'>".nl2br($row['campo4'])."</td>
			<td class='col-md-2  col-sm-4 col-xs-6 text-left'>".nl2br($row['nomeuser'])."</td>
            <td class='col-md-2  col-sm-2 col-xs-3 text-center'><a class='btn btn-info' href='altera.php?id=".$row['id']."'>Completar</a></td>
            <td class='col-md-2  col-sm-2 col-xs-3 text-center'><a class='btn btn-danger' href=\"javascript:confirmExcluir('deletar.php?id=" .$row['id']."')\">Deletar</a></td>
        </tr>
    </table>
</div>
";
?>

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

<script type="text/javascript">
function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente excluir esse FOR?")) {
    document.location = delUrl;
  }
}
</script>
<? include("../roda.php"); ?>