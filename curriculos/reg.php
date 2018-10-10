<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("privado.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../assets/images/SPSP-favicon.png">
<title>Grupo SPSP - Cadastro de Currículos</title>
<meta name="description" content="SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade."/>
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
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
</head>
<body class="normal-header" onload="time()">
<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="../index.php" class="navbar-brand"> <img src="../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"></a> </div>
    <nav >
      <ul id="menu-one-page" class="nav navbar-nav navbar-left">
        <li><a>Olá <b>
          <?=$_SESSION['nome'];?>
          </b> &nbsp;| &nbsp;<span id="txt"></span></a></li>
      </ul>
    </nav>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li><a target="_self" href="logado.php">Início</a></li>
        <li><a target="_self" href="altsenha.php">Alterar Senha</a></li>
        <li class="active"><a>Painel Administrador</a></li>
        <li class="nav-highlight"><a href="<?=$url?>/logout.php">Sair do Sistema</a> </li>
      </ul>
    </nav>
  </div>
</div>
<div id="content">
  <article>
  <section id="two" class="section swatch-white">
  <div class="container" style="padding-bottom: 180px;">
    <div class="row">
      <div class="col-md-12">
        <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Painel Administrador </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form method="POST" action="reguser.php">
              <div class="row">
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Nome:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">E-mail:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="m" size="50" id="m" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Login:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="l" size="30" id="l" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Senha:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="s" id="s" size="20" type="password" onKeyPress="checar_caps_lock(event)" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Tipo:
                    <div class="form-group form-icon-group">
                        <select class="form-control" name="t" id="t" required="">
  		<option value="adm">Administrador</option>
      <option value="rh">Recursos Humanos</option>
      <option value="dp">Depto Pessoal</option>
                        <option value="Desativado">Desativado</option>
                      </select>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
              <h1 class="super hairline bordered bordered-normal"> Usuários Cadastrados </h1>
            </header>


           <?php
$result=mysql_query("select * from user ORDER BY nome, tipo");
echo "
 <div class='element-short-top element-short-bottom os-animation animated fadeIn table-responsive' data-os-animation='fadeIn' data-os-animation-delay='0s' style='animation-delay: 0s;'>    <table class='table table-hover table-condensed'><thead>
        <tr>
            <th class='col-md-6  col-sm-6 col-xs-4 text-center'>Usuário</th>
            <th colspan='2' class='col-md-6  col-sm-6 col-xs-8 text-center'>Ações</th>
            </tr>
</thead>
              </table>
            </div>
";
while($row=mysql_fetch_array($result))
echo "
            <div class='element-short-top element-short-bottom os-animation animated fadeIn table-responsive' data-os-animation='fadeIn' data-os-animation-delay='0s' style='animation-delay: 0s;'>

    <table class='table table-hover table-condensed'>
<tr>
            <td class='col-md-6  col-sm-6 col-xs-4 tex'><font size='+1' " . ($row['senha2'] == 'desativado*' ? 'color="#ff0000"' : '') . " >".$row['nome']."</font></td>
            <td class='col-md-3  col-sm-3 col-xs-4 text-center'><a class='btn btn-info' href='altera.php?id=".$row['id']."'>Alterar</a></td>
            <td class='col-md-3  col-sm-3 col-xs-4 text-center'><a class='btn btn-danger' href='javascript:confirmExcluir(\"deletar.php?id=" . $row['id'] . "\");'>Deletar</a></td>
        </tr>
    </table>
</div>
";
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</article>
</div>
  <section id="services" class="navbar navbar-default navbar-fixed-bottom hidden-xs swatch-black" style="min-height:50px">
    <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <header class="text-center element-small-top element-small-bottom condensed"><div class="row">
        <div class="col-md-12 ">
            <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important"> <br>
              SPSP - Sistema de Prestação de Serviços Padronizados<br>
              Todos os direitos reservados - Marília/SP - 2016
              </div></div></div>
          </header>
        </div>
      </div>
    </div>
  </section>
<script src="../assets/js/packages.min.js"></script> 
<script src="../assets/js/theme.min.js"></script> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();

   	str_segundo = new String (s);
	if (str_segundo.length == 1)
      	s = "0" + s;

   	str_minuto = new String (m);
   	if (str_minuto.length == 1)
      	m = "0" + m;

   	str_hora = new String (h);
   	if (str_hora.length == 1)
      	h = "0" + h;

document.getElementById('txt').innerHTML=h+":"+m+":"+s;

setTimeout('time()',1000);
}

function checar_caps_lock(ev) {
	var e = ev || window.event;
	codigo_tecla = e.keyCode?e.keyCode:e.which;
	tecla_shift = e.shiftKey?e.shiftKey:((codigo_tecla == 16)?true:false);
	if(((codigo_tecla >= 65 && codigo_tecla <= 90) && !tecla_shift) || ((codigo_tecla >= 97 && codigo_tecla <= 122) && tecla_shift)) {
        window.alert('ATENÇÃO! o Caps Lock está ativado!');	}
		}

function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente excluir esse usuário?")) {
    document.location = delUrl;
  }
}
</script>
</body>
</html>
<? }; ?>