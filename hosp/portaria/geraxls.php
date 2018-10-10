<title>RELATORIO ENTRADA E SAIDA</title>
<?php

include ("conexao.php");

// Nome do Arquivo do Excel que será gerado
$arquivo = 'relatorio.xls';

// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$tabela .= '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">RELATORIO ENTRADA E SAIDA PORTARIA</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Nome</b></td>';
$tabela .= '<td><b>Acompanhante</b></td>';
$tabela .= '<td><b>Placa do veiculo</b></td>';
$tabela .= '<td><b>Tipo do veiculo</b></td>';
$tabela .= '<td><b>Departamento</b></td>';
$tabela .= '<td><b>Cliente</b></td>';
$tabela .= '<td><b>Data Entrada</b></td>';
$tabela .= '<td><b>Hora Entrada</b></td>';
$tabela .= '<td><b>Data Saida</b></td>';
$tabela .= '<td><b>Hora Saida</b></td>';
$tabela .= '</tr>';

// Puxando dados do Banco de dados
$sql = 'SELECT * FROM tb_entrada';

$resultado = mysqli_query($conecta, $sql);

while($dados = mysqli_fetch_array($resultado))
{
$tabela .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';	
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['nome'].'</td>';
$tabela .= '<td>'.$dados['acompanhante'].'</td>';
$tabela .= '<td>'.$dados['placadoveiculo'].'</td>';
$tabela .= '<td>'.$dados['tipodoveiculo'].'</td>';
$tabela .= '<td>'.$dados['departamento'].'</td>';
$tabela .= '<td>'.$dados['cliente'].'</td>';
$tabela .= '<td>'.date("d-m-Y", strtotime($dados['horaentrada'])).'</td>';
$tabela .= '<td>'.date("H:i", strtotime($dados['horaentrada'])).'</td>';
$tabela .= '<td>'.date("d-m-Y", strtotime($dados['horasaida'])).'</td>';
$tabela .= '<td>'.date("H:i", strtotime($dados['horasaida'])).'</td>';
$tabela .= '</tr>';
}

$tabela .= '</table>';

// Força o Download do Arquivo Gerado
header ('Cache-Control: no-cache, must-revalidate');
header ('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;
?>


 