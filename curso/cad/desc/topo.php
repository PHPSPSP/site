<?
$noome = $_SESSION['nome'];
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<link rel='icon' type='image/png' href='../../assets/images/SPSP-favicon.png'>
<title>Grupo SPSP - Curso de Portaria</title>
<meta name='description' content='SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade.'/>
<meta name='keywords' content='trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa'/>
<meta name='copyright' content='SPSP'/>
<meta name='author' content='SPSP'/>
<meta name='email' content='spsp@spsp.com.br'/>
<meta name='Charset' content='UTF-8'/>
<meta name='Distribution' content='Global'/>
<meta name='Rating' content='General'/>
<meta name='Robots' content='INDEX,FOLLOW'/>
<meta name='Revisit-after' content='31 Days'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta content='yes' name='apple-mobile-web-app-capable'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='../../assets/css/theme.min.css'>
<link rel='stylesheet' href='../../assets/css/color-defaults.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-white.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-blue.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-gray.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-black.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-white-black.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-white-green.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/swatch-white-red.min.css' media='screen'>
<link rel='stylesheet' href='../../assets/css/fonts.min.css' media='screen'>
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
</head>
<body class='normal-header'  onload='time()'>
<div id='masthead' class='navbar navbar-static-top swatch-white navbar-sticky' role='banner'>
  <div class='container'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.main-navbar'> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
      <a href='../../index.php' class='navbar-brand'> <img src='../../assets/images/SPSP-logo-top.png' alt='SPSP - Grupo Empresarial de Serviços'></a> </div>
    <nav >
      <ul id='menu-one-page' class='nav navbar-nav navbar-left'>
		<li><a>Olá <b>$noome</b> &nbsp;| &nbsp;<span id='txt'></span></a></li>
      </ul>
    </nav>
    <nav class='collapse navbar-collapse main-navbar' role='navigation'>
      <ul id='menu-one-page' class='nav navbar-nav navbar-right'>
        <li><a href='logado.php'>Início</a></li>
        <li><a href='altsenha.php'>Alterar Senha</a></li>
        <!--<li><a href='reg.php'>Painel Administrador</a></li>-->
        <li class='nav-highlight'><a href='$url/logout.php'>Sair do Sistema</a> </li>
      </ul>
    </nav>
  </div>
</div>"

?>