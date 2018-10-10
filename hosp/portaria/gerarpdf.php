<?php	

	include ("conexao.php");

	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>nome</th>';
	$html .= '<th>acompanhante</th>';
	$html .= '<th>placa do veiculo</th>';
	$html .= '<th>tipo do veiculo</th>';
	$html .= '<th>departamento</th>';
	$html .= '<th>cliente1</th>';
	$html .= '<th>data entrada</th>';
	$html .= '<th>hora entrada</th>';
	$html .= '<th>data saida</th>';
	$html .= '<th>hora saida</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_transacoes = "SELECT * FROM tb_entrada";
	$resultado_trasacoes = mysqli_query($conecta, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){

		$html = '<tr><td>'.$row_transacoes['nome'] . "</td>";
		$html .= '<td>'.$row_transacoes['acompanhante'] . "</td>";
		$html .= '<td>'.$row_transacoes['placadoveiculo'] . "</td>";
		$html .= '<td>'.$row_transacoes['tipodoveiculo'] . "</td>";
		$html .= '<td>'.$row_transacoes['departamento'] . "</td></tr>";
		$html .= '<td>'.$row_transacoes['cliente'] . "</td>";
		$html .= '<td>'.date("d-m-Y", strtotime($row_transacoes['horaentrada'])).'</td>';
		$html .= '<td>'.date("H:i", strtotime($row_transacoes['horaentrada'])).'</td>';
		$html .= '<td>'.date("d-m-Y", strtotime($row_transacoes['horasaida'])).'</td>';
		$html .= '<td>'.date("H:i", strtotime($row_transacoes['horasaida'])).'</td>';
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//É fundamental definir o TIMEZONE de nossa região para que não tenhamos problemas com a geração.
	date_default_timezone_set('America/São Paulo');

	//Aqui eu estou decodificando o tipo de charset do documento, para evitar erros nos acentos das letras e etc.
	$html = utf8_decode($html);

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Celke - Relatório de Transações</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_portaria.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>