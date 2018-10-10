<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
  include("../listas.php");

$colorsuccess = "<td align='left' height='20' style='background-color:#449d44;'></td>";
$colorwarning = "<td align='left' height='20' style='background-color:#f0ad4e;'></td>";
$colordanger = "<td align='left' height='20' style='background-color:#d9534f;'></td>";

$tipo2 = $_POST['tipo2'];
$nomeposto = $_POST['nomeposto'];

$post = new stdClass;

foreach ($_POST as $k => $v) {
	$post->$k = $v;
}

		$consulta_posto=mysql_query("SELECT NOMEPOS FROM sarposto WHERE CODPOS = '" . $tipo2 . "' AND CODCLI = '" . $nomeposto . "'");
		
		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $nomeposto . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];
		}
		
		while ($posto = mysql_fetch_array($consulta_posto)) {
            $posto_atividade = $posto['NOMEPOS'];
		}
		


$base_url = 'http://200.183.153.86/';


$data = date('d-m-Y');
$horas2 = date('H:i:s');

?>
<html>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border: 0;" bgcolor="#f1f2f7">
  <tbody>
    <tr>
      <td height="30"></td>
    </tr>
    <tr bgcolor="#f1f2f7" style="background-color: #f1f2f7">
      <td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7; font-size: 14px; border: 0;" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" >
          <tbody>
            <tr bgcolor="#d9534f" style="background-color: #d9534f">
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"  style="font-size: 14px; border: 0;">
                  <tbody>
                    <tr>
                      <td><table align="left" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;">
                          <tbody>
                            <tr>
                              <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><?php echo utf8_encode(ucfirst(strftime('%A, %d de %B de %Y', strtotime('today')))); ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <table align="right" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;">
                          <tbody>
                            <tr>
                              <td style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><a href="http://www.spsp.com.br" style="color: #fefefe; text-decoration: none;">spsp.com.br</a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="background-color: #ffffff;">
          <tbody>
            <tr>
              <td height="40"></td>
            </tr>
            <tr>
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660">
                  <tbody>
                    <tr>
                      <td><table align="center" border="0" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="<?php echo $base_url; ?>assets/img/sp-logo.png" alt="SPSP" width="130"> </a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td height="40"></td>
            </tr>
            <tr>
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660">
                </table></td>
            </tr>
            <tr>
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628">
                  <tbody>
                    <tr>
                      <td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;">FOR 010 - Relatório de Visita</td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                    <tr>
                      <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"><strong>Dados da Visita:</strong><br>
                        <br>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;">
                            <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Supervisor: <strong><?php echo $_POST['nomesup']; ?></strong><br>
                              Posto: <strong><?php echo $cliente_posto; ?></strong><br>
                              Atividade: <strong><?php echo $posto_atividade; ?></strong></td>
                            <td width="50%" valign="top" style="border-left-color: #999; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> Data: <strong><? echo "$data"; ?></strong> <br>
                              Hora de início: <strong><?php echo $_POST['horac2']; ?></strong> <br>
                              Hora de término: <strong><? echo "$horas2"; ?></strong></td>
                          </tr>
                        </table>
                        <br>
                        <br>
                        <strong>Legenda:</strong><br>
                        <table style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr >
                            <td width="4%" height='20px' align="left" style="background-color:#449d44;"></td>
                            <td width="20%" align="left">= Conforme</td>
                            <td width="4%" height='20px' align="left" style="background-color: #d9534f;"></td>
                            <td width="20%" align="left">= Não Conforme</td>
                            <td width="4%" height='20px' align="left" style="background-color: #f0ad4e;"></td>
                            <td width="48%" align="left">= Não Aplicável</td>
                          </tr>
                        </table>
                        <br>
                        <br>
                        <strong>Verificação:</strong><br>
                        <table style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;" width="100%" bordercolor="#CCCCCC" border="1" cellspacing="0" cellpadding="0">
                          <tr >
                            <td width="17%" align="center" valign="middle">Rotina de Trabalho</td>
                            <td width="16%" align="center" valign="middle">Postura</td>
                            <td width="17%" align="center" valign="middle">Uniforme</td>
                            <td width="16%" align="center" valign="middle">Livro de Ocorrência</td>
                            <td width="17%" align="center" valign="middle">Cartão de Ponto</td>
                            <td width="17%" align="center" valign="middle">Rotina / Manual / FOR</td>
                          </tr>
                          <tr>
                            <?php
echo $post->rotina == 'conf' ? $colorsuccess : ($post->rotina == 'naplica' ? $colorwarning : $colordanger);
echo $post->postura == 'conf' ? $colorsuccess : ($post->postura == 'naplica' ? $colorwarning : $colordanger);
echo $post->uniforme == 'conf' ? $colorsuccess : ($post->uniforme == 'naplica' ? $colorwarning : $colordanger);
echo $post->ocorrencia == 'conf' ? $colorsuccess : ($post->ocorrencia == 'naplica' ? $colorwarning : $colordanger);
echo $post->cartao == 'conf' ? $colorsuccess : ($post->cartao == 'naplica' ? $colorwarning : $colordanger);
echo $post->pastamanual == 'conf' ? $colorsuccess : ($post->pastamanual == 'naplica' ? $colorwarning : $colordanger);
?>
                          </tr>
                        </table>
                        <br>
                        <table style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;" width="100%" bordercolor="#CCCCCC" border="1" cellspacing="0" cellpadding="0">
                          <tr >
                            <td width="17%" align="center" valign="middle">Contato com Cliente</td>
                            <td width="16%" align="center" valign="middle">Produtos e Equipamentos</td>
                            <td width="17%" align="center" valign="middle">EPI</td>
                            <td width="16%" align="center" valign="middle">Outros</td>
                            <td align="center" valign="middle">Estoque de Produtos e Equipamentos</td>
                          </tr>
                          <tr>
                            <?php
echo $post->cliente == 'conf' ? $colorsuccess : ($post->cliente == 'naplica' ? $colorwarning : $colordanger);
echo $post->equipamento == 'conf' ? $colorsuccess : ($post->equipamento == 'naplica' ? $colorwarning : $colordanger);
echo $post->epi == 'conf' ? $colorsuccess : ($post->epi == 'naplica' ? $colorwarning : $colordanger);
echo $post->outros == 'conf' ? $colorsuccess : ($post->outros == 'naplica' ? $colorwarning : $colordanger);
echo $post->estoqueprod == 'conf' ? $colorsuccess : ($post->estoqueprod == 'naplica' ? $colorwarning : $colordanger);
?>
                          </tr>
                        </table>
                        <? if ($post->observacao!="") {echo "<br>
<br>
 <strong>Descrição da N/C ou observações:</strong><br>". $post->observacao ."";}  ?>
                        <br>
                        <br>
                        Att.<br>
                        <?php echo $post->usuario; ?></td>
                    </tr>
                    <tr>
                      <td height="30"></td>
                    </tr>
                    <tr>
                      <td><hr style="height: 1px; border-style: none; background-color: #cccccc;"></td>
                    </tr>
                    <tr>
                      <td height="25"></td>
                    </tr>
                    <tr>
                      <td style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Este e-mail tem apenas caráter informativo, favor não responder. </td>
                    </tr>
                    <tr>
                      <td style="color: #aaaaaa; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Preserve o meio ambiente, economize papel. Não é necessário imprimir este e-mail. </td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td height="35"></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr bgcolor="#f1f2f7">
      <td align="center" bgcolor="#f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
          <tbody>
            <tr bgcolor="#d9534f">
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="660"  style="font-size: 14px; border: 0;">
                  <tbody>
                    <tr>
                      <td><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="font-size: 14px; border: 0;">
                          <tbody>
                            <tr>
                              <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><? echo "$ver_for_10"; ?></td>
                              <td align="right" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"> SPSP &copy; <?php echo date('Y'); ?>. Todos os direitos reservados. </td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
  </tbody>
</table>
</body>
</html>