<?
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
    window.location.href='../logado.php';
        </SCRIPT>");}else{  };

$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];

$sql = "SELECT * FROM lavanderia_local WHERE lavanderia_id_local = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$idgeral = $_GET['id'];

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
          <h1 class="super hairline bordered bordered-normal"> Alteração de Local </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_local" name="cad_local" method="GET" action="alt_cad_local.php">
              <div class="row" style="background-color: lightgray;">
<br />
                <div class="col-md-12 text-left small-screen-center">
                  <div class="col-md-6 col-sm-6 col-xs-12">Nome do Local:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required value="<?php echo $linha['lavanderia_nome_local'] ?>"/>
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-12 text-left small-screen-center "  >

                  <div class="col-md-7 col-sm-7 col-xs-12"><b>Enxoval:</b><br>
                    <div class='col-md-9'>Nome</div>
                    <div class='col-md-3'>Contagem Padrão</div>
                      <?
                      $lista_enxoval_array = array();
                      $consulta = mysql_query("SELECT lavanderia_id_enxoval, lavanderia_status_enxoval, lavanderia_nome_enxoval, lavanderia_cliente_enxoval FROM spsp1.lavanderia_enxoval where lavanderia_cliente_enxoval = '$clienteativo' AND lavanderia_status_enxoval = '0' order by lavanderia_nome_enxoval ASC");
                      while ($dados = mysql_fetch_array($consulta)){

$idenxoval = $dados['lavanderia_id_enxoval'];

$consulta2 = mysql_query("SELECT data_hora FROM lavanderia_controle WHERE lavanderia_local = '".$idgeral."' AND lavanderia_cliente = '".$clienteativo."' ORDER BY lavanderia_id_controle DESC limit 1");
$dados2 = mysql_fetch_array($consulta2);
$ultimo=$dados2['data_hora'];

$sql2 = "SELECT * FROM lavanderia_controle WHERE lavanderia_local = '".$idgeral."' AND lavanderia_enxoval = '".$idenxoval."' AND data_hora = '".$ultimo."'";
$resultado2 = mysql_query($sql2) or die ("Não foi possível realizar a consulta.");
$linha2 = mysql_fetch_array($resultado2, MYSQL_ASSOC);
$valuecontador=$linha2['contagem_padrao'];
$valueid=$linha2['lavanderia_id_controle'];

if ($valueid > '0') {$valuecheck='checked';}else{$valuecheck='';};

                      $lista_enxoval_array[] = "
                      <br>

                      <div class='col-md-9' style='height: 29px; margin-bottom: 1px; border-color:#ccc; background-color:whitesmoke;'>
                      <input type='checkbox' id='enxoval".$dados['lavanderia_id_enxoval']."' name='enxoval".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'   ".$valuecheck."     />
                      <label for='enxoval".$dados['lavanderia_id_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</label>
                      </div>

                      <div class='col-md-3' style='height: 29px; margin-bottom: 1px; border-color:#ccc; background-color:whitesmoke;'>
                      <input class='text-center' type='text' size='3' id='contagem".$dados['lavanderia_id_enxoval']."' name='contagem".$dados['lavanderia_id_enxoval']."' style='border-color:#ccc;'      value='".$valuecontador."'        />
                      </div>";
                      }
                      $lista_enxoval = implode("", $lista_enxoval_array);
                      echo $lista_enxoval;
                      ?>
                  </div>

                  <div class="col-md-5 col-sm-5 col-xs-12"><b>Extra:</b><br>
                    <div class='col-md-12'>Nome</div>
                      <?
                      $lista_extra_array = array();
                      $consulta = mysql_query("SELECT lavanderia_id_enxoval, lavanderia_nome_enxoval, lavanderia_cliente_enxoval, lavanderia_status_enxoval FROM spsp1.lavanderia_enxoval where lavanderia_cliente_enxoval = '$clienteativo' AND lavanderia_status_enxoval = '0' order by lavanderia_nome_enxoval ASC");
                      while ($dados = mysql_fetch_array($consulta)){

$idextra = $dados['lavanderia_id_enxoval'];

$consulta2 = mysql_query("SELECT data_hora FROM lavanderia_extra WHERE lavanderia_local = '".$idgeral."' AND lavanderia_cliente = '".$clienteativo."' ORDER BY lavanderia_id_extra DESC limit 1");
$dados2 = mysql_fetch_array($consulta2);
$ultimo=$dados2['data_hora'];

$sql2 = "SELECT * FROM lavanderia_extra WHERE lavanderia_local = '".$idgeral."' AND lavanderia_enxoval = '".$idextra."' AND data_hora = '".$ultimo."'";
$resultado2 = mysql_query($sql2) or die ("Não foi possível realizar a consulta.");
$linha2 = mysql_fetch_array($resultado2, MYSQL_ASSOC);
$valueid=$linha2['lavanderia_id_extra'];

if ($valueid > '0') {$valuecheck='checked';}else{$valuecheck='';};

                      $lista_extra_array[] = "
                      <br>

                      <div class='col-md-12' style='margin-bottom: 1px; height:29px; border-color:#ccc; background-color:whitesmoke;'>
                      <input type='checkbox' id='extra".$dados['lavanderia_id_enxoval']."' name='extra".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'  ".$valuecheck."   />
                      <label for='extra".$dados['lavanderia_id_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</label>
                      </div>";
                      }
                      $lista_extra = implode("", $lista_extra_array);
                      echo $lista_extra;
                      ?>
                  </div>

                </div>
                <div class="col-md-12 text-left small-screen-center element-short-top "  >
                  <div class="col-md-4 col-sm-6 col-xs-8">
                    <div class="form-group form-icon-group">
                      <input type="text" name="i" id="i" hidden value="<?php echo $idgeral ?>">
                      <input class="form-control" type="submit" value="Alterar" />
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