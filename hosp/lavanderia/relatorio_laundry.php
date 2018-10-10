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
        </SCRIPT>");}else{	};

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
            <header class="text-center element-small-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Relatório de Lavanderia - Entrega de Enxoval</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="relatorio_laundry_pag.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Usuário:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="u">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT e.lavanderia_usuario, e.lavanderia_cliente, c.id, c.nome FROM lavanderia_controle e, usuarios_hosp c where e.lavanderia_cliente = '$clienteativo' AND e.lavanderia_usuario = c.id group by e.lavanderia_usuario order by c.nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['lavanderia_usuario']."'>".$dados['nome']."</option>");}
?>


                </select>
              </div>
            </div>
            
			<div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row">Local:<br>
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="l">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT e.lavanderia_local, e.lavanderia_cliente, c.lavanderia_id_local, c.lavanderia_nome_local FROM lavanderia_controle e, lavanderia_local c where e.lavanderia_cliente = '$clienteativo' AND e.lavanderia_local = c.lavanderia_id_local group by e.lavanderia_local order by c.lavanderia_nome_local ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['lavanderia_local']."'>".$dados['lavanderia_nome_local']."</option>");}
?>
                </select>
              </div>
            </div>                     
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Enxoval: <br>
               <select class="form-control col-md-4 col-sm-6 col-xs-12" name="e">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT e.lavanderia_enxoval, e.lavanderia_cliente, c.lavanderia_id_enxoval, c.lavanderia_nome_enxoval FROM lavanderia_controle e, lavanderia_enxoval c where e.lavanderia_cliente = '$clienteativo' AND e.lavanderia_enxoval = c.lavanderia_id_enxoval group by e.lavanderia_enxoval order by c.lavanderia_nome_enxoval ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['lavanderia_enxoval']."'>".$dados['lavanderia_nome_enxoval']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Enfermeiro: <br>
               <select class="form-control col-md-4 col-sm-6 col-xs-12" name="c">
                  <option value="">Todos</option>
                  <?php
$consulta=mysql_query("SELECT e.lavanderia_enfermagem, e.lavanderia_cliente, c.lavanderia_id_enfermagem, c.lavanderia_nome_enfermagem FROM lavanderia_controle e, lavanderia_enfermagem c where e.lavanderia_cliente = '$clienteativo' AND e.lavanderia_enfermagem = c.lavanderia_id_enfermagem group by e.lavanderia_enfermagem order by c.lavanderia_nome_enfermagem ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['lavanderia_enfermagem']."'>".$dados['lavanderia_nome_enfermagem']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Período: <br>
                <input name="inicio2" type="date" id="inicio2" maxlength="10" />
                a
                <input name="final2" type="date" id="final2" maxlength="10" />
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ordem:
                <select class="form-control col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY lavanderia_usuario, data_hora, lavanderia_local, lavanderia_enxoval ">Usuário</option>
                  <option value=" ORDER BY lavanderia_local, data_hora, lavanderia_enxoval ">Local</option>
                  <option value=" ORDER BY lavanderia_enxoval, data_hora, lavanderia_local ">Enxoval</option>
                  <option value=" ORDER BY data_hora, lavanderia_local, lavanderia_enxoval " selected="selected">Data</option>
                  <option value=" ORDER BY lavanderia_enfermagem, data_hora, lavanderia_local, lavanderia_enxoval ">Enfermeiro</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center "  >
              <div class="row">
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>
