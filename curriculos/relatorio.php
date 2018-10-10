<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("privado.php");

$tip = $_SESSION['tipo']; switch ($tip) {
case "adm": $tipo2 = "alterac"; break;
case "rh": $tipo2 = "alterac2"; break;}

if ($usuario != ''){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a essa lista.');
		window.location.href='index.php';
        </SCRIPT>");}else{};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

$ordemrec = $_POST['o'];
switch ($ordemrec) {
case " ORDER BY nome ": $selectedn = "selected"; $selectedr = ""; $selecteds = ""; $selectedd = ""; break;
case " ORDER BY regiao,nome ": $selectedn = ""; $selectedr = "selected"; $selecteds = ""; $selectedd = ""; break;
case " ORDER BY status,nome ": $selectedn = ""; $selectedr = ""; $selecteds = "selected"; $selectedd = ""; break;
case " ORDER BY date,nome ": $selectedn = ""; $selectedr = ""; $selecteds = ""; $selectedd = "selected"; break;}


?>
<? include("topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal"> Consulta de Currículos</h1>
            </header>
          </div>
        </div>
        <form name="form1" action="paginacao.php" method="GET">
          <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Região:
                <select class="col-md-4 col-sm-6 col-xs-12" name="r">
                  <option value="">Todos</option>
                  <option selected="selected" value="<?= $_POST['r'] ?>">
                  <?= $_POST['r'] ?>
                  </option>
                  <?php
$consulta=mysql_query("SELECT * FROM curric group by regiao order by regiao ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['regiao']."'>".$dados['regiao']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Área de Atuação:
                <select class="col-md-4 col-sm-6 col-xs-12" name="a">
                  <option value="">Todos</option>
                  <option selected="selected" value="<?= $_POST['a'] ?>">
                  <?= $_POST['a'] ?>
                  </option>
                  <option value="Limpeza">Limpeza</option>
                  <option value="Servicos Gerais">Servicos Gerais</option>
                  <option value="Portaria">Portaria</option>
                  <option value="Vigilancia Patrimonial">Vigilancia Patrimonial</option>
                  <option value="Administrativo">Administrativo</option>
                  <option value="Zeladoria">Zeladoria</option>
                  <option value="Manutencao">Manutencao</option>
                  <option value="Jardinagem">Jardinagem</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row">Situação:
                <select class="col-md-4 col-sm-6 col-xs-12" name="s">
                  <option value="">Todos</option>
                  <option selected="selected" value="<?= $_POST['s'] ?>">
                  <?= $_POST['s'] ?>
                  </option>
                  <?php
$consulta=mysql_query("SELECT * FROM curric group by status order by status ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['status']."'>".$dados['status']."</option>");}
?>
                </select>
              </div>
            </div>
            <div class="col-md-6 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Sexo: <br />
                <div class="row">
                  <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-success col-md-3 col-sm-6 col-xs-6" for="Masculino" <?php echo $_POST['x'] == 'Masculino' ? "checked" : "";?>>
                      <input name="x" id="Masculino" type="radio" value="Masculino" ondblclick="limparRadios('x');" >
                      Masculino</label>
                    <label class="btn btn-danger col-md-3 col-sm-6 col-xs-6" for="Feminino" <?php echo $_POST['x'] == 'Feminino' ? "checked" : "";?>>
                      <input name="x" id="Feminino" type="radio" value="Feminino" ondblclick="limparRadios('x');" >
                      Feminino</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Deficiente: <br />
                <div class="row">
                  <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-success col-md-3 col-sm-6 col-xs-6" for="defsim" <?php echo $_POST['d'] == 'Possui deficiencia ' ? "checked" : "";?>>
                      <input name="d" id="defsim" type="radio" value="Possui deficiencia " ondblclick="limparRadios('d');" >
                      SIM</label>
                    <label class="btn btn-danger col-md-3 col-sm-6 col-xs-6" for="defnao" <?php echo $_POST['d'] == '' ? "checked" : "";?>>
                      <input name="d" id="defnao" type="radio" value="" ondblclick="limparRadios('d');" >
                      NÃO</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Data de Cadastro: <br>
                <input name="comeco" type="date" id="comeco" maxlength="10" onkeypress="formatar(this, '##/##/####')"/>
                a
                <input name="termino" type="date" id="termino" maxlength="10" onkeypress="formatar(this, '##/##/####')"/>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Palavra: <br />
                <input name="p"  class="col-md-4 col-sm-6 col-xs-12"  value="<?= $_POST['p'] ?>" type="text" id="p"/>
              </div>
            </div>
            <div class="col-md-12 element-short-bottom text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row"> Ordem:
                <select class="col-md-4 col-sm-6 col-xs-12" name="o">
                  <option value=" ORDER BY nome " <?= $selectedn ?>>Nome</option>
                  <option value=" ORDER BY regiao,nome " <?= $selectedr ?>>Região</option>
                  <option value=" ORDER BY status,nome " <?= $selecteds ?>>Situação</option>
                  <option value=" ORDER BY date,nome " <?= $selectedd ?>>Data de Cadastro</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
              <div class="row">
                <input style="width:30%" type="submit" name="ok" value="Filtrar" />
              </div>
            </div>
            <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s"> </div>
          </div>
          <br />
          <br />
        </form>
      </div>
    </section>
  </article>
</div>
<? include("roda.php"); ?>
