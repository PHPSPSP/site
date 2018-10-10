<?php
session_start();
header('Content-type: text/html; charset=UTF-8',true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");

include("../privado.php");
include("perguntas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$data = date('d-m-Y H:i:s');
$usuario = $_SESSION['nome'];
$gestoruser = $_SESSION['gestoruser'];
$email = $_SESSION['mail'];
$id = $_SESSION['id'];

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
              <h1 class="super hairline bordered bordered-normal">Check List Supervisão</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="" target="" onsubmit="">
          <div class="row ">
            <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  >
              <div class="row ">
                <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Cliente:
                  <select class="form-control"   name="cliente" id="cliente" onchange="buscar_postos()">
                    <option selected="selected" value="">Selecione...</option>
                    <?php
if ($id == 103 || $id == 106 || $id == 125 || $id == 126 || $id == 1) {
	$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC");
} else {
$consulta=mysql_query("SELECT C.CODCLI, C.NOMECLI, U.ID_HK FROM spsp1.usuarios U, spsp1.sarposto P, spsp1.sarclien C WHERE U.ID = '" . $id . "' AND P.DTENCERRAM IS NULL AND C.CODCLI = P.CODCLI AND (P.AREASUPER1 = U.ID_HK OR P.AREASUPER2 = U.ID_HK OR P.AREASUPER3 = U.ID_HK) GROUP BY P.CODCLI");
}
/*SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC*/
while ($lista_cli = mysql_fetch_array($consulta)) {
echo("<option value='".$lista_cli['CODCLI']."'>".$lista_cli['NOMECLI']." - ".$lista_cli['CODCLI']."</option>");}
?>
                  </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Atividade:
                  <input class="form-control"  readonly="readonly" type="text" name="ativ" id="ativ" value="LIMPEZA - CONDOMÍNIO RESIDENCIAL" />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Supervisor:<br>
                  <input class="form-control"  type="text" value="<? echo "$usuario"; ?>" readonly/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left small-screen-center "  >
              <div class="row ">
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Equipe</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 1; $i <= 8; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Equipamentos / Materiais / Produtos</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 21; $i <= 23; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Limpeza Área Externa</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 70; $i <= 81; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left small-screen-center "  >
              <div class="row ">
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Limpeza Portaria</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 47; $i <= 55; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Limpeza Áreas Sociais - Salão de Festas</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 59; $i <= 68; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Preenchimento de check list de limpeza</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 143; $i <= 144; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Relacionamento com Cliente</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <?php for ($i = 31; $i <= 33; $i++) { echo $perguntas[$i]; } ?>
                    </div>
                  </div>
                </div>
                
                
              </div>
            </div>
            <div class="col-md-12 text-center small-screen-center "  >
              <div class="form-group form-icon-group"><br />
                <textarea id="observacao" name="observacao" rows="5" class="form-control" placeholder="Observação"></textarea>
                <div style="display:none"><input name="codfor" id="codfor" type="text" value="2">
                  <input name="datain" id="datain" type="text" value="<? echo "$data"; ?>">
                  <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
                  <input name="emailuser" type="text" value="<? echo "$email"; ?>">
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center small-screen-center "  >
              <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" style="width:30%" />
              <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Enviar" onclick="return (validar() && enviar());" style="width:30%">
            </div>
          </div>
        </form>
        <br />
        <br />
        <div class="row ">
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_144"; ?> - 2<br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script src='scripts.js'></script>
<? include("../roda.php"); ?>
