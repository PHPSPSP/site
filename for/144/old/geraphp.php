<?php
header('Content-type: text/html; charset=UTF-8');
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
		};

		if ($cliente == 293)
			{$emailcliente="moradas.bosque.marilia@gmail.com"; $nomecliente="Eduardo Jurado";}
		else
			{$emailcliente="gustavo.guedes@spsp.com.br"; $nomecliente="Gustavo Guedes";};
		
		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);
		$message = Swift_Message::newInstance()
	->setSubject("FOR 144-$codfor - Check List Supervisão - $cliente_posto $ativ") 
		->setTo(array($post->emailuser => $post->usuario)) 
		->setFrom(array("$email" => "$usuario"))
	->setCc(array("marinalva.rosa@spsp.com.br" => "Marinalva Rosa", "dayse.rocha@spsp.com.br" => "Dayse Rocha",
	"$emailgest" => "$nomegest", "$emailcliente" => "$nomecliente" ))
	->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
	->setBody($html_message, "text/html")
	->attach(Swift_Attachment::newInstance($pdf_content, "FOR 144-$codfor - Check List Supervisão - $cliente_posto $ativ.pdf", "application/pdf")); 
		if ($mailer->send($message)){
		
$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")or die ("Erro ao selecionar a base de dados.");

$a = mysql_query("INSERT INTO checklist1(cliente, ativ, datain, dataout, observacao, q01, q02, q03, q04, q05, q06, q07, q08, q09, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, q41, q42, q43, q44, q45, q46, q47, q48, q49, q50, q51, q52, q53, q54, q55, q56, q57, q58, q59, q60, q61, q62, q63, q64, q65, q66, q67, q68, q69, q70, q71, q72, q73, q74, q75, q76, q77, q78, q79, q80, q81, q82, q83, q84, q85, q86, q87, q88, q89, q90, q91, q92, q93, q94, q95, q96, q97, q98, q99, q100, q101, q102, q103, q104, q105, q106, q107, q108, q109, q110, q111, q112, q113, q114, q115, q116, q117, q118, q119, q120, q121, q122, q123, q124, q125, q126, q127, q128, q129, q130, q131, q132, q133, q134, q135, q136, q137, q138, q139, q140, q141, q142, q143, q144) VALUES('$_POST[cliente]', '$_POST[ativ]', '$_POST[datain]', (NOW()), '$_POST[observacao]', '$_POST[q01]', '$_POST[q02]', '$_POST[q03]', '$_POST[q04]', '$_POST[q05]', '$_POST[q06]', '$_POST[q07]', '$_POST[q08]', '$_POST[q09]', '$_POST[q10]', '$_POST[q11]', '$_POST[q12]', '$_POST[q13]', '$_POST[q14]', '$_POST[q15]', '$_POST[q16]', '$_POST[q17]', '$_POST[q18]', '$_POST[q19]', '$_POST[q20]', '$_POST[q21]', '$_POST[q22]', '$_POST[q23]', '$_POST[q24]', '$_POST[q25]', '$_POST[q26]', '$_POST[q27]', '$_POST[q28]', '$_POST[q29]', '$_POST[q30]', '$_POST[q31]', '$_POST[q32]', '$_POST[q33]', '$_POST[q34]', '$_POST[q35]', '$_POST[q36]', '$_POST[q37]', '$_POST[q38]', '$_POST[q39]', '$_POST[q40]', '$_POST[q41]', '$_POST[q42]', '$_POST[q43]', '$_POST[q44]', '$_POST[q45]', '$_POST[q46]', '$_POST[q47]', '$_POST[q48]', '$_POST[q49]', '$_POST[q50]', '$_POST[q51]', '$_POST[q52]', '$_POST[q53]', '$_POST[q54]', '$_POST[q55]', '$_POST[q56]', '$_POST[q57]', '$_POST[q58]', '$_POST[q59]', '$_POST[q60]', '$_POST[q61]', '$_POST[q62]', '$_POST[q63]', '$_POST[q64]', '$_POST[q65]', '$_POST[q66]', '$_POST[q67]', '$_POST[q68]', '$_POST[q69]', '$_POST[q70]', '$_POST[q71]', '$_POST[q72]', '$_POST[q73]', '$_POST[q74]', '$_POST[q75]', '$_POST[q76]', '$_POST[q77]', '$_POST[q78]', '$_POST[q79]', '$_POST[q80]', '$_POST[q81]', '$_POST[q82]', '$_POST[q83]', '$_POST[q84]', '$_POST[q85]', '$_POST[q86]', '$_POST[q87]', '$_POST[q88]', '$_POST[q89]', '$_POST[q90]', '$_POST[q91]', '$_POST[q92]', '$_POST[q93]', '$_POST[q94]', '$_POST[q95]', '$_POST[q96]', '$_POST[q97]', '$_POST[q98]', '$_POST[q99]', '$_POST[q100]', '$_POST[q101]', '$_POST[q102]', '$_POST[q103]', '$_POST[q104]', '$_POST[q105]', '$_POST[q106]', '$_POST[q107]', '$_POST[q108]', '$_POST[q109]', '$_POST[q110]', '$_POST[q111]', '$_POST[q112]', '$_POST[q113]', '$_POST[q114]', '$_POST[q115]', '$_POST[q116]', '$_POST[q117]', '$_POST[q118]', '$_POST[q119]', '$_POST[q120]', '$_POST[q121]', '$_POST[q122]', '$_POST[q123]', '$_POST[q124]', '$_POST[q125]', '$_POST[q126]', '$_POST[q127]', '$_POST[q128]', '$_POST[q129]', '$_POST[q130]', '$_POST[q131]', '$_POST[q132]', '$_POST[q133]', '$_POST[q134]', '$_POST[q135]', '$_POST[q136]', '$_POST[q137]', '$_POST[q138]', '$_POST[q139]', '$_POST[q140]', '$_POST[q141]', '$_POST[q142]', '$_POST[q143]', '$_POST[q144]')");


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