<?
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

session_start();

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
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
          <h1 class="super hairline bordered bordered-normal"> Relatório de Visitas</h1>
        </header>
      </div>
    </div>
      <div class="row">

<div class="col-md-12 text-left small-screen-center "  >

       <h2>Contador Geral</h2><br>

<?

include("../config.php");

if (!function_exists('timediff'))
{    function timediff($t1, $t2)
    {   $t1 = strtotime($t1);
        $t2 = strtotime($t2);
        if ($t2 < $t1)
        {   $aux = $t1;
            $t1 = $t2;
            $t2 = $aux;     }
        return $t2 - $t1;   }}
		
		$supervisor = $_GET['s'];
		if ($supervisor==""){$supervisor2 = '';}else{$supervisor2 = 'AND NOMESUP = "'.$supervisor.'"';};
		$cliente = $_GET['c'];		
		if ($cliente==""){$cliente2 = '';}else{$cliente2 = 'AND NOMEPOSTO = "'.$cliente.'"';};		
		
$inicioo = $_GET['inicio'];
$finall = $_GET['final'];

if ($inicioo!="") {$inicio = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['inicio'])));} else {};
if ($finall!="") {$final = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['final'])));} else {};
		
		$sql = 'SELECT * FROM visita WHERE (DATA BETWEEN "'.$inicio.'" AND "'.$final.'") '.$supervisor2.' '.$cliente2.'  ORDER BY NOMEPOSTO, DATA, HORAC, HORAS, NOMESUP';
		$query = mysql_query($sql);

$visitas = array();
$supervisores = array();
$clientes = array();

while ($row = mysql_fetch_array($query))
{    $visitas[] = $row;
    $supervisores[$row['nomesup']][$row['nomeposto']] = 0;}

while ($visita = current($visitas))
{    $prev = prev($visitas);

    if (!$prev)
    {   $prev = null;
        reset($visitas);    }
    else
    {   next($visitas);    }

    $next = next($visitas);
    if (!$next)
    {   $next = null;
        end($visitas);    }
    else
    {   prev($visitas);    }

    if (!$prev)
    {   $supervisores[$visita['nomesup']][$visita['nomeposto']]++;
        $totalVisitas++;    }
    else
    {   $t1 = $prev['data'] . ' ' . $prev['horas'];
        $t2 = $visita['data'] . ' ' . $visita['horac'];

        if ($prev['nomeposto'] == $visita['nomeposto'])
        {   if (((timediff($t1, $t2) / 60) / 60) > 1)
            {   $supervisores[$visita['nomesup']][$visita['nomeposto']]++;
                $totalVisitas++;    }}
        else
        {   $supervisores[$visita['nomesup']][$visita['nomeposto']]++;
            $totalVisitas++;        }}
    next($visitas);}

// Apresentação.

echo '<pre style=" font-family:Tahoma, Geneva, sans-serif; background:#FFF; color:#000">';
foreach ($supervisores as $supervisor => $clientes)
{   echo $supervisor . '<br>';
    foreach ($clientes as $cliente => $total)
    {   echo "\t" . $cliente . ' = ' . $total;
        echo '<br>';    }
    echo '<br>';}
echo '</pre>';

echo '<hr>';

echo 'Total de visitas: ' . $totalVisitas . '<br>';

/*echo '<pre>';
var_dump($supervisores);
echo '</pre>';*/

?>
      <br />
      <form enctype="multipart/form-data" action="" method="post" name="formulario" id="formulario" onsubmit="return validar(this);">
        <input type="button" name="pdfsgi" id="pdfsgi" value="Gerar PDF" onclick="window.print();" />
        <input type="button" style="display:none" name="pdfcliente" id="pdfcliente" value="Gerar PDF - cópia para cliente" />
      </form>
      </div>
<div class="col-md-12 text-left small-screen-center "  >
      <br />
      <br />
      <? echo "$ver_for_10"; ?><br />
      <br />
      </div>

      </div>
    </div>
  </section>
</article>
</div>


<? include("../roda.php"); ?>