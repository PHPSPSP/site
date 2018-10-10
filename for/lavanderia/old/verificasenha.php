<?php
include("../config.php");

#Verifica se tem um email para pesquisa
if(isset($_POST['s'])){ 

    #Recebe o Email Postado
    $senhaPostado = $_POST['s'];
    $corenPostado = $_POST['d'];

    #Conecta banco de dados 
    $sql = mysqli_query($con, "SELECT * FROM spsp1.lavanderia_enfermagem where lavanderia_coren_enfermagem = '{$corenPostado}' and lavanderia_senha_enfermagem = '{$senhaPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Senha de enfarmagem valido')); 
    else 
        echo json_encode(array('email' => 'Senha de enfermagem invalido.' )); 
}
?>