<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");
include("config.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	};

?>
<? include("topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Cadastro de Matrículas - Curso de Portaria </h1>
            </header>
          </div>
        </div>
        <div class="row"><form enctype="multipart/form-data" action="envia.php" method="post" name="form1" id="formulario" onsubmit="return validar(this);">
          <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
            
              <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s"> <strong>Dados pessoais:</strong><br />
                <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="candidato">Colaborador:</label>
                  <br />
                  <select name="candidato" class="required input_field" id="candidato">
                    <?php
$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$consulta=mysql_query("SELECT V.CODVIGIL, V.NOMEVIGIL, V.CGC, V.TELEFONE, C.NOMECLI, T.DESCRICAO SUPERVISOR FROM sarvigil V, sarclien C, sartab T WHERE C.CODCLI = V.CODCLI AND (T.CODTAB LIKE CONCAT('130%', V.AREA) OR T.CODTAB LIKE CONCAT('1300%', V.AREA) OR T.CODTAB LIKE CONCAT('13000%', V.AREA)) AND V.DTDEMISSAO IS NULL GROUP BY V.CODVIGIL ORDER BY V.NOMEVIGIL ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$candidato = $dados['NOMEVIGIL'];
$idvigil = $dados['CODVIGIL'];
$cgc = $dados['CGC'];
$telefone = $dados['TELEFONE'];
$nomecli = $dados['NOMECLI'];
$supervisor = $dados['SUPERVISOR'];
echo("<option value='".$candidato."' data-re='" . $idvigil . "' data-cgc='" . $cgc . "' data-telefone='" . $telefone . "' data-cliente='" . $nomecli . "' data-supervisor='" . $supervisor . "'>".$candidato."</option>");}
?>
                  </select>
                </div>
                <div class="col-md-2 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="re">RE:</label>
                  <br />
                  <input name="re" type="text" class="required input_field" id="re" readonly size="8" />
                </div>
                <div class="col-md-10 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="email">Email:</label>
                  <br />
                  <input name="email" type="text" class="required input_field" id="email" size="35" />
                </div>
                <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="fone">Telefone:</label>
                  <br />
                  <input name="fone" type="text" class="required input_field" id="fone" size="25" />
                </div>
                <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="cel">Celular:</label>
                  <br />
                  <input name="cel" type="text" class="required input_field" id="cel" size="25" />
                </div>
                <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="supervisor">Supervisor:</label>
                  <br />
                  <input name="supervisor" type="text" class="required input_field" readonly id="supervisor" size="55" />
                </div>
                <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <label for="cliente">Posto de Trabalho:</label>
                  <br />
                  <input name="cliente" type="text" class="required input_field" readonly id="cliente" size="55" />
                </div>
              </div>
              <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                <label for="propaganda"><strong>Como chegou até aqui?</strong></label>
                <br />
                Selecione abaixo como o candidato se informou sobre o curso (selecione mais de uma opção se houver).<br />
                <div class="col-md-6 btn-group btn-knowledge" data-toggle="buttons"><br />
                  <label class="btn btn-primary col-md-12 col-sm-6 col-xs-6">
                    <input type="checkbox" name="Facebook" value="Facebook" id="Facebook">
                    Facebook</label>
                  <label class="btn btn-primary col-md-12 col-sm-6 col-xs-6">
                    <input type="checkbox" name="Google" value="Google" id="Google" />
                    Pesquisa Online</label>
                  <label class="btn btn-primary col-md-12 col-sm-6 col-xs-6">
                    <input type="checkbox" name="Cartazes" value="Cartazes" id="Cartazes">
                    Cartazes</label>
                  <!-- <label class="btn btn-primary col-md-4 col-sm-6 col-xs-6">
                  <input type="checkbox" name="TV" value="TV" id="TV" />
                  Comercial de TV</label>
                <label class="btn btn-primary col-md-4 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Jornal" value="Jornal" id="Jornal" >
                  Jornal</label>
                <label class="btn btn-primary col-md-4 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Revista" value="Revista" id="Revista"/>
                  Revista</label>-->
                  <label class="btn btn-primary col-md-12 col-sm-6 col-xs-6">
                    <input type="checkbox" name="Indicacao" value="Indicação" id="Indicacao" >
                    Indicação</label>
                </div>
                
              </div>
              
            
          </div>
          <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">                  <br />
                  <br />
                  
                  <button class="btn btn-info" type="submit" name="submit" id="submit"  value="Enviar" > Enviar </button>

                </div></form>
          <div class="col-md-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s"> <br />
            <br />
            Cadastro Curso Portaria<br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<script type="text/javascript">
$(function() {
		
		$('#candidato').on("change", function() {
			
			var v = $('#candidato').find(':selected');
			
			$('#re').val(v.data('re'));
			$('#cliente').val(v.data('cliente'));
			$('#supervisor').val(v.data('supervisor'));	
			$('#fone').val(v.data('telefone'));
		});	
	});

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h',
	classname: 'ddsmoothmenu',
	contentsource: "markup"
})

function validar(form1){
	if(form1.candidato.value == ''){alert("O campo NOME é obrigatório.");return false;}	
	if(form1.supervisor.value == ''){alert("O campo SUPERVISOR é obrigatório.");return false;}
	if(form1.cliente.value == ''){alert("O campo POSTO DE TRABALHO é obrigatório.");return false;}
	
	if (document.getElementById('Facebook').checked == false &&
	document.getElementById('Google').checked == false &&
	document.getElementById('Cartazes').checked == false &&
	document.getElementById('Indicação').checked == false )
	{alert ('Por favor informe COMO CONHECEU O SITE DA SPSP.');return false;}
		
    return true;}

function check_date(date) {
   var err = 0
   string = date
   var valid = "0123456789/"
   var ok = "yes";
   var temp;
   for (var i=0; i< string.length; i++) {
     temp = "" + string.substring(i, i+1);
     if (valid.indexOf(temp) == "-1") err = 1;
   }
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
     if (d==31) err=1
   }
   if (b==2){
     var g=parseInt(f/4)
     if (isNaN(g)) {
         err=1 
     }
     if (d>29) err=1
     if (d==29 && ((f/4)!=parseInt(f/4))) err=1
   }
   if (err==1) {
   	alert("Data inválida");
	formulario.data10.focus(); return false;
    return false;
   }
   else {
    return true;
   }}

function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {	src.value += texto.substring(0,1); }}
</script>
<? include("roda.php"); ?>
