<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");
include("../config.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  };

$usuario = $_SESSION['nome'];
$id = $_SESSION['id'];
$email = $_SESSION['mail'];
$horac = date('H:i:s');

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{}

extract($_POST, EXTR_OVERWRITE);

if (!empty($_POST)) {

    $success = $error = false;
    $post = new stdClass;

    foreach ($_POST as $key => $val)
        $post->$key = trim(strip_tags($_POST[$key]));


    if (empty($post->nomeposto))
        $error = true;

    else {

        ob_start();
        require_once("html.php");
        $html_message = ob_get_contents();
        ob_end_clean();

        require_once("../plugin_pdf/swift/swift_required.php");

/*      $consulta_ges=mysql_query("SELECT G.nome, G.mail FROM usuarios S, usuarios G WHERE S.id = '" . $id . "' AND G.id = S.gestor");
*/		

$nomeposto = $_POST['nomeposto'];
$tipo2 = $_POST['tipo2'];

		$consulta_ges = mysql_query("SELECT G.nome, G.mail FROM usuarios S, usuarios G WHERE S.id_hk = (IF((SELECT IF (P.AREASUPER1 <> 0, P.AREASUPER1, IF (P.AREASUPER2 <> 0, P.AREASUPER2, IF (P.AREASUPER3 <> 0, P.AREASUPER3, 0))) SUPERVISOR FROM sarposto P WHERE P.CODCLI = '" . $nomeposto . "' AND P.CODPOS = '" . $tipo2 . "') = 15, 87, (SELECT IF (P.AREASUPER1 <> 0, P.AREASUPER1, IF (P.AREASUPER2 <> 0, P.AREASUPER2, IF (P.AREASUPER3 <> 0, P.AREASUPER3, 0))) SUPERVISOR FROM sarposto P WHERE P.CODCLI = '" . $nomeposto . "' AND P.CODPOS = '" . $tipo2 . "'))) AND G.id = S.gestor") or die(mysql_error());
		
		$consulta_novo_sup = mysql_query("SELECT nome, mail FROM usuarios WHERE id_hk = (IF((SELECT IF (P.AREASUPER1 <> 0, P.AREASUPER1, IF (P.AREASUPER2 <> 0, P.AREASUPER2, IF (P.AREASUPER3 <> 0, P.AREASUPER3, 0))) SUPERVISOR FROM sarposto P WHERE P.CODCLI = '" . $nomeposto . "' AND P.CODPOS = '" . $tipo2 . "') = 15, 87, (SELECT IF (P.AREASUPER1 <> 0, P.AREASUPER1, IF (P.AREASUPER2 <> 0, P.AREASUPER2, IF (P.AREASUPER3 <> 0, P.AREASUPER3, 0))) SUPERVISOR FROM sarposto P WHERE P.CODCLI = '" . $nomeposto . "' AND P.CODPOS = '" . $tipo2 . "')))");
		
		$consulta_posto=mysql_query("SELECT NOMEPOS FROM sarposto WHERE CODPOS = '" . $tipo2 . "' AND CODCLI = '" . $nomeposto . "'");
		
		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $nomeposto . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];}
		
		while ($posto = mysql_fetch_array($consulta_posto)) {
            $posto_atividade = $posto['NOMEPOS'];}
		
		while ($sup = mysql_fetch_array($consulta_novo_sup)) {
            $emailsup = $sup['mail'];
            $nomesup2 = $sup['nome'];}
		
        while ($sup_ges = mysql_fetch_array($consulta_ges)) {
            $emailgest = $sup_ges['mail'];
            $nomegest = $sup_ges['nome'];}
		
		if ($id == 103 || $id == 106 || $id == 1 || $id == 125 || $id == 126 || $id == 160 || $id == 177 || $id == 178){$emailjac="gervan.matos@spsp.com.br"; $nomejac="Gervan Matos";}

		else {$emailjac =$_SESSION['mail']; $nomejac=$_SESSION['nome'];};

        $transport = Swift_SmtpTransport::newInstance($hostmail, $portmail)->setUsername($usermail)->setPassword($pwdmail);
 
        $mailer = new Swift_Mailer($transport);

		$cc = array(
		"marinalva.rosa@spsp.com.br" => "Marinalva Rosa",
        "$emailgest" => "$nomegest",
		"$emailsup" => "$nomesup2");
		
		if ($post->emailuser != $emailjac) {
			$cc[$emailjac] = $nomejac;
		}
					
        $message = Swift_Message::newInstance()
        ->setSubject("FOR 010 - $cliente_posto - $posto_atividade")
        ->setTo(array($post->emailuser => $post->usuario))
        ->setFrom(array("$email" => "$usuario (não responder)"))
        ->setCc($cc)
        ->setBcc(array("dayse.rocha@spsp.com.br" => "Dayse Rocha"))
        ->setBody($html_message, "text/html");

       if ($mailer->send($message)){

$data = date('d-m-Y');

$a = mysql_query("INSERT INTO visita(nomeposto, nomesup, tipo, data, horac, horas, rotina, postura, uniforme, ocorrencia, cartao, pastamanual, equipamento, cliente, epi, estoqueprod, outros, observacao)
VALUES('$cliente_posto', '$nomesup', '$posto_atividade', NOW(), '$horac', CURTIME(), '$rotina', '$postura', '$uniforme', '$ocorrencia', '$cartao', '$pastamanual', '$equipamento', '$cliente', '$epi', '$estoqueprod','$outros', '$observacao')");

      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PDF enviado com sucesso!');
        window.location.href='../logado.php';
        </SCRIPT>");}

        else{
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Erro no envio do PDF!');
        window.history.go(-1);
        </SCRIPT>");}}}

?>