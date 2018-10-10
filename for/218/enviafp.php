<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$cliente = $_POST['cliente'];
$ativ = $_POST['ativ']; 
$datain = $_POST['datain']; 
$dataout = $_POST['dataout']; 
$obs1=$_POST['obs1'];
$obs2=$_POST['obs2'];
$obs3=$_POST['obs3'];
$obs4=$_POST['obs4'];
$obs5=$_POST['obs5'];
$obs6=$_POST['obs6'];
$obs7=$_POST['obs7'];
$obs8=$_POST['obs8'];
$obs9=$_POST['obs9'];
$obs10=$_POST['obs10'];
$obs11=$_POST['obs11'];
$obs12=$_POST['obs12'];
$obs13=$_POST['obs13'];
$obs14=$_POST['obs14'];
$obs15=$_POST['obs15'];
$obs16=$_POST['obs16'];
$obs17=$_POST['obs17'];
$obs18=$_POST['obs18'];
$obs19=$_POST['obs19'];
$obs20=$_POST['obs20'];
$obs21=$_POST['obs21'];
$obs22=$_POST['obs22'];
$obs23=$_POST['obs23'];
$obs24=$_POST['obs24'];
$obs25=$_POST['obs25'];
$obs26=$_POST['obs26'];
$obs27=$_POST['obs27'];
$obs28=$_POST['obs28'];
$obs29=$_POST['obs29'];
$obs30=$_POST['obs30'];
$obs31=$_POST['obs31'];
$obs32=$_POST['obs32'];
$obs33=$_POST['obs33'];
$obs34=$_POST['obs34'];
$obs35=$_POST['obs35'];
$obs36=$_POST['obs36'];
$obs37=$_POST['obs37'];
$obs38=$_POST['obs38'];
$obs39=$_POST['obs39'];
$obs40=$_POST['obs40'];
$obs41=$_POST['obs41'];
$obs42=$_POST['obs42'];
$obs43=$_POST['obs43'];
$obs44=$_POST['obs44'];
$obs45=$_POST['obs45'];
$obs46=$_POST['obs46'];
$obs47=$_POST['obs47'];
$obs48=$_POST['obs48'];
$obs49=$_POST['obs49'];
$obs50=$_POST['obs50'];
$obs51=$_POST['obs51'];
$obs52=$_POST['obs52'];
$obs53=$_POST['obs53'];
$obs54=$_POST['obs54'];
$obs55=$_POST['obs55'];
$obs56=$_POST['obs56'];
$obs57=$_POST['obs57'];
$obs58=$_POST['obs58'];
$obs59=$_POST['obs59'];
$obs60=$_POST['obs60'];
$obs61=$_POST['obs61'];
$obs62=$_POST['obs62'];
$obs63=$_POST['obs63'];
$obs64=$_POST['obs64'];
$obs65=$_POST['obs65'];
$obs66=$_POST['obs66'];
$obs67=$_POST['obs67'];
$obs68=$_POST['obs68'];
$q01=$_POST['q01'];
$q02=$_POST['q02'];
$q03=$_POST['q03'];
$q04=$_POST['q04'];
$q05=$_POST['q05'];
$q06=$_POST['q06'];
$q07=$_POST['q07'];
$q08=$_POST['q08'];
$q09=$_POST['q09'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];

$q19=$_POST['q19'];
switch ($q19) {
case "conf": $q192 = "inconf"; break;
case "inconf": $q192 = "conf"; break;
case "na": $q192 = "na"; break;}

$q20=$_POST['q20'];
switch ($q20) {
case "conf": $q202 = "inconf"; break;
case "inconf": $q202 = "conf"; break;
case "na": $q202 = "na"; break;}

$q21=$_POST['q21'];
$q22=$_POST['q22'];
$q23=$_POST['q23'];
$q24=$_POST['q24'];
$q25=$_POST['q25'];
$q26=$_POST['q26'];
$q27=$_POST['q27'];
$q28=$_POST['q28'];
$q29=$_POST['q29'];
$q30=$_POST['q30'];
$q31=$_POST['q31'];
$q32=$_POST['q32'];
$q33=$_POST['q33'];
$q34=$_POST['q34'];
$q35=$_POST['q35'];
$q36=$_POST['q36'];
$q37=$_POST['q37'];
$q38=$_POST['q38'];
$q39=$_POST['q39'];
$q40=$_POST['q40'];
$q41=$_POST['q41'];
$q42=$_POST['q42'];
$q43=$_POST['q43'];
$q44=$_POST['q44'];
$q45=$_POST['q45'];
$q46=$_POST['q46'];
$q47=$_POST['q47'];
$q48=$_POST['q48'];
$q49=$_POST['q49'];
$q50=$_POST['q50'];
$q51=$_POST['q51'];
$q52=$_POST['q52'];
$q53=$_POST['q53'];
$q54=$_POST['q54'];
$q55=$_POST['q55'];
$q56=$_POST['q56'];
$q57=$_POST['q57'];
$q58=$_POST['q58'];
$q59=$_POST['q59'];
$q60=$_POST['q60'];
$q61=$_POST['q61'];
$q62=$_POST['q62'];
$q63=$_POST['q63'];
$q64=$_POST['q64'];
$q65=$_POST['q65'];
$q66=$_POST['q66'];
$q67=$_POST['q67'];
$q68=$_POST['q68'];

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
		$transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);
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
		
/*$sql = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")or die ("Erro ao selecionar a base de dados.");

$a = mysql_query("INSERT INTO checklist(cliente, ativ, datain, dataout, obs1, obs2, obs3, obs4, obs5, obs6, obs7, obs8, obs9, obs10, obs11, obs12, obs13, obs14, obs15, obs16, obs17, obs18, obs19, obs20, obs21, obs22, obs23, obs24, obs25, obs26, obs27, obs28, obs29, obs30, obs31, obs32, obs33, obs34, obs35, obs36, obs37, obs38, obs39, obs40, obs41, obs42, obs43, obs44, obs45, obs46, obs47, obs48, obs49, obs50, obs51, obs52, obs53, obs54, obs55, obs56, obs57, obs58, obs59, obs60, obs61, obs62, obs63, obs64, obs65, obs66, obs67, obs68, q01, q02, q03, q04, q05, q06, q07, q08, q09, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, q41, q42, q43, q44, q45, q46, q47, q48, q49, q50, q51, q52, q53, q54, q55, q56, q57, q58, q59, q60, q61, q62, q63, q64, q65, q66, q67, q68) VALUES('$_POST[cliente]', '$_POST[ativ]', '$_POST[datain]', '$dataout', '$_POST[obs1]', '$_POST[obs2]', '$_POST[obs3]', '$_POST[obs4]', '$_POST[obs5]', '$_POST[obs6]', '$_POST[obs7]', '$_POST[obs8]', '$_POST[obs9]', '$_POST[obs10]', '$_POST[obs11]', '$_POST[obs12]', '$_POST[obs13]', '$_POST[obs14]', '$_POST[obs15]', '$_POST[obs16]', '$_POST[obs17]', '$_POST[obs18]', '$_POST[obs19]', '$_POST[obs20]', '$_POST[obs21]', '$_POST[obs22]', '$_POST[obs23]', '$_POST[obs24]', '$_POST[obs25]', '$_POST[obs26]', '$_POST[obs27]', '$_POST[obs28]', '$_POST[obs29]', '$_POST[obs30]', '$_POST[obs31]', '$_POST[obs32]', '$_POST[obs33]', '$_POST[obs34]', '$_POST[obs35]', '$_POST[obs36]', '$_POST[obs37]', '$_POST[obs38]', '$_POST[obs39]', '$_POST[obs40]', '$_POST[obs41]', '$_POST[obs42]', '$_POST[obs43]', '$_POST[obs44]', '$_POST[obs45]', '$_POST[obs46]', '$_POST[obs47]', '$_POST[obs48]', '$_POST[obs49]', '$_POST[obs50]', '$_POST[obs51]', '$_POST[obs52]', '$_POST[obs53]', '$_POST[obs54]', '$_POST[obs55]', '$_POST[obs56]', '$_POST[obs57]', '$_POST[obs58]', '$_POST[obs59]', '$_POST[obs60]', '$_POST[obs61]', '$_POST[obs62]', '$_POST[obs63]', '$_POST[obs64]', '$_POST[obs65]', '$_POST[obs66]', '$_POST[obs67]', '$_POST[obs68]', '$_POST[q01]', '$_POST[q02]', '$_POST[q03]', '$_POST[q04]', '$_POST[q05]', '$_POST[q06]', '$_POST[q07]', '$_POST[q08]', '$_POST[q09]', '$_POST[q10]', '$_POST[q11]', '$_POST[q12]', '$_POST[q13]', '$_POST[q14]', '$_POST[q15]', '$_POST[q16]', '$_POST[q17]', '$_POST[q18]', '$_POST[q19]', '$_POST[q20]', '$_POST[q21]', '$_POST[q22]', '$_POST[q23]', '$_POST[q24]', '$_POST[q25]', '$_POST[q26]', '$_POST[q27]', '$_POST[q28]', '$_POST[q29]', '$_POST[q30]', '$_POST[q31]', '$_POST[q32]', '$_POST[q33]', '$_POST[q34]', '$_POST[q35]', '$_POST[q36]', '$_POST[q37]', '$_POST[q38]', '$_POST[q39]', '$_POST[q40]', '$_POST[q41]', '$_POST[q42]', '$_POST[q43]', '$_POST[q44]', '$_POST[q45]', '$_POST[q46]', '$_POST[q47]', '$_POST[q48]', '$_POST[q49]', '$_POST[q50]', '$_POST[q51]', '$_POST[q52]', '$_POST[q53]', '$_POST[q54]', '$_POST[q55]', '$_POST[q56]', '$_POST[q57]', '$_POST[q58]', '$_POST[q59]', '$_POST[q60]', '$_POST[q61]', '$_POST[q62]', '$_POST[q63]', '$_POST[q64]', '$_POST[q65]', '$_POST[q66]', '$_POST[q67]', '$_POST[q68]')");

$sql="delete from checklist2 where id='$id2'";
$deleta=mysql_query($sql);*/

echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='lista.php';
        </SCRIPT>");}
		
else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do Check List!');
		window.history.go(-1);
</SCRIPT>");}}}

?>