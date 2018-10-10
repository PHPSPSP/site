 <?
session_start();

include("privado.php");

$tip = $_SESSION['tipo']; switch ($tip) {
case "adm": $tipo2 = "alterac"; break;
case "rh": $tipo2 = "alterac2"; break;}
		
if ($usuario != ''){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a essa lista.');
		window.location.href='index.php';
        </SCRIPT>");}else{};

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

$ordemrec = $_POST['o'];
switch ($ordemrec) {
case " ORDER BY nome ": $selectedn = "selected"; $selectedr = ""; $selecteds = ""; $selectedd = ""; break;
case " ORDER BY regiao,nome ": $selectedn = ""; $selectedr = "selected"; $selecteds = ""; $selectedd = ""; break;
case " ORDER BY status,nome ": $selectedn = ""; $selectedr = ""; $selecteds = "selected"; $selectedd = ""; break;
case " ORDER BY date,nome ": $selectedn = ""; $selectedr = ""; $selecteds = ""; $selectedd = "selected"; break;}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Grupo SPSP - Currículos SPSP</title>
<link rel="shortcut icon" href="../images/ico.png" type="imge/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="spsp, terceirização, temporário, trabalho, serviço, grupo, empresa" />
<meta name="description" content="SPSP - Grupo Empresarial de Serviços" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="../js/jquery.min.js"></script>

<script type="text/javascript">
function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente excluir esse Curriculo?")) {
    document.location = delUrl;
  }
}
</script>

<script type="text/javascript">
function limparRadios( radioname ){for( i = 0; i < document.form1[radioname].length; i++ )document.form1[radioname][i].checked = false;}
</script>

</head>

<body>

<div id="templatemo_wrapper">
  <div id="templatemo_header">
    <div class="logotop"><a href="../index.html"><img src="../images/logo SPSP.png" alt="" width="130" height="149" align="left" /></a></div>
   <br /><br />
    <div class="slogan"> Busca de Currículos</div>
    <div style="clear:both;"></div>
  </div>
</div>
<div class="menu">
<div id="templatemo_menu" class="ddsmoothmenu"></div></div>

<div style="width:100%; height:100%;">
<div style="width: 1024px; margin: 0 auto; text-align: right;"><a href="../index.html"><font color="#333333" size="-3">retorne ao site SPSP</font></a></div></div><div id="imagemmeio">

  <div class="subtit">Busca de Currículos</div>
  <div class="info">

<div style="width:998px">

<div style="float:left; width:848px">
<div style="width:100%">
<table width="112%" style="margin-top:6px" border="0">
<tr>
<td width="16%"><strong><font color="#FF0000"><span style="float:left; width:150px"><img src="../images/curric.png" align="left" width="150" height="183" /></span></font></strong></td>
<td width="76%"><strong><font color="#FF0000">Currículos Cadastrados</font></strong><br /><br />

<form name="form1" action="" method="post">
<table border="0">
  <tr>
    <td width="116"><label>Região: </label></td>
    <td><select name="r">
      <option value="">Todas</option>
      <option selected="selected" value="<?= $_POST['r'] ?>"><?= $_POST['r'] ?></option>
		<option value="Bauru">Bauru</option>
		<option value="Garca">Garça</option>
        <option value="Jundiai">Jundiaí</option>
		<option value="Limeira">Limeira</option>
        <option value="Marilia">Marília</option>
        <option value="Pompeia">Pompéia</option>
        <option value="S J Rio Pardo">S J Rio Pardo</option>
        <option value="Sao Paulo">São Paulo</option>
    </select></td>
  </tr>
  <tr>
    <td><label>Área de Atuação: </label></td>
    <td><select name="a">
      <option value="">Todas</option>
      <option selected="selected" value="<?= $_POST['a'] ?>"><?= $_POST['a'] ?></option>
      <option value="Limpeza">Limpeza</option>
      <option value="Servicos Gerais">Servicos Gerais</option>
      <option value="Portaria">Portaria</option>
      <option value="Vigilancia Patrimonial">Vigilancia Patrimonial</option>
      <option value="Administrativo">Administrativo</option>
      <option value="Zeladoria">Zeladoria</option>
      <option value="Manutencao">Manutencao</option>
      <option value="Jardinagem">Jardinagem</option>
    </select></td>
  </tr>
  <tr>
    <td><label>Situação: </label></td>
    <td><select name="s">
      <option value="">Todas</option>
      <option selected="selected" value="<?= $_POST['s'] ?>"><?= $_POST['s'] ?></option>
      <option value="Aguardando">Aguardando</option>
      <option value="Admitido">Admitido</option>
      <option value="Reprovado">Reprovado</option>
      <option value="Desistencia">Desistencia</option>
    </select></td>
  </tr>
    <tr>
    <td><label>Sexo: </label></td>
    <td><input name="x" type="radio" value="Masculino" <?php echo $_POST['x'] == 'Masculino' ? "checked" : ""?> ondblclick="limparRadios('x');"/>Masc.
  <input name="x" type="radio" value="Feminino" <?php echo $_POST['x'] == 'Feminino' ? "checked" : ""?> ondblclick="limparRadios('x');"/>Fem.</td>
  </tr>
<tr>
    <td><label>Data de Cadastro: </label></td>
    <td><input value="<?= $_POST['data1'] ?>" name="data1" type="text"  id="data1" size="1" maxlength="2"/>/<input value="<?= $_POST['data2'] ?>" name="data2" type="text"  id="data2" size="1" maxlength="2"/>/<input value="<?= $_POST['data3'] ?>" name="data3" type="text"  id="data3" size="2" maxlength="4"/> a <input value="<?= $_POST['data4'] ?>" name="data4" type="text"  id="data4" size="1" maxlength="2"/>/<input value="<?= $_POST['data5'] ?>" name="data5" type="text"  id="data5" size="1" maxlength="2"/>/<input value="<?= $_POST['data6'] ?>" name="data6" type="text"  id="data6" size="2" maxlength="4"/></td>
  </tr>
<tr>
    <td><label>Palavra: </label></td>
    <td><input name="p" value="<?= $_POST['p'] ?>" type="text" id="p"/></td>
  </tr>
<tr>
    <td colspan="2">Ordem: <select name="o">
      <option value=" ORDER BY nome " <?= $selectedn ?>>Nome</option>
      <option value=" ORDER BY regiao,nome " <?= $selectedr ?>>Região</option>
      <option value=" ORDER BY status,nome " <?= $selecteds ?>>Situação</option>
      <option value=" ORDER BY date,nome " <?= $selectedd ?>>Data de Cadastro</option>
    </select> <input type="submit" name="ok" value="Filtrar" /></td>
    </tr>
</table>
</form>
</td>
<td width="8%" align="right"><a href="logado.php">Voltar</a></td></tr></table>
</div><br />
<?php

if( $_SERVER['REQUEST_METHOD']=='POST' )
	{	$where = Array();
		$regiao = getPost('r');
		$area = getPost('a');
		$situacao = getPost('s');
		$ordem = getPost('o');
		$sexo = getPost('x');
		$palavra = getPost('p');

$data1 = getPost('data1');switch ($data1) {
case "": $traco1 = $data1; break;
case !"": $traco1 = "$data1' and '"; break;}
$data4 = getPost('data4');
$data3 = getPost('data3');switch ($data3) {
case "": $traco = $data3; break;
case !"": $traco = "$data3-"; break;}
$data2 = getPost('data2');switch ($data2) {
case "": $traco2 = $data2; break;
case !"": $traco2 = "$data2-"; break;}
$data5 = getPost('data5');switch ($data5) {
case "": $traco4 = $data5; break;
case !"": $traco4 = "$data5-"; break;}
$data6 = getPost('data6');switch ($data6) {
case "": $traco3 = $data6; break;
case !"": $traco3 = "$data6-"; break;}

$area2 = getPost('a');switch ($area2) {
case "": $chave2 = ""; break;
case !"": $chave2 = " ) "; break;}

$date = "$traco$traco2$traco1$traco3$traco4$data4";

if ($regiao == "" &&  $situacao == "" &&  $sexo == ""  && $date == "") {
$andw = " WHERE"; $chave = " GROUP BY nome,end,mensagem $ordem ";} else {
$andw = " AND ("; $chave = " $chave2 GROUP BY nome,end,mensagem $ordem ";}

		if( $area ){ $where2[] = " area1 = '{$area}'"; }
		if( $area ){ $where2[] = " area2 = '{$area}'"; }
		if( $area ){ $where2[] = " area3 = '{$area}'"; }
		if( $area ){ $where2[] = " area4 = '{$area}'"; }
		if( $area ){ $where2[] = " area5 = '{$area}'"; }
		if( $area ){ $where2[] = " area6 = '{$area}'"; }
		if( $area ){ $where2[] = " area7 = '{$area}'"; }
		if( $area ){ $where2[] = " area8 = '{$area}'"; } 
		if( $regiao ){ $where[] = " regiao = '{$regiao}'"; }
		if( $sexo ){ $where[] = " sexo = '{$sexo}'"; }
		if( $palavra ){ $where[] = " CONCAT (nome, email, serie1, nest1, ncurso1, serie2, ncurso2, nest2, ncurso3, nest3, ncurso4, nest4, emp1, cargo1, emp2, cargo2, mensagem) LIKE '%$palavra%'"; }
		if( $date ){ $where[] = " date between '{$date}'"; }
		if( $situacao ){ $where[] = " status = '{$situacao}'"; }
 
		$sql = "SELECT * FROM curric ";
		if( sizeof( $where ) )
			$sql .= ' WHERE '.implode( ' AND ',$where );
		if( sizeof( $where2 ) )
			$sql .=  $andw .implode ( ' OR ',$where2 );
			$sql .= $chave;
			
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());

$_query_result = mysql_query($sql);

/*echo $sql;*/

echo "<br /><b>".mysql_affected_rows()."</b> Resultados do filtro: <b>$regiao</b> - <b>$area</b> - <b>$situacao</b> - <b>$sexo</b> - <b>$palavra</b> - <b>$date</b><br />";

		echo "<table><tr>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=353><b>Nome</b></td>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=103><b>Região</b></td>
	<td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=103><b>Data Cad.</b></td>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=123><b>Situação</b></td>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=128><b>Ações</b></td>
  </tr></table>";
while($row=mysql_fetch_array($result))

echo "<table>
  <tr>
    <td style='border-bottom:1px #6e6e6e solid;' width=355 align=left>".nl2br($row['nome'])." ".nl2br($row['image'])."</td>
    <td align='center' style='border-bottom:1px #6e6e6e solid;' width=105 >".nl2br($row['regiao'])."</td>
	<td align='center' style='border-bottom:1px #6e6e6e solid;' width=105 >".date('d/m/Y', strtotime($row['date']))."</td>
	<td style='border-bottom:1px #6e6e6e solid;' width=125 align=left> <img src='img/".nl2br($row['status'])."0.png' width='18' height='18' title='".nl2br($row['image2'])."'/> &nbsp;&nbsp; ".nl2br($row['status'])."</td>
    <td style='border-bottom:1px #6e6e6e solid;' align='center' width=130><a href=\"$tipo2.php?id=".$row['id']."\"><font color='#0099FF'>Alterar : </font></a><a href=\"javascript:confirmExcluir('deletar2.php?id=".$row['id']."')\"><font color='#ff0000'> : Excluir</font></a></td>
  </tr>
</table>";

	}
	function filter( $str ){
		return addslashes( $str );	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;	}
?>

</div>
</div>
<div style="clear:both"></div>
</p>
</div></p>
</div>
<div id="imagemfundo">
  <div id="templatemo_roda">
    <div id="templatemo_bottom"><font color="#FFFFFF"></font></div>
    <hr color="#999999" style="height:1px; border-bottom:2px #5c5c5c solid;"/></p><span style="color: #DBDBDB; font-size: 12px;">2013 © SPSP . Todos os direitos reservados</span></div>
</div>


</body>
</html>