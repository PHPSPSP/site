<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "sgi" && $_SESSION['tipo'] != "adm"){
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
              <h1 class="super hairline bordered bordered-normal"> Lista de Check List Enviados</h1>
            </header>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
            
            

<?php

$result=mysql_query("select * from checklist1");

echo "<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0'><tr style='color:#FFF; background-color:#FF6464'>
    <td align='center' width='30%'><b>Cliente</b></td>
	<td align='center' width='50%'><b>Atividade</b></td>
	<td align='center' width='10%'><b>Data</b></td>
    <td align='center' width='10%'><b>Ação</b></td>
  </tr></table>";
while($row=mysql_fetch_array($result)) {
	$sp = explode(' ', $row['dataout']);
	$exp = explode('-', $sp[0]);
	$data = $exp[2] . '/' . $exp[1] . '/' . $exp[0]; 
echo "<table width='100%' border='1' bordercolor='#fff' cellspacing='0' cellpadding='0'><tr bgcolor='#EAEAEA'>
    <td width='30%' align=left>";
	$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $row['cliente'] . "'");
	$cliente_posto = '';
	while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {$cliente_posto = $cliente_hk['NOMECLI'];}
echo 	$cliente_posto ."</td>
    <td width='50%' align=left>".nl2br($row['ativ'])."</td>
    <td width='10%' align=left>".$data."</td>
    <td width='10%' align='center'><a href=\"FOR144f.php?id=".$row['id']."\"><font color='#0099FF'>Reenviar</font></a></td>
  </tr>
</table>";
}

?>

</div>
            <div class="col-md-12 text-left small-screen-center "  > <br />
              <br />
              <? echo "$ver_for_144"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>