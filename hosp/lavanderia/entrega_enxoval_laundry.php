<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5" && $_SESSION['tipo'] != "9" && $_SESSION['tipo'] != "2"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];

?>

<script src='http://code.jquery.com/jquery-1.12.4.min.js'></script>

<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-short-top element-medium-bottom not-condensed">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Entrega de Enxoval</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="entrega_enxoval" id="entrega_enxoval" action="entrega_enxoval.php">
          <div class="row element-short-bottom">
            <div class="col-md-12 text-left small-screen-center"><b>Local:</b>
              <select class="js-example-basic-single form-control" required="required" name="l" id="l" onchange="buscar_enxoval();">
                <option value="">Selecione...</option>
                  <?php
                  $consulta=mysql_query("SELECT * FROM spsp1.lavanderia_local where lavanderia_cliente_local = '$clienteativo' AND lavanderia_status_local = '0' order by lavanderia_nome_local");
                  while ($lista = mysql_fetch_array($consulta)) {
                  echo("<option value='".$lista['lavanderia_id_local']."'>".$lista['lavanderia_nome_local']."</option>");}
                ?>
              </select>
            </div>
          </div>
          <div class="row element-short-bottom">
		      	<div id="load_enxoval" class="col-md-12 text-left small-screen-center"><b>Enxoval:</b><br>
              Selecione primeiro o Local...
            </div>
          </div>       

          <div style="display:none">
            <input name="u" id="u" type="text" value="<? echo "$usuario"; ?>">
          </div>
          <hr />

          <div class="row element-short-bottom">
            <div class="col-md-4"><b>Coren Enfermagem:</b>
              <div class="form-group form-icon-group">
                <input class="form-control" name="d" id="d" size="20" type="text" required onchange="coren();"/>
              </div>
            </div>
            <div class="col-md-4" id='resultado1'></div>
            <div class="col-md-4 text-center small-screen-center" id='resultado2'></div>
          </div>     
        </form>
      </div>
    </section>
  </article>
</div>

<script type="text/javascript">
function coren(){
	var d = $('#d').val();
	if(d){
		var url = 'usuario.php?d='+encodeURIComponent(d);
		$.get(url, function(dataReturn) {
    		$('#resultado1').html(dataReturn);
 		});
	}
};

function senha(){
	var d = $('#d').val();
	var s = $('#s').val();
	if(s){
		var url = 'senha.php?d='+encodeURIComponent(d)+'&s='+encodeURIComponent(s);
		$.get(url, function(dataReturn) {
    		$('#resultado2').html(dataReturn);
 		});
	}
};

function buscar_enxoval(){
	var l = $('#l').val();
	if(l){
		var url = 'buscar_enxoval.php?l='+encodeURIComponent(l);
		$.get(url, function(dataReturn) {
			$('#load_enxoval').html(dataReturn);
        });
      }
    }
</script>
<? include("../roda.php");  };?>