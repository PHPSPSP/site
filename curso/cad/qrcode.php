<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<link rel='icon' type='image/png' href='../../assets/images/SPSP-favicon.png'>
<title>SPSP - Controle de Higienização</title>
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
  
</head>
<body class='normal-header'>

<div class="text-center element-short-top">
  <img src="../../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços">
  <br><br>
        <form method="POST" action="login2.php">
          <p> Informe seu CPF (somente números): <br />
            <br />
            <span class="col-md-2 col-sm-2 col-xs-1"></span>
            <span class="col-md-2 col-sm-1 col-xs-1"></span>
            <input style="background-color:#EBEBEB" type="text" class="text-center cpf-mask col-md-4 col-sm-6 col-xs-8" id="cpf" name="cpf" size="20px" >
            <span class="col-md-2 col-sm-2 col-xs-1"></span>
            <span class="col-md-2 col-sm-1 col-xs-1"></span>
            <input hidden='hidden' type="text" name="local" value="<?= $local = $_GET['quarto']; ?>" >
            <input hidden='hidden' type="text" name="cliente" value="<?= $cliente = $_GET['cliente']; ?>" >
            </select>
            <br />
            <br />
            <span class="col-md-2 col-sm-2 col-xs-1"></span>
            <span class="col-md-2 col-sm-1 col-xs-1"></span>
            <input type="submit" class="btn btn-lg btn-danger col-md-4 col-sm-6 col-xs-8" value="Entrar">
            <span class="col-md-2 col-sm-2 col-xs-1"></span>
            <span class="col-md-2 col-sm-1 col-xs-1"></span>
          </p>
        </form>
      </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="teste/locastyle.js" type="text/javascript"></script>
  <script src="teste/bootstrap.js"></script>

</body>
</html>