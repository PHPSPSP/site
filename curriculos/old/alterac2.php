<?
session_start();

include("privado.php");

if ($usuario != ''){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a essa lista.');
		window.location.href='index.php';
        </SCRIPT>");}else{};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$emailuser = $_SESSION['mail'];

$sql = "SELECT * FROM curric WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

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
        <h1 class="super hairline bordered bordered-normal"> Alteração de Currículos</h1>
      </header>
    </div>
  </div>
  <script type="text/javascript">  
function val(){  
if(document.getElementById('area4').checked){  
document.getElementById('vpatriinfo').style.display = 'block';  
}else {document.getElementById('vpatricurso').checked = false; document.getElementById('vpatricurso2').checked = false; document.getElementById('dvencto').value=""; document.getElementById('datav').style.display = 'none'; document.getElementById('vpatriinfo').style.display = 'none'; }}
function val2(){  
if(document.getElementById('vpatricurso').checked){  
document.getElementById('datav').style.display = 'block';  
}else {document.getElementById('datav').style.display = 'none';}}
function val3(){  
if(document.getElementById('vpatricurso2').checked){  
document.getElementById('datav').style.display = 'none';  
}else {document.getElementById('datav').style.display = 'block';}}

function val6(){  
Valor = document.getElementById('instrucao_cbb').value;
if (Valor=="Fundamental Incompleto, estudou até o ano " | Valor=="Medio Incompleto, estudou até o ano " | Valor=="Superior Incompleto, estudou até o ano "){ document.getElementById('dserie1').style.display = 'block'; document.getElementById('concl1').style.display = 'none'; document.getElementById('dconcl1').value="";}
else if (Valor=="Analfabeto" | Valor==""){ document.getElementById('dserie1').style.display = 'none'; document.getElementById('concl1').style.display = 'none'; document.getElementById('serie1').value=""; document.getElementById('dconcl1').value="";}
else {document.getElementById('serie1').value=""; document.getElementById('dserie1').style.display="none"; document.getElementById('concl1').style.display = 'block';}}

function valf(){  
Valor = document.getElementById('instrucao_cbb').value;
if (Valor=="Superior Incompleto, estudou até o ano " | Valor=="Superior Completo - concluiu em: "){ document.getElementById('facu').style.display = 'block';}
else {
document.getElementById('facu').style.display = 'none';document.getElementById('ncurso1').value="";document.getElementById('nest1').value="";}}

function val7(){  
Valor = document.getElementById('ensipos_cbb').value;
if (Valor=="Pos Graduacao Incompleta, estudou até o ano " | Valor=="Mestrado Incompleto, estudou até o ano " | Valor=="Doutorado Incompleto, estudou até o ano "){ document.getElementById('dserie2').style.display = 'block'; document.getElementById('concl2').style.display = 'none'; document.getElementById('dconcl2').value="";}
else if (Valor=="Nao Possui" | Valor==""){ document.getElementById('dserie2').style.display = 'none'; document.getElementById('concl2').style.display = 'none'; document.getElementById('serie2').value=""; document.getElementById('dconcl2').value="";}
else {document.getElementById('serie2').value=""; document.getElementById('dserie2').style.display="none"; document.getElementById('concl2').style.display = 'block';}}

function valp(){  
Valor = document.getElementById('ensipos_cbb').value;
if (Valor=="Nao Possui" | Valor==""){ document.getElementById('pos').style.display = 'none';document.getElementById('ncurso2').value="";document.getElementById('nest2').value="";}
else {document.getElementById('pos').style.display = 'block';}}

function limparRadios( radioname ){for( i = 0; i < document.form1[radioname].length; i++ )document.form1[radioname][i].checked = false;}

function limpa() {
if(document.getElementById('dvencto').value!="") {document.getElementById('dvencto').value="";}}


/*function val6(){ 
Valor = document.getElementById('instrucao').value;
if (Valor=="Fundamental Incompleto, estudou até o ano " | Valor=="Medio Incompleto, estudou até o ano " | Valor=="Superior Incompleto, estudou até o ano "){ document.getElementById('dserie1').style.display = 'block'; document.getElementById('concl1').style.display = 'none'; document.getElementById('dconcl1').value="";}
else if (Valor=="Analfabeto" | Valor==""){ document.getElementById('dserie1').style.display = 'none'; document.getElementById('concl1').style.display = 'none'; document.getElementById('serie1').value=""; document.getElementById('dconcl1').value="";}
else {document.getElementById('serie1').value=""; document.getElementById('dserie1').style.display="none"; document.getElementById('concl1').style.display = 'block';}}

function valf(){ 
Valor = document.getElementById('instrucao').value;
if (Valor=="Superior Incompleto, estudou até o ano " | Valor=="Superior Completo - concluiu em: "){ document.getElementById('facu').style.display = 'block';}
else {
document.getElementById('facu').style.display = 'none';document.getElementById('ncurso1').value="";document.getElementById('nest1').value="";}}

function val7(){ 
Valor = document.getElementById('ensipos').value;
if (Valor=="Pos Graduacao Incompleta, estudou até o ano " | Valor=="Mestrado Incompleto, estudou até o ano " | Valor=="Doutorado Incompleto, estudou até o ano "){ document.getElementById('dserie2').style.display = 'block'; document.getElementById('concl2').style.display = 'none'; document.getElementById('dconcl2').value="";}
else if (Valor=="Nao Possui" | Valor==""){ document.getElementById('dserie2').style.display = 'none'; document.getElementById('concl2').style.display = 'none'; document.getElementById('serie2').value=""; document.getElementById('dconcl2').value="";}
else {document.getElementById('serie2').value=""; document.getElementById('dserie2').style.display="none"; document.getElementById('concl2').style.display = 'block';}}

function valp(){ 
Valor = document.getElementById('ensipos').value;
if (Valor=="Nao Possui" | Valor==""){ document.getElementById('pos').style.display = 'none';document.getElementById('ncurso2').value="";document.getElementById('nest2').value="";}
else {document.getElementById('pos').style.display = 'block';}}

function limpa() {if(document.getElementById('dvencto').value!="") {document.getElementById('dvencto').value="";}}

function mostracurric(){document.getElementById('pop').style.display="block";};

$(function() {
	
	$('#reset').on('click', function(){
		$('label').removeClass('active');
			$('#dvencto, #anexfile, #anexcurric2, #tdeficiencia').val('');
			$('#datav, #vpatriinfo, #axfl, #deficienciadiv').hide();
			$("select").each(selectedIndex = 0);
	});

	$('#lblvpatricurso2').on('click', function(){
		$('#vpatricurso2').prop('checked', false);
		$('#dvencto').val('');
		$('#datav').hide();
	});

	$('#lblvpatricurso').on('click', function(){
		$('#vpatricurso').prop('checked', true);
		
		$('#datav').show();
	});

	$('#lblarea4').on('click', function(){
		$('#area4').prop('checked', !$('#area4').is(':checked'));
		
		if ($('#area4').is(':checked'))
		{
			$('#vpatriinfo').show();
		}
		else
		{
			$('#lblvpatricurso, #lblvpatricurso2').removeClass('active');
			$('#vpatricurso, #vpatricurso2').prop('checked', false);
			$('#dvencto').val('');
			$('#datav, #vpatriinfo').hide();
		}
	});

	$('#lblanexcurric').on('click', function(){
		$('#anexcurric').prop('checked', !$('#anexcurric').is(':checked'));
		
		if ($('#anexcurric').is(':checked'))
		{
			alert("Mesmo que você anexe seu currículo pronto, é importante que você preencha todas as informações no nosso formulário próprio, agilizando assim uma possível entrevista!");
			$('#axfl').show();
			$('#anexcurric2').val('anexo');
		}
		else
		{
			$('#anexfile, #anexcurric2').val('');
			$('#axfl').hide();
		}
	});

	$('#lbldeficis').on('click', function(){
		$(this).trigger('dblclick');
	}).on('dblclick', function() {
		$('#deficis').prop('checked', true);
		$('#deficienciadiv').show();
		$('#tdeficiencia').attr('required', 'required');
	});
	
	$('#lbldeficin').on('click', function(){
		$(this).trigger('dblclick');
	}).on('dblclick', function() {
		$('#deficin').prop('checked', true);
		$('#tdeficiencia').val('').removeAttr('required');
		$('#deficienciadiv').hide(); 
	});
	
	$('#regiao_cbb').on('change', function() {
		var v = $(this).find(':selected');
		
		$('#regiao').val(v.val()); 
	});
	
	$('#instrucao_cbb').on('change', function() {
		var v = $(this).find(':selected');
		
		$('#instrucao').val(v.val()); 
	});
	
	$('#ensipos_cbb').on('change', function() {
		var v = $(this).find(':selected');
		
		$('#ensipos').val(v.val()); 
	});
});*/

function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {src.value += texto.substring(0,1);}}

function PrimeiroFocus(){
document.form1.instrucao.focus()}
function PrimeiroFocus2(){
document.form1.ensipos.focus()}
function PrimeiroFocus3(){
document.form1.nome.focus()}

function fotostatus(){
	Valor = document.getElementById('status').value;
if (Valor=="") {document.getElementById('statusimg').innerHTML="<img width='40' height='40' src ='img/0.png'>"};
if (Valor=="Aguardando") {document.getElementById('statusimg').innerHTML="<img width='40' height='40' src ='img/a.png'>"};
if (Valor=="Admitido") {document.getElementById('statusimg').innerHTML="<img width='40' height='40' src ='img/b.png'>"};
if (Valor=="Reprovado") {document.getElementById('statusimg').innerHTML="<img width='40' height='40' src ='img/c.png'>"};
if (Valor=="Desistencia") {document.getElementById('statusimg').innerHTML="<img width='40' height='40' src ='img/d.png'>"};}

window.onload=function(){
   PrimeiroFocus();
   PrimeiroFocus2();
   PrimeiroFocus3();
   val();
   val2();
   val3();
   val6();
   valf();
   val7();
   valp();
   foto34();
}
</script>
  <div class="row ">
    <div class="row">
      <div class="col-md-12 text-left small-screen-left os-animation">
        <div class="col-md-2">
          <div id="foto342" style="width:3cm; height:4cm; float:left"><img src="img/<?php echo $linha['sexo'] == 'Masculino' ? "masc" : "fem"?>.jpg" width="113"/></div>
        </div>
        <div class="col-md-3"> <br> <strong>Cadastro nº</strong> <input  name="id" type="text" class="required input_field" id="id" size="10" value="<?php echo $linha['id'] ?>" readonly/> <br>
          <?php echo $linha['anexcurric'] == 'anexo' ? "<font color='#FF0000'>COM CURRÍCULO EM ANEXO!</font>" : ""; ?><br>
          <div class="row">
            <div class="col-md-2 text-left small-screen-left os-animation">
              <div id="statusimg" style="width:1cm; height:1cm;"><img src="img/<?php
 echo $linha['status'] == '' ? "a" : "";
 echo $linha['status'] == 'Aguardando' ? "a" : "";
 echo $linha['status'] == 'Admitido' ? "b" : "";
 echo $linha['status'] == 'Reprovado' ? "c" : "";
 echo $linha['status'] == 'Desistencia' ? "d" : "";
 ?>.png" width='38' height='38'/></div>
            </div>
            <div class="col-md-10 text-left small-screen-left os-animation"> 
              <select onChange="fotostatus()" name="status" class="required input_field" id="status">
                <option selected="selected" value="<?php echo $linha['status'] == '' ? "" : $linha['status']?>"><?php echo $linha['status'] == '' ? "Informe um Status": $linha['status']?></option>
                <option value="Aguardando">Aguardando</option>
                <option value="Admitido">Admitido</option>
                <option value="Reprovado">Reprovado</option>
                <option value="Desistencia">Desistencia</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
    <div style="clear:both"></div>
    <br>
    <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
    <div class="row">
      <div class="col-md-12">
        <h2 class="inner-caps ">Dados Pessoais</h2>
        <br>
      </div>
    </div>
    <form enctype="multipart/form-data" action="salvac.php" method="post" name="form1" id="form1" onSubmit="return validar(this);">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group form-icon-group">
            <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" size="60" required value="<?php echo $linha['nome'] ?>"/>
            <i class="fa fa-user"></i> </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="form-group form-icon-group">
            <input name="end" type="text"  class="form-control" placeholder="Endereço" id="end" size="50" required value="<?php echo $linha['end'] ?>"/>
            <i class="fa fa-envelope"></i></div>
        </div>
        <div class="col-md-3">
          <div class="form-group form-icon-group">
            <input name="no" type="text"  class="form-control" placeholder="N°" id="no" size="5" required value="<?php echo $linha['no'] ?>"/>
            <i class="fa fa-home"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group form-icon-group">
            <input type="text" id="cep" name="cep"  maxlength="10" size="15" class="form-control" placeholder="CEP" onKeyPress="formatar(this, '##.###-###'); return SomenteNumero(event)" required value="<?php echo $linha['cep'] ?>"/>
            <i class="fa fa-home"></i></div>
        </div>
        <div class="col-md-5">
          <div class="form-group form-icon-group">
            <input type="text" id="cidade" name="cidade"  class="form-control" placeholder="Cidade" size="30" required value="<?php echo $linha['cidade'] ?>"/>
            <i class="fa fa-envelope"></i></div>
        </div>
        <div class="col-md-3">
          <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>
            <input class="form-control" placeholder="Estado" >
            <div style="margin-top: -36px; margin-left: 29px; width: 75%;">
              <select name="estado" class="form-control" id="estado"  style="padding-top: 0;" required="required" >
                <option selected="selected" value="<?= $linha['estado'] ?>">
                <?= $linha['estado'] ?>
                </option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="bairro" name="bairro"  class="form-control" placeholder="Bairro" size="25" required value="<?php echo $linha['bairro'] ?>"/>
            <i class="fa fa-home"></i></div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="comp" name="comp"  class="form-control" placeholder="Complemento" size="15" value="<?php echo $linha['comp'] ?>"/>
            <i class="fa fa-home"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group"> <i class="fa fa-user"></i>
            <input class="form-control" placeholder="Estado Civil" />
            <div style="margin-top: -36px; margin-left: 23px; width: 87%;">
              <select name="civil" class="form-control" id="civil"  style="padding-top: 0;" required="">
                <option selected="selected" value="<?= $linha['civil'] ?>">
                <?= $linha['civil'] ?>
                </option>
                <option value="Casado">Casado</option>
                <option value="Solteiro">Solteiro</option>
                <option value="Divorciado">Divorciado</option>
                <option value="Viuvo">Viuvo</option>
                <option value="Outro">Outro</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="nascto" name="nascto"  maxlength="10" size="10" class="form-control" placeholder="Dt. Nascto." onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" required value="<?php echo $linha['nascto'] ?>"/>
            <i class="fa fa-calendar"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="cpf" name="cpf"  maxlength="14" size="15" class="form-control" placeholder="CPF" onKeyPress="formatar(this, '###.###.###-##'); return SomenteNumero(event)" required value="<?php echo $linha['cpf'] ?>"/>
            <i class="fa fa-keyboard-o"></i></div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="rg" name="rg"  maxlength="12" size="15" class="form-control" placeholder="RG" required value="<?php echo $linha['rg'] ?>"/>
            <i class="fa fa-keyboard-o"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="fone" name="fone"  class="form-control" placeholder="Telefone" value="<?php echo $linha['fone'] ?>"/>
            <i class="fa fa-phone"></i></div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="cel" name="cel"  class="form-control" placeholder="Celular" required value="<?php echo $linha['cel'] ?>"/>
            <i class="fa fa-mobile"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input type="text" id="recado" name="recado"  class="form-control" placeholder="Tel. Recado" value="<?php echo $linha['recado'] ?>"/>
            <i class="fa fa-phone"></i></div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-icon-group">
            <input name="email" type="text"  placeholder="E-mail" class="form-control" id="email" size="40" required value="<?php echo $linha['email'] ?>"/>
            <i class="fa fa-envelope"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group form-icon-group"> <i class="fa fa-user"></i>
            <input class="form-control" placeholder="Sexo"  >
            <div class="row">
              <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['sexo'] == 'Masculino' ? "active" : ""?>" for="sexom">
                  <input type="radio" name="sexo" value="Masculino" id="sexom" required <?php echo $linha['sexo'] == 'Masculino' ? "checked" : ""?>/>
                  Masculino</label>
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['sexo'] == 'Feminino' ? "active" : ""?>" for="sexof">
                  <input type="radio" name="sexo" value="Feminino" id="sexof" required <?php echo $linha['sexo'] == 'Feminino' ? "checked" : ""?>/>
                  Feminino</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group form-icon-group">
            <input name="idade" type="text"  class="form-control" placeholder="Idade" id="idade" size="10" required value="<?php echo $linha['idade'] ?>"/>
            <i class="fa fa-user"></i></div>
        </div>
        <div class="col-md-3">
          <div class="form-group form-icon-group">
            <input name="dependentes" type="text"  class="form-control" placeholder="Dependentes" id="dependentes" size="15" required   value="<?php echo $linha['dependentes'] ?>"/>
            <i class="fa fa-users"></i></div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2 text-center"> <img src="../assets/images/tb11.png" width="60" align="center"/> </div>
        <div class="col-md-7">
          <div class="form-group form-icon-group"> <i class="fa fa-wheelchair"></i>
            <input class="form-control" placeholder="Portador de Necessidades Especiais" >
            <div class="row">
              <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['deficiente'] == 'deficis' ? "active" : ""?>" for="deficis" id="lbldeficis">
                  <input name="deficiente"  type="radio" value="Possui deficiencia " id="deficis" required <?php echo $linha['deficiente'] == 'deficis' ? "checked" : ""?>/>
                  SIM</label>
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['deficiente'] == 'deficin' ? "active" : ""?>" for="deficin" id="lbldeficin">
                  <input name="deficiente"  type="radio" value="" id="deficin" required <?php echo $linha['deficiente'] == 'deficin' ? "checked" : ""?>/>
                  NÃO</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div id="deficienciadiv" style="display:none">
            <div class="form-group form-icon-group"> <i class="fa fa-wheelchair"></i>
              <input class="form-control" placeholder="Tipo" >
              <div style="margin-top: -36px; margin-left: 19px; width: 82%;">
                <select name="tdeficiencia" class="form-control" id="tdeficiencia"  style="padding-top: 0;">
                <option selected="selected" value="<?= $linha['tdeficiencia'] ?>"><?= $linha['tdeficiencia'] ?></option>
                  <option value="Auditiva">Auditiva</option>
                  <option value="Fisica">Fisica</option>
                  <option value="Mental">Mental</option>
                  <option value="Visual">Visual</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div style="clear:both"></div>
      </div>
      <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
        <h2 class="inner-caps ">Interesse Profissional</h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group"> <i class="fa fa-map-marker"></i>
              <input class="form-control" placeholder="Região em que deseja atuar" />
              <div style="margin-top: -36px; margin-left: 20px; width: 90%;">
                <input type="hidden" name="regiao" id="regiao" required value=""/>
                <select name="regiao_cbb" class="form-control" id="regiao_cbb"  style="padding-top: 0;" required="">
                <option selected="selected" value="<?= $linha['regiao'] ?>"><?= $linha['regiao'] ?></option>
                  <option value="Bauru">Bauru</option>
                  <option value="Garca">Garça</option>
                  <option value="Jundiai">Jundiaí</option>
                  <option value="Limeira">Limeira</option>
                  <option value="Marilia">Marília</option>
                  <option value="Pompeia">Pompéia</option>
                  <option value="S J Rio Pardo">S J Rio Pardo</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-icon-group"> <i class="fa fa-clock-o"></i>
              <input class="form-control" placeholder="Disponibilidade de Horário">
              <div class="row">
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['horario1'] == 'Manha, ' ? "active" : ""?>" for="horario1">
                    <input class="ckbhora" type="checkbox" name="horario1" value="Manha, " id="horario1" <?php echo $linha['horario1'] == 'Manha, ' ? "checked" : ""?>>
                    Manhã</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['horario2'] == 'Tarde, ' ? "active" : ""?>" for="horario2">
                    <input class="ckbhora" type="checkbox" name="horario2" value="Tarde, " id="horario2" <?php echo $linha['horario2'] == 'Tarde, ' ? "checked" : ""?>>
                    Tarde</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['horario3'] == 'Noite, ' ? "active" : ""?>" for="horario3">
                    <input class="ckbhora" type="checkbox" name="horario3" value="Noite" id="horario3" <?php echo $linha['horario3'] == 'Noite, ' ? "checked" : ""?>>
                    Noite</label>        
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-icon-group"> <i class="fa fa-cogs"></i>
          <input class="form-control" placeholder="Área de interesse" >
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="btn-group col-md-6 col-sm-6 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area5'] == 'Administrativo' ? "active" : ""?>" for="area5">
                    <input class="ckbarea" type="checkbox" name="area5" value="Administrativo" id="area5" <?php echo $linha['area5'] == 'Administrativo' ? "checked" : ""?>>
                    Administrativo</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area8'] == 'Jardinagem' ? "active" : ""?>" for="area8">
                    <input class="ckbarea" type="checkbox" name="area8" value="Jardinagem" id="area8" <?php echo $linha['area8'] == 'Jardinagem' ? "checked" : ""?>>
                    Jardinagem</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area1'] == 'Limpeza' ? "active" : ""?>" for="area1">
                    <input class="ckbarea" type="checkbox" name="area1" value="Limpeza" id="area1" <?php echo $linha['area1'] == 'Limpeza' ? "checked" : ""?>>
                    Limpeza</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area7'] == 'Manutencao' ? "active" : ""?>" for="area7">
                    <input class="ckbarea" type="checkbox" name="area7" value="Manutencao" id="area7" <?php echo $linha['area7'] == 'Manutencao' ? "checked" : ""?>>
                    Manutenção</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area3'] == 'Portaria' ? "active" : ""?>" for="area3">
                    <input class="ckbarea" type="checkbox" name="area3" value="Portaria" id="area3" <?php echo $linha['area3'] == 'Portaria' ? "checked" : ""?>>
                    Portaria</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area2'] == 'Servicos Gerais' ? "active" : ""?>" for="area2">
                    <input class="ckbarea" type="checkbox" name="area2" value="Servicos Gerais" id="area2" <?php echo $linha['area2'] == 'Servicos Gerais' ? "checked" : ""?>>
                    Serviços Gerais</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area6'] == 'Zeladoria' ? "active" : ""?>" for="area6">
                    <input class="ckbarea" type="checkbox" name="area6" value="Zeladoria" id="area6" <?php echo $linha['area6'] == 'Zeladoria' ? "checked" : ""?>>
                    Zeladoria</label>
                  <label class="btn btn-primary col-md-12 col-sm-12 col-xs-12 <?php echo $linha['area4'] == 'Vigilancia Patrimonial' ? "active" : ""?>" for="area4" id="lblarea4">
                    <input class="ckbarea" type="checkbox" name="area4" value="Vigilancia Patrimonial" id="area4" onload="check(0)" <?php echo $linha['area4'] == 'Vigilancia Patrimonial' ? "checked" : ""?>>
                    Vigilância</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div id="vpatriinfo" style="display: none;" class="form-group form-icon-group"> <i class="fa fa-keyboard-o"></i>
                <input class="form-control" placeholder="Possui curso de Vigilante?" >
                <div class="row">
                  <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                    <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['vpatricurso'] == ' - CNV com validade ate: ' ? "active" : ""?>" for="vpatricurso" id="lblvpatricurso">
                      <input name="vpatricurso" type="radio" value=" - CNV com validade ate: " id="vpatricurso" onload="check(0)" <?php echo $linha['vpatricurso'] == ' - CNV com validade ate: ' ? "checked" : ""?>/>
                      SIM</label>
                    <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6 <?php echo $linha['vpatricurso'] == ' - nao possui curso na area' ? "active" : ""?>" for="vpatricurso2" id="lblvpatricurso2">
                      <input name="vpatricurso" type="radio" value=" - nao possui curso na area" id="vpatricurso2" onClick="limpa()" onload="check(0)" <?php echo $linha['vpatricurso'] == ' - nao possui curso na area' ? "checked" : ""?>/>
                      NÃO</label>
                  </div>
                </div>
                <div id="datav" style="display: none; clear:both;" class="form-group form-icon-group"> <i class="fa fa-calendar"></i>
                  <input type="text" id="dvencto" name="dvencto"  maxlength="10" size="20" class="form-control" placeholder="Validade da CNV" onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" value="<?php echo $linha['dvencto'] ?>"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
        <h2 class="inner-caps ">Escolaridade</h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group"> <i class="fa fa-pencil-square-o"></i>
              <input class="form-control" placeholder="Grau de Instrução" >
              <div style="margin-top: -36px; margin-left: 26px; width: 86%;">
                <input type="hidden" name="instrucao" id="instrucao" required value=""/>
                <select name="instrucao_cbb" class="form-control" id="instrucao_cbb" onclick="val6(); valf();"  style="padding-top: 0;" />
		        <option selected="selected" value="<?= $linha['instrucao'] ?>"><?= $linha['instrucao'] ?></option>
                <option value="Analfabeto">Não Possui</option>
                <option value="Fundamental Incompleto, estudou até o ano ">Fundamental Incompleto</option>
                <option value="Fundamental Completo - concluiu em: ">Fundamental Completo</option>
                <option value="Medio Incompleto, estudou até o ano ">Médio Incompleto</option>
                <option value="Medio Completo - concluiu em: ">Médio Completo</option>
                <option value="Superior Incompleto, estudou até o ano ">Superior Incompleto</option>
                <option value="Superior Completo - concluiu em: ">Superior Completo</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="dserie1" style="display:none;" class="input-prepend">
              <div class="form-group form-icon-group">
                <input type="text" id="serie1" name="serie1"  class="form-control" placeholder="Estudou até o ano" size="5" value="<?php echo $linha['serie1'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="concl1" style="display:none;" class="input-prepend">
              <div class="form-group form-icon-group">
                <input type="text" id="dconcl1" name="dconcl1"  class="form-control" placeholder="Data de conclusão" size="10" value="<?php echo $linha['dconcl1'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="facu" style="display:none">
              <div class="form-group form-icon-group">
                <input type="text" id="ncurso1" name="ncurso1"  class="form-control" placeholder="Nome do curso" size="45" value="<?php echo $linha['ncurso1'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
              <div class="form-group form-icon-group">
                <input type="text" id="nest1" name="nest1"  class="form-control" placeholder="Nome da Instituição" size="45" value="<?php echo $linha['nest1'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group"> <i class="fa fa-pencil-square-o"></i>
              <input class="form-control" placeholder="Pós Graduação" >
              <div style="margin-top: -36px; margin-left: 26px; width: 88%;">
                <input type="hidden" name="ensipos" id="ensipos" required value=""/>
                <select name="ensipos_cbb" class="form-control" id="ensipos_cbb" onclick="val7(); valp();"  style="padding-top: 0;">
			      <option selected="selected" value="<?= $linha['ensipos'] ?>"><?= $linha['ensipos'] ?></option>
                  <option value="Nao Possui">Não Possui</option>
                  <option value="Pos Graduacao Incompleta, estudou até o ano ">Pós Graduação Incompleto</option>
                  <option value="Pos Graduacao Completa - concluiu em: ">Pós Graduação Completo</option>
                  <option value="Mestrado Incompleto, estudou até o ano ">Mestrado Incompleto</option>
                  <option value="Mestrado Completo - concluiu em: ">Mestrado Completo</option>
                  <option value="Doutorado Incompleto, estudou até o ano ">Doutorado Incompleto</option>
                  <option value="Doutorado Completo - concluiu em: ">Doutorado Completo</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="dserie2" style="display:none;" class="input-prepend">
              <div class="form-group form-icon-group">
                <input type="text" id="serie2" name="serie2"  class="form-control" placeholder="Estudou até o ano" size="5" value="<?php echo $linha['serie2'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="concl2" style="display:none;" class="input-prepend">
              <div class="form-group form-icon-group">
                <input type="text" id="dconcl2" name="dconcl2"  class="form-control" placeholder="Data de conclusão" size="10" value="<?php echo $linha['dconcl2'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="pos" style="display:none">
              <div class="form-group form-icon-group">
                <input type="text" id="ncurso2" name="ncurso2"  class="form-control" placeholder="Nome do curso" size="45" value="<?php echo $linha['ncurso2'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
              <div class="form-group form-icon-group">
                <input type="text" id="nest2" name="nest2"  class="form-control" placeholder="Nome da Instituição" size="45" value="<?php echo $linha['nest2'] ?>"/>
                <i class="fa fa-pencil-square-o"></i></div>
            </div>
          </div>
        </div>
        <br>
        <h2 class="inner-caps ">Cursos complementares</h2>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group form-icon-group">
              <input name="ncurso3" type="text"  placeholder="Nome do curso" class="form-control" id="ncurso3" size="45" value="<?php echo $linha['ncurso3'] ?>"/>
              <i class="fa fa-tasks"></i></div>
            <div class="form-group form-icon-group">
              <input name="nest3" type="text"  placeholder="Nome da Instituição" class="form-control" id="nest3" size="45" value="<?php echo $linha['nest3'] ?>"/>
              <i class="fa fa-tasks"></i></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input type="text" id="dconcl3" name="dconcl3"  class="form-control" placeholder="Data de conclusão" size="10" value="<?php echo $linha['dconcl3'] ?>"/>
              <i class="fa fa-tasks"></i></div>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group form-icon-group">
              <input name="ncurso4" type="text"  placeholder="Nome do curso" class="form-control" id="ncurso4" size="45" value="<?php echo $linha['ncurso4'] ?>"/>
              <i class="fa fa-tasks"></i></div>
            <div class="form-group form-icon-group">
              <input name="nest4" type="text"  placeholder="Nome da Instituição" class="form-control" id="nest4" size="45" value="<?php echo $linha['nest4'] ?>"/>
              <i class="fa fa-tasks"></i></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input type="text" id="dconcl4" name="dconcl4"  class="form-control" placeholder="Data de conclusão" size="10" value="<?php echo $linha['dconcl4'] ?>"/>
              <i class="fa fa-tasks"></i></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
        <h2 class="inner-caps ">Informática</h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input class="form-control" placeholder="Word" >
              <div class="row">       
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['word'] == 'basico' ? "active" : ""?>" for="basico_word">
                    <input name="word" id="basico_word" type="radio" value="basico" onDblClick="limparRadios('word');" onload="check(0)" <?php echo $linha['word'] == 'basico' ? "checked" : ""?>/>
                    Básico</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['word'] == 'intermediario' ? "active" : ""?>" for="intermediario_word">
                    <input name="word" id="intermediario_word" type="radio" value="intermediario" onDblClick="limparRadios('word');" onload="check(0)" <?php echo $linha['word'] == 'intermediario' ? "checked" : ""?>>
                    Médio</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['word'] == 'avancado' ? "active" : ""?>" for="avancado_word">
                    <input name="word" id="avancado_word" type="radio" value="avancado" onDblClick="limparRadios('word');" onload="check(0)" <?php echo $linha['word'] == 'avancado' ? "checked" : ""?>>
                    Avançado</label>
                </div>
              </div>
              <i class="fa fa-laptop"></i></div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input class="form-control" placeholder="Excel" >
              <div class="row">
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['excel'] == 'basico' ? "active" : ""?>" for="basico_excel">
                    <input name="excel" id="basico_excel" type="radio" value="basico" onDblClick="limparRadios('excel');" <?php echo $linha['excel'] == 'basico' ? "checked" : ""?>>
                    Básico</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['excel'] == 'intermediario' ? "active" : ""?>" for="intermediario_excel">
                    <input name="excel" id="intermediario_excel" type="radio" value="intermediario" onDblClick="limparRadios('excel');" <?php echo $linha['excel'] == 'intermediario' ? "checked" : ""?>>
                    Médio</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['excel'] == 'avancado' ? "active" : ""?>" for="avancado_excel">
                    <input name="excel" id="avancado_excel" type="radio" value="avancado" onDblClick="limparRadios('excel');" <?php echo $linha['excel'] == 'avancado' ? "checked" : ""?>>
                    Avançado</label>
                </div>
              </div>
              <i class="fa fa-laptop"></i></div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input class="form-control" placeholder="Powerpoint" >
              <div class="row">
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['powerpoint'] == 'basico' ? "active" : ""?>" for="basico_powerpoint">
                    <input name="powerpoint" id="basico_powerpoint" type="radio" value="basico" onDblClick="limparRadios('powerpoint');" <?php echo $linha['powerpoint'] == 'basico' ? "checked" : ""?>>
                    Básico</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['powerpoint'] == 'intermediario' ? "active" : ""?>" for="intermediario_powerpoint">
                    <input name="powerpoint" id="intermediario_powerpoint" type="radio" value="intermediario" onDblClick="limparRadios('powerpoint');" <?php echo $linha['powerpoint'] == 'intermediario' ? "checked" : ""?>>
                    Médio</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['powerpoint'] == 'avancado' ? "active" : ""?>" for="avancado_powerpoint">
                    <input name="powerpoint" id="avancado_powerpoint" type="radio" value="avancado" onDblClick="limparRadios('powerpoint');" <?php echo $linha['powerpoint'] == 'avancado' ? "checked" : ""?>>
                    Avançado</label>
                </div>
              </div>
              <i class="fa fa-laptop"></i></div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-icon-group">
              <input class="form-control" placeholder="Outlook" >
              <div class="row">
                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['outlook'] == 'basico' ? "active" : ""?>" for="basico_outlook">
                    <input name="outlook" id="basico_outlook" type="radio" value="basico" onDblClick="limparRadios('outlook');" <?php echo $linha['outlook'] == 'basico' ? "checked" : ""?>>
                    Básico</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['outlook'] == 'intermediario' ? "active" : ""?>" for="intermediario_outlook">
                    <input name="outlook" id="intermediario_outlook" type="radio" value="intermediario" onDblClick="limparRadios('outlook');" <?php echo $linha['outlook'] == 'intermediario' ? "checked" : ""?>>
                    Médio</label>
                  <label class="btn btn-primary col-md-4 col-sm-4 col-xs-4 <?php echo $linha['outlook'] == 'avancado' ? "active" : ""?>" for="avancado_outlook">
                    <input name="outlook" id="avancado_outlook" type="radio" value="avancado" onDblClick="limparRadios('outlook');" <?php echo $linha['outlook'] == 'avancado' ? "checked" : ""?>>
                    Avançado</label>
                </div>
              </div>
              <i class="fa fa-laptop"></i></div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group form-icon-group">
              <input name="info" type="text"  placeholder="Outros" class="form-control" id="info" size="50" value="<?php echo $linha['info'] ?>"/>
              <i class="fa fa-laptop"></i></div>
          </div>
        </div>
        <br>
        <h2 class="inner-caps ">Experiências profissionais</h2>
        <br>
        <div class="form-group form-icon-group">
          <input name="emp1" type="text" placeholder="Última Empresa" class="form-control" id="emp1" size="45" value="<?php echo $linha['emp1'] ?>"/>
          <i class="fa fa-briefcase"></i></div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group form-icon-group">
              <input name="cargo1" type="text" placeholder="Cargo Ocupado" class="form-control" id="cargo1" size="45" value="<?php echo $linha['cargo1'] ?>"/>
              <i class="fa fa-briefcase"></i></div>
          </div>
          <div class="col-md-4">
            <div class="form-group form-icon-group">
              <div class="row">
                <div class="btn-group col-md-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-12 <?php echo $linha['empat'] == '(emprego atual)' ? "active" : ""?>" for="empat">
                    <input type="checkbox" name="empat" id="empat" value="(emprego atual)" <?php echo $linha['empat'] == '(emprego atual)' ? "checked" : ""?>>
                    Emprego Atual</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group form-icon-group"><i class="fa fa-calendar"></i>
              <input class="form-control" placeholder="Período" >
            </div>
          </div>
          <div class="col-md-1"> de </div>
          <div class="col-md-3">
            <input type="text" id="pa1" name="pa1" class="form-control" maxlength="10" size="10" onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" value="<?php echo $linha['pa1'] ?>"/>
          </div>
          <div class="col-md-1">a </div>
          <div class="col-md-3">
            <input type="text" id="pa12" name="pa12" class="form-control" maxlength="10" size="10" onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" value="<?php echo $linha['pa12'] ?>"/>
          </div>
        </div>
        <br>
        <div class="form-group form-icon-group">
          <input name="emp2" type="text" placeholder="Penultima Empresa" class="form-control" id="emp2" size="45"         value="<?php echo $linha['emp2'] ?>"/>
          <i class="fa fa-briefcase"></i></div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group form-icon-group">
              <input name="cargo2" type="text" placeholder="Cargo Ocupado" class="form-control" id="cargo2" size="45" value="<?php echo $linha['cargo2'] ?>"/>
              <i class="fa fa-briefcase"></i></div>
          </div>
          <div class="col-md-4">
            <div class="form-group form-icon-group">
              <div class="row">
                <div class="btn-group col-md-12" data-toggle="buttons">
                  <label class="btn btn-primary col-md-12 <?php echo $linha['empat'] == '(emprego atual)' ? "active" : ""?>" for="empat2">
                    <input type="checkbox" name="empat2" id="empat2" value="(emprego atual)" <?php echo $linha['empat2'] == '(emprego atual)' ? "checked" : ""?>>
                    Emprego Atual</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group form-icon-group">
              <input class="form-control" placeholder="Período" >
              <i class="fa fa-calendar"></i></div>
          </div>
          <div class="col-md-1"> de</div>
          <div class="col-md-3">
            <input type="text" id="pa2" name="pa2" class="form-control" maxlength="10" size="10" onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" value="<?php echo $linha['pa2'] ?>"/>
          </div>
          <div class="col-md-1"> a </div>
          <div class="col-md-3">
            <input type="text" id="pa22" name="pa22" class="form-control" maxlength="10" size="10" onKeyPress="formatar(this, '##/##/####'); return SomenteNumero(event)" value="<?php echo $linha['pa22'] ?>"/>
          </div>
        </div>
        <br>
        <h2 class="inner-caps ">Informações complementares</h2>
        <br>
        <div class="form-group form-icon-group">
          <textarea id="mensagem" name="mensagem" rows="5" cols="55" class="form-control" placeholder="Mensagem" value="<?php echo $linha['mensagem'] ?>"><?php echo $linha['mensagem'] ?></textarea>
          <i class="fa fa-edit"></i></div>
      </div>
      <div style="clear:both"></div>
      
      <div style="text-align:center;"><br>
  		<div style="display:none">
			<input name="nomeuser" id="nomeuser" type="text" value="<? echo $_SESSION['nome'] ?>">
			<input name="image" id="image" type="text" value="<img src='img/teste0.png' width='18' height='18' title='Curriculo alterado por <? echo $_SESSION['nome'] ?> em  <? echo date("d/m/Y - H:i:s");  ?>'/>">
		</div>
        <br>
        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Salvar" style="width:30%" />
		<input type="button" class="btn btn-primary" name="volta" id="volta" value="Voltar" onclick="window.history.go(-1);" style="width:30%" />

      </div>
      <div id="messages" style="text-align:center"></div>
    </form>
  </div>    
         
<? include("roda.php"); ?>