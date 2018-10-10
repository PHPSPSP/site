<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css' rel='stylesheet' />
<script src='http://code.jquery.com/jquery-1.12.4.min.js'></script>
<link href='../312/select2/css/select2.min.css' rel='stylesheet' />
<script src='../312/select2/js/select2.min.js'></script>

<script type="text/javascript">
$(document).ready(function() { $('.js-example-basic-single').select2(); });
</script>
Cliente:
<select class="js-example-basic-single form-control" name="nomeposto" id="nomeposto" onchange="buscar_postos()">
<option selected="selected" value="selected">Selecione...</option>
<?php
$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC");
while ($lista_cli = mysql_fetch_array($consulta)) {
echo("<option value='".$lista_cli['CODCLI']."'>".$lista_cli['NOMECLI']." - ".$lista_cli['CODCLI']."</option>");}
?>
</select>