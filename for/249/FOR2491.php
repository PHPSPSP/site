<?

session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};
		
$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$usuario22 = $linha['nomeuser'];
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
              <h1 class="super hairline bordered bordered-normal">Cancelamento e Encerramento de Serviços</h1>
            </header>
          </div>
        </div>
        
     <div class="row">

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/
$result=mysql_query("SELECT * FROM (SELECT * FROM for054fim ORDER BY campo4, campo8, data2 DESC) AS a GROUP BY a.campo19, campo4, campo14, cei order by campo4");
echo " <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
  <tr>
    <th class='col-md-5  col-sm-5 col-xs-8 text-center'><b>Contratante</b></td>
	<th class='col-md-2  col-sm-2 col-xs-4 text-center'><b>Atividade</b></td>
    <th class='col-md-3  col-sm-3 col-xs-6 text-center'><b>Data</b></td>
    <th colspan='2' class='col-md-2  col-sm-2 col-xs-6 text-center'><b>Ações</b></td>
  </tr></table></table>";
while($row=mysql_fetch_array($result))
echo "<table class='table table-hover table-condensed' style='margin-bottom:0'>
	<tr>
    <td class='col-md-5  col-sm-5 col-xs-8 text-left'>".nl2br($row['campo4'])." - ".nl2br($row['campo14'])."</td>
	<td class='col-md-2  col-sm-2 col-xs-4 text-left'>".nl2br($row['campo19']).nl2br($row['outraatv'])."</td>
    <td class='col-md-3  col-sm-3 col-xs-6 text-center'>".date('d/m/Y - H:i:s', strtotime($row['data2']))."</td>
	<td class='col-md-1  col-sm-1 col-xs-3 text-center'><a class='btn btn-info' href='javascript:confirmExcluir(\"deletar3.php?id=".$row['id']."\");'>Cancelar</a></td>
	<td class='col-md-1  col-sm-1 col-xs-3 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir2(\"FOR249.php?id=".$row['id']."\");'>Encerrar</a></td>
	</tr>
</table>";
?>

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/
$result=mysql_query("SELECT * FROM (SELECT * FROM for05412 ORDER BY campo4, campo8, data2 DESC) AS a GROUP BY a.campo19, campo4 campo14,  order by campo4");
while($row=mysql_fetch_array($result))
echo "<table class='table table-hover table-condensed' style='margin-bottom:0'>
	<tr>
    <td class='col-md-5  col-sm-5 col-xs-8 text-left'>".nl2br($row['campo4'])." - ".nl2br($row['campo14'])."</td>
	<td class='col-md-2  col-sm-2 col-xs-4 text-left'>".nl2br($row['campo19']).nl2br($row['outraatv'])."</td>
    <td class='col-md-3  col-sm-3 col-xs-6 text-center'>".date('d/m/Y - H:i:s', strtotime($row['data2']))."</td>
	<td class='col-md-1  col-sm-1 col-xs-3 text-center'><a class='btn btn-info' href='javascript:confirmExcluir(\"deletar2.php?id=" . $row['id'] . "\");'>Cancelar</a></td>
	<td class='col-md-1  col-sm-1 col-xs-3 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir2(\"FOR2492.php?id=".$row['id']."\");'>Encerrar</a></td>
	</tr>
</table>";
?>

<div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_249"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>

<script type="text/javascript">
function confirmExcluir(delUrl) {  if (confirm("ATENÇÃO\n.\nEssa opção NÃO pode ser utilizada para ENCERRAR serviços, somente para CANCELAMENTO de implantações de serviços que ainda não foram iniciadas.\n.\nDeseja realmente cancelar esse FOR?")) {    document.location = delUrl;  }}
function confirmExcluir2(delUrl) {  if (confirm("ATENÇÃO\n.\nEssa opção NÃO pode ser utilizada para CORREÇÕES de FOR enviados, somente para ENCERRAMENTO de serviços.\n.\nDeseja realmente encerrar esse FOR?")) {    document.location = delUrl;  }}
</script>
<? include("../roda.php"); ?>