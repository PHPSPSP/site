<?php

/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../privado.php");


$quarto = $_POST['quarto']; 
$lacre = $_POST['lacre']; 
$data = $_POST['data']; 
$horain = $_POST['horain']; 
$horafin = $_POST['horafin']; 
$colaborador = $_POST['colaborador'];
$colaborador2 = $_POST['colaborador2'];
$horaliberado = $_POST['horaliberado'];
$cliente1 = $_POST['cliente1']; 
$usuario = $_POST['usuario'];
$email = $_SESSION['mail'];

if($horain!=""){

if(empty($usuario)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{}
		
if (!empty($_POST)) {
	$success = $error = false;
	$post = new stdClass;
	
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	if (empty($post->quarto) OR empty($post->lacre))
		$error = true;
		
	else {
				
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

/*if (trim($_POST['os01'])!='' || trim($_POST['os02'])!='' || trim($_POST['os03'])!='' || trim($_POST['os04'])!='' || trim($_POST['os05'])!='' || trim($_POST['os06'])!='' || trim($_POST['os07'])!='' || trim($_POST['os08'])!='' || trim($_POST['os09'])!='' || trim($_POST['os10'])!='' || trim($_POST['os11'])!='' || trim($_POST['os12'])!='' || trim($_POST['os13'])!='' || trim($_POST['os14'])!='' || trim($_POST['os15'])!='' || trim($_POST['os16'])!='' || trim($_POST['os17'])!='' || trim($_POST['os18'])!='' || trim($_POST['os19'])!='' || trim($_POST['os20'])!='' || trim($_POST['os21'])!='' || trim($_POST['os22'])!='' || trim($_POST['os23'])!='' || trim($_POST['os24'])!='' || trim($_POST['os25'])!='' || trim($_POST['os26'])!='')
{
	if ($_POST['cliente']!="FUNDACAO AMARAL CARVALHO")
	{
		$emailos1 = "aparecidasfr@hub.unimedbauru.com.br";
		$usuarioos1 = "Aparecida Solange Rosa";
		$emailos2 = "flaviosgj@hub.unimedbauru.com.br";
		$usuarioos2 = "Flavio";}
	else
	{	$emailos1 = "aparecidasfr@hub.unimedbauru.com.br";
		$usuarioos1 = "Aparecida Solange Rosa";
		$emailos2 = "flaviosgj@hub.unimedbauru.com.br";
		$usuarioos2 = "Flavio";};
}*/

$frase = $_POST['cliente'];
$verif = strstr($frase, "BAURU");

	if ($verif)
	{	$emailos0 = $email;
		$usuarioos0 = $usuario;
		$emailos1 = $email;
		$usuarioos1 = $usuario;
		$emailos2 = $email;
		$usuarioos2 = $usuario;
		$emailos3 = $email;
		$usuarioos3 = $usuario;
		$emailos4 = $email;
		$usuarioos4 = $usuario;}
	else
	{	$emailos0 = "vanessar@hub.unimedbauru.com.br";
		$usuarioos0 = "Vanessa - Gestão de Leitos";
		$emailos1 = "aparecidasfr@hub.unimedbauru.com.br";
		$usuarioos1 = "Aparecida Solange Rosa - HUB";
		$emailos2 = "flaviosgj@hub.unimedbauru.com.br";
		$usuarioos2 = "Flavio - HUB";
		$emailos3 = "guilhermefs@hub.unimedbauru.com.br";
		$usuarioos3 = "Guilherme - HUB";
		$emailos4 = $email;
		$usuarioos4 = $usuario;};
	
		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);
		
		$message = Swift_Message::newInstance()
	->setSubject("FOR 312 - Check List Entrega de Quartos - $cliente1 $quarto") 
	->setTo(array($post->emailuser => $post->usuario)) 
	->setFrom(array("$email" => "$usuario"))
	->setCc(array("$emailos0" => "$usuarioos0", "$emailos1" => "$usuarioos1", "$emailos2" => "$usuarioos2", "$emailos3" => "$usuarioos3", "$emailos4" => "$usuarioos4"))
	->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes", "flavia.colugnati@spsp.com.br" => "Flavia Colugnati"))
	->setBody($html_message, "text/html")
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 312 - Check List Entrega de Quartos - $cliente1 $quarto.pdf", "application/pdf")); 
		if ($mailer->send($message)){

$a = mysql_query("INSERT INTO for312(quarto, lacre, datahora, data, horain, horafin,colaborador, colaborador2, cliente1, q01, q02, q03, q04, q05, q06, q07, q08, q09, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, obs01, obs02, obs03, obs04, obs05, obs06, obs07, obs08, obs09, obs10, obs11, obs12, obs13, obs14, obs15, obs16, obs17, obs18, obs19, obs20, obs21, obs22, obs23, obs24, obs25, obs26, os01, os02, os03, os04, os05, os06, os07, os08, os09, os10, os11, os12, os13, os14, os15, os16, os17, os18, os19, os20, os21, os22, os23, os24, os25, os26, usuario, email, tipolimpeza, horaliberado) VALUES('$_POST[quarto]', '$_POST[lacre]', NOW(), '$_POST[data]', '$_POST[horain]', '$_POST[horafin]', '$_POST[colaborador]', '$_POST[colaborador2]', '$_POST[cliente1]', '$_POST[q01]', '$_POST[q02]', '$_POST[q03]', '$_POST[q04]', '$_POST[q05]', '$_POST[q06]', '$_POST[q07]', '$_POST[q08]', '$_POST[q09]', '$_POST[q10]', '$_POST[q11]', '$_POST[q12]', '$_POST[q13]', '$_POST[q14]', '$_POST[q15]', '$_POST[q16]', '$_POST[q17]', '$_POST[q18]', '$_POST[q19]', '$_POST[q20]', '$_POST[q21]', '$_POST[q22]', '$_POST[q23]', '$_POST[q24]', '$_POST[q25]', '$_POST[q26]', '$_POST[obs01]', '$_POST[obs02]', '$_POST[obs03]', '$_POST[obs04]', '$_POST[obs05]', '$_POST[obs06]', '$_POST[obs07]', '$_POST[obs08]', '$_POST[obs09]', '$_POST[obs10]', '$_POST[obs11]', '$_POST[obs12]', '$_POST[obs13]', '$_POST[obs14]', '$_POST[obs15]', '$_POST[obs16]', '$_POST[obs17]', '$_POST[obs18]', '$_POST[obs19]', '$_POST[obs20]', '$_POST[obs21]', '$_POST[obs22]', '$_POST[obs23]', '$_POST[obs24]', '$_POST[obs25]', '$_POST[obs26]', '$_POST[os01]', '$_POST[os02]', '$_POST[os03]', '$_POST[os04]', '$_POST[os05]', '$_POST[os06]', '$_POST[os07]', '$_POST[os08]', '$_POST[os09]', '$_POST[os10]', '$_POST[os11]', '$_POST[os12]', '$_POST[os13]', '$_POST[os14]', '$_POST[os15]', '$_POST[os16]', '$_POST[os17]', '$_POST[os18]', '$_POST[os19]', '$_POST[os20]', '$_POST[os21]', '$_POST[os22]', '$_POST[os23]', '$_POST[os24]', '$_POST[os25]', '$_POST[os26]', '$_POST[usuario]', '$_POST[emailuser]', '$_POST[tipolimpeza]', '$_POST[horaliberado]')") or die(mysql_error());;

if ($a)
		{
			
echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Enviado com sucesso!');
		window.location.href='../logado.php';
		</SCRIPT>");}
		
else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio - Verifique o sinal da Internet!');
		window.history.go(-1);
</SCRIPT>");}}}}}

?>