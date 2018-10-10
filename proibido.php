<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

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
                              <td align="center"><a href="http://www.spsp.com.br/" style="display: block; text-decoration: none;"> <img src="<?php echo $base_url; ?>assets/img/sp-logo.png" alt="SPSP" > </a></td>
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
                      <td style="color: #d9534f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-align:center"><h1> Acesso Negado! </h1></td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                    <tr>
                      <td style="color: #666666; font-size: 12px;  font-family: Helvetica, Arial, sans-serif; text-align:center"><font size="7"><b>!</b></font> <br />
                        <br>
                        <font size="4"> Você não tem permissão para acessar esse conteúdo!<br>
                        Por favor entre em contato com o <a href="mailto:ralfe.kobayashi@spsp.com.br"><strong>Departamento de T.I.</strong></a>.<br>
                        <br>
                        <br>
                        Retorne para o site da <a href="http://www.spsp.com.br"><strong>SPSP</strong></a>.<br>
                        </font></td>
                    </tr>
                    <tr>
                      <td height="30"></td>
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
                              <td align="left" style="color: #fefefe; font-size: 11px; font-family: Helvetica, Verdana, sans-serif; padding: 15px 0;"><? echo "$ver_for_25"; ?></td>
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