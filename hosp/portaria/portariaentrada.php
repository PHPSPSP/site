<?php
 header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "2" && $_SESSION['tipo'] != "3" && $_SESSION['tipo'] != "11" && $_SESSION['tipo'] != "12" && $_SESSION['tipo'] != "13"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
    window.location.href='../logado.php';
        </SCRIPT>");}else{  };

$nomeuser = $_SESSION['login'];
$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];
$tipo = $_SESSION['tipo'];

?>

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Entrada na Portaria</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Portaria Principal</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">oculta menu</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo "$usuario"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/logo.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$usuario"; ?>
                  <small><?php $tiponome=mysql_query("SELECT nome_tipo FROM usuarios_tipo WHERE id_tipo = '".$tipo."'");
                  while ($lista = mysql_fetch_array($tiponome)) {
                  echo $lista['nome_tipo'];} ?></small>
                </p>
              </li>
              <!-- Menu Body -->
                  <div class="col-xs-4 text-center">
                  </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
           
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/SPSP.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="text-align: center">SPSP<BR> Sistema de Prestação <BR> Serviços Padronizados</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menus</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-automobile"></i> <span>Portaria</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="portariaentrada.php"><i class="fa fa-circle-o"></i> Portaria Entrada</a></li>
            <li ><a href="portariasaida.php"><i class="fa fa-circle-o"></i> Portaria Saida</a></li>
            <?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='6' || $_SESSION['tipo']=='10') { ?>
            <li ><a href="cadastro_depto.php"><i class="fa fa-circle-o"></i> Cadastro de Departamento</a></li>
            <li ><a href="alterar_depto.php"><i class="fa fa-circle-o"></i> Alteração de Departamento</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Concierge</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="concierge.php"><i class="fa fa-circle-o"></i> Início de Acompanhamento</a></li>
            <li class=""><a href="conciergesai.php"><i class="fa fa-circle-o"></i> Retorno do Concierge</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card-o"></i> <span>Controle de Cracha</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="crachasaida.php"><i class="fa fa-circle-o"></i> Saida de Cracha</a></li>
            <li><a href="cracharetorno.php"><i class="fa fa-circle-o"></i> Retorno de Cracha</a></li>
          </ul>
        </li>
        <?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='6' || $_SESSION['tipo']=='10' || $_SESSION['tipo']=='11') { ?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Relatório</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="relatorioentrada.php"><i class="fa fa-circle-o"></i> Relatório de Portaria</a></li>
            <?php } ?>
          	<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='6' || $_SESSION['tipo']=='10') { ?>
            <li><a href="consiergerelatorio.php"><i class="fa fa-circle-o"></i> Relatório de Concierge</a></li>
            <li><a href="cracharelretorno.php"><i class="fa fa-circle-o"></i> Relatório de Crachá</a></li>
          </ul>
        </li> <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Portaria
        <small>Entrada</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../logado.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Portaria Entrada</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

  <!-- Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Registro de Entrada</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registro nova entrada</p>

    <form action="gravaracesso.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" style="text-transform:uppercase" name="nome" required placeholder="Nome / Condutor">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" style="text-transform:uppercase" name="acompanhante" placeholder="Acompanhante">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
<script>
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }
}
</script>
      
      <div class="form-group has-feedback">
        <input onkeypress="formatar(this,'000-0000')" style="text-transform:uppercase" maxlength="8" type="text" class="form-control" name="placadoveiculo" id="placadoveiculo" required placeholder="Placa do Veiculo">
        <span class="glyphicon glyphicon-th form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" style="text-transform:uppercase" name="tipodoveiculo" placeholder="Tipo do Veiculo">
        <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
        <select name="departamento" class="form-control" style="text-transform:uppercase" required placeholder="Departamento"> 
           <option value="">Departamento</option>
            <?php
                  $consulta=mysql_query("SELECT * FROM tb_departamento WHERE local = '".$clienteativo."' ORDER BY nomes");
                  while ($lista = mysql_fetch_array($consulta)) {
                  echo("<option value='".$lista['id']."'>".$lista['nomes']."</option>");}
             ?> 
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" style="text-transform:uppercase" name="nomepaciente" placeholder="Nome do Paciente / Quarto">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <!--botão "gravar acesso"...ao clicar é para gravar a hora/data de entrada no banco de dados-->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-danger" style="text-transform:uppercase" value="gravar"> REGISTRAR ENTRADA</button>
        </div>
        <BR>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      SPSP
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="http://www.spsp.com.br/">SPSP - Sistema de Prestação de Serviços Padronizados </a>.</strong> Todos os direitos reservados - Marília/SP - 2018
  </footer>

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
<html>


<!-- Funções -->