
<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];


if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{

if (!empty($_POST)) {

    $success = $error = false;
    $post = new stdClass;

    foreach ($_POST as $key => $val)
        $post->$key = trim(strip_tags($_POST[$key]));

    if (empty($post->nomecol) OR empty($post->re) OR empty($post->empresa))
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

		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$novasup'"); 
while ($dados = mysql_fetch_array($consulta))
$emailnovasup=$dados['mail'];


        $message = Swift_Message::newInstance()
        ->setSubject("FOR 208 - ".utf8_encode($nomecol))
        ->setTo(array($post->emailuser => $post->usuario))
        ->setFrom(array("noreply@spsp.com.br" => "$usuario (não responder)"))
        ->setCc(array(
/*		"fabiana.tomasela@spsp.com.br"	=> "Fabiana Tomasela",
        "deise.lourenco@spsp.com.br"		=> "Deise Lourenço",
		"$condutorm"					=> "$condutorn",
        "$emailnovasup"					=> "$novasup",
		"camila.sotelo@spsp.com.br"		=> "Camila Sotelo",
		"cristiane.ribeiro@spsp.com.br"	=> "Cristiane Ribeiro",
		"jacqueline.araujo@spsp.com.br"	=> "Jacqueline Araujo",
        "tissiana.funai@spsp.com.br" => "Tissiana Funai"))*/
        ->setBcc(array("lucas.kuroda@spsp.com.br" => "Lucas Kuroda"))
        ->setBody($html_message, "text/html")
        ->attach(Swift_Attachment::newInstance($pdf_content, "FOR 208 - ".utf8_encode($nomecol).".pdf", "application/pdf"));

		if ($mailer->send($message)){
$data10 = $_POST['data10'];
		/*$hora5.=":00";*/

$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_DESC='".$escatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escatual = $dados1['R6_TURNO'];

$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_DESC='".$novaescala."'");
$dados2 = mysql_fetch_array($consulta2);
$novaescala = $dados2['R6_TURNO'];


		$a = mysql_query("INSERT INTO movimentacao(date, hora_cad, email, nome, nomecol, re, empresa, data10, atualsup, novasup, cliatual, clinovo, posto1, posto2, movimentacao, colsubs, recolsubs, outromotivo, novafunc, salario, funcsal, pedcliente, clisabe, subsposto, nomesubs, resubs, condutor, altbenef, escatual, novaescala, folgfix1, folgfix12, folgfix2, folgfix22, observ, examemudf, exameesp, nomeexameesp, vr, vrt, sal, salt, dt, dtt, ad, adt, ad2, ad2t, ad3, ad3t, ad4, ad4t, ad5, ad5t, ins, inst, pr, prt, gp, gpt, gs, gst, vt, vtt, cb, cbt, ot, ott, he, het, status, tipagem) VALUES (NOW(), NOW(), '$email', '$nome', '$nomecol', '$re', '$empresa', '$data10', '$atualsup', '$novasup', '$cliatual', '$clinovo', '$posto1', '$posto2', '$movimentacao', '$colsubs', '$recolsubs', '$outromotivo', '$novafunc', '$salario', '$funcsal', '$pedcliente', '$clisabe', '$subsposto', '$nomesubs', '$resubs', '$condutor', '$altbenef', '$escatual', '$novaescala', '$folgfix1', '$folgfix12', '$folgfix2', '$folgfix22', '$observ', '$examemudf', '$exameesp', '$nomeexameesp', '$vr', '$vrt', '$sal', '$salt', '$dt', '$dtt', '$ad', '$adt', '$ad2', '$adt2', '$ad3', '$adt3', '$ad4', '$adt4', '$ad5', '$adt5', '$in', '$int', '$pr', '$prt', '$gp', '$gpt', '$gs', '$gst', '$vt', '$vtt', '$cb', '$cbt', '$ot', '$ott', '$he', '$het', 'Pendente', '$tipagem')") or die(mysql_error());


		if ($a)
		{
			
			$rgcolab = $_POST['rgcolab'];
      /**/echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF enviado com sucesso!');
        decisao = confirm('Deseja gerar o FOR 025 - Comunicado de Transferencia e Alteracao de Escala? (caso OK, o FOR 025 e enviado para seu email onde deve ser impresso para entao coletar a assinatura do colaborador envolvido na mudanca)');
        if (decisao){location.href='../025/FOR025.php?nomecol=".$nomecol."&re=".$re."&empresa=".$empresa."&data10=".$data10."&clinovo=".$clinovo."&novaescala=".$novaescala."&folgfix2=".$folgfix2."&folgfix22=".$folgfix22."&posto2=".$posto2."&rgcolab=".$rgcolab."&work=true';}
        else {window.location.href='../logado.php';}
        </SCRIPT>");}

        else {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
        window.history.go(-1);
        </SCRIPT>");};};};};};};

?>