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
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  
  <title>Retorno de Concierge</title>
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
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Portaria Principal</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-automobile"></i> <span>Portaria</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="portariaentrada.php"><i class="fa fa-circle-o"></i> Portaria Entrada</a></li>
            <li ><a href="portariasaida.php"><i class="fa fa-circle-o"></i> Portaria Saida</a></li>
            <?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='6' || $_SESSION['tipo']=='10') { ?>
            <li ><a href="cadastro_depto.php"><i class="fa fa-circle-o"></i> Cadastro de Departamento</a></li>
            <li ><a href="alterar_depto.php"><i class="fa fa-circle-o"></i> Alteração de Departamento</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Concierge</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="concierge.php"><i class="fa fa-circle-o"></i> Início de Acompanhamento</a></li>
            <li  class="active"><a href="conciergesai.php"><i class="fa fa-circle-o"></i> Retorno do Concierge</a></li>
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
        <?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='6' || $_SESSION['tipo']=='10') { ?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Relatório</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="relatorioentrada.php"><i class="fa fa-circle-o"></i> Relatório de Portaria</a></li>
            <li><a href="consiergerelatorio.php"><i class="fa fa-circle-o"></i> Relatório de Concierge</a></li>
            <li><a href="cracharelretorno.php"><i class="fa fa-circle-o"></i> Relatório de Crachá</a></li>
          </ul>
        </li> <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

                                          <!-- Content Wrapper. Conteudo da pagina -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Concierge
        <small>Saida</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../logado.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Concierge Saida</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- search form -->
  <div class="register-logo">
    <a href="#"><b>Retorno de Concierge</a>
  </div>
      <!-- /.search form -->

      <!--Formulario -->
        <table width="auto" height="40" border="1" align="center" style="text-align: center; text-transform:uppercase; text-align: center;">
      <tr style="background-color: bisque;">
        <td style="padding: 5px;">Paciente</td>
        <td style="padding: 5px;">Nº do Quarto</td>
        <td style="padding: 5px;">Data Acompanhamento</td>
        <td style="padding: 5px;">Horario Acompanhamento</td>
        <td style="padding: 5px;">Encontro de Pertence</td>
        <td style="padding: 5px;">Retorno Concierge</td>
      </tr>
  <?php 

        //criando a query de consulta à tabela criada
        $sql=mysql_query("select * from spsp1.tb_acopaciente WHERE status =' ' order by id");
        while($aux=mysql_fetch_array($sql)){
if ($aux["pertence"]==""){$pertence2="";} else {$pertence2="<input type='checkbox' id='pertence' name='pertence' value='pertence encontrado'/>";};

  echo "
    <tr style='text-transform:uppercase; text-align: center;'> 
          <form action='retornoap.php' method='GET'>
               <td style='padding: 5px;'> ".$aux["acopaciente"]."</td>
               <td style='padding: 5px;'> ".$aux["numeroquarto"]."</td>
               <td style='padding: 5px;'> ".date('d/m/Y', strtotime($aux['liberado']))."</td>
               <td style='padding: 5px;'> ".date('H:i:s', strtotime($aux['liberado']))."</td>
               <td style='padding: 5px;'> ".$pertence2."</td>
               <td style='padding: 5px;'> <input hidden name='id' id='id' value='".$aux["id"]."'><button type='submit' value='libera' class='btn btn-danger'>Retorno</button></td>
          </form>
    </tr>
  "; }
 ?>
        </table>
      <!--Fim do formulario -->

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
</html>