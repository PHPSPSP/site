<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];


$sql = "SELECT * FROM for054fim WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$campo48 = $linha['campo48'];
$regiao = $linha['regiao'];

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}

if (!empty($_POST)) {

	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->empresa))
		$error = true;
		
	else {
		$dir = dirname(__FILE__);
		
		ob_start();
		require_once($dir."/pdf.php");
		$pdf_html = ob_get_contents();
		ob_end_clean();
		$pdf_html = utf8_decode($pdf_html);
		
        require_once("../plugin_pdf/dompdf/dompdf_config.inc.php");
		
		$dompdf = new DOMPDF();
		$dompdf->load_html($pdf_html, 'UTF-8');
		$dompdf->render();
		$pdf_content = $dompdf->output();
		
		ob_start();
		require_once($dir."/html.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/swift/swift_required.php");
		
$consulta=mysql_query("SELECT mail FROM usuarios where nome='$gestor'"); 
while ($dados = mysql_fetch_array($consulta))
$emailgestor=$dados['mail'];

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$campo48'"); 
while ($dados = mysql_fetch_array($consulta))
$emailsup=$dados['mail'];

		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);


		$message = Swift_Message::newInstance()
		->setSubject("FOR 245 - Encerramento de Contrato - ".utf8_encode($campo4)) 
		->setTo(array($post->emailuser => $post->usuario)) 
		->setFrom(array("$email" => "$usuario"))
	->setCc(array(
	"daniel.garcia@spsp.com.br" => "Daniel Garcia",
  "rodolfo.martini@spsp.com.br" => "Rodolfo Martini",
  "vanessa.lima@spsp.com.br" => "Vanessa Lima",
  "daniel.barros@spsp.com.br" => "Daniel Barros",
	"gilcelia.nascimento@spsp.com.br" => "Gilcelia Nascimento",
	"dayse.rocha@spsp.com.br" => "Dayse Rocha",
  "marinalva.rosa@spsp.com.br" => "Marinalva Rosa",
  "ana.pereira@spsp.com.br" => "Ana Pereira",
  "jacqueline.araujo@spsp.com.br" => "Jacqueline Araujo",
  "mariana.stefanini@spsp.com.br" => "Mariana Stefanini",
	"camila.sotelo@spsp.com.br" => "Camila Sotelo",
  "claudia.franzen@spsp.com.br" => "Claudia Franzen",  
  "murilo.martins@spsp.com.br" => "Murilo Martins",
	"rodrigo.martins@spsp.com.br" => "Rodrigo Martins",
	"gervan.matos@spsp.com.br" => "Gervan Matos",
	"priscila.almeida@spsp.com.br" => "Priscila Almeida",
	"deise.lourenco@spsp.com.br" => "Deise Lourenco",
	"fabiana.tomasela@spsp.com.br" => "Fabiana Tomasela",
	"regina.gomes@spsp.com.br" => "Regina Gomes",
  "flavia.nunes@spsp.com.br" => "Flavia Nunes",
  "regiane.santos@spsp.com.br" => "Regiane Santos",
	"mariana.batista@spsp.com.br" => "Mariana Batista",
	"fernanda.silva@spsp.com.br" => "Fernanda Silva",
	"gilcelia.nascimento@spsp.com.br" => "Gilcelia Nascimento",
  "sm.cirino@gmail.com" => "Saulo Cirino",
  "ralfe.kobayashi@spsp.com.br" => "Ralfe kobayashi",
	"mh.peraccini@spsp.com.br" => "Maria Helena Peraccini",
"cristiane.ribeiro@spsp.com.br" => "Cristiane Ribeiro"))
		->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
		->setBody($html_message, "text/html") 
		->attach(Swift_Attachment::newInstance($pdf_content, "FOR 245 - Encerramento de Contrato - ".utf8_encode($campo4).".pdf", "application/pdf")); 
		if ($mailer->send($message))
	  {
		$a = mysql_query("INSERT INTO for054arq(campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, ceifiscal, sefipcei, ceifixo, obscei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, data2, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, emailuser, respleg, cod, forv, salario, salario1, salario2, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3) SELECT campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, ceifiscal, sefipcei, ceifixo, obscei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, data2, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, emailuser, respleg, cod, forv, salario, salario1, salario2, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3, sumula, cobrasumula, usaepi, campol31, locaequipv, campom31, matconsv, gestor, obsepi, taxaadesao, mensalvalor FROM for054fim WHERE campo8 = '$campo8' and cei = '$cei' ");
		  
		$sql_DELETE = "DELETE FROM for054fim WHERE campo8 = '".$cnpj."' and campo14 = '".$localimp."' and cei = '".$cei."'";
	    $query = mysql_query($sql_DELETE) or die(mysql_error());
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>		
        window.alert('PDF enviado com sucesso!');window.location.href='FOR2452.php';
        </SCRIPT>");}

		else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
		window.history.go(-1);
        </SCRIPT>");}}}

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
            <h1 class="super hairline bordered bordered-normal">FOR 245 - Comunicado de Encerramento de Contrato</h1>
          </header>
        </div>
      </div>
      <div class="row">
        <div style="width: 100%;  margin:0 auto;">
<form enctype="multipart/form-data" action="" method="post" name="formulario" id="formulario" onsubmit="return validar(this);">
            <font size="+2">
            <center>
              <strong>COMUNICADO</strong>
            </center>
            </font><br />
            <div style="text-align:justify">Venho por meio deste, comunicar que a partir de
              <input  name="data" maxlength="10" type="text" id="data" size="10" onkeypress="formatar(this, '##/##/####')" onblur="check_date(this.value)"/>
              , será encerrado definitivamente as atividades da empresa
              <input  name="empresa" type="text" id="empresa" size="30"  value="<?php echo $linha['empresa'] ?>"/>
              com o cliente
              <input  name="cliente" type="text" id="cliente" size="45"  value="<?php echo $linha['campo4'] ?>"/>
              , CNPJ
              <input   name="cnpj" type="text" id="cnpj" size="20"  value="<?php echo $linha['campo8'] ?>"/>
              , CEI
              <input   name="cei" type="text" id="cei" size="20"  value="<?php echo $linha['cei'] ?>"/>
              ,código
              <input  name="codigo" type="text" id="codigo" size="20"  value="<?php echo $linha['campo2'] ?>"/>
              , cidade
              <input  name="cidade" type="text" id="cidade" size="20"  value="<?php echo $linha['campo6'] ?>"/>
              <div style="display:none"><input  name="localimp" type="text" id="localimp" size="20"  value="<?php echo $linha['campo14'] ?>"/></div> 
              . <br />
              <br />
              Atividades:
              <input  name="atividades" type="text" id="atividades" size="84" />
              <br />
              Quantidade funcionarios:
              <input  name="funcionarios" type="text" id="funcionarios" size="5" />
              <br />
              <br>
              Será cobrado  aviso?<br>
              <input type="radio" name="aviso" value="SIM" id="radio1" onload="check(0)"/>
              <label for="radio1">SIM</label>
              <input type="radio" name="aviso" value="NAO" id="radio2" onload="check(0)"/>
              <label for="radio2">NÃO</label>
              <br>
              Obs.:
              <input  name="obs" type="text" id="obs" size="51" />
              <br>
              <br />
              Existem equipamentos da empresa a serem retirados?<br>
              <input type="radio" name="retirar" value="SIM" id="radio5" onload="check(0)"/>
              <label for="radio5">SIM</label>
              <input type="radio" name="retirar" value="NAO" id="radio6" onload="check(0)"/>
              <label for="radio6">NÃO</label>
              <br />
              Quais?
              <input name="quais" type="text" id="quais" size="88" />
              <br />
              <br />
              Já foram retirados os equipamentos do posto? <br>
              <input type="radio" name="equipamentos" value="SIM" id="radio3" onload="check(0)"/>
              <label for="radio3">SIM</label>
              <input type="radio" name="equipamentos" value="NAO" id="radio4" onload="check(0)"/>
              <label for="radio4">NÃO</label>
              <br />
              <br />
              Motivo do encerramento:
              <input name="mensagem" type="text" id="mensagem" size="70" />
            </div>
            <div style="clear:both"></div>
            <br />
            <div style="display:none">
<input id="campo48" name="campo48" type="text" value="<?php echo $linha['campo48']; ?>">
<input id="cei" name="cei" type="text" value="<?php echo $linha['cei']; ?>">
<input id="gestor" name="gestor" type="text" value="<?php echo $linha['gestor'] != '' ? $linha['gestor'] : "Rodolfo Martini"; ?>">
<input id="regiao" name="regiao" type="text" value="<?php echo $linha['regiao']; ?>">
<input name="usuario" type="text" value="<? echo "$usuario"; ?>">
<input name="emailuser" type="text" value="<? echo "$email"; ?>">
            </div>
            <br />
            <input class="btn btn-primary"  type="reset" name="reset" id="reset" value="Apagar" />
            <input class="btn btn-info"  type="submit" name="submit" id="submit" value="Gerar PDF"/>
          </form>
        </div>
        <div class="col-md-12 text-left small-screen-center "  > <br />
          <br />
          <? echo "$ver_for_245"; ?><br />
          <br />
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;}

function formatar(src, mask)
{ var i = src.value.length;
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
   	alert("Data inválida");
	formulario.data10.focus(); return false;
    return false;
   }
   else {
    return true;
   }}

function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);}
function showFilled(Value) 
{	return (Value > 9) ? "" + Value : "0" + Value;}

function DoPrinting(){
if (!window.print){
alert("Use o Netscape  ou Internet Explorer \n nas versões 4.0 ou superior!")
return}
window.print()}

function validar(formulario){
if(formulario.data.value == ''){alert("Informe a DATA de encerramento."); formulario.data.focus(); return false;}	
if(formulario.empresa.value == ''){alert("Informe o nome da EMPRESA prestadora."); formulario.empresa.focus(); return false;}
if(formulario.cliente.value == ''){alert("Informe o nome do CLIENTE.");formulario.cliente.focus(); return false;}
if(formulario.cnpj.value == ''){alert("Informe o CNPJ do cliente.");formulario.cnpj.focus(); return false;}
if(formulario.codigo.value == ''){alert("Informe o CODIGO do cliente.");formulario.codigo.focus(); return false;}
if(formulario.cidade.value == ''){alert("Informe a CIDADE do cliente.");formulario.cidade.focus(); return false;}
if(formulario.atividades.value == ''){alert("Informe as ATIVIDADES que serão encerradas.");formulario.atividades.focus(); return false;}
if(formulario.funcionarios.value == ''){alert("Informe o Nº de FUNCIONÁRIOS.");formulario.funcionarios.focus(); return false;}
if(formulario.aviso.value == ''){alert("Informe se será cobrado AVISO.");formulario.aviso.focus(); return false;}
if(formulario.equipamentos.value == ''){alert("Informe se já foram retirado todos os EQUIPAMENTOS.");formulario.equipamentos.focus(); return false;}
if(formulario.retirar.value == ''){alert("Informe se ainda há equipamentos para RETIRAR.");formulario.retirar.focus(); return false;}
if (document.getElementById('radio5').checked == true && document.getElementById('quais').value == ""){alert ('Informe QUAIS equipamentos devem ser retirados.');formulario.quais.focus();return false;}
if(formulario.mensagem.value == ''){alert("Informe o MOTIVO do encerramento.");formulario.mensagem.focus(); return false;}
return true;}

function AlalizaTeclas() 
{
var ctrl=window.event.ctrlKey;
var tecla=window.event.keyCode; 
if (alt && tecla==80) {alert("Para imprimir o FOR 025 gere o PDF e imprima o arquivo que será enviado por e-mail."); event.keyCode=0; event.returnValue=false;}
}
//-->
</script>
<? include("../roda.php"); ?>