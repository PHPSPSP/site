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

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];

 ?>

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ambos Relatorio</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
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
              <span class="hidden-xs"> <?php $noome = $_SESSION['nome']; echo "$noome"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/logo.png" class="img-circle" alt="User Image">

                <p>
                  <?php $noome = $_SESSION['nome']; echo "$noome"; ?>
                  <small><?php $tiipo = $_SESSION['tipo'];
                  $tiponome=mysql_query("SELECT nome_tipo FROM usuarios_tipo WHERE id_tipo = '".$tiipo."'");
                  echo "$tiponome"; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
                  <div class="col-xs-4 text-center">
                    <a href="#">Grafico</a>
                  </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../$url/logout.php" class="btn btn-default btn-flat">Sair</a>
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
            <li><a href="portariasaida.php"><i class="fa fa-circle-o"></i> Portaria Saida</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Relatorio</span>
            <span class="fa fa-angle-left pull-right">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="relatorioentrada.php"><i class="fa fa-circle-o"></i> Relatorio entrada</a></li>
            <li><a href="relatoriosaida.php"><i class="fa fa-circle-o"></i> Relatorio saida</a></li>
            <li><a href="ambosrelatorio.php"><i class="fa fa-circle-o"></i> Ambos relatorio</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Gerar arquivos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="gerarpdf.php"><i class="fa fa-circle-o"></i> PDF</a></li>
            <li><a href="geraxls.php"><i class="fa fa-circle-o"></i> EXCEL</a></li>
          </ul>
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentação</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

                                          <!-- Content Wrapper. Conteudo da pagina -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ambos
        <small>Relatorio entrada & saida</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">ambos relatorio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<BR>
<BR>
   <div class="container">
   <form class="form-inline">
      <div class="form-group">
          <label for="data">Data:</label>
          <input type="Date" class="form-control" id="data" placeholder="Selecione uma data">
      </div>
       <div class="form-group">
          <label for="porteiro">Porteiro:</label>
           <input type="text" class="form-control" id="porteiro" placeholder="Selecione o porteiro">
       </div>
            <div class="checkbox">
              <label><input type="checkbox"> ENTRADA </label><br>
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> SAIDA </label>
            </div>
              <div class="checkbox">
              <label><input type="checkbox"> AMBOS </label>
            </div>
            <button type="submit" class="btn btn-danger">Buscar</button>
   </form>
  </div>
    <!--Formulario -->
      <form action="#" method="#">
        <table width="888" height="40" border="1" align="center" style="text-align: center;">
      <tr>
        <td width="105" style="font-size: 80%; text-align: center;">Nome/Condutor</td>
        <td width="97" style="font-size: 80%; text-align: center;">Acompanhante</td>
        <td width="105" style="font-size: 80%; text-align: center;">Placa do veiculo</td>
        <td width="95" style="font-size: 80%; text-align: center;">Tipo do veiculo</td>
        <td width="95" style="font-size: 80%; text-align: center;">Departamento</td>
        <td width="95" style="font-size: 80%; text-align: center;">Cliente</td>
        <td width="94" style="font-size: 80%; text-align: center;">Data Entrada</td>
        <td width="105" style="font-size: 80%; text-align: center;">Horario Entrada</td>
        <td width="94" style="font-size: 80%; text-align: center;">Data Saida</td>
        <td width="94" style="font-size: 80%; text-align: center;">Horario Saida</td>

<?php 

          //criando a query de consulta à tabela criada
          $sql=mysqli_query($conecta, "select * from tb_entrada order by id");
          while($aux=mysqli_fetch_array($sql))
    echo "
      <tr> 
            <form action='liberaracesso.php' method='GET'>
                 <td> ".$aux["nome"]."</td>
                 <td> ".$aux["acompanhante"]."</td>
                 <td> ".$aux["placadoveiculo"]."</td>
                 <td> ".$aux["tipodoveiculo"]." </td>
                 <td> ".$aux["departamento"]."</td>
                 <td> ".$aux["cliente"]."</td>
                 <td> ".date('d/m/Y', strtotime($aux['horaentrada']))."</td>
                 <td> ".date('H:i:s', strtotime($aux['horaentrada']))."</td>
                 <td> ".date('d/m/Y', strtotime($aux['horasaida']))."</td>
                 <td> ".date('H:i:s', strtotime($aux['horasaida']))."</td>
                 <input hidden name='id' id='id' value='".$aux["id"]."'>
            </form>
      </tr>
    ";
?>

        </table>
      </form>
      <!--Final do formulario -->

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