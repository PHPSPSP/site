<?
$ano_for = date('Y');

echo "<section id='services' class='section swatch-black' style='min-height:50px'>
  <div class='background-overlay grid-overlay-0 ' style='background-color: rgba(60,60,60,1);'></div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 '>
        <header class='text-center element-small-top element-small-bottom condensed'>
          <div class='row'>
            <div class='col-md-12 '>
              <div class='col-md-6 col-sm-6 col-xs-12'> <img src='../../assets/images/SPSP-logo-bott.png' alt='SPSP - Grupo Empresarial de Serviços' style='height: 70px !important'> </div>
              <div class='col-md-6 col-sm-6 col-xs-12' style='text-align:center; line-height:1 !important'> <br>
                SPSP - Sistema de Prestação de Serviços Padronizados<br>
                Todos os direitos reservados - Marília/SP - $ano_for </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  </div>
</section>
<script src='../../assets/js/packages.min.js'></script> 
<script src='../../assets/js/theme.min.js'></script> 

<script language='javascript' type='text/javascript'>

function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();

   	str_segundo = new String (s);
	if (str_segundo.length == 1)
      	s = '0' + s;

   	str_minuto = new String (m);
   	if (str_minuto.length == 1)
      	m = '0' + m;

   	str_hora = new String (h);
   	if (str_hora.length == 1)
      	h = '0' + h;

document.getElementById('txt').innerHTML=h+':'+m+':'+s;


setTimeout('time()',1000);
} 


    </script>
</body>
</html>"

?>