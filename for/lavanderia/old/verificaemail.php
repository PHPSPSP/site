<?php
include("../config.php");

#Verifica se tem um email para pesquisa
if(isset($_POST['emaill'])){ 

    #Recebe o Email Postado
    $emailPostado = $_POST['emaill'];

    #Conecta banco de dados 
    $sql = mysqli_query("SELECT * FROM usuarios WHERE mail = '{$emailPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
    else 
        echo json_encode(array('email' => 'Usuário valido.' )); 
}
?>