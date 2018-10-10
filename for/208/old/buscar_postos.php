<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include_once('../config.php');
include('../privado.php');
?>

<script type="text/javascript">
function validar(formulario){
    var formulario = document.getElementById('formulario');

    if(formulario.data10.value == ''){alert("Informe a DATA DA MOVIMENTAÇÃO.");formulario.data10.focus();return false;}

    if(formulario.tipagemvalida.value == 'contem' && document.formulario.tipagem.options[tipagem.selectedIndex].value==''){alert("Informe o TIPO SANGUÍNEO."); formulario.tipagem.focus(); return false;}

    if(formulario.movimentacao.value == ''){alert("Informe o MOTIVO DA MOVIMENTAÇÃO."); formulario.movimentacao.focus(); return false;}

if(formulario.movimentacao.value == 'Alteracao de Funcao: ' && formulario.colsubs.value == ''){alert("Informe o NOME do COLABORADOR substiuído."); formulario.colsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Substituicao de Colaborador' && formulario.colsubs.value == ''){alert("Informe o NOME do COLABORADOR substiuído."); formulario.colsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Cobertura de Ferias' && formulario.colsubs.value == ''){alert("Informe o NOME do COLABORADOR substiuído."); formulario.colsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Alteracao de Funcao: ' && formulario.recolsubs.value == ''){alert("Informe o CODIGO RE do colaborador substiuído."); formulario.recolsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Cobertura de Ferias' && formulario.recolsubs.value == ''){alert("Informe o CODIGO RE do colaborador substiuído."); formulario.recolsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Substituicao de Colaborador' && formulario.recolsubs.value == ''){alert("Informe o CODIGO RE do colaborador substiuído."); formulario.recolsubs.focus(); return false;}
    if(formulario.movimentacao.value == 'Outro: ' && formulario.outromotiv.value == ''){alert("Informe outro MOTIVO."); formulario.outromotiv.focus(); return false;}
    if(formulario.movimentacao.value == 'Alteracao de Funcao: ' && formulario.novafunc.value == ''){alert("Informe a NOVA FUNÇÃO."); formulario.novafunc.focus(); return false;}
    if(formulario.movimentacao.value == 'Alteracao de Funcao: ' && formulario.funcsal.value == ''){alert("Informe a NOVA FUNÇÃO."); formulario.funcsal.focus(); return false;}
    if(document.getElementById('radio1').checked == false && document.getElementById('radio2').checked == false ) {alert ('Informe se foi a PEDIDO DO CLIENTE.');return false;}
    if(document.getElementById('radio2').checked == true && formulario.clisabe.value == ''){alert("Informe se o CLIENTE sabe dessa alteração."); formulario.clisabe.focus(); return false;}
    if(document.getElementById('radio3').checked == false && document.getElementById('radio4').checked == false ) {alert ('Informe se haverá SUBSTITUTO no posto atual.');return false;}
    if(document.getElementById('radio4').checked == true && formulario.nomesubs.value == ''){alert("Informe o NOME do COLABORADOR substituto."); formulario.nomesubs.focus(); return false;}
    if(document.getElementById('radio4').checked == true && formulario.resubs.value == ''){alert("Informe o CODIGO RE do colaborador substituto."); formulario.resubs.focus(); return false;}
    if(document.getElementById('radio71').checked == false && document.getElementById('radio81').checked == false ) {alert ('Informe se o colaborador movimentado realizará SERVIÇOS DE CONDUTOR.');return false;}
    if(document.getElementById('radio7').checked == false && document.getElementById('radio8').checked == false ) {alert ('Informe se haverá alteração nos BENEFÍCIOS oferecidos pela empresa.');return false;}
    if( document.getElementById('radio7').checked == true &&
        document.getElementById('vr').checked == false &&
        document.getElementById('sal').checked == false &&
        document.getElementById('dt').checked == false &&
        document.getElementById('ad').checked == false &&
        document.getElementById('ad2').checked == false &&
        document.getElementById('ad3').checked == false &&
        document.getElementById('ad4').checked == false &&
        document.getElementById('ad5').checked == false &&
        document.getElementById('in').checked == false &&
        document.getElementById('pr').checked == false &&
        document.getElementById('gp').checked == false &&
        document.getElementById('gs').checked == false &&
        document.getElementById('vt').checked == false &&
        document.getElementById('cb').checked == false &&
        document.getElementById('he').checked == false &&
        document.getElementById('ot').checked == false )
        {alert("Selecione os BENEFÍCIOS que sofrerão alterações."); return false;}

if(document.getElementById('vr').checked == true && formulario.vrt.value == '') {alert('Descreva essa alteração de VALE REFEIÇÃO.'); formulario.vrt.focus(); return false;}
if(document.getElementById('sal').checked == true && formulario.salt.value == '') {alert ('Descreva essa alteração de SALÁRIO.'); formulario.salt.focus(); return false;}
if(document.getElementById('dt').checked == true && formulario.dtt.value == '') {alert ('Descreva essa alteração de DIÁRA DE TRANSPORTE.'); formulario.dtt.focus(); return false;}
if(document.getElementById('ad').checked == true && formulario.adt.value == '') {alert ('Descreva essa alteração de ADICIONAL CONDUTOR DE VEÍCULO.'); formulario.adt.focus(); return false;}
if(document.getElementById('ad2').checked == true && formulario.adt2.value == '') {alert ('Descreva essa alteração de ADICIONAL MONITORAMENTO.'); formulario.adt2.focus(); return false;}
if(document.getElementById('ad3').checked == true && formulario.adt3.value == '') {alert ('Descreva essa alteração de ADICIONAL DUPLA FUNÇÃO.'); formulario.adt3.focus(); return false;}
if(document.getElementById('ad4').checked == true && formulario.adt4.value == '') {alert ('Descreva essa alteração de ADICIONAL CONDUTOR DE ANIMAIS.'); formulario.adt4.focus(); return false;}
if(document.getElementById('ad5').checked == true && formulario.adt5.value == '') {alert ('Descreva essa alteração de ADICIONAL VIGILANTE LÍDER.'); formulario.adt5.focus(); return false;}
if(document.getElementById('in').checked == true && formulario.int.value == '') {alert ('Descreva essa alteração de INSALUBRIDADE.'); formulario.int.focus(); return false;}
if(document.getElementById('pr').checked == true && formulario.prt.value == '') {alert ('Descreva essa alteração de PERICULOSIDADE.'); formulario.prt.focus(); return false;}
if(document.getElementById('gp').checked == true && formulario.gpt.value == '') {alert ('Descreva essa alteração de GRATIFICAÇÃO POSTO.'); formulario.gpt.focus(); return false;}
if(document.getElementById('gs').checked == true && formulario.gst.value == '') {alert ('Descreva essa alteração de GRATIFICAÇÃO PESSOAL.'); formulario.gst.focus(); return false;}
if(document.getElementById('vt').checked == true && formulario.vtt.value == '') {alert ('Descreva essa alteração de VALE TRANPORTE.'); formulario.vtt.focus(); return false;}
if(document.getElementById('cb').checked == true && formulario.cbt.value == '') {alert ('Descreva essa alteração de CESTA BÁSICA.'); formulario.cbt.focus(); return false;}
if(document.getElementById('he').checked == true && formulario.het.value == '') {alert ('Descreva essa alteração de HORA EXTRA - ARTIGO 71.'); formulario.het.focus(); return false;}
if(document.getElementById('ot').checked == true && formulario.ott.value == '') {alert ('Descreva essa alteração de OUTROS.'); formulario.ott.focus(); return false;}

    if(formulario.empresa.value == ''){alert("Informe a EMPRESA.");return false;    }
    if(formulario.atualsup.value == ''){alert("Informe a SUPERVISÃO ATUAL."); formulario.atualsup.focus();return false;    }
    if(formulario.novasup.value == ''){alert("Informe a NOVA SUPERVISÃO."); formulario.novasup.focus();return false;    }
    if(formulario.cliatual.value == ''){alert("Informe o NOME do CLIENTE ATUAL."); formulario.cliatual.focus(); return false;}
    if(formulario.clinovo.value == ''){alert("Informe o NOME do NOVO CLIENTE."); formulario.clinovo.focus(); return false;}
    if(formulario.posto1.value == ''){alert("Informe o POSTO ATUAL."); formulario.posto1.focus(); return false;}
    if(formulario.posto2.value == ''){alert("Informe o NOVO POSTO."); formulario.posto2.focus(); return false;}

    ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
	
	document.getElementById("submit").disabled = 'true';
	
	return true;}

</script>

Posto:<br />
<select class="form-control"  name="posto2" id="posto2" required="required" onchange="tipagemtroca()">
<?php $clinovo = $_GET['clinovo'];
$sql = "SELECT P.NOMEPOS, P.CODPOS, C.NOMECLI, C.CODCLI FROM sarclien C, sarposto P WHERE C.NOMECLI = \"".htmlentities($clinovo)."\" and P.CODCLI = C.CODCLI AND P.DTENCERRAM IS NULL ORDER BY P.NOMEPOS ASC";
$res = mysql_query($sql);
while ($lista_pos = mysql_fetch_array($res)) {
echo("<option value='".utf8_encode($lista_pos['NOMEPOS'])."'>".utf8_encode($lista_pos['NOMEPOS'])." - ".utf8_encode($lista_pos['CODPOS'])."</option>");}
?>
</select><!-- - ".utf8_encode($lista_pos['CODPOS'])."-->

