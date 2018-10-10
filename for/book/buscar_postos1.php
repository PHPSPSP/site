<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include_once('../config.php');
include('../privado.php');
?>
Posto:
<select class="form-control"  name="posto1" id="posto1">
<option value="">TODOS</option>
<?php $cliente = $_GET['cliente'];
$sql = "SELECT CODCLI, CODPOS, NOMEPOS FROM sarposto WHERE CODCLI = " . $cliente . " AND DTENCERRAM IS NULL ORDER BY NOMEPOS ASC";
$res = mysql_query($sql);
while ($lista_pos = mysql_fetch_array($res)) {
echo("<option value='".$lista_pos['CODPOS']."'>".$lista_pos['NOMEPOS']."</option>");}
?>
</select>