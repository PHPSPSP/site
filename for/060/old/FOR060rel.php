<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "adm"){
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
              <h1 class="super hairline bordered bordered-normal"> Contagem de Propostas Enviadas</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="FOR060pag.php" method="GET">
          <div class="row">
          
		  
          
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Comercial:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="s">                  
                  <option value="<?php echo $noome; ?>" selected="selected"><?php echo $noome; ?></option>
                  <?php if ($_SESSION['nome']=='Gustavo Guedes' || $_SESSION['nome']=='Daniel Garcia' || $_SESSION['nome']=='Rodolfo Martini' || $_SESSION['nome']=='Saulo Cirino') { 
                  echo '<option value="">Todos</option>';
                  
$consulta=mysql_query("SELECT * FROM proposta group by usuario order by usuario ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['usuario']."'>".$dados['usuario']."</option>");}
 } ?>
                </select>
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
              <div class="row">Cliente Palavra Chave:<br>
                <input class="col-md-6 col-sm-6 col-xs-12" name="p" type="text" id="p"/>
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
              <div class="row"> Ordem:
                <select class="form-control" class="col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY usuario, nomecliente, id ">Comercial</option>
                  <option value=" ORDER BY nomecliente, usuario, id ">Cliente</option>
                  <option value=" ORDER BY id, usuario, nomecliente " selected="selected">Data da Proposta</option>
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
              <? echo "$ver_for_60"; ?><br />
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
