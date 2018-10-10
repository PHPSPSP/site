<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
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
              <h1 class="super hairline bordered bordered-normal"> Relatório de Movimentações</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR208pag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Supervisor:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="s">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM movimentacao group by novasup order by novasup ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['novasup']."'>".$dados['novasup']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Motivo da Movimentação:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="c">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM movimentacao group by movimentacao order by movimentacao ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['movimentacao']."'>".$dados['movimentacao']."</option>");}
?>
                </select>
              </div>
            </div>
			<div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">RE Colaborador:<br>
                <input class="col-md-6 col-sm-6 col-xs-12" name="p" type="text" id="p"/>
              </div>
            </div>                     
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Período da Movimentação: <br>
                <input name="inicio" type="date" id="inicio" maxlength="10" />
                a
                <input name="final" type="date" id="final" maxlength="10" />
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Período do Envio: <br>
                <input name="inicio2" type="date" id="inicio2" maxlength="10" />
                a
                <input name="final2" type="date" id="final2" maxlength="10" />
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Status:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="status">
                  <option value="">Todos</option>
                  <option value="Pendente">Pendente</option>
                  <option value="Efetivado">Efetivado</option>
                  <option value="Devolvido">Devolvido</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ordem:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY novasup, cliatual, movimentacao, nomecol, date ">Supervisor</option>
                  <option value=" ORDER BY cliatual, novasup, movimentacao, nomecol, date " selected="selected">Cliente</option>
                  <option value=" ORDER BY movimentacao, novasup, cliatual, nomecol, date ">Motivo</option>
                  <option value=" ORDER BY data10, novasup, cliatual, movimentacao, nomecol ">Data da Movimentação</option>
				  <option value=" ORDER BY date, novasup, cliatual, movimentacao, nomecol ">Data do Envio</option>
                  <option value=" ORDER BY nomecol, novasup, cliatual, movimentacao, date ">Colaborador</option>
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
              <? echo "$ver_for_208"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
