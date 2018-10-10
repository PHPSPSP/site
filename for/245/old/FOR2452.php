<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
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
              <h1 class="super hairline bordered bordered-normal">FOR 245 - Encerramento de Contratos</h1>
            </header>
          </div>
        </div>
        
     <div class="row">
<div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>


<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/
$result=mysql_query("SELECT * FROM (SELECT * FROM for054fim ORDER BY campo4, campo8, data2 DESC) AS a GROUP BY a.campo19, campo4, cei order by campo4");

echo "

 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
  <tr>
	<th class='col-md-1  col-sm-1 col-xs-2 text-center'><b>Código</b></td>
    <th class='col-md-8  col-sm-8 col-xs-10 text-center'><b>Contratante</b></td>
	<th class='col-md-2  col-sm-2 col-xs-6 text-center'><b>CNPJ</b></td>
    <th class='col-md-1  col-sm-1 col-xs-6 text-center'><b>Ação</b></td>
  </tr></table></table>
  
";
while($row=mysql_fetch_array($result))
echo "
<table class='table table-hover table-condensed' style='margin-bottom:0'>
	<tr>
	<td class='col-md-1  col-sm-1 col-xs-2 text-left'><font size='-1'>".nl2br($row['cod'])."</font></td>
    <td class='col-md-8  col-sm-8 col-xs-10 text-left'>".nl2br($row['campo4'])." - ".nl2br($row['campo6'])." - ".nl2br($row['campo19'])."</td>
	<td class='col-md-2  col-sm-2 col-xs-6 text-center'>".nl2br($row['campo8'])."</td>
	<td class='col-md-1  col-sm-1 col-xs-6 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir(\"FOR2451.php?id=".$row['id']."\");'>Encerrar</a></td>
	</tr>
</table>
";
?>


<?php
/*select id, campo4, campo8 from for05412 UNION select id, campo4, campo8 from for054fim GROUP BY campo8 ORDER BY campo4*/

$result=mysql_query("SELECT * FROM (SELECT * FROM for05412 ORDER BY campo4, campo8, data2 DESC) AS a GROUP BY a.campo8 order by campo4");
while($row=mysql_fetch_array($result))
echo "

<table class='table table-hover table-condensed' style='margin-bottom:0'>
	<tr>
    <td class='col-md-8  col-sm-8 col-xs-12 text-left'>".nl2br($row['campo4'])." - ".nl2br($row['campo6'])."</td>
	<td class='col-md-2  col-sm-2 col-xs-6 text-center'>".nl2br($row['campo8'])."</td>
	<td class='col-md-2  col-sm-2 col-xs-6 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir(\"FOR245.php?id=".$row['id']."\");'>Encerrar</a></td>
	</tr>
</table>




";
?>

</div>
<div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_245"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>

<script type="text/javascript">function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente Encerrar esse Contrato?")) {
    document.location = delUrl;
  }
}

</script>
<? include("../roda.php"); ?>