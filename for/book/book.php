<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "cli"){
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
              <h1 class="super hairline bordered bordered-normal"> Book de Colaboradores</h1>
            </header>
          </div>
        </div>
        <strong>Book Posto: </strong>Selecione apenas 1 cliente e selecione o posto desejado.<br />
        <strong>Book Cliente:</strong> Selecione até 3 clientes.<br />
        <strong>Book Personalizado:</strong> Digite uma palavra chave.<br /><br />

        <form name="form" action="bookpag.php" method="GET">
          <div class="row">
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Cliente:
                <select class="form-control" name="cliente" id="cliente" onchange="buscar_postos()">
                  <option value="">Selecione...</option>
                  <option value="">TODOS</option>
                  <?php
$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$cliente = $dados['NOMECLI'];
$codcliente = $dados['CODCLI'];
echo("<option value='".$codcliente."'>".$cliente."</option>");}
?>
                </select>
                <select class="form-control" name="cliente2" id="cliente2">
                  <option value="">Selecione...</option>
                  <option value="">TODOS</option>
                  <?php
$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$cliente = $dados['NOMECLI'];
$codcliente = $dados['CODCLI'];
echo("<option value='".$codcliente."'>".$cliente."</option>");}
?>
                </select>
                <select class="form-control" name="cliente3" id="cliente3">
                  <option value="">Selecione...</option>
                  <option value="">TODOS</option>
                  <?php
$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$cliente = $dados['NOMECLI'];
$codcliente = $dados['CODCLI'];
echo("<option value='".$codcliente."'>".$cliente."</option>");}
?>
                </select>
                Ou digite uma palavra chave: <input id="cliente4" name="cliente4" type="text" />
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">
              <div id="load_postos"> Posto: 
                  <select class="form-control" name="posto" id="posto">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos1"> Posto: 
                  <select class="form-control" name="posto1" id="posto1">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos2"> Posto: 
                  <select class="form-control" name="posto2" id="posto2">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos3"> Posto: 
                  <select class="form-control" name="posto3" id="posto3">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos4"> Posto: 
                  <select class="form-control" name="posto4" id="posto4">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos5"> Posto: 
                  <select class="form-control" name="posto5" id="posto5">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
                <div id="load_postos6"> Posto: 
                  <select class="form-control" name="posto6" id="posto6">
                    <option value="">Selecione o Cliente...</option>
                  </select>
                </div>
                
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Supervisor:
                <select class="form-control" name="supervisor" id="supervisor">
                  <option value="">Selecione...</option>
                  <option value="">TODOS</option>
                  <?php
$consulta=mysql_query("SELECT CODTAB, SPLIT_STR(DESCRICAO, ' - ', 1) DESCRICAO FROM sartab WHERE CODTAB LIKE '130%' ORDER BY DESCRICAO ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$supervisor = $dados['DESCRICAO'];
$codsupervisor = $dados['CODTAB'];
echo("<option value='".$codsupervisor."'>".$supervisor."</option>");}
?>
                </select>
              </div>
            </div>
            
            <div class="col-md-12 text-left small-screen-center "  >
              <div class="row">
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center "  > <br />
              <br />
              Book de Colaboradores<br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">
function buscar_postos(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
		var url = 'buscar_postos1.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos1').html(dataReturn);
        });
		var url = 'buscar_postos2.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos2').html(dataReturn);
        });
		var url = 'buscar_postos3.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos3').html(dataReturn);
        });
		var url = 'buscar_postos4.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos4').html(dataReturn);
        });
		var url = 'buscar_postos5.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos5').html(dataReturn);
        });
		var url = 'buscar_postos6.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos6').html(dataReturn);
        });
      }
    }
	
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }}
  </script>
<? include("../roda.php"); ?>
