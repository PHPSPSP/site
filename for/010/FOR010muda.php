<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  };

$usuario = $_SESSION['nome'];
$id = $_SESSION['id'];
$email = $_SESSION['mail'];
$horac = date('H:i:s');

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{ };

?>
<? include("../topo.php"); ?>

<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-short-top element-medium-bottom not-condensed" >
              <h1 class="super hairline bordered bordered-normal"> Relatório de Visitas</h1>
            </header>
          </div>
        </div>
        <form enctype="multipart/form-data" action="envia.php" method="post" name="formulario" id="formulario" onsubmit="return validar(this);">
          <div class="row ">
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center" > Cliente:
              <select class="form-control" name="nomeposto" id="nomeposto" onchange="buscar_postos()">
                <option selected="selected" value="selected">Selecione...</option>
                <?php
if ($id == 150 || $id == 103 || $id == 106 || $id == 125 || $id == 126 || $id == 239 || $id == 1) {
	$consulta=mysql_query("SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC");
} else {
	$consulta=mysql_query("SELECT C.CODCLI, C.NOMECLI FROM usuarios U, sarposto P, sarclien C WHERE U.ID = '" . $id . "' AND P.DTENCERRAM IS NULL AND C.CODCLI = P.CODCLI AND (P.AREASUPER1 = U.ID_HK OR P.AREASUPER2 = U.ID_HK OR P.AREASUPER3 = U.ID_HK) GROUP BY P.CODCLI");
}
/*SELECT CODCLI, NOMECLI FROM sarclien WHERE DTENCERRA IS NULL ORDER BY NOMECLI ASC*/
while ($lista_cli = mysql_fetch_array($consulta)) {
echo("<option value='".$lista_cli['CODCLI']."'>".$lista_cli['NOMECLI']." - ".$lista_cli['CODCLI']."</option>");}


/**/ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );
?>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center" >
              <div id="load_postos"> Atividade:
                <select class="form-control" name="tipo2" id="tipo2">
                  <option value="">Selecione o cliente</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-left small-screen-center" > Supervisor:<br>
              <input name="nomesup" class="form-control" type="text" value="<? echo "$usuario"; ?>" id="nomesup" readonly/>
            </div>
          </div>
          <br />
          <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center" >
              <div class="form-group form-icon-group">
                <div class="row">

                  <input class="form-control" placeholder="Rotina" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center" style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                      <input name="rotina" type="radio" required id="rotina_conf" ondblclick="limparRadios('rotina');" value="conf"></div>
                      <div class="btn-danger col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="rotina" type="radio" required id="rotina_inconf" ondblclick="limparRadios('rotina');" value="inconf" ></div>
                      </div>
                  </div>

                    <input class="form-control" placeholder="Postura" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center" style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                      <input name="postura" type="radio" required id="postura_conf" ondblclick="limparRadios('postura');" value="conf"></div>
                      <div class="btn-danger col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                      <input name="postura" type="radio" required id="postura_inconf" ondblclick="limparRadios('postura');" value="inconf" ></div>
                      </div>
                  </div>

                    <input class="form-control" placeholder="Uniforme" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="uniforme" type="radio" required id="uniforme_conf" ondblclick="limparRadios('uniforme');" value="conf"></div>
                        <div class="btn-danger col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="uniforme" id="uniforme_inconf" type="radio" required value="inconf" ondblclick="limparRadios('uniforme');" ></div>
                      </div>
                  </div>

                    <input class="form-control" placeholder="Cartão de Ponto" readonly>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="cartao" id="cartao_conf" type="radio" required value="conf" ondblclick="limparRadios('cartao');" >
                        </div>
                        <div class="btn-danger col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="cartao" id="cartao_inconf" type="radio" required value="inconf" ondblclick="limparRadios('cartao');" ></div>
                      </div>
                  </div>

                    <input class="form-control" placeholder="Pasta Rotina/Manual/FOR" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="pastamanual" id="pastamanual_conf" type="radio" required value="conf" ondblclick="limparRadios('pastamanual');" ></div>
                        <div class="btn-danger col-md-6 col-sm-6 col-xs-6" for="pastamanual_inconf" style="height: 36px;  padding-top: 7px;">
                          <input name="pastamanual" id="pastamanual_inconf" type="radio" required value="inconf" ondblclick="limparRadios('pastamanual');" ></div>
                      </div>
                  </div>
                    <input class="form-control" placeholder="Contato com o Cliente" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="cliente" id="cliente_conf" type="radio" required value="conf" ondblclick="limparRadios('cliente');" ></div>
                        <div class="btn-warning col-md-6 col-sm-6 col-xs-6" for="cliente_inconf" style="height: 36px;  padding-top: 7px;">
                          <input name="cliente" id="cliente_inconf" type="radio" required value="inconf" ondblclick="limparRadios('cliente');" >
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center" >
              <div class="form-group form-icon-group">
                <div class="row">
                    <input class="form-control" placeholder="Livro de Ocorrência" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                    <div class="row">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="ocorrencia" id="ocorrencia_conf" type="radio" required value="conf" ondblclick="limparRadios('ocorrencia');" ></div>
                        <div class="btn-danger col-md-4 col-sm-4 col-xs-4" for="ocorrencia_inconf" style="height: 36px;  padding-top: 7px;">
                          <input name="ocorrencia" id="ocorrencia_inconf" type="radio" required value="inconf" ondblclick="limparRadios('ocorrencia');" ></div>
                        <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="ocorrencia" id="ocorrencia_naplica" type="radio" required value="naplica" ondblclick="limparRadios('ocorrencia');" ></div>
                      </div>
                    </div>
                  </div>
                    <input class="form-control" placeholder="Produtos Equipamentos" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                    <div class="row">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="equipamento" id="equipamento_conf" type="radio" required value="conf" ondblclick="limparRadios('equipamento');" ></div>
                        <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="equipamento" id="equipamento_inconf" type="radio" required value="inconf" ondblclick="limparRadios('equipamento');" ></div>
                        <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="equipamento" id="equipamento_naplica" type="radio" required value="naplica" ondblclick="limparRadios('equipamento');" ></div>
                      </div>
                    </div>
                  </div>
                  <input onclick="mostrar(9);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-2" style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                  <div class="col-md-5 col-sm-5 col-xs-10 text-center small-screen-center" style="margin-right:-15px !important; margin-left:0px !important">
                    <input class="form-control" placeholder="EPI" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                    <div class="row">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="epi" id="epi_conf" type="radio" required value="conf" ondblclick="limparRadios('epi');" >
                        </div>
                        <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="epi" id="epi_inconf" type="radio" required value="inconf" ondblclick="limparRadios('epi');" >
                        </div>
                        <div class="btn-warning col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="epi" id="epi_naplica" type="radio" required value="naplica" ondblclick="limparRadios('epi');" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <input onclick="mostrar(10);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-2" style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                  <div class="col-md-5 col-sm-5 col-xs-10 text-center small-screen-center" style="margin-right:-15px !important; margin-left:0px !important">
                    <input class="form-control" placeholder="Estoque Produto Equipam." readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                    <div class="row">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="estoqueprod" id="estoqueprod_conf" type="radio" required value="conf" ondblclick="limparRadios('estoqueprod');" ></div>
                        <div class="btn-danger col-md-4 col-sm-4 col-xs-4" style="height: 36px;  padding-top: 7px;">
                          <input name="estoqueprod" id="estoqueprod_inconf" type="radio" required value="inconf" ondblclick="limparRadios('estoqueprod');" ></div>
                        <div class="btn-warning col-md-4 col-sm-4 col-xs-4"  style="height: 36px;  padding-top: 7px;">
                          <input name="estoqueprod" id="estoqueprod_naplica" type="radio" required value="naplica" ondblclick="limparRadios('estoqueprod');" ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center" style="margin-right:-15px !important; margin-left:0px !important"> </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important"> </div>
                  <input onclick="mostrar(11);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-2" style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
                  <div class="col-md-5 col-sm-5 col-xs-10 text-center small-screen-center" style="margin-right:-15px !important; margin-left:0px !important">
                    <input class="form-control" placeholder="Outros" readonly>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center"  style="margin-left:-15px !important">
                    <div class="row">
                      <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-success col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="outros" id="outros_conf" type="radio" required value="conf" ondblclick="limparRadios('outros');" >
                        </div>
                        <div class="btn-danger col-md-6 col-sm-6 col-xs-6" style="height: 36px;  padding-top: 7px;">
                          <input name="outros" id="outros_inconf" type="radio" required value="inconf" ondblclick="limparRadios('outros');" ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <BR/>
            <div class="col-md-12 text-center small-screen-center" >
              <div class="form-group form-icon-group"><br />
                <textarea id="observacao" name="observacao" rows="5" class="form-control" placeholder="Observação"></textarea>
              </div>
            </div>
            <div style="display:none">
              <input name="horac2" id="horac2" type="text" value="<? echo "$horac"; ?>">
              <input name="usuario" type="text" value="<? echo "$usuario"; ?>">
              <input name="emailuser" type="text" value="<? echo "$email"; ?>">
            </div>
          <hr />
          <br />
          <br />
          <div class="row ">
            <div class="btn-success col-md-1 col-sm-2 col-xs-12" style="background: #fff!important; color:#666 !important" > Legenda:</div>
            <div class="btn-success col-md-2 col-sm-3 col-xs-4" style="background: #449d44!important;" > Conforme</div>
            <div class="btn-danger col-md-2 col-sm-3 col-xs-4" style="background: #d9534f!important;" > Não Conforme</div>
            <div class="btn-warning col-md-2 col-sm-3 col-xs-4" style="background-color: #F90!important;" > Não Aplica</div>
            <div class="btn-success col-md-5 col-sm-1 col-xs-12" style="background: #fff!important; color:#666 !important" ></div>
          </div>
          <br />
          <hr />
            <div class="col-md-12 text-center small-screen-center" >
              <input type="submit" class="btn btn-primary" name="submit" id="submit" onClick="return validar(this);" value="Enviar" style="width:30%" />
              <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Apagar" style="width:30%" />

            </div>
          </div>
        </form>
        
        <div class="col-md-12 text-left small-screen-center" > <br />
          <br />
          <? echo "$ver_for_10"; ?><br />
          <br />
        </div>
      </div>
    </section>
  </article>
</div>
<script language="javascript" type="text/javascript">

function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}


function validar(formulario){
    var formulario = document.getElementById('formulario');
    
if(formulario.nomeposto.value == 'Selecione...'){alert("Informe o NOME do CLIENTE."); return false;}
    if(formulario.nomeposto.value == 'selected'){alert("Informe o NOME do CLIENTE."); return false;}
    if(formulario.nomeposto.value == ''){alert("Informe o NOME do CLIENTE."); formulario.nomeposto.focus(); return false;}
    if(formulario.tipo2.value == ''){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    if(formulario.tipo2.value == 'Selecione...'){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    if(formulario.tipo2.value == 'selected'){alert("Informe o tipo de SERVIÇO VISTORIADO."); return false;}
    if(formulario.nomesup.value == ''){alert("Informe o NOME do SUPERVISOR."); formulario.nomesup.focus(); return false;}
	
	return true;}

  
    function buscar_postos(){
      var nomeposto = $('#nomeposto').val();
      if(nomeposto){
        var url = 'buscar_postos.php?nomeposto='+nomeposto;
        $.get(url, function(dataReturn) {
          $('#load_postos').html(dataReturn);
        });
      }
    }

function mostrar(pergunta) {
  switch (pergunta) {
case 1:alert("Está Realizando a Rotina de Trabalho no Momento?");break;
case 2:alert("Está Mostrando Educação / Cortesia / Postura Profissional?");break;
case 3:alert("Está Completo, Limpo e Passado? Está usando Bota ou Sapato?");break;
case 4:alert("Está Preenchido até a Data? Sem Rasuras?");break;
case 5:alert("A Rotina de Trabalho, Manuais e FOR's Estão no Posto? Estão Atualizados?");break;
case 6:alert("A Supervisão Oper. Teve Contato Direto com o Cliente Nesta Data?");break;
case 7:alert("O Posto Possui Livro de Ocorrências? Estão Anotando Devidamente Ocorrências e Registros Relevantes no L.O.?");break;
case 8:alert("Os Produtos Estão Dentro do Prazo de Validade e Existe Quantidade Suficiente Para o Local?");break;
case 9:alert("Os Colaboradores do Posto Possuem Epi´S? Usa de Forma Correta? Estão em Bom Estado de Utilização?");break;
case 10:alert("Estão Armazenados e Dispostos de Forma Segura e Correta? O Local Fica Trancado ou com Acesso Restrito?");break;
case 11:alert("Existe Alguma Outra Informação Apontada que não Foi Questionada Anteriormente? Qual a Atividade Apontada e o que foi Apontado");break;      
    default:
    break;
  }
}

</script>

<? include("../roda.php"); ?>