<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
    window.location.href='../logado.php';
        </SCRIPT>");}else{

$bancocon = $_GET['banco'];

if ($bancocon!=""){
$sql = "SELECT * FROM ".$bancocon." WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

/*$usuario22 = $linha['nomeuser'];*/
$nomeuser = $linha['nomeuser'];
$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

$consulta = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$linha['escatual']."'");
$dados = mysql_fetch_array($consulta);
$escatual2 = $dados['R6_DESC'];

/*if ($usuario != $usuario22){  echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Voce nao tem permissao para alterar esse FOR! Somente o usuario responsavel pelo informe do mesmo pode altera-lo.');
window.location.href='FOR3482.php';
</SCRIPT>");}else{*/

if ($linha['nomeuser'] = ""){   echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Ocorreu um erro na listagem do FOR, entre em contato com o Departamento de TI.');
window.location.href='FOR3482.php';
</SCRIPT>");}else{  };
}

/*}*/ else {};

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
              <h1 class="super hairline bordered bordered-normal">Alteração Contratual</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div style="width: 100%;  margin:0 auto;"> <br />
            <br />
            <strong> Dados da SPSP: </strong><br />
          </div>
          <form enctype="multipart/form-data" method="post" name="formulario" id="formulario" action="" target="">
            <div >
              <div style="width: 100%;  margin:0 auto;"><br />
                <div style="width:48%; float:left"> Gestor:<br />
                  <select class="form-control" name="gestor"  id="gestor">
                    <option selected="selected" value="<?= $linha['gestor'] ?>">
                    <?= $linha['gestor'] ?>
                    </option>
                    <option value="">Selecione...</option>
                    <?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
?>
                  </select>
                  <br />
                  Supervisor:<br />
                  <select class="form-control"  name="supervisor" id="supervisor">
                    <option selected="selected" value="<?= $linha['campo48'] ?>">
                    <?= $linha['campo48'] ?>
                    </option>
                    <?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='sup' or tipo='scom' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
?>
                    <option value="">Selecione...</option>
                    <?php echo $lista_supervisores; ?>
                  </select>
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Empresa:<br />
                  <select class="form-control"  name="empresa" id="empresa" onclick="valemp();">
                    <option selected="selected" value="<?= $linha['empresa'] ?>">
                    <?= $linha['empresa'] ?>
                    </option>
                    <option value="">Selecione...</option>
                    <?php echo $lista_empresas; ?>
                  </select>
                  <br />
                  Filial:<br />
                  <select class="form-control"  name="regiao" id="regiao">
                    <option selected="selected" value="<?= $linha['regiao'] ?>">
                    <?= $linha['regiao'] ?>
                    </option>
                    <option value=""> Selecione...</option>
                    <?php echo $lista_regiao; ?>
                  </select>
                </div>
                <br />
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%;  margin:0 auto;">
            <strong>Dados do Cliente:</strong><br />
            <div >
              <div style="width: 100%;  margin:0 auto;"><br />
                <div style="width:48%; float:left"> Contratante/Razão Social: <br />
                  <textarea name="razaosocial" cols="70" rows="3" id="razaosocial" value="<?php echo $linha['campo4']; echo " - ".$linha['campo14'] ?>"><?php echo $linha['campo4']; echo " - ".$linha['campo14'] ?></textarea>
                </div>
                <div style="width:20%; float:left"> Código do Cliente:<br />
                  <input name="codigocli" type="text" id="codigocli" size="30" value="<?php echo $linha['campo2'] ?>"/>
                </div>
                <div style="width:26%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> CNPJ: <br />
                  <input name="cnpj" type="text" id="cnpj" size="35" maxlength="18" onkeypress="formatar(this, '##.###.###/####-##'); return SomenteNumero(event)" value="<?php echo $linha['campo8'] ?>"/>
                </div>
                <br />
                <br />
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;">
            <strong>Informações da Atividade / Posto:</strong><br />
            <div >
              <div style="width: 100%; margin:0 auto;"><br />
                <div style="width:48%; float:left"> Atividade:<br />
                  <select class="form-control"  name="atividade" id="atividade">
                    <option selected="selected" value="<?= $linha['campo19'] ?>">
                    <?= $linha['campo19'].$linha['outraatv'] ?>
                    </option>
                    <option value=""> Selecione...</option>
                    <?php echo $lista_atividades; ?>
                  </select>
                  <br />
                  Data da Alteração:<br />
                  <input name="dataalt" type="text" id="dataalt" onkeypress="formatar(this, '##/##/####'); return SomenteNumero(event)" size="15" maxlength="10" />
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Nº de Colaboradores:<br />
                  <input name="numcolab" type="text" id="numcolab"  size="3" />
                  <br />
                  <br />
                  Nome do Colaboradores (opcional):<br />
                  <input name="nomecolab" type="text" id="nomecolab"  size="50"/>
                </div>
                <br />
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Informações de Escala/Horário:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <div style="width:48%; float:left"> <strong>Anterior</strong><br />
                    Escala:<br />
                    <input name="escalaatual" type="text" id="escalaatual" value="<?= $linha['escatual']." - ".$escatual2; ?>" size="60"/>
                    <br />
                    <br />
                    <table width="100%" border="0" cellspacing="0" cellpadding="000">
                      <tr>
                        <td>Horário:<br />
                          <input name="horaatual" type="text" id="horaatual" size="30"/>
                          <br />
                          <br /></td>
                        <td>Intervalo:<br />
                          <input name="intervaloatual" type="text" id="intervaloatual" size="30"/>
                          <br />
                          <br /></td>
                      </tr>
                      <tr>
                        <td>Horário Sábado:<br />
                          <input name="hsabadoatual" type="text" id="hsabadoatual" size="30"/></td>
                        <td>Horário Outros Dias:<br />
                          <input name="outrohoraatual" type="text" id="outrohoraatual" size="30"/></td>
                      </tr>
                    </table>
                  </div>
                  <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> <strong>Novo</strong><br />
                    Escala:<br />
                    <select class="form-control"  name="novaescala" id="novaescala">
                      <option selected="selected" value="<?= $linha['escatual'] ?>">
                      <?= $escatual2; ?>
                      </option>
                      <option value=""> Selecione...</option>
                      <?php echo $lista_escalas; ?>
                    </select>
                    <br />
                    <table width="100%" border="0" cellspacing="0" cellpadding="000">
                      <tr>
                        <td>Horário:<br />
                          <input name="novohora" type="text" id="novohora" size="30"/>
                          <br />
                          <br /></td>
                        <td>Intervalo:<br />
                          <input name="novointervalo" type="text" id="novointervalo" size="30"/>
                          <br />
                          <br /></td>
                      </tr>
                      <tr>
                        <td>Horário Sábado:<br />
                          <input name="novohsabado" type="text" id="novohsabado" size="30"/></td>
                        <td>Horário Outros Dias:<br />
                          <input name="novooutrohora" type="text" id="novooutrohora" size="30"/></td>
                      </tr>
                    </table>
                  </div>
                  <br />
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Benefícios Contrato:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  Legenda:<br />
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>1</strong></div>
                  <div style="width: 10%; float:left; margin-left:5px"> Incluir</div>
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>2</strong></div>
                  <div style="width: 10%; float:left; margin-left:5px"> Retirar</div>
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>3</strong></div>
                  <div style="width: 10; float:left; margin-left:5px"> Alterar</div>
                  <div style="clear:both"></div>
                  <br />
                  <table width="100%" border="0" cellspacing="0" cellpadding="000">
                    <tr>
                      <td><input name="insalcheck" type="text" id="insalcheck" size="3"/>
                        Insalubridade </td>
                      <td>obs.:
                        <input name="insalobs" type="text" id="insalobs" size="40"/></td>
                      <td><input name="insalperc" type="text" id="insalperc" size="5"/>
                        %</td>
                      <td><br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="periccheck" type="text" id="periccheck" size="3"/>
                        Periculosidade </td>
                      <td>obs.:
                        <input name="pericobs" type="text" id="pericobs" size="40"/></td>
                      <td><input name="pericoperc" type="text" id="pericoperc" size="5"/>
                        %</td>
                      <td><br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="assidcheck" type="text" id="assidcheck" size="3"/>
                        Assiduidade </td>
                      <td>obs.:
                        <input name="assidobs" type="text" id="assidobs" size="40"/></td>
                      <td><input name="assidperc" type="text" id="assidperc" size="5"/>
                        %</td>
                      <td>R$
                        <input name="assidval" type="text" id="assidval" size="10"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="gratifcheck" type="text" id="gratifcheck" size="3"/>
                        Gratificação </td>
                      <td>obs.:
                        <input name="gratifobs" type="text" id="gratifobs" size="40"/></td>
                      <td><input name="gratifperc" type="text" id="gratifperc" size="5"/>
                        %</td>
                      <td>R$
                        <input name="gratifval" type="text" id="gratifval" size="10"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="valtranspcheck" type="text" id="valtranspcheck" size="3"/>
                        Vale Transporte </td>
                      <td colspan="3">obs.:
                        <input name="valtranspobs" type="text" id="valtranspobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="convmedcheck" type="text" id="convmedcheck" size="3"/>
                        Convênio Médico </td>
                      <td colspan="3">obs.:
                        <input name="convmedobs" type="text" id="convmedobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="convodontocheck" type="text" id="convodontocheck" size="3"/>
                        Convênio Odontológico </td>
                      <td colspan="3">obs.:
                        <input name="convodontoobs" type="text" id="convodontoobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="valimentacheck" type="text" id="valimentacheck" size="3"/>
                        Vale Alimentação </td>
                      <td colspan="3">obs.:
                        <input name="valimentaobs" type="text" id="valimentaobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="vrefeicaocheck" type="text" id="vrefeicaocheck" size="3"/>
                        Vale Refeição </td>
                      <td colspan="3">obs.:
                        <input name="vrefeicaoobs" type="text" id="vrefeicaoobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="art71diucheck" type="text" id="art71diucheck" size="3"/>
                        Artigo 71 Diurno </td>
                      <td colspan="3">obs.:
                        <input name="art71diuobs" type="text" id="art71diuobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="art71notcheck" type="text" id="art71notcheck" size="3"/>
                        Artigo 71 Noturno </td>
                      <td colspan="3">obs.:
                        <input name="art71notobs" type="text" id="art71notobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="art71sdfdcheck" type="text" id="art71sdfdcheck" size="3"/>
                        Artigo 71 SDF diurno </td>
                      <td colspan="3">obs.:
                        <input name="art71sdfdobs" type="text" id="art71sdfdobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="art71sdfncheck" type="text" id="art71sdfncheck" size="3"/>
                        Artigo 71 SDF Noturno </td>
                      <td colspan="3">obs.:
                        <input name="art71sdfnobs" type="text" id="art71sdfnobs" size="70"/>
                        <br />
                        <br /></td>
                    </tr>
                    <tr>
                      <td><input name="sum444check" type="text" id="sum444check" size="3"/>
                        Súmula 444 </td>
                      <td colspan="3">obs.:
                        <input name="sum444obs" type="text" id="sum444obs" size="70"/></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Outras Informações:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  Legenda:<br />
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>1</strong></div>
                  <div style="width: 10%; float:left; margin-left:5px"> Incluir</div>
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>2</strong></div>
                  <div style="width: 10%; float:left; margin-left:5px"> Retirar</div>
                  <div style="width: 5%; text-align:center; background-color:#CCC; float:left">0<strong>3</strong></div>
                  <div style="width: 10; float:left; margin-left:5px"> Alterar</div>
                  <div style="clear:both"></div>
                  <br />
                  <table width="100%" border="0" cellspacing="0" cellpadding="000">
                    <tr>
                      <td><input name="materialcheck" type="text" id="materialcheck" size="3"/>
                        Materiais </td>
                      <td>R$
                        <input name="materialval" type="text" id="materialval" size="15"/></td>
                      <td>Cobrar separado:
                        <input type="radio" name="materialradio" value="SIM" id="radiomat1" />
                        <label for="radiomat1">SIM</label>
                        <input type="radio" name="materialradio" value="NAO" id="radiomat2" />
                        <label for="radiomat2">NÃO</label></td>
                      <td>Itens
                        <input name="materialitem" type="text" id="materialitem" size="60"/></td>
                    </tr>
                    <tr> </tr>
                    <tr>
                      <td><input name="produtocheck" type="text" id="produtocheck" size="3"/>
                        Produtos </td>
                      <td>R$
                        <input name="produtoval" type="text" id="produtoval" size="15"/></td>
                      <td>Cobrar separado:
                        <input type="radio" name="produtoradio" value="SIM" id="radioprod1" />
                        <label for="radioprod1">SIM</label>
                        <input type="radio" name="produtoradio" value="NAO" id="radioprod2" />
                        <label for="radioprod2">NÃO</label></td>
                      <td>Itens
                        <input name="produtoitem" type="text" id="produtoitem" size="60"/></td>
                    </tr>
                    <tr> </tr>
                    <tr>
                      <td><input name="locequipcheck" type="text" id="locequipcheck" size="3"/>
                        Locação Equipamentos </td>
                      <td>R$
                        <input name="locequipval" type="text" id="locequipval" size="15"/></td>
                      <td>Cobrar separado:
                        <input type="radio" name="locequipradio" value="SIM" id="radiolequip1" />
                        <label for="radiolequip1">SIM</label>
                        <input type="radio" name="locequipradio" value="NAO" id="radiolequip2" />
                        <label for="radiolequip2">NÃO</label></td>
                      <td>Itens
                        <input name="locequipitem" type="text" id="locequipitem" size="60"/></td>
                    </tr>
                    <tr> </tr>
                  </table>
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div >
              <div style="width: 100%; margin:0 auto;">
                <table width="100%" border="0" cellspacing="0" cellpadding="000">
                  <tr>
                    <td>Observações:<br />
                      <textarea name="observacao" cols="70" rows="3" id="observacao" ></textarea></td>
                    <td>Solicitante Cliente:<br />
                      <textarea name="solcliente" cols="70" rows="3" id="solcliente" ></textarea></td>
                  </tr>
                </table>
                <div style="clear:both"></div>
                <div style="display:none">
                  <input name="nomeuser" id="nomeuser" type="text" value="<? echo "$usuario"; ?>">
                  <input name="usuario" id="usuario" type="text" value="<? echo "$usuario"; ?>">
                  <input name="emailuser" id="emailuser" type="text" value="<? echo "$email"; ?>">
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;">
              <button type="submit" name="submit" id="submit"  value="Gerar PDF e Enviar" onclick="enviar();" class="btn btn-info"> Gerar PDF e Enviar </button>
              <br />
              <br />
            </div>
          </form>
        </div>
        <div class="col-md-12 text-left small-screen-center "  > <br />
          <br />
          <? echo "$ver_for_348"; ?><br />
          <br />
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function enviar(){
  console.log(document.formulario);
  document.formulario.action = "geraphp.php";
  document.formulario.target = "";
/*  document.formulario.submit();*/}

function showFilled(Value) 
{ return (Value > 9) ? "" + Value : "0" + Value;}

function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {src.value += texto.substring(0,1);  }}

function check_date(date) {
   var err = 0
   string = date
   var valid = "0123456789/"
   var ok = "yes";
   var temp;
   for (var i=0; i< string.length; i++) {
     temp = "" + string.substring(i, i+1);
     if (valid.indexOf(temp) == "-1") err = 1;
   }
   if (string.length != 10) err=1
   b = string.substring(3, 5)   // month
   c = string.substring(2, 3)   // '/'
   d = string.substring(0, 2)   // day 
   e = string.substring(5, 6)   // '/'
   f = string.substring(6, 10)  // year
   if (b<1 || b>12) err = 1
   if (c != '/') err = 1
   if (d<1 || d>31) err = 1
   if (e != '/') err = 1
   if (f<1850 || f>2050) err = 1
   if (b==4 || b==6 || b==9 || b==11){
     if (d==31) err=1
   }
   if (b==2){
     var g=parseInt(f/4)
     if (isNaN(g)) {
         err=1 
     }
     if (d>29) err=1
     if (d==29 && ((f/4)!=parseInt(f/4))) err=1
   }
   if (err==1) {
    alert("Data de INÍCIO inválida");
  formulario.campo24.focus(); return false;
    return false;
   }
   else {
/*    alert("Data correta");*/
    return true;
   }}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{if (tecla==8 || tecla==0) return true;
  else  return false;}}


</script>
<style type="text/css">
body, td, th {  color: #000000;  font-size: 14px;}
textarea {
  padding: 0;
  outline: none;
  resize: none;
  overflow: hidden;
}
</style>
<? include("../roda.php"); ?>
<? }; ?>