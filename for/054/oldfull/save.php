<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../privado.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        Window.alert('Voce nao tem acesso a esse FOR!');
		Window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

include("listas.php");

$a = mysql_query("INSERT INTO for054(campo2, empresa, regiao, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, cei, campo13, campo14, campo15, campo16, campo17, campo18, campo19, outraatv, campo20, campo22, hora1, hora2, campo21, hora3, hora4, escatual, especif1, folgfix1, dias241, hora5, hora6, campo212, hora7, hora8, escatual2, especif2, folgfix2, dias242, hora9, hora10, campo213, hora11, hora12, escatual3, especif3, folgfix3, dias243, campo24, campo25, campo26, campo27, campo28, campo29, campo30, campo31, campo32, campo33, campo34, campo35, campo36, campo37, campo38, campo39, campo40, campo41, campo42, campo43, campo44, campo45, campo46, campo47, campo48, mensagem, cabecalho, fatura, locaequip, matconsumo, uniforme, locarma, adicrico, insalubri, periculosi, premassid, gratadic, tipogratific, vtransporte, pajudacusto, convmedico, convodonto, visaaliment, vpempresaprest, visarestaur, refpostotrab, nomeuser, obsesc, horas1, horas2, horas3, horas4, horas5, horas6, trabsab, trabsab2, trabsab3, txtsab, txtsab2, txtsab3, regcon, respleg, salario, salario1, salario22, salario2, salario33, salario3, art71, art71d, art71n, art71p2, art71dp2, art71np2, art71p3, art71dp3, art71np3, sumula, cobrasumula, usaepi, campol31, locaequipv, campom31, matconsv, gestor, obsepi, mensalvalor, taxaadesao) VALUES('$_POST[campo2]', '$_POST[empresa]', '$_POST[regiao]', '" . str_replace("'", "\'", $_POST[campo4]) . "', '$_POST[campo5]', '$_POST[campo6]', '$_POST[campo7]', '$_POST[campo8]', '$_POST[campo9]', '$_POST[campo10]', '$_POST[campo11]', '$_POST[campo12]', '$_POST[cei]', '$_POST[campo13]', '$_POST[campo14]', '$_POST[campo15]', '$_POST[campo16]', '$_POST[campo17]', '$_POST[campo18]', '$_POST[campo19]', '$_POST[outraatv]', '$_POST[campo20]', '$_POST[campo22]', '$_POST[hora1]', '$_POST[hora2]', '$_POST[campo21]', '$_POST[hora3]', '$_POST[hora4]', '$_POST[escatual]', '$_POST[especif1]', '$_POST[folgfix1]', '$_POST[dias241]', '$_POST[hora5]', '$_POST[hora6]', '$_POST[campo212]', '$_POST[hora7]', '$_POST[hora8]', '$_POST[escatual2]', '$_POST[especif2]', '$_POST[folgfix2]', '$_POST[dias242]', '$_POST[hora9]', '$_POST[hora10]', '$_POST[campo213]', '$_POST[hora11]', '$_POST[hora12]', '$_POST[escatual3]', '$_POST[especif3]', '$_POST[folgfix3]', '$_POST[dias243]', '$_POST[campo24]', '$_POST[campo25]', '$_POST[campo26]', '$_POST[campo27]', '$_POST[campo28]', '$_POST[campo29]', '$_POST[campo30]', '$_POST[campo31]', '$_POST[campo32]', '$_POST[campo33]', '$_POST[campo34]', '$_POST[campo35]', '$_POST[campo36]', '$_POST[campo37]', '$_POST[campo38]', '$_POST[campo39]', '$_POST[campo40]', '$_POST[campo41]', '$_POST[campo42]', '$_POST[campo43]', '$_POST[campo44]', '$_POST[campo45]', '$_POST[campo46]', '$_POST[campo47]', '$_POST[campo48]', '$_POST[mensagem]', '$_POST[cabecalho]', '$_POST[fatura]', '$_POST[locaequip]', '$_POST[matconsumo]', '$_POST[uniforme]', '$_POST[locarma]', '$_POST[adicrico]', '$_POST[insalubri]', '$_POST[periculosi]', '$_POST[premassid]', '$_POST[gratadic]', '$_POST[tipogratific]', '$_POST[vtransporte]', '$_POST[pajudacusto]', '$_POST[convmedico]', '$_POST[convodonto]', '$_POST[visaaliment]', '$_POST[vpempresaprest]', '$_POST[visarestaur]', '$_POST[refpostotrab]', '$_POST[nomeuser]', '$_POST[obsesc]', '$_POST[horas1]', '$_POST[horas2]', '$_POST[horas3]', '$_POST[horas4]', '$_POST[horas5]', '$_POST[horas6]', '$_POST[trabsab]', '$_POST[trabsab2]', '$_POST[trabsab3]', '$_POST[txtsab]', '$_POST[txtsab2]', '$_POST[txtsab3]', '$_POST[regcon]', '$_POST[respleg]', '$_POST[salario]', '$_POST[salario1]', '$_POST[salario22]', '$_POST[salario2]', '$_POST[salario33]', '$_POST[salario3]', '$_POST[art71]', '$_POST[art71d]', '$_POST[art71n]', '$_POST[art71p2]', '$_POST[art71dp2]', '$_POST[art71np2]', '$_POST[art71p3]', '$_POST[art71dp3]', '$_POST[art71np3]', '$_POST[sumula]', '$_POST[cobrasumula]', '$_POST[usaepi]', '$_POST[campol31]', '$_POST[locaequipv]', '$_POST[campom31]', '$_POST[matconsv]', '$_POST[gestor]', '$_POST[obsepi]', '$_POST[mensalvalor]', '$_POST[taxaadesao]')");

if($a){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('FOR 054 criado e salvo com sucesso!');
		window.location.href='FOR054.php';
        </SCRIPT>");
    exit;}else{
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel realizar a inclusao!');
		window.location.href='../logado.php';
        </SCRIPT>");}
?>