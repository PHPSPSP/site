<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "adm"){
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
              <h1 class="super hairline bordered bordered-normal">Reenviar Implantações</h1>
            </header>
          </div>
        </div>
     <div class="row">

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/
$result=mysql_query("select * from for054fim order by id");
echo "
 <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
        <tr>
			<th class='col-md-2  col-sm-2 col-xs-6 text-center'>Cod / Usuário</th>
            <th class='col-md-2  col-sm-2 col-xs-6 text-center'>Atividade</th>
			<th class='col-md-5  col-sm-5 col-xs-6 text-center'>Contratante</th>
			<th class='col-md-1  col-sm-1 col-xs-6 text-center'>Data</th>
            <th class='col-md-2  col-sm-2 col-xs-6 text-center'>Ação</th>
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
			<td class='col-md-2  col-sm-2 col-xs-6 text-center'>".$row['cod']."<br>".nl2br($row['nomeuser'])."</td>
            <td class='col-md-2  col-sm-2 col-xs-6 text-left'>".nl2br($row['campo19']).nl2br($row['outraatv'])."</td>
			<td class='col-md-5  col-sm-5 col-xs-6 text-left'>".nl2br($row['campo4'])."</td>
			<td class='col-md-1  col-sm-1 col-xs-6 text-center'>".date('d/m/Y - H:i:s', strtotime($row['data2']))."</td>
            <td class='col-md-2  col-sm-2 col-xs-6 text-center'><a class='btn btn-info' href=\"amplred3.php?id=".$row['id']." & cabecalho=for054fim\">Reenviar PDF</a></td>
        </tr>
    </table>
</div>
";
?>

<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/

$result=mysql_query("select * from for05412 order by id");

while($row=mysql_fetch_array($result))
echo "	<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
    <table class='table table-hover table-condensed' style='margin-bottom:0'>
		<tr>
            <td class='col-md-2  col-sm-2 col-xs-6 text-center'>".$row['cod']."<br>".nl2br($row['nomeuser'])."</td>
            <td class='col-md-2  col-sm-2 col-xs-6 text-left'>".nl2br($row['campo19']).nl2br($row['outraatv'])."</td>
			<td class='col-md-5  col-sm-5 col-xs-6 text-left'>".nl2br($row['campo4'])."</td>
			<td class='col-md-1  col-sm-1 col-xs-6 text-center'>".date('d/m/Y - H:i:s', strtotime($row['data2']))."</td>
            <td class='col-md-2  col-sm-2 col-xs-6 text-center'><a class='btn btn-info' href=\"amplred3.php?id=".$row['id']." & cabecalho=for05412\">Reenviar PDF</a></td>
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

<? include("../roda.php"); ?>