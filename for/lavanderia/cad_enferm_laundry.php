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
        </SCRIPT>");}else{  };

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
  <section id="two" class="section swatch-white">
  <div class="container" style="padding-bottom: 180px;">
    <div class="row">
      <div class="col-md-12">
        <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Enfermagem </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_enferm" name="cad_enferm" method="POST" action="cad_enferm.php">
              <div class="row">

                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Nome:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Coren:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="c" size="30" id="c" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Senha:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="s" id="s" size="20" type="password" onKeyPress="checar_caps_lock(event)" required/>
                      <br />
                    </div>
                  </div>
                </div>
                  
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="submit" value="Cadastrar" />
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

<? include("../roda.php"); ?>