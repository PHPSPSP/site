<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
$clienteativo = $_SESSION['cliente'];

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "10" && $_SESSION['tipo'] != "5"){
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
        <header class="text-center element-small-top element-small-bottom not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Enxoval </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_enxoval" name="cad_enxoval" method="POST" action="cad_enxoval.php">
              <div class="row" style="background-color: lightgray;">
<br />
                <div class="col-md-10  col-sm-8 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Nome do Enxoval:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                  
                <div class="col-md-2  col-sm-4 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>
                </div>
              </div>
            </form>

                    <header class="text-center element-small-top element-small-bottom not-condensed "  >
                    <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
                      <h1 class="super hairline bordered bordered-normal"> Enxovais Cadastrados </h1>
        </header>

                <div class="col-md-12  col-sm-12 col-xs-12 small-screen-center" style="background-color: lightgray;">
                  <div class="col-md-12"><br>
                    <div class="form-group form-icon-group">

<table width='100%' border='1' bordercolor='#FFF' cellspacing='0' cellpadding='0' id='example' class='display'>
  <strong>
  <thead style='color:#fff; background-color:#FF6464' >
    <tr>
      <td width='50%' align='center'>Enxoval</td>
      <td width='50%' colspan='2'  align='center'>Ações</td>
    </tr>
  </thead>
  </strong>
  <tbody style="background-color: whitesmoke;">
<?php
  $result=mysql_query("select * from spsp1.lavanderia_enxoval ORDER BY lavanderia_nome_enxoval");
  while($row=mysql_fetch_array($result))
  print "
    <tr bordercolor='#ccc'>
      <td width='50%' align='left'><font style='margin-left: 10px;' ".($row['lavanderia_status_enxoval']=='1'?'color="#ff0000"':'').">".$row['lavanderia_nome_enxoval']."</font></td>
      <td width='25%' align='center'><a class='btn btn-info' href='alt_enxoval_laundry.php?id=".$row['lavanderia_id_enxoval']."'>Alterar</a></td>
      <td width='25%' align='center'><a class='btn btn-danger' href='des_enxoval.php?id=" . $row['lavanderia_id_enxoval'] . "&status=" . $row['lavanderia_status_enxoval'] . "'>" . ($row['lavanderia_status_enxoval'] == '1' ? 'Ativar' : 'Desativar') . "</a></td>
    </tr>
    ";
?>
  </tbody>
</table>
<br />

                    </div>
                  </div>
                </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</article>
</div>

<? include("../roda.php"); ?>