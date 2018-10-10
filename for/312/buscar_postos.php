<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css' rel='stylesheet' />
<script src='http://code.jquery.com/jquery-1.12.4.min.js'></script>
<link href='select2/css/select2.min.css' rel='stylesheet' />
<script src='select2/js/select2.min.js'></script>

<script type="text/javascript">
$(document).ready(function() { $('.js-example-basic-single').select2(); });
</script>

Colaborador:<br />
<select class="js-example-basic-single form-control" required="required" name="colaborador" id="colaborador">
<option value="">Selecione...</option>
<?php
$cliente = $_GET['cliente'];
$sql = "SELECT NOMEVIGIL, CODCLI FROM sarvigil WHERE CODCLI = " . $cliente . " OR CODCLI = '-1' AND DTDEMISSAO IS NULL ORDER BY NOMEVIGIL ASC";
$res = @mysql_query($sql) or die(@mysql_error());
while ($lista_pos = mysql_fetch_array($res)) {
echo("<option value='".utf8_encode($lista_pos['NOMEVIGIL'])."'>".utf8_encode($lista_pos['NOMEVIGIL'])."</option>");}
?>
</select>