<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<link rel='icon' type='image/png' href='../../assets/images/SPSP-favicon.png'>
<title>Grupo SPSP - Curso de Portaria</title>
<meta name='description' content='SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade.'/>
<meta name='keywords' content='trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa'/>
<meta name='copyright' content='SPSP'/>
<meta name='author' content='SPSP'/>
<meta name='email' content='spsp@spsp.com.br'/>
<meta name='Charset' content='UTF-8'/>
<meta name='Distribution' content='Global'/>
<meta name='Rating' content='General'/>
<meta name='Robots' content='INDEX,FOLLOW'/>
<meta name='Revisit-after' content='31 Days'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta content='yes' name='apple-mobile-web-app-capable'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
</head>
<body class='normal-header'>
<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="../../index.php" class="navbar-brand"> <img src="../../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"> </a> </div>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li class="nav-highlight"><a href="../../index.php">Retornar ao site</a> </li>
      </ul>
    </nav>
  </div>
</div>
<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-small-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Ficha de Inscrição</h1>
            </header>
          </div>
        </div>

        <div class="row element-medium-bottom">
          <div class="text-center col-md-12 small-screen-center element-short-bottom">
            Preencha o formulário abaixo para se cadastrar ao Curso de Formação de Agente de Portaria e aguarde que em breve você será procurado pela SPSP para efetivar sua matrícula e confirmar a data do curso.
          </div>
          
  <div class="col-md-12 text-center">
<img src="../../assets/images/uploads/spsp-curso.png" width="400" /><br /><br />
  </div>

<form enctype="multipart/form-data" action="envia_e.php" method="post" name="form1" id="form1" onsubmit="return validar(this);">

<div class="col-md-12">
  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom" style="border-right:1px #6c6c6c solid;">

    <div class="col-md-12">
<strong>Dados pessoais:</strong><br />
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><label for="nome">Nome:</label><br />
<input name="nome" type="text" class="col-md-12 required input_field" id="nome" />
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="end">Endereço:</label><br />
<input name="end" type="text" class="col-md-12 required input_field" id="end" />
    </div>

    <div class="col-md-2 col-sm-6 col-xs-6">
<label for="no">Nº:</label><br />
<input name="no" type="text" class="col-md-12 required input_field" id="no" />
    </div>

    <div class="col-md-5 col-sm-6 col-xs-6">
<label for="cep">CEP:</label><br />
<input name="cep" class="col-md-12 required input_field" id="cep" maxlength="10" type="text" onkeypress="formatar(this, '##.###-###'); return SomenteNumero(event)"/>      
    </div>

    <div class="col-md-5 col-sm-12 col-xs-12">
<label for="comp">Complemento:</label><br />
<input name="comp" type="text" class="col-md-12 required input_field" id="comp" size="15" />    
    </div>

    <div class="col-md-5 col-sm-12 col-xs-12">
<label for="bairro">Bairro:</label><br />
<input name="bairro" type="text" class="col-md-12 required input_field" id="bairro" />
    </div>

    <div class="col-md-5 col-sm-10 col-xs-10">
<label for="cidade">Cidade:</label><br />
<input name="cidade" type="text" class="col-md-12 required input_field" id="cidade" />      
    </div>

    <div class="col-md-2 col-sm-2 col-xs-2">
<label for="nome">Estado:</label><br />
<select name="estado" class="col-md-12 required input_field" id="estado">
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
<option selected="selected" value="SP">SP</option>
<option value="TO">TO</option>
</select>    
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
<label for="nome">Estado civil:</label><br />
<select name="civil" class="col-md-12 required input_field" id="civil">
<option selected="selected" > Selecione...</option>
<option value="Casado"> Casado</option>
<option value="Solteiro"> Solteiro</option>
<option value="Divorciado"> Divorciado</option>
<option value="Viuvo"> Viuvo</option>
<option value="Outro"> Outro</option>
</select>    
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
<label for="nascto">Data de nascimento:</label><br />
<input name="nascto" type="text" maxlength="10" id="nascto" class="col-md-12 required input_field" onkeypress="formatar(this, '##/##/####')" />      
    </div>

    <div style="clear:both"></div>

    <div class="col-md-4 col-sm-12 col-xs-12">
<label for="nome">Telefone residencial:</label><br />
<input type="text" id="fone" name="fone" class="col-md-12 required input_field" />    
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
<label for="nome">Telefone celular:</label><br />
<input type="text" id="cel" name="cel" class="col-md-12 required input_field" />  
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
<label for="nome">Telefone recado:</label><br />
<input type="text" id="recado" name="recado" class="col-md-12 required input_field" />  
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
<label for="nome">CPF:</label><br />
<input type="text" id="cpf" name="cpf" class="col-md-12 required input_field" maxlength="14" onkeypress="formatar(this, '###.###.###-##')"/>  
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
<label for="nome">RG:</label><br />
<input type="text" id="rg" name="rg" class="col-md-12 required input_field" />  
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="nome">E-mail:</label><br />
<input name="email" type="text" class="col-md-12 required input_field" id="email" />  
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
<label for="sexo">Sexo:</label><br />
<input name="sexo" type="radio" value="Masculino" class="col-md-1"/><span class="col-md-3">MASC</span><span class="col-md-4"></span>
<input name="sexo" type="radio" value="Feminino" class="col-md-1"/><span class="col-md-3">FEM</span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
 <label for="dependentes">Idade:</label><br />
<input type="text" id="idade" name="idade" class="col-md-12 required input_field" /> 
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
<label for="dependentes">Dependentes:</label><br />
<input type="text" id="dependentes" name="dependentes" class="col-md-12 required input_field" />  
    </div>

  </div>

  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom">

    <div class="col-md-12 col-sm-12 col-xs-12">
<strong>Escolaridade:</strong>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><label for="instrucao">Grau de Instrução:</label><br />
<select name="instrucao" class="col-md-12 " id="instrucao" onclick="val6(); valf();">
<option selected="selected"></option>
<option value="Analfabeto">Não Possui</option>
<option value="Fundamental Incompleto, estudou até o ano ">Fundamental Incompleto</option>
<option value="Fundamental Completo - concluiu em: ">Fundamental Completo</option>
<option value="Medio Incompleto, estudou até o ano ">Médio Incompleto</option>
<option value="Medio Completo - concluiu em: ">Médio Completo</option>
<option value="Superior Incompleto, estudou até o ano ">Superior Incompleto</option>
<option value="Superior Completo - concluiu em: ">Superior Completo</option>
</select>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" id="dserie1" style="display:none;">
<label for="serie1">Até que ano estudou:</label><br />
<input name="serie1" id="serie1" type="text" class="col-md-6"/>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" id="concl1" style="display:none;">
<label for="dconcl1">Data de conclusão:</label><br />
<input name="dconcl1" id="dconcl1" type="text" class="col-md-6"/>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" id="facu" style="display:none">
<label for="ncurso1">Nome do curso:</label><br />
<input name="ncurso1" type="text" id="ncurso1" class="col-md-12"/>
<br />
<label for="nest1">Nome da Instituição:</label><br />
<input name="nest1" type="text" id="nest1" class="col-md-12"/>
    </div>

<div class="col-md-12 col-sm-12 col-xs-12">
<br /><br /><strong>PNE:</strong>
    </div>

        <div class="col-md-7 col-sm-7 col-xs-12">
<br /><span style="float:left"><img src="../../assets/images/tb11.png" width="50" align="left" /></span>
<span style="float:right"><label for="nome">Possui Necessidades Especiais:</label><br />
<input name="deficiente" type="radio" value="Possui deficiencia " onclick="valdf();" id="deficis" class="col-md-1"/><span class="col-md-3">SIM</span><span class="col-md-3"></span>
<input name="deficiente" type="radio" value=""  id="deficin"  onclick="valdf2();" class="col-md-1"/><span class="col-md-4">NÃO</span></span>
    </div>

    <div class="col-md-5 col-sm-5 col-xs-12" id="deficienciadiv" style="display:none;">
Qual o tipo?<br />
<select name="tdeficiencia" id="tdeficiencia" />
<option selected value="selected">Selecione...</option>
<option value="Auditiva">Auditiva</option>
<option value="Fisica">Fisica</option>
<option value="Mental">Mental</option>
<option value="Visual">Visual</option>
</select>  
    </div>   

  </div>
</div>

<div class="col-md-12" style="border-top:1px #6c6c6c solid;">
  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom">

    <div class="col-md-12 col-sm-12 col-xs-12">
<strong>Cursos complementares:</strong>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><label for="ncurso3">Nome do curso:</label><br />
<input name="ncurso3" type="text" id="ncurso3" class="col-md-12"/>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
<label for="nest3">Nome da Instituição:</label><br />
<input name="nest3" type="text" id="nest3" class="col-md-12"/>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
<label for="dconcl3">Data de conclusão:</label><br />
<input name="dconcl3" type="text" id="dconcl3" class="col-md-12"/>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><br /><label for="ncurso4">Nome do curso:</label><br />
<input name="ncurso4" type="text" id="ncurso4" class="col-md-12"/>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
<label for="nest4">Nome da Instituição:</label><br />
<input name="nest4" type="text" id="nest4" class="col-md-12"/>
    </div>  

    <div class="col-md-6 col-sm-12 col-xs-12">
<label for="dconcl4">Data de conclusão:</label><br />
<input name="dconcl4" type="text" id="dconcl4" class="col-md-12"/>
    </div>  

  </div>
  
  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom" style="border-left:1px #6c6c6c solid;">

    <div class="col-md-12 col-sm-12 col-xs-12">
<strong>Experiências profissionais:</strong>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><label for="emp1">Última Empresa:</label><br />
<input name="emp1" type="text" id="emp1" class="col-md-12"/>
    </div>    

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="cargo1">Cargo Ocupado:</label><br />
<input name="cargo1" type="text" id="cargo1" class="col-md-12"/>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="pa1">Período:</label><br />
<span class="col-md-1">de</span> <input name="pa1" type="text" id="pa1" class="col-md-3"/>
<span class="col-md-1">a</span> <input name="pa12" type="text" id="pa12" class="col-md-3"/><span class="col-md-4"></span>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<input type="checkbox" name="empat" id="empat" value="(emprego atual)" class="col-md-1">
<label for="empat">Emprego Atual</label>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><br /><label for="emp2">Penúltima Empresa:</label><br />
<input  name="emp2" type="text" id="emp2" class="col-md-12"/>
    </div>    

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="cargo2">Cargo Ocupado:</label><br />
<input name="cargo2" type="text" id="cargo2" class="col-md-12"/>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<label for="pa2">Período:</label><br />
<span class="col-md-1">de</span> <input name="pa2" type="text" id="pa2" class="col-md-3"/>
<span class="col-md-1">a</span> <input name="pa22" type="text" id="pa22" class="col-md-3"/><span class="col-md-4"></span>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<input type="checkbox" id="empat2" name="empat2" value="(emprego atual)" class="col-md-1">
<label for="empat2">Emprego Atual</label>
    </div>

  </div>
</div> 

<div class="col-md-12" style="border-top:1px #6c6c6c solid;">
  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom">

    <div class="col-md-12 col-sm-12 col-xs-12">
<strong>Como chegou até aqui?</strong><br />
Selecione abaixo como você se informou sobre o "Curso de Formação de Agente de Portaria" (selecione mais de uma opção se quiser).
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><label>
<input type="checkbox" name="Facebook" value="Facebook" id="Facebook" />
Facebook</label>
<br />
<label>
<input type="checkbox" name="Google" value="Google" id="Google" />
Pesquisa online (Google, Yahoo, Bing, etc)</label>
<br />
<label>
<input type="checkbox" name="Cartazes" value="Cartazes" id="Cartazes" />
Cartazes</label>
<br />
<label>
<input type="checkbox" name="Indicacao" value="Indicação" id="Indicacao" />
Indicação de amigo</label>
    </div>

  </div>

  <div class="col-md-6 col-sm-12 col-xs-12 element-short-top element-short-bottom" style="border-left:1px #6c6c6c solid;">

    <div class="col-md-12 col-sm-12 col-xs-12">
<input type="checkbox" name="anexcurric" id="anexcurric" onclick="val4();" onload="check(0)">
<input hidden="" type="text" name="anexcurric2" id="anexcurric2"/>
<label>Anexar Curriculo (opcional):</label><br />
<div id="axfl" style="display:none">
<input name="curriculo" id="anexfile" type="file"/>
</div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
<br /><br /><label for="mensagem"><strong>Informações complementares:</strong></label><br />
<textarea id="mensagem" name="mensagem" rows="5" class="col-md-12 required input_field"></textarea>
    </div>

  </div>
</div>

<div class="col-md-12 text-center element-short-top element-short-bottom">
<input type="submit" class="btn btn-primary" name="botao" id="submit" value="Enviar" />
<input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" onclick="document.getElementById('axfl').style.display = 'none';"/>
</div>

</form>

</div>


      </div>
    </section>
  </article>
</div>
<section id="services" class="section swatch-black" style="min-height:50px">
  <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <header class="text-center element-small-top element-small-bottom condensed">
          <div class="row">
            <div class="col-md-12 ">
              <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important"> <br>
                SPSP - Sistema de Prestação de Serviços Padronizados<br>
                Todos os direitos reservados - Marília/SP - 2016 </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  </div>
</section>
<script src="../../assets/js/packages.min.js"></script> 
<script src="../../assets/js/theme.min.js"></script> 
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script> 
<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script> 
<script type="text/javascript">
function validar(formulario){
	if(formulario.nome.value == ''){alert("O campo NOME é obrigatório.");return false;}	
	if(formulario.end.value == ''){alert("O campo ENDEREÇO é obrigatório.");return false;}
	if(formulario.cep.value == ''){alert("O campo CEP é obrigatório.");return false;}
	if(formulario.cidade.value == ''){alert("O campo CIDADE é obrigatório.");return false;}
	if(formulario.bairro.value == ''){alert("O campo BAIRRO é obrigatório.");return false;}
	if(formulario.civil.value == 'Selecione...'){alert("Informe seu ESTADO CIVIL.");return false;}
	if(formulario.civil.value == 'selected'){alert("Informe seu ESTADO CIVIL.");return false;}
	if(formulario.cpf.value == ''){alert("Informe seu CPF.");return false;}
	if(formulario.rg.value == ''){alert("Informe seu RG.");return false;}
	if(formulario.nascto.value == ''){alert("Informe sua DATA DE NASCIMENTO.");return false;}
	if(formulario.fone.value == '' && formulario.cel.value == '' && formulario.recado.value == ''){alert("Informe pelo menos um TELEFONE de contato.");return false;}
	if(formulario.email.value == ''){alert("Informe um E-MAIL válido.");return false;}
	if(formulario.sexo.value == ''){alert("Informe seu SEXO.");return false;}
	if(formulario.idade.value == ''){alert("Informe sua IDADE.");return false;}
	if(formulario.dependentes.value == ''){alert("Informe se você possui DEPENDENTES.");return false;}
		if(document.getElementById('deficis').checked == false && document.getElementById('deficin').checked == false){alert("Informe se você é PORTADOR DE NECESSIDADES ESPECIAIS.");return false;}
	if(document.getElementById('deficis').checked == true && document.getElementById('tdeficiencia').value == "selected"){alert("Informe o TIPO de sua deficiência.");form1.tdeficiencia.focus();return false;}

	if(formulario.anexcurric.checked == true && document.getElementById("anexfile").value == "") { alert ('Por favor selecione o seu CURRÍCULO pronto.');return false;}

	if(document.getElementById("instrucao").value == ""){alert("Por favor informe seu GRAU DE INSTRUÇÃO.");return false;}
	if(document.getElementById("instrucao").value == "Selecione..."){alert("Por favor informe seu GRAU DE INSTRUÇÃO.");return false;}
	if(document.getElementById("instrucao").value == "selected"){alert("Por favor informe seu GRAU DE INSTRUÇÃO.");return false;}
	if((document.getElementById("instrucao").value == "Fundamental Incompleto, estudou até o ano " || document.getElementById("instrucao").value == "Medio Incompleto, estudou até o ano " || document.getElementById("instrucao").value == "Superior Incompleto, estudou até o ano ") && document.getElementById("serie1").value == ""){alert("Por favor informe até QUAL ANO ESTUDOU."); formulario.serie1.focus(); return false;}
	if((document.getElementById("instrucao").value == "Fundamental Completo - concluiu em: " || document.getElementById("instrucao").value == "Medio Completo - concluiu em: " || document.getElementById("instrucao").value == "Superior Completo - concluiu em: ") && document.getElementById("dconcl1").value == ""){alert("Por favor informe o ANO DE CONCLUSÃO."); formulario.dconcl1.focus(); return false;}

	if(document.getElementById("instrucao").value == "Superior Completo - concluiu em: " && document.getElementById("ncurso1").value == ""){alert("Por favor informe o NOME DO CURSO."); formulario.ncurso1.focus(); return false;}
	if(document.getElementById("instrucao").value == "Superior Incompleto, estudou até o ano " && document.getElementById("ncurso1").value == ""){alert("Por favor informe o NOME DO CURSO."); formulario.ncurso1.focus(); return false;}
	
	if(document.getElementById("instrucao").value == "Superior Incompleto, estudou até o ano " && document.getElementById("nest1").value == ""){alert("Por favor informe o NOME DA INSTITUIÇÃO."); formulario.nest1.focus(); return false;}
	if(document.getElementById("instrucao").value == "Superior Completo - concluiu em: " && document.getElementById("nest1").value == ""){alert("Por favor informe o NOME DA INSTITUIÇÃO."); formulario.nest1.focus(); return false;}	

	if(document.getElementById("mensagem").value == ""){alert("Informe alguma mensagem.");return false;}
	if (document.getElementById('Facebook').checked == false &&
	document.getElementById('Google').checked == false &&
	document.getElementById('Cartazes').checked == false &&
	document.getElementById('TV').checked == false &&
	document.getElementById('Jornal').checked == false &&
	document.getElementById('Indicação').checked == false &&
	document.getElementById('Revista').checked == false )
	{alert ('Por favor informe COMO CONHECEU O SITE DA SPSP.');return false;}
		
    return true;}

function val4(){  
if(document.getElementById('anexcurric').checked){ alert("Mesmo que você anexe seu currículo pronto, é importante que voce preencha todas as informações no nosso formulário próprio, agilizando assim uma possível entrevista!"); document.getElementById('axfl').style.display = 'block';  document.getElementById('anexcurric2').value = 'anexo';}else {document.getElementById('axfl').style.display = 'none'; document.getElementById('anexfile').value="";}}

function val6(){  
Valor = document.getElementById('instrucao').value;
if (Valor=="Fundamental Incompleto, estudou até o ano " | Valor=="Medio Incompleto, estudou até o ano " | Valor=="Superior Incompleto, estudou até o ano "){ document.getElementById('dserie1').style.display = 'block'; document.getElementById('concl1').style.display = 'none'; document.getElementById('dconcl1').value="";}
else if (Valor=="Analfabeto" | Valor==""){ document.getElementById('dserie1').style.display = 'none'; document.getElementById('concl1').style.display = 'none'; document.getElementById('serie1').value=""; document.getElementById('dconcl1').value="";}
else {document.getElementById('serie1').value=""; document.getElementById('dserie1').style.display="none"; document.getElementById('concl1').style.display = 'block';}}

function valf(){  
Valor = document.getElementById('instrucao').value;
if (Valor=="Superior Incompleto, estudou até o ano " | Valor=="Superior Completo - concluiu em: "){ document.getElementById('facu').style.display = 'block';}
else {
document.getElementById('facu').style.display = 'none';document.getElementById('ncurso1').value="";document.getElementById('nest1').value="";}}

function valdf(){if(document.getElementById('deficis').checked){ document.getElementById('deficienciadiv').style.display = 'block';}else {}}

function valdf2(){if(document.getElementById('deficin').checked){document.getElementById('tdeficiencia').value=""; document.getElementById('deficienciadiv').style.display = 'none';}else {}}

function limparRadios( radioname ){for( i = 0; i < document.form1[radioname].length; i++ )document.form1[radioname][i].checked = false;}

function limpa() {
if(document.getElementById('dvencto').value!="") {document.getElementById('dvencto').value="";}}

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
</body>
</html>