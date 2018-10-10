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
        </SCRIPT>");}else{  };

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
  <section id="two" class="section swatch-white">
  <div class="container" style="padding-bottom: 180px;">
    <div class="row">
      <div class="col-md-12">
        <header class="text-center element-small-top element-medium-bottom not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Usuários </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_user" name="cad_user" method="POST" action="cad_user.php">
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
                  <div class="col-md-12">Login:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="l" size="30" id="l" type="text" required/>
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

                <input name="c" id="c" type="text" value="<?php echo $clienteativo; ?>"/>

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