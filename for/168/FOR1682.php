<?
session_start();
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.location.href='../logado.php';
        </SCRIPT>");}else{  };

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
              <h1 class="super hairline bordered bordered-normal">Lista de Clientes Cadastrados</h1>
            </header>
          </div>
        </div>
        
     <div class="row">

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4  GROUP BY campo8*/
$result=mysql_query("select * from for054fim GROUP BY campo14, campo4, cei, campo8 ORDER BY campo4");
echo "

 <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
        <tr>
            <th class='col-md-6 col-sm-6 col-xs-6 text-center'>Cliente</th>
			<th class='col-md-3 col-sm-3 col-xs-3 text-center'>CNPJ</th>
			<th class='col-md-3 col-sm-3 col-xs-3 text-center'>Alterar</th>
            </tr>
	</thead>
    </table>
</div>
";
while($row=mysql_fetch_array($result))
echo "<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
    <table class='table table-hover table-condensed' style='margin-bottom:0'><tr>
    <td class='col-md-6 col-sm-6 col-xs-6 text-left'><a href=\"../054/altera2.php?id=".$row['id']."\">".nl2br($row['campo4'])." - ".nl2br($row['campo14'])."</a></td>
    <td class='col-md-3 col-sm-3 col-xs-3 text-center'>".nl2br($row['campo8'])."</td>
    <td class='col-md-3 col-sm-3 col-xs-3 text-center'><a class='btn btn-info' href=\"alterad.php?id=".$row['id']."\">Alterar Dados</a></td>
</tr></table></div>";
?>

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4  GROUP BY campo8*/
$result=mysql_query("select * from for054arq GROUP BY campo14, campo4, cei, campo8 ORDER BY campo4");
while($row=mysql_fetch_array($result))
echo "<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
    <table class='table table-hover table-condensed' style='margin-bottom:0'><tr>
    <td class='col-md-6 col-sm-6 col-xs-6 text-left'><a href=\"../054/altera4.php?id=".$row['id']."\">".nl2br($row['campo4'])." - ".nl2br($row['campo14'])."</a></td>
    <td class='col-md-3 col-sm-3 col-xs-3 text-center'>".nl2br($row['campo8'])."</td>
    <td class='col-md-3 col-sm-3 col-xs-3 text-center'></td>
</tr></table></div>";/*<a class='btn btn-info' href=\"alterad2.php?id=".$row['id']."\">Alterar Dados</a>*/
?>

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/
$result=mysql_query("select * from for05412 GROUP BY campo4, cei, campo8 ORDER BY campo4");
while($row=mysql_fetch_array($result))
echo "<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
    <table class='table table-hover table-condensed' style='margin-bottom:0'><tr>
    <td class='col-md-6 col-sm-6 col-xs-6 text-left'><a href=\"../for/054/altera3.php?id=".$row['id']."\">".nl2br($row['campo4'])."</a></td>
    <td class='col-md-3 col-sm-3 col-xs-3 text-center'>".nl2br($row['campo8'])."</td>
	<td class='col-md-3 col-sm-3 col-xs-3 text-center'></td>
</tr></table></div>";
?>

          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_168"; ?><br />
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