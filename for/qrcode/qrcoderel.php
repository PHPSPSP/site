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
              <h1 class="super hairline bordered bordered-normal"> Relatório de Registro de QR Code - Higiene</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="qrcodepag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Colaborador:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="c">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM higiene group by cpf order by cpf ASC "); 
while ($dados = mysql_fetch_array($consulta)) {

$cpf = $dados['cpf'];
$sql = mysql_query("SELECT * FROM sarvigil WHERE CGC='$cpf'");
$cnt = @mysql_num_rows($sql);
$linha = mysql_fetch_array($sql);
$nomecand = $linha['NOMEVIGIL'];

echo("<option value='".$dados['cpf']."'>".$nomecand."</option>");}
?>
                </select>
              </div>
            </div>
            
			<div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">Local:<br>
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="b">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM higiene group by local order by local ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['local']."'>".$dados['local']."</option>");}
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
                  <option value=" ORDER BY local, cpf, data ">Local</option>
                  <option value=" ORDER BY cpf, data, local ">Colaborador</option>
                  <option value=" ORDER BY data, cpf, local " selected="selected">Data</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center "  >
              <div class="row">
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
