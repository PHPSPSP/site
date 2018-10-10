function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {src.value += texto.substring(0,1);}}


function check_date(date) {
   var err = 0
   string = date
   var valid = "0123456789/"
   var ok = "yes";
   var temp;
   for (var i=0; i< string.length; i++) {
     temp = "" + string.substring(i, i+1);
     if (valid.indexOf(temp) == "-1") err = 1;   }
   if (string.length != 10) err=1
   b = string.substring(3, 5)		// month
   c = string.substring(2, 3)		// '/'
   d = string.substring(0, 2)		// day 
   e = string.substring(5, 6)		// '/'
   f = string.substring(6, 10)	// year
   if (b<1 || b>12) err = 1
   if (c != '/') err = 1
   if (d<1 || d>31) err = 1
   if (e != '/') err = 1
   if (f<1850 || f>2050) err = 1
   if (b==4 || b==6 || b==9 || b==11){
     if (d==31) err=1   }
   if (b==2){
     var g=parseInt(f/4)
     if (isNaN(g)) {
         err=1      }
     if (d>29) err=1
     if (d==29 && ((f/4)!=parseInt(f/4))) err=1   }
   if (err==1) {
   	alert("Data inválida");
	formulario.data10.focus(); return false;
    return false;   }
   else {    return true;   }}


function UR_Start() 
{	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);}

function showFilled(Value) 
{return (Value > 9) ? "" + Value : "0" + Value;}

function validar(formulario){
var formulario = document.getElementById('formulario');
if(document.getElementById('cliente').value == ""){alert ('Informe o nome do CLIENTE.'); formulario.cliente.focus(); return false;}
return true;}

function enviar(){
	document.formulario.action = "geraphp.php";
	document.formulario.target = "";
	document.formulario.submit();}

function buscar_postos(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos.php?cliente='+cliente;
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);});}}
		  
$('#submit').on('click', function () {

if ($('#q01_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre UNIFORME.'); return false; }
if ($('#q02_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre IDENTIFICAÇÃO COLABORADOR.'); return false; }
if ($('#q03_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CARTÃO DE PONTO.'); return false; }
if ($('#q04_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EPI.'); return false; }
if ($('#q05_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre APRESENTAÇÃO PESSOAL.'); return false; }
if ($('#q06_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre POSTURA.'); return false; }
if ($('#q07_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ROTINA DE TRABALHO.'); return false; }
if ($('#q08_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EXECUÇÃO DAS ATIVIDADES.'); return false; }

if ($('#q09_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTROLE DOS PORTÕES.'); return false; }
if ($('#q10_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre IDENTIFICAÇÃO DAS PESSOAS.'); return false; }
if ($('#q11_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTATO INTERFONE - CLIENTE.'); return false; }
if ($('#q12_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RONDA.'); return false; }
if ($('#q13_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre COMUNICAÇÃO.'); return false; }
if ($('#q14_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TROCA DE TURNO.'); return false; }
if ($('#q15_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PORTARIA/ GUARITA.'); return false; }
if ($('#q16_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CORRESPONDÊNCIAS.'); return false; }
if ($('#q17_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIVRO DE OCORRÊNCIA.'); return false; }
if ($('#q18_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTROLE DE ACESSO.'); return false; }

if ($('#q19_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MANUTENÇÃO EQUIPAMENTOS.'); return false; }
if ($('#q20_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EQUIPAMENTOS/FERRAMENTAS.'); return false; }
if ($('#q21_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ARMAZENAMENTO DE PROD./ EQUIP..'); return false; }
if ($('#q22_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PRODUTOS.'); return false; }
if ($('#q23_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EQUIPAMENTOS.'); return false; }
if ($('#q24_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONSERVAÇÃO.'); return false; }
if ($('#q25_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOTO/ CARRO.'); return false; }
if ($('#q26_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ARMAZENAMENTO.'); return false; }
if ($('#q27_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre DILUIDOR DE PRODUTO.'); return false; }

if ($('#q28_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PORTÕES E GRADES.'); return false; }
if ($('#q29_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CERCA ELÉTRICA E CONCERTINA.'); return false; }
if ($('#q30_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CANCELA.'); return false; }

if ($('#q31_1').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES sobre CONTATO - CLIENTE/ SUPERVISÃO.'); return false; }
if ($('#q32_1').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES sobre SOLICITAÇÕES DO CLIENTE.'); return false; }
if ($('#q33_1').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES sobre RECLAMAÇÃO DO CLIENTE.'); return false; }

if ($('#q34_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTROLE DE CHAVES.'); return false; }
if ($('#q35_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ENTRADA E SAÍDA DE EQUIPAMENTOS.'); return false; }
if ($('#q36_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTROLE DE VEÍCULOS.'); return false; }
if ($('#q37_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CADASTRO E LIBERAÇÃO DE CRACHÁS.'); return false; }

if ($('#q38_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ASPECTO DO GRAMADO.'); return false; }
if ($('#q39_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS/ JANELAS/ PERSIANAS.'); return false; }
if ($('#q40_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre JARDINS E CANTEIROS.'); return false; }
if ($('#q41_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ÁRVORES.'); return false; }
if ($('#q42_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISO/ CHÃO/ CORREDORES.'); return false; }

if ($('#q43_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PRODUTOS QUÍMICOS - JARDINAGEM 1.'); return false; }
if ($('#q44_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PRODUTOS QUÍMICOS - JARDINAGEM 2.'); return false; }
if ($('#q45_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PRODUTOS QUÍMICOS - JARDINAGEM 3.'); return false; }
if ($('#q46_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIXEIRAS EXTERNAS/ CAÇAMBAS.'); return false; }

if ($('#q47_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PAREDES / PORTAS / CANTOS.'); return false; }
if ($('#q48_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS/ JANELAS/ PERSIANAS.'); return false; }
if ($('#q49_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TETO/LUMINÁRIA/AR CONDICIONADO.'); return false; }
if ($('#q50_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIXEIRAS.'); return false; }
if ($('#q51_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOBÍLIA/ TELEFONES.'); return false; }
if ($('#q52_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISO/ CHÃO/ CORREDORES.'); return false; }
if ($('#q53_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre BANHEIRO.'); return false; }
if ($('#q54_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MATERIAL DE HIGIENE.'); return false; }
if ($('#q55_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RALOS E GRELHAS - PORTARIA.'); return false; }
if ($('#q56_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESCADA DE ACESSO/ RAMPA.'); return false; }

if ($('#q57_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESCADA DE ACESSO/ RAMPA.'); return false; }
if ($('#q58_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOBÍLIA - BANCOS E CADEIRAS.'); return false; }
if ($('#q59_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PAREDES / PORTAS / CANTOS.'); return false; }
if ($('#q60_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS/ JANELAS/ PERSIANAS.'); return false; }
if ($('#q61_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TETO/ LUMINÁRIA/ AR CONDICIONADO.'); return false; }
if ($('#q62_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIXEIRAS.'); return false; }
if ($('#q63_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISO/ CHÃO/ CORREDORES.'); return false; }
if ($('#q64_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre BANHEIROS SOCIAIS.'); return false; }
if ($('#q65_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MATERIAL DE HIGIENE.'); return false; }
if ($('#q66_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RALOS E GRELHAS.'); return false; }
if ($('#q67_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESCADAS / CORRIMÕES.'); return false; }
if ($('#q68_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOBÍLIA - SALÃO DE FESTAS.'); return false; }

if ($('#q69_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESCADAS / CORRIMÕES - ENTRADA.'); return false; }
if ($('#q70_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RUAS E CALÇADAS EXTERNAS.'); return false; }
if ($('#q71_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre DESCARTE DE RESÍDUOS.'); return false; }
if ($('#q72_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre FACHADA/ PAREDE EXTERNA.'); return false; }
if ($('#q73_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS E JANELAS EXTERNAS.'); return false; }
if ($('#q74_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CALÇADAS E PISO EXTERNO.'); return false; }
if ($('#q75_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIXEIRAS EXTERNAS.'); return false; }
if ($('#q76_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RALOS E GRELHAS.'); return false; }
if ($('#q77_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOBÍLIA - SALÃO DE FESTAS.'); return false; }
if ($('#q78_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre QUIOSQUE - CHURRASQUEIRAS.'); return false; }
if ($('#q79_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ÁREA DE LAZER/ QUADRA/PÁTIO.'); return false; }
if ($('#q80_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISCINA E ARREDORES.'); return false; }
if ($('#q81_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESCADAS DE ACESSO.'); return false; }
if ($('#q82_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre BANHEIROS SOCIAIS.'); return false; }
if ($('#q83_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PLAYGROUND/ TANQUE DE AREIA.'); return false; }
if ($('#q84_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LUMINÁRIA/ AR CONDICIONADO.'); return false; }

if ($('#q85_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PAREDES / PORTAS / CANTOS/ BIOMBOS.'); return false; }
if ($('#q86_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS/ JANELAS/ PERSIANAS.'); return false; }
if ($('#q87_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TETO/ LUMINÁRIA/ AR CONDICIONADO.'); return false; }
if ($('#q88_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOBÍLIA E OBJETOS DECORATIVOS.'); return false; }
if ($('#q89_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EXTINTORES.'); return false; }
if ($('#q90_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISO/ CHÃO/ TACO/ TAPETE.'); return false; }

if ($('#q91_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PAREDES / PORTAS / CANTOS.'); return false; }
if ($('#q92_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VIDROS/ JANELAS.'); return false; }
if ($('#q93_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TETO/ LUMINÁRIA.'); return false; }
if ($('#q94_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIXEIRAS.'); return false; }
if ($('#q95_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MICTÓRIOS/ SANITÁRIOS.'); return false; }
if ($('#q96_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PIAS E LAVATÓRIO.'); return false; }
if ($('#q97_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PISO/ CHÃO/ CORREDORES.'); return false; }
if ($('#q98_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MATERIAL DE HIGIENE.'); return false; }
if ($('#q99_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre RALOS E GRELHAS.'); return false; }

if ($('#q100_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LÂMPADAS E ILUMINAÇÃO GERAL.'); return false; }
if ($('#q101_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre INTERRUPTORES.'); return false; }
if ($('#q102_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TORNEIRAS E PIAS.'); return false; }
if ($('#q103_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONTROLE DE GÁS.'); return false; }
if ($('#q104_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CAIXA DE INSPEÇÃO DE ÁGUA.'); return false; }
if ($('#q105_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TRATAMENTO DE PISCINA.'); return false; }
if ($('#q106_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre INTERFONES .'); return false; }
if ($('#q107_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EXTINTORES.'); return false; }
if ($('#q108_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre HIDRANTES.'); return false; }
if ($('#q109_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ELEVADOR.'); return false; }
if ($('#q110_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CERCA ELÉTRICA/ CONCERTINAS.'); return false; }
if ($('#q111_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ANTENAS.'); return false; }
if ($('#q112_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre TELHADO/ TETO.'); return false; }

if ($('#q113_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre UNIFORME / APRESENTAÇÃO PESSOAL.'); return false; }
if ($('#q114_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre IDENTIFICAÇÃO DO COLABORADOR.'); return false; }
if ($('#q115_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIVRO DE OCORRÊNCIA.'); return false; }
if ($('#q116_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ARMAMENTO.'); return false; }
if ($('#q117_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre LIVRO DE ACHADOS E PERDIDOS.'); return false; }

if ($('#q118_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESTACIONAMENTOS 1 E 2.'); return false; }
if ($('#q119_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CASINHA DO LIXO.'); return false; }
if ($('#q120_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ENTRADAS  3, 4 E 5.'); return false; }
if ($('#q121_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CANCELAS - ESTACIONAMENTOS 1 E 2.'); return false; }
if ($('#q122_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ENTRADA DE PEDESTRES - ESTAC. 2.'); return false; }
if ($('#q123_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESTACIONAMENTO 1 - GAIOLAS DE PAPELÃO.'); return false; }
if ($('#q124_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CORREDORES DAS COZINHAS.'); return false; }
if ($('#q125_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CANALETAS.'); return false; }
if ($('#q126_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre DOCA - GAIOLAS DE PAPELÃO.'); return false; }

if ($('#q127_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CANCELAS - ESTACIONAMNETO 1 E 2.'); return false; }
if ($('#q128_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MOTO.'); return false; }
if ($('#q129_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre GUARITA.'); return false; }
if ($('#q130_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre EQUIPAMENTOS.'); return false; }
if ($('#q131_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre OCORRÊNCIAS.'); return false; }

if ($('#q132_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre WC - ENTRADA PRÓX. DOCA.'); return false; }
if ($('#q133_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre WC - PORTÃO 3.'); return false; }
if ($('#q134_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CORREDORES - LADO A.'); return false; }
if ($('#q135_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CORREDORES - LADO B.'); return false; }
if ($('#q136_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PRAÇA DE ALIMENTAÇÃO.'); return false; }

if ($('#q137_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre SALA DE DESCANSO.'); return false; }
if ($('#q138_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre VESTIÁRIOS - MASC E FEMININO.'); return false; }
if ($('#q139_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre ESTOQUE.'); return false; }
if ($('#q140_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre MÁQUINAS E EQUIPAMENTOS.'); return false; }
if ($('#q141_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre SALA DA SUPERVISÃO.'); return false; }
if ($('#q142_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CARTÃO DE PONTO.'); return false; }

if ($('#q143_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre CONDIÇÕES DO SUPORTE DE CHECK LIST.'); return false; }
if ($('#q144_2').is(':checked') && $('#observacao').val() == '') {alert('Descreva em OBSERVAÇÕES a não conformidade sobre PREENCHIMENTO DIÁRIO DO CHECK LIST.'); return false; }

return true;
});


function mostrar(pergunta) {
	switch (pergunta) {

case 1:alert("Completo / Limpo e Passado / Bota/Sapato ");break;
case 2:alert("Está Portando O Crachá? Está Atualizado?");break;
case 3:alert("Preenchido Até A Data? Sem Rasuras?");break;
case 4:alert("Tem Os Epi´S? Usa de Forma Correta?  ");break;
case 5:alert("Unhas Limpas e Cortadas? Cabelos Penteados? Barba Feita (M) Ou Cabelo Preso (F)");break;
case 6:alert("Educação / Cortesia / Postura Profissional ");break;
case 7:alert("A Rotina de Trabalho Está No Posto? Está Atualizada?");break;
case 8:alert("Está Realizando A Rotina de Trabalho No Momento?");break;
case 9:alert("Tanto O Portão de Veículos Como de Pedestres Permanecem Fechados O Tempo Todo?");break;
case 10:alert("Todos As Pessoas Que Entram e Saem, São Devidamente Identificadas?");break;
case 11:alert("Ao Perguntar Sobre Moradores/Clientes Por Interfone, O Porteiro Falou Sobre Algo Particular Ou Repetiu O Seu Nome?");break;
case 12:alert(" A Ronda Programada Está Sendo Realizada?");break;
case 13:alert("Ao Falar Pessoalmente Ou Por Telefone, O Colaborador É Cordial e Discreto?");break;
case 14:alert("Durante A Troca, Existem Evidências de Comunicação e Troca de Informações Entre Os Porteiros? ");break;
case 15:alert("O Local Esta Limpo, Organizado e com Bom Aspecto? Tem Tv, Cobertor, Travesseiro  Ou Alimentos Expostos?");break;
case 16:alert(" Existem Correspondências? Quando Serão Entregues? Estão Organizadas? Existe Histórico de Reclamação de Entrega de Correspondência No L.O.?");break;
case 17:alert("Possui L.O.? Estão Anotando Devidamente Ocorrências e Registros Relevantes No L.O.?");break;
case 18:alert("Existem Formulários Ou Controles de Acesso Para Registro de Entradas e Saída? É Usado Corretamente?");break;
case 19:alert("Os Equipamentos e Ferramentas Necessárias Condizentes com O Posto Estão  No Local?");break;
case 20:alert("Existe Algum Equipamento Parado Que Necessita de Manutenção? Se Sim, Já Foi Comunicado Essa Necessidade?");break;
case 21:alert("Os Produtos Estão Armazenados e Dispostos de Forma Segura e Correta? O Local Fica Trancado Ou com Acesso Restrito À Agente de Limpeza?");break;
case 22:alert("Os Produtos Estão Dentro do Prazo de Validade e Existe Qtde.  Suficiente Para O Local?");break;
case 23:alert("Os Equipamentos São Condizentes com O Posto? Estão  No Local?");break;
case 24:alert("Caneta, Rádio, Lanterna, Guarda-Chuva Estão Conservados e Identificados?");break;
case 25:alert("Os Veículos Estão com A Manutenção Em Dia? Houve Alguma Observação Pelo Usuário?");break;
case 26:alert("Os Equipamentos/ Materiais  Estão Armazenados No Local e da Forma Correta?");break;
case 27:alert("Existe Diluidor? Está Sendo Inspecionado Regularmente Pelo Fornecedor?");break;
case 28:alert("Estão Em Bom Estado? É Necessário Acionar A Manutenção?");break;
case 29:alert("Estão Em Bom Estado? É Necessário Acionar A Manutenção?");break;
case 30:alert("Estão Em Bom Estado? É Necessário Acionar A Manutenção?");break;
case 31:alert("A Supervisão Oper. Teve Contato Direto com O Cliente Nesta Data?");break;
case 32:alert("O Cliente Fez Algum Tipo de Solicitação Direta Aos Colaboradores? Se Sim, Qual?");break;
case 33:alert("O Cliente Fez Alguma Reclamação Direta Aos Colaboradores? Se Sim, Qual?");break;
case 34:alert("Existe Controle de Chaves No Posto? Se Sim, Está Sendo Registrado Corretamente?");break;
case 35:alert("Existe Controle de Liberação de Entrada e Saída de Equipamentos do Cliente? Se Sim, Está Sendo Registrado/ Controlado Corretamente?");break;
case 36:alert("Existe Controle de Liberação de Entrada e Saída de Veículos do Cliente? Se Sim, Está Sendo Registrado/ Controlado Corretamente?");break;
case 37:alert("Existe Controle de Liberação de Crachá Ou Documento de Identificação No Cliente? Se Sim, Está Sendo Registrado/ Controlado Corretamente?");break;
case 38:alert("A Grama Está Bem Aparada? Existe Mato Alto?");break;
case 39:alert("A Grama Está Bem Cuidada? Aspecto Saudável?");break;
case 40:alert("As Plantas - Flores, Arbustos, Etc. Estão Bem Cuidadas e Podadas?");break;
case 41:alert("As Árvores Estão Podadas e Bem Cuidadas?");break;
case 42:alert("Existem Excesso Ou Volume de Folhas e Galhos No Chão/ Ruas/ Calçadas?");break;
case 43:alert("No Posto Existe Produtos Químicos Como: Mata-Mato, Adubos e Mata Formigas?");break;
case 44:alert("Existem Epis Apropriados Para O Manuseio dos Produtos Químicos de Jardinagem?");break;
case 45:alert("O Local de Armazenamento dos Produtos Químicos É Apropriado?");break;
case 46:alert("Existe Local Adequado Para Acondicionar Os Resíduos de Varrição e Poda? ");break;
case 47:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 48:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 49:alert("Existem Manchas / Pó/ Teia Ou Traça?");break;
case 50:alert("Existem Manchas Removíveis / Pó / Quantidade Alta de Resíduos?");break;
case 51:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 52:alert("Existem Marcas/ Respingos /Manchas Removíveis / Pó /Está  Impermeabilizado ?");break;
case 53:alert("Existem Resíduos /Manchas Removíveis /Odores/ Lixeiras  com Qtde. Alta Resíduo?");break;
case 54:alert("Estão Abastecidos / Sem Excesso  / Dispensers Em Funcionamento?");break;
case 55:alert("Existem Resíduos /Manchas Removíveis / Odores / Detritos?");break;
case 56:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 57:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 58:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 59:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 60:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 61:alert("Existem Manchas / Pó/ Teia Ou Traça?");break;
case 62:alert("Existem Manchas Removíveis / Pó / Quantidade Alta de Resíduos?");break;
case 63:alert("Existem Marcas/ Respingos /Manchas Removíveis / Pó /Está  Impermeabilizado ?");break;
case 64:alert("Existem Resíduos /Manchas Removíveis /Odores/ Lixeiras  com Qtde. Alta Resíduo?");break;
case 65:alert("Estão Abastecidos / Sem Excesso  / Dispensers Em Funcionamento?");break;
case 66:alert("Existem Resíduos /Manchas Removíveis / Odores / Detritos?");break;
case 67:alert("Existem Resíduos /Manchas Removíveis /Odor / Pó Ou Detritos?");break;
case 68:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 69:alert("Existem Resíduos /Manchas Removíveis /Odor / Pó Ou Detritos?");break;
case 70:alert("Existem Excesso de Folhas/ Terra/ Barro/ Resíduos de Construção/ Etc.?");break;
case 71:alert("Existe Caçamba Ou Área Para Descarte de Resíduos Volumosos? Se Sim, Está Organizado?");break;
case 72:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 73:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 74:alert("Existem Marcas/ Respingos /Manchas Removíveis / Pó /Está  Impermeabilizado ?");break;
case 75:alert("Existem Manchas Removíveis / Pó / Quantidade Alta de Resíduos?");break;
case 76:alert("Existem Resíduos /Manchas Removíveis / Odores / Detritos?");break;
case 77:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 78:alert("Existem Resíduos Em Excesso/ Manchas Removíveis / Poeira/ Teia?");break;
case 79:alert("Existem Excesso de Folhas/ Terra/ Bancos, Mesas e Assentos Estão Limpos?");break;
case 80:alert("Existem Excesso de Folhas/ Terra/ Sujidades/ Cadeiras e Espreguiçadeiras Estão Limpas?");break;
case 81:alert("Existem Excesso de Folhas/ Terra/ Bancos, Mesas e Assentos Estão Limpos?");break;
case 82:alert("Existem Resíduos /Manchas Removíveis /Odores/ Lixeiras  com Qtde. Alta Resíduo?");break;
case 83:alert("Estão Em Bom Estado? Necessitam de Reparos?");break;
case 84:alert("Existem Manchas / Pó/ Teia Ou Traça?");break;
case 85:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 86:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 87:alert("Existem Manchas / Pó/ Teia Ou Traça?");break;
case 88:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 89:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia?");break;
case 90:alert("Existem Marcas/ Respingos /Manchas Removíveis / Pó /Está  Impermeabilizado ?");break;
case 91:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 92:alert("Existem Marcas de Mãos/Respingos / Sem Manchas/ Pó / Teia/ Traça?");break;
case 93:alert("Existem Manchas / Pó/ Teia Ou Traça?");break;
case 94:alert("Existem Manchas Removíveis / Pó / Quantidade Alta de Resíduos?");break;
case 95:alert("Existem Marcas/Respingos / Sem Manchas/ Pó / Sujidades/ Odores?");break;
case 96:alert("Existem Resíduos /Manchas Removíveis /Odor / Pó Ou Detritos/ Manchas No Espelho?");break;
case 97:alert("Existem Marcas/ Respingos /Manchas Removíveis / Pó /Está  Impermeabilizado ?");break;
case 98:alert("Estão Abastecidos / Sem Excesso  / Dispensers Em Funcionamento?");break;
case 99:alert("Existem Resíduos /Manchas Removíveis / Odores / Detritos?");break;
case 100:alert("Existem Lâmpadas Queimadas Ou Iluminação com Defeito?");break;
case 101:alert("Os Interruptores Estão Em Bom Estado? Funcionando Corretamente?");break;
case 102:alert("Existem Pias Ou Torneiras Quebradas, Gotejando Ou com Necessidade de Reparos?");break;
case 103:alert("O Controle do Gás Está Sendo Realizado Corretamente? Existe Algum Formulário de Controle?");break;
case 104:alert("O Controle da Água Está Sendo Realizado Corretamente? Existe Algum Formulário de Controle?");break;
case 105:alert("A Piscina Está Sendo Tratada Adequadamente?");break;
case 106:alert("Os Interfones Estão Funcionando Corretamente? Houve Alguma Reclamação?");break;
case 107:alert("Os Extintores Estão Bem Instalados, No Prazo de Validade e Desobstruídos?");break;
case 108:alert("Os Hidrantes Estão Em Funcionamento e Desobstruídos?");break;
case 109:alert("O Elevador Está Em Pleno Funcionamento? Conservado? Necessita de Reparos?");break;
case 110:alert("Estão Em Bom Estado? Necessitam de Reparos Ou Apresentam Defeito?");break;
case 111:alert("Estão Em Bom Estado? Necessitam de Reparos Ou Apresentam Defeito?");break;
case 112:alert("Necessitam de Reparo?");break;
case 113:alert("Está Completo/ Limpo/ Alinhado?  Higiene e Aparência?");break;
case 114:alert("Está Portando O Crachá? ");break;
case 115:alert("Está No Local Adequado? Possui Informações Completas Relevantes?");break;
case 116:alert("Munição/ Limpeza e Conservação da Arma?");break;
case 117:alert("Está No Local Adequado? Possui Informações Completas Relevantes?");break;
case 118:alert("Foi Realizada A Varreção?");break;
case 119:alert("Foi Realizada A Coleta/ Limpeza e Lavagem?");break;
case 120:alert("Foi Realizada A Varreção/ Coleta das Lixeiras/ Bituqueiras?");break;
case 121:alert("Foi Realizada A Varreção?");break;
case 122:alert("Foi Realizada A Varreção?");break;
case 123:alert("Está Organizada?");break;
case 124:alert("Foi Realizada A Limpeza e Lavagem?");break;
case 125:alert("Foi Realizada A Limpeza?");break;
case 126:alert("Está Organizada?");break;
case 127:alert("Estão Funcionando?");break;
case 128:alert("Abastecida/ Sem Danos/ Em Pleno Funcionamento?");break;
case 129:alert("Está Organizada? Limpa? Possui Livro de Ocorrências/ com Devidas Anotações?");break;
case 130:alert("Estão Em Pleno Funcionamento? Em Bom Estado de Conservação?");break;
case 131:alert("Estão Em Pleno Funcionamento? Em Bom Estado de Conservação?");break;
case 132:alert("Lavado/Dispenser Abastecido/ Odor Agradável/ Coletores - Lixos Retirados/ Existem Manchas Removíveis/ Espelhos Limpos/ Cantoneiras Limpas/ Odorizador Funcionando/ Boxes dos Sanitários Limpos?");break;
case 133:alert("Lavado/Dispenser Abastecido/ Odor Agradável/ Coletores - Lixos Retirados/ Existem Manchas Removíveis/ Espelhos Limpos/ Cantoneiras Limpas/ Odorizador Funcionando/ Boxes dos Sanitários Limpos?");break;
case 134:alert("Piso Limpo,Lixeiras Organizadas, Limpeza: Portas de Acesso,Caixas de Hidrante, Extintores, Estofados,Bancos,Vasos, Tapetes e Pilares. Mobilia Organizada?");break;
case 135:alert("Piso Limpo,Lixeiras Organizadas, Limpeza: Portas de Acesso,Caixas de Hidrante, Extintores, Estofados,Bancos,Vasos, Tapetes e Pilares. Mobilia Organizada?");break;
case 136:alert("Piso Limpo, Coletores Obrigados Limpos e Organizados, Limpeza das Mesas, Cadeiras , Estofados, Pilares e Vasos. Devolução da Louça do Dia Anterior?");break;
case 137:alert("O  Espaço Está Limpo e Organizado? Existem Objetos Pessoais Visíveis No Local?");break;
case 138:alert("O  Espaço Está Limpo e Organizado? Existem Objetos Pessoais Visíveis No Local?");break;
case 139:alert("O  Espaço Está Limpo e Organizado? Demonstra Falha Na Reposição de Produtos?");break;
case 140:alert("Estão Em Bom Estado de Conservação e Funcionamento?  É Necessário Acionar A Manutenção?");break;
case 141:alert("O  Espaço Está Limpo e Organizado? Existem Objetos Pessoais Visíveis No Local?");break;
case 142:alert("Estão Preenchidos - Entrada e Saída/ Sem Rasuras/ Estão Assinados No Prazo Estabelecido de Entrega?");break;
case 143:alert("O suporte do check list está em boas condições?");break;
case 144:alert("O check list está preenchido corretamente em todos os campos?");break;
			
		default:
		break;
	}
}