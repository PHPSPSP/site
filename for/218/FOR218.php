<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$data = date('d-m-Y H:i:s');
$usuario = $_SESSION['nome'];
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
              <h1 class="super hairline bordered bordered-normal">Check List - AVSST</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="" target="" onsubmit="">
          <div class="row ">
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Cliente:
              <select class="form-control"   name="cliente" id="cliente" onchange="buscar_postos()">
                <option selected="selected" value="">Selecione...</option>
                <?php
if ($id == 103 || $id == 106 || $id == 125 || $id == 126 || $id == 1) {
	$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC");
} else {
	$consulta=mysql_query("SELECT C.CODCLI, C.NOMECLI FROM usuarios U, sarposto P, sarclien C WHERE U.ID = '" . $id . "' AND P.DTENCERRAM IS NULL AND C.CODCLI = P.CODCLI AND (P.AREASUPER1 = U.ID_HK OR P.AREASUPER2 = U.ID_HK OR P.AREASUPER3 = U.ID_HK) GROUP BY P.CODCLI");
}
/*SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC*/
while ($lista_cli = mysql_fetch_array($consulta)) {
echo("<option value='".$lista_cli['CODCLI']."'>".$lista_cli['NOMECLI']." - ".$lista_cli['CODCLI']."</option>");}
?>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Atividade:
              <input class="form-control"  readonly="readonly" type="text" name="ativ" id="ativ" value="PORTARIA - CONDOMÍNIO RESID." />
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center "  > Supervisor:<br>
              <input class="form-control"  type="text" value="<? echo "$usuario"; ?>" readonly/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left small-screen-center "  >
              <div class="row">
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Equipe</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <input onclick='mostrar1();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Uniforme" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q01_1">
                              <input name="q01" id="q01_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q01_2">
                              <input name="q01" id="q01_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q01_3">
                              <input name="q01" id="q01_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar2();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Identificação do Colaborador" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q02_1">
                              <input name="q02" id="q02_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q02_2">
                              <input name="q02" id="q02_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q02_3">
                              <input name="q02" id="q02_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar3();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Cartão de Ponto" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q03_1">
                              <input name="q03" id="q03_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q03_2">
                              <input name="q03" id="q03_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q03_3">
                              <input name="q03" id="q03_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar4();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="EPI" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q04_1">
                              <input name="q04" id="q04_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q04_2">
                              <input name="q04" id="q04_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q04_3">
                              <input name="q04" id="q04_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar6();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Apresentação Pessoal" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q06_1">
                              <input name="q06" id="q06_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q06_2">
                              <input name="q06" id="q06_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q06_3">
                              <input name="q06" id="q06_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar7();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Postura" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q07_1">
                              <input name="q07" id="q07_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q07_2">
                              <input name="q07" id="q07_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q07_3">
                              <input name="q07" id="q07_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar9();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Rotina de Trabalho" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q09_1">
                              <input name="q09" id="q09_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q09_2">
                              <input name="q09" id="q09_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q09_3">
                              <input name="q09" id="q09_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar10();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Execução das Atividades" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q10_1">
                              <input name="q10" id="q10_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q10_2">
                              <input name="q10" id="q10_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q10_3">
                              <input name="q10" id="q10_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Instalações</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <input onclick='mostrar11();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Portões e Grades" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q11_1">
                              <input name="q11" id="q11_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q11_2">
                              <input name="q11" id="q11_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q11_3">
                              <input name="q11" id="q11_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar12();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Cerca Elétrica e Concertina" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q12_1">
                              <input name="q12" id="q12_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q12_2">
                              <input name="q12" id="q12_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q12_3">
                              <input name="q12" id="q12_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar13();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Cancela" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
                              <input name="q13" id="q13_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
                              <input name="q13" id="q13_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
                              <input name="q13" id="q13_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Segurança</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <input onclick='mostrar11();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Controle dos Portões" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q11_1">
                              <input name="q11" id="q11_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q11_2">
                              <input name="q11" id="q11_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q11_3">
                              <input name="q11" id="q11_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar12();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Identificação das Pessoas" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q12_1">
                              <input name="q12" id="q12_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q12_2">
                              <input name="q12" id="q12_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q12_3">
                              <input name="q12" id="q12_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar13();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Contato Interfone - Cliente" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
                              <input name="q13" id="q13_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
                              <input name="q13" id="q13_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
                              <input name="q13" id="q13_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left small-screen-center "  >
              <div class="row">
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Segurança</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <input onclick='mostrar11();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Controle dos Portões" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q11_1">
                              <input name="q11" id="q11_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q11_2">
                              <input name="q11" id="q11_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q11_3">
                              <input name="q11" id="q11_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar12();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Identificação das Pessoas" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q12_1">
                              <input name="q12" id="q12_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q12_2">
                              <input name="q12" id="q12_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q12_3">
                              <input name="q12" id="q12_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar13();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Contato Interfone - Cliente" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
                              <input name="q13" id="q13_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
                              <input name="q13" id="q13_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
                              <input name="q13" id="q13_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar14();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Ronda" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q14_1">
                              <input name="q14" id="q14_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q14_2">
                              <input name="q14" id="q14_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q14_3">
                              <input name="q14" id="q14_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar15();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Comunicação" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q15_1">
                              <input name="q15" id="q15_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q15_2">
                              <input name="q15" id="q15_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q15_3">
                              <input name="q15" id="q15_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar16();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Troca de Turno" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q16_1">
                              <input name="q16" id="q16_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q16_2">
                              <input name="q16" id="q16_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q16_3">
                              <input name="q16" id="q16_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar17();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Portaria/ Guarita" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q17_1">
                              <input name="q17" id="q17_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q17_2">
                              <input name="q17" id="q17_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q17_3">
                              <input name="q17" id="q17_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar18();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Correspondências" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q18_1">
                              <input name="q18" id="q18_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q18_2">
                              <input name="q18" id="q18_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q18_3">
                              <input name="q18" id="q18_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar18();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Livro de Ocorrência" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q18_1">
                              <input name="q18" id="q18_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q18_2">
                              <input name="q18" id="q18_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q18_3">
                              <input name="q18" id="q18_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar18();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Controle de Acesso
" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q18_1">
                              <input name="q18" id="q18_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q18_2">
                              <input name="q18" id="q18_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q18_3">
                              <input name="q18" id="q18_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-left small-screen-center "  > <br />
                  <strong>Equipamentos / Materiais / Veículos</strong><br />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center small-screen-center "  >
                  <div class="form-group form-icon-group">
                    <div class="row">
                      <input onclick='mostrar11();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Equipamentos" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q11_1">
                              <input name="q11" id="q11_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q11_2">
                              <input name="q11" id="q11_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q11_3">
                              <input name="q11" id="q11_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar12();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Conservação" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q12_1">
                              <input name="q12" id="q12_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q12_2">
                              <input name="q12" id="q12_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q12_3">
                              <input name="q12" id="q12_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar13();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Moto/ Carro" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
                              <input name="q13" id="q13_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
                              <input name="q13" id="q13_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
                              <input name="q13" id="q13_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                      <input onclick='mostrar13();' type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                      <div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
                        <input class="form-control" placeholder="Armazenamento" readonly>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
                        <div class="row">
                          <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                            <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
                              <input name="q13" id="q13_1" type="radio" required value="conf" >
                              Conforme</label>
                            <label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
                              <input name="q13" id="q13_2" type="radio" required value="inconf" >
                              Não Conf.</label>
                            <label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
                              <input name="q13" id="q13_3" type="radio" required value="naplica" >
                              Não Aplica</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center small-screen-center "  >
              <div class="form-group form-icon-group"><br />
                <textarea id="observacao" name="observacao" rows="5" class="form-control" placeholder="Observação"></textarea>
                <div style="display:none">
                  <input name="datain" id="datain" type="text" value="<? echo "$data"; ?>">
                  <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
                  <input name="emailuser" type="text" value="<? echo "$email"; ?>">
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center small-screen-center "  >
              <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" style="width:30%" />
              <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Gravar" onclick="return (validar() && enviar());" style="width:30%">
            </div>
          </div>
        </form>
        <br />
        <br />
        <div class="row ">
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_218"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script>

$('#submit').on('click', function () {
	if ($('#q01_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o UNIFORME.'); return false; }
	if ($('#q02_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a IDENTIFICAÇÃO COLABORADOR.'); return false; }
	if ($('#q03_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o CARTÃO DE PONTO.'); return false; }
	if ($('#q04_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o EPI.'); return false; }
	if ($('#q05_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o ASO - EXAME PERIÓDICO.'); return false; }
	if ($('#q06_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a APRESENTAÇÃO PESSOAL.'); return false; }
	if ($('#q07_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a POSTURA.'); return false; }
	if ($('#q08_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a INTEGRAÇÃO - TREINAMENTOS ESPECÍFICOS - NRS / RECICLAGENS.'); return false; }
	if ($('#q09_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a ROTINA DE TRABALHO.'); return false; }
	if ($('#q10_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a EXECUÇÃO DAS ATIVIDADES.'); return false; }
	if ($('#q11_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o POSTO DE TRABALHO.'); return false; }
	if ($('#q12_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a TEMPERATURA.'); return false; }
	if ($('#q13_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o RUÍDO.'); return false; }
	if ($('#q14_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a ERGONOMIA.'); return false; }
	if ($('#q15_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o RISCO FÍSICO.'); return false; }
	if ($('#q16_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o RISCO QUÍMICO.'); return false; }
	if ($('#q17_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre o RISCOS BIOLÓGICO.'); return false; }
	if ($('#q18_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre a DISPONIBILIDADE DE ÁGUA POTÁVEL.'); return false; }
	return true;
});


function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }}


function check_date(date) {
   var err = 0
   string = date
   var valid = "0123456789/"
   var ok = "yes";
   var temp;
   for (var i=0; i< string.length; i++) {
     temp = "" + string.substring(i, i+1);
     if (valid.indexOf(temp) == "-1") err = 1;   }
   if (string.length != 10) err=1
   b = string.substring(3, 5)		// month
   c = string.substring(2, 3)		// '/'
   d = string.substring(0, 2)		// day 
   e = string.substring(5, 6)		// '/'
   f = string.substring(6, 10)	// year
   if (b<1 || b>12) err = 1
   if (c != '/') err = 1
   if (d<1 || d>31) err = 1
   if (e != '/') err = 1
   if (f<1850 || f>2050) err = 1
   if (b==4 || b==6 || b==9 || b==11){
     if (d==31) err=1   }
   if (b==2){
     var g=parseInt(f/4)
     if (isNaN(g)) {
         err=1      }
     if (d>29) err=1
     if (d==29 && ((f/4)!=parseInt(f/4))) err=1   }
   if (err==1) {
   	alert("Data inválida");
	formulario.data10.focus(); return false;
    return false;   }
   else {    return true;   }}


function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}

function validar(formulario){
	var formulario = document.getElementById('formulario');
	
if(document.getElementById('cliente').value == ""){alert ('Informe o nome do CLIENTE.'); formulario.cliente.focus(); return false;}
if(document.getElementById('ativ').value == ""){alert ('Informe o nome da ATIVIDADE.'); formulario.ativ.focus(); return false;}
if(document.getElementById('colabora').value == ""){alert ('Informe o nome do COLABORADOR.'); formulario.colabora.focus(); return false;}
if(document.getElementById('dtadmissao').value == ""){alert ('Informe a DATA DE ADMISSÃO.'); formulario.dtadmissao.focus(); return false;}


return true;}

function enviar(){
	document.formulario.action = "geraphp.php";
	document.formulario.target = "";
	document.formulario.submit();}

function mostrar1(){alert("Completo / limpo e passado / bota / sapato");}
function mostrar2(){alert("Está portando o crachá? Está atualizado?");}
function mostrar3(){alert("Preenchido até a data? Sem rasuras?");}
function mostrar4(){alert("Tem os EPI´s? Usa de forma correta?");}
function mostrar5(){alert("Lembra-se da última data/ mês de realização do exame periódico? Compareceu na data marcada?");}
function mostrar6(){alert("Unhas limpas e cortadas? Cabelos penteados? Barba feita (M) ou cabelo preso (F)");}
function mostrar7(){alert("Educação / cortesia / postura profissional");}
function mostrar8(){alert("O colaborador participou de Integração? Participou de treinamento de Limpeza ou outro relacionado à sua atividade? Qual foi a última data?");}
function mostrar9(){alert("A rotina de trabalho está no posto? Está atualizada?");}
function mostrar10(){alert("Está realizando a rotina de trabalho no momento?");}

function mostrar11(){alert("O posto de trabalho apresenta espaço suficiente para executar suas funções?");}
function mostrar12(){alert("A temperatura ambiente está adequada?");}
function mostrar13(){alert("Qual tipo de Ruído há no local de trabalho?");}
function mostrar14(){alert("O posto de trabalho está adequado ergonomicamente?");}
function mostrar15(){alert("No local de Trabalho, o colaborador está exposto a algum risco físico?");}
function mostrar16(){alert("No local de Trabalho, o colaborador está exposto a algum risco químico?");}
function mostrar17(){alert("No local de Trabalho, o colaborador está exposto a algum risco biológico?");}
function mostrar18(){alert("Qual tipo de bebedouro há no local? Como é a  disponibilidade de água?");}

function buscar_postos(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos.php?cliente='+cliente;
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
      }
    }
	
</script>
<? include("../roda.php"); ?>
