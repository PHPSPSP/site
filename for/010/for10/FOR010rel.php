<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

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
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Relatório de Visitas</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR010pag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Supervisor:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="s">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM visita group by nomesup order by nomesup ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nomesup']."'>".$dados['nomesup']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Cliente:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="c">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT * FROM visita group by nomeposto order by nomeposto ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nomeposto']."'>".$dados['nomeposto']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Atividade:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="a">
                  <option value="">Todas</option>
                  <?php
$consulta=mysql_query("SELECT * FROM visita group by tipo order by tipo ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['tipo']."'>".$dados['tipo']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Conformidade:
                <div class="row">
                  <div class="btn-group col-md-6 col-sm-8 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-success col-md-6 col-sm-6 col-xs-6" for="x1">
                      <input name="x" id="x1" type="radio" value="conf" ondblclick="limparRadios('x1');"/>
                      Conforme</label>
                    <label class="btn btn-danger col-md-6 col-sm-6 col-xs-6" for="x2">
                      <input name="x" id="x2" type="radio" value="inconf" ondblclick="limparRadios('x2');"/>
                      Não Conforme</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Período: <br>
                <input name="inicio" type="text" id="inicio" maxlength="10" onkeypress="formatar(this, '##/##/####')"/>
                a
                <input name="final" type="text" id="final" maxlength="10" onkeypress="formatar(this, '##/##/####')"/>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">Palavra Chave:<br>
                <input class="col-md-6 col-sm-6 col-xs-12" name="p" type="text" id="p"/>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ocultar Observação:
                <div class="row">
                  <div class="btn-group col-md-6 col-sm-8 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-success col-md-6 col-sm-6 col-xs-6" for="b1">
                      <input name="b" id="b1" type="radio" value="none" ondblclick="limparRadios('b1');"/>
                      Sim</label>
                    <label class="btn btn-danger col-md-6 col-sm-6 col-xs-6" for="b2">
                      <input name="b" id="b2" type="radio" value="block" ondblclick="limparRadios('b2');"/>
                      Não</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ordem:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY nomesup, data, horac, nomeposto, tipo ">Supervisor</option>
                  <option value=" ORDER BY nomeposto, data, horac, nomesup, tipo " selected="selected">Cliente</option>
                  <option value=" ORDER BY tipo, data, horac, nomeposto, nomesup ">Atividade</option>
                  <option value=" ORDER BY data, horac, nomeposto, nomesup, tipo ">Data da Visita</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center "  >
              <div class="row">
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center "  > <br />
              <br />
              <? echo "$ver_for_10"; ?><br />
              <br />
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }}
  </script>
<? include("../roda.php"); ?>
