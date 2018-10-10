<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
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
        <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
          <h1 class="super hairline bordered bordered-normal"></h1>
          <h1 class="super hairline bordered bordered-normal">Cadastro de Clientes</h1>
        </header>
      </div>
    </div>
    <div class="row">
      
<form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="insert.php" target="" onsubmit="">  

<div class="col-md-12">Contratante / Razão Social<br>
<input class="col-md-12" type="text" name="campo4" id="campo4"/></div>

<div class="col-md-12">Rua e Bairro<br>
<input class="col-md-12" type="text" id="campo5" name="campo5"/></div>

<div class="col-md-4">Cidade<br>
<input class="col-md-11" type="text" name="campo6" id="campo6" /></div>

<div class="col-md-4">CEP<br>
<input class="col-md-11" name="campo7" maxlength="10" type="text" id="campo7" onkeypress="formatar(this, '##.###-###'); return SomenteNumero(event)" /></div>

<div class="col-md-4">Fone / Fax<br>
<input class="col-md-11" name="campo11" type="text" id="campo11"/></div>

<div class="col-md-12">Página Web<br>
<input class="col-md-6" name="campo12" type="text" id="campo12" /></div>

<div class="col-md-4">CNPJ<br>
<input class="col-md-11" name="campo8" type="text" id="campo8" maxlength="18" onkeypress="formatar(this, '##.###.###/####-##'); return SomenteNumero(event)" /></div>

<div class="col-md-4">I.Est.<br>
<input class="col-md-11" name="campo9" type="text" id="campo9"/></div>

<div class="col-md-4">I. Mun<br>
<input class="col-md-11" name="campo10" type="text" id="campo10"/></div>

<div class="col-md-12">E-mail para cobrança e envio de documentos<br>
<input class="col-md-6" name="campo13" type="text" id="campo13"/></div>

<div class="col-md-12">Local Implantação<br>
<input class="col-md-12" type="text" name="campo14" id="campo14"/></div>

<div class="col-md-6">Contato Comercial / Faturamento<br>
<input class="col-md-11" type="text" name="campo15" id="campo15"/></div>

<div class="col-md-6">E-mail<br>
<input class="col-md-11" type="text" name="campo16" id="campo16"/></div>

<div class="col-md-6">Responsável Legal<br>
<input class="col-md-11" type="text" name="campo17" id="campo17"/></div>

<div class="col-md-6">CPF<br>
<input class="col-md-11" type="text" name="campo18" id="campo18"/></div>

<div class="col-md-6">Gestor do Contrato<br>
<input class="col-md-11" name="respleg" type="text" id="respleg"/></div>

<div class="col-md-6"></div>

<div style="display:none" id="esconde6">
<div class="col-md-6">Reajuste do Contrato pelo Índice</div>
<div class="col-md-6"><select name="regcon" id="regcon" value="<?= $linha['regcon'] ?>"><?= $linha['regcon'] ?>
        <option selected="selected" value=""> Selecione...</option>
        <option value="O Reajuste do Contrato sera pelo Indice do Salario Minimo Nacional"> Salário mínimo nacional</option>
        <option value="O Reajuste do Contrato sera pelo Indice do Salario da Categoria dos Colaboradores"> Salário categoria dos colaboradores</option>
        </select></div>
</div>

<div style="display:none"><input name="nomeuser" id="nomeuser" type="text" value="<? echo "$usuario"; ?>">
<input name="forv" id="forv" type="text" value="<? echo "$forv"; ?>">
<input name="usuario" type="text" value="<? echo "$usuario"; ?>"><input name="emailuser" type="text" id="emailuser" value="<? echo "$email"; ?>"></div>

<div class="col-md-12">
<br /><br />
<input name="id2" type="hidden" id="id2" size="35" value="<?php echo $linha['id'] ?>"/>
<input class="btn btn-info" type="submit" name="submit" id="submit"  value="Salvar">
</div>

</form>

    <div class="col-md-12 text-left small-screen-center "  > <br />
      <br />
      <? echo "$ver_for_168"; ?><br />
      <br />
    </div>
  </div>
</div>
</section>
</article>
</div>


<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{return (Value > 9) ? "" + Value : "0" + Value;}

function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  { src.value += texto.substring(0,1);  }}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{if (tecla==8 || tecla==0) return true;
	else  return false;}}

</script>
<? include("../roda.php"); ?>