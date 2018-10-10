<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
    window.location.href='../logado.php';
        </SCRIPT>");}else{  

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];

$sql = "SELECT * FROM lavanderia_enxoval WHERE lavanderia_id_enxoval = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);


?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
  <section id="two" class="section swatch-white">
  <div class="container" style="padding-bottom: 180px;">
    <div class="row">
      <div class="col-md-12">
        <header class="text-center element-small-top element-medium-small not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Alteração de Cadastro de Enxoval </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_enxoval" name="alt_cad_enxoval" method="GET" action="alt_cad_enxoval.php">
              <div class="row" style="background-color: lightgray;">
<br />
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center">
                  <div class="col-md-12">Nome:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required value="<?php echo $linha['lavanderia_nome_enxoval'] ?>"/>
                      <br />
                    </div>
                  </div>
                </div>
                                  
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center">
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">
                      <input hidden name="i" id="i" value="<?php echo $linha['lavanderia_id_enxoval'] ?>"/>
                      <input class="form-control" type="submit" value="Alterar" />
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center">
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">
                      <input class="form-control btn btn-info" type="button" value="Voltar" onclick="location.href='cad_enxoval_laundry.php'"/>
                      <br />
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</article>
</div>

<? include("../roda.php"); }; ?>