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
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="text-center not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Local </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_local" name="cad_local" method="POST" action="cad_local.php">
              <div class="row">

                <div class="col-md-12 text-left small-screen-center "  >
                  <div class="col-md-6 col-sm-6 col-xs-12">Nome do Local:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-12 text-left small-screen-center "  >
                  <div class="col-md-6 col-sm-6 col-xs-12"><b>Enxoval:</b><br>
                    <div class='col-md-6'>Nome</div>
                    <div class='col-md-6'>Contagem Padrão</div>
                      <?
                      $lista_enxoval_array = array();
                      $consulta = mysql_query("SELECT lavanderia_id_enxoval, lavanderia_nome_enxoval FROM spsp1.lavanderia_enxoval order by lavanderia_nome_enxoval ASC");
                      while ($dados = mysql_fetch_array($consulta)){
                      $lista_enxoval_array[] = "<br><div class='col-md-6'><input type='checkbox' id='enxoval".$dados['lavanderia_id_enxoval']."' name='enxoval".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'>
                      <label for='enxoval".$dados['lavanderia_id_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</label></div>
                      <div class='col-md-6'><input class='text-center' type='text' size='3' id='contagem".$dados['lavanderia_id_enxoval']."' name='contagem".$dados['lavanderia_id_enxoval']."'></div>";
                      }
                      $lista_enxoval = implode("", $lista_enxoval_array);
                      echo $lista_enxoval;
                      ?>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12"><b>Extra:</b><br>
                    <div class='col-md-12'>Nome</div>
                      <?
                      $lista_extra_array = array();
                      $consulta = mysql_query("SELECT lavanderia_id_enxoval, lavanderia_nome_enxoval FROM spsp1.lavanderia_enxoval order by lavanderia_nome_enxoval ASC");
                      while ($dados = mysql_fetch_array($consulta)){
                      $lista_extra_array[] = "<br><div class='col-md-12' style='height:30px'><input type='checkbox' id='extra".$dados['lavanderia_id_enxoval']."' name='extra".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'>
                      <label for='extra".$dados['lavanderia_id_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</label></div>";
                      }
                      $lista_extra = implode("", $lista_extra_array);
                      echo $lista_extra;
                      ?>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center element-short-top "  >
                  <div class="col-md-4 col-sm-6 col-xs-8">
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-3 col-xs-2"></div>
                  <div class="col-md-4 col-sm-3 col-xs-2"></div>
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