<?
session_start();
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");

if ($_SESSION['tipo'] != "1"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$sql = "SELECT * FROM usuarios_hosp WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");

$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../assets/images/SPSP-favicon.png">
<title>Grupo SPSP - HOSP Online</title>
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
      <a href="../index.php" class="navbar-brand"> <img src="../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"></a>
</div>

	<nav >
      <ul id="menu-one-page" class="nav navbar-nav navbar-left">
        <li><a>Olá <b><?=$_SESSION['nome'];?></b> <br>
			<span id="txt"></span></a></li>
      </ul>
    </nav>
    
	<nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
       <li><a target="_self" href="logado.php">Início</a></li>
        <li><a target="_self" href="altsenha.php">Alteração de Cadastro</a></li>
        <li class="active"><a>Configuração</a></li>
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
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
              <h1 class="super hairline bordered bordered-normal"> Alterar Cadastro </h1>
            </header>
            <div class="row">
              <div class="col-md-12">
<form action="alterar_db.php?id=<?php echo $_GET['id'] ?>" method="post" name="cad_user">
<div class="row">

<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Nome:
					<div class="form-group form-icon-group">
	<input class="form-control" name="n" size="50" id="n" type="text" value="<?php echo $linha['nome'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">E-mail:
					<div class="form-group form-icon-group">
	<input class="form-control" name="m" size="50" id="m" type="text" value="<?php echo $linha['mail'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Login:
					<div class="form-group form-icon-group">
	<input class="form-control" name="l" size="30" id="l" type="text" value="<?php echo $linha['login'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Senha:
					<div class="form-group form-icon-group">
	<input class="form-control" name="s" id="s" size="20" type="password" value="<?php echo $linha['senha2'] ?>" required/>
					<br /></div>
				</div>
</div>
<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Tipo:
                
					<div class="form-group form-icon-group">
    <select class="form-control" name="t" id="t" required="" onChange="marcaCheckBoxt();">
      <?php
$consultages=mysql_query("SELECT * FROM usuarios_tipo where id_tipo='".$linha['tipo']."'"); 
while ($dadosges = mysql_fetch_array($consultages)) {
echo("<option selected='selected' value='".$dadosges['id_tipo']."'>".$dadosges['nome_tipo']."</option>");};
$consulta=mysql_query("SELECT * FROM usuarios_tipo order by nome_tipo"); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['id_tipo']."'>".$dados['nome_tipo']."</option>");}
?>  
</select>
  <br /></div>
				</div>
</div>

<div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Gestor:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="g" id="g" required="">
<?php
$consultages=mysql_query("SELECT id, nome FROM usuarios where id='".$linha['gestor']."'"); 
while ($dadosges = mysql_fetch_array($consultages)) {
echo("<option selected='selected' value='".$dadosges['id']."'>".$dadosges['nome']."</option>");};
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' or tipo='adm' order by nome"); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['id']."'>".$dados['nome']."</option>");}
?>
                      </select>
                      <br />
                    </div>
                  </div>
                </div>
				
                <div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Código HK:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="hk" id="hk" size="20" type="number" value="<?php echo $linha['id_hk'] ?>" required/>
                      <br />
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Região:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="r" id="r" required="">
<?php
$consultages=mysql_query("SELECT * FROM usuarios_regiao where id_regiao='".$linha['regiao']."'"); 
while ($dadosges = mysql_fetch_array($consultages)) {
echo("<option selected='selected' value='".$dadosges['id_regiao']."'>".$dadosges['nome_regiao']."</option>");};
$consulta=mysql_query("SELECT * FROM usuarios_regiao  order by nome_regiao"); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['id_regiao']."'>".$dados['nome_regiao']."</option>");}
?>                      </select>
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-3  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Cliente:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="c" id="c" required="">
<?php
$consultages=mysql_query("SELECT * FROM sarclien where CODCLI='".$linha['cliente']."'"); 
while ($dadosges = mysql_fetch_array($consultages)) {
echo("<option selected='selected' value='".$dadosges['CODCLI']."'>".$dadosges['NOMECLI']."</option>");};
$consulta=mysql_query("SELECT * FROM sarclien where DTENCERRA IS NULL  order by NOMECLI"); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['CODCLI']."'>".$dados['NOMECLI']."</option>");}
?>  
                      </select>
                      <br />
                    </div>
                  </div>
                </div>
               
                <div class="col-md-12  col-sm-12 col-xs-12 text-left small-screen-center "  >
                  <br /><br />
                </div>           
                
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input class="form-control btn btn-danger" type="submit" value="Alterar" />
                      <br />
                    </div>
                  </div>
                </div>

                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input class="form-control btn btn-info" type="button" value="Voltar" onclick="location.href='listareg.php'"/> 
                      <br />
                  </div>
                </div>
              </div>

            </div>
            </form>
            </div>

              </div>
            </div>
          </div>
        </div>
    </section>
  </article>
</div>
  <section id="services" class="navbar navbar-default navbar-fixed-bottom hidden-xs swatch-black" style="min-height:50px">
    <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <header class="text-center element-small-top element-small-bottom condensed"><div class="row">
            <div class="col-md-12 ">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important">
                <br>SPSP - Sistema de Prestação de Serviços Padronizados
                <br>Todos os direitos reservados - Marília/SP - <?php echo date('Y'); ?>
              </div>
            </div>
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
</script>
</body>
</html>

<?  };  ?>