<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "lid" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

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
            <header class="text-center element-short-top element-medium-bottom not-condensed">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Check List - Entrega de Quarto</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="geraphp.php">
          
          <div class="row element-short-bottom">
            <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Cliente:
              <select class="form-control" required="required" name="cliente" id="cliente" onchange="buscar_postos(); buscar_postos2()">
                <option selected="selected" value="">Selecione...</option>
                <?php
$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL AND TIPOCLIENT = '2' AND NOMECLI like '%UNIMED BAURU%' or NOMECLI like '%AMARAL CARVALHO%' OR NOMECLI like '%UNIMED HOSPITAL BAURU%'ORDER BY NOMECLI ASC");
while ($lista_cli = mysql_fetch_array($consulta)) {
echo("<option data-campo='".$lista_cli['NOMECLI']."' value='".$lista_cli['CODCLI']."'>".$lista_cli['NOMECLI']."</option>");}
				?>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Líder Responsável:<br>
              <input class="form-control" required="required"  type="text" value="<? echo "$usuario"; ?>" readonly/>
            </div>
            <div class="btn-group col-md-4 col-sm-4 col-xs-12 small-screen-center" data-toggle="buttons"> Limpeza:<br>
              <label class="btn btn-limpeza btn-success col-md-6 col-sm-6 col-xs-6" for="tipolimpeza1">
                <input name="tipolimpeza" id="tipolimpeza1" type="radio" value="Programada"/>
                Programada</label>
              <label class="btn btn-limpeza btn-success col-md-6 col-sm-6 col-xs-6" for="tipolimpeza2">
                <input name="tipolimpeza" id="tipolimpeza2" type="radio" value="Terminal"/>
                Terminal</label>
            </div>
          </div>
          
          <div class="row element-short-bottom">
            <div class="col-md-4 col-sm-4 col-xs-5 text-left small-screen-center"> Data Higienização:
              <input class="form-control" required="required" type="date" name="data" id="data"/>
            </div>
			<div class="col-md-4 col-sm-4 col-xs-3 text-left small-screen-center"> Quarto:
              <input class="form-control" required="required" type="text" name="quarto" id="quarto"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-left small-screen-center"> Nº Lacre:
              <input class="form-control" required="required" type="text" name="lacre" id="lacre"/>
            </div>
          </div>
          
          <div class="row element-short-bottom">
			<div class="col-md-4 col-sm-4 col-xs-4 text-left small-screen-center"> Hr Solicitada:
              <input class="form-control" required="required" type="time" name="horaliberado" id="horaliberado"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-left small-screen-center"> Hora Início:
              <input class="form-control" required="required" type="time" name="horain" id="horain"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-left small-screen-center"> Hora Fim:
              <input class="form-control" required="required" type="time" name="horafin" id="horafin"/>
            </div>
          </div>
          
          <div class="row element-short-bottom">
			<div id="load_postos" class="col-md-6 col-sm-6 col-xs-6 text-left small-screen-center"> Colaborador 1:<br>
              <select name="colaborador" id="colaborador" required="required" class="form-control">
                <option value="">Selecione primeiro o Cliente...</option>
              </select>
            </div>
			<div id="load_postos2" class="col-md-6 col-sm-6 col-xs-6 text-left small-screen-center"> Colaborador 2:<br>
              <select name="colaborador2" id="colaborador2" required="required" class="form-control">
                <option value="">Selecione primeiro o Cliente...</option>
              </select>
            </div>
          </div>
          
		<br /><hr />
	<br />
<br />

          <div class="row ">
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="Itens" readonly style="BACKGROUND-COLOR: antiquewhite;">
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="Limpeza" readonly style="BACKGROUND-COLOR: antiquewhite;">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="OBS" readonly style="BACKGROUND-COLOR: antiquewhite;">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="Abertura de OS" readonly style="BACKGROUND-COLOR: antiquewhite;">
            </div>
          </div>
          <div class="row ">
          <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>

            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="01 - Cama" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q01" id="q01_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q01" id="q01_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q01" id="q01_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs01" name="obs01"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 01" name="os01"/>
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="02 - Colchão" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q02" id="q02_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q02" id="q02_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q02" id="q02_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs02" name="obs02"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 02" name="os02"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="03 - Mesa Cabeceira" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q03" id="q03_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q03" id="q03_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q03" id="q03_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs03" name="obs03"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 03" name="os03"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="04 - Suporte de Soro" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q04" id="q04_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q04" id="q04_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q04" id="q04_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs04" name="obs04"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 04" name="os04"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="05 - Escadinha" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q05" id="q05_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q05" id="q05_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q05" id="q05_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs05" name="obs05"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 05" name="os05"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="06 - Poltrona/Sofá" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q06" id="q06_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q06" id="q06_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q06" id="q06_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs06" name="obs06"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 06" name="os06"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="07 - Toalheiro" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q07" id="q07_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q07" id="q07_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q07" id="q07_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs07" name="obs07"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 07" name="os07"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="08 - Papeleira" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q08" id="q08_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q08" id="q08_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q08" id="q08_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs08" name="obs08"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 08" name="os08"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="09 - Saboneteira" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q09" id="q09_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q09" id="q09_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q09" id="q09_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs09" name="obs09"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 09" name="os09"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="10 - Armário" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q10" id="q10_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q10" id="q10_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q10" id="q10_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs10" name="obs10"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 10" name="os10"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="11 - TV" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q11" id="q11_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q11" id="q11_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q11" id="q11_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs11" name="obs11"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 11" name="os11"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="12 - Controle Remoto" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q12" id="q12_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q12" id="q12_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q12" id="q12_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs12" name="obs12"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 12" name="os12"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="13 - Controle Ar Condicionado" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q13" id="q13_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q13" id="q13_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q13" id="q13_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs13" name="obs13"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 13" name="os13"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="14 - Caixa Acoplada Banheiro" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q14" id="q14_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q14" id="q14_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q14" id="q14_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs14" name="obs14"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 14" name="os14"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="15 - Vaso Sanitário" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q15" id="q15_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q15" id="q15_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q15" id="q15_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs15" name="obs15"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 15" name="os15"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="16 - Lixeira" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q16" id="q16_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q16" id="q16_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q16" id="q16_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs16" name="obs16"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 16" name="os16"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="17 - Espelho" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q17" id="q17_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q17" id="q17_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q17" id="q17_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs17" name="obs17"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 17" name="os17"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="18 - Barra de Proteção" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q18" id="q18_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q18" id="q18_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q18" id="q18_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs18" name="obs18"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 18" name="os18"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="19 - Lâmpadas" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q19" id="q19_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q19" id="q19_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q19" id="q19_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs19" name="obs19"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 19" name="os19"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="20 - Ralos" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q20" id="q20_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q20" id="q20_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q20" id="q20_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs20" name="obs20"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 20" name="os20"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="21 - Espelho de Tomada" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q21" id="q21_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q21" id="q21_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q21" id="q21_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs21" name="obs21"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 21" name="os21"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="22 - Pisos" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q22" id="q22_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q22" id="q22_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q22" id="q22_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs22" name="obs22"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 22" name="os22"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="23 - Paredes" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q23" id="q23_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q23" id="q23_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q23" id="q23_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs23" name="obs23"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 23" name="os23"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="24 - Portas e Maçanetas" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q24" id="q24_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q24" id="q24_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q24" id="q24_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs24" name="obs24"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 24" name="os24"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="25 - Mini Bar" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q25" id="q25_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q25" id="q25_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q25" id="q25_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs25" name="obs25"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 25" name="os25"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><hr /></div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="26 - Telefone" readonly/>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6  text-center small-screen-center">
                <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q26" id="q26_1" type="radio" value="Conforme"/></div>
                <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q26" id="q26_2" type="radio" value="Não Conforme"/></div>
                <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;"><input name="q26" id="q26_3" type="radio" value="Não Aplica"/></div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Obs" id="obs26" name="obs26"/>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" type="text" placeholder="Chamado" id="os 26" name="os26"/>
            </div>
          </div>
          <div style="display:none">
            <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
            <input name="emailuser" type="text" value="<? echo "$email"; ?>">
            <input type="text" id="cliente1" name="cliente1"/>
          </div>
          <hr /><br />
<br />

          <div class="row ">
            <div class="btn-success col-md-1 col-sm-2 col-xs-12" style="background: #fff!important; color:#666 !important" > Legenda:</div>
            <div class="btn-success col-md-2 col-sm-3 col-xs-4" style="background: #449d44!important;" > Conforme</div>
            <div class="btn-danger col-md-2 col-sm-3 col-xs-4" style="background: #d9534f!important;" > Não Conforme</div>
            <div class="btn-warning col-md-2 col-sm-3 col-xs-4" style="background-color: #F90!important;" > Não Aplica</div>
            <div class="btn-success col-md-5 col-sm-1 col-xs-12" style="background: #fff!important; color:#666 !important" ></div>
          </div><br />

          <hr />
          <div class="col-md-12 text-center small-screen-center">
            <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" style="width:30%" />
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Enviar" onClick="return validar(this);" style="width:30%">
          </div>
        </form>
        <br />
        <br />
        <div class="row ">
          <div class="col-md-12 text-left small-screen-center"> <br />
            <br />
            <? echo "$ver_for_312"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">

function validar(formulario){
    var formulario = document.getElementById('formulario');
	
	if(document.formulario.tipolimpeza1.checked == false && document.formulario.tipolimpeza2.checked == false){alert("Informe o TIPO DE LIMPEZA."); return false;}
	if(formulario.colaborador.value == ''){alert("Informe o nome do COLABORADOR que realizou a limpeza."); return false;}

if(document.formulario.q01[0].checked == false && document.formulario.q01[1].checked == false && document.formulario.q01[2].checked == false){alert("Escolha o estado de LIMPEZA do item 01."); return false;}
if(document.formulario.q01[1].checked == true && formulario.obs01.value == ''){alert("Informe uma OBSERVAÇÃO para o item 01."); formulario.obs01.focus(); return false;}
if(document.formulario.q02[0].checked == false && document.formulario.q02[1].checked == false && document.formulario.q02[2].checked == false){alert("Escolha o estado de LIMPEZA do item 02."); return false;}
if(document.formulario.q02[1].checked == true && formulario.obs02.value == ''){alert("Informe uma OBSERVAÇÃO para o item 02."); formulario.obs02.focus(); return false;}
if(document.formulario.q03[0].checked == false && document.formulario.q03[1].checked == false && document.formulario.q03[2].checked == false){alert("Escolha o estado de LIMPEZA do item 03."); return false;}
if(document.formulario.q03[1].checked == true && formulario.obs03.value == ''){alert("Informe uma OBSERVAÇÃO para o item 03."); formulario.obs03.focus(); return false;}
if(document.formulario.q04[0].checked == false && document.formulario.q04[1].checked == false && document.formulario.q04[2].checked == false){alert("Escolha o estado de LIMPEZA do item 04."); return false;}
if(document.formulario.q04[1].checked == true && formulario.obs04.value == ''){alert("Informe uma OBSERVAÇÃO para o item 04."); formulario.obs04.focus(); return false;}
if(document.formulario.q05[0].checked == false && document.formulario.q05[1].checked == false && document.formulario.q05[2].checked == false){alert("Escolha o estado de LIMPEZA do item 05."); return false;}
if(document.formulario.q05[1].checked == true && formulario.obs05.value == ''){alert("Informe uma OBSERVAÇÃO para o item 05."); formulario.obs05.focus(); return false;}
if(document.formulario.q06[0].checked == false && document.formulario.q06[1].checked == false && document.formulario.q06[2].checked == false){alert("Escolha o estado de LIMPEZA do item 06."); return false;}
if(document.formulario.q06[1].checked == true && formulario.obs06.value == ''){alert("Informe uma OBSERVAÇÃO para o item 06."); formulario.obs06.focus(); return false;}
if(document.formulario.q07[0].checked == false && document.formulario.q07[1].checked == false && document.formulario.q07[2].checked == false){alert("Escolha o estado de LIMPEZA do item 07."); return false;}
if(document.formulario.q07[1].checked == true && formulario.obs07.value == ''){alert("Informe uma OBSERVAÇÃO para o item 07."); formulario.obs07.focus(); return false;}
if(document.formulario.q08[0].checked == false && document.formulario.q08[1].checked == false && document.formulario.q08[2].checked == false){alert("Escolha o estado de LIMPEZA do item 08."); return false;}
if(document.formulario.q08[1].checked == true && formulario.obs08.value == ''){alert("Informe uma OBSERVAÇÃO para o item 08."); formulario.obs08.focus(); return false;}
if(document.formulario.q09[0].checked == false && document.formulario.q09[1].checked == false && document.formulario.q09[2].checked == false){alert("Escolha o estado de LIMPEZA do item 09."); return false;}
if(document.formulario.q09[1].checked == true && formulario.obs09.value == ''){alert("Informe uma OBSERVAÇÃO para o item 09."); formulario.obs09.focus(); return false;}
if(document.formulario.q10[0].checked == false && document.formulario.q10[1].checked == false && document.formulario.q10[2].checked == false){alert("Escolha o estado de LIMPEZA do item 10."); return false;}
if(document.formulario.q10[1].checked == true && formulario.obs10.value == ''){alert("Informe uma OBSERVAÇÃO para o item 10."); formulario.obs10.focus(); return false;}
if(document.formulario.q11[0].checked == false && document.formulario.q11[1].checked == false && document.formulario.q11[2].checked == false){alert("Escolha o estado de LIMPEZA do item 11."); return false;}
if(document.formulario.q11[1].checked == true && formulario.obs11.value == ''){alert("Informe uma OBSERVAÇÃO para o item 11."); formulario.obs11.focus(); return false;}
if(document.formulario.q12[0].checked == false && document.formulario.q12[1].checked == false && document.formulario.q12[2].checked == false){alert("Escolha o estado de LIMPEZA do item 12."); return false;}
if(document.formulario.q12[1].checked == true && formulario.obs12.value == ''){alert("Informe uma OBSERVAÇÃO para o item 12."); formulario.obs12.focus(); return false;}
if(document.formulario.q13[0].checked == false && document.formulario.q13[1].checked == false && document.formulario.q13[2].checked == false){alert("Escolha o estado de LIMPEZA do item 13."); return false;}
if(document.formulario.q13[1].checked == true && formulario.obs13.value == ''){alert("Informe uma OBSERVAÇÃO para o item 13."); formulario.obs13.focus(); return false;}
if(document.formulario.q14[0].checked == false && document.formulario.q14[1].checked == false && document.formulario.q14[2].checked == false){alert("Escolha o estado de LIMPEZA do item 14."); return false;}
if(document.formulario.q14[1].checked == true && formulario.obs14.value == ''){alert("Informe uma OBSERVAÇÃO para o item 14."); formulario.obs14.focus(); return false;}
if(document.formulario.q15[0].checked == false && document.formulario.q15[1].checked == false && document.formulario.q15[2].checked == false){alert("Escolha o estado de LIMPEZA do item 15."); return false;}
if(document.formulario.q15[1].checked == true && formulario.obs15.value == ''){alert("Informe uma OBSERVAÇÃO para o item 15."); formulario.obs15.focus(); return false;}
if(document.formulario.q16[0].checked == false && document.formulario.q16[1].checked == false && document.formulario.q16[2].checked == false){alert("Escolha o estado de LIMPEZA do item 16."); return false;}
if(document.formulario.q16[1].checked == true && formulario.obs16.value == ''){alert("Informe uma OBSERVAÇÃO para o item 16."); formulario.obs16.focus(); return false;}
if(document.formulario.q17[0].checked == false && document.formulario.q17[1].checked == false && document.formulario.q17[2].checked == false){alert("Escolha o estado de LIMPEZA do item 17."); return false;}
if(document.formulario.q17[1].checked == true && formulario.obs17.value == ''){alert("Informe uma OBSERVAÇÃO para o item 17."); formulario.obs17.focus(); return false;}
if(document.formulario.q18[0].checked == false && document.formulario.q18[1].checked == false && document.formulario.q18[2].checked == false){alert("Escolha o estado de LIMPEZA do item 18."); return false;}
if(document.formulario.q18[1].checked == true && formulario.obs18.value == ''){alert("Informe uma OBSERVAÇÃO para o item 18."); formulario.obs18.focus(); return false;}
if(document.formulario.q19[0].checked == false && document.formulario.q19[1].checked == false && document.formulario.q19[2].checked == false){alert("Escolha o estado de LIMPEZA do item 19."); return false;}
if(document.formulario.q19[1].checked == true && formulario.obs19.value == ''){alert("Informe uma OBSERVAÇÃO para o item 19."); formulario.obs19.focus(); return false;}
if(document.formulario.q20[0].checked == false && document.formulario.q20[1].checked == false && document.formulario.q20[2].checked == false){alert("Escolha o estado de LIMPEZA do item 20."); return false;}
if(document.formulario.q20[1].checked == true && formulario.obs20.value == ''){alert("Informe uma OBSERVAÇÃO para o item 20."); formulario.obs20.focus(); return false;}
if(document.formulario.q21[0].checked == false && document.formulario.q21[1].checked == false && document.formulario.q21[2].checked == false){alert("Escolha o estado de LIMPEZA do item 21."); return false;}
if(document.formulario.q21[1].checked == true && formulario.obs21.value == ''){alert("Informe uma OBSERVAÇÃO para o item 21."); formulario.obs21.focus(); return false;}
if(document.formulario.q22[0].checked == false && document.formulario.q22[1].checked == false && document.formulario.q22[2].checked == false){alert("Escolha o estado de LIMPEZA do item 22."); return false;}
if(document.formulario.q22[1].checked == true && formulario.obs22.value == ''){alert("Informe uma OBSERVAÇÃO para o item 22."); formulario.obs22.focus(); return false;}
if(document.formulario.q23[0].checked == false && document.formulario.q23[1].checked == false && document.formulario.q23[2].checked == false){alert("Escolha o estado de LIMPEZA do item 23."); return false;}
if(document.formulario.q23[1].checked == true && formulario.obs23.value == ''){alert("Informe uma OBSERVAÇÃO para o item 23."); formulario.obs23.focus(); return false;}
if(document.formulario.q24[0].checked == false && document.formulario.q24[1].checked == false && document.formulario.q24[2].checked == false){alert("Escolha o estado de LIMPEZA do item 24."); return false;}
if(document.formulario.q24[1].checked == true && formulario.obs24.value == ''){alert("Informe uma OBSERVAÇÃO para o item 24."); formulario.obs24.focus(); return false;}
if(document.formulario.q25[0].checked == false && document.formulario.q25[1].checked == false && document.formulario.q25[2].checked == false){alert("Escolha o estado de LIMPEZA do item 25."); return false;}
if(document.formulario.q25[1].checked == true && formulario.obs25.value == ''){alert("Informe uma OBSERVAÇÃO para o item 25."); formulario.obs25.focus(); return false;}
if(document.formulario.q26[0].checked == false && document.formulario.q26[1].checked == false && document.formulario.q26[2].checked == false){alert("Escolha o estado de LIMPEZA do item 26."); return false;}
if(document.formulario.q26[1].checked == true && formulario.obs26.value == ''){alert("Informe uma OBSERVAÇÃO para o item 26."); formulario.obs26.focus(); return false;}

return true;

}



	
function buscar_postos(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
      }
    }
	
function buscar_postos2(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos2.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos2').html(dataReturn);
        });
      }
    }
	
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

    $(function() {
        $('#cliente').on('change', function() {
            var _this = $(this).find(':selected');
            $('#cliente1').val(_this.data('campo'));
        });
    });
</script>
<? include("../roda.php"); ?>