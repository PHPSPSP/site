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
              <h1 class="super hairline bordered bordered-normal">Proposta Comercial Enviadas</h1>
            </header>
          </div>
        </div>
        
     <div class="row">

            <?php
	if ($_SESSION['nome'] == "Gustavo Guedes" && $_SESSION['nome'] == "Rodolfo Martini" && $_SESSION['nome'] == "Daniel Garcia"){
	$result=mysql_query("select * from (select * from proposta WHERE usuario='".$_SESSION['nome']."'  ORDER BY cod DESC, nomecliente) AS a GROUP BY a.idd");}else{
    if ($_SESSION['nome'] == "Mary Stella"){
      $result=mysql_query("select * from (select * from proposta WHERE usuario='".$_SESSION['nome']."' and usuario='Marcello Cross' ORDER BY cod DESC, nomecliente) AS a GROUP BY a.idd");} else {
	$result=mysql_query("select * from (select * from proposta ORDER BY cod DESC, nomecliente) AS a GROUP BY a.idd");	}; };
		
echo "
 <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>
 <table class='table table-hover table-condensed' style='margin-bottom:0'><thead>
        <tr>
            <th class='col-md-6  col-sm-6 col-xs-6 text-center'>Cliente</th>
			<th class='col-md-2  col-sm-2 col-xs-2 text-center'>Código</th>
            <th colspan='2' class='col-md-4  col-sm-4 col-xs-4 text-center'>Ações</th>
            </tr>
</thead>
              </table>
            </div>
";
while($row=mysql_fetch_array($result))echo "
            <div class=' animated fadeIn table-responsive' data-='fadeIn' data--delay='0s' style='animation-delay: 0s;'>

    <table class='table table-hover table-condensed' style='margin-bottom:0'>
<tr>
            <td class='col-md-6  col-sm-6 col-xs-6 text-left'>".nl2br($row['nomecliente'])."</td>
			<td class='col-md-2  col-sm-2 col-xs-2 text-left'>".nl2br($row['codpro'])."</td>
            <td class='col-md-2  col-sm-2 col-xs-2 text-center'><a class='btn btn-info' href='FOR0602.php?id=".$row['id']."'>Alterar Proposta</a></td>
            <td class='col-md-2  col-sm-2 col-xs-2 text-center'><a class='btn btn-danger' href='FOR0603.php?id=" .$row['id']."'>Nova Proposta</a></td>
        </tr>
    </table>
</div>
";
?>


          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_60"; ?><br />
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