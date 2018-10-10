<?php
   if (!function_exists('getExcerpt')) {
       function getExcerpt($str, $startPos = 0, $maxLength = 500)
       {       if (strlen($str) > $maxLength) {
               $excerpt   = substr($str, $startPos, $maxLength - 3);
               $lastSpace = strrpos($excerpt, ' ');
               $excerpt   = substr($excerpt, 0, $lastSpace);
               $excerpt .= '...';
           } else { $excerpt = $str; } return strip_tags($excerpt); }}
   if (!function_exists('stepBy500')) {
       function stepBy500($n,$x=500) {
           return (ceil($n)%$x === 0) ? ceil($n) : round(($n+$x/2)/$x)*$x;
       }
   }
   $mysqli       = new mysqli('mysql05.spsp1.hospedagemdesites.ws', 'spsp14', 'S7s7master*10*', 'spsp14');
   $mysqli_hk    = new mysqli('mysql01.spsp1.hospedagemdesites.ws', 'spsp1', 'S7s7master*10*', 'spsp1');
   $query_hk     = $mysqli_hk->query("SELECT (SELECT COUNT(*) FROM sarclien WHERE DTENCERRA IS NULL) clientes, (SELECT COUNT(*) FROM sarvigil WHERE DTDEMISSAO IS NULL) colabs, (SELECT TIMESTAMPDIFF(YEAR, '1994-08-21', CURDATE())) idade");
   $query_hk_cid = $mysqli_hk->query("SELECT CI.NOMECID FROM sarclien CL, sfgrupo SF, sarcidad CI WHERE SF.CODCLI=CL.CODCLI AND CI.CODCID=SF.CODCID AND CL.DTENCERRA IS NULL GROUP BY CI.NOMECID ORDER BY CI.NOMECID");
   $info         = array();
   while ($result = $query_hk->fetch_assoc()) {
       $info['clientes'] = ceil($result['clientes'] / 10) * 10;
       $info['colabs']   = stepBy500($result['colabs']);
       $info['idade']    = $result['idade']; }
   $info['cidade'] = ceil($query_hk_cid->num_rows / 10) * 10;
?>
<!DOCTYPE html> 
<html lang="pt-BR">
   <head>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="assets/images/SPSP-favicon.png">
      <title>Grupo SPSP - Prestação de Serviços de Portaria, Limpeza e Vigilância Patrimonial.</title>
      <meta name="description" content="SPSP - Prestação de Serviços de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade."/>
      <meta name="keywords" content="trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa"/>
      <meta name="copyright" content="SPSP"/>
      <meta name="author" content="SPSP"/>
      <meta name="email" content="spsp@spsp.com.br"/>
      <meta name="Charset" content="UTF-8"/>
      <meta name="Distribution" content="Global"/>
      <meta name="Rating" content="General"/>
      <meta name="Robots" content="INDEX,FOLLOW"/>
      <meta name="Revisit-after" content="31 Days"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="yes" name="apple-mobile-web-app-capable">
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'/>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
            <script src="assets/js/packages.min.js"></script>
      <script src="assets/js/theme.min.js"></script>
      <script src="assets/js/map2.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
   </head>
   <body class="normal-header">
      <a href="http://200.183.153.86:4862/">
         <div class="dpcom slideright"/> </div>
      </a>
      <div id="content">
         <article>
            <div id="masthead" class="navbar navbar-static-top navbar-sticky underline text-lowercase swatch-white" role="banner">
               <div class="container">
                  <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a href="index.php" class="navbar-brand"> <img src="assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"> </a> </div>
                  <nav class="collapse navbar-collapse main-navbar" role="navigation">
                     <div class="menu-one-page-container">
                        <ul id="menu-one-page" class="nav navbar-nav navbar-right">
                           <li class="active"><a href="#home">Início</a> </li>
                           <li><a href="#about">Sobre a SPSP</a> </li>
                           <li><a href="#services">Serviços</a> </li>
                           <li><a href="#maps">Atuação</a> </li>
                           <li><a href="#midia">Mídia</a> </li>
                           <li><a href="#contact">Contato</a> </li>
                           <li class="nav-highlight"><a href="#" data-toggle="modal" data-target="#myModal">Área Restrita</a> </li>
                           <li class="nav-highlight" style="margin-left: 10px;"><a href="#" data-toggle="modal" data-target="#myModal13">Mural de Vagas</a> </li>
                           <li class="nav-highlight" style="margin-left: 10px;"><a href="https://spbrasilmatrizapp.com21.com.br" target="_blank">Condomínios 21</a> </li>

                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
            <section id="home" class="section swatch-gray">
               <div class="container-fullwidth">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                              
                           </ol>
                           <div class="carousel-inner" role="listbox">
                              
                              <div class="item active">
                                 <img src="assets/images/uploads/spsp-com-21.jpg" alt="SPSP - Curso de Zeladoria">
                                 <div class="carousel-caption">
                                    <p><a class="btn btn-lg btn-danger" target="_blank" href="https://spbrasilmatrizapp.com21.com.br/frontend/public/" role="button">ACESSE O SISTEMA AQUI</a> </p>
                                 </div>
                              </div>
                              <div class="item"> <img src="assets/images/uploads/spsp-slide-curso.jpg" alt="SPSP - Curso de Zeladoria"> </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-09.jpg" alt="SPSP Trabalhe Conosco"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">TRABALHE CONOSCO</font> </h1>
                                       <p>Portadores de Necessidades Especiais, a SPSP os convida para fazer parte do nosso time!</p>
                                       <p><a class="btn btn-lg btn-danger" href="http://200.183.153.86:4862/" role="button">CADASTRE SEU CURRÍCULO</a> </p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-02.jpg" alt="Grupo SPSP"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">GRUPO SPSP</font> </h1>
                                       <p>Uma empresa ética, jovem e moderna, colaboradores capacitados e motivados buscando padrões de excelência</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-03.jpg" alt="SPSP Serviços"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">SPSP SERVIÇOS</font> </h1>
                                       <p>Serviços certificados pelos órgãos ISO e OHSAS, realizados por colaboradores motivados e treinados</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-04.jpg" alt="SPSP Divisão Hospitalar"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">DIVISÃO HOSPITALAR</font> </h1>
                                       <p>Higiene hospitalar qualificada com técnicas específicas para oferecer tranquilidade aos seus pacientes</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-05.jpg" alt="SPSP Segurança Patrimonial"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">SEGURANÇA PATRIMONIAL</font> </h1>
                                       <p>Proteção patrimonial especializada com certificação CRS e colaboradores habilitados e treinados</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-06.jpg" alt="SPSP Tecnologia"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">DIVISÃO TECNOLÓGICA</font> </h1>
                                       <p>Equipamentos e sistemas modernos de monitoramento agregando tecnologia e segurança à sua empresa</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-07.jpg" alt="SPSP Trabalho Temporário"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">TRABALHO TEMPORÁRIO</font> </h1>
                                       <p>Soluções em terceirização de diversas funções para atuar como mão de obra temporária</p>
                                    </font>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="assets/images/uploads/spsp-slide-08.jpg" alt="SPSP Administração Condominial"> 
                                 <div class="carousel-caption" style="background-color: rgba(255, 255, 255, 0.7);">
                                    <font size="+2" color="#000">
                                       <h1><font color="#FF0000">ADMINISTRAÇÃO CONDOMINIAL</font> </h1>
                                       <p>Assessoria e suporte oferecendo comodidade econômica e administrativa ao condomínio</p>
                                    </font>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span aria-hidden="true"><img src="assets/images/rev_left.png"></span> <span class="sr-only">Anterior</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span aria-hidden="true"><img src="assets/images/rev_right.png"></span> <span class="sr-only">Próximo</span> </a> 
                     </div>
                  </div>
               </div>
      </div>
      </section> 
      <section id="about" class="section swatch-white">
      <div class="container">
      <div class="row">
      <div class="col-md-12 ">
      <header class="text-center element-normal-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <img class="element-normal-bottom" src="assets/images/SPSP-horizontal.png" style="width:100%; max-width:600px;"> <br>
      <p class="lead"> Fundada em 20 de agosto de 1994, atuante no mercado de prestação de serviços, a SPSP é uma das mais conceituadas empresas de prestação de serviços do país. Durante mais de duas décadas de trajetória modernizou processos, conquistou experiência e incorporou novas tecnologias, oferecendo aos seus clientes serviços qualificados e padronizados. A SPSP consolidou como uma das suas principais características, a estreita e transparente relação com seus parceiros. <br><br>Sua matriz está localizada em Marília, com filiais em Bauru, São José do Rio Preto, Araraquara, Limeira, Jundiaí, Ribeirão Preto e São José do Rio Pardo, com estrutura suficiente para atender todos os seus clientes. O Grupo SPSP é especializado em parcerias com condomínios, hospitais e indústrias, capacitando profissionais para as áreas de vigilância, portaria, limpeza, zeladoria e recepção, entre outras.<br><br>Sua estrutura é composta por um amplo quadro de Supervisores Operacionais e Gestores de Contratos que, preparados tecnicamente e dotados de equipamentos especializados para executar suas atividades, sustentam um relacionamento permanente com os colaboradores e parceiros garantindo a qualidade dos serviços. <br><br>
      <div class="row">
      <div class="col-md-12 ">
      <a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top col-md-3 col-sm-5 col-xs-12" data-toggle="modal" data-target="#myModal8">Saiba Mais<span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> 
      <div class="col-md-1 col-sm-2 col-xs-0"></div>
      <a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top col-md-4 col-sm-5 col-xs-12" data-toggle="modal" data-target="#myModal9">Diferenciais da SPSP<span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> 
      <div class="col-md-1 col-sm-3 col-xs-0"></div>
      <a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top col-md-3 col-sm-6 col-xs-12" data-toggle="modal" data-target="#myModal10">Timeline<span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> 
      </div>
      </div>
      </header>
      <header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> Certificados </h1>
      <br>
      <div class="row " data-os-animation="" data-os-animation-delay="">
      <div class="col-md-3 ">
      <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
      <a href="assets/images/uploads/spsp-Certificado-ISO9001.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp-iso9.png" alt="ISO 9001" class="normalwidth"> </a> <br>
      <h3> <font color="#333333">ISO 9001</font></h3>
      <p class="">Certificado de Gestão da Qualidade <br>Certificado desde 1999</p>
      </div>
      </div>
      <div class="col-md-3 ">
      <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
      <a href="assets/images/uploads/spsp-Certificado-ISO14001.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp-iso14.png" alt="ISO 14001" class="normalwidth"> </a> <br>
      <h3><font color="#333333">ISO 14001</font></h3>
      <p class="">Certificado de Gestão Ambiental <br>Certificado desde 2010</p>
      </div>
      </div>
      <div class="col-md-3 ">
      <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
      <a href="assets/images/uploads/spsp-Certificado-OHSAS18001.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp-ohsas18.png" alt="OHSAS 18001" class="normalwidth"> </a> <br>
      <h3><font color="#333333">OHSAS 18001</font></h3>
      <p class="">Certificado de Gestão de Saúde e Segurança no Trabalho <br>Certificado desde 2015</p>
      </div>
      </div>
      <div class="col-md-3 ">
      <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".9s">
      <a href="assets/images/uploads/spsp-Certificado-BRTUV.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp-crs.png" alt="CRS" class="normalwidth"> </a> <br>
      <h3><font color="#333333">CRS</font></h3>
      <p class="">Certificado de Regularidade em Segurança <br>Certificado desde 2006 </p>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section class="section swatch-gray">
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> <font color="#FF0000">Premissas</font> </h1>
      </header>
      <br>
      <div class="col-md-6 ">
      <div class="figure element-no-top element-tall-bottom os-animation text-center" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s"> <span class="figure-image"> <img src="assets/images/uploads/spsp-lateral.jpg" alt="SPSP Fachada"> </span> </div>
      </div>
      <div class="col-md-6 ">
      <ul class="features-list element-no-top element-no-bottom features-white" data-linecolor="" data-os-animation="none" data-os-animation-delay="0s">
      <li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
      <div class="features-list-icon"> <img src="assets/images/icons/target-512.png" alt="SPSP Missão" class=""> </div>
      <h3> Missão </h3>
      <p> Ser um parceiro estratégico, reconhecido por sua geração de valor para o cliente. </p>
      </li>
      <li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
      <div class="features-list-icon"> <img src="assets/images/icons/eye-512.png" alt="SPSP Visão" class=""> </div>
      <h3> Visão </h3>
      <p> Ser a melhor empresa de facilities do interior paulista, gerando parcerias duradouras através de relacionamento próximo, eficiente gestão de pessoas e inovação. </p>
      </li>
      <li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
      <div class="features-list-icon"> <img src="assets/images/icons/key-512.png" alt="SPSP Valores" class=""> </div>
      <h3> Valores </h3>
      <p>Atendimento e compromisso com cliente; <br>Espírito de trabalho em equipe; <br>Valorizar pessoas pelo desempenho; <br>Gestão voltada para inovação e melhoria contínua.</p>
      </li>
      </ul>
      <div class="row">
      <div class="col-md-12"> <a href="assets/images/uploads/spsp-premissas.jpg" class="btn btn-default btn-lg btn-icon-right element-short-top os-animation magnific col-md-4 col-sm-6 col-xs-12" target="_self" data-os-animation="fadeIn" data-os-animation-delay="0s"><font size="-2"> Missão, Visão, Valores</font><span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> <a href="assets/images/uploads/spsp-codigo.pdf" class="btn btn-default btn-lg btn-icon-right element-short-top col-md-4 col-sm-6 col-xs-12" target="_blank"><font size="-2"> Código de Conduta </font><span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> <a href="assets/images/uploads/spsp-politica.jpg" class="btn btn-default btn-lg btn-icon-right element-short-top os-animation magnific col-md-4 col-sm-6 col-xs-12" target="_self" data-os-animation="fadeIn" data-os-animation-delay="0s"><font size="-2"> Política Integrada </font><span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> </div>
      </div>
      </div>
      </div>
      </div>
      <br>
      </div>
      </section>
      <section class="section swatch-white">
      <div class="container">
      <div class="row">
      <div class="col-md-12 text-center">
      <header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> <font color="#FF0000">Números da SPSP</font> </h1>
      <br>
      </header>
      </div>
      <div class="col-md-3 text-center element-normal-top element-normal-bottom">
      <div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="<?php echo $info['clientes']; ?>" data-format="(.ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s"> <span class="value odometer-counter-old super bold"><?php echo '+ ' . $info['clientes']; ?></span> </div>
      <header class="element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h3 class="normal bold no-bordered-header bordered-normal"> CLIENTES PARCEIROS </h3>
      </header>
      </div>
      <div class="col-md-3 text-center element-normal-top element-normal-bottom">
      <div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="<?php echo $info['cidade']; ?>" data-format="(.ddd)" data-os-animation="fadeIn" data-os-animation-delay=".3s"> <span class="value odometer-counter-old super bold"><?php echo '+ ' . $info['cidade']; ?></span> </div>
      <header class="element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
      <h3 class="normal bold no-bordered-header bordered-normal"> CIDADES ATENDIDAS </h3>
      </header>
      </div>
      <div class="col-md-3 text-center element-normal-top element-normal-bottom">
      <div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="<?php echo '+' . $info['colabs']; ?>" data-format="(.ddd)" data-os-animation="fadeIn" data-os-animation-delay=".6s"> <span class="value odometer-counter-old super bold"><?php echo '+ ' . number_format($info['colabs'], 0 , '', '.'); ?></span> </div>
      <header class="element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay=".6s">
      <h3 class="normal bold no-bordered-header bordered-normal"> COLABORADORES MOTIVADOS </h3>
      </header>
      </div>
      <div class="col-md-3 text-center element-normal-top element-normal-bottom">
      <div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="<?php echo $info['idade']; ?>" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay=".9s"> <span class="value odometer-counter super bold"><?php echo $info['idade']; ?></span> </div>
      <header class="element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay=".9s">
      <h3 class="normal bold no-bordered-header bordered-normal"> ANOS DE HISTÓRIA </h3>
      </header>
      </div>
      </div>
      </div>
      </section>
      <section id="services" class="section swatch-gray">
      <div class="container">
      <div class="row">
      <div class="col-md-12 ">
      <header class="text-center element-tall-top element-medium-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> Segmentos SPSP </h1>
      <br>
      <p class="lead">O Grupo SPSP oferece serviços de portaria e limpeza, vigilância patrimonial, higienização hospitalar, segurança eletrônica avançada, administração condominial e trabalho temporário. Conheça abaixo os segmentos.</p>
      <img src="assets/images/uploads/spsp-segmentos.png" width="990"> 
      </header>
      <div class="portfolio-container element-short-top element-no-bottom">
      <div class="container">
      <div class="row">
      <div class="col-md-12 text-center">
      <div class="element-normal-top element-normal-bottom os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
      <div class="tabbable ''">
      <ul class="nav nav-tabs" data-tabs="tabs" style="alignment-adjust:central">
      <li class="active col-md-4 col-sm-6 col-xs-12"><a href="#div1" data-toggle="tab"> SPSP Serviços </a> </li>
      <li class="col-md-4 col-sm-6 col-xs-12"><a href="#div2" data-toggle="tab"> Divisão Hospitalar </a> </li>
      <li class="col-md-4 col-sm-6 col-xs-12"><a href="#div3" data-toggle="tab"> SPSP Segurança Patrimonial </a> </li>
      <li class="col-md-4 col-sm-6 col-xs-12"><a href="#div4" data-toggle="tab"> SPTech Tecnologia</a> </li>
      <li class="col-md-4 col-sm-6 col-xs-12"><a href="#div5" data-toggle="tab"> SPSP Administração Condominial </a> </li>
      <li class="col-md-4 col-sm-6 col-xs-12"><a href="#div6" data-toggle="tab"> Locatempo </a> </li>
      </ul>
      <div class="tab-content">
      <div class="tab-pane fade in active" id="div1">
      <div class="element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-portaria.jpg" alt="SPSP - Portaria e Limpeza"> </div>
      <div class="col-md-6 text-justify">
      <p> Colaboradores motivados e altamente capacitados utilizam ferramentas, técnicas e os procedimentos mais modernos do mercado. Os Certificados ISO 9001, ISO 14001 e OHSAS 18001, são frutos da nossa determinação em prestar serviços de qualidade e seriedade aos clientes parceiros. Os procedimentos de limpeza vão além da utilização de água, sabão e produtos químicos. Incluem tecnologia, gestão e treinamentos constantes, tornando nossos colaboradores em verdadeiros profissionais de limpeza. Para os processos de portaria a SPSP dispõe de tecnologia de ponta e estrutura sólida. Supervisores em tempo integral aplicam técnicas de atendimento, abordagem, controles de acesso, uso de computadores e equipamentos.</p>
      <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal2">Checklist Online QR Code<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a><br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal12">Caddy Clean<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a>
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      <div class="tab-pane fade" id="div2">
      <div class=" element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-hospitalar.jpg" alt="SPSP - Divisão Hospitalar"> </div>
      <div class="col-md-6 text-justify">
      <p>A higiene hospitalar é uma atividade absolutamente exigente e a contratação de uma empresa terceirizadora neste ramo exige uma qualificação indiscutível e comprovada da empresa-parceira a ser contratada. A SPSP se encaixa perfeitamente nesses padrões. Possuímos especialização na higienização, desinfecção, limpeza e manutenção de ambientes hospitalares dentro dos parâmetros estabelecidos pela ANVISA e a NR 32. Nossos supervisores com formação em enfermagem passam por atualizações, cursos, palestras, pesquisa de novos produtos e seminários ministrados por especialistas do setor para oferecer treinamentos práticos e teóricos aos colaboradores operacionais, elevando a credibilidade e reconhecimento da SPSP. </p>
      <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal3">SPSP Hospitalar<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a> 
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      <div class="tab-pane fade" id="div3">
      <div class=" element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-seguranca.jpg" alt="SPSP - Segurança Patrimonial"> </div>
      <div class="col-md-6 text-justify">
      <p>A SPSP Segurança Patrimonial oferece serviços de vigilância armada e desarmada sendo autorizada e certificada por todos os órgãos federais e estaduais responsáveis pela fiscalização dessas atividades. Pela excelência na execução padronizada conquistou desde muitos anos o CRS — Certificado de Regularidade em Segurança Patrimonial, por si só um documento qualificador da empresa. Toda implantação dos serviços é precedida de um diagnóstico de vulnerabilidade realizado por profissionais de segurança patrimonial, com o objetivo de definir o quadro ideal de equipamentos de segurança, suporte técnico eletrônico e numerário de vigilantes, devidamente capacitados, treinados, regularizados pela CNV e são analisados desde o processo de R&S e acompanhados durante todo o período que o colaborador permanecer na empresa. </p>
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      <div class="tab-pane fade" id="div4">
      <div class=" element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-tecnologia.jpg" alt="SPSP - Divisão Tecnológica"> </div>
      <div class="col-md-6 text-justify">
      <p> A SPTech oferece ao mercado as melhores soluções tecnológicas avançadas e inteligentes, que agregam ao colaborador e ao cliente mecanismos robustos e proativos para que as tarefas sejam realizadas com eficácia e total controle. Possuímos uma Central de Controle e Monitoramento 24h - CCM, equipada com Sistemas Online de última geração como Bastão de Ronda, Monitoramento de Portaria 24 horas, Alarmes Wireless, Projeto Segurança Integrada, Rastreamento de Frota e Botão de Pânico Vigia Alerta, para acompanhar os eventos nos locais de atuação, possibilitando o gerenciamento e tomada de decisões em tempo oportuno pelos vigilantes monitores, que são colaboradores treinados especificamente para essa atividade. <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal4">Bastão de Ronda Online<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a> <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal11">Inspeção Perimetral - Drone<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a> <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal5">Sistema de Alarme Wireless<span><i class="fa fa-print" data-animation="fadeIn"></i></span></a> <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal6">Monitoramento de Portaria 24 horas<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a> <br><a href="#" class="btn btn-default btn-lg btn-icon-right element-short-top" data-toggle="modal" data-target="#myModal7">Portaria a Distância<span><i class="fa fa-file-movie-o" data-animation="fadeIn"></i></span></a></p>
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      <div class="tab-pane fade" id="div5">
      <div class=" element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-condominial.jpg" alt="SPSP - Administração Condominial"> </div>
      <div class="col-md-6 text-justify">
      <p> A SPSP Administração Condominial é a empresa que oferece suporte administrativo e técnico aos condomínios e residenciais com qualidade e transparência, tendo a satisfação comprovada nos mais de 40 condomínios em que atuamos. Nossa equipe operacional e supervisores de plantão 24h, oferecem serviços emergenciais com qualidade e rapidez como limpeza de caixas d’água, controle de extintores, manutenção de elevadores, seguro predial, entre outros. Já nossa equipe administrativa oferece suporte para emissão e recebimento de boletos, cheques, controles bancários, controle de pagamentos aos fornecedores, balancetes, assembleias, arquivamento de atas, regulamentos, convenções, criações de advertências, notificações, comunicados e convocações.</p>
      <p>Atendimento SPSP Administração Condominial:<br>Telefone Marília - (14) 3311-4000<br>Telefone Marília - (14) 3234-7484<br>E-mail - condominios@spsp.com.br<br>Solicitação de 2ª via de boletos: <a href="https://spbrasilmatrizapp.com21.com.br" target="_blank">COM21 - Autoatendimento SPBrasil</a></p>
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      <div class="tab-pane fade" id="div6">
      <div class=" element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">
      <div class="col-md-6 text-right"> <img src="assets/images/uploads/spsp-temporario.jpg" alt="SPSP - Trabalho Temporário"> </div>
      <div class="col-md-6 text-justify">
      <p>A Locatempo - Trabalho Temporário disponibiliza serviços de mão de obra em caráter temporário. Possuímos o certificado de autorização SRT - MTE, expedido pela Secretaria de Relações do Trabalho do Ministério do Trabalho e do Emprego para a prática da atividade, que pode ter duração máxima de nove meses sem vínculos administrativos com as empresas tomadoras, o que proporciona redução de custos e agilidade de seus processos de contratação. Oferecemos prestação de serviços para diversas áreas, como produção, portaria, vigia, limpeza, zeladoria, manutenção, jardinagem, recepção, operação de sistemas de telefonia, entre outros, para edifícios, condomínios, hospitais e indústrias, conforme o perfil solicitado pelo cliente. </p>
      </div>
      </div>
      <div style="clear:both"></div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <section id="maps" class="section swatch-white">
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> Área de Atuação </h1>
      </header>
      <div class="row ">
      <div class="container">
      <center>
      <a href="assets/images/uploads/spsp-mapa.jpg" class="figure-image magnific" data-links="" target="_self"><img class="normalwidth" src="assets/images/spsp-mapa.png" width="700px"> </a> 
      <p class="lead">O Grupo SPSP atua em mais de <?php echo $info[ 'clientes']; ?> parceiros clientes em quase <?php echo $info[ 'cidade']; ?> cidades do estado de São Paulo. São mais de <?php echo number_format($info[ 'colabs'], 0, '', '.'); ?> colaboradores motivados a realizar um trabalho de qualidade em indústrias, hospitais, condomínios, e outros diversos tipos de empresas. Conheça abaixo alguns dos nossos clientes parceiros.</p>
      </center>
      </div>
      <header class="text-center element-tall-top element-short-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
      <h1 class="bigger hairline bordered bordered-normal"> Parceiros Clientes </h1>
      </header>
      <div class="container">
      <div class="row">
      <div class="col-md-12 text-center btn-group element-short-bottom" data-toggle="buttons"> <label class="btn btn-primary col-md-2 spsp-filter-0 spsp-filter-btn active" data-id="0"> <input type="radio" name="filtros" id="filter0">Todos</label> <label class="btn btn-primary col-md-2 spsp-filter-1 spsp-filter-btn" data-id="1"> <input type="radio" name="filtros" id="filter1">Indústrias</label> <label class="btn btn-primary col-md-2 spsp-filter-2 spsp-filter-btn" data-id="2"> <input type="radio" name="filtros" id="filter2">Alimentos</label> <label class="btn btn-primary col-md-2 spsp-filter-3 spsp-filter-btn" data-id="3"> <input type="radio" name="filtros" id="filter3">Condomínios</label> <label class="btn btn-primary col-md-2 spsp-filter-4 spsp-filter-btn" data-id="4"> <input type="radio" name="filtros" id="filter4">Hospitais</label> <label class="btn btn-primary col-md-2 spsp-filter-5 spsp-filter-btn" data-id="5"> <input type="radio" name="filtros" id="filter5">Outros</label> </div>
      <div class="col-md-12 element-normal-bottom ">
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p32.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p32.png" alt="Zilor" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p25.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p25.png" alt="Ajinomoto" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-4 element-short-bottom"> <a href="assets/images/portfolio/p23.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p23.png" alt="Unimed" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p14.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p14.png" alt="Lwart" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p24.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p24.png" alt="Jacto" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p36.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p36.png" alt="Marcon" class="normalwidth"> </a> </div>
      <!--<div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-4 element-short-bottom"> <a href="assets/images/portfolio/p10.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p10.png" alt="Hospital de Base Rio Preto" class="normalwidth"> </a> </div>-->
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-3 element-short-bottom"> <a href="assets/images/portfolio/p21.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p21.png" alt="LagoSul" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p13.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p13.png" alt="TV Record" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p08.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p08.png" alt="Tilibra" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p17.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p17.png" alt="Marilan" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-4 element-short-bottom"> <a href="assets/images/portfolio/p27.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p27.png" alt="São Lucas" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p30.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p30.png" alt="USC" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p01.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p01.png" alt="Sasazaki" class="normalwidth"> </a> </div>
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p33.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p33.png" alt="Dori" class="normalwidth"> </a> </div>
      <!--<div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-4 element-short-bottom"> <a href="assets/images/portfolio/p28.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p28.png" alt="Hospital Regional Jundiaí" class="normalwidth"> </a> </div>-->
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p35.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p35.png" alt="Grupo ZDA" class="normalwidth"> </a> </div>
      <!--<div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p02.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p02.png" alt="Centro Flora" class="normalwidth"> </a> </div>-->
      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p03.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p03.png" alt="Mocdrol" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p04.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p04.png" alt="Ikeda" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p05.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p05.png" alt="Sicredi" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p06.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p06.png" alt="Unimar" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p09.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p09.png" alt="Marília Shopping" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p11.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p11.png" alt="Stanley" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p12.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p12.png" alt="PPA" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p15.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p15.png" alt="Carino" class="normalwidth"> </a> </div>

      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-2 element-short-bottom"> <a href="assets/images/portfolio/p19.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p19.png" alt="Nutrimental" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-1 element-short-bottom"> <a href="assets/images/portfolio/p20.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p20.png" alt="Gelita" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-3 element-short-bottom"> <a href="assets/images/portfolio/p26.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p26.png" alt="Portal da Serra" class="normalwidth"> </a> </div><div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p31.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p31.png" alt="Claro" class="normalwidth"> </a> </div>

      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p29.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p29.png" alt="NET" class="normalwidth"> </a> </div>

      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-5 element-short-bottom"> <a href="assets/images/portfolio/p34.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p34.png" alt="Bauru Shopping" class="normalwidth"> </a> </div>

      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-3 element-short-bottom"> <a href="assets/images/portfolio/p37.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p37.png" alt="Quinta do Golfe" class="normalwidth"> </a> </div>

      <div class="col-md-2 col-sm-4 col-xs-6 spsp-filter spsp-filter-4 element-short-bottom"> <a href="assets/images/portfolio/p39.png" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/portfolio/p39.png" alt="Sobam" class="normalwidth"> </a> </div>

  </div></div></div></div></div></div></div></section>

      <section id="midia" class="section swatch-gray">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <header class="text-center element-tall-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                     <h1 class="bigger hairline bordered bordered-normal"> SPSP na Mídia - Notícias </h1>
                  </header>

<div class="col-md-8 col-sm-6 col-xs-12 element-normal-top">

<div id="slider-flex47" class="flexslider os-animation text-center" data-os-animation="fadeInUp" data-os-animation-delay=".1s" data-flex-speed="7000" data-flex-animation="slide" data-flex-directions="show" data-flex-controls="show" data-flex-controlsalign="center">

   <ul class="slides">
      <?php $query = $mysqli->query("SELECT post.post_content, post.post_title, post.guid, term.name FROM wp_posts post, wp_terms term, wp_term_taxonomy tax, wp_term_relationships relation WHERE post.post_status='publish' AND relation.object_id=post.ID AND tax.term_taxonomy_id=relation.term_taxonomy_id AND tax.taxonomy='category' AND term.term_id=tax.term_id GROUP BY post.post_title ORDER BY post.post_date  DESC LIMIT 4");
         while ($result = $query->fetch_assoc()) { ?>
      <li><blockquote><p><font color="#FF0000"><strong>
      <?php echo mb_strtoupper($result['post_title'], 'UTF-8'); ?>
      </strong></font><br>
      <?php echo getExcerpt($result[ 'post_content']); ?>
      </p><footer><a style="color:#666" href="<?php echo $result['guid']; ?>">
      <?php echo $result[ 'name']; ?>
      </a></footer></blockquote></li>
      <?php } mysqli_close($con); ?>
   </ul>
</div>
<a href="http://www.spsp.com.br/boletim/" class="btn btn-default btn-lg btn-icon-right os-animation" target="_self" data-os-animation="fadeIn" data-os-animation-delay="0s" style="margin-top: 15px;">Leia Mais - Boletim Informativo<span> <i class="fa fa-file" data-animation="fadeIn"></i> </span> </a>

</div>

<div class="col-md-4 col-sm-6 col-xs-12 element-normal-top">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-page" data-href="https://www.facebook.com/spspterceirizacao/" data-tabs="timeline" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/spspterceirizacao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/spspterceirizacao/">SPSP - Grupo Empresarial de Serviços</a></blockquote></div>

</div>

<div style="clear: both;"></div>

      <header class="text-center element-tall-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"> <h1 class="bigger hairline bordered bordered-normal"> Vídeo Institucional SPSP </h1> </header> <div class="col-md-12 text-center element-short-top element-tall-bottom os-animation">
      <video id="video" height="auto" width="auto" align="center" controls style="max-width: 100%;">
      <source src="assets/movies/spsp_institucional.webm" type="video/webm">
      <source src="assets/movies/spsp_institucional.mp4" type="video/mp4">
      <source src="assets/movies/spsp_institucional.flv" type="video/flv">
      <object>
      <param name="movie" value="assets/movies/spsp_institucional.swf" />
      <embed src="assets/movies/spsp_institucional.swf"></embed>
      </object>
      Seu navegador não suporta HTML5
      </video>
      </div></div></div></div></section>

      <section id="contact" class="section swatch-white"> <div class="container"> <div class="row"> <div class="col-md-12"> <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"> <h1 class="super hairline bordered bordered-normal"> Contato </h1> <br><p class="lead"> O Grupo SPSP está presente em todo o estado de São Paulo, com sua matriz em Marília e filiais em Bauru, Limeira, Jundiaí, Sâo José do Rio Pardo, São José do Rio Preto, Araraquara e Ribeirão Preto. Conheça abaixo o mapa de localização de cada escritório. </p></header> </div></div></div></section> <section class="section swatch-white"> <div class="container-fullwidth"> <div class="row"> <div class="col-md-12 text-center" style="background-color: rgb(255, 113, 116);"> <div class="col-md-1"></div>
      <input type="button" id="mapa7" value="Araraquara" class="btn btn-primary col-md-1 spsp-map-7 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-21.7800331,-48.1770911)); map.setZoom(15);">
      <input type="button" id="mapa2" value="Bauru" class="btn btn-primary col-md-1 spsp-map-2 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-22.3492363, -49.050264)); map.setZoom(15);">
      <input type="button" id="mapa4" value="Jundiaí" class="btn btn-primary col-md-1 spsp-map-4 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-23.1914165, -46.8927561)); map.setZoom(15);">
      <input type="button" id="mapa3" value="Limeira" class="btn btn-primary col-md-1 spsp-map-3 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-22.562053, -47.411036)); map.setZoom(15);">
      <input type="button" id="mapa1" value="Marília" class="btn btn-primary col-md-1 spsp-map-1 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-22.231271, -49.921526)); map.setZoom(15);">
      <input type="button" id="mapa8" value="Ribeirão Preto" class="btn btn-primary col-md-1 spsp-map-8 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-21.1886835,-47.8134288)); map.setZoom(15);">
      <input type="button" id="mapa5" value="Rio Pardo" class="btn btn-primary col-md-1 spsp-map-5 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-21.6025224, -46.8923012)); map.setZoom(15);">
      <input type="button" id="mapa6" value="Rio Preto" class="btn btn-primary col-md-1 spsp-map-6 spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-20.831904,-49.4026833)); map.setZoom(15);">
      <input type="button" id="mapa" value="Todos" class="btn btn-primary col-md-2 spsp-map spsp-map-btn" onclick="map.setCenter(new google.maps.LatLng(-21.7800331,-48.1770911)); map.setZoom(7);">
      <div class="col-md-1"></div></div></div><div id="mapspsp" style="width: 100%; height: 400px;"></div></div></section> <section class="section swatch-white"> <div class="container"> <div class="row"> <div class="col-md-12"> <header class="text-center element-short-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"> <h1 class="bigger hairline bordered bordered-normal"> Fale Conosco </h1> </header> </div></div><div class="row element-short-top"> <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s"> <div class=" element-no-top element-short-bottom" data-os-animation="none" data-os-animation-delay="0s"> <p class="lead"> Entre em contato conosco, teremos o maior prazer em ouvir o que você tem a dizer! </p></div><ul class="fa-ul lead element-no-top element-medium-bottom" data-os-animation="none" data-os-animation-delay="0s" style="font-size:16px; line-height:inherit"> <li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> MARÍLIA - R. Carlos Ribeiro de Assis, 10 - Fragata</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (14) 3311.4000 - spsp@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> ARARAQUARA - Av. Professor Augusto Cezar, 810 – Centro</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (16) 3357-0495 - araraquara@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> BAURU - Av. Odilon Braga, 3-30 - Vila Aviação</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (14) 3234.7484 - bauru@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> JUNDIAÍ - R. Rodrigo Soares de Oliveira, 276 - Anhangabaú</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (11) 3378.8835 - jundiai@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> LIMEIRA - R. Independência, 47 – Vila São João</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (19) 3446.1000 - limeira@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> RIBEIRÃO PRETO - R. Altíno Arantes, 1108 - Jardim Sumaré</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (16) 3610-3906 - ribeiraopreto@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> SJ RIO PARDO - R. Silva Jardim, 268 - Centro</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (19) 3608.8600 - riopardo@spsp.com.br </li>
      <br><li> <i class="fa fa-li fa-home" style="color:#82c9ed;"></i> SJ RIO PRETO - Av. Francisco das Chagas Oliveira, 352 - Vila São Pedro</li><li> <i class="fa fa-li fa-phone" style="color:#82c9eb;"></i> (17) 3304.4312 - riopreto@spsp.com.br </li>
      </ul> </div><div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
      <?php
         if ($response != null && $response->success) {
           echo "Olá, " . $_POST["name"] . " (" . $_POST["email"] . "), obrigado por enviar seu formulário!";
         } else {
         ?>
      <form enctype="multipart/form-data" action="envia2.php" method="post" name="contactForm" id="contactForm">
      <div class="form-group form-icon-group"> <input class="form-control" id="name" name="name" placeholder="Seu nome *" type="text" required/> <i class="fa fa-user"></i> </div><div class="form-group form-icon-group"> <input class="form-control" id="email" name="email" placeholder="Seu e-mail *" type="email" required/> <i class="fa fa-envelope"></i> </div><div class="form-group form-icon-group"> <i class="fa fa-envelope"></i> <input class="form-control" placeholder="Sua região *" readonly> <select name="adress" class="form-control" id="adress" required> <option value="" selected>Selecione...</option> <option value="Araraquara">Araraquara</option> <option value="Bauru">Bauru</option> <option value="Jundiaí">Jundiaí</option> <option value="Limeira">Limeira</option> <option value="Marília">Marília</option> <option value="Ribeirao Preto">Ribeirão Preto</option> <option value="SJ Rio Pardo">SJ Rio Pardo</option> <option value="SJ Rio Preto">SJ Rio Preto</option> </select> </div><div class="form-group form-icon-group"> <textarea class="form-control" id="message" name="message" placeholder="Sua Mensagem" rows="10" required></textarea> <i class="fa fa-pencil"></i> </div><div class="form-group form-icon-group"><i class="fa fa-bullhorn"></i> <input class="form-control" placeholder="Como você conheceu a SPSP?" readonly> <div class="row"> <div class="col-md-12 btn-group" data-toggle="buttons"> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Facebook" value="Facebook" id="Facebook"> Facebook</label> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Google" value="Google" id="Google"/> Pesquisa Online</label> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Cartazes" value="Cartazes" id="Cartazes"> Cartazes</label> </div><div class="col-md-12 btn-group" data-toggle="buttons"> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="TV" value="TV" id="TV"/> TV</label> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Jornal" value="Jornal" id="Jornal"> Jornal</label> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Revista" value="Revista" id="Revista"/> Revista</label> </div><div class="col-md-12 btn-group" data-toggle="buttons"> <label class="btn btn-primary col-md-4"> <input type="checkbox" name="Indicacao" value="Indicação" id="Indicacao"> Indicação</label> </div></div></div><div class="row">
      <div class="col-md-12">
      <div class="g-recaptcha col-md-7" data-sitekey="6LeBXBUUAAAAAHly7BR7aMHZj4WPv1R89tmDcrO0"></div>
      <input type="submit" value="Enviar Mensagem" class="btn btn-primary col-md-5 element-short-top element-normal-bottom" name="submit" id="submit" onclick="return validar();">
      <br><br></div>
      </div></form>
      <?php } ?>
      </div><br></div></div></section>
      <section class="section swatch-red section-text-shadow section-inner-shadow"> <div class="container"> <div class="row">
         <div class="col-md-6 text-center element-short-top element-short-bottom">
         <header class=""> <h3 class="big light bordered-normal">Quer fazer parte da nossa equipe? Cadastre seu curriculo!</h3> </header>
      </div>
      <div class="col-md-3 text-center element-short-top element-short-bottom"> <a href="http://200.183.153.86:4862/" class="btn btn-primary btn-lg" target="_self"> TRABALHE CONOSCO </a> </div>
      <div class="col-md-3 text-center element-short-top element-short-bottom"> <a href="#" data-toggle="modal" data-target="#myModal13" class="btn btn-primary btn-lg" target="_self"> MURAL DE VAGAS </a> </div>

   </div></div></section> </article> </div>
      <footer id="footer" role="contentinfo">
         <section id="services" class="section swatch-black" style="min-height:50px">
            <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12 ">
                     <header class="text-center element-small-top element-small-bottom condensed">
                        <div class="row">
                           <div class="col-md-12 ">
                              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important; element-small-top element-small-bottom"> <img src="assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
                              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important; element-small-top element-small-bottom"> <br>SPSP - Sistema de Prestação de Serviços Padronizados <br>Todos os direitos reservados - Marília/SP - 2016 </div>
                           </div>
                        </div>
                     </header>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <style type="text/css"> .dpcom{width: 56px; height: 252px; top: 50%; margin-top: -126px; float: left; z-index: 10; position: fixed; background-image: url(assets/images/side.jpg); margin-left: -28px;}.modal-body{max-height:470px; overflow-y:auto;}.modal-restrito{top: 100px;}.timeline{position: relative; overflow: auto;}.timeline:before{content: ''; position: absolute; height: 100%; width: 5px; background: #dddddd; left: 0;}.timeline h2{color:#FFF; background: #ee4d4d; max-width: 6em; margin: 0 auto 1em; padding: 0.5em; text-align: center; position: relative; clear: both;}.timeline ul{list-style: none; padding: 0 0 0 1em; z-index: 1;}.timeline li{background: #dddddd; padding: 1em; margin-bottom: 1em; position: relative;}.timeline li:before{content: ''; width: 0; height: 0; border-top: 1em solid #dddddd; border-left: 1em solid transparent; position: absolute; left: -1em; top: 0;}.timeline h3{margin-top: 0;}.timeline:before{left: 50%;}.timeline ul{padding-left: 0; max-width: 700px; margin: 0 auto;}.timeline li{width: 42%;}.timeline li:nth-child(even){float: right; margin-top: 2em;}.timeline li:nth-child(odd){float: left;}.timeline li:nth-child(odd):before{border-top: 1em solid #dddddd; border-right: 1em solid transparent; right: -1em; left: auto;}.timeline li:nth-of-type(2n+1){clear: both;}}</style>
      <div class="modal fade modal-restrito" id="myModal" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Área Restrita</h4>
               </div>
               <div class="modal-body">
                  <a href="https://spbrasilmatrizapp.com21.com.br" target="_blank"><font color="#6c6c6c" size="+1"> COM21 - Autoatendimento SPBrasil:</font><br/> Impressão de 2ª via, solicitações e comunicação. </a> <br/> <br/>
                  <a href="curriculos/index.php"  target="_blank"><font color="#6c6c6c" size="+1"> Curriculos Online:</font><br/> Consulta de curriculos cadastrados online. </a> <br/> <br/>
                  <!--<a href="curso/index.php"  target="_blank"><font color="#6c6c6c" size="+1"> Curso de Agente de Portaria:</font><br/> Cadastrar candidatos aos curso. </a> <br/> <br/>-->
                  <a href="http://spsp.fluig.com/"  target="_blank"><font color="#6c6c6c" size="+1"> Fluig:</font><br/> Processos administrativos integrados. </a> <br/> <br/>
                  <a href="for/index.php"  target="_blank"><font color="#6c6c6c" size="+1"> FOR Online:</font><br/> Formulários de procedimentos internos SPSP. </a> <br/> <br/>
                  <a href="hosp/index.php"  target="_blank"><font color="#6c6c6c" size="+1"> HOSP Online:</font><br/> Sistema de gerenciamento de hotelaria hospitalar. </a> <br/> <br/>
                  <a href="https://sla.performancelab.com.br/login.php?uri=%2F"  target="_blank"><font color="#6c6c6c" size="+1"> Performance Lab:</font><br/> Registro de ocorrências, eventos e checklist online. </a> <br/> <br/>
                  <a href="http://grupospsp.flexnology.com.br/" target="_blank"><font color="#6c6c6c" size="+1"> Ronda Online:</font><br/> Imprimir relatórios de ronda online. </a> <br/> <br/>
                  <a href="http://200.183.153.86/"  target="_blank"><font color="#6c6c6c" size="+1"> SPI:</font><br/> Sistemas de Processos Integrados. </a>
                </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal2" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Sistema Check List QR Code</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video1" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_qrcode.webm" type="video/webm">
                        <source src="assets/movies/spsp_qrcode.flv" type="video/flv">
                        <source src="assets/movies/spsp_qrcode.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal12" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Equipamento - Caddy Clean</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video1" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_caddy_clean.webm" type="video/webm">
                        <source src="assets/movies/spsp_caddy_clean.flv" type="video/flv">
                        <source src="assets/movies/spsp_caddy_clean.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal11" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Inspeção Perimetral - Drone</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video1" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_drone.webm" type="video/webm">
                        <source src="assets/movies/spsp_drone.flv" type="video/flv">
                        <source src="assets/movies/spsp_drone.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal3" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">SPSP Divisão Hospitalar</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video2" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_institucional_hospitalar.webm" type="video/webm">
                        <source src="assets/movies/spsp_institucional_hospitalar.flv" type="video/flv">
                        <source src="assets/movies/spsp_institucional_hospitalar.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal4" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Bastão de Ronda Online</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video3" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_bastao_ronda.webm" type="video/webm">
                        <source src="assets/movies/spsp_bastao_ronda.flv" type="video/flv">
                        <source src="assets/movies/spsp_bastao_ronda.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal5" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Sistema Alarme Wireless</h4>
               </div>
               <div class="modal-body"> O Sistema de Alarme Wireless da SPTech é uma tecnologia israelense que oferece proteção online 24 horas de forma rápida, confiavel, de longo alcance e sem transtornos.<br/> Antes da instalação, um especialista em segurança realiza uma análise de risco em sua empresa para identificar os pontos críticos que necessitam de câmeras, sensores e alarmes. Após o laudo e aprovação, os equipamentos são instalados de forma simples, permitindo que você monitore seu negócio em tempo real através de smartphone ou tablet pelo aplicativo de monitoramento.<br/> A verificação de alarme é feita através do uso do sensor de movimento com câmera que capta as imagens e envia, através da tecnologia wireless de longo alcance, até o painel de controle. Quando um alarme é ativado, a SPSP avalia a situação em tempo real e formula a melhor ação de controle.<br/> <br/> <font color="#FF0000">BENEFÍCIOS DO SISTEMA DE ALARME COM CONTROLE WIRELESS:</font><br/> Produtividade<br/> * Velocidade na instalação <br/> * Manutenção reduzida <br/> * Configuração e solução de problemas remotamente<br/><br/> Qualidade no Serviço<br/> * Seguro e protegido <br/> * Sem falhas <br/> * Confiável <br/> * Sem falsos alarmes </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal6" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Monitoramento de Portaria 24 horas</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video4" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_monitoramento_portaria.webm" type="video/webm">
                        <source src="assets/movies/spsp_monitoramento_portaria.flv" type="video/flv">
                        <source src="assets/movies/spsp_monitoramento_portaria.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal7" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Portaria a Distância</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <video id="video5" autobuffer height="auto" width="auto" align="center" controls style="max-width: 100%;">
                        <source src="assets/movies/spsp_portaria_distancia.webm" type="video/webm">
                        <source src="assets/movies/spsp_portaria_distancia.flv" type="video/flv">
                        <source src="assets/movies/spsp_portaria_distancia.mp4" type="video/mp4">
                        Seu navegador não suporta HTML5 
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal8" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Conheça mais a SPSP</h4>
               </div>
               <div class="modal-body">
                  <font color="#FF0000">Custo Benefício:</font><br/> Proteção dos bens patrimoniais, higienização e limpeza de ambientes, com técnica apurada e supervisionada diariamente, além de uma gama enorme de possibilidades de terceirizações legalmente permitidas e que propiciam retorno imediato em custos e benefícios para os contratantes-parceiros.<br/> Liberação do parceiro-cliente de todas as dificuldades de contratação e administração de pessoal, permitindo que se possa focar toda sua atenção exclusivamente nos objetivos da atividade-fim de sua empresa, deixando a cargo da terceirizadora a operacionalização de todos os serviços relacionados com a sua atividade-meio.<br/> Proporciona absoluta tranquilidade para empresários, síndicos e encarregados dos departamentos de pessoal pois todas as funções de seleção, triagem, treinamento, substituição de colaboradores, reposição de faltosos, recolhimentos de encargos e impostos, negociação e cumprimento dos acordos sindicais, obrigações trabalhistas, demissões, rescisões, entre outros, ficam sob responsabilidade da terceirizadora, proporcionando, além disso, uma considerável redução dos custos fixos das empresas.<br/><br/> <font color="#FF0000">Evolução SPSP Marília:</font><br/> 
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada1.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada1.jpg" alt="SPSP 1994"></a>SPSP 1994</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada2.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada2.jpg" alt="SPSP 1995"></a>SPSP 1995</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada3.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada3.jpg" alt="SPSP 1996"></a>SPSP 1996</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada4.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada4.jpg" alt="SPSP 1998"></a>SPSP 1998</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br/> <font color="#FF0000">Filiais SPSP:</font><br/> 
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_bauru.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_bauru.jpg" alt="SPSP Bauru"></a>Bauru</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_araraquara.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_araraquara.jpg" alt="SPSP Araraquara"></a>Araraquara</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_riopreto.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_riopreto2.jpg" alt="SPSP Rio Preto"></a>Rio Preto</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_limeira.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_limeira.jpg" alt="SPSP Limeira"></a>Limeira</div>
                              </div>
                              <div class="col-md-12">
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_jundiai.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_jundiai2.jpg" alt="SPSP Jundiaí"></a>Jundiaí</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_riopardo.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_riopardo2.jpg" alt="SPSP Rio Pardo"></a>Rio Pardo</div>
                              <div class="col-md-3 text-center"><a href="assets/images/uploads/spsp_fachada_ribeirao.jpg" class="figure-image magnific" data-links="" target="_self"><img src="assets/images/uploads/spsp_fachada_ribeirao2.jpg" alt="SPSP Ribeirão Preto"></a>Ribeirão Preto</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-restrito" id="myModal9" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">DIFERENCIAIS SPSP</h4>
               </div>
               <div class="modal-body">
                  <font color="#FF0000" style="text-align:center;">O QUE DESTACA A SPSP?</font><br/><br/> 
                  <div class="row">
                     <div class="col-md-12">
                        <div>
                           <div class="col-md-12" style="background-color:#6c6c6c; color:#fff;">
                              <div class="col-md-3 text-center">CONFIANÇA</div>
                              <div class="col-md-3">Acompanhamento permanente dos serviços</div>
                              <div class="col-md-6">Equipes de coordenadores, supervisores, rondantes, Central 24h e Depto. de Qualidade para avaliação permanente dos serviços</div>
                           </div>
                           <br/> 
                           <div class="col-md-12" style="background-color:#bf2718; color:#fff;">
                              <div class="col-md-3 text-center">TRANQUILIDADE</div>
                              <div class="col-md-3">Suporte intensivo ao cliente</div>
                              <div class="col-md-6">Estar presente, ao fácil alcance dos parceiros, ser ágil no atendimento e flexível para atender as necessidades</div>
                           </div>
                           <br/> 
                           <div class="col-md-12" style="background-color:#6c6c6c; color:#fff;">
                              <div class="col-md-3 text-center">SEGURANÇA</div>
                              <div class="col-md-3">Treinamento constante dos colaboradores</div>
                              <div class="col-md-6">Colaboradores treinados e bem preparados, orientados pelo departamento de RH, para execução dos serviços contratados</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade modal-restrito" id="myModal13" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mural de Vagas</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-2 col-sm-2 col-xs-12 text-center"> <img src="assets/images/tb11.png" width="100px" align="center"/> </div>
        <div class="col-md-10 col-sm-10 col-xs-12"> Todas as vagas estão sendo oferecidas preferencialmente para portadores de necessidades especiais e profissionais reabilitados pelo INSS<br/>
          <br/>
        </div>
        Confira abaixo as vagas disponíveis para cada região da SPSP:<br/>
        <?php
$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Araraquara'"); echo mysql_num_rows($result) > 0 ? "<font color='red'><b>Araraquara</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Bauru'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Bauru</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Jundiai'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Jundiaí</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Limeira'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Limeira</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Marilia'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Marília</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Pompeia'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Pompéia</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='Ribeirao Preto'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>Ribeirão Preto</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='S J Rio Pardo'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>S J Rio Pardo</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
$result=mysql_query("SELECT * FROM vagas WHERE regiao='S J Rio Preto'"); echo mysql_num_rows($result) > 0 ? "<br><font color='red'><b>S J Rio Preto</b></font><br>" : '';
while($row=mysql_fetch_array($result)) echo $row['funcao']." - ".$row['observacao']."<br>";
?><center>
<br/>Faça o cadastro do seu currículo.<br/>
<a href="http://200.183.153.86:4862/">> CLIQUE AQUI<</a>
</center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


      <div class="modal fade modal-restrito" id="myModal10" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button> 
                  <h4 class="modal-title" id="myModalLabel">Timeline da SPSP</h4>
               </div>
               <div class="modal-body">
                  <div class="timeline">
                     <h2>2017</h2>
                     <ul>
                     <li>
                        <h3>Expansão Regional</h3>
                        <p>Inicio das atividades do escritório em Ribeirão Preto/SP.</p>
                     </li>
                     <h2>2016</h2>
                     <ul>
                        <li>
                           <h3>Expansão Regional</h3>
                           <p>Inicio das atividades dos escritórios em São José do Rio Preto/SP e Araraquara/SP.</p>
                        </li>
                        <li>
                           <h3>Crescimento e Modernização</h3>
                           <p>Inauguração da nova filial em Bauru.</p>
                        </li>
                     </ul>
                     <h2>2015</h2>
                     <ul>
                        <li>
                           <h3>Certificação</h3>
                           <p>Conquista do Certificado OHSAS 18001 - Gestão de Saúde e Segurança no Trabalho.</p>
                        </li>
                     </ul>
                     <h2>2013</h2>
                     <ul>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Modernização da CCM - Central de Controle Monitoramento.</p>
                        </li>
                     </ul>
                     <h2>2012</h2>
                     <ul>
                        <li>
                           <h3>Expansão Regional</h3>
                           <p>Início das atividades do escritório em Jundiaí/SP.</p>
                        </li>
                        <li>
                           <h3>Crescimento e Modernização</h3>
                           <p>Inauguração da nova matriz em Marília/SP.</p>
                        </li>
                     </ul>
                     <h2>2011</h2>
                     <ul>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Início das atividades da SPTech - Divisão Tecnológica.</p>
                        </li>
                     </ul>
                     <h2>2010</h2>
                     <ul>
                        <li>
                           <h3>Certificação</h3>
                           <p>Conquista do Certificado ISO 14001 Gestão Ambiental e do Certificado CRS - Regularidade em Segurança.</p>
                        </li>
                     </ul>
                     <h2>2006</h2>
                     <ul>
                        <li>
                           <h3>Certificação</h3>
                           <p>Conquista do Certificado SESVESP.</p>
                        </li>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Início das atividades da Divisão Hospitalar.</p>
                        </li>
                     </ul>
                     <h2>2004</h2>
                     <ul>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Fundação da SPBrasil - Administração e Suporte Condominial.</p>
                        </li>
                     </ul>
                     <h2>2003</h2>
                     <ul>
                        <li>
                           <h3>Expansão Regional</h3>
                           <p>Inauguração das atividades do escritório em São José do Rio Pardo/SP.</p>
                        </li>
                     </ul>
                     <h2>2001</h2>
                     <ul>
                        <li>
                           <h3>Expansão Regional</h3>
                           <p>Inauguração da filial em Bauru/SP.</p>
                        </li>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Início das atividades da empresa SPSP Segurança Patrimonial.</p>
                        </li>
                     </ul>
                     <h2>2000</h2>
                     <ul>
                        <li>
                           <h3>Novas Tecnologias</h3>
                           <p>Fundação da Locatempo – prestadora de serviços para mão-de-obra temporária.</p>
                        </li>
                     </ul>
                     <h2>1999</h2>
                     <ul>
                        <li>
                           <h3>Certificação</h3>
                           <p>Conquista do Certificado ISO 9001 Gestão da Qualidade.</p>
                        </li>
                        <li>
                           <h3>Expansão Regional</h3>
                           <p>Início das atividades da filial em Limeira/SP.</p>
                        </li>
                     </ul>
                     <h2>1998</h2>
                     <ul>
                        <li>
                           <h3>Crescimento e Modernização</h3>
                           <p>Ampliação do número de colaboradores e construção de nova sede moderna.</p>
                        </li>
                     </ul>
                     <h2>1996</h2>
                     <ul>
                        <li>
                           <h3>Crescimento e Modernização</h3>
                           <p>Crescimento na região e novas instalações.</p>
                        </li>
                     </ul>
                     <h2>1995</h2>
                     <ul>
                        <li>
                           <h3>Crescimento e Modernização</h3>
                           <p>Evolução da empresa e mudança da sede.</p>
                        </li>
                     </ul>
                     <h2>1994</h2>
                     <ul>
                        <li>
                           <h3>Inauguração</h3>
                           <p>A SPSP inicia sua história com o segmento de Portaria e Limpeza.</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
      <script src="http://vjs.zencdn.net/5.10.4/video.js"></script>
      <script type="text/javascript">
         function validar() {
             if (document.getElementById('Facebook').checked == false &&
                 document.getElementById('Google').checked == false &&
                 document.getElementById('Cartazes').checked == false &&
                 document.getElementById('TV').checked == false &&
                 document.getElementById('Revista').checked == false &&
                 document.getElementById('Indicacao').checked == false &&
                 document.getElementById('Jornal').checked == false) {
                 alert('Informe como você conheceu a SPSP!');
                 return false;
             } else {
                 return true;
             }
         }
         
         
         
         $('body').on('hidden.bs.modal', '.modal', function() {
             $('video').trigger('pause');
         });
         
         $(document).ready(function() {
             $('.dpcom.slideright').hover(function() {
                 $(this).stop().animate({
                     left: '28px'
                 }, {
                     queue: false,
                     duration: 0
                 });
             }, function() {
                 $(this).stop().animate({
                     left: '0px'
                 }, {
                     queue: false,
                     duration: 0
                 });
             });
         });
         $(function() {
             $('.spsp-filter-btn').on('click', function() {
                 var t = $(this),
                     id = t.data('id');
                 $('.spsp-filter').hide();
                 $('.spsp-filter-' + id).show();
                 if (id == 0) {
                     $('.spsp-filter').show();
                 }
             });
         });
         
         
         (function(i, s, o, g, r, a, m) {
             i['GoogleAnalyticsObject'] = r;
             i[r] = i[r] || function() {
                 (i[r].q = i[r].q || []).push(arguments)
             }, i[r].l = 1 * new Date();
             a = s.createElement(o),
                 m = s.getElementsByTagName(o)[0];
             a.async = 1;
             a.src = g;
             m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
         
         ga('create', 'UA-85630992-1', 'auto');
         ga('send', 'pageview');
      </script>
   </body>
</html>