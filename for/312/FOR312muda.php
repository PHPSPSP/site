<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "lid" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-short-top element-medium-bottom not-condensed">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Solicitação de Pagamento</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="geraphp.php">
          
          <div class="row element-short-bottom">
            <div class="col-md-4 col-sm-2 col-xs-6 text-left small-screen-center"> Empresa:
              <select name="empresa" id="empresa" required="required" class="form-control">
                  <option selected="selected" value="">Selecione...</option>
                  <?php echo $lista_empresas; ?>
               </select>
            </div>
            <div class="col-md-4 col-sm-2 col-xs-6 text-left small-screen-center"> Status Solicitação:<br>
              <input class="form-control" required="required"  type="text" value="">
            </div>
          <div class="col-md-4 col-sm-2 col-xs-6 text-left small-screen-center" data-toggle="buttons"> Departamento Solicitante:<br>
                <input class="form-control" name="deparsolicitante" required="required" type="text" value="" id="deparsolicitante"/>
            </div>
          </div>
          <div class="row element-short-bottom">
            <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Data do Pagamento:
              <input class="form-control" required="required" type="date" name="d" id="datapagamento"/>
            </div>
			<div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Centro de Custo:
              <input class="form-control" required="required" type="text" name="CC" id="CC"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-left small-screen-center"> Valor Solicitado:
              <input class="form-control" required="required" type="text" name="valsolcita" id="valsolcita"/>
            </div>
          </div>
   <div class="row element-short-bottom">
			   <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-cente"> Colaborador Solicitante:
              <input class="form-control" name="colasolicitante" required="required" type="text" value="" id="colasolicitante"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Natureza Financeira:
              <input class="form-control" name="natufinanceira" required="required" type="text" value="" id="natufinanceira"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 text-left small-screen-center"> Resposável pela Autorização:
              <input class="form-control" name="resautoriza" required="required" type="text" value="" id="resautoriza"/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 text-left small-screen-center"> Autorização Financeira:
              <input class="form-control" name="autofinanceira" required="required" type="text" value="" id="autofinanceira"/>
            </div>
          </div>
          <br />
          <div class="row element-short-bottom">
			<div id="load_postos" class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center"> Descrição dos Pagamentos:<br>
              <textarea name="descpagamento" id="descpagamento" required="required" class="col-md-12" rows="3"></textarea>
            </div>
			<div id="load_postos2" class="col-md-12 col-sm-12 col-xs-12 text-left small-screen-center"> Destinatário dos Pagamentos:<br>
              <textarea  name="destpagamento" id="destpagamento" required="required" class="col-md-12" rows="1"></textarea>
            </div>
          </div>
          
		<br />
	<br />
<br />

          <div class="row ">
            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="Modo de Pagamento" readonly style="BACKGROUND-COLOR: antiquewhite; text-align: center;">

         <div class="row">
            
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="deposito">
             <input name="deposito" id="deposito" type="radio" required value="confirma">Depósito</label>
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="cheque">
             <input name="cheque" id="cheque" type="radio" required value="confirma">Cheque</label>
               <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="especie">
             <input name="especie" id="especie" type="radio" required value="confirma">Espécie</label>
        </div>

        <div class="row">
            
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-6" for="docted">
             <input name="docted" id="docted" type="radio" required value="confirma">DOC/TED</label>
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="boleto">
             <input name="boleto" id="boleto" type="radio" required value="confirma">Boleto</label>
               <label class="btn btn-success col-md-4 col-sm-4 col-xs-6" for="outro">
             <input name="outro" id="outro" type="radio" required value="confirma">Outro</label>
        </div>

            <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
            <input class="form-control" placeholder="Informações Sobre o Déposito" readonly style="BACKGROUND-COLOR: antiquewhite;text-align: center;">


             <div class="row">
            
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="deposito">
             <input name="deposito" id="deposito" type="radio" required value="confirma">Depósito</label>
              <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="cheque">
             <input name="cheque" id="cheque" type="radio" required value="confirma">Cheque</label>
               <label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="especie">
             <input name="especie" id="especie" type="radio" required value="confirma">Espécie</label>
        </div>

           <div class="row ">
            <div class="col-md-6 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Banco" />
             </div>
             <div class="col-md-6 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Agência" />
             </div>
             <div class="col-md-12 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Conta" />
            </div>
        </div>
      </div>
                <div class="col-md-4 col-sm-6 col-xs-6 text-center small-screen-center">
              <input class="form-control" placeholder="Comprovação de Recibo" readonly style="BACKGROUND-COLOR: antiquewhite;text-align: center;">
        <div class="row ">
            <div class="col-md-6 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Visto do Recebedor" />
             </div>
             <div class="col-md-6 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Data do Recebimento" />
             </div>
             <div class="col-md-12 col-sm-2 col-xs-2 text-center small-screen-center">
              <input class="form-control" placeholder="Nome do Recebedor" />
            </div>
        </div>
      </div>

          <div class="col-md-12 text-center small-screen-center">
            <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" style="width:30%" />
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Enviar" onClick="return validar(this);" style="width:30%">
          </div>
        </form>
        <br />
        <br />
        <div class="row ">
          <div class="col-md-12 text-left small-screen-center"> <br />
            <br />
            <? echo "$ver_for_312"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>

<script type="text/javascript">

function buscar_postos(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
      }
    }
	
function buscar_postos2(){
      var cliente = $('#cliente').val();
      if(cliente){
        var url = 'buscar_postos2.php?cliente='+encodeURIComponent(cliente);
        $.get(url, function(dataReturn) {
          $('#load_postos2').html(dataReturn);
        });
      }
    }
	
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
                src.value += texto.substring(0,1);
  }}

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
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}

    $(function() {
        $('#cliente').on('change', function() {
            var _this = $(this).find(':selected');
            $('#cliente1').val(_this.data('campo'));
        });
    });
</script>
<? include("../roda.php"); ?>