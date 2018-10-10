<?php
/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../listas.php");
include("../privado.php");
include("../valida_data.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  };  

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{};

include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Movimentação de Colaboradores</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div style="width: 100%;  margin:0 auto;"> <br />
            <strong> Dados do Colaborador: </strong><br />
          </div>
          <form enctype="multipart/form-data" action="envia.php" method="POST" name="formulario" id="formulario">
            <div style="width: 100%;  margin:0 auto;">
              <div style="width:20%; float:left "> RE:<br />
                <input name='re' type='text' id='re' size='20' onchange="buscar_info();" required="required"/>
                <br />
              </div>
              <div style="width:75%; border-left: 1px #6b6b6b solid; padding-left:15px; float:left"> Nome do Colaborador:<br />
                <input name="nomecol" readonly="readonly" id="nomecol" type='text' size='100%'/>
                <br />
              </div>
              </div>
              <div style="clear:both"> </div>
              <div style="width: 100%;  margin:0 auto;">
              <div style="width:20%; float:left;"> RG:<br />
				<input name="rgcolab" id="rgcolab" type="text" readonly="readonly"/>
              </div>
              <div style="width:63%; border-left: 1px #6b6b6b solid; padding-left:15px; float:left"> Empresa:<br />
                <select name="empresa" id="empresa" required="required" class="form-control">
                  <option selected="selected" value="">Selecione...</option>
                  <?php echo $lista_empresas; ?>
                </select>
              </div>
            </div>
            <br />
            <div style="clear:both"></div>
            <hr />
            <div style="width: 100%;  margin:0 auto;"><strong>Dados da Movimentação:</strong></div>
            <div style="width: 100%;  margin:0 auto;">Data da movimentação:<br />
              <input name="data10" type="date" id="data10" size="25" required="required"/>
              <br />
              <br />
              <div style="width:48%; float:left"> Supervisão Atual:<br />
                <select name="atualsup" id="atualsup" required="required" class="form-control">
                  <option selected="selected" size="35" value="<? echo "$usuario"; ?>"><? echo "$usuario"; ?></option>
                  <?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' or tipo='sup' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
?>
                </select>
                <br />
                Cliente Atual: <br />
                <input name="cliatual" readonly="readonly" type="text" id="cliatual" size="40" />
                <br />
                <br />
                Posto: <br />
                <input name="posto1" readonly="readonly" type="text" id="posto1" size="40" />
                <br />
              </div>
              <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Nova Supervisão:<br />
                <select name="novasup" id="novasup" required="required" class="form-control">
                  <option value="">Selecione...</option>
                  <?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' or tipo='sup' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nome']."'>".$dados['nome']."</option>");}
?>
                </select>
                <br />
                Novo Cliente: <br />
                <select name="clinovo" id="clinovo" onchange="buscar_postos()" required="required" class="form-control">
                  <option value="">Selecione...</option>
                  <?php
$consulta=mysql_query("SELECT NOMECLI, CODCLI FROM sarclien WHERE DTENCERRA IS NULL GROUP BY NOMECLI ORDER BY NOMECLI ASC"); 
while ($dados = mysql_fetch_array($consulta)) {
$clinovo2 = $dados['NOMECLI']/*." - ".$dados['CODCLI']*/;
echo("<option value='".$clinovo2."'>".$clinovo2." - ".$dados['CODCLI']."</option>");}
?>
                </select>
                <br />
                <div id="load_postos"> Posto:<br/>
                  <select name="posto2" id="posto2" required="required" class="form-control">
                    <option value="">Selecione...</option>
                  </select>
                </div>
                <div id="tipagemsangue" style="display: none;">
                	<br>
                  Tipo Sanguíneo:<br>
                  <div style="display: none;"><input type="text" name="tipagemvalida" id="tipagemvalida"/></div>
                  <select name="tipagem" id="tipagem" class="form-control">
                    <option selected value=""> Selecione...</option>
                    <option value="A+"> A+ </option>
                    <option value="A-"> A- </option>
                    <option value="B+"> B+ </option>
                    <option value="B-"> B- </option>
                    <option value="AB+"> AB+ </option>
                    <option value="AB-"> AB- </option>
                    <option value="O+"> O+ </option>
                    <option value="O-"> O- </option>
                  </select>
                </div>
                <br />
              </div>
              <div style="clear:both"></div>
              <br />
              <div class="row">
                <div class="col-xs-6"> Motivo da Movimentação:<br />
                  <select name="movimentacao" id="movimentacao"  onblur="val();" onchange="val();" onclick="val();" class="form-control">
                    <option selected="selected" value=""> Selecione...</option>
                    <?php echo $lista_motivo_movimentacao; ?>
                  </select>
                </div>
                <div class="col-xs-6"></div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="oculta1" style="display: none;">
                    <div style="width:20%; float:left;">RE:<br />
                      <input name="recolsubs" type="text" id="recolsubs" size="20" onchange="buscar_info2();"/>
                      <br />
                    </div>
                    <div style="width:75%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Nome do colaborador substituído:<br />
                      <input name="colsubs" id="colsubs"  type="text" size="100%" readonly="readonly"/>
                    </div>
                    <br />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="oculta10" style="display:none;">
                    <div style="width:45%; float:left">Nova função:<br />
                      <input  name="novafunc" type="text" id="novafunc" size="60" />
                    </div>
                    <div style="width:50%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Salário:<br />
                      <div style="display:none;">
                        <input name="salario" type="text" id="salario" size="20"/>
                      </div>
                      <input  name="funcsal" type="text" id="funcsal" size="20" />
                      <br />
                    </div>
                    <br />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="oculta7" style="display:none ;">
                    <div style="width:100%; float:left">Informe o motivo:<br />
                      <input name="outromotivo" type="text" id="outromotiv" size="50" />
                      <br />
                    </div>
                    <br />
                  </div>
                </div>
              </div>
              <br />
              <div style="width:100%; float:left">Pedido do cliente:<br />
                <input type="radio" name="pedcliente" value="SIM" id="radio1" onchange="val3();" onclick="val3();" onload="check(0)"/>
                <label for="radio1">SIM</label>
                <input type="radio" name="pedcliente" value="NÃO" id="radio2" onchange="val2();" onclick="val2();" onload="check(0)"/>
                <label for="radio2">NÃO</label>
              </div>
              <div id="oculta2" style="display: none;"><br />
                <div style="width:100%; float:left">O Cliente foi informado sobre a alteração?<br />
                  <input  name="clisabe" type="text" id="clisabe" size="50" />
                </div>
              </div>
              <div style="clear:both"></div>
              <br />
              <div style="width:100%; float:left">Haverá substituto no Posto Atual:<br />
                <input type="radio" name="subsposto" value="SIM" id="radio4" onchange="val5();" onclick="val5();" onload="check(0)"/>
                <label for="radio4">SIM</label>
                <input type="radio" name="subsposto" value="NÃO" id="radio3" onchange="val4();" onclick="val4();" onload="check(0)"/>
                <label for="radio3">NÃO</label>
              </div>
              <br />
              <div id="oculta3" style="display: none;"><br />
                <div style="width:20%; float:left;">RE:<br />
                  <input name="resubs" type="text" id="resubs" size="20" onchange="buscar_info3();"/>
                </div>
                <div style="width:75%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Nome do substituto:<br />
                  <input name="nomesubs" id="nomesubs" type="text" size="100%" readonly="readonly"/>
                </div>
                <br />
              </div>
            </div>
            <br />
            <div style="clear:both"></div>
            <hr />
            <div style="width: 100%;  margin:0 auto;"> <strong>Exames e Benefícios:</strong> </div>
            <div style="width: 100%;  margin:0 auto;"><br />
              É necessário exame de <strong>Mudança de Função?</strong><br />
              <input type="radio" name="examemudf" value="SIM" id="radiomf1" onload="check(0)"/>
              <label for="radiomf1">SIM</label>
              <input type="radio" name="examemudf" value="NÃO" id="radiomf2" onload="check(0)"/>
              <label for="radiomf2">NÃO</label>
              <br />
              <br />
              A nova função exige <strong>Exames Específicos?</strong><br />
              <input type="radio" name="exameesp" value="SIM" id="radioex1" onload="check(0)" onchange="val666();"  onclick="val666();"/>
              <label for="radioex1">SIM</label>
              <input type="radio" name="exameesp" value="NÃO" id="radioex2" onload="check(0)" onchange="val777();"  onclick="val777();"/>
              <label for="radioex2">NÃO</label>
              <br />
              <div id="oculta444" style="display: none;"> Quais?
                <input name="nomeexameesp" type="text" id="nomeexameesp" size="44" />
              </div>
              <br />
              O colaborador movimentado realizará <strong>Serviços de Condutor?</strong><br />
              <input type="radio" name="condutor" value="SIM" id="radio71" onload="check(0)"/>
              <label for="radio71">SIM</label>
              <input type="radio" name="condutor" value="NÃO" id="radio81" onload="check(0)"/>
              <label for="radio81">NÃO</label>
              <br />
              <br />
              Ocorrerá alguma <strong>Alteração de Benefício?</strong><br />
              <input type="radio" name="altbenef" onload="check(0)" value="Ocorrera alteracao nos seguintes Beneficios: " id="radio7" onchange="val6();"  onclick="val6();"/>
              <label for="radio7">SIM</label>
              <input type="radio" name="altbenef" onload="check(0)" value="Nao ocorrera alteracao em nenhum Beneficio." id="radio8" onchange="val7();"  onclick="val7();"/>
              <label for="radio8">NÃO</label><br /><br />

              <div id="oculta4" style="display: none;">
                <div style="width:50%; float:left;">
                  <input class="col-md-5" type="checkbox" name="vr" id="vr" onchange="val11();" value="Vale Refeicao: "  onclick="val11();"/>
                  <label class="col-md-5" for="vr">Vale Refeição</label>
                  <input class="col-md-4" disabled="disabled" name="vrt" id="vrt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="sal" id="sal" onchange="val12();" value="Salario: " onclick="val12();"/>
                  <label class="col-md-5" for="sal">Salário</label>
                  <input class="col-md-4" disabled="disabled" width="10" name="salt" id="salt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="dt" id="dt" onchange="val13();" value="Diaria de Transporte: " onclick="val13();"/>
                  <label class="col-md-5" for="dt">Diária de Transporte</label>
                  <input class="col-md-4" disabled="disabled" width="10px" name="dtt" id="dtt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" width="20px" name="ad" id="ad" onchange="val14();" value="Adicional Condutor de Veículo: " onclick="val14();"/>
                  <label class="col-md-5" for="ad">Adic. Condutor de Veículo</label>
                  <input class="col-md-4" disabled="disabled" name="adt" id="adt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="ad2" id="ad2" onchange="val142();" value="Adicional Monitoramento: " onclick="val142();"/>
                  <label class="col-md-5" for="ad2">Adic. Monitoramento</label>
                  <input class="col-md-4" disabled="disabled" name="adt2" id="adt2" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="ad3" id="ad3" onchange="val143();" value="Adicional Dupla Função: " onclick="val143();"/>
                  <label class="col-md-5" for="ad3">Adic. Dupla Função</label>
                  <input class="col-md-4" disabled="disabled" name="adt3" id="adt3" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="ad4" id="ad4" onchange="val144();" value="Adicional Condutor de Animais: " onclick="val144();"/>
                  <label class="col-md-5" for="ad4">Adic. Condutor de Animais</label>
                  <input class="col-md-4" disabled="disabled" name="adt4" id="adt4" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="ad5" id="ad5" onchange="val145();" value="Adicional Vigilante Líder: " onclick="val145();"/>
                  <label class="col-md-5" for="ad5">Adic. Vigilante Líder</label>
                  <input class="col-md-4" disabled="disabled" name="adt5" id="adt5" type="text" />
                </div>
                <div style="width:50%; float:right;  ">
                  <input class="col-md-5" type="checkbox" name="ins" id="ins" onchange="val15();" value="Insalubridade: " onclick="val15();"/>
                  <label class="col-md-5" for="ins">Insalubridade</label>
                  <input class="col-md-3" disabled="disabled" name="inst" id="inst" type="text" />
                  %<br />
                  <input class="col-md-5" type="checkbox" name="pr" id="pr" onchange="val16();" value="Periculosidade: " onclick="val16();"/>
                  <label class="col-md-5" for="pr">Periculosidade</label>
                  <input class="col-md-3" disabled="disabled" name="prt" id="prt" type="text" />
                  %<br />
                  <input class="col-md-5" type="checkbox" name="gp" id="gp" onchange="val17();" value="Gratificacao Posto: " onclick="val17();"/>
                  <label class="col-md-5" for="gp">Gratificação Posto</label>
                  <input class="col-md-4" disabled="disabled" name="gpt" id="gpt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="gs" id="gs" onchange="val18();" value="Gratificacao Pessoal: " onclick="val18();"/>
                  <label class="col-md-5" for="gs">Gratificação Pessoal</label>
                  <input class="col-md-4" disabled="disabled" name="gst" id="gst" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="vt" id="vt" onchange="val19();" value="Vale Transporte: " onclick="val19();"/>
                  <label class="col-md-5" for="vt">Vale Transporte</label>
                  <input class="col-md-4" disabled="disabled" name="vtt" id="vtt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="cb" id="cb" onchange="val20();" value="Cesta Basica: " onclick="val20();"/>
                  <label class="col-md-5" for="cb">Cesta Básica</label>
                  <input class="col-md-4" disabled="disabled" name="cbt" id="cbt" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="he" id="he" onchange="val22();" value="Hora Extra . Artigo 71: " onclick="val22();"/>
                  <label class="col-md-5" for="he">Hora Extra . Artigo 71</label>
                  <input class="col-md-4" disabled="disabled" name="het" id="het" type="text" />
                  <br />
                  <input class="col-md-5" type="checkbox" name="ot" id="ot" onchange="val21();" value="Outros: " onclick="val21();"/>
                  <label class="col-md-5" for="ot">Outros</label>
                  <input class="col-md-4" disabled="disabled" size="35" name="ott" id="ott" type="text" />
                </div>
              </div>
            </div>
            <br />
            <div style="clear:both"></div>
            <hr />
            <div style="width: 100%;  margin:0 auto;"><strong>Escalas e Horários:</strong></div>
            <div>
              <div style="width: 100%;  margin:0 auto;">
                <div style="width:50%; float:left">
                
                  <div class="col-md-12 text-left"><strong>Atual:</strong><br />
                  Escala : Entrada 1 - Saída 1 / Entrada 2 - Saída 2:</div>
                  <div class="col-md-6 text-left">
                    <select class="form-control" name="escatual" id="escatual" required="required">
                        <option selected="selected" value=""> Selecione...</option>
                        <?php echo $lista_escalas; ?>
                    </select>
                  </div>
                  <div class="col-md-6 text-left"></div>
                  
                  <div class="col-md-12 text-left"><span class="col-md-3" >Dia da folga: </span>
                      <span class="col-md-4" ><select name="folgfix1" id="folgfix1" class="form-control">
                        <option selected="selected" value=""> </option>
                        <?php echo $lista_semana; ?>
                      </select></span>
                      <span class="col-md-1" > e </span>
                        <span class="col-md-4" ><select name="folgfix12" id="folgfix12" class="form-control">
                          <option selected="selected" value=""> </option>
                          <?php echo $lista_semana; ?>
                        </select></span>
                      </div>
                    </div>
                  
                </div>
                <div style="width:50%; float:left; border-left: 1px #6b6b6b solid;">
                  <div class="col-md-12 text-left"> <strong>Novo:</strong><br />
                  Escala : Entrada 1 - Saída 1 / Entrada 2 - Saída 2:</div>
                  <div class="col-md-6 text-left">
                    <select class="form-control" name="novaescala" id="novaescala" required="required">
                        <option selected="selected" value=""> Selecione...</option>
                        <?php echo $lista_escalas; ?>
                      </select>
                  </div>
                  <div class="col-md-6 text-left"></div>
                  <div class="col-md-12 text-left"><span class="col-md-3" >Dia da folga: </span>
                     <span class="col-md-4" > <select name="folgfix2" id="folgfix2" class="form-control">
                        <option selected="selected" value=""> </option>
                        <?php echo $lista_semana; ?>
                      </select></span>
                      <span class="col-md-1" > e </span>
                     <span class="col-md-4" >   <select name="folgfix22" id="folgfix22" class="form-control">
                          <option selected="selected" value=""> </option>
                          <?php echo $lista_semana; ?>
                        </select></span>
                      </div>
                </div>
                <br />
                <div style="clear:both"></div>
                <hr />
                <div style="width:100%; height:auto"> Observações:<br />
                  <textarea name="observ" rows="2" id="observ" style="overflow:hidden; width:100%"></textarea>
                </div>
              </div>
            <div> </div>
            <br />
            <div style="width: 100%; margin:0 auto;">
              <div style="display:none">
                <input name="usuario" type="text" value="<? echo "$usuario"; ?>"/>
                <input name="emailuser" type="text" value="<? echo "$email"; ?>"/>
              </div>
              <button class="btn btn-primary" type="reset" name="reset" id="reset" value="Apagar" > Apagar </button>
              <button class="btn btn-info"  type="submit" name="submit" id="submit" onclick="return validar(this);" value="Gerar PDF"> Gerar PDF e Enviar </button>
              <br />
            </div>
          </form>
          <div class="col-md-12 text-left small-screen-center "  > <br />
            <br />
            <? echo "$ver_for_208"; ?><br />
            <br />
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">

function tipagemtroca (){
	var posto2 = $('#posto2').val();


	if(posto2.match(/VIGILANCIA/)){
  alert('Informe o Tipo Sanguíneo do Vigilante');
  document.getElementById("tipagemsangue").style.display = "block";
  document.getElementById("tipagemvalida").value="contem";
  document.getElementById("tipagem").focus;
}
else {
        	document.getElementById("tipagemsangue").style.display = "none";
        	document.getElementById("tipagemvalida").value = "";
          document.getElementById("tipagem").value = "";
        };


    };

function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {src.value += texto.substring(0,1);  }}
  
  function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{if (tecla==8 || tecla==0) return true;
	else  return false;}}
	
    function buscar_postos(){
      var clinovo = $('#clinovo').val();
      if(clinovo){
        var url = 'buscar_postos.php?clinovo='+encodeURIComponent(clinovo);
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
      }
    }
	
	function buscar_info() {
		var re = $('#re').val();
		if (re) {
			var url = 'buscar_re.php?re=' + encodeURIComponent(re);
			$.get(url, function(data){
				try {
					var j = data;
					if (j.length == 0) {
						throw "birl";
					}
					$('#nomecol').val(j.NOMEVIGIL);
					$('#rgcolab').val(j.RG);
					$('#posto1').val(j.NOMEPOS+" - "+j.CODPOS);
					$('#cliatual').val(j.NOMECLI+" - "+j.CODCLI);
				} catch(err) {
					alert('RE NAO ENCONTRADO!');
					var textbox = document.getElementById("re");
    				textbox.focus();
				}
			});
		}
	}


	function buscar_info2() {
		var recolsubs = $('#recolsubs').val();
		if (recolsubs) {
			var url = 'buscar_re2.php?recolsubs=' + encodeURIComponent(recolsubs);
			$.get(url, function(data){
				
				try {
				var j = data;
				if (j.length == 0) {
						throw "birl";
					}
				$('#colsubs').val(j.NOMEVIGIL);
				} catch(err) {
					alert('RE NAO ENCONTRADO!');
					var textbox = document.getElementById("recolsubs");
    				textbox.focus();
				}
			});
		}
	}



	function buscar_info3() {
		var resubs = $('#resubs').val();
		if (resubs) {
			var url = 'buscar_re3.php?resubs=' + encodeURIComponent(resubs);
			$.get(url, function(data){
				try {
				var j = data;
				if (j.length == 0) {
						throw "birl";
					}
				$('#nomesubs').val(j.NOMEVIGIL);
								} catch(err) {
					alert('RE NAO ENCONTRADO!');
					var textbox = document.getElementById("resubs");
    				textbox.focus();
				}
			});
		}
	}

	
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

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

function val(){
Valor = document.getElementById('movimentacao').value;
if (Valor=="Substituicao de Colaborador" || Valor=="Cobertura de Ferias" || Valor=="Alteracao de Funcao: "){ document.getElementById('oculta1').style.display = 'block';}
else {document.getElementById('colsubs').value=""; document.getElementById('recolsubs').value=""; document.getElementById('oculta1').style.display = 'none'};
if (Valor=="Alteracao de Funcao: "){ document.getElementById('oculta10').style.display = 'block'; document.getElementById('salario').value=" - Salario: ";}
else {document.getElementById('salario').value=""; document.getElementById('novafunc').value=""; document.getElementById('funcsal').value=""; document.getElementById('oculta10').style.display = 'none'};
if (Valor=="Outro: "){ document.getElementById('oculta7').style.display = 'block';}
else {document.getElementById('outromotiv').value=""; document.getElementById('oculta7').style.display = 'none'; }}
function val2(){
if(document.getElementById('radio2').checked){
document.getElementById('oculta2').style.display = 'block';}}
function val3(){
if(document.getElementById('radio1').checked){
document.getElementById('oculta2').style.display = 'none'; document.getElementById('clisabe').value="";}}
function val5(){
if(document.getElementById('radio4').checked){
document.getElementById('oculta3').style.display = 'block';}}
function val4(){
if(document.getElementById('radio3').checked){
document.getElementById('oculta3').style.display = 'none'; document.getElementById('nomesubs').value=""; document.getElementById('resubs').value="";}}
function val666(){
if(document.getElementById('radioex1').checked){
document.getElementById('oculta444').style.display = 'block';}}
function val777(){
if(document.getElementById('radioex2').checked){
document.getElementById('oculta444').style.display = 'none';document.getElementById('nomeexameesp').value="";}}
function val6(){
if(document.getElementById('radio7').checked){
document.getElementById('oculta4').style.display = 'block';}}
function val7(){
if(document.getElementById('radio8').checked){
document.getElementById('oculta4').style.display = 'none'; document.getElementById('vrt').value=""; document.getElementById('salt').value=""; document.getElementById('dtt').value=""; document.getElementById('adt').value=""; document.getElementById('adt2').value=""; document.getElementById('adt3').value=""; document.getElementById('adt4').value=""; document.getElementById('adt5').value=""; document.getElementById('inst').value=""; document.getElementById('prt').value=""; document.getElementById('gpt').value=""; document.getElementById('gst').value=""; document.getElementById('vtt').value=""; document.getElementById('cbt').value=""; document.getElementById('ott').value=""; document.getElementById('het').value="";document.getElementById("vr").checked=false; document.getElementById("sal").checked=false; document.getElementById("dt").checked=false; document.getElementById("ad").checked=false; document.getElementById("ad2").checked=false; document.getElementById("ad3").checked=false; document.getElementById("ad4").checked=false; document.getElementById("ad5").checked=false; document.getElementById("ins").checked=false; document.getElementById("pr").checked=false; document.getElementById("gp").checked=false; document.getElementById("gs").checked=false; document.getElementById("vt").checked=false; document.getElementById("cb").checked=false; document.getElementById("ot").checked=false; document.getElementById("he").checked=false;document.formulario.vrt.disabled=true; document.formulario.salt.disabled=true; document.formulario.dtt.disabled=true; document.formulario.adt.disabled=true; document.formulario.adt2.disabled=true; document.formulario.adt3.disabled=true; document.formulario.adt4.disabled=true; document.formulario.adt5.disabled=true; document.formulario.inst.disabled=true; document.formulario.prt.disabled=true; document.formulario.gpt.disabled=true; document.formulario.gst.disabled=true; document.formulario.vtt.disabled=true; document.formulario.cbt.disabled=true; document.formulario.ott.disabled=true; document.formulario.het.disabled=true;}}
function val11(){if(document.getElementById('vr').checked){document.formulario.vrt.disabled=false;}else{document.getElementById('vrt').value=""; document.formulario.vrt.disabled=true;}}
function val12(){if(document.getElementById('sal').checked){document.formulario.salt.disabled=false;}else{document.getElementById('salt').value=""; document.formulario.salt.disabled=true;}}
function val13(){if(document.getElementById('dt').checked){document.formulario.dtt.disabled=false;}else{document.getElementById('dtt').value=""; document.formulario.dtt.disabled=true;}}
function val14(){if(document.getElementById('ad').checked){document.formulario.adt.disabled=false;}else{document.getElementById('adt').value=""; document.formulario.adt.disabled=true;}}
function val142(){if(document.getElementById('ad2').checked){document.formulario.adt2.disabled=false;}else{document.getElementById('adt2').value=""; document.formulario.adt2.disabled=true;}}
function val143(){if(document.getElementById('ad3').checked){document.formulario.adt3.disabled=false;}else{document.getElementById('adt3').value=""; document.formulario.adt3.disabled=true;}}
function val144(){if(document.getElementById('ad4').checked){document.formulario.adt4.disabled=false;}else{document.getElementById('adt4').value=""; document.formulario.adt4.disabled=true;}}
function val145(){if(document.getElementById('ad5').checked){document.formulario.adt5.disabled=false;}else{document.getElementById('adt5').value=""; document.formulario.adt5.disabled=true;}}
function val15(){if(document.getElementById('ins').checked){document.formulario.inst.disabled=false;}else{document.getElementById('inst').value=""; document.formulario.inst.disabled=true;}}
function val16(){if(document.getElementById('pr').checked){document.formulario.prt.disabled=false;}else{document.getElementById('prt').value=""; document.formulario.prt.disabled=true;}}
function val17(){if(document.getElementById('gp').checked){document.formulario.gpt.disabled=false;}else{document.getElementById('gpt').value=""; document.formulario.gpt.disabled=true;}}
function val18(){if(document.getElementById('gs').checked){document.formulario.gst.disabled=false;}else{document.getElementById('gst').value=""; document.formulario.gst.disabled=true;}}
function val19(){if(document.getElementById('vt').checked){document.formulario.vtt.disabled=false;}else{document.getElementById('vtt').value=""; document.formulario.vtt.disabled=true;}}
function val20(){if(document.getElementById('cb').checked){document.formulario.cbt.disabled=false;}else{document.getElementById('cbt').value=""; document.formulario.cbt.disabled=true;}}
function val21(){if(document.getElementById('ot').checked){document.formulario.ott.disabled=false;}else{document.getElementById('ott').value=""; document.formulario.ott.disabled=true;}}
function val22(){if(document.getElementById('he').checked){document.formulario.het.disabled=false;}else{document.getElementById('het').value=""; document.formulario.het.disabled=true;}}

function validar(formulario){

  ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

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
        document.getElementById('ins').checked == false &&
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
if(document.getElementById('ins').checked == true && formulario.inst.value == '') {alert ('Descreva essa alteração de INSALUBRIDADE.'); formulario.inst.focus(); return false;}
if(document.getElementById('pr').checked == true && formulario.prt.value == '') {alert ('Descreva essa alteração de PERICULOSIDADE.'); formulario.prt.focus(); return false;}
if(document.getElementById('gp').checked == true && formulario.gpt.value == '') {alert ('Descreva essa alteração de GRATIFICAÇÃO POSTO.'); formulario.gpt.focus(); return false;}
if(document.getElementById('gs').checked == true && formulario.gst.value == '') {alert ('Descreva essa alteração de GRATIFICAÇÃO PESSOAL.'); formulario.gst.focus(); return false;}
if(document.getElementById('vt').checked == true && formulario.vtt.value == '') {alert ('Descreva essa alteração de VALE TRANPORTE.'); formulario.vtt.focus(); return false;}
if(document.getElementById('cb').checked == true && formulario.cbt.value == '') {alert ('Descreva essa alteração de CESTA BÁSICA.'); formulario.cbt.focus(); return false;}
if(document.getElementById('he').checked == true && formulario.het.value == '') {alert ('Descreva essa alteração de HORA EXTRA - ARTIGO 71.'); formulario.het.focus(); return false;}
if(document.getElementById('ot').checked == true && formulario.ott.value == '') {alert ('Descreva essa alteração de OUTROS.'); formulario.ott.focus(); return false;}

ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

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
<? include("../roda.php"); ?>