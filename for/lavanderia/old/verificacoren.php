<?php
include("../config.php");

#Verifica se tem um email para pesquisa
if(isset($_POST['d'])){ 

    #Recebe o Email Postado
    $corenPostado = $_POST['d'];

    #Conecta banco de dados 
    $sql = mysqli_query($con, "SELECT * FROM lavanderia_enfermagem WHERE lavanderia_coren_enfermagem= '{$corenPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Coren valido')); 
    else 
        echo json_encode(array('email' => 'Coren invalido.' )); 
}
?>