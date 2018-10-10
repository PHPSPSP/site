<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");
include("../config.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

$nomecol = $_GET['nomecol'];
$re = $_GET['re'];
$empresa = $_GET['empresa'];

$rgcolab = $_GET['rgcolab'];
$empresa = $_GET['empresa'];
$data10 = implode("/",array_reverse(explode("-",$_GET['data10'])));
$clinovo = $_GET['clinovo'];
$posto2 = $_GET['posto2'];
$novaescala = $_GET['novaescala'];
$folgfix2= $_GET['folgfix2'];
$folgfix22= $_GET['folgfix22'];
	if ($folgfix22==""){if ($folgfix2==""){$folgfixx2="";}else{$folgfixx2=" - Folga: $folgfix2";};}else{$folgfixx2=" Folga: $folgfix2 e $folgfix22";};

$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$novaescala."'");
$dados2 = mysql_fetch_array($consulta2);
$novaescala = $dados2['R6_DESC'];

$clinovo22 = trim($_GET['clinovo']);
$posto222 = trim($_GET['posto2']);
$query2 = "SELECT EN.CODEND, EN.END_OPT, EN.BAIRRO, EN.NUMERO, CI.CODCID, CI.NOMECID, CI.ESTADO FROM sarclien CL, sarposto PO, sarrlend RE, sarendcl EN, sarcidad CI WHERE CL.NOMECLI LIKE '%". $clinovo22 ."%' AND PO.CODCLI = CL.CODCLI AND PO.NOMEPOS LIKE '%" . $posto222 . "%' AND PO.DTENCERRAM IS NULL AND RE.CODCLI = CL.CODCLI AND RE.CODPOS = PO.CODPOS AND RE.TPENDERECO = 1 AND EN.CODCLI = CL.CODCLI AND EN.CODEND = RE.CODEND AND CI.CODCID = EN.CODCID";

$consulta=mysql_query($query2);
while ($lista_end = mysql_fetch_array($consulta)) {
$rua25 = $lista_end['END_OPT'];
$numero25 = $lista_end['NUMERO'];
$bairro25 = $lista_end['BAIRRO'];
$cidade25 = $lista_end['NOMECID'];
$estado25 = $lista_end['ESTADO'];
}


if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}

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
      <h1 class="super hairline bordered bordered-normal">Comunicado de Transferência e Alteração de Escala</h1>
    </header>
  </div>
</div>

<div class="row">

<div style="width: 100%;  margin:0 auto;">


<div style="width: 100%;  margin:0 auto;"><br />
  <strong> Dados da Comunicação: </strong><br />
</div>
 <form enctype="multipart/form-data" action="envia.php" method="post" name="formulario" id="formulario" onsubmit="return validar(this);"> 
 
    <div style="width: 100%; margin:0 auto;"><br />
 
Ao<br />
Colaborador: <b><? echo "$nomecol"; ?></b><br />
RE: <b><? echo "$re"; ?></b> <br />
Empresa: <b><? echo "$empresa"; ?></b>
<div style="clear:both"></div>
      <br />
    </div>
  
  
  
  
  <div style="width: 100%;  margin:0 auto;"><br />
     <font size="+2">
        <center>
          <strong>COMUNICADO</strong>
        </center>
      </font><br />
</div>

 
    <div style="width: 100%; margin:0 auto; text-align:justify"><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vimos por meio deste, comunicar ao referido colaborador (a) que por motivos de remanejando em seu quadro de colaboradores, a partir de <b><? echo trim("$data10"); ?></b>, passará a exercer suas atividades na sede do cliente <b><? echo trim("$clinovo - $posto2"); ?></b>, localizada no endereço <input name="endere" type="text" id="endere"  size="60" value="<? echo trim("$rua25"); ?>" />, Bairro <input name="bcasa" type="text" id="bcasa"  size="30" value="<? echo trim("$bairro25"); ?>"/>, cidade/estado <input name="ccasa" type="text" id="ccasa"  size="20" value="<? echo trim("$cidade25/$estado25"); ?>"/>, na escala e horário <b><? echo trim("$novaescala $folgfixx2"); ?></b>, atendendo os requisitos mencionados na cláusula vigésima terceira da respectiva Convenção Coletiva – Comunicação com antecedência mínima de 48 (quarenta e oito) horas.<br />
<br />
<br />
Recebido em ______/______/________, às _____:______hs.
<br />
<br />
<br />
<br />
___________________________________<br />
Assinatura do colaborador<br />
Nome: <b><? echo trim("$nomecol"); ?></b><br />
RG: <b><? echo trim("$rgcolab"); ?></b><br />


      <br />
    </div>
  

    <br />
  <div style="width: 100%; margin:0 auto;">
    <button class="btn btn-primary" type="reset" name="reset" id="reset" value="Apagar" > Apagar </button> 
    <button class="btn btn-info" type="submit" name="submit" id="submit"  value="Gerar PDF"> Gerar PDF e Enviar </button>
      <br /><br />
  </div>
  
<div style="display:none">
<input name="usuario" type="text" value="<? echo $usuario; ?>">
<input name="nomecol" type="text" value="<? echo trim("$nomecol"); ?>">
<input name="re" type="text" value="<? echo trim("$re"); ?>">
<input name="rgcolab" type="text" value="<? echo trim("$rgcolab"); ?>">
<input name="empresa" type="text" value="<? echo trim("$empresa"); ?>">
<input name="data10" type="text" value="<? echo trim("$data10"); ?>">
<input name="clinovo" type="text" value="<? echo trim("$clinovo - $posto2"); ?>">
<input name="ver_for_25" type="text" value="<? echo "$ver_for_25"; ?>">
<input name="novaescala" type="text" value="<? echo trim("$novaescala"); ?>">
<input name="folgfix2" type="text" value="<? echo trim("$folgfix2"); ?>">
<input name="folgfix22" type="text" value="<? echo trim("$folgfix22"); ?>">
</div>

</form>
  </div>
  <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_25"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />


<script language="javascript" type="text/javascript">
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
	if(formulario.endere.value == ''){alert("Informe o ENDEREÇO da empresa."); formulario.endere.focus(); return false;}
	if(formulario.bcasa.value == ''){alert("Informe o BAIRRO da empresa."); formulario.bcasa.focus(); return false;}
	if(formulario.ccasa.value == ''){alert("Informe a CIDADE da empresa."); formulario.ccasa.focus(); return false;}
	return true;}

</script>
<? include("../roda.php"); ?>
