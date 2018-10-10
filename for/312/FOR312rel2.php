<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
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
              <h1 class="super hairline bordered bordered-normal"> Relatório de Checklist - Abertura de Chamados nas Entregas de Quartos</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR312pag2.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Líder:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="l">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM for312 group by usuario order by usuario ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['usuario']."'>".$dados['usuario']."</option>");}
?>
                </select>
              </div>
            </div>
            
			<div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">Colaborador:<br>
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="c">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM for312 group by colaborador order by colaborador ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['colaborador']."'>".$dados['colaborador']."</option>");}
?>
                </select>
              </div>
            </div>                     
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Cliente: <br>
               <select class="form-control col-md-4 col-sm-6 col-xs-12" name="p">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM for312 group by cliente1 order by cliente1 ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['cliente1']."'>".$dados['cliente1']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Tipo de Limpeza: <br>
               <select class="form-control col-md-4 col-sm-6 col-xs-12" name="tl">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM for312 group by tipolimpeza order by tipolimpeza ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['tipolimpeza']."'>".$dados['tipolimpeza']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Período: <br>
                <input name="inicio2" type="date" id="inicio2" maxlength="10" />
                a
                <input name="final2" type="date" id="final2" maxlength="10" />
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ordem:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY usuario, cliente1, colaborador, data, quarto ">Líder</option>
                  <option value=" ORDER BY cliente1, usuario, colaborador, data, quarto ">Cliente</option>
                  <option value=" ORDER BY colaborador, cliente1, usuario, data, quarto ">Colaborador</option>
                  <option value=" ORDER BY data, cliente1, colaborador, usuario, quarto " selected="selected">Data</option>
                  <option value=" ORDER BY quarto, cliente1, colaborador, usuario, data ">Nº Quarto</option>
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
              <? echo "$ver_for_312"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
