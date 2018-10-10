<?php
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
header('Access-Control-Allow-Origin: *');

include("../listas.php");
include("../privado.php");

if ($_SESSION['nome'] != "Cristiane Ribeiro" && $_SESSION['tipo'] != "adm" && $_SESSION['nome'] != "Camila Sotelo"){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.close();
        </SCRIPT>");}else{  };

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

if(empty($usuario)){header("Location: http://www.spsp.com.br/for/proibido.php");}else{};

$sql = "SELECT * FROM movimentacao WHERE id = ".(int)$_GET['id'];
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
              <h1 class="super hairline bordered bordered-normal">Movimentação de Colaboradores</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div style="width: 100%;  margin:0 auto;"> <br />
            <strong> Dados do Colaborador: </strong><br />
          </div>
          <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="formulario" id="formulario">
            <div style="width: 100%;  margin:0 auto;">
              <div style="width:20%; float:left "> RE:<br />
                <input size='20' readonly="readonly" value="<?php echo $linha['re']; ?>"/>
                <br />
              </div>
              <div style="width:75%; border-left: 1px #6b6b6b solid; padding-left:15px; float:left"> Nome do Colaborador:<br />
                <input readonly="readonly" size='100%' value="<?php echo $linha['nomecol']; ?>"/>
                <br />
              </div>
              <div style="clear:both"> </div>
              <div style="width:48%; float:left;"> Empresa:<br />
                <input size='40'  readonly="readonly" value="<?php echo $linha['empresa']; ?>"/>
              </div>
            </div>
            <br />
            <div style="clear:both"></div>
            <hr />
            <div style="width: 100%;  margin:0 auto;"><strong>Dados da Movimentação:</strong></div>
            <div style="width: 100%;  margin:0 auto;">Data da movimentação:<br />
              <input size="25" readonly="readonly" value="<?php echo date('d/m/Y', strtotime($linha['data10'])); ?>"/>
              <br />
              <br />
              <div style="width:48%; float:left"> Supervisão Atual:<br />
                <input readonly="readonly" size="40" value="<?php echo $linha['atualsup']; ?>"/>
                <br />
                Cliente Atual: <br />
                <input readonly="readonly" size="40" value="<?php echo $linha['cliatual']; ?>"/>
                <br />
                Posto: <br />
                <input readonly="readonly" size="40" value="<?php echo $linha['posto1']; ?>"/>
                <br />
              </div>
              <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> Nova Supervisão:<br />
                <input readonly="readonly" size="40" value="<?php echo $linha['novasup']; ?>"/>
                <br />
                Novo Cliente: <br />
                <input readonly="readonly" size="40" value="<?php echo $linha['clinovo']; ?>"/>
                <br />
                Posto:<br />
                <input readonly="readonly" size="40" value="<?php echo $linha['posto2']; ?>"/>
                <br />
              </div>
              <div style="clear:both"></div>
              <br />
              <div class="row">
                <div class="col-xs-6"> Motivo da Movimentação:<br />
                  <input readonly="readonly" size="40" id="movimentacao" value="<?php echo $linha['movimentacao']; ?>" />
                </div>
                <div class="col-xs-6"></div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="oculta1" style="display: none;">
                    <div style="width:20%; float:left;">RE:<br />
                      <input size='20' readonly="readonly" value="<?php echo $linha['recolsubs']; ?>"/>
                      <br />
                    </div>
                    <div style="width:75%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Nome do colaborador substituído:<br />
                      <input size='100%' readonly="readonly" value="<?php echo $linha['colsubs']; ?>"/>
                    </div>
                    <br />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div id="oculta10" style="display:none;">
                    <div style="width:45%; float:left">Nova função:<br />
                      <input size='60' readonly="readonly" value="<?php echo $linha['novafunc']; ?>"/>
                    </div>
                    <div style="width:50%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Salário:<br />
                      <div style="display:none;">
                        <input size='20' readonly="readonly" value="<?php echo $linha['salario']; ?>"/>
                      </div>
                      <input size='20' readonly="readonly" value="<?php echo $linha['funcsal']; ?>"/>
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
                      <input size='50' readonly="readonly" value="<?php echo $linha['outromotivo']; ?>"/>
                      <br />
                    </div>
                    <br />
                  </div>
                </div>
              </div>
              <br />
              <div style="width:100%; float:left">Pedido do cliente:<br />
                <input id="radio1" value="<?php echo $linha['pedcliente'] == 'SIM' ? "ESTE" : ""?>" hidden="hidden"/>
                <input type="radio" <?php echo $linha['pedcliente'] == 'SIM' ? "checked" : ""?>/>
                <label for="radio1">SIM</label>
                <input id="radio2" value="<?php echo $linha['pedcliente'] == 'NÃO' ? "ESTE" : ""?>" hidden="hidden"/>
                <input type="radio" <?php echo $linha['pedcliente'] == 'NÃO' ? "checked" : ""?>/>
                <label for="radio2">NÃO</label>
               <?php echo $linha['pedcliente'] ?></div>
              <div id="oculta2" style="display: none;"><br />
                <div style="width:100%; float:left">O Cliente foi informado sobre a alteração?<br />
                  <input size='50' readonly="readonly" value="<?php echo $linha['clisabe']; ?>"/>
                </div>
              </div>
              <div style="clear:both"></div>
              <br />
              <div style="width:100%; float:left">Haverá substituto no Posto Atual:<br />
                <input id="radio4" value="<?php echo $linha['subsposto'] == 'SIM' ? "ESTE" : ""?>" hidden="hidden"/>
                <input type="radio" <?php echo $linha['subsposto'] == 'SIM' ? "checked" : ""?>/>
                <label for="radio4">SIM</label>
                <input id="radio3" value="<?php echo $linha['subsposto'] == 'NÃO' ? "ESTE" : ""?>" hidden="hidden"/>
                <input type="radio" <?php echo $linha['subsposto'] == 'NÃO' ? "checked" : ""?>/>
                <label for="radio3">NÃO</label>
              <?php echo $linha['subsposto'] ?></div>
              <br />
              <div id="oculta3" style="display: none;"><br />
                <div style="width:20%; float:left;">RE:<br />
                  <input size='20' readonly="readonly" value="<?php echo $linha['resubs']; ?>"/>
                </div>
                <div style="width:75%; float:left; border-left: 1px #6b6b6b solid; padding-left:15px;">Nome do substituto:<br />
                  <input size='100%' readonly="readonly" value="<?php echo $linha['nomesubs']; ?>"/>
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
              <input type="radio"  <?php echo $linha['examemudf'] == 'SIM' ? "checked" : ""?>/>
              <label for="radiomf1">SIM</label>
              <input type="radio"  <?php echo $linha['examemudf'] == 'NÃO' ? "checked" : ""?>/>
              <label for="radiomf2">NÃO</label>
              <?php echo $linha['examemudf']; ?><br />
              <br />
              A nova função exige <strong>Exames Específicos?</strong><br />
              <input id="radioex1" value="<?php echo $linha['exameesp'] == 'SIM' ? "ESTE" : ""?>" hidden="hidden"/>
              <input type="radio" <?php echo $linha['exameesp'] == 'SIM' ? "checked" : ""?>/>
              <label for="radioex1">SIM</label>
              <input id="radioex2" value="<?php echo $linha['exameesp'] == 'NÃO' ? "ESTE" : ""?>" hidden="hidden"/>
              <input type="radio" <?php echo $linha['exameesp'] == 'NÃO' ? "checked" : ""?>/>
              <label for="radioex2">NÃO</label>
              <?php echo $linha['exameesp']; ?><br />
              <div id="oculta444" style="display: none;"> Quais?
                <input size='44' readonly="readonly" value="<?php echo $linha['nomeexameesp']; ?>"/>
              </div>
              <br />
              O colaborador movimentado realizará <strong>Serviços de Condutor?</strong><br />
              <input type="radio"  <?php echo $linha['condutor'] == 'SIM' ? "checked" : ""?>/>
              <label for="radio71">SIM</label>
              <input type="radio"  <?php echo $linha['condutor'] == 'NÃO' ? "checked" : ""?>/>
              <label for="radio81">NÃO</label>
              <?php echo $linha['condutor']; ?><br />
              <br />
              Ocorrerá alguma <strong>Alteração de Benefício?</strong><br />
              <input id="radio7" value="<?php echo $linha['altbenef'] == 'Ocorrera alteracao nos seguintes Beneficios: ' ? "ESTE" : ""?>" hidden="hidden"/>
              <input type="radio" <?php echo $linha['altbenef'] == 'Ocorrera alteracao nos seguintes Beneficios: ' ? "checked" : ""?>/>
              <label for="radio7">SIM</label>
              <input id="radio8" value="<?php echo $linha['altbenef'] == 'Nao ocorrera alteracao em nenhum Beneficio.' ? "ESTE" : ""?>" hidden="hidden"/>
              <input type="radio" <?php echo $linha['altbenef'] == 'Nao ocorrera alteracao em nenhum Beneficio.' ? "checked" : ""?>/>
              <label for="radio8">NÃO</label>
              <?php echo $linha['altbenef']; ?><br />
              <br />
              <div id="oculta4" style="display: none;">
                <div style="width:50%; float:left;">
                  <input class="col-md-5" type="checkbox" onload="val11();" <?php echo $linha['vr'] == 'Vale Refeicao: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="vr" <?php echo $linha['vr'] == 'Vale Refeicao: ' ? "style='background-color: darkgray;'" : ""?>>Vale Refeição</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['vr']; ?><?php echo $linha['vrt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val12();" <?php echo $linha['sal'] == 'Salario: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="sal" <?php echo $linha['sal'] == 'Salario: ' ? "style='background-color: darkgray;'" : ""?>>Salário</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['sal']; ?><?php echo $linha['salt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val13();" <?php echo $linha['dt'] == 'Diaria de Transporte: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="dt" <?php echo $linha['dt'] == 'Diaria de Transporte: ' ? "style='background-color: darkgray;'" : ""?>>Diária de Transporte</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['dt']; ?><?php echo $linha['dtt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val14();" <?php echo $linha['ad'] == 'Adicional Condutor de Veículo: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ad" <?php echo $linha['ad'] == 'Adicional Condutor de Veículo: ' ? "style='background-color: darkgray;'" : ""?>>Adic. Condutor de Veículo</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ad']; ?><?php echo $linha['adt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val142();" <?php echo $linha['ad2'] == 'Adicional Monitoramento: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ad2" <?php echo $linha['ad2'] == 'Adicional Monitoramento: ' ? "style='background-color: darkgray;'" : ""?>>Adic. Monitoramento</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ad2']; ?><?php echo $linha['ad2t']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val143();" <?php echo $linha['ad3'] == 'Adicional Dupla Função: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ad3" <?php echo $linha['ad3'] == 'Adicional Dupla Função: ' ? "style='background-color: darkgray;'" : ""?>>Adic. Dupla Função</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ad3']; ?><?php echo $linha['ad3t']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val144();" <?php echo $linha['ad4'] == 'Adicional Condutor de Animais: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ad4" <?php echo $linha['ad4'] == 'Adicional Condutor de Animais: ' ? "style='background-color: darkgray;'" : ""?>>Adic. Condutor de Animais</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ad4']; ?><?php echo $linha['ad4t']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val145();" <?php echo $linha['ad5'] == 'Adicional Vigilante Líder: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ad5" <?php echo $linha['ad5'] == 'Adicional Vigilante Líder: ' ? "style='background-color: darkgray;'" : ""?>>Adic. Vigilante Líder</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ad5']; ?><?php echo $linha['ad5t']; ?>"/>
                </div> 
                <div style="width:50%; float:right;  ">
                  <input class="col-md-5" type="checkbox" onload="val15();" <?php echo $linha['ins'] == 'Insalubridade: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ins" <?php echo $linha['ins'] == 'Insalubridade: ' ? "style='background-color: darkgray;'" : ""?>>Insalubridade</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ins']; ?><?php echo $linha['inst']; ?>"/>
                  %<br />
                  <input class="col-md-5" type="checkbox" onload="val16();" <?php echo $linha['pr'] == 'Periculosidade: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="pr" <?php echo $linha['pr'] == 'Periculosidade: ' ? "style='background-color: darkgray;'" : ""?>>Periculosidade</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['pr']; ?><?php echo $linha['prt']; ?>"/>
                  %<br />
                  <input class="col-md-5" type="checkbox" onload="val17();" <?php echo $linha['gp'] == 'Gratificacao Posto: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="gp" <?php echo $linha['gp'] == 'Gratificacao Posto: ' ? "style='background-color: darkgray;'" : ""?>>Gratificação Posto</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['gp']; ?><?php echo $linha['gpt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val18();" <?php echo $linha['gs'] == 'Gratificacao Pessoal: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="gs" <?php echo $linha['gs'] == 'Gratificacao Pessoal: ' ? "style='background-color: darkgray;'" : ""?>>Gratificação Pessoal</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['gs']; ?><?php echo $linha['gst']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val19();" <?php echo $linha['vt'] == 'Vale Transporte: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="vt" <?php echo $linha['vt'] == 'Vale Transporte: ' ? "style='background-color: darkgray;'" : ""?>>Vale Transporte</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['vt']; ?><?php echo $linha['vtt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val20();" <?php echo $linha['cb'] == 'Cesta Basica: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="cb" <?php echo $linha['cb'] == 'Cesta Basica: ' ? "style='background-color: darkgray;'" : ""?>>Cesta Básica</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['cb']; ?><?php echo $linha['cbt']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val22();" <?php echo $linha['he'] == 'Hora Extra . Artigo 71: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="he" <?php echo $linha['he'] == 'Hora Extra . Artigo 71: ' ? "style='background-color: darkgray;'" : ""?>>Hora Extra . Artigo 71</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['he']; ?><?php echo $linha['het']; ?>"/>
                  <br />
                  <input class="col-md-5" type="checkbox" onload="val21();" <?php echo $linha['ot'] == 'Outros: ' ? "checked" : ""?>/>
                  <label class="col-md-5" for="ot" <?php echo $linha['ot'] == 'Outros: ' ? "style='background-color: darkgray;'" : ""?>>Outros</label>
                  <input class="col-md-6" readonly="readonly" value=" <?php echo $linha['ot']; ?><?php echo $linha['ott']; ?>"/>
                </div>
              </div>
            </div>
            <br />
            <div style="clear:both"></div>
            <hr />
            <div style="width: 100%;  margin:0 auto;"><strong>Escala e Horários:</strong><br /><br />

</div>
            <div>
              <div style="width: 100%;  margin:0 auto;">
                <div style="width:50%; float:left">
                  <div class="col-md-12 text-left"> <strong>Escala Atual:</strong> Entrada 1 - Saída 1 / Entrada 2 - Saída 2</div>
                  <div class="col-md-12 text-left">
                    <input readonly="readonly" size="50" id="escatual" value="<?php
$escatual = $linha['escatual'];
$especif1 = $linha['especif1'];
$hora1 = date('Hi', strtotime($linha['hora1']));
$hora2 = date('Hi', strtotime($linha['hora2']));
$hora3 = date('Hi', strtotime($linha['hora3']));
$hora4 = date('Hi', strtotime($linha['hora4']));
$consulta1 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$escatual."'");
$dados1 = mysql_fetch_array($consulta1);
$escatual1 = $dados1['R6_DESC'];
if ($escatual1=="") {echo "$escatual $especif1 $hora1 - $hora3 / $hora4 - $hora2" ;} else {echo $escatual1;}; 
?>" />
<?php
$folgfix1 = $linha['folgfix1'];
$folgfix12 = $linha['folgfix12'];
if ($folgfix12=$folgfix1){$folgfix12="";} else {$folgfix12=$folgfix12;};
if ($folgfix12==""){if ($folgfix1==""){}else{echo " <br> Folga: <input readonly='readonly' size='30' id='folgfixx1' value='$folgfix1' /> ";};}else{echo " <br> Folga: <input readonly='readonly' size='40' id='folgfixx1' value='$folgfix1 e $folgfix12' /> ";};
?>      
                  </div>
                </div>
                <div style="width:50%; float:left; border-left: 1px #6b6b6b solid;">
                  
                  <div class="col-md-12 text-left"> <strong>Nova Escala:</strong> Entrada 1 - Saída 1 / Entrada 2 - Saída 2</div>
                  <div class="col-md-12 text-left">
                    <input readonly="readonly" size="50" id="novaescala" value="<?php
$novaescala = $linha['novaescala'];
$especif2 = $linha['especif2'];
$hora5 = date('Hi', strtotime($linha['hora5']));
$hora6 = date('Hi', strtotime($linha['hora6']));
$hora7 = date('Hi', strtotime($linha['hora7']));
$hora8 = date('Hi', strtotime($linha['hora8']));
$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM protheus_sr6 where R6_TURNO='".$novaescala."'");
$dados2 = mysql_fetch_array($consulta2);
$novaescala1 = $dados2['R6_DESC'];
if ($novaescala1=="") {echo "$novaescala $especif2 $hora5 - $hora7 / $hora8 - $hora6" ;} else {echo $novaescala1;}; 
?>" />
                    
<?php
$folgfix2 = $linha['folgfix2'];
$folgfix22 = $linha['folgfix22'];
if ($folgfix22=$folgfix2){$folgfix22="";} else {$folgfix22=$folgfix22;};
if ($folgfix22==""){if ($folgfix2==""){}else{echo " <br> Folga: <input readonly='readonly' size='30' id='folgfixx2' value='$folgfix2' /> ";};}else{echo " <br> Folga: <input readonly='readonly' size='40' id='folgfixx2' value='$folgfix2 e $folgfix22' /> ";};
?>
                    
                  </div>
                </div>
                <br />
                <div style="clear:both"></div>
                <hr />
                <div style="width:100%; height:auto"> Observações:<br />
                  <input size="100%" style="height:60px" readonly="readonly" value="<?php echo $linha['observ']; ?>" />
                </div>
              </div>
            </div>
            <div> </div>
            <br />
            <div style="width: 100%;  margin:0 auto;">
              <div style="width:48%; float:left"> Responsável pelo envio:<br />
                <input readonly="readonly" size="40" value="<?php echo $linha['nome']; ?>"/>
                <br />
                Data de envio do FOR: <br />
                <input readonly="readonly" size="40" value="<?php echo date('d/m/Y', strtotime($linha['date'])); ?>"/>
                <br />
                Validade do FOR: <br />
                <?php
if (!function_exists('diff_day')) {
	function diff_day($higher, $lower) {
        $t1 = strtotime($higher);
        $t2 = strtotime($lower);
        
        return floor($t1 - $t2) / (60 * 60 * 24);
    }
}
				
if (!function_exists('diff_hour')) {
	    function diff_hour($higher, $lower) {
        $t1 = strtotime($higher);
        $t2 = strtotime($lower);  
        return abs($t1 - $t2) / 3600; }}								
				$higher = $linha['data10'];//.' '.$linha['hora5'];
				$lower = $linha['date'];//.' '.$linha['hora_cad'];
				//if (diff_hour($higher, $lower) > 48) {
				if (diff_day($higher, $lower) >= 2) {
					echo "<input readonly='readonly' size='40' value='EM PRAZO' style='background-color:#090; color:#FFF;'/>";
					} else {
					echo "<input readonly='readonly' size='40' value='EM ATRASO' style='background-color:#900; color:#FFF;'/>";
					}
				?>
                <br />
              </div>
              <div style="width:48%; float:right; border-left: 1px #6b6b6b solid; padding-left:15px;"> <br />


                <div style="display:none">
                  <input name="movimentado" type="text" value="<? echo "$usuario"; ?>"/>
                  <input name="id" type="text" value="<? echo $linha['id']; ?>"/>
                  <input name="status" type="text" value="Efetivado"/>
                  <input name="datamovimentado" type="text" value="<? echo date("d/m/Y"); ?>"/>
                </div>
                
                <?php
				if ($linha['status'] == 'Pendente') {echo "<button class='btn btn-info'  onclick='enviar();' type='submit' name='submit' id='submit'> Efetuar Movimentação </button>";} else {echo "<button class='btn btn-default' type='button'> Movimentação Realizada </button>";};
				 ?>
                &nbsp;&nbsp;
                <button class="btn btn-warning" type="button" onClick="history.go(-1)" value="Voltar"> Voltar </button><br /><br />
               
				<?php
				if ($linha['status'] == 'Pendente') {echo "<button class='btn btn-danger' onclick='return (validar() && devolver());' type='submit' name='devolve' id='devolve'> Devolver Movimentação </button><br>Motivo:<br><textarea style='width: 400px;' name='motdevolv' rows='2' id='motdevolv'></textarea>";} else {};
				 ?>
                <br />
              </div>
            </div>
          </form>
          <div class="col-md-12 text-left small-screen-center"><br />
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
function validar(formulario){
	var formulario = document.getElementById('formulario');
	if(formulario.motdevolv.value == ''){ alert("Informe o Motivo da Devolução."); formulario.motdevolv.focus(); return false; }
return true;}

function enviar(){
    document.formulario.action = "envia2.php";
    document.formulario.target = "";}

function devolver(){
    document.formulario.action = "envia3.php";
    document.formulario.target = "";}
	
	
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

window.onload = function(){
	
Valor = document.getElementById('movimentacao').value;

if (Valor=="Substituicao de Colaborador" || Valor=="Cobertura de Ferias" || Valor=="Alteracao de Funcao: ")
{document.getElementById('oculta1').style.display = 'block';} else {document.getElementById('oculta1').style.display = 'none';}

if (Valor=="Alteracao de Funcao: ")
{document.getElementById('oculta10').style.display = 'block';} else {document.getElementById('oculta10').style.display = 'none';}

if (Valor=="Outro: ")
{document.getElementById('oculta7').style.display = 'block';} else {document.getElementById('oculta7').style.display = 'none';};

if(document.getElementById('radio2').value=="ESTE"){document.getElementById('oculta2').style.display = 'block';}
if(document.getElementById('radio1').value=="ESTE"){document.getElementById('oculta2').style.display = 'none';}

if(document.getElementById('radio4').value=="ESTE"){document.getElementById('oculta3').style.display = 'block';}
if(document.getElementById('radio3').value=="ESTE"){document.getElementById('oculta3').style.display = 'none';}

if(document.getElementById('radioex1').value=="ESTE"){document.getElementById('oculta444').style.display = 'block';}
if(document.getElementById('radioex2').value=="ESTE"){document.getElementById('oculta444').style.display = 'none';}

if(document.getElementById('radio7').value=="ESTE"){document.getElementById('oculta4').style.display = 'block';};
if(document.getElementById('radio8').value=="ESTE"){document.getElementById('oculta4').style.display = 'none';}

/*Valor2 = document.getElementById('escatual').value;

if (Valor2=="OUTRA: ")
{document.getElementById('oculta5').style.display = 'block';} else {document.getElementById('oculta5').style.display = 'none';}

if (Valor2=="5 X 2 Folga Fixa - ")
{document.getElementById('oculta82').style.display = 'inline';} else {document.getElementById('oculta82').style.display = 'none';}

if (Valor2=="6 X 1 Folga Fixa - " || Valor2=="6 X 1 Feriado e Folga Fixa - " || Valor2=="5 X 2 Folga Fixa - ")
{document.getElementById('oculta8').style.display = 'block';} else {document.getElementById('oculta8').style.display = 'none';};

Valor3 = document.getElementById('novaescala').value;
if (Valor3=="OUTRA: ")
{document.getElementById('oculta6').style.display = 'block';} else {document.getElementById('oculta6').style.display = 'none';}

if (Valor3=="5 X 2 Folga Fixa - ")
{document.getElementById('oculta92').style.display = 'inline';} else {document.getElementById('oculta92').style.display = 'none';}

if (Valor3=="6 X 1 Folga Fixa - " || Valor3=="6 X 1 Feriado e Folga Fixa - " || Valor3=="5 X 2 Folga Fixa - ")
{document.getElementById('oculta9').style.display = 'block';} else {document.getElementById('oculta9').style.display = 'none';};*/

}

</script>
<? include("../roda.php"); ?>
