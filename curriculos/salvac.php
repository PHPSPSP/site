<?

include ("config.php");

$sql2 = "SELECT * FROM curric WHERE id='".mysql_real_escape_string($_POST['id'])."'";
$resultado = mysql_query($sql2) or die ("Nao foi possivel realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$imagestatus = $_POST['status'];
$nomeuser = $_POST['nomeuser'];
$dataalt = date("d/m/Y - H:i:s");

$compara = $linha['image2'];
 
if ($imagestatus == "") { $imagecom = "";} else {$imagecom = "Status alterado por $nomeuser em $dataalt";};

if ($compara == "") {$image2 = $imagecom;} else { $image2 = $compara;};


$sql = "UPDATE curric SET 
datam='$dataalt',
nome='".mysql_real_escape_string($_POST['nome'])."',
status='".mysql_real_escape_string($_POST['status'])."',
end='".mysql_real_escape_string($_POST['end'])."',
no='".mysql_real_escape_string($_POST['no'])."',
comp='".mysql_real_escape_string($_POST['comp'])."',
cep='".mysql_real_escape_string($_POST['cep'])."',
cidade='".mysql_real_escape_string($_POST['cidade'])."',
estado='".mysql_real_escape_string($_POST['estado'])."',
bairro='".mysql_real_escape_string($_POST['bairro'])."',
civil='".mysql_real_escape_string($_POST['civil'])."',
nascto='".mysql_real_escape_string($_POST['nascto'])."',
cpf='".mysql_real_escape_string($_POST['cpf'])."',
rg='".mysql_real_escape_string($_POST['rg'])."',
fone='".mysql_real_escape_string($_POST['fone'])."',
cel='".mysql_real_escape_string($_POST['cel'])."',
recado='".mysql_real_escape_string($_POST['recado'])."',
email='".mysql_real_escape_string($_POST['email'])."',
sexo='".mysql_real_escape_string($_POST['sexo'])."',
idade='".mysql_real_escape_string($_POST['idade'])."',
dependentes='".mysql_real_escape_string($_POST['dependentes'])."',
regiao='".mysql_real_escape_string($_POST['regiao'])."',
emaildestino='".mysql_real_escape_string($_POST['emaildestino'])."',
area1='".mysql_real_escape_string($_POST['area1'])."',
area2='".mysql_real_escape_string($_POST['area2'])."',
area3='".mysql_real_escape_string($_POST['area3'])."',
area4='".mysql_real_escape_string($_POST['area4'])."',
vpatricurso='".mysql_real_escape_string($_POST['vpatricurso'])."',
dvencto='".mysql_real_escape_string($_POST['dvencto'])."',
area5='".mysql_real_escape_string($_POST['area5'])."',
area6='".mysql_real_escape_string($_POST['area6'])."',
area7='".mysql_real_escape_string($_POST['area7'])."',
area8='".mysql_real_escape_string($_POST['area8'])."',
horario1='".mysql_real_escape_string($_POST['horario1'])."',
horario2='".mysql_real_escape_string($_POST['horario2'])."',
horario3='".mysql_real_escape_string($_POST['horario3'])."',
instrucao='".mysql_real_escape_string($_POST['instrucao'])."',
serie1='".mysql_real_escape_string($_POST['serie1'])."',
nest1='".mysql_real_escape_string($_POST['nest1'])."',
dconcl1='".mysql_real_escape_string($_POST['dconcl1'])."',
ncurso1='".mysql_real_escape_string($_POST['ncurso1'])."',
ensipos='".mysql_real_escape_string($_POST['ensipos'])."',
serie2='".mysql_real_escape_string($_POST['serie2'])."',
ncurso2='".mysql_real_escape_string($_POST['ncurso2'])."',
nest2='".mysql_real_escape_string($_POST['nest2'])."',
dconcl2='".mysql_real_escape_string($_POST['dconcl2'])."',
ncurso3='".mysql_real_escape_string($_POST['ncurso3'])."',
nest3='".mysql_real_escape_string($_POST['nest3'])."',
dconcl3='".mysql_real_escape_string($_POST['dconcl3'])."',
ncurso4='".mysql_real_escape_string($_POST['ncurso4'])."',
nest4='".mysql_real_escape_string($_POST['nest4'])."',
dconcl4='".mysql_real_escape_string($_POST['dconcl4'])."',
word='".mysql_real_escape_string($_POST['word'])."',
excel='".mysql_real_escape_string($_POST['excel'])."',
powerpoint='".mysql_real_escape_string($_POST['powerpoint'])."',
outlook='".mysql_real_escape_string($_POST['outlook'])."',
info='".mysql_real_escape_string($_POST['info'])."',
emp1='".mysql_real_escape_string($_POST['emp1'])."',
cargo1='".mysql_real_escape_string($_POST['cargo1'])."',
pa1='".mysql_real_escape_string($_POST['pa1'])."',
pa12='".mysql_real_escape_string($_POST['pa12'])."',
empat='".mysql_real_escape_string($_POST['empat'])."',
emp2='".mysql_real_escape_string($_POST['emp2'])."',
cargo2='".mysql_real_escape_string($_POST['cargo2'])."',
pa2='".mysql_real_escape_string($_POST['pa2'])."',
pa22='".mysql_real_escape_string($_POST['pa22'])."',
empat2='".mysql_real_escape_string($_POST['empat2'])."',
mensagem='".mysql_real_escape_string($_POST['mensagem'])."',
situacao='".mysql_real_escape_string($_POST['nomeuser'])."',
image='".mysql_real_escape_string($_POST['image'])."',
image2='$image2',
Facebook='".mysql_real_escape_string($_POST['Facebook'])."',
Google='".mysql_real_escape_string($_POST['Google'])."',
Cartazes='".mysql_real_escape_string($_POST['Cartazes'])."',
TV='".mysql_real_escape_string($_POST['TV'])."',
Jornal='".mysql_real_escape_string($_POST['Jornal'])."',
Revista='".mysql_real_escape_string($_POST['Revista'])."',
Indicação='".mysql_real_escape_string($_POST['Indicação'])."'
WHERE id='".mysql_real_escape_string($_POST['id'])."'";
	
$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel alterar o Curriculo $imagestatus $nomeuser $dataalt .');

        </SCRIPT>\");");
?>

<?php
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Alteracao de curriculo realizada com sucesso!');
		window.history.back(-1);
        </SCRIPT>");


?>