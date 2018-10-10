<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/

$email = "gustavo.guedes@spsp.com.br";
$nome = "Gustavo Guedes";

include("../listas.php");
include("../config.php");

$id2 = $_POST['id2'];

if(empty($usuario)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{}

if (!empty($_POST)) {
	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->campo48) OR empty($post->regiao) OR empty($post->campo2))
		$error = true;
		
	else {$dir = dirname(__FILE__);
		
		ob_start();
		require_once("pdf2.php");
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
		
$consulta=mysql_query("SELECT mail FROM usuarios where nome='$gestor'"); 
while ($dados = mysql_fetch_array($consulta))
$emailgestor=$dados['mail'];

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$campo48'"); 
while ($dados = mysql_fetch_array($consulta))
$emailsup=$dados['mail'];

		$mailer = new Swift_Mailer(new Swift_MailTransport());
		$message = Swift_Message::newInstance()
	->setSubject("FOR 054 - $campo4 - $campo192") 
	->setTo(array($post->emailuser => $post->usuario)) 
    ->setFrom(array("$email" => "$usuario"))
	->setCc(array(
	"daniel.garcia@spsp.com.br" => "Daniel Garcia",
    "rodolfo.martini@spsp.com.br" => "Rodolfo Martini",
    "vanessa.lima@spsp.com.br" => "Vanessa Lima",
    "daniel.barros@spsp.com.br" => "Daniel Barros",
	"bill.belizario@spsp.com.br" => "Bill Belizario",
	"gilcelia.nascimento@spsp.com.br" => "Gilcelia Nascimento",
	"dayse.rocha@spsp.com.br" => "Dayse Rocha",
    "carolina.ligeiro@spsp.com.br" => "Carolina Ligeiro",
    "ana.pereira@spsp.com.br" => "Ana Pereira",
    "ralfe.kobayashi@spsp.com.br" => "Ralfe Kobayashi",
    "jacqueline.araujo@spsp.com.br" => "Jacqueline Araujo",
    "mariana.stefanini@spsp.com.br" => "Mariana Stefanini",
    "murilo.martins@spsp.com.br" => "Murilo Martins",
	"cristiane.ribeiro@spsp.com.br" => "Cristiane Ribeiro",
	"camila.sotelo@spsp.com.br" => "Camila Sotelo",
    "$email2" => "$nome2",
    "$email3" => "$nome3",
    "$email4" => "$nome4",
	"$emailgestor" => "$gestor",
    "$emailsup" => "$campo48"))	
	->setBody($html_message, "text/html") 
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 054 - $campo4 - $campo192.pdf", "application/pdf")); 
		if ($mailer->send($message)){
/**/	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF Reenviado com sucesso!');
		window.location.href='FOR0543.php';</SCRIPT>");}
			
else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
		window.history.go(-1);
</SCRIPT>");}}}

?>