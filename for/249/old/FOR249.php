<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};
		
$sql = "SELECT * FROM for054fim WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$campo48 = $linha['campo48'];
$campo19 = $linha['campo19'];
$outraatv = $linha['outraatv'];
$gestor = $linha['gestor'];
if ($gestor==""){$gestor2 = $usuario;} else {$gestor2 = $gestor;};
$campo4 = $linha['campo4'];
$cei = $linha['cei'];
$regiao = $linha['regiao'];

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php"); }else{
}

if ($linha['campo19'] == "Outra: "){$campo192 = $linha['outraatv'];}else{$campo192 = $linha['campo19'];};


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
		
        require_once("../plugin_pdf/dompdf/dompdf_config.inc.php");
		
		$dompdf = new DOMPDF();
        $dompdf->load_html($pdf_html, 'UTF-8'); // Load the html
		$dompdf->render();
		$pdf_content = $dompdf->output();
		
		ob_start();
		require_once($dir."/html.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/swift/swift_required.php");

		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);

include("../listas.php");

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$campo48'"); 
while ($dados = mysql_fetch_array($consulta))
$emailsup=$dados['mail'];

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$gestor2'"); 
while ($dados = mysql_fetch_array($consulta))
$emailgestor=$dados['mail'];

$cc = array("daniel.garcia@spsp.com.br" => "Daniel Garcia",
    "rodolfo.martini@spsp.com.br" => "Rodolfo Martini",
    "vanessa.lima@spsp.com.br" => "Vanessa Lima",
    "daniel.barros@spsp.com.br" => "Daniel Barros",
    "dayse.rocha@spsp.com.br" => "Dayse Rocha",
    "marinalva.rosa@spsp.com.br" => "Marinalva Rosa",
    "ana.pereira@spsp.com.br" => "Ana Pereira",
    "ralfe.kobayashi@spsp.com.br" => "Ralfe Kobayashi",
    "jacqueline.araujo@spsp.com.br" => "Jacqueline Araujo",
    "mariana.stefanini@spsp.com.br" => "Mariana Stefanini",
    "murilo.martins@spsp.com.br" => "Murilo Martins",
    "camila.sotelo@spsp.com.br" => "Camila Sotelo",
    "claudia.franzen@spsp.com.br" => "Claudia Franzen",  
    "rodrigo.martins@spsp.com.br" => "Rodrigo Martins",
    "gervan.matos@spsp.com.br" => "Gervan Matos",
    "priscila.almeida@spsp.com.br" => "Priscila Almeida",
    "mh.peraccini@spsp.com.br" => "Maria Helena Peraccini",
  	"deise.lourenco@spsp.com.br" => "Deise Lourenco",
  	"fabiana.tomasela@spsp.com.br" => "Fabiana Tomasela",
  	"regina.gomes@spsp.com.br" => "Regina Gomes",
  	"mariana.batista@spsp.com.br" => "Mariana Batista",
  	"fernanda.silva@spsp.com.br" => "Fernanda Silva",
  	"gilcelia.nascimento@spsp.com.br" => "Gilcelia Nascimento",
    "sm.cirino@gmail.com" => "Saulo Cirino",
    "cristiane.ribeiro@spsp.com.br" => "Cristiane Ribeiro",
    "$email2" => "$nome2",
    "$email3" => "$nome3",
    "$email4" => "$nome4",
    "$emailgestor" => "$gestor2",
    "$emailsup" => "$campo48");

		$message = Swift_Message::newInstance()
		->setSubject("Encerramento de Serviço - $campo192 - $campo4") 
		->setTo(array($post->emailuser => $post->usuario)) 
		->setFrom(array("$email" => "$usuario"))
		->setCc($cc)
		->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
		->setBody($html_message, "text/html") 
		->attach(Swift_Attachment::newInstance($pdf_content, "FOR 249 - $campo192 - $campo4.pdf", "application/pdf")); 
		if ($mailer->send($message))
	  {
		$a = mysql_query("INSERT INTO for054arq(campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, ceifiscal, sefipcei, ceifixo, obscei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, data2, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, emailuser, respleg, cod, forv, salario, salario1, salario2, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3, sumula, cobrasumula, usaepi, campol31, locaequipv, campom31, matconsv, gestor, obsepi, mensalvalor, taxaadesao) SELECT campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, ceifiscal, sefipcei, ceifixo, obscei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, data2, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, emailuser, respleg, cod, forv, salario, salario1, salario2, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3, sumula, cobrasumula, usaepi, campol31, locaequipv, campom31, matconsv, gestor, obsepi, mensalvalor, taxaadesao FROM for054fim WHERE campo4 = '".$campo4."' AND cei = '".$cei."' AND (campo19 = '$_POST[servico]' OR outraatv = '$_POST[servico]')")or die(mysql_error());
		  
		$sql_DELETE = "DELETE FROM for054fim WHERE campo4 = '".$campo4."' AND cei = '".$cei."' AND (campo19 = '$_POST[servico]' OR outraatv = '$_POST[servico]')";
	    $query = mysql_query($sql_DELETE) or die(mysql_error());
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>		
        window.alert('PDF enviado com sucesso!');
		window.location.href='FOR2491.php';	
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
              <h1 class="super hairline bordered bordered-normal">Comunicado de Encerramento de Serviços</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div style="width: 100%;  margin:0 auto;">
            <form enctype="multipart/form-data" action="" method="post" name="formulario" id="formulario">
              <font size="+2">
              <center>
                <strong>COMUNICADO</strong>
              </center>
              </font><br/>
              <div style="text-align:justify"> Venho por meio deste, comunicar que a partir de
                <input name="data" maxlength="10" type="text" id="data" size="15" onkeypress="formatar(this, '##/##/####')" onblur="check_date(this.value)"/>
                , será encerrado  as atividades de
                <input readonly name="servico" type="text" id="servico" size="35" value="<?php if ($linha['campo19'] == "Outra: "){$campo192 = $linha['outraatv'];}else{$campo192 = $linha['campo19'];}; echo $campo192 ?>"/>
                da empresa
                <input readonly name="empresa" type="text" id="empresa" size="34" value="<?php echo $linha['empresa'] ?>"/>
                com o cliente
                <input readonly name="cliente" type="text" id="cliente" size="44" value="<?php echo $linha['campo4'] ?>"/>
                , CNPJ
                <input readonly value="<?php echo $linha['campo8'] ?>"   name="cnpj" type="text" id="cnpj" size="20"/>
                , CEI
                <input readonly value="<?php echo $linha['cei'] ?>"   name="cei" type="text" id="cei" size="20"/>
                , código
                <input   name="codigo" type="text" id="codigo" size="25" value="<?php echo $linha['campo2'] ?>"/>
                , cidade
                <input readonly   name="cidade" type="text" id="cidade" size="20" value="<?php echo $linha['campo6'] ?>"/>
                . <br/>
                <br/>
                Quantidade funcionarios:<br>
                <input   name="funcionarios" type="text" id="funcionarios" size="5"/>
                <br/>
                <br>
                Será cobrado aviso?<br>
                <input type="radio" name="aviso" value="SIM" id="radio1" onload="check(0)"/>
                <label for="radio1">SIM</label>
                <input type="radio" name="aviso" value="NAO" id="radio2" onload="check(0)"/>
                <label for="radio2">NÃO</label>
                <br>
                Obs.:
                <input   name="obs" type="text" id="obs" size="51"/>
                <br/>
                <br>
                Existem equipamentos da empresa a serem retirados?<br>
                <input type="radio" name="retirar" value="SIM" id="radio5" onload="check(0)"/>
                <label for="radio5">SIM</label>
                <input type="radio" name="retirar" value="NAO" id="radio6" onload="check(0)"/>
                <label for="radio6">NÃO</label>
                <br/>
                Quais?
                <input   name="quais" type="text" id="quais" size="88"/>
                <br/>
                <br>
                Já foram retirados os equipamentos do posto?<br>
                <input type="radio" name="equipamentos" value="SIM" id="radio3" onload="check(0)"/>
                <label for="radio3">SIM</label>
                <input type="radio" name="equipamentos" value="NAO" id="radio4" onload="check(0)"/>
                <label for="radio4">NÃO</label>
                <br/>
                <br/>
                Motivo do encerramento:
                <input   name="mensagem" type="text" id="mensagem" size="70"/>
              </div>
              <br/>
              <div style="display:none">
                <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
                <input name="ver_for_249" type="text" value="<? echo "$ver_for_249"; ?>">
                <input name="emailuser" type="text" value="<? echo "$email"; ?>">
              </div>
              <br/>
              <input class="btn btn-primary"  type="reset" name="reset" id="reset" value="Apagar"/>
              <input class="btn btn-info"  type="submit" name="submit" id="submit" value="Gerar PDF" onclick="return validar(this);"/>
              <br>
              <font size="-1">* Confira os dados antes de gravar.</font>
            </form>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br/>
            <br/>
            <? echo "$ver_for_249"; ?><br/>
            <br/>
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript">
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }}

function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}

function validar(formulario){
if(formulario.data.value == ''){alert("Informe a DATA de encerramento."); formulario.data.focus(); return false;}	
if(formulario.empresa.value == ''){alert("Informe o nome da EMPRESA prestadora."); formulario.empresa.focus(); return false;}
if(formulario.cliente.value == ''){alert("Informe o nome do CLIENTE.");formulario.cliente.focus(); return false;}
if(formulario.cnpj.value == ''){alert("Informe o CNPJ do cliente.");formulario.cnpj.focus(); return false;}
if(formulario.codigo.value == ''){alert("Informe o CODIGO do cliente.");formulario.codigo.focus(); return false;}
if(formulario.cidade.value == ''){alert("Informe a CIDADE do cliente.");formulario.cidade.focus(); return false;}
if(formulario.servico.value == ''){alert("Informe as ATIVIDADES que serão encerradas.");formulario.servico.focus(); return false;}
if(formulario.funcionarios.value == ''){alert("Informe o Nº de FUNCIONÁRIOS.");formulario.funcionarios.focus(); return false;}
if(formulario.aviso.value == ''){alert("Informe se será cobrado AVISO.");formulario.aviso.focus(); return false;}
if(formulario.equipamentos.value == ''){alert("Informe se já foram retirado todos os EQUIPAMENTOS.");formulario.equipamentos.focus(); return false;}
if(formulario.retirar.value == ''){alert("Informe se ainda há equipamentos para RETIRAR.");formulario.retirar.focus(); return false;}
if(formulario.retirar.value == '' && formulario.quais.value == ''){alert("Informe QUAIS equipamentos devem ser retirados.");formulario.quais.focus(); return false;}
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
