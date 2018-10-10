<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");


include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
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
              <h1 class="super hairline bordered bordered-normal"> Lista de Presença - Curso de Portaria</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR007pag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  > Status Interno:
              <select name="status1" id="status1">
                <?php
$consulta=mysql_query("SELECT * FROM curso where colaborador='SIM' group by status order by status ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['status']."'>".$dados['status']."</option>");}
?>
              </select>
            </div>
            
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  > Status Externo:
              <select name="status2" id="status2">
                <?php
$consulta=mysql_query("SELECT * FROM curso where colaborador='NAO' group by status order by status ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['status']."'>".$dados['status']."</option>");}
?>
              </select>
            </div><div class="col-md-12 text-left small-screen-center "  >
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
            </div>
            <div class="col-md-12 text-left small-screen-center "  > <br />
              <br />
              <? echo "$ver_for_7"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
