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
              <div class="row" style="background-color: lightgray;">
<br />
                <div class="col-md-12 text-left small-screen-center">
                  <div class="col-md-6 col-sm-6 col-xs-12">Nome do Local:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
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
                      $lista_enxoval_array[] = "
                      <br>

                      <div class='col-md-9' style='height: 29px; margin-bottom: 1px; border-color:#ccc; background-color:whitesmoke;'>
                      <input type='checkbox' id='enxoval".$dados['lavanderia_id_enxoval']."' name='enxoval".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'>
                      <label for='enxoval".$dados['lavanderia_id_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</label>
                      </div>

                      <div class='col-md-3' style='height: 29px; margin-bottom: 1px; border-color:#ccc; background-color:whitesmoke;'>
                      <input class='text-center' type='text' size='3' id='contagem".$dados['lavanderia_id_enxoval']."' name='contagem".$dados['lavanderia_id_enxoval']."' style='border-color:#ccc;'/>
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
                      $lista_extra_array[] = "
                      <br>

                      <div class='col-md-12' style='margin-bottom: 1px; height:29px; border-color:#ccc; background-color:whitesmoke;'>
                      <input type='checkbox' id='extra".$dados['lavanderia_id_enxoval']."' name='extra".$dados['lavanderia_id_enxoval']."' value='".$dados['lavanderia_id_enxoval']."'>
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
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-3 col-xs-2"></div>
                  <div class="col-md-4 col-sm-3 col-xs-2"></div>
                </div>

              </div>


                      <header class="text-center element-small-top element-small-bottom not-condensed "  >
                    <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
                      <h1 class="super hairline bordered bordered-normal"> Locais Cadastrados </h1>
        </header>

                <div class="col-md-12  col-sm-12 col-xs-12 small-screen-center" style="background-color: lightgray;">
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">

<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'>
  <strong>
  <thead style='color:#fff; background-color:#FF6464' >
    <tr>
      <td width='60%' align='center'>Local</td>
      <td width='40%' colspan='2'  align='center'>Ações</td>
    </tr>
  </thead>
  </strong>
  <tbody style="background-color: whitesmoke;">
<?php
  $result=mysql_query("select * from spsp1.lavanderia_local where lavanderia_cliente_local='$clienteativo' ORDER BY lavanderia_nome_local");
  while($row=mysql_fetch_array($result))
  print "
    <tr bordercolor='#ccc'>
      <td width='60%' align='left'><font style='margin-left: 10px;' ".($row['lavanderia_status_local']=='1'?'color="#ff0000"':'').">".$row['lavanderia_nome_local']."</font></td>
      <td width='20%' align='center'><a class='btn btn-info' href='alt_local_laundry.php?id=".$row['lavanderia_id_local']."'>Alterar</a></td>
      <td width='20%' align='center'><a class='btn btn-danger' href='des_local.php?id=" . $row['lavanderia_id_local'] . "&status=" . $row['lavanderia_status_local'] . "'>" . ($row['lavanderia_status_local'] == '1' ? 'Ativar' : 'Desativar') . "</a></td>
    </tr>
    ";
?>
  </tbody>
</table>
<br />

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