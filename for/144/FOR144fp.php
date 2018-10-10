<?php
header('Content-type: text/html; charset=UTF-8',true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$gestoruser = $_SESSION['gestoruser'];

if(empty($usuario)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }

		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $cliente . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];
		}
		


if (isset($_POST)) {
	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->cliente) OR empty($post->usuario))
		$error = true;
		
	else {$dir = dirname(__FILE__);
		
		ob_start();
		require_once("pdf.php");
		$pdf_html = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/dompdf/dompdf_config.inc.php");
		$dompdf = new DOMPDF(); // Create new instance of dompdf
		$dompdf->load_html($pdf_html); // Load the html
		$dompdf->render(); // Parse the html, convert to PDF
		$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later
		
		ob_start();
		require_once("html.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/swift/swift_required.php");
		
 		$consulta_gestor=mysql_query("SELECT * FROM usuarios WHERE id = '" . $gestoruser . "'");
		
		while ($sup_ges = mysql_fetch_array($consulta_gestor)) {
            $emailgest = $sup_ges['mail'];
            $nomegest = $sup_ges['nome'];
		}
		
		$mailer = new Swift_Mailer(new Swift_MailTransport());
		$message = Swift_Message::newInstance()
	->setSubject("FOR 144-$codfor - Check List Supervisão - $cliente_posto $ativ") 
		->setTo(array($post->emailuser => $post->usuario)) 
		->setFrom(array("$email" => "$usuario"))
	->setCc(array("marinalva.rosa@spsp.com.br" => "Marinalva Rosa", "dayse.rocha@spsp.com.br" => "Dayse Rocha",
	"$emailgest" => "$nomegest" ))
	->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
	->setBody($html_message, "text/html")
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 144-$codfor - Check List Supervisão - $cliente_posto $ativ.pdf", "application/pdf")); 
		if ($mailer->send($message)){

$id2 = $_POST['id2']; 

$numero = $_POST['ativ'];
switch ($numero) {
case "PORTARIA - CONDOMÍNIO RESID.": $nhtml = ""; $npdf = ""; $forversao = "1"; break;
case "LIMPEZA - CONDOMÍNIO RESID.": $nhtml = ""; $npdf = "4"; $forversao = "2"; break;
case "PORTARIA - EDIFÍCIOS": $nhtml = "2"; $npdf = "2"; $forversao = "3"; break;
case "LIMPEZA - EDIFÍCIOS": $nhtml = "2"; $npdf = "5"; $forversao = "4"; break;
case "PORTARIA - INDÚSTRIAS": $nhtml = "3"; $npdf = "3"; $forversao = "5"; break;
case "LIMPEZA - INDÚSTRIAS": $nhtml = "3"; $npdf = "6"; $forversao = "6"; break;
case "ZELADORIA - EDIFÍCIOS E CONDOMÍNIOS": $nhtml = "0"; $npdf = "0"; $forversao = "7"; break;
case "JARDINAGEM": $nhtml = "7"; $npdf = "7"; $forversao = "8"; break;}

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($usuario)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{}

if (!empty($_POST)) {
	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->ativ) OR empty($post->cliente))
		$error = true;
		
	else {$dir = dirname(__FILE__);
		
		ob_start();
		require_once($dir."/pdf$npdf.php");
		$pdf_html = ob_get_contents();
		ob_end_clean();
		
		require_once($dir."/dompdf/dompdf_config.inc.php");
		$dompdf = new DOMPDF(); // Create new instance of dompdf
		$dompdf->load_html($pdf_html); // Load the html
		$dompdf->render(); // Parse the html, convert to PDF
		$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later
		
		ob_start();
		require_once($dir."/html$nhtml.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
		require_once($dir."/swift/swift_required.php");
		$mailer = new Swift_Mailer(new Swift_MailTransport());
		$message = Swift_Message::newInstance()
	->setSubject("FOR 144-$forversao - Check List Supervisão $ativ - $cliente")
	->setTo(array($post->emailuser => $post->usuario)) 
	->setFrom(array("$email" => "$usuario")) 
	->setCc(array(
	"marinalva.rosa@spsp.com.br" => "Marinalva Rosa",
	"jacqueline.araujo@spsp.com.br" => "Jacqueline Araujo"
	))
	->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
	->setBody($html_message, "text/html")
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 144-$forversao - Check List Supervisão $ativ - $cliente.pdf", "application/pdf"));
		if ($mailer->send($message)){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        		window.alert('Check List enviado com sucesso!');</SCRIPT>");
		
echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='FOR144lista.php';
        </SCRIPT>");}
		
else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do Check List!');
		window.history.go(-1);
</SCRIPT>");}}}}

?>