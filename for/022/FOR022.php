<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Modelos de Apresentações da Empresa</h1>
            </header>
          </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-12 element-short-bottom text-left small-screen-center "  >
            
Apresentações Padrão:<br />        
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Completa.pdf">> Apresentação Completa SPSP</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Resumida.pdf">> Apresentação Resumida SPSP</a><br /><br />

Apresentações Específicas:<br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Limpeza.pdf">> Portaria e Limpeza</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Divisão Hospitalar.pdf">> Higiene Hospitalar</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Segurança Patrimonial.pdf">> Segurança Patrimonial</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Divisão Tecnológica.pdf">> Segurança Tecnológica</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Administração Condominial.pdf">> Administração Condominial</a><br />
<a href="baixar.php?arquivo=proposta/FOR 022 - Apresentação da Empresa - Trabalho Temporário.pdf">> Trabalho Temporário</a><br /><br />

Vídeos Institucionais e Técnicos:<br />

<a href="http://www.spsp.com.br/assets/movies/spsp_bastao_ronda.webm" target="_blank">> Bastão de Ronda Online - Active Guard</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_caddy_clean.webm" target="_blank">> Cady Clean - Equipamento de Limpeza</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_drone.webm" target="_blank">> Drone - Inspeção Perimetral</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_monitoramento_portaria.webm" target="_blank">> Monitoramento de Portaria 24h</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_portaria_distancia.webm" target="_blank">> Portaria à Distância - Virtual</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_qrcode.webm" target="_blank">> QR Code - Checklist Digital</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_institucional.webm" target="_blank">> SPSP - Vídeo Institucional</a><br />
<a href="http://www.spsp.com.br/assets/movies/spsp_institucional_hospitalar.webm" target="_blank">> SPSP - Vídeo Especialidade Hospitalar</a>
				</div>
            <div class="col-md-12 text-left small-screen-center"> <br />
              <? echo "$ver_for_22"; ?><br />
              <br />
            </div>
          </div>
      </div>
    </section>
  </article>
</div>
<? include("../roda.php"); ?>