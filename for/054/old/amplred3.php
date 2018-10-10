<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("../listas.php");
include("../privado.php");

if ($_SESSION['tipo'] != "com" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        Window.alert('Voce nao tem acesso a esse FOR!');
		Window.location.href='../logado.php';
        </SCRIPT>");}else{	};

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$cabecalho = $_GET['cabecalho'];

$sql = "SELECT * FROM ".$cabecalho." WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Implantação de Serviços</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div style="width: 100%;  margin:0 auto;"> <br />
            <br />
            <strong> Dados da Implantação: </strong><br />
          </div>
          <form enctype="multipart/form-data" method="post" name="formulario" id="formulario" action="" target="">
            <div >
              <div style="width: 100%;  margin:0 auto;"><br />
                <div style="width:48%; float:left"> Tipo de Implantação:<br />
                  <input class="form-control" id="radio1" name="cabecalho" value="Implantacao Inicial" checked="" type="radio" <?php echo $linha['cabecalho'] == 'Implantacao Inicial' ? "checked" : ""?>>
                  <label for="radio1">Implantação</label>
                  <input class="form-control" id="radio2" name="cabecalho" value="Ampliacao" type="radio" <?php echo $linha['cabecalho'] == 'Ampliacao' ? "checked" : ""?>>
                  <label for="radio2">Ampliação</label>
                  <input class="form-control" id="radio2i" name="cabecalho" value="Reducao" type="radio" <?php echo $linha['cabecalho'] == 'Reducao' ? "checked" : ""?>>
                  <label for="radio2i">Redução</label>
                  <br />
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Código do Cliente:<br />
                  <input name="campo2" id="campo2"  class="form-control" readonly="readonly" value="<?php echo $linha['campo2'] ?>"/>
                  <br />
                </div>
                <div style="clear:both"> </div>
                <br />
                <hr style="color:#FFF" />
                <br />
                <div style="width:48%; float:left"> Gestor Responsável pela Implantação:<br />
                  <input class="form-control" readonly="readonly" name="gestor"  id="gestor" value="<?= $linha['gestor'] ?>">
                  <br />
                  <br />
                  Supervisor do Posto:<br />
                  <input class="form-control" readonly="readonly" name="campo48" id="campo48" value="<?= $linha['campo48'] ?>">
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Empresa:<br />
                  <input class="form-control" readonly="readonly" name="empresa" id="empresa" onclick="valemp();" value="<?= $linha['empresa'] ?>">
                  <br />
                  <br />
                  Filial:<br />
                  <input  readonly="readonly" class="form-control"  name="regiao" id="regiao" value="<?= $linha['regiao'] ?>">
                </div>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div style="width: 100%;  margin:0 auto;"><strong>Dados do Cliente:</strong><br />
              * Preencher conforme CNPJ da empresa, que deverá estar anexo  a implantação.</div>
            <div >
              <div style="width: 100%;  margin:0 auto;"><br />
                Contratante/Razão Social*: <br />
                <textarea name=campo4 cols="100" rows="2"  id="campo4" value="<?php echo $linha['campo4'] ?>"><?php echo $linha['campo4'] ?></textarea>
                <br />
                <br />
                <div style="width:48%; float:left"> Rua e Bairro *:<br />
                  <textarea cols="45" rows="1"   id="campo5" name="campo5" value="<?php echo $linha['campo5'] ?>"><?php echo $linha['campo5'] ?></textarea>
                  <br />
                  <br />
                  Cidade *:<br />
                  <textarea cols="45" rows="1"  id="campo6" name="campo6" value="<?php echo $linha['campo6'] ?>" ><?php echo $linha['campo6'] ?></textarea>
                  <br />
                  <br />
                  Fone/Fax: <br />
                  <input name="campo11" type="text" id="campo11" size="40" value="<?php echo $linha['campo11'] ?>"/>
                  <br />
                  <br />
                  CEP: <br />
                  <input name="campo7" maxlength="10" type="text" id="campo7" size="15" onkeypress="formatar(this, '##.###-###'); return SomenteNumero(event)" value="<?php echo $linha['campo7'] ?>"/>
                  <br />
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> CNPJ *: <br />
                  <input name="campo8" type="text" id="campo8" size="40" maxlength="18" onkeypress="formatar(this, '##.###.###/####-##'); return SomenteNumero(event)" value="<?php echo $linha['campo8'] ?>"/>
                  <br />
                  <br />
                  I. Est.: <br />
                  <input name="campo9" type="text" id="campo9" size="40"value="<?php echo $linha['campo9'] ?>" />
                  <br />
                  <br />
                  I. Mun.: <br />
                  <input name="campo10" type="text" id="campo10" size="40" value="<?php echo $linha['campo10'] ?>"/>
                  <br />
                  <br />
                  Página Web: <br />
                  <input name="campo12" type="text" id="campo12" size="40" value="<?php echo $linha['campo12'] ?>"/>
                </div>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div style="width: 100%;  margin:0 auto;"> <strong>CEI:</strong><br />
              Se há CEI, informe se deve incluir nº do CEI nos itens abaixo.</div>
            <div >
              <div style="width: 100%;  margin:0 auto;"><br />
                CEI:<br />
                <input name="cei" type="text" id="cei" style="overflow:hidden;"  size="40"  value="<?php echo $linha['cei'] ?>"/>
                <br />
                <div style="clear:both"><br />
                </div>
                <div style="width:25%; float:left"> Nota fiscal:<br />
                  <input type="radio" name="ceifiscal" value="SIM" id="fiscs" <?php echo $linha['ceifiscal'] == 'SIM' ? "checked" : ""?>/>
                  <label for="fiscs">SIM</label>
                  <input type="radio" name="ceifiscal" value="NAO" id="fiscn" <?php echo $linha['ceifiscal'] == 'NAO' ? "checked" : ""?>/>
                  <label for="fiscn">NÃO</label>
                  <br />
                </div>
                <div style="width:25%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> SEFIP:<br />
                  <input type="radio" name="sefipcei" value="SIM" id="sefips" <?php echo $linha['sefipcei'] == 'SIM' ? "checked" : ""?>/>
                  <label for="sefips">SIM</label>
                  <input type="radio" name="sefipcei" value="NAO" id="sefipn" <?php echo $linha['sefipcei'] == 'NAO' ? "checked" : ""?>/>
                  <label for="sefipn">NÃO</label>
                  <br />
                </div>
                <div style="width:43%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> O nº do CEI sera único e fixo mensal:<br />
                  <input type="radio" name="ceifixo" value="SIM" id="ceis" <?php echo $linha['ceifixo'] == 'SIM' ? "checked" : ""?>/>
                  <label for="ceis">SIM</label>
                  <input type="radio" name="ceifixo" value="NAO" id="cein" <?php echo $linha['ceifixo'] == 'NAO' ? "checked" : ""?>/>
                  <label for="cein">NÃO</label>
                  <br />
                </div>
                <div style="clear:both"><br />
                </div>
                Obs.:<br />
                <textarea name="obscei" cols="100" rows="1" id="obscei"  value="<?php echo $linha['obscei'] ?>" ><?php echo $linha['obscei'] ?></textarea>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div style="width: 100%; margin:0 auto;"> <strong>Dados do Posto/Gestor de Contrato:</strong><br />
              ** Obrigatório anexar cópia do contrato social ou estatuto e última alteração contratual (se houver),<br />
              RG e CPF do responsável e procuração caso a pessoa que for assinar não constar no contrato social. </div>
            <div >
              <div style="width: 100%; margin:0 auto;"><br />
                Local da Implantação:<br />
                <textarea name="campo14" cols="100" rows="1" id="campo14"  value="<?php echo $linha['campo14'] ?>" ><?php echo $linha['campo14'] ?></textarea>
                <br />
                <br />
                E-mail para cobrança e envio de documentos:<br />
                <input name="campo13" type="text" id="campo13" size="65" value="<?php echo $linha['campo13'] ?>"/>
                <br />
                <br />
                <div style="width:48%; float:left"> Contato Comercial/Faturamento:<br />
                  <textarea name="campo15" cols="45" rows="1" id="campo15"  value="<?php echo $linha['campo15'] ?>" ><?php echo $linha['campo15'] ?></textarea>
                  <br />
                  E-mail:<br />
                  <textarea name="campo16" cols="32" rows="1" id="campo16"  value="<?php echo $linha['campo16'] ?>" ><?php echo $linha['campo16'] ?></textarea>
                  <br />
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Responsável Legal **:<br />
                  <textarea name="campo17" cols="45" rows="1" id="campo17"  value="<?php echo $linha['campo17'] ?>"  ><?php echo $linha['campo17'] ?></textarea>
                  <br />
                  CPF:<br />
                  <textarea name="campo18" cols="25" rows="1" id="campo18"  value="<?php echo $linha['campo18'] ?>" ><?php echo $linha['campo18'] ?></textarea>
                </div>
                <br />
                <div style="clear:both"></div>
                <br />
                Gestor do Contrato:<br />
                <input name="respleg" type="text" id="respleg" size="65" value="<?php echo $linha['respleg'] ?>"/>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div style="width: 100%; margin:0 auto;"> <strong>Informações da Atividade que será Implantada:</strong><br />
              *** É necessário preencher um formulário separado para cada atividade/função exercida. </div>
            <div >
              <div style="width: 100%; margin:0 auto;"><br />
                <div style="width:48%; float:left"> Atividade ***:<br />
                  <select class="form-control"  name="campo19" id="campo19" onclick="val9();" onchange="val9();" onblur="val9();">
                    <option selected="selected" value="<?= $linha['campo19'] ?>">
                    <?= $linha['campo19'] ?>
                    </option>
                    <option value=""> Selecione...</option>
                    <?php echo $lista_atividades; ?>
                  </select>
                  <div style="display:none" id="oculta">Informe a Atividade:<br />
                    <input name="outraatv" type="text" id="outraatv"  size="25" value="<?php echo $linha['outraatv'] ?>"/>
                  </div>
                </div>
                <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Data de Início:<br />
                  <input name="campo24" type="text" id="campo24"  onblur="check_date(this.value)" onkeypress="formatar(this, '##/##/####'); return SomenteNumero(event)" size="15" maxlength="10" value="<?php echo $linha['campo24'] ?>"/>
                </div>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div id="esconde" style="display:block">
              <div style="width: 100%; margin:0 auto;"> <strong>Informações de Escala/Horário:</strong> </div>
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <div style="width:18%; float:left"> Postos:<br />
                    <input name="campo20" type="text" id="campo20"   size="3" value="<?php echo $linha['campo20'] ?>"/>
                  </div>
                  <div style="width:78%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">H/mês:<br />
                    <input name="campo22" type="text" id="campo22"   size="10" value="<?php echo $linha['campo22'] ?>"/>
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:40%; float:left"> <strong>Escala da Equipe 01:</strong><br />
                    <br />
                    Nº de Colaboradores:<br />
                    <input name="campo21" type="text" id="campo21"  size="3" value="<?php echo $linha['campo21'] ?>"/>
                    <br />
                    <div style="width:46%; float:left;"> Escala:<br />
                      <select class="form-control"  name="escatual" id="escatual" onclick="val8();">
                        <option selected="selected" value="<?= $linha['escatual'] ?>">
                        <?= $linha['escatual'] ?>
                        </option>
                        <option value=""> Selecione...</option>
                        <?php echo $lista_escalas; ?>
                      </select>
                      <div id="oculta1" style="display:none;"> Especifique a escala:<br />
                        <input  name="especif1" type="text" id="especif1" size="40" value="<?php echo $linha['especif1'] ?>"/>
                      </div>
                      <div id="oculta2" style="display: none;"> Dias:<br />
                        <input  name="dias241" type="text" id="dias241" size="40" value="<?php echo $linha['dias241'] ?>"/>
                      </div>
                      <div id="oculta3" style="display:none;"> Dia da folga:<br />
                        <select class="form-control"  name="folgfix1" id="folgfix1">
                          <option selected="selected" value="<?= $linha['folgfix1'] ?>">
                          <?= $linha['folgfix1'] ?>
                          </option>
                          <option value=""> Selecione...</option>
                          <?php echo $lista_semana; ?>
                        </select>
                      </div>
                    </div>
                    <br />
                    <div style="width:46%; float:right;">
                      <input name="trabsab" id="trabsab" type="checkbox" value=" - Trabalha no Feriado" <?php echo $linha['trabsab'] == ' - Trabalha no Feriado' ? "checked" : ""?>/>
                      <label for="trabsab">Trabalha Feriado</label>
                    </div>
                  </div>
                  <div style="width:56%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">
                    <div style="width:30%; float:left;"><br />
                      <br />
                      Horário:<br />
                      <input name="hora1" maxlength="5" type="text" id="hora1" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora1'] ?>"/>
                      as
                      <input name="hora2" maxlength="5" type="text" id="hora2" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora2'] ?>"/>
                    </div>
                    <div id="artg71" style="display:block; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Intervalo:<br />
                      <input  name="hora3" maxlength="5" type="text" id="hora3" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora3'] ?>"/>
                      as
                      <input  name="hora4" maxlength="5" type="text" id="hora4" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora4'] ?>"/>
                    </div>
                    <div id="oculta4" style="display:none; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Horário sábado:<br />
                      <input  name="horas1" type="text" id="horas1" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas1'] ?>"/>
                      as
                      <input  name="horas2" type="text" id="horas2" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas2'] ?>"/>
                      <br />
                      <input hidden="hidden" name="txtsab" type="text" id="txtsab" size="10" value="<?= $linha['txtsab'] ?>">
                    </div>
                    <br />
                    <div style="clear:both"></div>
                    <br />
                    <div style="float:left;width: 100px;">
                      <input name="art71" id="art71" type="checkbox" value=" - Artigo 71" onclick="val71();" <?php echo $linha['art71'] == ' - Artigo 71' ? "checked" : ""?>/>
                      <label for="art71">Artigo 71 </label>
                    </div>
                    
                    <div id="artg712" style="display:none; float:left"> =
                      <input type="checkbox" name="art71d" value="Diurno" id="art71d" <?php echo $linha['art71d'] == 'Diurno' ? "checked" : ""?>/>
                      <label for="art71d">Diurno</label>
                      <input type="checkbox" name="art71n" value="Noturno" id="art71n" <?php echo $linha['art71n'] == 'Noturno' ? "checked" : ""?>/>
                      <label for="art71n">Noturno</label>
                      <br />
                    </div>
                    
                    <div style="clear:both"></div>
                    <div style="float:left;"><br />
                    Salário:<br />
<input type="radio" name="salario" value="Piso da Categoria" id="valorn" onclick="val11();" <?php echo $linha['salario'] == 'NAO' ? "checked" : ""; echo $linha['salario'] == 'Piso da Categoria' ? "checked" : ""?>/>
<label for="valorn">Piso da Categoria</label>&nbsp;&nbsp;
<input type="radio" name="salario" value="Valor Diferenciado" id="valoru" onclick="val11();" <?php echo $linha['salario'] == 'UNI' ? "checked" : ""; echo $linha['salario'] == 'Valor Diferenciado' ? "checked" : ""?>/>
<label for="valoru">Valor Diferenciado</label>
<div style="display:none;float:right;" id="salariouni">&nbsp;
R$ <input name="salario1" type="text" id="salario1" size="8" value="<?php echo $linha['salario1'] ?>" />
</div></div>
                    
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:40%; float:left"> <strong>Escala da Equipe 02:</strong><br />
                    <br />
                    Nº de Colaboradores:<br />
                    <input name="campo212" type="text" id="campo212"  size="3" value="<?php echo $linha['campo212'] ?>"/>
                    <br />
                    <div style="width:46%; float:left;"> Escala:<br />
                      <select class="form-control"  name="escatual2" id="escatual2" onclick="val82();">
                        <option selected="selected" value="<?= $linha['escatual2'] ?>">
                        <?= $linha['escatual2'] ?>
                        </option>
                        <option value=""> Selecione...</option>
                        <?php echo $lista_escalas; ?>
                      </select>
                      <div id="oculta12" style="display:none;"> Especifique a escala:<br />
                        <input  name="especif2" type="text" id="especif2" size="40" value="<?php echo $linha['especif2'] ?>"/>
                      </div>
                      <div id="oculta22" style="display: none;"> Dias:<br />
                        <input  name="dias242" type="text" id="dias242" size="40" value="<?php echo $linha['dias242'] ?>"/>
                      </div>
                      <div id="oculta32" style="display:none;"> Dia da folga:<br />
                        <select class="form-control"  name="folgfix2" id="folgfix2">
                          <option selected="selected" value="<?= $linha['folgfix2'] ?>">
                          <?= $linha['folgfix2'] ?>
                          </option>
                          <option value=""> Selecione...</option>
                          <?php echo $lista_semana; ?>
                        </select>
                      </div>
                    </div>
                    <br />
                    <div style="width:46%; float:right;">
                      <input name="trabsab2" id="trabsab2" type="checkbox" value=" - Trabalha no Feriado" <?php echo $linha['trabsab2'] == ' - Trabalha no Feriado' ? "checked" : ""?>/>
                      <label for="trabsab2">Trabalha Feriado</label>
                    </div>
                  </div>
                  <div style="width:56%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">
                    <div style="width:30%; float:left;"><br />
                      <br />
                      Horário:<br />
                      <input name="hora5" maxlength="5" type="text" id="hora5" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora5'] ?>"/>
                      as
                      <input name="hora6" maxlength="5" type="text" id="hora6" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora6'] ?>"/>
                    </div>
                    <div id="artg71p2" style="display:block; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Intervalo:<br />
                      <input  name="hora7" maxlength="5" type="text" id="hora7" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora7'] ?>"/>
                      as
                      <input  name="hora8" maxlength="5" type="text" id="hora8" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora8'] ?>"/>
                    </div>
                    <div id="oculta42" style="display:none; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Horário sábado:<br />
                      <input  name="horas3" type="text" id="horas3" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas3'] ?>"/>
                      as
                      <input  name="horas4" type="text" id="horas4" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas4'] ?>"/>
                      <br />
                      <input hidden="hidden" name="txtsab2" type="text" id="txtsab2" size="10" value="<?= $linha['txtsab2'] ?>">
                    </div>
                    <br />
                    <div style="clear:both"></div>
                    <br />
                    <div style="float:left;width: 100px;">
                      <input name="art71p2" id="art71p2" type="checkbox" value=" - Artigo 71" onclick="val712();" <?php echo $linha['art71p2'] == ' - Artigo 71' ? "checked" : ""?>/>
                      <label for="art71p2">Artigo 71 </label>
                    </div>
                    <div id="artg712-2" style="display:none; float:left"> =
                      <input type="checkbox" name="art71dp2" value="Diurno" id="art71dp2" <?php echo $linha['art71dp2'] == 'Diurno' ? "checked" : ""?>/>
                      <label for="art71dp2">Diurno</label>
                      <input type="checkbox" name="art71np2" value="Noturno" id="art71np2" <?php echo $linha['art71np2'] == 'Noturno' ? "checked" : ""?>/>
                      <label for="art71np2">Noturno</label>
                      <br />
                    </div>
                    
                    <div style="clear:both"></div>
                    <div style="float:left;">  <br />
                    Salário:<br />            
<input type="radio" name="salario22" value="Piso da Categoria" id="valorn2" onclick="val211();" <?php echo $linha['salario22'] == 'Piso da Categoria' ? "checked" : ""?>/>
<label for="valorn2">Piso da Categoria</label>&nbsp;&nbsp;
<input type="radio" name="salario22" value="Valor Diferenciado" id="valoru2" onclick="val211();" <?php echo $linha['salario22'] == 'Valor Diferenciado' ? "checked" : ""?>/>
<label for="valoru2">Valor Diferenciado</label>
<div style="display:none;float:right;" id="salariouni2">&nbsp;
R$ <input name="salario2" type="text" id="salario2" size="8" value="<?php echo $linha['salario2'] ?>" />
</div></div>
                    
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:40%; float:left"> <strong>Escala da Equipe 03:</strong><br />
                    <br />
                    Nº de Colaboradores:<br />
                    <input name="campo213" type="text" id="campo213"  size="3" value="<?php echo $linha['campo213'] ?>" />
                    <br />
                    <div style="width:46%; float:left;"> Escala:<br />
                      <select class="form-control"  name="escatual3" id="escatual3" onclick="val83();">
                        <option selected="selected" value="<?= $linha['escatual3'] ?>">
                        <?= $linha['escatual3'] ?>
                        </option>
                        <option value=""> Selecione...</option>
                        <?php echo $lista_escalas; ?>
                      </select>
                      <div id="oculta13" style="display:none;"> Especifique a escala:<br />
                        <input  name="especif3" type="text" id="especif3" size="40" value="<?php echo $linha['especif3'] ?>"/>
                      </div>
                      <div id="oculta23" style="display: none;"> Dias:<br />
                        <input  name="dias243" type="text" id="dias243" size="40" value="<?php echo $linha['dias243'] ?>" />
                      </div>
                      <div id="oculta33" style="display:none;"> Dia da folga:<br />
                        <select class="form-control"  name="folgfix3" id="folgfix3">
                          <option selected="selected" value="<?= $linha['folgfix3'] ?>">
                          <?= $linha['folgfix3'] ?>
                          </option>
                          <option value=""> Selecione...</option>
                          <?php echo $lista_semana; ?>
                        </select>
                      </div>
                    </div>
                    <br />
                    <div style="width:46%; float:right;">
                      <input name="trabsab3" id="trabsab3" type="checkbox" value=" - Trabalha no Feriado" <?php echo $linha['trabsab3'] == ' - Trabalha no Feriado' ? "checked" : ""?>/>
                      <label for="trabsab3">Trabalha Feriado</label>
                    </div>
                  </div>
                  <div style="width:56%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">
                    <div style="width:30%; float:left;"><br />
                      <br />
                      Horário:<br />
                      <input name="hora9" maxlength="5" type="text" id="hora9" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora9'] ?>"/>
                      as
                      <input name="hora10" maxlength="5" type="text" id="hora10" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora10'] ?>"/>
                    </div>
                    <div id="artg71p3" style="display:block; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Intervalo:<br />
                      <input  name="hora11" maxlength="5" type="text" id="hora11" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora11'] ?>"/>
                      as
                      <input  name="hora12" maxlength="5" type="text" id="hora12" size="3" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['hora12'] ?>"/>
                    </div>
                    <div id="oculta43" style="display:none; width:30%; float:left; padding-left:15px;"><br />
                      <br />
                      Horário sábado:<br />
                      <input  name="horas5" type="text" id="horas5" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas5'] ?>"/>
                      as
                      <input  name="horas6" type="text" id="horas6" size="3" maxlength="5" onkeypress="formatar(this, '##:##'); return SomenteNumero(event)" value="<?php echo $linha['horas6'] ?>"/>
                      <br />
                      <input hidden="hidden" name="txtsab3" type="text" id="txtsab3" size="10" value="<?= $linha['txtsab3'] ?>">
                    </div>
                    <br />
                    <div style="clear:both"></div>
                    <br />
                    <div style="float:left;width: 100px;">
                      <input name="art71p3" id="art71p3" type="checkbox" value=" - Artigo 71" onclick="val713();" <?php echo $linha['art71p3'] == ' - Artigo 71' ? "checked" : ""?>/>
                      <label for="art71p3">Artigo 71 </label>
                    </div>
                    <div id="artg712-3" style="display:none; float:left"> =
                      <input type="checkbox" name="art71dp3" value="Diurno" id="art71dp3" <?php echo $linha['art71dp3'] == 'Diurno' ? "checked" : ""?>/>
                      <label for="art71dp3">Diurno</label>
                      <input type="checkbox" name="art71np3" value="Noturno" id="art71np3" <?php echo $linha['art71np3'] == 'Noturno' ? "checked" : ""?>/>
                      <label for="art71np3">Noturno</label>
                      <br />
                    </div>
                    
                    <div style="clear:both"></div>
                    <div style="float:left;"><br />
                    Salário:<br />              
<input type="radio" name="salario33" value="Piso da Categoria" id="valorn3" onclick="val311();" <?php echo $linha['salario33'] == 'Piso da Categoria' ? "checked" : ""?>/>
<label for="valorn3">Piso da Categoria</label>&nbsp;&nbsp;
<input type="radio" name="salario33" value="Valor Diferenciado" id="valoru3" onclick="val311();" <?php echo $linha['salario33'] == 'Valor Diferenciado' ? "checked" : ""?>/>
<label for="valoru3">Valor Diferenciado</label>
<div style="display:none;float:right;" id="salariouni3">&nbsp;
R$ <input name="salario3" type="text" id="salario3" size="8" value="<?php echo $linha['salario3'] ?>" />
</div></div>
                    
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  
                  Observações referente as escalas e horários:<br />
                  <textarea name="obsesc" cols="100" rows="2" style="overflow:hidden; font-family:Tahoma, Geneva, sans-serif;" id="obsesc" value="<?= $linha['obsesc'] ?>"><?php echo $linha['obsesc'] ?></textarea>
                  <br />
                  <br />
                  <div style="clear:both"></div>
                  <br /><hr style="color:#FFF" />
                </div>
              </div>
              <br />
            </div>
            <div style="width: 100%; margin:0 auto;"> <strong>Informações de Cobrança/Custo do Contrato:</strong> </div>
            <div >
              <div style="width: 100%; margin:0 auto;"><br />
                <div style="width:35%; float:left"> Vencimento da Fatura:<br />
                  <input name="campo25" type="text" id="campo25" size="5"  value="<?php echo $linha['campo25'] ?>"/>
                  <br />
                  <br />
                  Duração do Contrato:<br />
                  <input name="campo26" type="text" id="campo26" size="15" value="<?php echo $linha['campo26'] ?>"/>
                  <br />
                </div>
                <div style="width:61%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Faturamento:<br />
               <div style="float:left; min-width:110px">
                    <input type="radio" name="fatura" value="Valor Mensal" id="radio3" <?php echo $linha['fatura'] == 'Valor Mensal' ? "checked" : ""?>/>
                    <label for="radio3">Valor Mensal</label>
                  </div>
                  <div id="esconde3" style="display:block; ">
                    <input type="radio" name="fatura" value="Valor homem / hora" id="radio4" <?php echo $linha['fatura'] == 'Valor homem / hora' ? "checked" : ""?>/>
                    <label for="radio4">Valor homem / hora</label>
                  </div>
                  <br />
                  <br />
                  Reajuste do Contrato pelo Índice:<br />
                  <input readonly="readonly" class="form-control"  name="regcon" id="regcon" value="<?php echo $linha['regcon'] ?> ">
                </div>
                <div style="clear:both"><br />
                </div>
                <div id="monitport" style="display:none">
<div style="width:35%; float:left"> <strong>Taxa de adesão:</strong><br />
<input name="taxaadesao" type="text" id="taxaadesao" size="20" value="<?php echo $linha['taxaadesao'] ?>"/></div>
<div style="width:61%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> <strong>Valor da mensalidade:</strong><br />
<input name="mensalvalor" type="text" id="mensalvalor" size="20" value="<?php echo $linha['mensalvalor'] ?>"/></div>
<div style="clear:both"><br /></div>
</div>
              </div>
            </div>
            <div id="esconde2" style="display:block">
              <div >
                <div style="width: 100%; margin:0 auto;">
                  <div style="float:left; width:37%;"> Súmula 444:<br />
                    Valor incluso no contrato?
                    <input type="radio" name="sumula" value="NAO" id="sumulan" onclick="vals();" <?php echo $linha['sumula'] == 'NAO' ? "checked" : ""?>/>
                    <label for="sumulan">NÃO</label>
                    <input type="radio" name="sumula" value="SIM" id="sumulas" onclick="vals();" <?php echo $linha['sumula'] == 'SIM' ? "checked" : ""?>/>
                    <label for="sumulas">SIM</label>
                  </div>
                  <div style="display:none;float:left; width:59%;" id="sumulasim"><br />
                    Será cobrado do cliente?
                    <input type="radio" name="cobrasumula" value="NAO" id="csumulan" <?php echo $linha['cobrasumula'] == 'NAO' ? "checked" : ""?>/>
                    <label for="csumulan">NÃO</label>
                    <input type="radio" name="cobrasumula" value="SIM" id="csumulas" <?php echo $linha['cobrasumula'] == 'SIM' ? "checked" : ""?>/>
                    <label for="csumulas">SIM</label>
                  </div>
                  <br />
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:48%; float:left"> <strong>Locação de equipamento:</strong><br />
                    <input type="radio" name="locaequip" value="SIM" id="radio5" <?php echo $linha['locaequip'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio5">SIM</label>
                    <input type="radio" name="locaequip" value="NAO" id="radio6" <?php echo $linha['locaequip'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio6">NÃO</label>
                    <br />
                    <br />
                    Descreva:<br />
                    <textarea name="campo27" cols="45" rows="2" id="campo27"   value="<?= $linha['campo27'] ?>"><?= $linha['campo27'] ?>
</textarea>
                    <br />
                  </div>
                  <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Valor incluso no custo:<br />
                    <input type="radio" name="locaequipv" value="SIM" id="radiolv13" <?php echo $linha['locaequipv'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radiolv13">SIM</label>
                    <input type="radio" name="locaequipv" value="NAO" id="radiolv14" <?php echo $linha['locaequipv'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radiolv14">NÃO</label>
                    <br />
                    <br />
                    Valor R$:<br />
                    <input name="campol31" type="text" id="campol31" size="15" value="<?= $linha['campol31'] ?>"/>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:48%; float:left"> <strong>Material de consumo:</strong><br />
                    <input type="radio" name="matconsumo" value="SIM" id="radio7" <?php echo $linha['matconsumo'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio7">SIM</label>
                    <input type="radio" name="matconsumo" value="NAO" id="radio8" <?php echo $linha['matconsumo'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio8">NÃO</label>
                    <br />
                    <br />
                    Descreva:<br />
                    <textarea name="campo28" cols="45" rows="2" id="campo28"   value="<?php echo $linha['campo28'] ?>" ><?php echo $linha['campo28'] ?></textarea>
                    <br />
                  </div>
                  <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Valor incluso no custo:<br />
                    <input type="radio" name="matconsv" value="SIM" id="radiomv13" <?php echo $linha['matconsv'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radiomv13">SIM</label>
                    <input type="radio" name="matconsv" value="NAO" id="radiomv14" <?php echo $linha['matconsv'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radiomv14">NÃO</label>
                    <br />
                    <br />
                    Valor R$:<br />
                    <input name="campom31" type="text" id="campom31" size="15" value="<?php echo $linha['campo31'] ?>"/>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:48%; float:left"><strong>Uniforme:</strong><br />
                    <input type="radio" name="uniforme" value="Estilo Social - R$ " id="radio11" onclick="val6();" <?php echo $linha['uniforme'] == 'Estilo Social - R$ ' ? "checked" : ""?>/>
                    <label for="radio11">Estilo Social</label>
                    R$
                    <input name="campo29" type="text" id="campo29" size="5" value="<?php echo $linha['campo29'] ?>"/>
                    <br />
                    <input type="radio" name="uniforme" value="Padrao" id="radio10" onclick="val1();val5();" <?php echo $linha['uniforme'] == 'Padrao' ? "checked" : ""?>/>
                    <label for="radio10">Padrão</label>
                    <br />
                    <input type="radio" name="uniforme" value="Especifico - Obs.: " id="radio9" onclick="val();" <?php echo $linha['uniforme'] == 'Especifico - Obs.: ' ? "checked" : ""?>/>
                    <label for="radio9">Específico</label>
                    <input name="campo30" type="text" id="campo30"  size="38" value="<?php echo $linha['campo30'] ?>"/>
                    <br />
                  </div>
                  <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"><strong>Fornecimento do EPI:</strong><br />
                    <input type="radio" name="usaepi" value="Empresa" id="radioe13" <?php echo $linha['usaepi'] == 'Empresa' ? "checked" : ""?>/>
                    <label for="radioe13">Empresa</label>
                    <input type="radio" name="usaepi" value="Cliente" id="radioe14" <?php echo $linha['usaepi'] == 'Cliente' ? "checked" : ""?>/>
                    <label for="radioe14">Cliente</label>
                    <br />
                    <br />
                    Obs.:<br />
                    <input name="obsepi"  type="text" id="obsepi"  size="45" value="<?php echo $linha['obsepi'] ?>"/>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:32%; float:left"><strong>Locação de armamentos:</strong><br />
                    <input type="radio" name="locarma" value="SIM" id="radio13" <?php echo $linha['locarma'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio13">SIM</label>
                    <input type="radio" name="locarma" value="NAO" id="radio14" <?php echo $linha['locarma'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio14">NÃO</label>
                    <br />
                    <br />
                  </div>
                  <div style="width:64%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Quantidade:<br />
                    <input name="campo31" type="text" id="campo31" size="15" value="<?php echo $linha['campo31'] ?>"/>
                    <br />
                    Obs.:<br />
                    <textarea name="campo32" cols="45" rows="1" style="overflow:hidden; font-family:Tahoma, Geneva, sans-serif;" id="campo32" value="<?php echo $linha['campo32'] ?>" ><?php echo $linha['campo32'] ?></textarea>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:32%; float:left"><strong>Adicional de Risco de Vida</strong><br />
                    <input type="radio" name="adicrico" value="SIM" id="radio15" <?php echo $linha['adicrico'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio15">SIM</label>
                    <input type="radio" name="adicrico" value="NAO" id="radio16" <?php echo $linha['adicrico'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio16">NÃO</label>
                    <br />
                    <br />
                  </div>
                  <div style="width:64%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Porcentual:<br />
                    <input name="campo33" type="text" id="campo33" size="15" value="<?php echo $linha['campo33'] ?>"/>
                    <br />
                    Obs.:<br />
                    <textarea name="campo34" cols="45" rows="1"  id="campo34"><?php echo $linha['campo34'] ?></textarea>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:32%; float:left"><strong>Insalubridade</strong><br />
                    <input type="radio" name="insalubri" value="SIM" id="radio17" <?php echo $linha['insalubri'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio17">SIM</label>
                    <input type="radio" name="insalubri" value="NAO" id="radio18" <?php echo $linha['insalubri'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio18">NÃO</label>
                    <br />
                    <br />
                  </div>
                  <div style="width:64%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Porcentual:<br />
                    <input name="campo35" type="text" id="campo35" size="15" value="<?php echo $linha['campo35'] ?>"/>
                    <br />
                    Obs.:<br />
                    <textarea name="campo36" cols="45" rows="1"  id="campo36"><?php echo $linha['campo36'] ?></textarea>
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div id="pericu" style="display:block">
                    <div style="width:32%; float:left"><strong>Periculosidade:</strong><br />
                      <input type="radio" name="periculosi" value="SIM" id="radio19" <?php echo $linha['periculosi'] == 'SIM' ? "checked" : ""?> />
                      <label for="radio19">SIM</label>
                      <input type="radio" name="periculosi" value="NAO" id="radio20" <?php echo $linha['periculosi'] == 'NAO' ? "checked" : ""?> />
                      <label for="radio20">NÃO</label>
                      <br />
                      <br />
                    </div>
                    <div style="width:64%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;">Porcentual:<br />
                      <input name="campo37" type="text" id="campo37" size="15" value="<?php echo $linha['campo37'] ?>"/>
                      <br />
                      Obs.:<br />
                      <textarea name="campo38" cols="45" rows="1"  id="campo38"><?php echo $linha['campo38'] ?></textarea>
                      <br />
                    </div>
                    <div style="clear:both"></div>
                    <br />
                    <hr style="color:#FFF" />
                    <br />
                  </div>
                  <div style="width:32%; float:left"> <strong>Prêmio por assiduidade:</strong><br />
                    <input type="radio" name="premassid" value="SIM" id="radio21" <?php echo $linha['premassid'] == 'SIM' ? "checked" : ""?> />
                    <label for="radio21">SIM</label>
                    <input type="radio" name="premassid" value="NAO" id="radio22" <?php echo $linha['premassid'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio22">NÃO</label>
                    <br />
                    <br />
                  </div>
                  <div style="width:64%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Porcentual
                    <input name="campo39" type="text" id="campo39" size="10" value="<?php echo $linha['campo39'] ?>"/>
                    <br />
                    ou<br />
                    Valor R$
                    <input name="campo40" type="text" id="campo40" size="10" value="<?php echo $linha['campo40'] ?>"/>
                    cada</div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:42%; float:left"> <strong>Gratificação adicional</strong><br />
                    <input type="radio" name="gratadic" value="SIM" id="radio23" <?php echo $linha['gratadic'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio23">SIM</label>
                    <input type="radio" name="gratadic" value="NAO" id="radio24" onclick="val10();" <?php echo $linha['gratadic'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio24">NÃO</label>
                    <br />
                    <br />
                    Informações da gratificação:<br />
                    <input name="campo41" type="text" id="campo41" size="35" value="<?php echo $linha['campo41'] ?>"/>
                    <br />
                  </div>
                  <div style="width:54%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Gratificação do posto ou do colaborador?<br />
                    <input type="radio" name="tipogratific" value="Posto" id="radio25" <?php echo $linha['tipogratific'] == 'Posto' ? "checked" : ""?>/>
                    <label for="radio25">Posto</label>
                    <input type="radio" name="tipogratific" value="Colaborador" id="radio26" <?php echo $linha['tipogratific'] == 'Colaborador' ? "checked" : ""?>/>
                    <label for="radio26">Colaborador</label>
                    <br />
                    <br />
                    Porcentual
                    <input name="campo42" type="text" id="campo42" size="6" value="<?php echo $linha['campo42'] ?>"/>
                    ou Valor R$
                    <input name="campo43" type="text" id="campo43" size="7" value="<?php echo $linha['campo43'] ?>"/>
                    cada<br />
                    <br />
                  </div>
                  <div style="clear:both"></div>
                  <br />
                </div>
              </div>
              <br />
              <div style="width: 100%; margin:0 auto;"> <strong>Benefícios:</strong> </div>
              <div >
                <div style="width: 100%; margin:0 auto;"><br />
                  <div style="width:31%; float:left"><strong>Vale Transporte:</strong><br />
                    <input type="radio" name="vtransporte" value="SIM" id="radio27" <?php echo $linha['vtransporte'] == 'SIM' ? "checked" : ""?> />
                    <label for="radio27">SIM</label>
                    <input type="radio" name="vtransporte" value="NAO" id="radio28" <?php echo $linha['vtransporte'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio28">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Ajuda de custo/Transporte no posto:<br />
                    <input type="radio" name="pajudacusto" value="SIM" id="radio35" <?php echo $linha['pajudacusto'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio35">SIM</label>
                    <input type="radio" name="pajudacusto" value="NAO" id="radio36" onclick="val2();" <?php echo $linha['pajudacusto'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio36">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> Obs.:
                    <textarea name="campo44" cols="25" rows="3" id="campo44"  value="<?php echo $linha['campo44'] ?>"><?php echo $linha['campo44'] ?></textarea>
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:31%; float:left"><strong>Convênio Médico:</strong><br />
                    <input type="radio" name="convmedico" value="SIM" id="radio29" <?php echo $linha['convmedico'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio29">SIM</label>
                    <input type="radio" name="convmedico" value="NAO" id="radio30" <?php echo $linha['convmedico'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio30">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Convênio Odontológico:<br />
                    <input type="radio" name="convodonto" value="SIM" id="radio37" <?php echo $linha['convodonto'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio37">SIM</label>
                    <input type="radio" name="convodonto" value="NAO" id="radio38" <?php echo $linha['convodonto'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio38">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> Obs.:
                    <textarea name="campo45" cols="25" rows="3" id="campo45"  value="<?php echo $linha['campo45'] ?>"><?php echo $linha['campo45'] ?></textarea>
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:31%; float:left"><strong>Visa Alimentação:</strong><br />
                    <input type="radio" name="visaaliment" value="SIM" id="radio31" <?php echo $linha['visaaliment'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio31">SIM</label>
                    <input type="radio" name="visaaliment" value="NAO" id="radio32" onclick="val7();" <?php echo $linha['visaaliment'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio32">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Valor padrão Empresa Prestadora:<br />
                    <input type="radio" name="vpempresaprest" value="SIM" id="radio39" <?php echo $linha['vpempresaprest'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio39">SIM</label>
                    <input type="radio" name="vpempresaprest" value="NAO" id="radio40" onclick="val3();" <?php echo $linha['vpempresaprest'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio40">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> Obs.:
                    <textarea name="campo46" cols="25" rows="3" id="campo46"  value="<?php echo $linha['campo46'] ?>"><?php echo $linha['campo46'] ?></textarea>
                  </div>
                  <div style="clear:both"></div>
                  <br />
                  <hr style="color:#FFF" />
                  <br />
                  <div style="width:31%; float:left"><strong>Visa Refeição:</strong><br />
                    <input type="radio" name="visarestaur" value="SIM" id="radio33" <?php echo $linha['visarestaur'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio33">SIM</label>
                    <input type="radio" name="visarestaur" value="NAO" id="radio34" <?php echo $linha['visarestaur'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio34">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Refeição no posto de trabalho:<br />
                    <input type="radio" name="refpostotrab" value="SIM" id="radio41" <?php echo $linha['refpostotrab'] == 'SIM' ? "checked" : ""?>/>
                    <label for="radio41">SIM</label>
                    <input type="radio" name="refpostotrab" value="NAO" id="radio42" onclick="val4();" <?php echo $linha['refpostotrab'] == 'NAO' ? "checked" : ""?>/>
                    <label for="radio42">NÃO</label>
                    <br />
                  </div>
                  <div style="width:31%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;"> Obs.:
                    <textarea name="campo47" cols="25" rows="3" id="campo47"  value="<?php echo $linha['campo47'] ?>"><?php echo $linha['campo47'] ?></textarea>
                  </div>
                  <div style="clear:both"></div>
                  <br />
                </div>
              </div>
            </div>
            <br />
            <div style="width: 100%; margin:0 auto;"> <strong>Departamentos Comunicados:</strong><br />
              Será enviado um e-mail automaticamente para os seguintes departamentos: </div>
            <div >
              <div style="width: 100%; margin:0 auto;"><br />
                Diretoria / Gerência / D. Pessoal /  Financeiro /  Jurídico / SGI / Recursos Humanos / Compras / Gestão de Contratos<br />
                <br />
                <hr style="color:#FFF" />
                <br />
                Observações:<br />
                <textarea name="mensagem" cols="100" rows="3" id="mensagem"  value="<?php echo $linha['mensagem'] ?>" ><?php echo $linha['mensagem'] ?></textarea>
                <br />
                <br />
                <div style="clear:both"></div>
                <div style="display:none">
                  <input name="id2" type="hidden" id="id2" value="<?php echo $linha['id'] ?>"/>
                  <input name="nomeuser" id="nomeuser" type="text" value="<? echo "$usuario"; ?>">
                  <input name="usuario" id="usuario" type="text" value="<? echo "$usuario"; ?>">
                  <input name="emailuser" id="emailuser" type="text" value="<? echo "$email"; ?>">
                </div>
                <div style="clear:both"></div>
                <br />
              </div>
            </div>
            <br />
            <div style="width: 100%; margin:0 auto;">
              <button type="reset" name="reset" id="reset" value="Apagar" class="btn btn-danger"> Apagar </button>
              <button type="submit" name="send" id="send" value="Salvar" onclick="salvar();" class="btn btn-success"> Salvar </button>
              <button type="submit" name="submit" id="submit"  value="Gerar PDF e Enviar" onclick="return (validar() && enviar());" class="btn btn-info"> Gerar PDF e Enviar </button>
              <br />
              <br />
            </div>
          </form>
        </div>
        <div class="col-md-12 text-left small-screen-center "  > <br />
          <br />
          <? echo "$ver_for_54"; ?><br />
          <br />
        </div>
      </div>
    </section>
  </article>
</div>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function validar(formulario){
	var formulario = document.getElementById('formulario');

	if(formulario.campo48.value == ''){ alert("Informe o Responsável p/ Implantação."); formulario.campo48.focus(); return false; }
	if(formulario.campo48.value == 'Selecione...'){ alert("Informe o Responsável p/ Implantação."); formulario.campo48.focus(); return false; }
	if(formulario.campo48.value == 'selected'){ alert("Informe o Responsável p/ Implantação."); formulario.campo48.focus(); return false; }
	if(formulario.gestor.value == ''){ alert("Informe o Gestor do Contrato."); formulario.gestor.focus(); return false; }
	if(formulario.gestor.value == 'Selecione...'){ alert("Informe o Gestor do Contrato."); formulario.gestor.focus(); return false; }
	if(formulario.gestor.value == 'selected'){ alert("Informe o Gestor do Contrato."); formulario.gestor.focus(); return false; }
	if(formulario.campo2.value == ''){alert("Informe o Código Cliente."); formulario.campo2.focus(); return false; }
	if(formulario.empresa.value == ''){ alert("Informe a EMPRESA."); formulario.empresa.focus(); return false; }
	if(formulario.empresa.value == 'Selecione...'){ alert("Informe a EMPRESA."); formulario.empresa.focus(); return false; }
	if(formulario.empresa.value == 'selected'){ alert("Informe a EMPRESA."); formulario.empresa.focus(); return false; }
	if(formulario.regiao.value == ''){ alert("Informe a FILIAL."); formulario.regiao.focus(); return false; }
	if(formulario.regiao.value == 'Selecione...'){ alert("Informe a FILIAL."); formulario.regiao.focus(); return false; }
	if(formulario.regiao.value == 'selected'){ alert("Informe a FILIAL."); formulario.regiao.focus(); return false; }
	if (formulario.radio1.checked == false && formulario.radio2.checked == false && formulario.radio2i.checked == false) {alert ('Informe se será Implantação Inicial, Ampliação ou Redução.');return false;}
		
	if(formulario.campo4.value == ''){alert("Informe a Contratante / Razão Social."); formulario.campo4.focus(); return false; }
	if(formulario.campo5.value == ''){alert("Informe a Rua e Bairro."); formulario.campo5.focus(); return false; }
	if(formulario.campo6.value == ''){alert("Informe a Cidade."); formulario.campo6.focus(); return false; }
	if(formulario.campo7.value == ''){alert("Informe o CEP."); formulario.campo7.focus(); return false; }
	if(formulario.campo8.value == ''){alert("Informe o CNPJ."); formulario.campo8.focus(); return false; }
	if(formulario.campo9.value == ''){alert("Informe a Inscrição Estadual."); formulario.campo9.focus(); return false; }
	if(formulario.campo11.value == ''){alert("Informe o Telefone / Fax."); formulario.campo11.focus(); return false; }
	
	if (formulario.cei.value !== '' && formulario.fiscs.checked == false && formulario.fiscn.checked == false ) {alert ('Informe se o CEI será incluído na NOTA FISCAL.');return false;}
	if (formulario.cei.value !== '' && formulario.sefips.checked == false && formulario.sefipn.checked == false ) {alert ('Informe se o CEI será incluído na SEFIP.');return false;}
	if (formulario.cei.value !== '' && formulario.ceis.checked == false && formulario.cein.checked == false ) {alert ('Informe se o CEI será ÚNICO E FIXO MENSAL.');return false;}

	if(formulario.campo13.value == ''){alert("Informe o Endereço de E-mail para cobrança e envio de documentos."); formulario.campo13.focus(); return false;	}
	if(formulario.campo14.value == ''){alert("Informe o Local de Implantação."); formulario.campo14.focus(); return false;	}
	if(formulario.campo15.value == ''){alert("Informe o Contato Comercial / Faturam."); formulario.campo15.focus(); return false;	}
	if(formulario.campo16.value == ''){alert("Informe o E-mail do contato comercial / faturam."); formulario.campo16.focus(); return false;	}
	if(formulario.campo17.value == ''){alert("Informe o Responsável Legal."); formulario.campo17.focus(); return false;	}
	if(formulario.campo18.value == ''){alert("Informe o CPF do Responsável Legal."); formulario.campo18.focus(); return false;	}
	
	if(formulario.campo19.value == ''){ alert("Informe a Atividade."); formulario.campo19.focus(); return false; }
	if(formulario.campo19.value == 'Selecione...'){ alert("Informe a Atividade."); formulario.campo19.focus(); return false; }
	if(formulario.campo19.value == 'selected'){ alert("Informe a Atividade."); formulario.campo19.focus(); return false; }
	if(formulario.campo19.value == 'Outra: ' && formulario.outraatv.value == ''){ alert("Informe o nome da Atividade."); formulario.outraatv.focus(); return false; }
		
	if(formulario.campo24.value == ''){alert("Informe o Início da implantação do serviço."); formulario.campo24.focus(); return false;	}
	
	if(formulario.campo25.value == ''){alert("Informe o dia de Vencimento da Fatura."); formulario.campo25.focus(); return false;	}
	if(formulario.campo26.value == ''){alert("Informe a Duração do Contrato."); formulario.campo26.focus(); return false;	}
	if (formulario.radio3.checked == false && formulario.radio4.checked == false ) {alert ('Informe se a forma de faturamento será Valor Mensal ou Valor homem / hora.');return false;}
	if(formulario.regcon.value == ''){alert("Informe o  Reajuste do Contrato pelo Índice."); formulario.regcon.focus(); return false;	}

if(formulario.campo19.value == 'PORTARIA A DISTANCIA'){ 
if(formulario.mensalvalor.value == ''){alert("Informe o VALOR DA MENSALIDADE."); formulario.mensalvalor.focus(); return false;	}
if(formulario.taxaadesao.value == ''){alert("Informe o VALOR DA TAXA DE ADESÃO."); formulario.taxaadesao.focus(); return false;	}
; return true; }

		if(formulario.campo19.value != 'ADMINISTRACAO CONDOMINIAL'){			
if(formulario.campo20.value == ''){alert("Informe o numero de Postos."); formulario.campo20.focus(); return false;	}
if (formulario.sumulas.checked == false && formulario.sumulan.checked == false ) {alert ('Informe se a Súmula 444 está inclusa no contrato.');return false;}
		if (formulario.sumulan.checked == true && formulario.csumulan.checked == false && formulario.csumulas.checked == false) {alert ('Informe se a Súmula 444 será cobrada do cliente.');return false;}
	if(formulario.campo22.value == ''){alert("Informe a quantidade de Horas / mês."); formulario.campo22.focus(); return false;	}

	if(formulario.campo21.value == ''){alert("Informe o numero de Empregados."); formulario.campo21.focus(); return false;	}
	if(formulario.hora1.value == ''){alert("Informe o HORÁRIO DE ENTRADA ATUAL."); formulario.hora1.focus(); return false;}
	if(formulario.hora2.value == ''){alert("Informe o HORÁRIO DE SAÍDA ATUAL."); formulario.hora2.focus(); return false;}
	if(formulario.escatual.value == ''){ alert("Informe a ESCALA ATUAL."); formulario.escatual.focus(); return false; }
	if(formulario.escatual.value == 'Selecione...'){ alert("Informe a ESCALA ATUAL."); formulario.escatual.focus(); return false; }
	if(formulario.escatual.value == 'selected'){ alert("Informe a ESCALA ATUAL."); formulario.escatual.focus(); return false; }
	if(formulario.escatual.value == 'OUTRA: ' && formulario.especif1.value == ''){alert("Especifique a NOVA ESCALA."); formulario.especif1.focus(); return false;}
	if(formulario.escatual.value == '6 X 1 Folga fixa - ' && formulario.folgfix1.value == ''){alert("Informe o DIA da folga."); formulario.folgfix1.focus(); return false;}
	if(formulario.escatual.value == '6 X 1 Folga fixa - ' && formulario.folgfix1.value == 'Selecione...'){alert("Informe o DIA da folga."); formulario.folgfix1.focus(); return false;}
	if(formulario.escatual.value == '6 X 1 Folga fixa - ' && formulario.folgfix1.value == 'selected'){alert("Informe o DIA da folga."); formulario.folgfix1.focus(); return false;}
	if(formulario.escatual.value == '12 X 36 - nos dias' && formulario.dias241.value == ''){alert("Informe os DIAS de PLANTÃO."); formulario.dias241.focus(); return false;}
	if(formulario.escatual.value == '6 x 1 - 44 hs' && formulario.horas1.value == ''){alert("Informe o HORÁRIO DE ENTRADA do SÁBADO."); formulario.horas1.focus(); return false;}
	if(formulario.escatual.value == '6 x 1 - 44 hs' && formulario.horas2.value == ''){alert("Informe o HORÁRIO DE SAÍDA do SÁBADO."); formulario.horas2.focus(); return false;}
	if (formulario.art71.checked == true && formulario.art71d.checked == false && formulario.art71n.checked == false ) {alert ('Informe em quais períodos se aplica o Artigo 71.');return false;}
	if (formulario.art71.checked == true && formulario.hora3.value !== ''){alert("Quando há o artigo 71, NÃO EXISTE INTERVALO."); formulario.hora3.focus(); return false;}
	if (formulario.art71.checked == true && formulario.hora4.value !== ''){alert("Quando há o artigo 71, NÃO EXISTE INTERVALO."); formulario.hora4.focus(); return false;}
	
	if (document.getElementById('art71p2').checked == true && document.getElementById('art71dp2').checked == false && document.getElementById('art71np2').checked == false ) {alert ('Informe em quais períodos se aplica o Artigo 71.');return false;}
	if(formulario.escatual2.value == 'OUTRA: ' && formulario.especif2.value == ''){alert("Especifique a NOVA ESCALA."); formulario.especif2.focus(); return false;}
	if(formulario.escatual2.value == '6 X 1 Folga fixa - ' && formulario.folgfix2.value == ''){alert("Informe o DIA da folga."); formulario.folgfix2.focus(); return false;}
	if(formulario.escatual2.value == '6 X 1 Folga fixa - ' && formulario.folgfix2.value == 'Selecione...'){alert("Informe o DIA da folga."); formulario.folgfix2.focus(); return false;}
	if(formulario.escatual2.value == '6 X 1 Folga fixa - ' && formulario.folgfix2.value == 'selected'){alert("Informe o DIA da folga."); formulario.folgfix2.focus(); return false;}
	if(formulario.escatual2.value == '12 X 36 - nos dias' && formulario.dias242.value == ''){alert("Informe os DIAS de PLANTÃO."); formulario.dias242.focus(); return false;}
	if(formulario.escatual2.value == '6 x 1 - 44 hs' && formulario.horas3.value == ''){alert("Informe o HORÁRIO DE ENTRADA do SÁBADO."); formulario.horas3.focus(); return false;}
	if(formulario.escatual2.value == '6 x 1 - 44 hs' && formulario.horas4.value == ''){alert("Informe o HORÁRIO DE SAÍDA do SÁBADO."); formulario.horas4.focus(); return false;}
	
	if (document.getElementById('art71p3').checked == true && document.getElementById('art71dp3').checked == false && document.getElementById('art71np3').checked == false ) {alert ('Informe em quais períodos se aplica o Artigo 71.');return false;}
	if(formulario.escatual3.value == 'OUTRA: ' && formulario.especif3.value == ''){alert("Especifique a NOVA ESCALA."); formulario.especif3.focus(); return false;}
	if(formulario.escatual3.value == '6 X 1 Folga fixa - ' && formulario.folgfix3.value == ''){alert("Informe o DIA da folga."); formulario.folgfix3.focus(); return false;}
	if(formulario.escatual3.value == '6 X 1 Folga fixa - ' && formulario.folgfix3.value == 'Selecione...'){alert("Informe o DIA da folga."); formulario.folgfix3.focus(); return false;}
	if(formulario.escatual3.value == '6 X 1 Folga fixa - ' && formulario.folgfix3.value == 'selected'){alert("Informe o DIA da folga."); formulario.folgfix3.focus(); return false;}
	if(formulario.escatual3.value == '12 X 36 - nos dias' && formulario.dias243.value == ''){alert("Informe os DIAS de PLANTÃO."); formulario.dias243.focus(); return false;}
	if(formulario.escatual3.value == '6 x 1 - 44 hs' && formulario.horas5.value == ''){alert("Informe o HORÁRIO DE ENTRADA do SÁBADO."); formulario.horas6.focus(); return false;}
	if(formulario.escatual3.value == '6 x 1 - 44 hs' && formulario.horas5.value == ''){alert("Informe o HORÁRIO DE SAÍDA do SÁBADO."); formulario.horas6.focus(); return false;}

	if (formulario.campo21.value != '' && formulario.valorn.checked == false && formulario.valoru.checked == false) {alert ('Informe se há informações sobre o 1º salário.');return false;}	
	if (formulario.valoru.checked == true && formulario.salario1.value == '') {alert ('Informe o Valor do 1º Salário.'); formulario.salario1.focus(); return false;}
	
	if (formulario.campo212.value != '' && formulario.valorn2.checked == false && formulario.valoru2.checked == false) {alert ('Informe se há informações sobre o 2º salário.');return false;}	
	if (formulario.valoru2.checked == true && formulario.salario2.value == '') {alert ('Informe o Valor do 2º Salário.'); formulario.salario2.focus(); return false;}
	
	if (formulario.campo213.value != '' && formulario.valorn3.checked == false && formulario.valoru3.checked == false) {alert ('Informe se há informações sobre o 3º salário.');return false;}	
	if (formulario.valoru3.checked == true && formulario.salario3.value == '') {alert ('Informe o Valor do 3º Salário.'); formulario.salario3.focus(); return false;}


	if (formulario.radio5.checked == false && formulario.radio6.checked == false ) {alert ('Informe se haverá Locação de Equipamento.');return false;}
	if (formulario.radio5.checked == true && formulario.radiolv13.checked == false && formulario.radiolv14.checked == false) {alert ('Informe o valor da locação de equipamentos será cobrado do Cliente ou será Cortesia.'); formulario.campo27.focus(); return false;}
	if (formulario.radio5.checked == true && formulario.campol31.value == '') {alert ('Informe o valor total dos Equipamentos Locados.'); formulario.campo27.focus(); return false;}
	if (formulario.radio5.checked == true && formulario.campo27.value == '') {alert ('Descreva quais Equipamentos serão Locados.'); formulario.campo27.focus(); return false;}

	if (formulario.radio7.checked == false && formulario.radio8.checked == false ) {alert ('Informe se haverá Material de Consumo.');return false;}
	if (formulario.radio7.checked == true && formulario.radiomv13.checked == false && formulario.radiomv14.checked == false) {alert ('Informe o material de consumo será cobrado do Cliente ou será Cortesia.'); formulario.campo27.focus(); return false;}
	if (formulario.radio7.checked == true && formulario.campom31.value == '') {alert ('Informe o valor total dos Materiais de Consumo.'); formulario.campo28.focus(); return false;}
	if (formulario.radio7.checked == true && formulario.campo28.value == '') {alert ('Descreva quais Materiais serão Consumidos.'); formulario.campo28.focus(); return false;}
	
	if (formulario.radio9.checked == false && formulario.radio10.checked == false && formulario.radio11.checked == false ) {alert ('Informe o tipo de Uniforme.');return false;}
	if (formulario.radio11.checked == true && formulario.campo29.value == '') {alert ('Informe o Valor do Uniforme.'); formulario.campo29.focus(); return false;}
	if (formulario.radio9.checked == true && formulario.campo30.value == '') {alert ('Informe a Especificação do Uniforme.'); formulario.campo30.focus(); return false;}

	if (formulario.radioe13.checked == false && formulario.radioe14.checked == false ) {alert ('Informe se o EPI será fornecido pela Empresa ou pelo Cliente.');return false;}

	if (formulario.radio13.checked == false && formulario.radio14.checked == false ) {alert ('Informe se haverá Locação de Armamentos.');return false;}
	if (formulario.radio13.checked == true && formulario.campo31.value == '') {alert ('Informe a Quantidade de Armamento.'); formulario.campo31.focus(); return false;}

	if (formulario.radio15.checked == false && formulario.radio16.checked == false ) {alert ('Informe se haverá Adicional de Risco de Vida.');return false;}
	if (formulario.radio15.checked == true && formulario.campo33.value == '') {alert ('Informe o Porcentual do Adicional de Risco de Vida.'); formulario.campo33.focus(); return false;}

	if (formulario.radio17.checked == false && formulario.radio18.checked == false ) {alert ('Informe se haverá Insalubridade.');return false;}
	if (formulario.radio17.checked == true && formulario.campo35.value == '') {alert ('Informe o Porcentual da Insalubridade.'); formulario.campo35.focus(); return false;}

if (formulario.campo19.value != 'VIGILANTE' && formulario.campo19.value != 'VIGILANTE LIDER' && formulario.campo19.value != 'VIGILANTE MOTORIZADO' && formulario.radio19.checked == false && formulario.radio20.checked == false) {alert ('Informe se haverá Periculosidade.');return false;}

	if (formulario.radio19.checked == true && formulario.campo37.value == '') {alert ('Informe o Porcentual da Periculosidade.'); formulario.campo37.focus(); return false;}
	
	if (formulario.radio21.checked == false && formulario.radio22.checked == false ) {alert ('Informe se haverá Prêmio por Assiduidade.');return false;}
	if (formulario.radio21.checked == true && formulario.campo39.value == '' && formulario.campo40.value == '') {alert ('Informe o Porcentual OU o Valor do Prêmio por Assiduidade.'); formulario.campo39.focus(); return false;}
	
	if (formulario.radio23.checked == false && formulario.radio24.checked == false ) {alert ('Informe se haverá Gratificação Adicional.');return false;}
	if (formulario.radio24.checked == true && formulario.radio25.checked == true ) {alert ('Quando NÃO HÁ Gratificação Adicional, essa opção não pode ser selecionada.'); formulario.radio23.focus() ;return false;}
	if (formulario.radio24.checked == true && formulario.radio26.checked == true ) {alert ('Quando NÃO HÁ Gratificação Adicional, essa opção não pode ser selecionada.'); formulario.radio23.focus() ;return false;}
	if (formulario.radio24.checked == true && formulario.campo41.value != "" ) {alert ('Quando NÃO HÁ Gratificação Adicional, esse campo não pode ser preenchido.'); formulario.campo41.focus() ;return false;}
	if (formulario.radio24.checked == true && formulario.campo42.value != "" ) {alert ('Quando NÃO HÁ Gratificação Adicional, esse campo não pode ser preenchido.'); formulario.campo42.focus() ;return false;}
	if (formulario.radio24.checked == true && formulario.campo43.value != "" ) {alert ('Quando NÃO HÁ Gratificação Adicional, esse campo não pode ser preenchido.'); formulario.campo43.focus() ;return false;}
	if (formulario.radio23.checked == true && formulario.radio25.checked == false && formulario.radio26.checked == false ) {alert ('Informe se a gratificação será do Posto OU do Colaborador.');return false;}
	if (formulario.radio23.checked == true && formulario.campo41.value == '' ) {alert ('Informe o Tipo de Gratificação.'); formulario.campo41.focus(); return false;}
	if (formulario.radio23.checked == true && formulario.campo42.value == '' && formulario.campo43.value == '' ) {alert ('Informe o Porcentual OU o Valor da gratificação.'); formulario.campo42.focus(); return false;}
	
	if (formulario.radio27.checked == false && formulario.radio28.checked == false ) {alert ('Informe se haverá Vale Transporte.');return false;}
	if (formulario.radio28.checked == true & formulario.radio35.checked == true & formulario.campo44.value == '') {alert ('Quando NÃO há vale transporte, e Posto com ajuda de custo "SIM", é obrigatório informar o valor.');formulario.campo44.focus();return false;}
	if (formulario.radio27.checked == true & formulario.radio36.checked == false) {alert ('Quando existe o USO do vale transporte, é obrigatório selecionar Posto com ajuda de custo "NÃO".');return false;}
	if (formulario.radio35.checked == true & formulario.campo44.value == '' ) {alert ('Informe o Valor da Ajuda de Custo.'); formulario.campo44.focus(); return false;}
		
	if (formulario.radio29.checked == false && formulario.radio30.checked == false ) {alert ('Informe se haverá Convênio Médico.');return false;}
	if (formulario.radio37.checked == false && formulario.radio38.checked == false ) {alert ('Informe se haverá Convênio Odontológico.');return false;}
	
	if (formulario.radio31.checked == false && formulario.radio32.checked == false ) {alert ('Informe se haverá Visa Alimentação.');return false;}
	if (formulario.radio31.checked == true & formulario.radio39.checked == false & formulario.radio40.checked == false) {alert ('Quando existe o USO do Visa Alimentação, informe se será Valor Padrão da Empresa Prestadora ou não.');formulario.campo46.focus();return false;}
	if (formulario.radio40.checked == true & formulario.campo46.value == '' ) {alert ('Informe o Valor da Cesta Básica.');formulario.campo46.focus(); return false;}
	
	if (formulario.radio33.checked == false && formulario.radio34.checked == false ) {alert ('Informe se haverá Visa Refeição.');return false;}
	if (formulario.radio34.checked == true & formulario.radio41.checked == false) {alert ('Quando NÃO há Visa Refeição, é obrigatório selecionar Refeição no Posto de Trabalho "SIM".');return false;}
	if (formulario.radio33.checked == true & formulario.radio42.checked == false) {alert ('Quando existe o USO do Visa Refeição, é obrigatório selecionar Refeição no Posto de Trabalho "NÃO".');return false;}
	if (formulario.radio41.checked == true & formulario.campo47.value == '' ) {alert ('Informe qual o tipo de Refeição no Posto de Trabalho.');formulario.campo47.focus(); return false;}
	; return true; }
	
return true;}

function enviar(){
	document.formulario.action = "geraphp.php";
	document.formulario.target = "";
	document.formulario.submit();}

function salvar(){
  document.formulario.action = "save.php";
	document.formulario.target = "";
	document.formulario.submit();}	

function UR_Start() 
{	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{	return (Value > 9) ? "" + Value : "0" + Value;}

function val(){  if(document.getElementById('radio9').checked){document.getElementById('campo29').value = '';}}
function val1(){ if(document.getElementById('radio10').checked){document.getElementById('campo29').value = '';}}
function val2(){ if(document.getElementById('radio36').checked){document.getElementById('campo44').value = '';}}
function val3(){ if(document.getElementById('radio40').checked){document.getElementById('campo46').value = '';}}
function val4(){ if(document.getElementById('radio42').checked){document.getElementById('campo47').value = '';}}
function val5(){ if(document.getElementById('radio10').checked){document.getElementById('campo30').value = '';}}
function val6(){ if(document.getElementById('radio11').checked){document.getElementById('campo30').value = '';}}
function val7(){ if(document.getElementById('radio32').checked){document.getElementById('campo46').value = ''; document.getElementById('radio39').checked=false; document.getElementById('radio40').checked=false;}}
function val10(){  
if(document.getElementById('radio24').checked){document.getElementById('campo41').value = ''; document.getElementById('campo42').value = ''; document.getElementById('campo43').value = ''; document.getElementById("radio25").checked=false; document.getElementById("radio26").checked=false;}}
function val11(){  
if(document.getElementById('valoru').checked)
{document.getElementById('salariouni').style.display = 'block';}

if(document.getElementById('valorn').checked)
{document.getElementById('salario1').value = '';
document.getElementById('salariouni').style.display = 'none';}}

function val211(){  
if(document.getElementById('valoru2').checked)
{document.getElementById('salariouni2').style.display = 'block';}

if(document.getElementById('valorn2').checked)
{document.getElementById('salario2').value = '';
document.getElementById('salariouni2').style.display = 'none';}}

function val311(){  
if(document.getElementById('valoru3').checked)
{document.getElementById('salariouni3').style.display = 'block';}

if(document.getElementById('valorn3').checked)
{document.getElementById('salario3').value = '';
document.getElementById('salariouni3').style.display = 'none';}}

function val71(){ if(document.getElementById('art71').checked){document.getElementById('hora3').value = ''; document.getElementById('hora4').value = ''; document.getElementById('artg71').style.display = 'none'; document.getElementById('artg712').style.display = 'block';}else{document.getElementById('art71n').checked=false; document.getElementById('art71d').checked=false; document.getElementById('artg71').style.display = 'block'; document.getElementById('artg712').style.display = 'none';}}

function val712(){ if(document.getElementById('art71p2').checked){document.getElementById('hora7').value = ''; document.getElementById('hora8').value = ''; document.getElementById('artg71p2').style.display = 'none'; document.getElementById('artg712-2').style.display = 'block';}else{document.getElementById('art71np2').checked=false; document.getElementById('art71dp2').checked=false; document.getElementById('artg71p2').style.display = 'block'; document.getElementById('artg712-2').style.display = 'none';}}

function val713(){ if(document.getElementById('art71p3').checked){document.getElementById('hora11').value = ''; document.getElementById('hora12').value = ''; document.getElementById('artg71p3').style.display = 'none'; document.getElementById('artg712-3').style.display = 'block';}else{document.getElementById('art71np3').checked=false; document.getElementById('art71dp3').checked=false; document.getElementById('artg71p3').style.display = 'block'; document.getElementById('artg712-3').style.display = 'none';}}

function val8(){  
Valor = document.getElementById('escatual').value;
if (Valor=="OUTRA: "){ document.getElementById('oculta1').style.display = 'block';}
else {document.getElementById('especif1').value=""; document.getElementById('oculta1').style.display = 'none'; }
if (Valor=="6 X 1 Folga fixa - "){ document.getElementById('oculta3').style.display = 'block';}
else {document.getElementById('folgfix1').value=""; document.getElementById('oculta3').style.display = 'none'; }
if (Valor=="12 X 36 - nos dias"){ document.getElementById('oculta2').style.display = 'block';}
else {document.getElementById('dias241').value=""; document.getElementById('oculta2').style.display = 'none'; }
if (Valor=="6 x 1 - 44 hs"){ document.getElementById('oculta4').style.display = 'block'; document.getElementById('txtsab').value=" - horario no sabado:";}
else {document.getElementById('horas1').value=""; document.getElementById('horas2').value=""; document.getElementById('txtsab').value=""; document.getElementById('oculta4').style.display = 'none'; }}

function val82(){  
Valor = document.getElementById('escatual2').value;
if (Valor=="OUTRA: "){ document.getElementById('oculta12').style.display = 'block';}
else {document.getElementById('especif2').value=""; document.getElementById('oculta12').style.display = 'none'; }
if (Valor=="6 X 1 Folga fixa - "){ document.getElementById('oculta32').style.display = 'block';}
else {document.getElementById('folgfix2').value=""; document.getElementById('oculta32').style.display = 'none'; }
if (Valor=="12 X 36 - nos dias"){ document.getElementById('oculta22').style.display = 'block';}
else {document.getElementById('dias242').value=""; document.getElementById('oculta22').style.display = 'none'; }
if (Valor=="6 x 1 - 44 hs"){ document.getElementById('oculta42').style.display = 'block'; document.getElementById('txtsab2').value=" - horario no sabado:";}
else {document.getElementById('horas3').value=""; document.getElementById('horas4').value=""; document.getElementById('txtsab2').value=""; document.getElementById('oculta42').style.display = 'none'; }}

function val83(){  
Valor = document.getElementById('escatual3').value;
if (Valor=="OUTRA: "){ document.getElementById('oculta13').style.display = 'block';}
else {document.getElementById('especif3').value=""; document.getElementById('oculta13').style.display = 'none'; }
if (Valor=="6 X 1 Folga fixa - "){ document.getElementById('oculta33').style.display = 'block';}
else {document.getElementById('folgfix3').value=""; document.getElementById('oculta33').style.display = 'none'; }
if (Valor=="12 X 36 - nos dias"){ document.getElementById('oculta23').style.display = 'block';}
else {document.getElementById('dias243').value=""; document.getElementById('oculta23').style.display = 'none'; }
if (Valor=="6 x 1 - 44 hs"){ document.getElementById('oculta43').style.display = 'block'; document.getElementById('txtsab3').value=" - horario no sabado:";}
else {document.getElementById('horas5').value=""; document.getElementById('horas6').value=""; document.getElementById('txtsab3').value=""; document.getElementById('oculta43').style.display = 'none'; }}

function vals(){ if(document.getElementById('sumulan').checked){document.getElementById('sumulasim').style.display = 'block';}
if(document.getElementById('sumulas').checked){document.getElementById('csumulas').checked=false; document.getElementById('csumulan').checked=false; document.getElementById('sumulasim').style.display = 'none';}}

function valemp() {if(document.getElementById('empresa').value=="SPSP Seguranca Patrimonial"){document.getElementById('pericu').style.display = 'none'; document.getElementById('radio19').checked=false; document.getElementById('radio20').checked=false; document.getElementById('campo37').value=""; document.getElementById('campo38').value=""}else{document.getElementById('pericu').style.display = 'block';}}

function val9(){  
Valor = document.getElementById('campo19').value;
if (Valor=="OUTRA: "){ document.getElementById('oculta').style.display = 'block';}else {document.getElementById('outraatv').value=""; document.getElementById('oculta').style.display = 'none'; }
if (Valor=="PORTARIA A DISTANCIA"){document.getElementById('monitport').style.display = 'block'; }else{document.getElementById('mensalvalor').value="";document.getElementById('taxaadesao').value="";document.getElementById('monitport').style.display = 'none';}
if (Valor=="ADMINISTRACAO CONDOMINIAL"||Valor=="PORTARIA A DISTANCIA"){ document.getElementById("radio3").checked=true; document.getElementById("valoru").checked=false; document.getElementById("valoru2").checked=false; document.getElementById("valorn2").checked=false; document.getElementById("valorn3").checked=false;  document.getElementById("valorn").checked=false; document.getElementById('salario1').value=""; document.getElementById('salario2').value="";document.getElementById('salario3').value="";document.getElementById('salariouni').style.display = 'none';document.getElementById('esconde').style.display = 'none';document.getElementById('sumulasim').style.display = 'none';document.getElementById('esconde2').style.display = 'none';document.getElementById('esconde3').style.display = 'none';document.getElementById('campo22').value="";document.getElementById('campo21').value="";document.getElementById('campo212').value="";document.getElementById('campo213').value="";document.getElementById('hora1').value="";document.getElementById('hora2').value="";document.getElementById('hora3').value="";document.getElementById('hora4').value="";document.getElementById('hora5').value="";document.getElementById('hora6').value="";document.getElementById('hora7').value="";document.getElementById('hora8').value="";document.getElementById('hora9').value="";document.getElementById('hora10').value="";document.getElementById('hora11').value="";document.getElementById('hora12').value="";document.getElementById('trabsab').checked=false;document.getElementById('trabsab2').checked=false;document.getElementById('obsepi').value="";document.getElementById('campom31').value="";document.getElementById('campol31').value="";document.getElementById('sumulan').checked=false;document.getElementById('sumulas').checked=false;document.getElementById('radioe13').checked=false;document.getElementById('radioe14').checked=false;document.getElementById('csumulan').checked=false;document.getElementById('csumulas').checked=false;document.getElementById('radio5').checked=false;document.getElementById('radio6').checked=false;document.getElementById('radiolv13').checked=false;document.getElementById('radiolv14').checked=false;document.getElementById('radiomv13').checked=false;document.getElementById('radiomv14').checked=false;document.getElementById('trabsab3').checked=false;document.getElementById('escatual').value="";document.getElementById('escatual2').value="";document.getElementById('escatual3').value="";document.getElementById('escatual').focus();document.getElementById('escatual2').focus();document.getElementById('escatual3').focus(); document.getElementById('obsesc').value=""; document.getElementById('folgfix1').value="";document.getElementById('folgfix2').value="";document.getElementById('folgfix3').value="";document.getElementById('folgfix1').focus();document.getElementById('folgfix2').focus();document.getElementById('folgfix3').focus();val8();val82();val83();document.getElementById('obsesc').value=""; document.getElementById("radio4").checked=false;document.getElementById("radio5").checked=false;document.getElementById("radio6").checked=false;document.getElementById("radio7").checked=false;document.getElementById("radio8").checked=false;document.getElementById("radio9").checked=false;document.getElementById("radio10").checked=false;document.getElementById("radio11").checked=false;document.getElementById("radio13").checked=false;document.getElementById("radio14").checked=false;document.getElementById("radio15").checked=false;document.getElementById("radio16").checked=false;document.getElementById("radio17").checked=false;document.getElementById("radio18").checked=false;document.getElementById("radio19").checked=false;document.getElementById("radio20").checked=false;document.getElementById("radio21").checked=false;document.getElementById("radio22").checked=false;document.getElementById('campo27').value="";document.getElementById('campo28').value="";document.getElementById('campo29').value="";document.getElementById('campo30').value="";document.getElementById('campo31').value="";document.getElementById('campo32').value="";document.getElementById('campo33').value="";document.getElementById('campo34').value="";document.getElementById('campo35').value="";document.getElementById('campo36').value="";document.getElementById('campo37').value="";document.getElementById('campo38').value="";document.getElementById('campo39').value="";document.getElementById('campo40').value="";document.getElementById('campo41').value="";document.getElementById('campo42').value="";document.getElementById('campo43').value="";document.getElementById('campo44').value="";document.getElementById('campo45').value="";document.getElementById('campo46').value="";document.getElementById('campo47').value="";document.getElementById("radio23").checked=false;document.getElementById("radio24").checked=false;document.getElementById("radio25").checked=false;document.getElementById("radio26").checked=false;document.getElementById("radio27").checked=false;document.getElementById("radio28").checked=false;document.getElementById("radio29").checked=false;document.getElementById("radio30").checked=false;document.getElementById("radio31").checked=false;document.getElementById("radio32").checked=false;document.getElementById("radio33").checked=false;document.getElementById("radio34").checked=false;document.getElementById("radio35").checked=false;document.getElementById("radio36").checked=false;document.getElementById("radio37").checked=false;document.getElementById("radio38").checked=false;document.getElementById("radio39").checked=false;document.getElementById("radio40").checked=false;document.getElementById("radio41").checked=false;document.getElementById("radio42").checked=false;document.getElementById("art71p2").checked=false;document.getElementById('artg712-2').style.display = 'none';document.getElementById("art71dp2").checked=false;document.getElementById("art71np2").checked=false;document.getElementById("art71").checked=false;document.getElementById('artg712').style.display = 'none';document.getElementById("art71d").checked=false;document.getElementById("art71n").checked=false;document.getElementById("art71p3").checked=false;document.getElementById('artg712-3').style.display = 'none';document.getElementById("art71dp3").checked=false;document.getElementById("art71np3").checked=false;}
else {document.getElementById("radio3").checked=false;document.getElementById('esconde').style.display = 'block';document.getElementById('esconde2').style.display = 'block';document.getElementById('esconde3').style.display = 'block';document.getElementById('regcon').value="";}
if (Valor=="Vigilante"||Valor=="Vigilante lider"||Valor=="Vigilante Motorizado"){ document.getElementById('pericu').style.display = 'none'; document.getElementById("radio19").checked=false; document.getElementById("radio20").checked=false; document.getElementById('campo37').value=""; document.getElementById('campo38').value="";}else {document.getElementById('pericu').style.display = 'block'; }
}

function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {src.value += texto.substring(0,1);  }}

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
   	alert("Data de INÍCIO inválida");
	formulario.campo24.focus(); return false;
    return false;
   }
   else {
/*   	alert("Data correta");*/
    return true;
   }}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{if (tecla==8 || tecla==0) return true;
	else  return false;}}

function PrimeiroFocus(){
document.getElementById('campo48').focus();}

$(window).load(function() {
   UR_Start();
   val();
   val1();
   val2();
   val3();
   val4();
   val5();
   val6();
   val7();
   val8();
   val82();
   val83();
   val9();
   val10();
   val11();
   val211();
   val311();
   val71();
   val712();
   val713();
   vals();
   valemp();
   PrimeiroFocus();
});

</script>
<style type="text/css">
body, td, th {
	color: #000000;
	font-size: 14px;
}

textarea {
	padding: 0;
	outline: none;
	resize: none;
	overflow: hidden;
}
</style>
<? include("../roda.php"); ?>
