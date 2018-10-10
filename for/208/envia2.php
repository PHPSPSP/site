<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
include("../config.php");

if ($_SESSION['nome'] != "Cristiane Ribeiro" && $_SESSION['nome'] != "Camila Sotelo" && $_SESSION['tipo'] != "adm"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  

$id = $_POST['id'];
$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

$sql = "SELECT * FROM movimentacao WHERE id = ".$id;
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{}

if (!empty($_POST)) {

    $success = $error = false;
    $post = new stdClass;

    foreach ($_POST as $key => $val)
        $post->$key = trim(strip_tags($_POST[$key]));

    if (empty($linha['nomecol']) OR empty($linha['re']) OR empty($linha['empresa']))
        $error = true;

    else {

        ob_start();
        require_once("pdf2.php");
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

$consulta=mysql_query("SELECT mail FROM usuarios where nome='".$linha['novasup']."'"); 
while ($dados = mysql_fetch_array($consulta))
$emailnovasup=$dados['mail'];

        $message = Swift_Message::newInstance()
        ->setSubject("FOR 208 - ".utf8_encode($linha['nomecol']))
        ->setTo(array("fabiana.tomasela@spsp.com.br"	=> "Fabiana Tomasela"))
        ->setFrom(array("noreply@spsp.com.br" => "$usuario (não responder)"))
        ->setCc(array(
        "deise.lourenco@spsp.com.br"	=> "Deise Lourenço",
		"$condutorm"					=> "$condutorn",
        "$emailnovasup"					=> "$novasup"))
        ->setBody($html_message, "text/html")
        ->attach(Swift_Attachment::newInstance($pdf_content, "FOR 208 - ".utf8_encode($nomecol).".pdf", "application/pdf"));

		if ($mailer->send($message)){

		/*$hora5.=":00";*/
		
$sql = "UPDATE movimentacao SET 
status='".mysql_real_escape_string($_POST['status'])."',
movimentado='".mysql_real_escape_string($_POST['movimentado'])."',
datamovimentado='".mysql_real_escape_string($_POST['datamovimentado'])."'
WHERE id = ".(int)$_POST['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro na efetivação da movimentação!');
        window.history.go(-2);
        </SCRIPT>\");");
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Movimentação Efetivada com Sucesso!');
        window.history.go(-2);
        </SCRIPT>");
		
		
		};};};};

?>