<?php
session_start();
header('Content-type: text/html; charset=UTF-8',true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");

include("../privado.php");

if ($_SESSION['tipo'] != "sgi" && $_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$sql = "SELECT * FROM checklist1 WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

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
              <h1 class="super hairline bordered bordered-normal">Check List Supervisão - Finalizados</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="enviafp.php" target="" onsubmit="">
          <div class="row ">
            <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  >
              <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  > Cliente: <b> <?php $consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $linha['cliente'] . "'");
	$cliente_posto = '';
	while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {$cliente_posto = $cliente_hk['NOMECLI'];}
echo 	$cliente_posto ?>
                  <input readonly="readonly" style="display:none" name="cliente" type="text" id="cliente" size="auto" value="<?php $consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $linha['cliente'] . "'");
	$cliente_posto = '';
	while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {$cliente_posto = $cliente_hk['NOMECLI'];}
echo 	$cliente_posto ?>"/>
                  </b></div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  > Atividade: <b> <?php echo $linha['ativ'] ?>
                  <input readonly="readonly" style="display:none" name="ativ" type="text" id="ativ" size="auto" value="<?php echo $linha['ativ'] ?>"/>
                  </b></div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  > Supervisor: <b> <? echo "$usuario"; ?></b></div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center "  > Data do Checklist: <b> <?php $sp = explode(' ', $linha['dataout']);
	$exp = explode('-', $sp[0]);
	$data = $exp[2] . '/' . $exp[1] . '/' . $exp[0]; 
	echo $data ?>
                  <input readonly="readonly" style="display:none" name="dataout" type="text" id="dataout" size="auto" value="<?php echo $linha['dataout'] ?>"/>
                  </b></div>
              </div>
              <br />
              <br />
              <div style="display:none">
                <input name="datain" id="datain" type="text" value="<?php echo $linha['datain'] ?>">
                <input name="id2" id="id2" type="text" value="<?php echo $linha['id'] ?>">
                <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
                <input name="emailuser" type="text" value="<? echo "$email"; ?>">
              </div>
              <input type="submit" name="submit" id="submit" value="Gerar PDF e Enviar">
            </div>
          </div>
        </form>
        <br />
        <br />
        <div class="row ">
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_144"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script src='scripts.js'></script>
<? include("../roda.php"); ?>
