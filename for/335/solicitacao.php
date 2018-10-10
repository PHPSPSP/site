<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
include_once("../listas.php");
include_once("../privado.php");

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

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

$consulta = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$linha['escatual']."'");
$dados = mysql_fetch_array($consulta);
$escatual2 = $dados['R6_DESC'];

} else {};

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
              <h1 class="super hairline bordered bordered-normal">Solicitação de Pagamento</h1>
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
                <div style="width:48%; float:left"> Status da solicitação:<br />
                  <select required="required" class="form-control" name="gestor"  id="gestor">
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
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Empresa:<br />
                  <select required="required" class="form-control"  name="empresa" id="empresa" onclick="valemp();">
                    <option selected="selected" value="<?= $linha['empresa'] ?>">
                    <?= $linha['empresa'] ?>
                    </option>
                    <option value="">Selecione...</option>
                    <?php echo $lista_empresas; ?>
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
                  <textarea required="required" name="razaosocial" cols="70" rows="2" id="razaosocial" value="<?php echo $linha['campo4']; ?>"><?php echo $linha['campo4']; ?></textarea>
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Endereço: <br />
                  <textarea required="required" name="endereco" id="endereco" cols="70" rows="2" value="<?php echo $linha['campo5'] . " - " . $linha['campo6'] . " - " . $linha['campo7']; ?>"/><?php echo $linha['campo5'] . " - " . $linha['campo6'] . " - " . $linha['campo7']; ?></textarea>
                </div>
                <div style="clear:both"></div>
                <div style="width:43%; float:left"> Dados de Faturamento: <br />
                  <input type="radio" name="tipofatur" value="Contrato" id="radiofatur1" />
                    <label for="radiofatur1">Contrato</label>
                  <input type="radio" name="tipofatur" value="Outro: " id="radiofatur2" />
                    <label for="radiofatur2">Outro: </label> <input name="outrofatur" type="text" id="outrofatur" size="30"/>
                </div>
                <div style="width:25%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> Código do Cliente:<br />
                  <input name="codigocli" type="text" id="codigocli" size="30" value="<?php echo $linha['campo2']; ?>"/>
                </div>
                <div style="width:26%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> CNPJ: <br />
                  <input name="cnpj" type="text" id="cnpj" size="35" maxlength="18" onkeypress="formatar(this, '##.###.###/####-##'); return SomenteNumero(event)" value="<?php echo $linha['campo8']; ?>"/>
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
                  <select required="required" class="form-control"  name="atividade" id="atividade">
                    <option value=""> Selecione...</option>
                    <?php echo $lista_atividades; ?>
                  </select>
                  <br />
                  Nº de Colaboradores:<br />
                  <input name="numcolab" type="text" id="numcolab" size="3"/>
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Periodo:<br />
                  Data de Início:<br />
                  <input required="required" name="dataalt" type="text" id="dataalt" onblur="check_date(this.value)" onkeypress="formatar(this, '##/##/####'); return SomenteNumero(event)" size="15" maxlength="10"/>
                  <br />
                  Data de Término:<br />
                  <input required="required" name="datafim" type="text" id="datafim" onblur="check_date(this.value)" onkeypress="formatar(this, '##/##/####'); return SomenteNumero(event)" size="15" maxlength="10"/>
                </div>
                <br />
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Informações de Escala/Horário:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <div style="width:48%; float:left">
                    <table width="100%" border="0" cellspacing="0" cellpadding="000">
                      <tr>
                        <td>Escala:<br />
                          <select required="required" class="form-control"  name="escalaatual" id="escalaatual">
                            <option selected="selected" value="<?= $linha['escatual'] ?>"><?= $escatual2; ?></option>
                            <option value=""> Selecione...</option>
                            <?php echo $lista_escalas; ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Postos:<br />
                          <input name="postos" type="text" id="postos" size="10"/>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="000">
                      <tr>
                        <td>Horário:<br />
                          <input name="horaatual" type="text" id="horaatual" size="30"/>
                        </td>
                      </tr>
                      <tr>
                        <td>Intervalo:<br />
                          <input name="intervaloatual" type="text" id="intervaloatual" size="30"/>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <br />
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Informações de Cobrança / Custo:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <table width="100%" border="0" cellspacing="0" cellpadding="000">
                    <tr>
                      <td>Valor a Cobrar:</td>
                      <td>
                        <input type="radio" name="cobrancaradio" value="Hora Extra" id="radiocob1" />
                        <label for="radiocob1">Hora Extra</label>
                        <input type="radio" name="cobrancaradio" value="Hora Normal" id="radiocob2" />
                        <label for="radiocob2">Hora Normal</label>
                        <input type="radio" name="cobrancaradio" value="Valor Negociado: " id="radiocob3" />
                        <label for="radiocob3">Valor Negociado: </label> R$ <input name="cobrancaval" type="text" id="cobrancaval" size="10"/>
                      </td>
                    </tr>
                    <tr> </tr>
                    <tr>
                      <td>Súmula 444:</td>
                      <td>
                        <input type="radio" name="sumularadio" value="Cobrar" id="radiosumula1" />
                        <label for="radiosumula1">Cobrar</label>
                        <input type="radio" name="sumularadio" value="Nao Cobrar" id="radiosumula2" />
                        <label for="radiosumula2">Não Cobrar</label>
                      </td>
                    </tr>
                    <tr> </tr>
                    <tr>
                      <td>Vencimento:</td>
                      <td>
                        <input type="radio" name="vencitoradio" value="Contrato" id="radiovencito1" />
                        <label for="radiovencito1">Contrato</label>
                        <input type="radio" name="vencitoradio" value="Outro: " id="radiovencito2" />
                        <label for="radiovencito2">Outro: </label> <input name="outrovencto" type="text" id="outrovencto" size="10"/>
                      </td>
                    </tr>
                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="000">
                    <tr>
                      <td width="20%">
                        Materiais: 
                      </td>
                      <td width="50%"><input name="materiais" type="text" id="materiais" size="70"/>
                      </td>
                      <td width="30%">Produtos:
                      </td>
                    </tr>

                    <tr>
                      <td width="20%">
                        Locação Equipamentos: 
                      </td>
                      <td width="50%"><input name="locequip" type="text" id="locequip" size="70"/>
                      </td>
                      <td width="30%">
                        Cobrar Separado:
                        <input type="radio" name="cobprodutradio" value="SIM" id="radiocobpro1" />
                        <label for="radiocobpro1">SIM</label>
                        <input type="radio" name="cobprodutradio" value="NAO" id="radiocobpro2" />
                        <label for="radiocobpro2">NÃO</label>
                      </td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
            <hr style="color:#FFF" />
            <div style="width: 100%; margin:0 auto;"> <strong>Benefícios:</strong><br />
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <table width="100%" border="0" cellspacing="0" cellpadding="000">
                    <tr>
                      <td>
                        Insalubridade:
                      </td>
                      <td>
                        <input type="checkbox" name="insalcheck" value="SIM" id="insalcheck" /><label for="insalcheck">SIM</label>
                      </td>
                      <td>obs.:
                        <input name="insalobs" type="text" id="insalobs" size="40"/></td>
                      <td><input name="insalperc" type="text" id="insalperc" size="5"/>
                        %</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>
                        Periculosidade: 
                      </td>
                      <td><input type="checkbox" name="periccheck" value="SIM" id="periccheck" /><label for="periccheck">SIM</label>
                      </td>
                      <td>obs.:
                        <input name="pericobs" type="text" id="pericobs" size="40"/></td>
                      <td><input name="pericoperc" type="text" id="pericoperc" size="5"/>
                        %</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>
                        Assiduidade: 
                      </td>
                      <td><input type="checkbox" name="assidcheck" value="SIM" id="assidcheck" /><label for="assidcheck">SIM</label>
                      </td>
                      <td>obs.:
                        <input name="assidobs" type="text" id="assidobs" size="40"/></td>
                      <td><input name="assidperc" type="text" id="assidperc" size="5"/>
                        %</td>
                      <td>R$
                        <input name="assidval" type="text" id="assidval" size="10"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Gratificação: 
                      </td>
                      <td><input type="checkbox" name="gratifcheck" value="SIM" id="gratifcheck" /><label for="gratifcheck">SIM</label>
                      </td>
                      <td>obs.:
                        <input name="gratifobs" type="text" id="gratifobs" size="40"/></td>
                      <td><input name="gratifperc" type="text" id="gratifperc" size="5"/>
                        %</td>
                      <td>R$
                        <input name="gratifval" type="text" id="gratifval" size="10"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Vale Transporte: 
                      </td>
                      <td><input type="checkbox" name="valtranspcheck" value="SIM" id="valtranspcheck" /><label for="valtranspcheck">SIM</label>
                      </td>
                      <td colspan="3">obs.:
                        <input name="valtranspobs" type="text" id="valtranspobs" size="70"/>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        Convênio Médico: 
                      </td>
                      <td><input type="checkbox" name="convmedcheck" value="SIM" id="convmedcheck" /><label for="convmedcheck">SIM</label>
                      </td>
                      <td colspan="3">obs.:
                        <input name="convmedobs" type="text" id="convmedobs" size="70"/>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        Convênio Odontológico: 
                      </td>
                      <td><input type="checkbox" name="convodontocheck" value="SIM" id="convodontocheck" /><label for="convodontocheck">SIM</label>
                      </td>
                      <td colspan="3">obs.:
                        <input name="convodontoobs" type="text" id="convodontoobs" size="70"/>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        Vale Alimentação: 
                      </td>
                      <td><input type="checkbox" name="valimentacheck" value="SIM" id="valimentacheck" /><label for="valimentacheck">SIM</label>
                      </td>
                      <td colspan="3">obs.:
                        <input name="valimentaobs" type="text" id="valimentaobs" size="70"/>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        Vale Refeição: 
                      </td>
                      <td><input type="checkbox" name="vrefeicaocheck" value="SIM" id="vrefeicaocheck" /><label for="vrefeicaocheck">SIM</label>
                      </td>
                      <td colspan="3">obs.:
                        <input name="vrefeicaoobs" type="text" id="vrefeicaoobs" size="70"/>
                        </td>
                    </tr>
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
          <? echo "$ver_for_335"; ?><br />
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