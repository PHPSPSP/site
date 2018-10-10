<?php
/*ini_set("display_errors", 1);
error_reporting(E_ALL|E_STRICT);*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
/*include("../listas.php");*/
include("../privado.php");
include("../config.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{

if (!empty($_POST)) {

	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val) {
		$post->$key = trim(strip_tags($_POST[$key]));
	}
		
	if (empty($post->endere)){
		$error = true;
		
	}else {
		
		ob_start();
		require_once("pdf.php");
		$pdf_html = ob_get_contents();
		ob_end_clean();
	
		
		$pdf_html = utf8_decode($pdf_html);
		
        require_once("../plugin_pdf/dompdf/dompdf_config.inc.php");
		
		$dompdf = new DOMPDF(); // Create new instance of dompdf
		$dompdf->load_html($pdf_html, 'UTF-8'); // Load the html
		$dompdf->render(); // Parse the html, convert to PDF
	
		$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later

		ob_start();
		require_once("html.php");
		$html_message = ob_get_contents();
		ob_end_clean();
		
        require_once("../plugin_pdf/swift/swift_required.php");

		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);

		$message = Swift_Message::newInstance()
		->setSubject("FOR 025 - ".$post->nomecol) 
		->setTo(array("$email" => "$usuario")) 
		->setFrom(array("noreply@spsp.com.br" => "$usuario (não responder)"))
		/*->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))*/
		->setBody($html_message, "text/html") 
		->attach(Swift_Attachment::newInstance($pdf_content, "FOR 025 - ".$post->nomecol.".pdf", "application/pdf")); 
		if ($mailer->send($message))
	  /**/echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF enviado com sucesso, por favor abra seu e-mail e imprima o FOR 025!');
		window.location.href='../logado.php';
        </SCRIPT>");
			
		else
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
		window.history.go(-1);
        </SCRIPT>");}}
		
		else
		{echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
        </SCRIPT>");}
}
?>