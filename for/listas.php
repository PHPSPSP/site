<?php
ini_set( 'display_errors', FALSE );
error_reporting( E_ALL | E_STRICT );

include_once('config.php');

$year = date('Y');

$usercod = $_SESSION['regiao'];
switch ($usercod) {
case "Araraquara": $coduser = "A"; $filialm = "aline.costa@spsp.com.br"; $filialn = "Aline Costa"; break;
case "Marilia": $coduser = "M"; $filialm = "cristiane.ribeiro@spsp.com.br"; $filialn = "Cristiane Ribeiro"; break;
case "Bauru": $coduser = "B"; $filialm = "cristiane.ribeiro@spsp.com.br"; $filialn = "Cristiane Ribeiro"; break;
case "Jundiai": $coduser = "J"; $filialm = "francinete.medeiros@spsp.com.br"; $filialn = "Francinete Medeiros"; break;
case "Limeira": $coduser = "L"; $filialm = "ketlyn.lima@spsp.com.br"; $filialn = "Ketlyn Lima"; break;
case "Pompeia": $coduser = "P"; $filialm = "eder.lima@spsp.com.br"; $filialn = "Eder Lima"; break;
case "S J Rio Pardo": $coduser = "S"; $filialm = "katrini.risso@spsp.com.br"; $filialn = "Katrini Risso"; break;
case "S J Rio Preto": $coduser = "R"; $filialm = "vera.tinos@spsp.com.br"; $filialn = "Vera Tinos"; break;
case "Ribeirao Preto": $coduser = "T"; $filialm = "michele.santiago@spsp.com.br"; $filialn = "Michele Santiago"; break;
}

if ($linha['condutor'] == "SIM") {$condutorm="regiane.santos@spsp.com.br"; $condutorn="Regiane Santos";} else {$condutorm=$_SESSION['mail']; $condutorn=$_SESSION['nome'];};

$firma = "$_POST[empresa]";
switch ($firma) {
case "SPSP Servicos": $codfirma = "SP"; break;
case "SPSP Seguranca Patrimonial": $codfirma = "AD"; break;
case "Locatempo Trabalho Temporario": $codfirma = "LT"; break;
case "SPBrasil Adm. de Condominios": $codfirma = "SB"; break;}

$lista_regiao = "
<option value='Araraquara'> Araraquara</option>
<option value='Bauru'> Bauru</option>
<option value='Jundiai'> Jundiaí</option>
<option value='Limeira'> Limeira</option>
<option value='Marilia'> Marília</option>
<option value='Pompeia'> Pompeia</option>
<option value='S J Rio Pardo'> S J Rio Pardo</option>
<option value='S J Rio Preto'> S J Rio Preto</option>
<option value='Ribeirao Preto'> Ribeirão Preto</option>
";

$emaildestino = "$regiao";switch ($emaildestino) {
case "Marilia":
$email2 = "celso.mendes@spsp.com.br";$nome2 = "Celso Mendes";
$email3 = "priscila.basseto@spsp.com.br";$nome3 = "Priscila Basseto";
$email4 = "fernanda.silva@spsp.com.br";$nome4 = "Fernanda Silva";
$email5 = "$email";$nome5 = "$nome";
break;
case "Pompeia":
$email2 = "celso.mendes@spsp.com.br";$nome2 = "Celso Mendes";
$email3 = "eder.lima@spsp.com.br";$nome3 = "Eder Lima";
$email4 = "$email";$nome4 = "$nome";
$email5 = "$email";$nome5 = "$nome";
break;
case "Araraquara":
$email2 = "michele.santiago@spsp.com.br";$nome2 = "Michele Santiago";
$email3 = "$email";$nome3 = "$nome";
$email4 = "ana.daniel@spsp.com.br";$nome4 = "Ana Daniel";
$email5 = "$email";$nome5 = "$nome";
break;
case "Bauru":
$email2 = "nadir.maia@spsp.com.br";$nome2 = "Nadir Maia";
$email3 = "marcello.cross@spsp.com.br";$nome3 = "Marcello Cross";
$email4 = "mary.martins@spsp.com.br";$nome4 = "Mary Martins";
$email5 = "bruna.bortolin@spsp.com.br";$nome5 = "Bruna Bortolin";
break;
case "Jundiai":
$email2 = "marcelo.bertacini@spsp.com.br";$nome2 = "Marcelo Bertacini";
$email3 = "regiane.ceratti@spsp.com.br";$nome3 = "Regiane Ceratti";
$email4 = "francinete.medeiros@spsp.com.br";$nome4 = "Francinete Medeiros";
$email5 = "lucia.rezende@spsp.com.br";$nome5 = "Lucia Rezende";
break;
case "Limeira":
$email2 = "marcelo.bertacini@spsp.com.br";$nome2 = "Marcelo Bertacini";
$email3 = "juliana.oliveira@spsp.com.br";$nome3 = "Juliana Oliveira";
$email4 = "ketlyn.lima@spsp.com.br";$nome4 = "Ketlyn Lima";
$email5 = "alessandra.silva@spsp.com.br";$nome5 = "Alessandra Silva";
break;
case "Sao Paulo":
$email2 = "$email";$nome2 = "$nome";
$email3 = "$email";$nome3 = "$nome";
$email4 = "$email";$nome4 = "$nome";
$email5 = "$email";$nome5 = "$nome";
break;
case "S J Rio Pardo":
$email2 = "marcelo.bertacini@spsp.com.br";$nome2 = "Marcelo Bertacini";
$email3 = "katrini.risso@spsp.com.br";$nome3 = "Katrini Risso";
$email4 = "cesar.prado@spsp.com.br";$nome4 = "Cesar Prado";
$email5 = "$email";$nome5 = "$nome";
break;
case "S J Rio Preto":
$email2 = "vera.tinos@spsp.com.br";$nome2 = "Vera Tinos";
$email3 = "cristiane.ribeiro@spsp.com.br";$nome3 = "Cristiane Ribeiro";
$email4 = "lais.lucianelli@spsp.com.br";$nome4 = "Lais Lucianelli";
$email5 = "$email";$nome5 = "$nome";
break;
case "Ribeirao Preto":
$email2 = "michele.santiago@spsp.com.br";$nome2 = "Michele Santiago";
$email3 = "samara.rubio@spsp.com.br";$nome3 = "Samara Rubio";
$email4 = "$email";$nome4 = "$nome";
$email5 = "$email";$nome5 = "$nome";
break;}

$lista_atividades = "
<OPTION VALUE='ADMINISTRACAO CONDOMINIAL'>ADMINISTRAÇÃO CONDOMINIAL</OPTION>
<OPTION VALUE='AGENTE DE HIGIENIZACAO'>AGENTE DE HIGIENIZAÇÃO</OPTION>
<OPTION VALUE='AGENTE DE LIMPEZA'>AGENTE DE LIMPEZA</OPTION>
<OPTION VALUE='AGENTE DE LIMPEZA COLETOR'>AGENTE DE LIMPEZA COLETOR</OPTION>
<OPTION VALUE='ANALISTA ADMINISTRATIVO PLENO'>ANALISTA ADMINISTRATIVO PLENO</OPTION>
<OPTION VALUE='ANALISTA ADMINISTRATIVO SENIOR'>ANALISTA ADMINISTRATIVO SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA COMERCIAL'>ANALISTA COMERCIAL</OPTION>
<OPTION VALUE='ANALISTA COMERCIAL PLENO'>ANALISTA COMERCIAL PLENO</OPTION>
<OPTION VALUE='ANALISTA CONTABIL PLENO'>ANALISTA CONTÁBIL PLENO</OPTION>
<OPTION VALUE='ANALISTA DE ALMOXARIFADO'>ANALISTA DE ALMOXARIFADO</OPTION>
<OPTION VALUE='ANALISTA DE COMPRAS SENIOR'>ANALISTA DE COMPRAS SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA DE PESSOAL PLENO'>ANALISTA DE PESSOAL PLENO</OPTION>
<OPTION VALUE='ANALISTA DE QUALIDADE SENIOR'>ANALISTA DE QUALIDADE SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA DE RECURSOS HUMANOS PLENO'>ANALISTA DE RECURSOS HUMANOS PLENO</OPTION>
<OPTION VALUE='ANALISTA DE RH SENIOR'>ANALISTA DE RH SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA FINANCEIRO PLENO'>ANALISTA FINANCEIRO PLENO</OPTION>
<OPTION VALUE='ANALISTA FINANCEIRO SENIOR'>ANALISTA FINANCEIRO SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA JURIDICO SENIOR'>ANALISTA JURÍDICO SÊNIOR</OPTION>
<OPTION VALUE='ANALISTA TECNICO MECANICO'>ANALISTA TÉCNICO MECÂNICO</OPTION>
<OPTION VALUE='APRENDIZ'>APRENDIZ</OPTION>
<OPTION VALUE='ASSISTENTE ADM'>ASSISTENTE ADM.</OPTION>
<OPTION VALUE='ASSISTENTE ADMINISTRATIVO'>ASSISTENTE ADMINISTRATIVO</OPTION>
<OPTION VALUE='ASSISTENTE DE ALMOXARIFADO'>ASSISTENTE DE ALMOXARIFADO</OPTION>
<OPTION VALUE='ASSISTENTE DE ESPORTE'>ASSISTENTE DE ESPORTE</OPTION>
<OPTION VALUE='ASSISTENTE DE MANUTENCAO'>ASSISTENTE DE MANUTENÇÃO</OPTION>
<OPTION VALUE='ASSISTENTE DE MARKETING'>ASSISTENTE DE MARKETING</OPTION>
<OPTION VALUE='ASSISTENTE DE PESSOAL'>ASSISTENTE DE PESSOAL</OPTION>
<OPTION VALUE='ASSISTENTE DE RECURSOS HUMANOS'>ASSISTENTE DE RECURSOS HUMANOS</OPTION>
<OPTION VALUE='ASSISTENTE DE SUPERVISAO'>ASSISTENTE DE SUPERVISÃO</OPTION>
<OPTION VALUE='AUXILIAR ADMINISTRATIVO'>AUXILIAR ADMINISTRATIVO</OPTION>
<OPTION VALUE='AUXILIAR ADM DE PESSOAL'>AUXILIAR ADM. DE PESSOAL</OPTION>
<OPTION VALUE='AUXILIAR ADMINISTRATIVO'>AUXILIAR ADMINISTRATIVO</OPTION>
<OPTION VALUE='AUXILIAR CONTABILIDADE'>AUXILIAR CONTABILIDADE</OPTION>
<OPTION VALUE='AUXILIAR DE CARGA E DESCARGA'>AUXILIAR DE CARGA E DESCARGA</OPTION>
<OPTION VALUE='AUXILIAR DE JARDINAGEM'>AUXILIAR DE JARDINAGEM</OPTION>
<OPTION VALUE='AUXILIAR DE LABORATORIO'>AUXILIAR DE LABORATÓRIO</OPTION>
<OPTION VALUE='AUXILIAR DE LIMPEZA'>AUXILIAR DE LIMPEZA</OPTION>
<OPTION VALUE='AUXILIAR DE MANUTENCAO'>AUXILIAR DE MANUTENÇÃO</OPTION>
<OPTION VALUE='AUXILIAR DE SERV GERAIS'>AUXILIAR DE SERV. GERAIS</OPTION>
<OPTION VALUE='AUXILIAR DE SERV GERAIS MANUT PREDIAL'>AUXILIAR DE SERV. GERAIS MANUT. PREDIAL</OPTION>
<OPTION VALUE='AUXILIAR DE SUPERVISAO'>AUXILIAR DE SUPERVISÃO</OPTION>
<OPTION VALUE='AUXILIAR EM DESENTUPIMENTO'>AUXILIAR EM DESENTUPIMENTO</OPTION>
<OPTION VALUE='AUXILIAR GERAL'>AUXILIAR GERAL</OPTION>
<OPTION VALUE='AUXILIAR MANUTENCAO ELETRICA'>AUXILIAR MANUTENÇÃO ELÉTRICA</OPTION>
<OPTION VALUE='AUXILIAR OPERACIONAL - HIGIENE'>AUXILIAR OPERACIONAL - HIGIENE</OPTION>
<OPTION VALUE='AUXILIAR PRODUCAO'>AUXILIAR PRODUÇÃO</OPTION>
<OPTION VALUE='CONTROLADOR ACESSO'>CONTROLADOR ACESSO</OPTION>
<OPTION VALUE='COORDENADOR DE DP'>COORDENADOR DE DP</OPTION>
<OPTION VALUE='COORDENADOR DE SEGURANCA'>COORDENADOR DE SEGURANÇA</OPTION>
<OPTION VALUE='COORDENADOR DE TECNOLOGIA'>COORDENADOR DE TECNOLOGIA</OPTION>
<OPTION VALUE='COORDENADOR JURIDICO'>COORDENADOR JURÍDICO</OPTION>
<OPTION VALUE='COPEIRA'>COPEIRA</OPTION>
<OPTION VALUE='ENCARREGADO LIMPEZA'>ENCARREGADO LIMPEZA</OPTION>
<OPTION VALUE='ESTAGIARIO CONTABILIDADE'>ESTAGIÁRIO DE CONTABILIDADE</OPTION>
<OPTION VALUE='ESTAGIARIO DE PESSOAL'>ESTAGIÁRIO DE PESSOAL</OPTION>
<OPTION VALUE='ESTAGIARIO JURIDICO'>ESTAGIÁRIO DE JURÍDICO</OPTION>
<OPTION VALUE='ESTAGIARIO RH'>ESTAGIÁRIO DE RH</OPTION>
<OPTION VALUE='GERENTE ADMINISTRATIVO'>GERENTE ADMINISTRATIVO</OPTION>
<OPTION VALUE='GERENTE EXECUTIVO'>GERENTE EXECUTIVO</OPTION>
<OPTION VALUE='GERENTE OPERACIONAL'>GERENTE OPERACIONAL</OPTION>
<OPTION VALUE='INSPETOR SEGURANCA'>INSPETOR SEGURANÇA</OPTION>
<OPTION VALUE='JARDINEIRO'>JARDINEIRO</OPTION>
<OPTION VALUE='LAVADOR'>LAVADOR</OPTION>
<OPTION VALUE='LIDER DE LIMPEZA'>LÍDER DE LIMPEZA</OPTION>
<OPTION VALUE='MANOBRISTA GARAGISTA'>MANOBRISTA GARAGISTA</OPTION>
<OPTION VALUE='MOTORISTA'>MOTORISTA</OPTION>
<OPTION VALUE='PORTARIA A DISTANCIA'>PORTARIA À DISTÂNCIA</OPTION>
<OPTION VALUE='PORTEIRO'>PORTEIRO</OPTION>
<OPTION VALUE='RECEPCIONISTA'>RECEPCIONISTA</OPTION>
<OPTION VALUE='RECEPCIONISTA CONTROLADOR'>RECEPCIONISTA CONTROLADOR</OPTION>
<OPTION VALUE='RONDANTE'>RONDANTE</OPTION>
<OPTION VALUE='SERVICOS GERAIS'>SERVIÇOS GERAIS</OPTION>
<OPTION VALUE='SUPERVISOR'>SUPERVISOR</OPTION>
<OPTION VALUE='SUPERVISOR OPERACIONAL'>SUPERVISOR OPERACIONAL</OPTION>
<OPTION VALUE='SUPERVISOR OPERACIONAL JUNIOR'>SUPERVISOR OPERACIONAL JÚNIOR</OPTION>
<OPTION VALUE='SUPERVISOR OPERACIONAL PLENO'>SUPERVISOR OPERACIONAL PLENO</OPTION>
<OPTION VALUE='SUPERVISOR OPERACIONAL SENIOR'>SUPERVISOR OPERACIONAL SÊNIOR</OPTION>
<OPTION VALUE='TECNICO EM DESENTUPIMENTO'>TECNICO EM DESENTUPIMENTO</OPTION>
<OPTION VALUE='TECNICO MANUTENCAO'>TÉCNICO DE MANUTENÇÃO</OPTION>
<OPTION VALUE='TECNICO SEGURANÇA TRABALHO'>TÉCNICO DE SEGURANÇA DO TRABALHO</OPTION>
<OPTION VALUE='TRATORISTA'>TRATORISTA</OPTION>
<OPTION VALUE='VIGIA RONDANTE'>VIGIA RONDANTE</OPTION>
<OPTION VALUE='VIGILANTE'>VIGILANTE</OPTION>
<OPTION VALUE='VIGILANTE LIDER'>VIGILANTE LIDER</OPTION>
<OPTION VALUE='VIGILANTE MOTORIZADO'>VIGILANTE MOTORIZADO</OPTION>
<OPTION VALUE='ZELADOR'>ZELADOR</OPTION>
<OPTION VALUE='OUTRA: '>OUTRA</OPTION>";

$listas_escalas_array = array();
$consulta = mysql_query("SELECT R6_TURNO, R6_DESC FROM spsp1.protheus_sr6 WHERE R6_MSBLQL <> '1' order by R6_DESC ASC");
while ($dados = mysql_fetch_array($consulta)){
$lista_escalas_array[] = "<option value='".$dados['R6_TURNO']."'>".$dados['R6_DESC']."</option>";
}
$lista_escalas = implode("", $lista_escalas_array);


$listas_escalas_array2 = array();
$consulta2 = mysql_query("SELECT R6_TURNO, R6_DESC FROM spsp1.protheus_sr6 WHERE R6_MSBLQL <> '1' and R6_FILIAL = 02 order by R6_DESC ASC");
while ($dados2 = mysql_fetch_array($consulta2)){
$lista_escalas_array2[] = "<option value='".$dados2['R6_TURNO']."'>".$dados2['R6_DESC']."</option>";
}
$lista_escalas2 = implode("", $lista_escalas_array2);

/*$lista_escalas2 = "
<option value='12 X 36 Folga Par'> 12 X 36 Folga Par</option>
<option value='12 X 36 Folga Impar'> 12 X 36 Folga Impar</option>
<option value='5 X 1'> 5 X 1</option>
<option value='5 X 2 SDF'> 5 X 2 SDF</option>
<option value='5 X 2 Folga Fixa - '> 5 X 2 Folga Fixa</option>
<option value='6 X 1 Domingo e Feriado'> 6 X 1 Domingo e Feriado</option>
<option value='6 X 1 Folga Fixa - '> 6 X 1 Folga Fixa</option>
<option value='6 X 1 Feriado e Folga Fixa - '> 6 X 1 Feriado e Folga Fixa</option>
<option value='6 X 2'> 6 X 2</option>
<option value='OUTRA: '> OUTRA</option>
";*/

/*$lista_escalas = "
<option value='12 X 36'> 12 X 36</option>
<option value='5 X 1'> 5 X 1</option>
<option value='5 X 2'> 5 X 2</option>
<option value='6 X 1'> 6 X 1</option>
<option value='6 X 1 Folga fixa - '> 6 X 1 FOLGA FIXA</option>
<option value='6 X 2'> 6 X 2</option>
<option value='12 X 36 - nos dias'> 12 X 36 fds</option>
<option value='6 x 1 - 44 hs'> 6 x 1 - 44 hs</option>
<option value='OUTRA: '> OUTRA</option>
";*/

$lista_semana = "
<option value='Folga Par'> Folga Par</option>
<option value='Folga Impar'> Folga Impar</option>
<option value='Segunda Feira'> Segunda</option>
<option value='Terca Feira'> Terça</option>
<option value='Quarta Feira'> Quarta</option>
<option value='Quinta Feira'> Quinta</option>
<option value='Sexta Feira'> Sexta</option>
<option value='Sabado'> Sábado</option>
<option value='Domingo'> Domingo</option>
";

$lista_empresas = "
<option value='SPSP Servicos'>SPSP Servicos</option>
<option value='SPSP Seguranca Patrimonial'>SPSP Segurança Patrimonial</option>
<option value='SPBrasil Adm. de Condominios'>SPBrasil</option>
";

$lista_reajuste = "
<option value='Salario Minimo Nacional'> Salário mínimo nacional</option>
<option value='Salario da Categoria dos Colaboradores'> Salário categoria dos colaboradores</option>
<option value='IGPM'> IGPM</option>
";

$lista_motivo_movimentacao = "
<option value='Substituicao de Colaborador'> Substituição de Colaborador</option>
<option value='Alteracao de Horario'> Alteração de Horário</option>
<option value='Alteração de Escala'> Alteracao de Escala</option>
<option value='Cobertura de Ferias'> Cobertura de Férias</option>
<option value='Alteração de Beneficio'> Alteracao de Benefício</option>
<option value='Implantacao de Posto'> Implantação de Posto</option>
<option value='Retorno de Afastamento'> Retorno de Afastamento</option>
<option value='Alteracao de Funcao: '> Alteração de Função</option>
<option value='Outro: '> Outro</option>";

switch ($linha['tipo']) {
case "adm": $tipo_user = "Administrador"; break;
case "scom": $tipo_user = "Gestor Comercial"; break;
case "com": $tipo_user = "Comercial"; break;
case "sup": $tipo_user = "Supervisor"; break;
case "sgi": $tipo_user = "SGI"; break;
case "lid": $tipo_user = "Líder"; break;
case "comum": $tipo_user = "Comum"; break;
case "Desativado": $tipo_user = "Desativado"; break;};

$lista_tipouser = "
<option value='adm' >Administrador</option>
<option value='scom' >Gestor Comercial</option>
<option value='com' >Comercial</option>
<option value='sup' >Supervisor</option>
<option value='sgi' >SGI</option>
<option value='lid' >Líder</option>
<option value='comum' >Comum</option>
<option value='Desativado' >Desativado</option>";
		  
$lista_acesso_for = "
<option value='bt_almoxarifado'> Almoxarifado</option>
<option value='bt_atendimento'> Atendimento</option>
<option value='bt_comercial'> Comercial</option>
<option value='bt_compras'> Compras</option>
<option value='bt_controladoria'> Controladoria</option>
<option value='bt_dp'> DP</option>
<option value='bt_financeiro'> Financeiro</option>
<option value='bt_frota'> Frota</option>
<option value='bt_gestao'> Gestão</option>
<option value='bt_juridico'> Jurídico</option>
<option value='bt_manutencao'> Manutenção</option>
<option value='bt_mkt'> Marketing</option>
<option value='bt_res'> Recrutamento e Seleção</option>
<option value='bt_sgi'> SGI</option>
<option value='bt_sst'> SST</option>
<option value='bt_supervisao'> Supervisão</option>
<option value='bt_tecnico'> Técnico</option>
<option value='bt_ti'> TI</option>
<option value='bt_treinamento'> Treinamento</option>
";
		  
$lista_acesso_np = "
<option value='btn_comercial'> Comercial</option>
<option value='btn_compras_almoxarifado'> Compras Almoxarifado</option>
<option value='btn_controladoria'> Controladoria</option>
<option value='btn_dp'> DP</option>
<option value='btn_dp_bauru'> DP Bauru</option>
<option value='btn_financeiro'> Financeiro</option>
<option value='btn_frota'> Frota</option>
<option value='btn_gestao'> Gestão</option>
<option value='btn_juridico'> Jurídico</option>
<option value='btn_manutencao'> Manutenção</option>
<option value='btn_mkt'> Marketing</option>
<option value='btn_operacional'> Operacional</option>
<option value='btn_res'> Recrutamento e Seleção</option>
<option value='btn_rh'> RH</option>
<option value='btn_sgi'> SGI</option>
<option value='btn_spbrasil'> SPBrasil</option>
<option value='btn_spsp_seg'> SPSP Segurança Patrimonial</option>
<option value='btn_sst'> SST</option>
<option value='btn_ti'> TI</option>
<option value='btn_treinamento'> Treinamento</option>
";

/*VERSÕES*/
$ver_for_54 = "FOR 054 V.11";
$ver_for_245 = "FOR 245 V.00";
$ver_for_168 = "FOR 168 V.02";
$ver_for_249 = "FOR 249 V.00";
$ver_for_22 = "FOR 022 V.07";
$ver_for_60 = "FOR 060 V.04";
$ver_for_218 = "FOR 218 V.00";
$ver_for_144 = "FOR 144 V.01";
$ver_for_10 = "FOR 010 V.07";
$ver_for_208 = "FOR 208 V.14";
$ver_for_7 = "FOR 007 V.05";
$ver_for_25 = "FOR 025 V.03";
$ver_for_312 = "FOR 312 V.01";
$ver_for_348 = "FOR 348 V.00";
$ver_for_335 = "FOR 335 V.00";

?>
<!---->