<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../listas.php");
include("../privado.php");

$atividade = $_POST['atividade'];

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "com"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($atividade)){ header("Location: http://www.spsp.com.br/for/proibido.php"); }else{

$query = mysql_query('SHOW TABLE STATUS LIKE "for335"'); // select max(id) + 1 "Auto_increment" from for054fim
$data = mysql_fetch_array($query);
$idd = $data['Auto_increment'];
$ano_for = date('Y');

$cod = "$codfirma$idd/$ano_for-$coduser";

$a = mysql_query("INSERT INTO for335(email, nome, gestor, empresa, supervisor, regiao, tipoextra, razaosocial, codigocli, cnpj, tipofatur, endereco, outrofatur, atividade, dataalt, numcolab, datafim, escalaatual, horaatual, intervaloatual, postos, cobrancaradio, cobrancaval, sumularadio, vencitoradio, outrovencto, materiais, locequip, cobprodutradio, insalcheck, insalobs, insalperc, periccheck, pericobs, pericoperc, assidcheck, assidobs, assidperc, assidval, gratifcheck, gratifobs, gratifperc, gratifval, valtranspcheck, valtranspobs, convmedcheck, convmedobs, convodontocheck, convodontoobs, valimentacheck, valimentaobs, vrefeicaocheck, vrefeicaoobs, observacao, solcliente)VALUES('$email', '$usuario', '$_POST[gestor]', '$_POST[empresa]', '$_POST[supervisor]', '$_POST[regiao]', '$_POST[tipoextra]', '$_POST[razaosocial]', '$_POST[codigocli]', '$_POST[cnpj]', '$_POST[tipofatur]', '$_POST[endereco]', '$_POST[outrofatur]', '$_POST[atividade]', '$_POST[dataalt]', '$_POST[numcolab]', '$_POST[datafim]', '$_POST[escalaatual]', '$_POST[horaatual]', '$_POST[intervaloatual]', '$_POST[postos]', '$_POST[cobrancaradio]', '$_POST[cobrancaval]', '$_POST[sumularadio]', '$_POST[vencitoradio]', '$_POST[outrovencto]', '$_POST[materiais]', '$_POST[locequip]', '$_POST[cobprodutradio]', '$_POST[insalcheck]', '$_POST[insalobs]', '$_POST[insalperc]', '$_POST[periccheck]', '$_POST[pericobs]', '$_POST[pericoperc]', '$_POST[assidcheck]', '$_POST[assidobs]', '$_POST[assidperc]', '$_POST[assidval]', '$_POST[gratifcheck]', '$_POST[gratifobs]', '$_POST[gratifperc]', '$_POST[gratifval]', '$_POST[valtranspcheck]', '$_POST[valtranspobs]', '$_POST[convmedcheck]', '$_POST[convmedobs]', '$_POST[convodontocheck]', '$_POST[convodontoobs]', '$_POST[valimentacheck]', '$_POST[valimentaobs]', '$_POST[vrefeicaocheck]', '$_POST[vrefeicaoobs]', '$_POST[observacao]', '$_POST[solcliente]')")or die(mysql_error());
        

if ($a){


if (!empty($_POST)) {
    $success = $error = false;
    $post = new stdClass;

    foreach ($_POST as $key => $val)
        $post->$key = trim(strip_tags($_POST[$key]));

    if (empty($post->razaosocial) OR empty($post->regiao) OR empty($post->atividade))
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

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$gestor'");
while ($dados = mysql_fetch_array($consulta))
$emailgestor=$dados['mail'];

$consulta=mysql_query("SELECT mail FROM usuarios where nome='$supervisor'");
while ($dados = mysql_fetch_array($consulta))
$emailsup=$dados['mail'];

        $transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);

        $mailer = new Swift_Mailer($transport);
        $message = Swift_Message::newInstance()
    ->setSubject("FOR 335 - $razaosocial - $atividade")
    ->setTo(array("$email" => "$usuario"))
    ->setFrom(array("$email" => "$usuario"))
  ->setCc(array(
    /**/"daniel.garcia@spsp.com.br" => "Daniel Garcia",
    "rodolfo.martini@spsp.com.br" => "Rodolfo Martini",
    "vanessa.lima@spsp.com.br" => "Vanessa Lima",
    "daniel.barros@spsp.com.br" => "Daniel Barros",
	"dayse.rocha@spsp.com.br" => "Dayse Rocha",
    "marinalva.rosa@spsp.com.br" => "Marinalva Rosa",
    "ana.pereira@spsp.com.br" => "Ana Pereira",
    "jacqueline.araujo@spsp.com.br" => "Jacqueline Araujo",
	"camila.sotelo@spsp.com.br" => "Camila Sotelo", 
    "claudia.franzen@spsp.com.br" => "Claudia Franzen",  
    "mariana.stefanini@spsp.com.br" => "Mariana Stefanini",
    "murilo.martins@spsp.com.br" => "Murilo Martins",
	"rodrigo.martins@spsp.com.br" => "Rodrigo Martins",
	"gervan.matos@spsp.com.br" => "Gervan Matos",
	"priscila.almeida@spsp.com.br" => "Priscila Almeida",
	"mh.peraccini@spsp.com.br" => "Maria Helena Peraccini",
	"patricia.magdaleno@spsp.com.br" => "Patrícia Magdaleno",
	"deise.lourenco@spsp.com.br" => "Deise Lourenco",
	"fabiana.tomasela@spsp.com.br" => "Fabiana Tomasela",
	"regina.gomes@spsp.com.br" => "Regina Gomes",
	"mariana.batista@spsp.com.br" => "Mariana Batista",
	"fernanda.silva@spsp.com.br" => "Fernanda Silva",
	"gilcelia.nascimento@spsp.com.br" => "Gilcelia Nascimento",
    "cristiane.ribeiro@spsp.com.br" => "Cristiane Ribeiro",
    "sm.cirino@gmail.com" => "Saulo Cirino",
    "$email2" => "$nome2",
    "$email3" => "$nome3",
    "$email4" => "$nome4",
	"$email5" => "$nome5",
	"$emailgestor" => "$gestor",
    "$emailsup" => "$supervisor"))
    ->setBcc(array("gustavo.guedes@spsp.com.br" => "Gustavo Guedes"))
    ->setBody($html_message, "text/html")
    ->attach(Swift_Attachment::newInstance($pdf_content, "FOR 335 - $razaosocial - $atividade.pdf", "application/pdf"));
    if ($mailer->send($message)){
					
    echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF enviado com sucesso!');window.location.href='../logado.php';</SCRIPT>";

		} else {echo "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Erro no envio do PDF!');
    window.history.go(-1);
	</SCRIPT>";};

} 
};} else {echo "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Erro no envio do PDF!');
    window.history.go(-1);
    </SCRIPT>";};
};
};

?>