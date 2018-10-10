<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../listas.php");
include("../privado.php");

$campo19 = $_POST['campo19'];

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($campo19)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{

$query = mysql_query('SHOW TABLE STATUS LIKE "for054fim"');
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];
$ano_for = date('Y');

$cod = "$codfirma$idd/$ano_for-$coduser";
	
$a = mysql_query("INSERT INTO for054fim(campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, data2, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, emailuser, respleg, cod, salario, salario1, salario22, salario2, salario33, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3, sumula, cobrasumula, usaepi, campol31, locaequipv, campom31, matconsv, gestor, obsepi, mensalvalor, taxaadesao) VALUES('$_POST[campo2]', '$_POST[empresa]', '$_POST[regiao]', '" . str_replace("'", "\'", $_POST[campo4]) . "', '$_POST[campo5]', '$_POST[campo6]', '$_POST[campo7]', '$_POST[campo8]', '$_POST[campo9]', '$_POST[campo10]', '$_POST[campo11]', '$_POST[campo12]', '$_POST[cei]', '$_POST[campo13]', '$_POST[campo14]', '$_POST[campo15]', '$_POST[campo16]', '$_POST[campo17]', '$_POST[campo18]', '$_POST[campo19]', '$_POST[outraatv]', '$_POST[campo20]', '$_POST[campo22]', '$_POST[hora1]', '$_POST[hora2]', '$_POST[campo21]', '$_POST[hora3]', '$_POST[hora4]', '$_POST[escatual]', '$_POST[especif1]', '$_POST[folgfix1]', '$_POST[dias241]', '$_POST[hora5]', '$_POST[hora6]', '$_POST[campo212]', '$_POST[hora7]', '$_POST[hora8]', '$_POST[escatual2]', '$_POST[especif2]', '$_POST[folgfix2]', '$_POST[dias242]', '$_POST[hora9]', '$_POST[hora10]', '$_POST[campo213]', '$_POST[hora11]', '$_POST[hora12]', '$_POST[escatual3]', '$_POST[especif3]', '$_POST[folgfix3]', '$_POST[dias243]', '$_POST[campo24]', '$_POST[campo25]', '$_POST[campo26]', '$_POST[campo27]', '$_POST[campo28]', '$_POST[campo29]', '$_POST[campo30]', '$_POST[campo31]', '$_POST[campo32]', '$_POST[campo33]', '$_POST[campo34]', '$_POST[campo35]', '$_POST[campo36]', '$_POST[campo37]', '$_POST[campo38]', '$_POST[campo39]', '$_POST[campo40]', '$_POST[campo41]', '$_POST[campo42]', '$_POST[campo43]', '$_POST[campo44]', '$_POST[campo45]', '$_POST[campo46]', '$_POST[campo47]', '$_POST[campo48]', '$_POST[mensagem]', '$_POST[cabecalho]', '$_POST[fatura]', '$_POST[locaequip]', '$_POST[matconsumo]', '$_POST[uniforme]', '$_POST[locarma]', '$_POST[adicrico]', '$_POST[insalubri]', '$_POST[periculosi]', '$_POST[premassid]', '$_POST[gratadic]', '$_POST[tipogratific]', '$_POST[vtransporte]', '$_POST[pajudacusto]', '$_POST[convmedico]', '$_POST[convodonto]', '$_POST[visaaliment]', '$_POST[vpempresaprest]', '$_POST[visarestaur]', '$_POST[refpostotrab]', '$_POST[nomeuser]', (NOW()), '$_POST[obsesc]', '$_POST[horas1]', '$_POST[horas2]', '$_POST[horas3]', '$_POST[horas4]', '$_POST[horas5]', '$_POST[horas6]', '$_POST[trabsab]', '$_POST[trabsab2]', '$_POST[trabsab3]', '$_POST[txtsab]', '$_POST[txtsab2]', '$_POST[txtsab3]', '$_POST[regcon]', '$_POST[emailuser]', '$_POST[respleg]', '$cod', '$_POST[salario]', '$_POST[salario1]', '$_POST[salario22]', '$_POST[salario2]', '$_POST[salario33]', '$_POST[salario3]', '$_POST[art71]', '$_POST[art71d]', '$_POST[art71n]', '$_POST[art71p2]', '$_POST[art71dp2]', '$_POST[art71np2]', '$_POST[art71p3]', '$_POST[art71dp3]', '$_POST[art71np3]', '$_POST[sumula]', '$_POST[cobrasumula]', '$_POST[usaepi]', '$_POST[campol31]', '$_POST[locaequipv]', '$_POST[campom31]', '$_POST[matconsv]', '$_POST[gestor]', '$_POST[obsepi]', '$_POST[mensalvalor]', '$_POST[taxaadesao]')");


ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

if ($a){
	
if (!empty($_POST)) {
    $success = $error = false;
    $post = new stdClass;

    foreach ($_POST as $key => $val)
        $post->$key = trim(strip_tags($_POST[$key]));

    if (empty($post->campo48) OR empty($post->regiao) OR empty($post->campo2))
        $error = true;

    else {$dir = dirname(__FILE__);

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
    ->setSubject("FOR 054 - $campo4 - $campo192")
    ->setTo(array($post->emailuser => $post->usuario))
    ->setFrom(array("$email" => "$nome"))
  ->setCc(array(
    "vanessa.lima@spsp.com.br" => "Vanessa Lima",
    "silvia.fiamengui@spsp.com.br" => "Silvia Fiamengui"))
    ->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
    ->setBody($html_message, "text/html")
    ->attach(Swift_Attachment::newInstance($pdf_content, "FOR 054 - $campo4 - $campo192.pdf", "application/pdf"));
        if ($mailer->send($message)){
    echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF enviado com sucesso!');window.location.href='../logado.php';</SCRIPT>";
}
else{
      echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
        window.history.go(-1);
</SCRIPT>";};
};
};
};
};
};

?>