﻿<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$gestoruser = $_SESSION['gestoruser'];

$query = mysql_query('SHOW TABLE STATUS LIKE "proposta"');
$data = mysql_fetch_array($query);

$idd = $data['Auto_increment'];
$cod = "00";
$codpro2 = "P-$idd.$cod/$year-$coduser";

$today = date("d-m-y");

$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")or die ("Erro ao selecionar a base de dados.");	

if ($usuario=="Marcello Cross"){$emailmary = "mary.martins@spsp.com.br";$nomemary = "Mary Martins";}else{$emailmary = "rodolfo.martini@spsp.com.br";$nomemary = "Rodolfo Martini";};


if (!empty($_POST)) {

	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->nomecliente))
		$error = true;
		
	else {
		$dir = dirname(__FILE__);
		
		ob_start();
		require_once($dir."/pdf.php");
		$pdf_html = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/dompdf/dompdf_config.inc.php");
		
		$dompdf = new DOMPDF(); // Create new instance of dompdf
		$dompdf->load_html($pdf_html); // Load the html
		$dompdf->set_paper('a4','portrait');		
		$dompdf->render(); // Parse the html, convert to PDF
		$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later
		
		ob_start();
		require_once($dir."/html.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/swift/swift_required.php");

		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);
        $mailer = new Swift_Mailer($transport);


		$message = Swift_Message::newInstance()
		->setSubject("Proposta Comercial - $nomecliente") 
		->setTo(array("$email" => "$usuario"))  
		->setFrom(array("$email" => "$usuario"))
		/*->setCc(array("gustavo.guedes@spsp.com.br" => "gustavo.guedes"))*/
		->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes",
		"$emailmary" => "$nomemary"))
		->setBody($html_message, "text/html") 
		->attach(Swift_Attachment::newInstance($pdf_content, "Proposta Comercial $codpro - $nomecliente - $today.pdf", "application/pdf")); 
		

		
		if ($mailer->send($message)){

if ($_POST['option1'] != ""){$cobraferiado2 = $_POST['cobraferiado'];} else {};
if ($_POST['option2'] != ""){$beneficios2 = $_POST['beneficios'];} else {};
if ($_POST['option3'] != ""){$pagamento2 = $_POST['pagamento'];} else {};
if ($_POST['option4'] != ""){$reajuste2 = $_POST['reajuste'];} else {};
if ($_POST['option5'] != ""){$validadecont2 = $_POST['validadecont'];} else {};
if ($_POST['option6'] != ""){$inicio2 = $_POST['inicio'];} else {};
if ($_POST['option7'] != ""){$validadeprop2 = $_POST['validadeprop'];} else {};
if ($_POST['option8'] != ""){$obsgeral2 = $_POST['obsgeral'];} else {};
if ($_POST['option9'] != ""){$aditivo2 = $_POST['aditivo'];} else {};
if ($_POST['option11'] != ""){$obsescala2 = $_POST['obsescala'];} else {};
if ($_POST['option12'] != ""){$obsescalae2 = $_POST['obsescalae'];} else {};
if ($_POST['option13'] != ""){$obsimposto2 = $_POST['obsimposto'];} else {};

if ($_POST['vtotalnf'] = ""){$vtotalnf2 = $_POST['totalbruto'];} else {$vtotalnf2 = $_POST['vtotalnf'];};

$a = mysql_query("INSERT INTO proposta(usuario, email, cod, idd, codpro, font, negrito, italico, sublinhado, nomecliente, posto1, posto2, posto3, posto4, posto5, posto6, posto7, posto8, posto9, posto10, posto11, posto12, posto13, posto14, posto15, colab1, colab2, colab3, colab4, colab5, colab6, colab7, colab8, colab9, colab10, colab11, colab12, colab13, colab14, colab15, ativ1, ativ2, ativ3, ativ4, ativ5, ativ6, ativ7, ativ8, ativ9, ativ10, ativ11, ativ12, ativ13, ativ14, ativ15, cargh1, cargh2, cargh3, cargh4, cargh5, cargh6, cargh7, cargh8, cargh9, cargh10, cargh11, cargh12, cargh13, cargh14, cargh15, turno1, turno2, turno3, turno4, turno5, turno6, turno7, turno8, turno9, turno10, turno11, turno12, turno13, turno14, turno15, escala1, escala2, escala3, escala4, escala5, escala6, escala7, escala8, escala9, escala10, escala11, escala12, escala13, escala14, escala15, vunit1, vunit2, vunit3, vunit4, vunit5, vunit6, vunit7, vunit8, vunit9, vunit10, vunit11, vunit12, vunit13, vunit14, vunit15, obsescala, quant1, quant2, quant3, quant4, quant5, quant6, quant7, quant8, quant9, quant10, quant11, quant12, quant13, quant14, quant15, equip1, equip2, equip3, equip4, equip5, equip6, equip7, equip8, equip9, equip10, equip11, equip12, equip13, equip14, equip15, descri1, descri2, descri3, descri4, descri5, descri6, descri7, descri8, descri9, descri10, descri11, descri12, descri13, descri14, descri15, obseq1, obseq2, obseq3, obseq4, obseq5, obseq6, obseq7, obseq8, obseq9, obseq10, obseq11, obseq12, obseq13, obseq14, obseq15, vunite1, vunite2, vunite3, vunite4, vunite5, vunite6, vunite7, vunite8, vunite9, vunite10, vunite11, vunite12, vunite13, vunite14, vunite15, obsescalae, impostos, obsgeral, timbre, razaosocial, nomefantasia, cnpj, inscricaoest, endfatur, endprest, emailnfe, contatocom, fonemailcom, nomerepresentante, endereco, obsimposto, cobraferiado, beneficios, pagamento, reajuste, validadecont, inicio, validadeprop, aditivo, datapro, vtotalnf) VALUES ('$usuario', '$email', '$cod', '$idd', '$codpro', '$_POST[font]', '$_POST[negrito]', '$_POST[italico]', '$_POST[sublinhado]', '$_POST[nomecliente]', '$_POST[posto1]', '$_POST[posto2]', '$_POST[posto3]', '$_POST[posto4]', '$_POST[posto5]', '$_POST[posto6]', '$_POST[posto7]', '$_POST[posto8]', '$_POST[posto9]', '$_POST[posto10]', '$_POST[posto11]', '$_POST[posto12]', '$_POST[posto13]', '$_POST[posto14]', '$_POST[posto15]', '$_POST[colab1]', '$_POST[colab2]', '$_POST[colab3]', '$_POST[colab4]', '$_POST[colab5]', '$_POST[colab6]', '$_POST[colab7]', '$_POST[colab8]', '$_POST[colab9]', '$_POST[colab10]', '$_POST[colab11]', '$_POST[colab12]', '$_POST[colab13]', '$_POST[colab14]', '$_POST[colab15]', '$_POST[ativ1]', '$_POST[ativ2]', '$_POST[ativ3]', '$_POST[ativ4]', '$_POST[ativ5]', '$_POST[ativ6]', '$_POST[ativ7]', '$_POST[ativ8]', '$_POST[ativ9]', '$_POST[ativ10]', '$_POST[ativ11]', '$_POST[ativ12]', '$_POST[ativ13]', '$_POST[ativ14]', '$_POST[ativ15]', '$_POST[cargh1]', '$_POST[cargh2]', '$_POST[cargh3]', '$_POST[cargh4]', '$_POST[cargh5]', '$_POST[cargh6]', '$_POST[cargh7]', '$_POST[cargh8]', '$_POST[cargh9]', '$_POST[cargh10]', '$_POST[cargh11]', '$_POST[cargh12]', '$_POST[cargh13]', '$_POST[cargh14]', '$_POST[cargh15]', '$_POST[turno1]', '$_POST[turno2]', '$_POST[turno3]', '$_POST[turno4]', '$_POST[turno5]', '$_POST[turno6]', '$_POST[turno7]', '$_POST[turno8]', '$_POST[turno9]', '$_POST[turno10]', '$_POST[turno11]', '$_POST[turno12]', '$_POST[turno13]', '$_POST[turno14]', '$_POST[turno15]', '$_POST[escala1]', '$_POST[escala2]', '$_POST[escala3]', '$_POST[escala4]', '$_POST[escala5]', '$_POST[escala6]', '$_POST[escala7]', '$_POST[escala8]', '$_POST[escala9]', '$_POST[escala10]', '$_POST[escala11]', '$_POST[escala12]', '$_POST[escala13]', '$_POST[escala14]', '$_POST[escala15]', '$_POST[vunit1]', '$_POST[vunit2]', '$_POST[vunit3]', '$_POST[vunit4]', '$_POST[vunit5]', '$_POST[vunit6]', '$_POST[vunit7]', '$_POST[vunit8]', '$_POST[vunit9]', '$_POST[vunit10]', '$_POST[vunit11]', '$_POST[vunit12]', '$_POST[vunit13]', '$_POST[vunit14]', '$_POST[vunit15]', '$_POST[obsescala2]', '$_POST[quant1]', '$_POST[quant2]', '$_POST[quant3]', '$_POST[quant4]', '$_POST[quant5]', '$_POST[quant6]', '$_POST[quant7]', '$_POST[quant8]', '$_POST[quant9]', '$_POST[quant10]', '$_POST[quant11]', '$_POST[quant12]', '$_POST[quant13]', '$_POST[quant14]', '$_POST[quant15]', '$_POST[equip1]', '$_POST[equip2]', '$_POST[equip3]', '$_POST[equip4]', '$_POST[equip5]', '$_POST[equip6]', '$_POST[equip7]', '$_POST[equip8]', '$_POST[equip9]', '$_POST[equip10]', '$_POST[equip11]', '$_POST[equip12]', '$_POST[equip13]', '$_POST[equip14]', '$_POST[equip15]', '$_POST[descri1]', '$_POST[descri2]', '$_POST[descri3]', '$_POST[descri4]', '$_POST[descri5]', '$_POST[descri6]', '$_POST[descri7]', '$_POST[descri8]', '$_POST[descri9]', '$_POST[descri10]', '$_POST[descri11]', '$_POST[descri12]', '$_POST[descri13]', '$_POST[descri14]', '$_POST[descri15]', '$_POST[obseq1]', '$_POST[obseq2]', '$_POST[obseq3]', '$_POST[obseq4]', '$_POST[obseq5]', '$_POST[obseq6]', '$_POST[obseq7]', '$_POST[obseq8]', '$_POST[obseq9]', '$_POST[obseq10]', '$_POST[obseq11]', '$_POST[obseq12]', '$_POST[obseq13]', '$_POST[obseq14]', '$_POST[obseq15]', '$_POST[vunite1]', '$_POST[vunite2]', '$_POST[vunite3]', '$_POST[vunite4]', '$_POST[vunite5]', '$_POST[vunite6]', '$_POST[vunite7]', '$_POST[vunite8]', '$_POST[vunite9]', '$_POST[vunite10]', '$_POST[vunite11]', '$_POST[vunite12]', '$_POST[vunite13]', '$_POST[vunite14]', '$_POST[vunite15]', '$_POST[obsescalae2]', '$_POST[impostos]', '$_POST[obsgeral2]', '$_POST[timbre]', '$_POST[razaosocial]', '$_POST[nomefantasia]', '$_POST[cnpj]', '$_POST[inscricaoest]', '$_POST[endfatur]', '$_POST[endprest]', '$_POST[emailnfe]', '$_POST[contatocom]', '$_POST[fonemailcom]', '$_POST[nomerepresentante]', '$_POST[endereco]', '$_POST[obsimposto2]', '$_POST[cobraferiado2]', '$_POST[beneficios2]', '$_POST[pagamento2]', '$_POST[reajuste2]', '$_POST[validadecont2]', '$_POST[inicio2]', '$_POST[validadeprop2]', '$_POST[aditivo2]', NOW(), '$_POST[vtotalnf2]')") or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Proposta enviada para o e-mail com sucesso!');window.location.href='../logado.php';</SCRIPT>");}
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
              <h1 class="super hairline bordered bordered-normal">Proposta Comercial</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left small-screen-center "  ><br />
            <form action=""  method="POST" name="formulario" id="formulario" onsubmit="return validar(this);">
              <div style="display:none">
                <input id="codpro" name="codpro" type="text" value="<?php echo $codpro2; ?>"/>
                <input id="totallinhas" name="totallinhas" type="number" />
                <input id="totallinhas2" name="totallinhas2" type="number" />
                <input id="totallinhas3" name="totallinhas3" type="number" />
                <input id="usuario" name="usuario" type="text" value="<?=$_SESSION['nome'];?>">
                <input id="emailuser" name="emailuser" type="text" value="<?=$_SESSION['mail'];?>">
              </div>
              <br>
              <strong>Nome do Cliente:</strong><br />
              <input size="40" type="text" id="nomecliente" name="nomecliente">
              <br><br />
              <strong>Representante do Cliente:</strong><br />
              <input size="40" type="text" id="nomerepresentante" name="nomerepresentante">
              <br><br />

              <strong>Endereço - Local da Pestação dos Serviços:</strong><br />
              <input size="80" type="text" id="endereco" name="endereco">
              <br>
              
              <!--<div> <img src="images/font.png" width="15"/>
  <select style="width:50%" name="font" id="font">
    <option selected value="Tahoma" >Tahoma</option>
    <option value="Times-Roman" >Times New Roman</option>
    <option value="Courier" >Courier</option>
    <option value="Helvetica" >Helvetica</option>
  </select>

  <b>N</b>
  <input id="negrito" name="negrito" type="checkbox" value="bold" onclick="trocanegro(this);" />
  <i>I</i>
  <input id="italico" name="italico" type="checkbox" value="italic" onclick="trocaital(this);" />
  <u>S</u>
  <input id="sublinhado" name="sublinhado" type="checkbox" value="underline" onclick="trocasubli(this);" />
  <script type="text/javascript">
function trocanegro(negrito) {if (negrito.checked) {$("#negrito").change(function() {$('.changeMe').css("font-weight", $(this).val());});        }
else {$("#negrito").change(function() {$('.changeMe').css("font-weight", "");});}}
function trocaital(italico) {if (italico.checked) {$("#italico").change(function() {$('.changeMe').css("font-style", $(this).val());});        }
else {$("#italico").change(function() {$('.changeMe').css("font-style", "");});}}
function trocasubli(sublinhado) {if (sublinhado.checked) {$("#sublinhado").change(function() {$('.changeMe').css("text-decoration", $(this).val());});        }
else {$("#sublinhado").change(function() {$('.changeMe').css("text-decoration", "");});}}
s
$("#font").change(function() { //alert($(this).val());
    $('.changeMe').css("font-family", $(this).val());});
</script> 

</div>--> 
              
              <br />
              <br>
              <br />
              <strong>Tabela de valores da proposta:</strong><br>
              <br />
              <div style="width: 100%; "> Serviços:<br />
                <table width="100%" border="0" class="table table-hover table-condensed element-no-bottom">
                  <tr style="color:#FFFFFF; height:30px" height="30px">
                    <td width="5%" align="center" valign="middle" bgcolor="#FF7174"><strong>Posto</strong></td>
                    <td width="6%" align="center" valign="middle" bgcolor="#FF7174"><strong>Colab.</strong></td>
                    <td width="19%" align="center" valign="middle" bgcolor="#FF7174"><strong>Atividade</strong></td>
                    <td width="14%" align="center" valign="middle" bgcolor="#FF7174"><strong>Carga Horária</strong></td>
                    <td width="10%" align="center" valign="middle" bgcolor="#FF7174"><strong>Turno</strong></td>
                    <td width="10%" align="center" valign="middle" bgcolor="#FF7174"><strong>Escala</strong></td>
                    <td width="13%" align="center" valign="middle" bgcolor="#FF7174"><strong>Valor Unitário</strong></td>
                    <td width="11%" align="center" valign="middle" bgcolor="#FF7174"><strong>Valor Total</strong></td>
                    <td colspan="2" width="12%" align="center" valign="middle" bgcolor="#FF7174"><strong>Ação</strong><strong></strong></td>
                  </tr>
                  <tr align="center">
                    <td><input id="posto1" name="posto1" type="text" size="2" onchange="trocavirg(); valida_numero1();" style="width:99%" /></td>
                    <td><input style="width:99%" id="colab1" name="colab1" type="text" size="2" onchange="trocavirg(); valida_numero1();" /></td>
                    <td><input hidden="hidden" style="display:none" id="ativ1s" name="ativ1s" type="text" size="25" onchange="maislinha(); maislinha2(); return apagaefeito(this);"/>
                      <input style="width:99%" id="ativ1" name="ativ1" type="text" size="25" onchange="maislinha(); maislinha2(); return apagaefeito(this);"/></td>
                    <td><input style="width:99%" id="cargh1" name="cargh1" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno1" name="turno1" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala1" name="escala1" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" id="vunit1" name="vunit1" type="text" size="8" onchange="trocavirg(); valida_numero1();" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal1" name="vtotal1" type="text" size="8" /></td>
                    <td width="6%" align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos0" id="menos0" value="-" class="btn btn-danger col-md-12" onclick="menos0serv(); menoslinha(); menoslinha2(); return voltaefeito(this);" /></td>
                    <td width="6%" align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maism1" id="maism1" value="+" class="btn btn-success col-md-12"   onclick="maism1serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmaism1serv" style="display:none">
                    <td><input style="width:99%" id="posto2" name="posto2" type="text" size="2" onchange="trocavirg(); valida_numero2();" /></td>
                    <td><input style="width:99%" id="colab2" name="colab2" type="text" size="2" onchange="trocavirg(); valida_numero2();" /></td>
                    <td><input style="width:99%" id="ativ2" name="ativ2" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh2" name="cargh2" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno2" name="turno2" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala2" name="escala2" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" id="vunit2" name="vunit2" type="text" size="8" onchange="trocavirg(); valida_numero2();" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal2" name="vtotal2" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menosm1" id="menosm1" value="-" class="btn btn-danger col-md-12" onclick="menosm1serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maism2" id="maism2" value="+" class="btn btn-success col-md-12"  onclick="maism2serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmaism2serv" style="display:none">
                    <td><input style="width:99%" id="posto3" name="posto3" type="text" size="2" onchange="trocavirg(); valida_numero3();" /></td>
                    <td><input style="width:99%" id="colab3" name="colab3" type="text" size="2" onchange="trocavirg(); valida_numero3();" /></td>
                    <td><input style="width:99%" id="ativ3" name="ativ3" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh3" name="cargh3" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno3" name="turno3" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala3" name="escala3" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero3();" id="vunit3" name="vunit3" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal3" name="vtotal3" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menosm2" id="menosm2" value="-" class="btn btn-danger col-md-12" onclick="menosm2serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maism3" id="maism3" value="+" class="btn btn-success col-md-12"  onclick="maism3serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmaism3serv" style="display:none">
                    <td><input style="width:99%" id="posto4" name="posto4" type="text" size="2" onchange="trocavirg(); valida_numero4();" /></td>
                    <td><input style="width:99%" id="colab4" name="colab4" type="text" size="2" onchange="trocavirg(); valida_numero4();" /></td>
                    <td><input style="width:99%" id="ativ4" name="ativ4" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh4" name="cargh4" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno4" name="turno4" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala4" name="escala4" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero4();" id="vunit4" name="vunit4" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal4" name="vtotal4" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menosm3" id="menosm3" value="-" class="btn btn-danger col-md-12" onclick="menosm3serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais1" id="mais1" value="+" class="btn btn-success col-md-12"  onclick="mais1serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais1serv" style="display:none">
                    <td><input style="width:99%" id="posto5" name="posto5" type="text" size="2" onchange="trocavirg(); valida_numero5();" /></td>
                    <td><input style="width:99%" id="colab5" name="colab5" type="text" size="2" onchange="trocavirg(); valida_numero5();" /></td>
                    <td><input style="width:99%" id="ativ5" name="ativ5" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh5" name="cargh5" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno5" name="turno5" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala5" name="escala5" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero5();" id="vunit5" name="vunit5" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal5" name="vtotal5" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos1" id="menos1" value="-" class="btn btn-danger col-md-12" onclick="menos1serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais2" id="mais2" value="+" class="btn btn-success col-md-12"  onclick="mais2serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais2serv" style="display:none">
                    <td><input style="width:99%" id="posto6" name="posto6" type="text" size="2" onchange="trocavirg(); valida_numero6();" /></td>
                    <td><input style="width:99%" id="colab6" name="colab6" type="text" size="2" onchange="trocavirg(); valida_numero6();" /></td>
                    <td><input style="width:99%" id="ativ6" name="ativ6" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh6" name="cargh6" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno6" name="turno6" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala6" name="escala6" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero6();" id="vunit6" name="vunit6" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal6" name="vtotal6" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos2" id="menos2" value="-" class="btn btn-danger col-md-12" onclick="menos2serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais3" id="mais3" value="+" class="btn btn-success col-md-12"  onclick="mais3serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais3serv" style="display:none">
                    <td><input style="width:99%" id="posto7" name="posto7" type="text" size="2" onchange="trocavirg(); valida_numero7();" /></td>
                    <td><input style="width:99%" id="colab7" name="colab7" type="text" size="2" onchange="trocavirg(); valida_numero7();" /></td>
                    <td><input style="width:99%" id="ativ7" name="ativ7" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh7" name="cargh7" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno7" name="turno7" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala7" name="escala7" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero7();" id="vunit7" name="vunit7" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal7" name="vtotal7" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos3" id="menos3" value="-" class="btn btn-danger col-md-12" onclick="menos3serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais4" id="mais4" value="+" class="btn btn-success col-md-12"  onclick="mais4serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais4serv" style="display:none">
                    <td><input style="width:99%" id="posto8" name="posto8" type="text" size="2" onchange="trocavirg(); valida_numero8();" /></td>
                    <td><input style="width:99%" id="colab8" name="colab8" type="text" size="2" onchange="trocavirg(); valida_numero8();" /></td>
                    <td><input style="width:99%" id="ativ8" name="ativ8" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh8" name="cargh8" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno8" name="turno8" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala8" name="escala8" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero8();" id="vunit8" name="vunit8" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal8" name="vtotal8" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos4" id="menos4" value="-" class="btn btn-danger col-md-12" onclick="menos4serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais5" id="mais5" value="+" class="btn btn-success col-md-12"  onclick="mais5serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais5serv" style="display:none">
                    <td><input style="width:99%" id="posto9" name="posto9" type="text" size="2" onchange="trocavirg(); valida_numero9();" /></td>
                    <td><input style="width:99%" id="colab9" name="colab9" type="text" size="2" onchange="trocavirg(); valida_numero9();" /></td>
                    <td><input style="width:99%" id="ativ9" name="ativ9" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh9" name="cargh9" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno9" name="turno9" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala9" name="escala9" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero9();" id="vunit9" name="vunit9" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal9" name="vtotal9" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos5" id="menos5" value="-" class="btn btn-danger col-md-12" onclick="menos5serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais6" id="mais6" value="+" class="btn btn-success col-md-12"  onclick="mais6serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais6serv" style="display:none">
                    <td><input style="width:99%" id="posto10" name="posto10" type="text" size="2" onchange="trocavirg(); valida_numero10();" /></td>
                    <td><input style="width:99%" id="colab10" name="colab10" type="text" size="2" onchange="trocavirg(); valida_numero10();" /></td>
                    <td><input style="width:99%" id="ativ10" name="ativ10" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh10" name="cargh10" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno10" name="turno10" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala10" name="escala10" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero10();" id="vunit10" name="vunit10" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal10" name="vtotal10" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos6" id="menos6" value="-" class="btn btn-danger col-md-12" onclick="menos6serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais7" id="mais7" value="+" class="btn btn-success col-md-12"  onclick="mais7serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais7serv" style="display:none">
                    <td><input style="width:99%" id="posto11" name="posto11" type="text" size="2" onchange="trocavirg(); valida_numero11();" /></td>
                    <td><input style="width:99%" id="colab11" name="colab11" type="text" size="2" onchange="trocavirg(); valida_numero11();" /></td>
                    <td><input style="width:99%" id="ativ11" name="ativ11" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh11" name="cargh11" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno11" name="turno11" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala11" name="escala11" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero11();" id="vunit11" name="vunit11" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal11" name="vtotal11" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos7" id="menos7" value="-" class="btn btn-danger col-md-12" onclick="menos7serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais8" id="mais8" value="+" class="btn btn-success col-md-12"  onclick="mais8serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais8serv" style="display:none">
                    <td><input style="width:99%" id="posto12" name="posto12" type="text" size="2" onchange="trocavirg(); valida_numero12();" /></td>
                    <td><input style="width:99%" id="colab12" name="colab12" type="text" size="2" onchange="trocavirg(); valida_numero12();" /></td>
                    <td><input style="width:99%" id="ativ12" name="ativ12" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh12" name="cargh12" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno12" name="turno12" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala12" name="escala12" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero12();" id="vunit12" name="vunit12" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal12" name="vtotal12" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos8" id="menos8" value="-" class="btn btn-danger col-md-12" onclick="menos8serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais9" id="mais9" value="+" class="btn btn-success col-md-12"  onclick="mais9serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais9serv" style="display:none">
                    <td><input style="width:99%" id="posto13" name="posto13" type="text" size="2" onchange="trocavirg(); valida_numero13();" /></td>
                    <td><input style="width:99%" id="colab13" name="colab13" type="text" size="2" onchange="trocavirg(); valida_numero13();" /></td>
                    <td><input style="width:99%" id="ativ13" name="ativ13" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh13" name="cargh13" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno13" name="turno13" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala13" name="escala13" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero13();" id="vunit13" name="vunit13" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal13" name="vtotal13" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos9" id="menos9" value="-" class="btn btn-danger col-md-12" onclick="menos9serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais10" id="mais10" value="+" class="btn btn-success col-md-12"  onclick="mais10serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais10serv" style="display:none">
                    <td><input style="width:99%" id="posto14" name="posto14" type="text" size="2" onchange="trocavirg(); valida_numero14();" /></td>
                    <td><input style="width:99%" id="colab14" name="colab14" type="text" size="2" onchange="trocavirg(); valida_numero14();" /></td>
                    <td><input style="width:99%" id="ativ14" name="ativ14" type="text" size="25" /></td>
                    <td><input style="width:99%" id="cargh14" name="cargh14" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno14" name="turno14" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala14" name="escala14" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero14();" id="vunit14" name="vunit14" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal14" name="vtotal14" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos10" id="menos10" value="-" class="btn btn-danger col-md-12" onclick="menos10serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="mais11" id="mais11" value="+" class="btn btn-success col-md-12"  onclick="mais11serv(); maislinha(); maislinha2();" /></td>
                  </tr>
                  <tr align="center" id="divmais11serv" style="display:none">
                    <td><input style="width:99%" id="posto15" name="posto15" type="text" size="2" onchange="trocavirg(); valida_numero15();" /></td>
                    <td><input style="width:99%" id="colab15" name="colab15" type="text" size="2" onchange="trocavirg(); valida_numero15();" /></td>
                    <td><input style="width:99%" id="ativ15" name="ativ15" type="text" size="25" onchange="maislinha(); maislinha2();"/></td>
                    <td><input style="width:99%" id="cargh15" name="cargh15" type="text" size="14" /></td>
                    <td><input style="width:99%" id="turno15" name="turno15" type="text" size="8" /></td>
                    <td><input style="width:99%" id="escala15" name="escala15" type="text" size="7" /></td>
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numero15();" id="vunit15" name="vunit15" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotal15" name="vtotal15" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menos11" id="menos11" value="-" class="btn btn-danger col-md-12" onclick="menos11serv(); menoslinha(); menoslinha2();" /></td>
                    <td align="center" valign="middle"></td>
                  </tr>
                  <tr style="color:#FFFFFF; font-size:16px;">
                    <td colspan="7" align="right" style="border:#999999 solid 1px; background:#666666"><strong>TOTAL<font color="#666666"> .</font></strong></td>
                    <td align="center"><input style="width:99%; text-align:right" readonly id="vtotal" name="vtotal" type="text" size="8" /></td>
                    <td colspan="2" align="left">&nbsp;</td>
                  </tr>

                </table><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option11" ><input type="checkbox" name="option11" id="option11" value="sim" />Incluir Observação na Proposta</label>
                  </div>
                <textarea name="obsescala" style="width:100%" cols="100%" rows="3" id="obsescala">Em caso de falta eventual de colaboradores, entenda-se todo evento fora de controle ou da previsão e que não se encontra legalmente prevista como justificável nas leis trabalhistas, a SPSP se compromete a substituição em até 2 horas. Na impossibilidade de substituição imediata, as atividades serão reprogramadas pelo supervisor, de modo que as prioridades sejam atendidas de acordo com as necessidades do cliente.</textarea>
                <br />
                <br />
                Equipamentos / Atividades:<br />
                <table width="100%" border="0" class="table table-hover table-condensed element-no-bottom">
                  <tr style="color:#FFFFFF; height:30px" height="30px">
                    <td width="5%" align="center" bgcolor="#FF7174"><strong>Quant.</strong></td>
                    <td width="21%" align="center" bgcolor="#FF7174"><strong>Equip./Ativ.</strong></td>
                    <td width="36%" align="center" bgcolor="#FF7174"><strong>Descrição</strong></td>
                    <!--    <td width="19%" align="center" bgcolor="#FF7174"><strong>Observação</strong></td>
-->
                    <td width="14%" align="center" bgcolor="#FF7174"><strong>Valor Unitário</strong></td>
                    <td width="12%" align="center" bgcolor="#FF7174"><strong>Valor Total</strong></td>
                    <td colspan="2" width="12%" align="center" valign="middle" bgcolor="#FF7174"><strong>Ação</strong><strong></strong></td>
                  </tr>
                  <tr align="center">
                    <td><input style="width:99%" id="quant1" name="quant1" type="text" size="2" onchange="trocavirg(); valida_numeroe1();" /></td>
                    <td><input hidden="hidden" style="display:none" id="equip1s" name="equip1s" type="text" size="25" onchange="maislinha(); maislinha3(); return apagaefeito2(this);"/>
                      <input style="width:99%" id="equip1" name="equip1" type="text" size="25" onchange="maislinha(); maislinha3(); return apagaefeito2(this);"/></td>
                    <td><input style="width:99%" id="descri1" name="descri1" type="text" size="35" /></td>
                    <!--     <td><input style="width:99%" id="obseq1" name="obseq1" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe1();" id="vunite1" name="vunite1" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale1" name="vtotale1" type="text" size="8" /></td>
                    <td width="6%" align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose0" id="menose0" value="-" class="btn btn-danger col-md-12" onclick="menose0serv(); menoslinha(); menoslinha3(); return voltaefeito2(this);" /></td>
                    <td width="6%" align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise1" id="maise1" value="+" class="btn btn-success col-md-12"  onclick="maise1serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmai2sequip" style="display:none">
                    <td><input style="width:99%" id="quant2" name="quant2" type="text" size="2" onchange="trocavirg(); valida_numeroe2();" /></td>
                    <td><input style="width:99%" id="equip2" name="equip2" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri2" name="descri2" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq2" name="obseq2" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe2();" id="vunite2" name="vunite2" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale2" name="vtotale2" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose1" id="menose1" value="-" class="btn btn-danger col-md-12" onclick="menose1serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise2" id="maise2" value="+" class="btn btn-success col-md-12"  onclick="maise2serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais3equip" style="display:none">
                    <td><input style="width:99%" id="quant3" name="quant3" type="text" size="2" onchange="trocavirg(); valida_numeroe3();"  /></td>
                    <td><input style="width:99%" id="equip3" name="equip3" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri3" name="descri3" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq3" name="obseq3" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe3();" id="vunite3" name="vunite3" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale3" name="vtotale3" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose2" id="menose2" value="-" class="btn btn-danger col-md-12" onclick="menose2serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise3" id="maise3" value="+" class="btn btn-success col-md-12"  onclick="maise3serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais4equip" style="display:none">
                    <td><input style="width:99%" id="quant4" name="quant4" type="text" size="2" onchange="trocavirg(); valida_numeroe4();" /></td>
                    <td><input style="width:99%" id="equip4" name="equip4" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri4" name="descri4" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq4" name="obseq4" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe4();" id="vunite4" name="vunite4" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale4" name="vtotale4" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose3" id="menose3" value="-" class="btn btn-danger col-md-12" onclick="menose3serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise4" id="maise4" value="+" class="btn btn-success col-md-12"  onclick="maise4serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais5equip" style="display:none">
                    <td><input style="width:99%" id="quant5" name="quant5" type="text" size="2" onchange="trocavirg(); valida_numeroe5();" /></td>
                    <td><input style="width:99%" id="equip5" name="equip5" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri5" name="descri5" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq5" name="obseq5" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe5();" id="vunite5" name="vunite5" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale5" name="vtotale5" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose4" id="menose4" value="-" class="btn btn-danger col-md-12" onclick="menose4serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise5" id="maise5" value="+" class="btn btn-success col-md-12"  onclick="maise5serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais6equip" style="display:none">
                    <td><input style="width:99%" id="quant6" name="quant6" type="text" size="2" onchange="trocavirg(); valida_numeroe6();" /></td>
                    <td><input style="width:99%" id="equip6" name="equip6" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri6" name="descri6" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq6" name="obseq6" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe6();" id="vunite6" name="vunite6" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale6" name="vtotale6" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose5" id="menose5" value="-" class="btn btn-danger col-md-12" onclick="menose5serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise6" id="maise6" value="+" class="btn btn-success col-md-12"  onclick="maise6serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais7equip" style="display:none">
                    <td><input style="width:99%" id="quant7" name="quant7" type="text" size="2" onchange="trocavirg(); valida_numeroe7();" /></td>
                    <td><input style="width:99%" id="equip7" name="equip7" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri7" name="descri7" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq7" name="obseq7" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe7();" id="vunite7" name="vunite7" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale7" name="vtotale7" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose6" id="menose6" value="-" class="btn btn-danger col-md-12" onclick="menose6serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise7" id="maise7" value="+" class="btn btn-success col-md-12"  onclick="maise7serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais8equip" style="display:none">
                    <td><input style="width:99%" id="quant8" name="quant8" type="text" size="2" onchange="trocavirg(); valida_numeroe8();" /></td>
                    <td><input style="width:99%" id="equip8" name="equip8" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri8" name="descri8" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq8" name="obseq8" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe8();" id="vunite8" name="vunite8" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale8" name="vtotale8" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose7" id="menose7" value="-" class="btn btn-danger col-md-12" onclick="menose7serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise8" id="maise8" value="+" class="btn btn-success col-md-12"  onclick="maise8serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais9equip" style="display:none">
                    <td><input style="width:99%" id="quant9" name="quant9" type="text" size="2" onchange="trocavirg(); valida_numeroe9();" /></td>
                    <td><input style="width:99%" id="equip9" name="equip9" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri9" name="descri9" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq9" name="obseq9" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe9();" id="vunite9" name="vunite9" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale9" name="vtotale9" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose8" id="menose8" value="-" class="btn btn-danger col-md-12" onclick="menose8serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise9" id="maise9" value="+" class="btn btn-success col-md-12"  onclick="maise9serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais10equip" style="display:none">
                    <td><input style="width:99%" id="quant10" name="quant10" type="text" size="2" onchange="trocavirg(); valida_numeroe10();" /></td>
                    <td><input style="width:99%" id="equip10" name="equip10" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri10" name="descri10" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq10" name="obseq10" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe10();" id="vunite10" name="vunite10" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale10" name="vtotale10" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose9" id="menose9" value="-" class="btn btn-danger col-md-12" onclick="menose9serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise10" id="maise10" value="+" class="btn btn-success col-md-12"  onclick="maise10serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais11equip" style="display:none">
                    <td><input style="width:99%" id="quant11" name="quant11" type="text" size="2" onchange="trocavirg(); valida_numeroe11();" /></td>
                    <td><input style="width:99%" id="equip11" name="equip11" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri11" name="descri11" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq11" name="obseq11" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe11();" id="vunite11" name="vunite11" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale11" name="vtotale11" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose10" id="menose10" value="-" class="btn btn-danger col-md-12" onclick="menose10serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise11" id="maise11" value="+" class="btn btn-success col-md-12"  onclick="maise11serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais12equip" style="display:none">
                    <td><input style="width:99%" id="quant12" name="quant12" type="text" size="2" onchange="trocavirg(); valida_numeroe12();" /></td>
                    <td><input style="width:99%" id="equip12" name="equip12" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri12" name="descri12" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq12" name="obseq12" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe12();" id="vunite12" name="vunite12" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale12" name="vtotale12" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose11" id="menose11" value="-" class="btn btn-danger col-md-12" onclick="menose11serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise12" id="maise12" value="+" class="btn btn-success col-md-12"  onclick="maise12serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais13equip" style="display:none">
                    <td><input style="width:99%" id="quant13" name="quant13" type="text" size="2" onchange="trocavirg(); valida_numeroe13();" /></td>
                    <td><input style="width:99%" id="equip13" name="equip13" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri13" name="descri13" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq13" name="obseq13" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe13();" id="vunite13" name="vunite13" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale13" name="vtotale13" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose12" id="menose12" value="-" class="btn btn-danger col-md-12" onclick="menose12serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise13" id="maise13" value="+" class="btn btn-success col-md-12"  onclick="maise13serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais14equip" style="display:none">
                    <td><input style="width:99%" id="quant14" name="quant14" type="text" size="2" onchange="trocavirg(); valida_numeroe14();" /></td>
                    <td><input style="width:99%" id="equip14" name="equip14" type="text" size="25" /></td>
                    <td><input style="width:99%" id="descri14" name="descri14" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq14" name="obseq14" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe14();" id="vunite14" name="vunite14" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale14" name="vtotale14" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose13" id="menose13" value="-" class="btn btn-danger col-md-12" onclick="menose13serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="maise14" id="maise14" value="+" class="btn btn-success col-md-12"  onclick="maise14serv(); maislinha(); maislinha3();" /></td>
                  </tr>
                  <tr align="center" id="divmais15equip" style="display:none">
                    <td><input style="width:99%" id="quant15" name="quant15" type="text" size="2" onchange="trocavirg(); valida_numeroe15();" /></td>
                    <td><input style="width:99%" id="equip15" name="equip15" type="text" size="25" onchange="maislinha(); maislinha3();"/></td>
                    <td><input style="width:99%" id="descri15" name="descri15" type="text" size="35" /></td>
                    <!--    <td><input style="width:99%" id="obseq15" name="obseq15" type="text" size="22" /></td>
-->
                    <td><input style="width:99%; text-align:right" onchange="trocavirg(); valida_numeroe15();" id="vunite15" name="vunite15" type="text" size="8" /></td>
                    <td><input style="width:99%; text-align:right" readonly id="vtotale15" name="vtotale15" type="text" size="8" /></td>
                    <td align="center" valign="middle"><input style="width:99%; display:none; text-align:center" type="button" name="menose14" id="menose14" value="-" class="btn btn-danger col-md-12" onclick="menose14serv(); menoslinha(); menoslinha3();" /></td>
                    <td align="center" valign="middle"></td>
                  </tr>
                  <tr style="color:#FFFFFF; font-size:16px;">
                    <td colspan="4" align="right" style="border:#999999 solid 1px; background:#666666"><strong>TOTAL<font color="#666666"> .</font></strong></td>
                    <td align="center"><input style="width:99%; text-align:right" readonly id="vtotale" name="vtotale" type="text" size="8" /></td>
                    <td colspan="2" align="center">&nbsp;</td>
                  </tr>
                </table><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option12" ><input type="checkbox" name="option12" id="option12" value="sim" />Incluir Observação na Proposta</label>
                  </div>
                <textarea name="obsescalae" style="width:100%" cols="100%" rows="2" id="obsescalae">Todos os equipamentos, materiais e insumos para a realização das atividades, serão fornecidos pela SPSP sem ônus para o Cliente. Será de responsabilidade da SPSP a manutenção dos equipamentos e acessórios disponibilizados para a realização das atividades em conformidade com o escopo.</textarea>
                <br />
                <br />
                <table width="80%" border="0" class="table table-hover table-condensed">
                  <tr style="color:#FFFFFF; font-size:16px;">
                    <td colspan="2"  align="right" style="border:#999999 solid 1px; background:#666666"><strong>VALOR TOTAL Bruto da Nota Fiscal<font color="#666666"> .</font></strong></td>
                    <td align="center" width="20%"><font color="#666666">R$ </font>
                      <input  readonly id="totalbruto" style="width:80%; text-align:right" name="totalbruto" type="text" size="8" /></td>
                  </tr>
                </table>
				<br />
                <br />
                <strong>Informar valores dos impostos?<br />
                <div class="row">
                  <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-success col-md-1 col-sm-3 col-xs-6" for="impostosim" onclick="return impostoss();">
                      <input type="radio" name="impostos" id="impostosim" value="impostosim" />
                      SIM</label>
                    <label class="btn btn-danger col-md-1 col-sm-3 col-xs-6" for="impostonao" onclick="impostosn();">
                      <input type="radio" name="impostos" id="impostonao" value="impostonao"/>
                      NÃO</label>
                  </div>
                </div>
                </strong>
                <table id="tabelaimp" width="60%" border="0" style="display:none" class="table table-hover table-condensed">
                  <tr style="color:#FFFFFF; height:30px" height="30px">
                    <td align="center" bgcolor="#FF7174"><strong>Impostos</strong><strong></strong></td>
                    <td width="30%" align="center" bgcolor="#FF7174"><strong>Valor Total</strong></td>
                  </tr>
                  <tr align="center">
                    <td align="left"><strong>Retenção de INSS sobre NF 11%</strong></td>
                    <td>R$
                      <input style="text-align:right; width:80%" readonly id="vtotalnf1" name="vtotalnf1" type="text" size="8" /></td>
                  </tr>
                  <tr align="center">
                    <td align="left"><strong>Retenção de IRRF sobre NF 1%</strong></td>
                    <td>R$
                      <input style="text-align:right; width:80%" readonly id="vtotalnf2" name="vtotalnf2" type="text" size="8" /></td>
                  </tr>
                  <tr align="center">
                    <td align="left"><strong>Retenção de PIS/COFINS/CSLL sobre NF 4,65%</strong></td>
                    <td>R$
                      <input style="text-align:right; width:80%" readonly id="vtotalnf3" name="vtotalnf3" type="text" size="8" /></td>
                  </tr>
                  <tr align="center">
                    <td align="left"><strong>Retenção de ISS sobre NF
                      <input onchange="trocavirg(); valida_numeroiss();" style="text-align:right" id="vliss" name="vliss" type="text" size="3" value="3"/>
                      %</strong></td>
                    <td>R$
                      <input style="text-align:right; width:80%" readonly id="vtotalnf4" name="vtotalnf4" type="text" size="8" /></td>
                  </tr>
                  <tr style="color:#FFFFFF; font-size:16px;">
                    <td align="right" style="border:#999999 solid 1px; background:#666666"><strong>VALOR TOTAL Líquido da Nota Fiscal (boleto)<font color="#666666"> .</font></strong></td>
                    <td align="center"><font color="#666666">R$ </font>
                      <input style="text-align:right; width:80%" readonly id="vtotalnf" name="vtotalnf" type="text" size="8" /></td>
                  </tr>
                  <tr style="color:#FFFFFF; font-size:16px;">
                    <td colspan="2"><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option13" ><input type="checkbox" name="option13" id="option13" value="sim" />Incluir Observação na Proposta</label>
                  </div>
<textarea name="obsimposto" style="width:100%" id="obsimposto" cols="100%" rows="2" >Se tributos forem criados ou alíquotas forem modificadas durante a vigência do contrato e isso aumentar ou reduzir o ônus, o preço será revisto, a fim de adequá-lo às mudanças</textarea></td>
                  </tr>
                    <tr>
                    <td><br />
Consulte abaixo o valor do ISS correto:
<iframe src="http://www3.employer.com.br/TabelaISS.aspx?templatenovo=true" max-width="650px" width="100%" height="300px"></iframe>
                    </td>
                    </tr>
                </table>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option3" ><input type="checkbox" name="option3" id="option3" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Condições de Pagamento:</strong>
                <br /><textarea name="pagamento" style="width:100%" id="pagamento" cols="100%" rows="3" >A fatura correspondente à execução dos serviços contratados será sempre emitida e entregue com tempo hábil para as devidas conferências. A cobrança é feita por rede bancária e o vencimento será no 28º dia do mês da realização dos serviços. Vencido este prazo, a cobrança dos encargos financeiros incide sobre o montante da fatura até a data do pagamento.</textarea>
                
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option2" ><input type="checkbox" name="option2" id="option2" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Benefícios para Colaboradores:</strong>
                <br /><textarea name="beneficios" style="width:100%" id="beneficios" cols="100%" rows="1" >Vale Alimentação; Vale Refeição; Vale Transporte; Uniforme Completo; EPI´s; Assistência Social Familiar Sindical.</textarea>
                <br />
                <br />
                <strong>
<div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option1" ><input type="checkbox" name="option1" id="option1" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Súmula 444:</strong>
                <br /><textarea name="cobraferiado" style="width:100%" id="cobraferiado" cols="100%" rows="2" >O colaborador da escala 12x36 que trabalhar no feriado receberá hora extra 100% referente a esse dia e a cobrança será repassada ao cliente no valor de 100% da hora do contrato, caso esse valor não esteja incluso mensalmente no contrato, será cobrado a parte.</textarea>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option4" ><input type="checkbox" name="option4" id="option4" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Reajuste do Contrato:</strong>
                <br /><textarea name="reajuste" style="width:100%" id="reajuste" cols="100%" rows="1" >Os preços mensais serão reajustados a partir do 1º dia da data base da categoria, decorrente da convenção, dissídio ou acordo coletivo.</textarea>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option5" ><input type="checkbox" name="option5" id="option5" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Validade do Contrato:</strong>
                <br /><textarea name="validadecont" style="width:100%" id="validadecont" cols="100%" rows="1" >Em decorrência dos investimentos e condições diferenciadas apresentadas, o tempo mínimo de contrato será de 12 (doze) meses.</textarea>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option6" ><input type="checkbox" name="option6" id="option6" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Início dos Serviços:</strong>
                <br /><textarea name="inicio" style="width:100%" id="inicio" cols="100%" rows="2" >O prazo para implantação será de 30 dias após a aprovação da proposta. Caso haja necessidade de implantação emergencial, será avaliada uma maneira melhor para atender a necessidade.</textarea>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option7" ><input type="checkbox" name="option7" id="option7" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Validade da Proposta:</strong>
                <br /><textarea name="validadeprop" style="width:100%" id="validadeprop" cols="100%" rows="1" >A proposta é válida por 30 dias, a contar desta data.</textarea>
                <br />
                <br />
				<strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option9" ><input type="checkbox" name="option9" id="option9" value="sim"/>Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Aditivo Contratual:</strong>
                <br /><textarea name="aditivo" style="width:100%" id="aditivo" cols="100%" rows="2" >Com a assinatura do Termo de Aceite, a presente proposta comercial passa a fazer parte integral do contrato de prestação de serviços firmados entre as partes na forma de anexo. O presente contrato passa a ter o valor mensal de R$ XX.XXX,XX. As demais cláusulas contratuais permanecem inalteradas.</textarea>
                <br />
                <br />
                <strong><div class="btn-group" data-toggle="buttons"><label class="btn btn-primary col-md-12" for="option8" ><input type="checkbox" name="option8" id="option8" value="sim" />Incluir na Proposta</label>
                  </div>&nbsp;&nbsp;Considerações:</strong>
                <br /><textarea name="obsgeral" style="width:100%" id="obsgeral" cols="100%" rows="3" ></textarea>
              </div>
              <br />
              <br />
<!--              <strong>A proposta será enviada para o cliente por e-mail?
              <div class="row">
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-success col-md-1 col-sm-3 col-xs-6" for="timbresim">
                    <input type="radio" name="timbre" id="timbresim" value="timbresim" />
                    SIM</label>
                  <label class="btn btn-danger col-md-1 col-sm-3 col-xs-6" for="impostonao">
                    <input type="radio" name="timbre" id="timbrenao" value="timbrenao"/>
                    NÃO</label>
                </div>
              </div>
              </strong>
              <br />
              <br />-->
              <div style="display:none"><input type="text" id="timbre" name="timbre" value="timbresim" /></div>
              <input type="submit" onClick="somatudo(); calclinhas(); this.form.target='_self';return true;" target="_self" class="btn btn-default" value="Gerar Proposta">
            </form>
          </div>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_60"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">

function validar(formulario){
	var formulario = document.getElementById('formulario');
	if(formulario.nomecliente.value == ''){alert("Informe o NOME do CLIENTE."); formulario.nomecliente.focus(); return false;}
	if(formulario.ativ1.value == '' && formulario.equip1.value == '' ){alert("Informe pelo menos UM SERVIÇO ou UM EQUIPAMENTO."); formulario.ativ1.focus();return false;}
	if(formulario.ativ1.value != '' && formulario.vunit1.value == '' ){alert("Confira a TABELA de SERVIÇOS, preencha os valores."); formulario.vunit1.focus();return false;}
	if(formulario.equip1.value != '' && formulario.vunite1.value == '' ){alert("Confira a TABELA de EQUIPAMENTOS, preencha os valores."); formulario.vunite1.focus();return false;}
	if(formulario.impostosim.checked == false && formulario.impostonao.checked == false ){alert("Informe se na proposta conterá VALORES DOS IMPOSTOS."); return false;}
	if(formulario.impostosim.checked == true && formulario.vliss.value == '' ){alert("Informe o valor do percentual de reteção do ISS."); formulario.vliss.focus(); return false;}
	return true;}


function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
{src.value += texto.substring(0,1);}}


function mais0serv()
{document.getElementById('maism1').style.display="block"; document.getElementById('menos0').style.display="block"; document.getElementById('posto2').focus;};
function menos0serv()
{formulario.posto1.value = ""; formulario.colab1.value = ""; formulario.ativ1.value = ""; formulario.cargh1.value = ""; formulario.turno1.value = ""; formulario.escala1.value = ""; formulario.vunit1.value = ""; formulario.vtotal1.value = ""; document.getElementById('maism1').style.display="none"; document.getElementById('menos0').style.display="none"; somat(); somanfb(); somanft(); document.getElementById('posto1').focus;};

function maism1serv()
{document.getElementById('divmaism1serv').style.display="table-row"; document.getElementById('maism1').style.display="none"; document.getElementById('menosm1').style.display="block"; document.getElementById('menos0').style.display="none"; document.getElementById('maism2').style.display="block"; document.getElementById('posto3').focus;};
function menosm1serv()
{formulario.posto2.value = ""; formulario.colab2.value = ""; formulario.ativ2.value = ""; formulario.cargh2.value = ""; formulario.turno2.value = ""; formulario.escala2.value = ""; formulario.vunit2.value = ""; formulario.vtotal2.value = ""; document.getElementById('divmaism1serv').style.display="none"; document.getElementById('maism1').style.display="block"; document.getElementById('menosm1').style.display="none"; document.getElementById('menos0').style.display="block"; document.getElementById('maism2').style.display="none"; somat(); somanfb(); somanft();};

function maism2serv()
{document.getElementById('divmaism2serv').style.display="table-row"; document.getElementById('maism2').style.display="none"; document.getElementById('menosm2').style.display="block"; document.getElementById('menosm1').style.display="none"; document.getElementById('maism3').style.display="block"; document.getElementById('posto4').focus;};
function menosm2serv()
{formulario.posto3.value = ""; formulario.colab3.value = ""; formulario.ativ3.value = ""; formulario.cargh3.value = ""; formulario.turno3.value = ""; formulario.escala3.value = ""; formulario.vunit3.value = ""; formulario.vtotal3.value = ""; document.getElementById('divmaism2serv').style.display="none"; document.getElementById('maism2').style.display="block"; document.getElementById('menosm2').style.display="none"; document.getElementById('menosm1').style.display="block"; document.getElementById('maism3').style.display="none"; somat(); somanfb(); somanft();};

function maism3serv()
{document.getElementById('divmaism3serv').style.display="table-row"; document.getElementById('maism3').style.display="none"; document.getElementById('menosm3').style.display="block"; document.getElementById('menosm2').style.display="none"; document.getElementById('mais1').style.display="block"};
function menosm3serv()
{formulario.posto4.value = ""; formulario.colab4.value = ""; formulario.ativ4.value = ""; formulario.cargh4.value = ""; formulario.turno4.value = ""; formulario.escala4.value = ""; formulario.vunit4.value = ""; formulario.vtotal4.value = ""; document.getElementById('divmaism3serv').style.display="none"; document.getElementById('maism3').style.display="block"; document.getElementById('menosm3').style.display="none"; document.getElementById('menosm2').style.display="block"; document.getElementById('mais1').style.display="none"; somat(); somanfb(); somanft();};

function mais1serv()
{document.getElementById('divmais1serv').style.display="table-row"; document.getElementById('mais1').style.display="none"; document.getElementById('menos1').style.display="block"; document.getElementById('menosm3').style.display="none"; document.getElementById('mais2').style.display="block"; };
function menos1serv()
{formulario.posto5.value = ""; formulario.colab5.value = ""; formulario.ativ5.value = ""; formulario.cargh5.value = ""; formulario.turno5.value = ""; formulario.escala5.value = ""; formulario.vunit5.value = ""; formulario.vtotal5.value = ""; document.getElementById('divmais1serv').style.display="none"; document.getElementById('mais1').style.display="block"; document.getElementById('menos1').style.display="none"; document.getElementById('menosm3').style.display="block"; document.getElementById('mais2').style.display="none"; somat(); somanfb(); somanft();};

function mais2serv()
{document.getElementById('divmais2serv').style.display="table-row"; document.getElementById('mais2').style.display="none"; document.getElementById('menos2').style.display="block"; document.getElementById('menos1').style.display="none"; document.getElementById('mais3').style.display="block"};
function menos2serv()
{formulario.posto6.value = ""; formulario.colab6.value = ""; formulario.ativ6.value = ""; formulario.cargh6.value = ""; formulario.turno6.value = ""; formulario.escala6.value = ""; formulario.vunit6.value = ""; formulario.vtotal6.value = ""; document.getElementById('divmais2serv').style.display="none"; document.getElementById('mais2').style.display="block"; document.getElementById('menos2').style.display="none"; document.getElementById('menos1').style.display="block"; document.getElementById('mais3').style.display="none"; somat(); somanfb(); somanft();};

function mais3serv()
{document.getElementById('divmais3serv').style.display="table-row"; document.getElementById('mais3').style.display="none"; document.getElementById('menos3').style.display="block"; document.getElementById('menos2').style.display="none"; document.getElementById('mais4').style.display="block"};
function menos3serv()
{formulario.posto7.value = ""; formulario.colab7.value = ""; formulario.ativ7.value = ""; formulario.cargh7.value = ""; formulario.turno7.value = ""; formulario.escala7.value = ""; formulario.vunit7.value = ""; formulario.vtotal7.value = ""; document.getElementById('divmais3serv').style.display="none"; document.getElementById('mais3').style.display="block"; document.getElementById('menos3').style.display="none"; document.getElementById('menos2').style.display="block"; document.getElementById('mais4').style.display="none"; somat(); somanfb(); somanft();};

function mais4serv()
{document.getElementById('divmais4serv').style.display="table-row"; document.getElementById('mais4').style.display="none"; document.getElementById('menos4').style.display="block"; document.getElementById('menos3').style.display="none"; document.getElementById('mais5').style.display="block"};
function menos4serv()
{formulario.posto8.value = ""; formulario.colab8.value = ""; formulario.ativ8.value = ""; formulario.cargh8.value = ""; formulario.turno8.value = ""; formulario.escala8.value = ""; formulario.vunit8.value = ""; formulario.vtotal8.value = ""; document.getElementById('divmais4serv').style.display="none"; document.getElementById('mais4').style.display="block"; document.getElementById('menos4').style.display="none"; document.getElementById('menos3').style.display="block"; document.getElementById('mais5').style.display="none"; somat(); somanfb(); somanft();};

function mais5serv()
{document.getElementById('divmais5serv').style.display="table-row"; document.getElementById('mais5').style.display="none"; document.getElementById('menos5').style.display="block"; document.getElementById('menos4').style.display="none"; document.getElementById('mais6').style.display="block"};
function menos5serv()
{formulario.posto9.value = ""; formulario.colab9.value = ""; formulario.ativ9.value = ""; formulario.cargh9.value = ""; formulario.turno9.value = ""; formulario.escala9.value = ""; formulario.vunit9.value = ""; formulario.vtotal9.value = ""; document.getElementById('divmais5serv').style.display="none"; document.getElementById('mais5').style.display="block"; document.getElementById('menos5').style.display="none"; document.getElementById('menos4').style.display="block"; document.getElementById('mais6').style.display="none"; somat(); somanfb(); somanft();};

function mais6serv()
{document.getElementById('divmais6serv').style.display="table-row"; document.getElementById('mais6').style.display="none"; document.getElementById('menos6').style.display="block"; document.getElementById('menos5').style.display="none"; document.getElementById('mais7').style.display="block"};
function menos6serv()
{formulario.posto10.value = ""; formulario.colab10.value = ""; formulario.ativ10.value = ""; formulario.cargh10.value = ""; formulario.turno10.value = ""; formulario.escala10.value = ""; formulario.vunit10.value = ""; formulario.vtotal10.value = ""; document.getElementById('divmais6serv').style.display="none"; document.getElementById('mais6').style.display="block"; document.getElementById('menos6').style.display="none"; document.getElementById('menos5').style.display="block"; document.getElementById('mais7').style.display="none"; somat(); somanfb(); somanft();};

function mais7serv()
{document.getElementById('divmais7serv').style.display="table-row"; document.getElementById('mais7').style.display="none"; document.getElementById('menos7').style.display="block"; document.getElementById('menos6').style.display="none"; document.getElementById('mais8').style.display="block"};
function menos7serv()
{formulario.posto11.value = ""; formulario.colab11.value = ""; formulario.ativ11.value = ""; formulario.cargh11.value = ""; formulario.turno11.value = ""; formulario.escala11.value = ""; formulario.vunit11.value = ""; formulario.vtotal11.value = ""; document.getElementById('divmais7serv').style.display="none"; document.getElementById('mais7').style.display="block"; document.getElementById('menos7').style.display="none"; document.getElementById('menos6').style.display="block"; document.getElementById('mais8').style.display="none"; somat(); somanfb(); somanft();};

function mais8serv()
{document.getElementById('divmais8serv').style.display="table-row"; document.getElementById('mais8').style.display="none"; document.getElementById('menos8').style.display="block"; document.getElementById('menos7').style.display="none"; document.getElementById('mais9').style.display="block"};
function menos8serv()
{formulario.posto12.value = ""; formulario.colab12.value = ""; formulario.ativ12.value = ""; formulario.cargh12.value = ""; formulario.turno12.value = ""; formulario.escala12.value = ""; formulario.vunit12.value = ""; formulario.vtotal12.value = ""; document.getElementById('divmais8serv').style.display="none"; document.getElementById('mais8').style.display="block"; document.getElementById('menos8').style.display="none"; document.getElementById('menos7').style.display="block"; document.getElementById('mais9').style.display="none"; somat(); somanfb(); somanft();};

function mais9serv()
{document.getElementById('divmais9serv').style.display="table-row"; document.getElementById('mais9').style.display="none"; document.getElementById('menos9').style.display="block"; document.getElementById('menos8').style.display="none"; document.getElementById('mais10').style.display="block"};
function menos9serv()
{formulario.posto13.value = ""; formulario.colab13.value = ""; formulario.ativ13.value = ""; formulario.cargh13.value = ""; formulario.turno13.value = ""; formulario.escala13.value = ""; formulario.vunit13.value = ""; formulario.vtotal13.value = ""; document.getElementById('divmais9serv').style.display="none"; document.getElementById('mais9').style.display="block"; document.getElementById('menos9').style.display="none"; document.getElementById('menos8').style.display="block"; document.getElementById('mais10').style.display="none"; somat(); somanfb(); somanft();};

function mais10serv()
{document.getElementById('divmais10serv').style.display="table-row"; document.getElementById('mais10').style.display="none"; document.getElementById('menos10').style.display="block"; document.getElementById('menos9').style.display="none"; document.getElementById('mais11').style.display="block"};
function menos10serv()
{formulario.posto14.value = ""; formulario.colab14.value = ""; formulario.ativ14.value = ""; formulario.cargh14.value = ""; formulario.turno14.value = ""; formulario.escala14.value = ""; formulario.vunit14.value = ""; formulario.vtotal14.value = ""; document.getElementById('divmais10serv').style.display="none"; document.getElementById('mais10').style.display="block"; document.getElementById('menos10').style.display="none"; document.getElementById('menos9').style.display="block"; document.getElementById('mais11').style.display="none"; somat(); somanfb(); somanft();};

function mais11serv()
{document.getElementById('divmais11serv').style.display="table-row"; document.getElementById('mais11').style.display="none"; document.getElementById('menos11').style.display="block"; document.getElementById('menos10').style.display="none"; document.getElementById('mais12').style.display="block"};
function menos11serv()
{formulario.posto15.value = ""; formulario.colab15.value = ""; formulario.ativ15.value = ""; formulario.cargh15.value = ""; formulario.turno15.value = ""; formulario.escala15.value = ""; formulario.vunit15.value = ""; formulario.vtotal15.value = ""; document.getElementById('divmais11serv').style.display="none"; document.getElementById('mais11').style.display="block"; document.getElementById('menos11').style.display="none"; document.getElementById('menos10').style.display="block"; document.getElementById('mais12').style.display="none"; somat(); somanfb(); somanft();};


function maise0serv()
{document.getElementById('maise1').style.display="block"; document.getElementById('menose0').style.display="block"; document.getElementById('posto2').focus;};

function menose0serv()
{formulario.quant1.value = ""; formulario.equip1.value = ""; formulario.descri1.value = ""; formulario.vunite1.value = ""; formulario.vtotale1.value = ""; document.getElementById('menose0').style.display="none"; document.getElementById('maise1').style.display="none"; somaet(); somanfb(); somanft(); document.getElementById('quant1').focus;};
function maise1serv()
{document.getElementById('divmai2sequip').style.display="table-row"; document.getElementById('menose0').style.display="none"; document.getElementById('maise1').style.display="none"; document.getElementById('menose1').style.display="block"; document.getElementById('maise2').style.display="block"; document.getElementById('quant2').focus;};

function menose1serv()
{formulario.quant2.value = ""; formulario.equip2.value = ""; formulario.descri2.value = ""; formulario.vunite2.value = ""; formulario.vtotale2.value = ""; document.getElementById('divmai2sequip').style.display="none"; document.getElementById('menose1').style.display="none"; document.getElementById('maise2').style.display="none"; document.getElementById('menose0').style.display="block"; document.getElementById('maise1').style.display="block"; somaet(); somanfb(); somanft();};
function maise2serv()
{document.getElementById('divmais3equip').style.display="table-row"; document.getElementById('menose1').style.display="none"; document.getElementById('maise2').style.display="none"; document.getElementById('menose2').style.display="block"; document.getElementById('maise3').style.display="block"; document.getElementById('quant3').focus;};

function menose2serv()
{formulario.quant3.value = ""; formulario.equip3.value = ""; formulario.descri3.value = ""; formulario.vunite3.value = ""; formulario.vtotale3.value = ""; document.getElementById('divmais3equip').style.display="none"; document.getElementById('menose2').style.display="none"; document.getElementById('maise3').style.display="none"; document.getElementById('menose1').style.display="block"; document.getElementById('maise2').style.display="block"; somaet(); somanfb(); somanft();};
function maise3serv()
{document.getElementById('divmais4equip').style.display="table-row"; document.getElementById('menose2').style.display="none"; document.getElementById('maise3').style.display="none"; document.getElementById('menose3').style.display="block"; document.getElementById('maise4').style.display="block"; document.getElementById('quant4').focus;};

function menose3serv()
{formulario.quant4.value = ""; formulario.equip4.value = ""; formulario.descri4.value = ""; formulario.vunite4.value = ""; formulario.vtotale4.value = ""; document.getElementById('divmais4equip').style.display="none"; document.getElementById('menose3').style.display="none"; document.getElementById('maise4').style.display="none"; document.getElementById('menose2').style.display="block"; document.getElementById('maise3').style.display="block"; somaet(); somanfb(); somanft();};
function maise4serv()
{document.getElementById('divmais5equip').style.display="table-row"; document.getElementById('menose3').style.display="none"; document.getElementById('maise4').style.display="none"; document.getElementById('menose4').style.display="block"; document.getElementById('maise5').style.display="block"; document.getElementById('quant5').focus;};

function menose4serv()
{formulario.quant5.value = ""; formulario.equip5.value = ""; formulario.descri5.value = ""; formulario.vunite5.value = ""; formulario.vtotale5.value = ""; document.getElementById('divmais5equip').style.display="none"; document.getElementById('menose4').style.display="none"; document.getElementById('maise5').style.display="none"; document.getElementById('menose3').style.display="block"; document.getElementById('maise4').style.display="block"; somaet(); somanfb(); somanft();};
function maise5serv()
{document.getElementById('divmais6equip').style.display="table-row"; document.getElementById('menose4').style.display="none"; document.getElementById('maise5').style.display="none"; document.getElementById('menose5').style.display="block"; document.getElementById('maise6').style.display="block"; document.getElementById('quant6').focus;};

function menose5serv()
{formulario.quant6.value = ""; formulario.equip6.value = ""; formulario.descri6.value = ""; formulario.vunite6.value = ""; formulario.vtotale6.value = ""; document.getElementById('divmais6equip').style.display="none"; document.getElementById('menose5').style.display="none"; document.getElementById('maise6').style.display="none"; document.getElementById('menose4').style.display="block"; document.getElementById('maise5').style.display="block"; somaet(); somanfb(); somanft();};
function maise6serv()
{document.getElementById('divmais7equip').style.display="table-row"; document.getElementById('menose5').style.display="none"; document.getElementById('maise6').style.display="none"; document.getElementById('menose6').style.display="block"; document.getElementById('maise7').style.display="block"; document.getElementById('quant7').focus;};

function menose6serv()
{formulario.quant7.value = ""; formulario.equip7.value = ""; formulario.descri7.value = ""; formulario.vunite7.value = ""; formulario.vtotale7.value = ""; document.getElementById('divmais7equip').style.display="none"; document.getElementById('menose6').style.display="none"; document.getElementById('maise7').style.display="none"; document.getElementById('menose5').style.display="block"; document.getElementById('maise6').style.display="block"; somaet(); somanfb(); somanft();};
function maise7serv()
{document.getElementById('divmais8equip').style.display="table-row"; document.getElementById('menose6').style.display="none"; document.getElementById('maise7').style.display="none"; document.getElementById('menose7').style.display="block"; document.getElementById('maise8').style.display="block"; document.getElementById('quant8').focus;};

function menose7serv()
{formulario.quant8.value = ""; formulario.equip8.value = ""; formulario.descri8.value = ""; formulario.vunite8.value = ""; formulario.vtotale8.value = ""; document.getElementById('divmais8equip').style.display="none"; document.getElementById('menose7').style.display="none"; document.getElementById('maise8').style.display="none"; document.getElementById('menose6').style.display="block"; document.getElementById('maise7').style.display="block"; somaet(); somanfb(); somanft();};
function maise8serv()
{document.getElementById('divmais9equip').style.display="table-row"; document.getElementById('menose7').style.display="none"; document.getElementById('maise8').style.display="none"; document.getElementById('menose8').style.display="block"; document.getElementById('maise9').style.display="block"; document.getElementById('quant9').focus;};

function menose8serv()
{formulario.quant9.value = ""; formulario.equip9.value = ""; formulario.descri9.value = ""; formulario.vunite9.value = ""; formulario.vtotale9.value = ""; document.getElementById('divmais9equip').style.display="none"; document.getElementById('menose8').style.display="none"; document.getElementById('maise9').style.display="none"; document.getElementById('menose7').style.display="block"; document.getElementById('maise8').style.display="block"; somaet(); somanfb(); somanft();};
function maise9serv()
{document.getElementById('divmais10equip').style.display="table-row"; document.getElementById('menose8').style.display="none"; document.getElementById('maise9').style.display="none"; document.getElementById('menose9').style.display="block"; document.getElementById('maise10').style.display="block"; document.getElementById('quant10').focus;};

function menose9serv()
{formulario.quant10.value = ""; formulario.equip10.value = ""; formulario.descri10.value = ""; formulario.vunite10.value = ""; formulario.vtotale10.value = ""; document.getElementById('divmais10equip').style.display="none"; document.getElementById('menose9').style.display="none"; document.getElementById('maise10').style.display="none"; document.getElementById('menose8').style.display="block"; document.getElementById('maise9').style.display="block"; somaet(); somanfb(); somanft();};
function maise10serv()
{document.getElementById('divmais11equip').style.display="table-row"; document.getElementById('menose9').style.display="none"; document.getElementById('maise10').style.display="none"; document.getElementById('menose10').style.display="block"; document.getElementById('maise11').style.display="block"; document.getElementById('quant11').focus;};

function menose10serv()
{formulario.quant11.value = ""; formulario.equip11.value = ""; formulario.descri11.value = ""; formulario.vunite11.value = ""; formulario.vtotale11.value = ""; document.getElementById('divmais11equip').style.display="none"; document.getElementById('menose10').style.display="none"; document.getElementById('maise11').style.display="none"; document.getElementById('menose9').style.display="block"; document.getElementById('maise10').style.display="block"; somaet(); somanfb(); somanft();};
function maise11serv()
{document.getElementById('divmais12equip').style.display="table-row"; document.getElementById('menose10').style.display="none"; document.getElementById('maise11').style.display="none"; document.getElementById('menose11').style.display="block"; document.getElementById('maise12').style.display="block"; document.getElementById('quant12').focus;};

function menose11serv()
{formulario.quant12.value = ""; formulario.equip12.value = ""; formulario.descri12.value = ""; formulario.vunite12.value = ""; formulario.vtotale12.value = ""; document.getElementById('divmais12equip').style.display="none"; document.getElementById('menose11').style.display="none"; document.getElementById('maise12').style.display="none"; document.getElementById('menose10').style.display="block"; document.getElementById('maise11').style.display="block"; somaet(); somanfb(); somanft();};
function maise12serv()
{document.getElementById('divmais13equip').style.display="table-row"; document.getElementById('menose11').style.display="none"; document.getElementById('maise12').style.display="none"; document.getElementById('menose12').style.display="block"; document.getElementById('maise13').style.display="block"; document.getElementById('quant13').focus;};

function menose12serv()
{formulario.quant13.value = ""; formulario.equip13.value = ""; formulario.descri13.value = ""; formulario.vunite13.value = ""; formulario.vtotale13.value = ""; document.getElementById('divmais13equip').style.display="none"; document.getElementById('menose12').style.display="none"; document.getElementById('maise13').style.display="none"; document.getElementById('menose11').style.display="block"; document.getElementById('maise12').style.display="block"; somaet(); somanfb(); somanft();};
function maise13serv()
{document.getElementById('divmais14equip').style.display="table-row"; document.getElementById('menose12').style.display="none"; document.getElementById('maise13').style.display="none"; document.getElementById('menose13').style.display="block"; document.getElementById('maise14').style.display="block"; document.getElementById('quant14').focus;};

function menose13serv()
{formulario.quant14.value = ""; formulario.equip14.value = ""; formulario.descri14.value = ""; formulario.vunite14.value = ""; formulario.vtotale14.value = ""; document.getElementById('divmais14equip').style.display="none"; document.getElementById('menose13').style.display="none"; document.getElementById('maise14').style.display="none"; document.getElementById('menose12').style.display="block"; document.getElementById('maise13').style.display="block"; somaet(); somanfb(); somanft();};
function maise14serv()
{document.getElementById('divmais15equip').style.display="table-row"; document.getElementById('menose13').style.display="none"; document.getElementById('maise14').style.display="none"; document.getElementById('menose14').style.display="block"; document.getElementById('maise15').style.display="block"; document.getElementById('quant15').focus;};

function menose14serv()
{formulario.quant15.value = ""; formulario.equip15.value = ""; formulario.descri15.value = ""; formulario.vunite15.value = ""; formulario.vtotale15.value = ""; document.getElementById('divmais15equip').style.display="none"; document.getElementById('menose14').style.display="none"; document.getElementById('menose13').style.display="block"; document.getElementById('maise14').style.display="block"; somaet(); somanfb(); somanft();};


function valida_numeroiss() {
if(isNaN( document.getElementById('vliss').value )){alert("Informe um número válido!"); formulario.vliss.value = '';} else {somanf4(); somanft();}}
function valida_numero1() {
if(isNaN( document.getElementById('posto1').value )){alert("Informe um número válido!"); formulario.posto1.value = '';} else {mais0serv(); soma(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab1').value )){alert("Informe um número válido!"); formulario.colab1.value = '';} else {mais0serv(); soma(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit1').value )){alert("Informe um número válido!"); formulario.vunit1.value = '';} else {mais0serv(); soma(); somat(); somanfb(); somanft();}}
function valida_numero2() {
if(isNaN( document.getElementById('posto2').value )){alert("Informe um número válido!"); formulario.posto2.value = '';} else {soma2(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab2').value )){alert("Informe um número válido!"); formulario.colab2.value = '';} else {soma2(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit2').value )){alert("Informe um número válido!"); formulario.vunit2.value = '';} else {soma2(); somat(); somanfb(); somanft();}}
function valida_numero3() {
if(isNaN( document.getElementById('posto3').value )){alert("Informe um número válido!"); formulario.posto3.value = '';} else {soma3(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab3').value )){alert("Informe um número válido!"); formulario.colab3.value = '';} else {soma3(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit3').value )){alert("Informe um número válido!"); formulario.vunit3.value = '';} else {soma3(); somat(); somanfb(); somanft();}}
function valida_numero4() {
if(isNaN( document.getElementById('posto4').value )){alert("Informe um número válido!"); formulario.posto4.value = '';} else {soma4(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab4').value )){alert("Informe um número válido!"); formulario.colab4.value = '';} else {soma4(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit4').value )){alert("Informe um número válido!"); formulario.vunit4.value = '';} else {soma4(); somat(); somanfb(); somanft();}}
function valida_numero5() {
if(isNaN( document.getElementById('posto5').value )){alert("Informe um número válido!"); formulario.posto5.value = '';} else {soma5(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab5').value )){alert("Informe um número válido!"); formulario.colab5.value = '';} else {soma5(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit5').value )){alert("Informe um número válido!"); formulario.vunit5.value = '';} else {soma5(); somat(); somanfb(); somanft();}}
function valida_numero6() {
if(isNaN( document.getElementById('posto6').value )){alert("Informe um número válido!"); formulario.posto6.value = '';} else {soma6(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab6').value )){alert("Informe um número válido!"); formulario.colab6.value = '';} else {soma6(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit6').value )){alert("Informe um número válido!"); formulario.vunit6.value = '';} else {soma6(); somat(); somanfb(); somanft();}}
function valida_numero7() {
if(isNaN( document.getElementById('posto7').value )){alert("Informe um número válido!"); formulario.posto7.value = '';} else {soma7(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab7').value )){alert("Informe um número válido!"); formulario.colab7.value = '';} else {soma7(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit7').value )){alert("Informe um número válido!"); formulario.vunit7.value = '';} else {soma7(); somat(); somanfb(); somanft();}}
function valida_numero8() {
if(isNaN( document.getElementById('posto8').value )){alert("Informe um número válido!"); formulario.posto8.value = '';} else {soma8(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab8').value )){alert("Informe um número válido!"); formulario.colab8.value = '';} else {soma8(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit8').value )){alert("Informe um número válido!"); formulario.vunit8.value = '';} else {soma8(); somat(); somanfb(); somanft();}}
function valida_numero9() {
if(isNaN( document.getElementById('posto9').value )){alert("Informe um número válido!"); formulario.posto9.value = '';} else {soma9(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab9').value )){alert("Informe um número válido!"); formulario.colab9.value = '';} else {soma9(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit9').value )){alert("Informe um número válido!"); formulario.vunit9.value = '';} else {soma9(); somat(); somanfb(); somanft();}}
function valida_numero10() {
if(isNaN( document.getElementById('posto10').value )){alert("Informe um número válido!"); formulario.posto10.value = '';} else {soma10(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab10').value )){alert("Informe um número válido!"); formulario.colab10.value = '';} else {soma10(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit10').value )){alert("Informe um número válido!"); formulario.vunit10.value = '';} else {soma10(); somat(); somanfb(); somanft();}}
function valida_numero11() {
if(isNaN( document.getElementById('posto11').value )){alert("Informe um número válido!"); formulario.posto11.value = '';} else {soma11(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab11').value )){alert("Informe um número válido!"); formulario.colab11.value = '';} else {soma11(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit11').value )){alert("Informe um número válido!"); formulario.vunit11.value = '';} else {soma11(); somat(); somanfb(); somanft();}}
function valida_numero12() {
if(isNaN( document.getElementById('posto12').value )){alert("Informe um número válido!"); formulario.posto12.value = '';} else {soma12(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab12').value )){alert("Informe um número válido!"); formulario.colab12.value = '';} else {soma12(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit12').value )){alert("Informe um número válido!"); formulario.vunit12.value = '';} else {soma12(); somat(); somanfb(); somanft();}}
function valida_numero13() {
if(isNaN( document.getElementById('posto13').value )){alert("Informe um número válido!"); formulario.posto13.value = '';} else {soma13(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab13').value )){alert("Informe um número válido!"); formulario.colab13.value = '';} else {soma13(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit13').value )){alert("Informe um número válido!"); formulario.vunit13.value = '';} else {soma13(); somat(); somanfb(); somanft();}}
function valida_numero14() {
if(isNaN( document.getElementById('posto14').value )){alert("Informe um número válido!"); formulario.posto14.value = '';} else {soma14(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab14').value )){alert("Informe um número válido!"); formulario.colab14.value = '';} else {soma14(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit14').value )){alert("Informe um número válido!"); formulario.vunit14.value = '';} else {soma14(); somat(); somanfb(); somanft();}}
function valida_numero15() {
if(isNaN( document.getElementById('posto15').value )){alert("Informe um número válido!"); formulario.posto15.value = '';} else {soma15(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('colab15').value )){alert("Informe um número válido!"); formulario.colab15.value = '';} else {soma15(); somat(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunit15').value )){alert("Informe um número válido!"); formulario.vunit15.value = '';} else {soma15(); somat(); somanfb(); somanft();}}
function valida_numeroe1() {
if(isNaN( document.getElementById('quant1').value )){alert("Informe um número válido!"); formulario.quant1.value = '';} else {maise0serv(); somae(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite1').value )){alert("Informe um número válido!"); formulario.vunite1.value = '';} else {maise0serv(); somae(); somaet(); somanfb(); somanft();}}
function valida_numeroe2() {
if(isNaN( document.getElementById('quant2').value )){alert("Informe um número válido!"); formulario.quant2.value = '';} else {somae2(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite2').value )){alert("Informe um número válido!"); formulario.vunite2.value = '';} else {somae2(); somaet(); somanfb(); somanft();}}
function valida_numeroe3() {
if(isNaN( document.getElementById('quant3').value )){alert("Informe um número válido!"); formulario.quant3.value = '';} else {somae3(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite3').value )){alert("Informe um número válido!"); formulario.vunite3.value = '';} else {somae3(); somaet(); somanfb(); somanft();}}
function valida_numeroe4() {
if(isNaN( document.getElementById('quant4').value )){alert("Informe um número válido!"); formulario.quant4.value = '';} else {somae4(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite4').value )){alert("Informe um número válido!"); formulario.vunite4.value = '';} else {somae4(); somaet(); somanfb(); somanft();}}
function valida_numeroe5() {
if(isNaN( document.getElementById('quant5').value )){alert("Informe um número válido!"); formulario.quant5.value = '';} else {somae5(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite5').value )){alert("Informe um número válido!"); formulario.vunite5.value = '';} else {somae5(); somaet(); somanfb(); somanft();}}
function valida_numeroe6() {
if(isNaN( document.getElementById('quant6').value )){alert("Informe um número válido!"); formulario.quant6.value = '';} else {somae6(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite6').value )){alert("Informe um número válido!"); formulario.vunite6.value = '';} else {somae6(); somaet(); somanfb(); somanft();}}
function valida_numeroe7() {
if(isNaN( document.getElementById('quant7').value )){alert("Informe um número válido!"); formulario.quant7.value = '';} else {somae7(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite7').value )){alert("Informe um número válido!"); formulario.vunite7.value = '';} else {somae7(); somaet(); somanfb(); somanft();}}
function valida_numeroe8() {
if(isNaN( document.getElementById('quant8').value )){alert("Informe um número válido!"); formulario.quant8.value = '';} else {somae8(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite8').value )){alert("Informe um número válido!"); formulario.vunite8.value = '';} else {somae8(); somaet(); somanfb(); somanft();}}
function valida_numeroe9() {
if(isNaN( document.getElementById('quant9').value )){alert("Informe um número válido!"); formulario.quant9.value = '';} else {somae9(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite9').value )){alert("Informe um número válido!"); formulario.vunite9.value = '';} else {somae9(); somaet(); somanfb(); somanft();}}
function valida_numeroe10() {
if(isNaN( document.getElementById('quant10').value )){alert("Informe um número válido!"); formulario.quant10.value = '';} else {somae10(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite10').value )){alert("Informe um número válido!"); formulario.vunite10.value = '';} else {somae10(); somaet(); somanfb(); somanft();}}
function valida_numeroe11() {
if(isNaN( document.getElementById('quant11').value )){alert("Informe um número válido!"); formulario.quant11.value = '';} else {somae11(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite11').value )){alert("Informe um número válido!"); formulario.vunite11.value = '';} else {somae11(); somaet(); somanfb(); somanft();}}
function valida_numeroe12() {
if(isNaN( document.getElementById('quant12').value )){alert("Informe um número válido!"); formulario.quant12.value = '';} else {somae12(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite12').value )){alert("Informe um número válido!"); formulario.vunite12.value = '';} else {somae12(); somaet(); somanfb(); somanft();}}
function valida_numeroe13() {
if(isNaN( document.getElementById('quant13').value )){alert("Informe um número válido!"); formulario.quant13.value = '';} else {somae13(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite13').value )){alert("Informe um número válido!"); formulario.vunite13.value = '';} else {somae13(); somaet(); somanfb(); somanft();}}
function valida_numeroe14() {
if(isNaN( document.getElementById('quant14').value )){alert("Informe um número válido!"); formulario.quant14.value = '';} else {somae14(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite14').value )){alert("Informe um número válido!"); formulario.vunite14.value = '';} else {somae14(); somaet(); somanfb(); somanft();}}
function valida_numeroe15() {
if(isNaN( document.getElementById('quant15').value )){alert("Informe um número válido!"); formulario.quant15.value = '';} else {somae15(); somaet(); somanfb(); somanft();}
if(isNaN( document.getElementById('vunite15').value )){alert("Informe um número válido!"); formulario.vunite15.value = '';} else {somae15(); somaet(); somanfb(); somanft();}}

function impostoss()
{document.getElementById('tabelaimp').style.display="block"; somanf(); somanf2(); somanf3(); somanf4(); somanft();};
function impostosn()
{formulario.vtotalnf1.value = ""; formulario.vtotalnf2.value = ""; formulario.vtotalnf3.value = ""; formulario.vtotalnf4.value = ""; formulario.vtotalnf.value = ""; document.getElementById('tabelaimp').style.display="none"};

function apagaefeito(ativ1){ativ1.onchange = ''};
function voltaefeito(menos0){ativ1.onchange = ativ1s.onchange};

function apagaefeito2(equip1){equip1.onchange = ''};
function voltaefeito2(menos0){equip1.onchange = equip1s.onchange};

function trocavirg(){
document.formulario.posto1.value=document.formulario.posto1.value.replace('-','')
document.formulario.posto1.value=document.formulario.posto1.value.replace(',','.')
document.formulario.colab1.value=document.formulario.colab1.value.replace('-','')
document.formulario.colab1.value=document.formulario.colab1.value.replace(',','.')
document.formulario.vunit1.value=document.formulario.vunit1.value.replace('-','')
document.formulario.vunit1.value=document.formulario.vunit1.value.replace(',','.')

document.formulario.posto2.value=document.formulario.posto2.value.replace('-','')
document.formulario.posto2.value=document.formulario.posto2.value.replace(',','.')
document.formulario.colab2.value=document.formulario.colab2.value.replace('-','')
document.formulario.colab2.value=document.formulario.colab2.value.replace(',','.')
document.formulario.vunit2.value=document.formulario.vunit2.value.replace('-','')
document.formulario.vunit2.value=document.formulario.vunit2.value.replace(',','.')

document.formulario.posto3.value=document.formulario.posto3.value.replace('-','')
document.formulario.posto3.value=document.formulario.posto3.value.replace(',','.')
document.formulario.colab3.value=document.formulario.colab3.value.replace('-','')
document.formulario.colab3.value=document.formulario.colab3.value.replace(',','.')
document.formulario.vunit3.value=document.formulario.vunit3.value.replace('-','')
document.formulario.vunit3.value=document.formulario.vunit3.value.replace(',','.')

document.formulario.posto4.value=document.formulario.posto4.value.replace('-','')
document.formulario.posto4.value=document.formulario.posto4.value.replace(',','.')
document.formulario.colab4.value=document.formulario.colab4.value.replace('-','')
document.formulario.colab4.value=document.formulario.colab4.value.replace(',','.')
document.formulario.vunit4.value=document.formulario.vunit4.value.replace('-','')
document.formulario.vunit4.value=document.formulario.vunit4.value.replace(',','.')

document.formulario.posto5.value=document.formulario.posto5.value.replace('-','')
document.formulario.posto5.value=document.formulario.posto5.value.replace(',','.')
document.formulario.colab5.value=document.formulario.colab5.value.replace('-','')
document.formulario.colab5.value=document.formulario.colab5.value.replace(',','.')
document.formulario.vunit5.value=document.formulario.vunit5.value.replace('-','')
document.formulario.vunit5.value=document.formulario.vunit5.value.replace(',','.')

document.formulario.posto6.value=document.formulario.posto6.value.replace('-','')
document.formulario.posto6.value=document.formulario.posto6.value.replace(',','.')
document.formulario.colab6.value=document.formulario.colab6.value.replace('-','')
document.formulario.colab6.value=document.formulario.colab6.value.replace(',','.')
document.formulario.vunit6.value=document.formulario.vunit6.value.replace('-','')
document.formulario.vunit6.value=document.formulario.vunit6.value.replace(',','.')

document.formulario.posto7.value=document.formulario.posto7.value.replace('-','')
document.formulario.posto7.value=document.formulario.posto7.value.replace(',','.')
document.formulario.colab7.value=document.formulario.colab7.value.replace('-','')
document.formulario.colab7.value=document.formulario.colab7.value.replace(',','.')
document.formulario.vunit7.value=document.formulario.vunit7.value.replace('-','')
document.formulario.vunit7.value=document.formulario.vunit7.value.replace(',','.')

document.formulario.posto8.value=document.formulario.posto8.value.replace('-','')
document.formulario.posto8.value=document.formulario.posto8.value.replace(',','.')
document.formulario.colab8.value=document.formulario.colab8.value.replace('-','')
document.formulario.colab8.value=document.formulario.colab8.value.replace(',','.')
document.formulario.vunit8.value=document.formulario.vunit8.value.replace('-','')
document.formulario.vunit8.value=document.formulario.vunit8.value.replace(',','.')

document.formulario.posto9.value=document.formulario.posto9.value.replace('-','')
document.formulario.posto9.value=document.formulario.posto9.value.replace(',','.')
document.formulario.colab9.value=document.formulario.colab9.value.replace('-','')
document.formulario.colab9.value=document.formulario.colab9.value.replace(',','.')
document.formulario.vunit9.value=document.formulario.vunit9.value.replace('-','')
document.formulario.vunit9.value=document.formulario.vunit9.value.replace(',','.')

document.formulario.posto10.value=document.formulario.posto10.value.replace('-','')
document.formulario.posto10.value=document.formulario.posto10.value.replace(',','.')
document.formulario.colab10.value=document.formulario.colab10.value.replace('-','')
document.formulario.colab10.value=document.formulario.colab10.value.replace(',','.')
document.formulario.vunit10.value=document.formulario.vunit10.value.replace('-','')
document.formulario.vunit10.value=document.formulario.vunit10.value.replace(',','.')

document.formulario.posto11.value=document.formulario.posto11.value.replace('-','')
document.formulario.posto11.value=document.formulario.posto11.value.replace(',','.')
document.formulario.colab11.value=document.formulario.colab11.value.replace('-','')
document.formulario.colab11.value=document.formulario.colab11.value.replace(',','.')
document.formulario.vunit11.value=document.formulario.vunit11.value.replace('-','')
document.formulario.vunit11.value=document.formulario.vunit11.value.replace(',','.')

document.formulario.posto12.value=document.formulario.posto12.value.replace('-','')
document.formulario.posto12.value=document.formulario.posto12.value.replace(',','.')
document.formulario.colab12.value=document.formulario.colab12.value.replace('-','')
document.formulario.colab12.value=document.formulario.colab12.value.replace(',','.')
document.formulario.vunit12.value=document.formulario.vunit12.value.replace('-','')
document.formulario.vunit12.value=document.formulario.vunit12.value.replace(',','.')

document.formulario.posto13.value=document.formulario.posto13.value.replace('-','')
document.formulario.posto13.value=document.formulario.posto13.value.replace(',','.')
document.formulario.colab13.value=document.formulario.colab13.value.replace('-','')
document.formulario.colab13.value=document.formulario.colab13.value.replace(',','.')
document.formulario.vunit13.value=document.formulario.vunit13.value.replace('-','')
document.formulario.vunit13.value=document.formulario.vunit13.value.replace(',','.')

document.formulario.posto14.value=document.formulario.posto14.value.replace('-','')
document.formulario.posto14.value=document.formulario.posto14.value.replace(',','.')
document.formulario.colab14.value=document.formulario.colab14.value.replace('-','')
document.formulario.colab14.value=document.formulario.colab14.value.replace(',','.')
document.formulario.vunit14.value=document.formulario.vunit14.value.replace('-','')
document.formulario.vunit14.value=document.formulario.vunit14.value.replace(',','.')

document.formulario.posto15.value=document.formulario.posto15.value.replace('-','')
document.formulario.posto15.value=document.formulario.posto15.value.replace(',','.')
document.formulario.colab15.value=document.formulario.colab15.value.replace('-','')
document.formulario.colab15.value=document.formulario.colab15.value.replace(',','.')
document.formulario.vunit15.value=document.formulario.vunit15.value.replace('-','')
document.formulario.vunit15.value=document.formulario.vunit15.value.replace(',','.')

document.formulario.quant1.value=document.formulario.quant1.value.replace('-','')
document.formulario.quant1.value=document.formulario.quant1.value.replace(',','.')
document.formulario.vunite1.value=document.formulario.vunite1.value.replace('-','')
document.formulario.vunite1.value=document.formulario.vunite1.value.replace(',','.')

document.formulario.quant2.value=document.formulario.quant2.value.replace('-','')
document.formulario.quant2.value=document.formulario.quant2.value.replace(',','.')
document.formulario.vunite2.value=document.formulario.vunite2.value.replace('-','')
document.formulario.vunite2.value=document.formulario.vunite2.value.replace(',','.')

document.formulario.quant3.value=document.formulario.quant3.value.replace('-','')
document.formulario.quant3.value=document.formulario.quant3.value.replace(',','.')
document.formulario.vunite3.value=document.formulario.vunite3.value.replace('-','')
document.formulario.vunite3.value=document.formulario.vunite3.value.replace(',','.')

document.formulario.quant4.value=document.formulario.quant4.value.replace('-','')
document.formulario.quant4.value=document.formulario.quant4.value.replace(',','.')
document.formulario.vunite4.value=document.formulario.vunite4.value.replace('-','')
document.formulario.vunite4.value=document.formulario.vunite4.value.replace(',','.')

document.formulario.quant5.value=document.formulario.quant5.value.replace('-','')
document.formulario.quant5.value=document.formulario.quant5.value.replace(',','.')
document.formulario.vunite5.value=document.formulario.vunite5.value.replace('-','')
document.formulario.vunite5.value=document.formulario.vunite5.value.replace(',','.')

document.formulario.quant6.value=document.formulario.quant6.value.replace('-','')
document.formulario.quant6.value=document.formulario.quant6.value.replace(',','.')
document.formulario.vunite6.value=document.formulario.vunite6.value.replace('-','')
document.formulario.vunite6.value=document.formulario.vunite6.value.replace(',','.')

document.formulario.quant7.value=document.formulario.quant7.value.replace('-','')
document.formulario.quant7.value=document.formulario.quant7.value.replace(',','.')
document.formulario.vunite7.value=document.formulario.vunite7.value.replace('-','')
document.formulario.vunite7.value=document.formulario.vunite7.value.replace(',','.')

document.formulario.quant8.value=document.formulario.quant8.value.replace('-','')
document.formulario.quant8.value=document.formulario.quant8.value.replace(',','.')
document.formulario.vunite8.value=document.formulario.vunite8.value.replace('-','')
document.formulario.vunite8.value=document.formulario.vunite8.value.replace(',','.')

document.formulario.quant9.value=document.formulario.quant9.value.replace('-','')
document.formulario.quant9.value=document.formulario.quant9.value.replace(',','.')
document.formulario.vunite9.value=document.formulario.vunite9.value.replace('-','')
document.formulario.vunite9.value=document.formulario.vunite9.value.replace(',','.')

document.formulario.quant10.value=document.formulario.quant10.value.replace('-','')
document.formulario.quant10.value=document.formulario.quant10.value.replace(',','.')
document.formulario.vunite10.value=document.formulario.vunite10.value.replace('-','')
document.formulario.vunite10.value=document.formulario.vunite10.value.replace(',','.')

document.formulario.quant11.value=document.formulario.quant11.value.replace('-','')
document.formulario.quant11.value=document.formulario.quant11.value.replace(',','.')
document.formulario.vunite11.value=document.formulario.vunite11.value.replace('-','')
document.formulario.vunite11.value=document.formulario.vunite11.value.replace(',','.')

document.formulario.quant12.value=document.formulario.quant12.value.replace('-','')
document.formulario.quant12.value=document.formulario.quant12.value.replace(',','.')
document.formulario.vunite12.value=document.formulario.vunite12.value.replace('-','')
document.formulario.vunite12.value=document.formulario.vunite12.value.replace(',','.')

document.formulario.quant13.value=document.formulario.quant13.value.replace('-','')
document.formulario.quant13.value=document.formulario.quant13.value.replace(',','.')
document.formulario.vunite13.value=document.formulario.vunite13.value.replace('-','')
document.formulario.vunite13.value=document.formulario.vunite13.value.replace(',','.')

document.formulario.quant14.value=document.formulario.quant14.value.replace('-','')
document.formulario.quant14.value=document.formulario.quant14.value.replace(',','.')
document.formulario.vunite14.value=document.formulario.vunite14.value.replace('-','')
document.formulario.vunite14.value=document.formulario.vunite14.value.replace(',','.')

document.formulario.quant15.value=document.formulario.quant15.value.replace('-','')
document.formulario.quant15.value=document.formulario.quant15.value.replace(',','.')
document.formulario.vunite15.value=document.formulario.vunite15.value.replace('-','')
document.formulario.vunite15.value=document.formulario.vunite15.value.replace(',','.')

document.formulario.vliss.value=document.formulario.vliss.value.replace('-','')
document.formulario.vliss.value=document.formulario.vliss.value.replace(',','.')
}

function menoslinha()
{formulario.totallinhas.value = (formulario.totallinhas.value*1) - 1};
function maislinha()
{formulario.totallinhas.value = (formulario.totallinhas.value*1) + 1};

function menoslinha2()
{formulario.totallinhas2.value = (formulario.totallinhas2.value*1) - 1};
function maislinha2()
{formulario.totallinhas2.value = (formulario.totallinhas2.value*1) + 1};

function menoslinha3()
{formulario.totallinhas3.value = (formulario.totallinhas3.value*1) - 1};
function maislinha3()
{formulario.totallinhas3.value = (formulario.totallinhas3.value*1) + 1};

function soma()
{formulario.vtotal1.value = ((formulario.colab1.value*1) * (formulario.vunit1.value*1)).toFixed(2)};
function soma2()
{formulario.vtotal2.value = ((formulario.colab2.value*1) * (formulario.vunit2.value*1)).toFixed(2)};
function soma3()
{formulario.vtotal3.value = ((formulario.colab3.value*1) * (formulario.vunit3.value*1)).toFixed(2)};
function soma4()
{formulario.vtotal4.value = ((formulario.colab4.value*1) * (formulario.vunit4.value*1)).toFixed(2)};
function soma5()
{formulario.vtotal5.value = ((formulario.colab5.value*1) * (formulario.vunit5.value*1)).toFixed(2)};
function soma6()
{formulario.vtotal6.value = ((formulario.colab6.value*1) * (formulario.vunit6.value*1)).toFixed(2)};
function soma7()
{formulario.vtotal7.value = ((formulario.colab7.value*1) * (formulario.vunit7.value*1)).toFixed(2)};
function soma8()
{formulario.vtotal8.value = ((formulario.colab8.value*1) * (formulario.vunit8.value*1)).toFixed(2)};
function soma9()
{formulario.vtotal9.value = ((formulario.colab9.value*1) * (formulario.vunit9.value*1)).toFixed(2)};
function soma10()
{formulario.vtotal10.value = ((formulario.colab10.value*1) * (formulario.vunit10.value*1)).toFixed(2)};
function soma11()
{formulario.vtotal11.value = ((formulario.colab11.value*1) * (formulario.vunit11.value*1)).toFixed(2)};
function soma12()
{formulario.vtotal12.value = ((formulario.colab12.value*1) * (formulario.vunit12.value*1)).toFixed(2)};
function soma13()
{formulario.vtotal13.value = ((formulario.colab13.value*1) * (formulario.vunit13.value*1)).toFixed(2)};
function soma14()
{formulario.vtotal14.value = ((formulario.colab14.value*1) * (formulario.vunit14.value*1)).toFixed(2)};
function soma15()
{formulario.vtotal15.value = ((formulario.colab15.value*1) * (formulario.vunit15.value*1)).toFixed(2)};
function somat()
{formulario.vtotal.value = ((formulario.vtotal1.value*1) + (formulario.vtotal2.value*1) + (formulario.vtotal3.value*1) + (formulario.vtotal4.value*1) + (formulario.vtotal5.value*1) + (formulario.vtotal6.value*1) + (formulario.vtotal7.value*1) + (formulario.vtotal8.value*1) + (formulario.vtotal9.value*1) + (formulario.vtotal10.value*1) + (formulario.vtotal11.value*1) + (formulario.vtotal12.value*1) + (formulario.vtotal13.value*1) + (formulario.vtotal14.value*1) + (formulario.vtotal15.value*1)).toFixed(2)};

function somae()
{formulario.vtotale1.value = ((formulario.quant1.value*1) * (formulario.vunite1.value*1)).toFixed(2)};
function somae2()
{formulario.vtotale2.value = ((formulario.quant2.value*1) * (formulario.vunite2.value*1)).toFixed(2)};
function somae3()
{formulario.vtotale3.value = ((formulario.quant3.value*1) * (formulario.vunite3.value*1)).toFixed(2)};
function somae4()
{formulario.vtotale4.value = ((formulario.quant4.value*1) * (formulario.vunite4.value*1)).toFixed(2)};
function somae5()
{formulario.vtotale5.value = ((formulario.quant5.value*1) * (formulario.vunite5.value*1)).toFixed(2)};
function somae6()
{formulario.vtotale6.value = ((formulario.quant6.value*1) * (formulario.vunite6.value*1)).toFixed(2)};
function somae7()
{formulario.vtotale7.value = ((formulario.quant7.value*1) * (formulario.vunite7.value*1)).toFixed(2)};
function somae8()
{formulario.vtotale8.value = ((formulario.quant8.value*1) * (formulario.vunite8.value*1)).toFixed(2)};
function somae9()
{formulario.vtotale9.value = ((formulario.quant9.value*1) * (formulario.vunite9.value*1)).toFixed(2)};
function somae10()
{formulario.vtotale10.value = ((formulario.quant10.value*1) * (formulario.vunite10.value*1)).toFixed(2)};
function somae11()
{formulario.vtotale11.value = ((formulario.quant11.value*1) * (formulario.vunite11.value*1)).toFixed(2)};
function somae12()
{formulario.vtotale12.value = ((formulario.quant12.value*1) * (formulario.vunite12.value*1)).toFixed(2)};
function somae13()
{formulario.vtotale13.value = ((formulario.quant13.value*1) * (formulario.vunite13.value*1)).toFixed(2)};
function somae14()
{formulario.vtotale14.value = ((formulario.quant14.value*1) * (formulario.vunite14.value*1)).toFixed(2)};
function somae15()
{formulario.vtotale15.value = ((formulario.quant15.value*1) * (formulario.vunite15.value*1)).toFixed(2)};
function somaet()
{formulario.vtotale.value = ((formulario.vtotale1.value*1) + (formulario.vtotale2.value*1) + (formulario.vtotale3.value*1) + (formulario.vtotale4.value*1) + (formulario.vtotale5.value*1) + (formulario.vtotale6.value*1) + (formulario.vtotale7.value*1) + (formulario.vtotale8.value*1) + (formulario.vtotale9.value*1) + (formulario.vtotale10.value*1) + (formulario.vtotale11.value*1) + (formulario.vtotale12.value*1) + (formulario.vtotale13.value*1) + (formulario.vtotale14.value*1) + (formulario.vtotale15.value*1)).toFixed(2)};

function somanfb()
{formulario.totalbruto.value = ((formulario.vtotal.value*1) + (formulario.vtotale.value*1)).toFixed(2)};
function somanf()
{formulario.vtotalnf1.value = (11 * (formulario.totalbruto.value*1) / 100).toFixed(2)};
function somanf2()
{formulario.vtotalnf2.value = ((formulario.totalbruto.value*1) / 100).toFixed(2)};
function somanf3()
{formulario.vtotalnf3.value = (4.65 * (formulario.totalbruto.value*1) / 100).toFixed(2)};
function somanf4()
{formulario.vtotalnf4.value = (formulario.vliss.value*1 * (formulario.totalbruto.value*1) / 100).toFixed(2)};
function somanft()
{formulario.vtotalnf.value = ((formulario.totalbruto.value*1) - ((formulario.vtotalnf1.value*1) + (formulario.vtotalnf2.value*1) + (formulario.vtotalnf3.value*1) + (formulario.vtotalnf4.value*1))).toFixed(2)};

function somatudo()
{soma(); soma2(); soma3(); soma4(); soma5(); soma6(); soma7(); soma8(); soma9(); soma10(); soma11(); soma12(); soma13(); soma14(); soma15(); somat(); somae(); somae2(); somae3(); somae4(); somae5(); somae6(); somae7(); somae8(); somae9(); somae10(); somae11(); somae12(); somae13(); somae14(); somae15(); somaet(); somanfb(); somanf(); somanf2(); somanf3(); somanf4(); somanft();};

function time(){return null;};
</script>
<? include("../roda.php"); ?>
