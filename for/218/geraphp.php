<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../privado.php");
include("../listas.php");

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($usuario)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{}

$consulta_posto=mysql_query("SELECT NOMEPOS FROM sarposto WHERE CODPOS = '" . $ativ . "' AND CODCLI = '" . $cliente . "'");
		
		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $cliente . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];
		}
		
		while ($posto = mysql_fetch_array($consulta_posto)) {
            $posto_atividade = $posto['NOMEPOS'];
		}
		
if (!empty($_POST)) {
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
		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);
		$message = Swift_Message::newInstance()
	->setSubject("FOR 218 - Check List AVSST - $cliente_posto $posto_atividade") 
		->setTo(array($post->emailuser => $post->usuario)) 
		->setFrom(array("$email" => "$usuario"))
	->setCc(array("marinalva.rosa@spsp.com.br" => "Marinalva Rosa"/*,
	"$emailgest" => "$nomegest"*/))
	->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
	->setBody($html_message, "text/html")
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 218 - Check List AVSST - $cliente_posto $posto_atividade.pdf", "application/pdf")); 
		if ($mailer->send($message)){
		
$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")or die ("Erro ao selecionar a base de dados.");
		
$a = mysql_query("INSERT INTO checklist2(cliente, ativ, dtadmissao, colabora, datain, observacao, usuario, emailuser, q01, q02, q03, q04, q05, q06, q07, q08, q09, q10, q11, q12, q13, q14, q15, q16, q17, q18) VALUES('$_POST[cliente]', '$_POST[ativ]', '$_POST[dtadmissao]', '$_POST[colabora]', '$_POST[datain]', '$_POST[observacao]', '$_POST[usuario]', '$_POST[emailuser]', '$_POST[q01]', '$_POST[q02]', '$_POST[q03]', '$_POST[q04]', '$_POST[q05]', '$_POST[q06]', '$_POST[q07]', '$_POST[q08]', '$_POST[q09]', '$_POST[q10]', '$_POST[q11]', '$_POST[q12]', '$_POST[q13]', '$_POST[q14]', '$_POST[q15]', '$_POST[q16]', '$_POST[q17]', '$_POST[q18]')");


echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('PDF Enviado com sucesso!');
		        window.location.href='../logado.php';

        </SCRIPT>");}
		
else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
		window.history.go(-1);
</SCRIPT>");}}}

?>
