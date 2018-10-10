<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include_once('../config.php');

?>

<script type="text/javascript">
function validar(formulario){
    var formulario = document.getElementById('formulario');
    if(formulario.tipo2.value == ''){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    if(formulario.tipo2.value == 'Selecione...'){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    if(formulario.tipo2.value == 'selected'){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    return true;}
</script>

Atividade:<br />
<select class="form-control"  name="tipo2" id="tipo2">
<?php $nomeposto = $_GET['nomeposto'];
$sql = "SELECT CODPOS, NOMEPOS FROM sarposto WHERE CODCLI = $nomeposto AND DTENCERRAM IS NULL ORDER BY NOMEPOS ASC";
$res = mysql_query($sql);
while ($lista_pos = mysql_fetch_array($res)) {
echo("<option value='".$lista_pos['CODPOS']."'>".utf8_encode($lista_pos['NOMEPOS'])."</option>");}
?>
</select>