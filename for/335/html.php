<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../listas.php");
$base_url = 'http://200.183.153.86/';

?>
<html>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; border: 0;" bgcolor="#f1f2f7">
  <tbody>
    <tr>
      <td height="30"></td>
    </tr>
    <tr bgcolor="#f1f2f7" style="background-color: #f1f2f7">
      <td align="center" bgcolor="#f1f2f7" style="background-color: #f1f2f7" valign="top" width="100%"><table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="font-size: 14px; border: 0;">
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
                  <tr>
                    <td height="7"></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="628">
                  <tbody>
                    <tr>
                      <td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif;">FOR 335 - Implantação de Serviços Extras (temporário)</td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                    <tr>
                      <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif;"> Olá<br>
                        <br>
                       Esse e-mail confirma o envio do FOR 335 referente a <b>Implantação de Serviços Extras (temporário)</b> de <b><?php echo $post->atividade; ?></b> para a contratante <b><?php echo $post->razaosocial; ?></b>, verifique o PDF em anexo!<br>
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
                              <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><? echo "$ver_for_335"; ?></td>
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