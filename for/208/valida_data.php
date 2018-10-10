<?php
$data = "09/05/2018";
	function isDate($data){
		$char = strpos ($date, "/"!==false?"/":"-";
		$date_array = explode($char,$date);
		if(count($date_array)!=3)return false;
		return
	checkdate($date_array[1],$date_array[0],$date_array[2])?($date_array[2]."-".$date_array[1]."-".$date_array[0]):false;
	}

		if ($date_checked=isDate($date)) {
				echo $date_checked;
			}else{
				echo "Data inválida";
		}
?>

/*Essa função possui outra utilidade aleém de validar uma data, esa outra utiidade que ela oferece é retorna uma data no formato suportado pelo banco de dados MySQL, que é ano-mes-dia. Então, basta pegar o retorno da função e salvar direto no banco de dados MYSQL, caso seja essa a necessidade. Mas você também pode só utilizar para verificar se a data é inválida. 
OBS: caso queria mudar o formato da data para $date = "09-05-2018"; também funcionará.*/