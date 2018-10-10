<?php
include_once('../config.php');
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$d = $_GET['d'];

$result = mysql_query("SELECT lavanderia_nome_enfermagem FROM spsp1.lavanderia_enfermagem WHERE lavanderia_coren_enfermagem =\"".htmlentities($d)."\" and lavanderia_status_enfermagem ='0'");

$row = mysql_fetch_row($result);

if ($row){echo "<script type='text/javascript'>alert('Coren encontrado com sucesso');</script>";
echo ('<b>Validação Enfermagem:</b>
              <div class="form-group form-icon-group">
                <input class="form-control" name="s" id="s" size="20" type="password" required onchange="senha();"/>
              </div>');}
else {echo "<script type='text/javascript'>alert('Digite um Coren válido');</script>";}


?>