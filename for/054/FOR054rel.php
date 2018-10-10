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
              <h1 class="super hairline bordered bordered-normal">Relatório de Redução de Colaboradores</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR054pag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Gestor:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="g">
                  <option value="">Todos</option>
<?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
?>
                </select>
              </div>
            </div>
            
			<div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">Supervisor:<br>
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="s">
                  <option value="">Todos</option>
<?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='sup' or tipo='scom' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
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
                  <option value=" ORDER BY gestor, campo48, data2 ">Gestor</option>
                  <option value=" ORDER BY campo48, gestor, data2 ">Supervisor</option>
                  <option value=" ORDER BY data2, gestor, campo48 " selected="selected">Data</option>
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
              <? echo "$ver_for_54"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
