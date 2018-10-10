<?php
header('Content-type: text/html; charset=UTF-8',true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");


$perguntas = array();
$perguntas[1] = '<input onclick="mostrar(1);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="UNIFORME" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q01_1">
<input name="q01" id="q01_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q01_2">
<input name="q01" id="q01_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q01_3">
<input name="q01" id="q01_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[2] = '<input onclick="mostrar(2);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="IDENTIFICAÇÃO COLABORADOR" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q02_1">
<input name="q02" id="q02_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q02_2">
<input name="q02" id="q02_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q02_3">
<input name="q02" id="q02_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[3] = '<input onclick="mostrar(3);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CARTÃO DE PONTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q03_1">
<input name="q03" id="q03_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q03_2">
<input name="q03" id="q03_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q03_3">
<input name="q03" id="q03_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[4] = '<input onclick="mostrar(4);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EPI" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q04_1">
<input name="q04" id="q04_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q04_2">
<input name="q04" id="q04_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q04_3">
<input name="q04" id="q04_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[5] = '<input onclick="mostrar(5);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="APRESENTAÇÃO PESSOAL" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q05_1">
<input name="q05" id="q05_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q05_2">
<input name="q05" id="q05_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q05_3">
<input name="q05" id="q05_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[6] = '<input onclick="mostrar(6);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="POSTURA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q06_1">
<input name="q06" id="q06_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q06_2">
<input name="q06" id="q06_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q06_3">
<input name="q06" id="q06_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[7] = '<input onclick="mostrar(7);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ROTINA DE TRABALHO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q07_1">
<input name="q07" id="q07_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q07_2">
<input name="q07" id="q07_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q07_3">
<input name="q07" id="q07_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[8] = '<input onclick="mostrar(8);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EXECUÇÃO DAS ATIVIDADES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q08_1">
<input name="q08" id="q08_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q08_2">
<input name="q08" id="q08_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q08_3">
<input name="q08" id="q08_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[9] = '<input onclick="mostrar(9);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTROLE DOS PORTÕES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q09_1">
<input name="q09" id="q09_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q09_2">
<input name="q09" id="q09_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q09_3">
<input name="q09" id="q09_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[10] = '<input onclick="mostrar(10);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="IDENTIFICAÇÃO DAS PESSOAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q10_1">
<input name="q10" id="q10_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q10_2">
<input name="q10" id="q10_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q10_3">
<input name="q10" id="q10_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[11] = '<input onclick="mostrar(11);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTATO INTERFONE - CLIENTE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q11_1">
<input name="q11" id="q11_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q11_2">
<input name="q11" id="q11_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q11_3">
<input name="q11" id="q11_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[12] = '<input onclick="mostrar(12);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RONDA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q12_1">
<input name="q12" id="q12_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q12_2">
<input name="q12" id="q12_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q12_3">
<input name="q12" id="q12_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[13] = '<input onclick="mostrar(13);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="COMUNICAÇÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q13_1">
<input name="q13" id="q13_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q13_2">
<input name="q13" id="q13_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q13_3">
<input name="q13" id="q13_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[14] = '<input onclick="mostrar(14);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TROCA DE TURNO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q14_1">
<input name="q14" id="q14_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q14_2">
<input name="q14" id="q14_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q14_3">
<input name="q14" id="q14_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[15] = '<input onclick="mostrar(15);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PORTARIA/ GUARITA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q15_1">
<input name="q15" id="q15_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q15_2">
<input name="q15" id="q15_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q15_3">
<input name="q15" id="q15_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[16] = '<input onclick="mostrar(16);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CORRESPONDÊNCIAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q16_1">
<input name="q16" id="q16_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q16_2">
<input name="q16" id="q16_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q16_3">
<input name="q16" id="q16_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[17] = '<input onclick="mostrar(17);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIVRO DE OCORRÊNCIA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q17_1">
<input name="q17" id="q17_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q17_2">
<input name="q17" id="q17_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q17_3">
<input name="q17" id="q17_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[18] = '<input onclick="mostrar(18);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTROLE DE ACESSO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q18_1">
<input name="q18" id="q18_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q18_2">
<input name="q18" id="q18_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q18_3">
<input name="q18" id="q18_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[19] = '<input onclick="mostrar(19);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MANUTENÇÃO EQUIPAMENTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q19_1">
<input name="q19" id="q19_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q19_2">
<input name="q19" id="q19_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q19_3">
<input name="q19" id="q19_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[20] = '<input onclick="mostrar(20);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EQUIPAMENTOS/FERRAMENTAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q20_1">
<input name="q20" id="q20_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q20_2">
<input name="q20" id="q20_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q20_3">
<input name="q20" id="q20_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[21] = '<input onclick="mostrar(21);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ARMAZENAMENTO DE PROD./ EQUIP." readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q21_1">
<input name="q21" id="q21_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q21_2">
<input name="q21" id="q21_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q21_3">
<input name="q21" id="q21_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[22] = '<input onclick="mostrar(22);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PRODUTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q22_1">
<input name="q22" id="q22_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q22_2">
<input name="q22" id="q22_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q22_3">
<input name="q22" id="q22_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[23] = '<input onclick="mostrar(23);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EQUIPAMENTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q23_1">
<input name="q23" id="q23_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q23_2">
<input name="q23" id="q23_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q23_3">
<input name="q23" id="q23_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[24] = '<input onclick="mostrar(24);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONSERVAÇÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q24_1">
<input name="q24" id="q24_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q24_2">
<input name="q24" id="q24_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q24_3">
<input name="q24" id="q24_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[25] = '<input onclick="mostrar(25);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOTO/ CARRO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q25_1">
<input name="q25" id="q25_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q25_2">
<input name="q25" id="q25_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q25_3">
<input name="q25" id="q25_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[26] = '<input onclick="mostrar(26);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ARMAZENAMENTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q26_1">
<input name="q26" id="q26_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q26_2">
<input name="q26" id="q26_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q26_3">
<input name="q26" id="q26_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[27] = '<input onclick="mostrar(27);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="DILUIDOR DE PRODUTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q27_1">
<input name="q27" id="q27_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q27_2">
<input name="q27" id="q27_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q27_3">
<input name="q27" id="q27_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[28] = '<input onclick="mostrar(28);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PORTÕES E GRADES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q28_1">
<input name="q28" id="q28_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q28_2">
<input name="q28" id="q28_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q28_3">
<input name="q28" id="q28_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[29] = '<input onclick="mostrar(29);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CERCA ELÉTRICA E CONCERTINA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q29_1">
<input name="q29" id="q29_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q29_2">
<input name="q29" id="q29_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q29_3">
<input name="q29" id="q29_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[30] = '<input onclick="mostrar(30);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CANCELA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q30_1">
<input name="q30" id="q30_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q30_2">
<input name="q30" id="q30_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q30_3">
<input name="q30" id="q30_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[31] = '<input onclick="mostrar(31);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTATO - CLIENTE/ SUPERVISÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q31_1">
<input name="q31" id="q31_01" type="radio" required value="conf" >Sim</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q31_2">
<input name="q31" id="q31_2" type="radio" required value="inconf" >Não</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q31_3">
<input name="q31" id="q31_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[32] = '<input onclick="mostrar(32);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="SOLICITAÇÕES DO CLIENTE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q32_1">
<input name="q32" id="q32_01" type="radio" required value="conf" >Sim</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q32_2">
<input name="q32" id="q32_2" type="radio" required value="inconf" >Não</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q32_3">
<input name="q32" id="q32_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[33] = '<input onclick="mostrar(33);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RECLAMAÇÃO DO CLIENTE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q33_1">
<input name="q33" id="q33_01" type="radio" required value="conf" >Sim</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q33_2">
<input name="q33" id="q33_2" type="radio" required value="inconf" >Não</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q33_3">
<input name="q33" id="q33_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[34] = '<input onclick="mostrar(34);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTROLE DE CHAVES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q34_1">
<input name="q34" id="q34_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q34_2">
<input name="q34" id="q34_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q34_3">
<input name="q34" id="q34_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[35] = '<input onclick="mostrar(35);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ENTRADA E SAÍDA DE EQUIPAMENTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q35_1">
<input name="q35" id="q35_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q35_2">
<input name="q35" id="q35_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q35_3">
<input name="q35" id="q35_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[36] = '<input onclick="mostrar(36);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTROLE DE VEÍCULOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q36_1">
<input name="q36" id="q36_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q36_2">
<input name="q36" id="q36_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q36_3">
<input name="q36" id="q36_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[37] = '<input onclick="mostrar(37);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CADASTRO E LIBERAÇÃO DE CRACHÁS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q37_1">
<input name="q37" id="q37_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q37_2">
<input name="q37" id="q37_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q37_3">
<input name="q37" id="q37_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[38] = '<input onclick="mostrar(38);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ASPECTO DO GRAMADO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q38_1">
<input name="q38" id="q38_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q38_2">
<input name="q38" id="q38_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q38_3">
<input name="q38" id="q38_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[39] = '<input onclick="mostrar(39);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS/ JANELAS/ PERSIANAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q39_1">
<input name="q39" id="q39_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q39_2">
<input name="q39" id="q39_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q39_3">
<input name="q39" id="q39_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[40] = '<input onclick="mostrar(40);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="JARDINS E CANTEIROS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q40_1">
<input name="q40" id="q40_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q40_2">
<input name="q40" id="q40_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q40_3">
<input name="q40" id="q40_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[41] = '<input onclick="mostrar(41);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ÁRVORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q41_1">
<input name="q41" id="q41_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q41_2">
<input name="q41" id="q41_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q41_3">
<input name="q41" id="q41_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[42] = '<input onclick="mostrar(42);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISO/ CHÃO/ CORREDORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q42_1">
<input name="q42" id="q42_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q42_2">
<input name="q42" id="q42_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q42_3">
<input name="q42" id="q42_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[43] = '<input onclick="mostrar(43);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PRODUTOS QUÍMICOS - JARDINAGEM 1" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q43_1">
<input name="q43" id="q43_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q43_2">
<input name="q43" id="q43_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q43_3">
<input name="q43" id="q43_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[44] = '<input onclick="mostrar(44);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PRODUTOS QUÍMICOS - JARDINAGEM 2" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q44_1">
<input name="q44" id="q44_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q44_2">
<input name="q44" id="q44_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q44_3">
<input name="q44" id="q44_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[45] = '<input onclick="mostrar(45);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PRODUTOS QUÍMICOS - JARDINAGEM 3" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q45_1">
<input name="q45" id="q45_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q45_2">
<input name="q45" id="q45_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q45_3">
<input name="q45" id="q45_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[46] = '<input onclick="mostrar(46);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIXEIRAS EXTERNAS/ CAÇAMBAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q46_1">
<input name="q46" id="q46_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q46_2">
<input name="q46" id="q46_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q46_3">
<input name="q46" id="q46_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[47] = '<input onclick="mostrar(47);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PAREDES / PORTAS / CANTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q47_1">
<input name="q47" id="q47_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q47_2">
<input name="q47" id="q47_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q47_3">
<input name="q47" id="q47_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[48] = '<input onclick="mostrar(48);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS/ JANELAS/ PERSIANAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q48_1">
<input name="q48" id="q48_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q48_2">
<input name="q48" id="q48_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q48_3">
<input name="q48" id="q48_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[49] = '<input onclick="mostrar(49);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TETO/LUMINÁRIA/AR CONDICIONADO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q49_1">
<input name="q49" id="q49_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q49_2">
<input name="q49" id="q49_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q49_3">
<input name="q49" id="q49_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[50] = '<input onclick="mostrar(50);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIXEIRAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q50_1">
<input name="q50" id="q50_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q50_2">
<input name="q50" id="q50_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q50_3">
<input name="q50" id="q50_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[51] = '<input onclick="mostrar(51);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOBÍLIA/ TELEFONES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q51_1">
<input name="q51" id="q51_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q51_2">
<input name="q51" id="q51_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q51_3">
<input name="q51" id="q51_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[52] = '<input onclick="mostrar(52);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISO/ CHÃO/ CORREDORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q52_1">
<input name="q52" id="q52_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q52_2">
<input name="q52" id="q52_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q52_3">
<input name="q52" id="q52_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[53] = '<input onclick="mostrar(53);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="BANHEIRO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q53_1">
<input name="q53" id="q53_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q53_2">
<input name="q53" id="q53_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q53_3">
<input name="q53" id="q53_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[54] = '<input onclick="mostrar(54);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MATERIAL DE HIGIENE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q54_1">
<input name="q54" id="q54_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q54_2">
<input name="q54" id="q54_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q54_3">
<input name="q54" id="q54_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[55] = '<input onclick="mostrar(55);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RALOS E GRELHAS - PORTARIA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q55_1">
<input name="q55" id="q55_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q55_2">
<input name="q55" id="q55_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q55_3">
<input name="q55" id="q55_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[56] = '<input onclick="mostrar(56);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESCADA DE ACESSO/ RAMPA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q56_1">
<input name="q56" id="q56_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q56_2">
<input name="q56" id="q56_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q56_3">
<input name="q56" id="q56_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[57] = '<input onclick="mostrar(57);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESCADA DE ACESSO/ RAMPA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q57_1">
<input name="q57" id="q57_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q57_2">
<input name="q57" id="q57_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q57_3">
<input name="q57" id="q57_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[58] = '<input onclick="mostrar(58);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOBÍLIA - BANCOS E CADEIRAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q58_1">
<input name="q58" id="q58_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q58_2">
<input name="q58" id="q58_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q58_3">
<input name="q58" id="q58_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[59] = '<input onclick="mostrar(59);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PAREDES / PORTAS / CANTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q59_1">
<input name="q59" id="q59_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q59_2">
<input name="q59" id="q59_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q59_3">
<input name="q59" id="q59_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[60] = '<input onclick="mostrar(60);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS/ JANELAS/ PERSIANAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q60_1">
<input name="q60" id="q60_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q60_2">
<input name="q60" id="q60_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q60_3">
<input name="q60" id="q60_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[61] = '<input onclick="mostrar(61);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TETO/ LUMINÁRIA/ AR CONDICIONADO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q61_1">
<input name="q61" id="q61_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q61_2">
<input name="q61" id="q61_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q61_3">
<input name="q61" id="q61_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[62] = '<input onclick="mostrar(62);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIXEIRAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q62_1">
<input name="q62" id="q62_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q62_2">
<input name="q62" id="q62_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q62_3">
<input name="q62" id="q62_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[63] = '<input onclick="mostrar(63);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISO/ CHÃO/ CORREDORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q63_1">
<input name="q63" id="q63_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q63_2">
<input name="q63" id="q63_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q63_3">
<input name="q63" id="q63_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[64] = '<input onclick="mostrar(64);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="BANHEIROS SOCIAIS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q64_1">
<input name="q64" id="q64_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q64_2">
<input name="q64" id="q64_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q64_3">
<input name="q64" id="q64_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[65] = '<input onclick="mostrar(65);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MATERIAL DE HIGIENE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q65_1">
<input name="q65" id="q65_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q65_2">
<input name="q65" id="q65_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q65_3">
<input name="q65" id="q65_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[66] = '<input onclick="mostrar(66);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RALOS E GRELHAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q66_1">
<input name="q66" id="q66_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q66_2">
<input name="q66" id="q66_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q66_3">
<input name="q66" id="q66_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[67] = '<input onclick="mostrar(67);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESCADAS / CORRIMÕES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q67_1">
<input name="q67" id="q67_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q67_2">
<input name="q67" id="q67_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q67_3">
<input name="q67" id="q67_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[68] = '<input onclick="mostrar(68);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOBÍLIA - SALÃO DE FESTAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q68_1">
<input name="q68" id="q68_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q68_2">
<input name="q68" id="q68_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q68_3">
<input name="q68" id="q68_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[69] = '<input onclick="mostrar(69);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESCADAS / CORRIMÕES - ENTRADA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q69_1">
<input name="q69" id="q69_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q69_2">
<input name="q69" id="q69_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q69_3">
<input name="q69" id="q69_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[70] = '<input onclick="mostrar(70);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RUAS E CALÇADAS EXTERNAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q70_1">
<input name="q70" id="q70_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q70_2">
<input name="q70" id="q70_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q70_3">
<input name="q70" id="q70_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[71] = '<input onclick="mostrar(71);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="DESCARTE DE RESÍDUOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q71_1">
<input name="q71" id="q71_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q71_2">
<input name="q71" id="q71_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q71_3">
<input name="q71" id="q71_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[72] = '<input onclick="mostrar(72);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="FACHADA/ PAREDE EXTERNA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q72_1">
<input name="q72" id="q72_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q72_2">
<input name="q72" id="q72_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q72_3">
<input name="q72" id="q72_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[73] = '<input onclick="mostrar(73);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS E JANELAS EXTERNAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q73_1">
<input name="q73" id="q73_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q73_2">
<input name="q73" id="q73_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q73_3">
<input name="q73" id="q73_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[74] = '<input onclick="mostrar(74);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CALÇADAS E PISO EXTERNO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q74_1">
<input name="q74" id="q74_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q74_2">
<input name="q74" id="q74_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q74_3">
<input name="q74" id="q74_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[75] = '<input onclick="mostrar(75);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIXEIRAS EXTERNAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q75_1">
<input name="q75" id="q75_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q75_2">
<input name="q75" id="q75_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q75_3">
<input name="q75" id="q75_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[76] = '<input onclick="mostrar(76);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RALOS E GRELHAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q76_1">
<input name="q76" id="q76_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q76_2">
<input name="q76" id="q76_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q76_3">
<input name="q76" id="q76_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[77] = '<input onclick="mostrar(77);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOBÍLIA - SALÃO DE FESTAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q77_1">
<input name="q77" id="q77_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q77_2">
<input name="q77" id="q77_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q77_3">
<input name="q77" id="q77_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[78] = '<input onclick="mostrar(78);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="QUIOSQUE - CHURRASQUEIRAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q78_1">
<input name="q78" id="q78_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q78_2">
<input name="q78" id="q78_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q78_3">
<input name="q78" id="q78_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[79] = '<input onclick="mostrar(79);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ÁREA DE LAZER/ QUADRA/PÁTIO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q79_1">
<input name="q79" id="q79_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q79_2">
<input name="q79" id="q79_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q79_3">
<input name="q79" id="q79_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[80] = '<input onclick="mostrar(80);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISCINA E ARREDORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q80_1">
<input name="q80" id="q80_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q80_2">
<input name="q80" id="q80_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q80_3">
<input name="q80" id="q80_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[81] = '<input onclick="mostrar(81);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESCADAS DE ACESSO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q81_1">
<input name="q81" id="q81_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q81_2">
<input name="q81" id="q81_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q81_3">
<input name="q81" id="q81_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[82] = '<input onclick="mostrar(82);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="BANHEIROS SOCIAIS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q82_1">
<input name="q82" id="q82_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q82_2">
<input name="q82" id="q82_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q82_3">
<input name="q82" id="q82_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[83] = '<input onclick="mostrar(83);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PLAYGROUND/ TANQUE DE AREIA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q83_1">
<input name="q83" id="q83_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q83_2">
<input name="q83" id="q83_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q83_3">
<input name="q83" id="q83_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[84] = '<input onclick="mostrar(84);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LUMINÁRIA/ AR CONDICIONADO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q84_1">
<input name="q84" id="q84_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q84_2">
<input name="q84" id="q84_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q84_3">
<input name="q84" id="q84_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[85] = '<input onclick="mostrar(85);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PAREDES / PORTAS / CANTOS/ BIOMBOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q85_1">
<input name="q85" id="q85_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q85_2">
<input name="q85" id="q85_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q85_3">
<input name="q85" id="q85_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[86] = '<input onclick="mostrar(86);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS/ JANELAS/ PERSIANAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q86_1">
<input name="q86" id="q86_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q86_2">
<input name="q86" id="q86_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q86_3">
<input name="q86" id="q86_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[87] = '<input onclick="mostrar(87);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TETO/ LUMINÁRIA/ AR CONDICIONADO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q87_1">
<input name="q87" id="q87_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q87_2">
<input name="q87" id="q87_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q87_3">
<input name="q87" id="q87_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[88] = '<input onclick="mostrar(88);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOBÍLIA E OBJETOS DECORATIVOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q88_1">
<input name="q88" id="q88_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q88_2">
<input name="q88" id="q88_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q88_3">
<input name="q88" id="q88_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[89] = '<input onclick="mostrar(89);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EXTINTORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q89_1">
<input name="q89" id="q89_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q89_2">
<input name="q89" id="q89_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q89_3">
<input name="q89" id="q89_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[90] = '<input onclick="mostrar(90);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISO/ CHÃO/ TACO/ TAPETE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q90_1">
<input name="q90" id="q90_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q90_2">
<input name="q90" id="q90_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q90_3">
<input name="q90" id="q90_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[91] = '<input onclick="mostrar(91);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PAREDES / PORTAS / CANTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q91_1">
<input name="q91" id="q91_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q91_2">
<input name="q91" id="q91_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q91_3">
<input name="q91" id="q91_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[92] = '<input onclick="mostrar(92);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VIDROS/ JANELAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q92_1">
<input name="q92" id="q92_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q92_2">
<input name="q92" id="q92_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q92_3">
<input name="q92" id="q92_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[93] = '<input onclick="mostrar(93);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TETO/ LUMINÁRIA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q93_1">
<input name="q93" id="q93_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q93_2">
<input name="q93" id="q93_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q93_3">
<input name="q93" id="q93_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[94] = '<input onclick="mostrar(94);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIXEIRAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q94_1">
<input name="q94" id="q94_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q94_2">
<input name="q94" id="q94_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q94_3">
<input name="q94" id="q94_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[95] = '<input onclick="mostrar(95);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MICTÓRIOS/ SANITÁRIOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q95_1">
<input name="q95" id="q95_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q95_2">
<input name="q95" id="q95_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q95_3">
<input name="q95" id="q95_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[96] = '<input onclick="mostrar(96);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PIAS E LAVATÓRIO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q96_1">
<input name="q96" id="q96_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q96_2">
<input name="q96" id="q96_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q96_3">
<input name="q96" id="q96_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[97] = '<input onclick="mostrar(97);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PISO/ CHÃO/ CORREDORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q97_1">
<input name="q97" id="q97_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q97_2">
<input name="q97" id="q97_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q97_3">
<input name="q97" id="q97_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[98] = '<input onclick="mostrar(98);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MATERIAL DE HIGIENE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q98_1">
<input name="q98" id="q98_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q98_2">
<input name="q98" id="q98_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q98_3">
<input name="q98" id="q98_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[99] = '<input onclick="mostrar(99);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="RALOS E GRELHAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q99_1">
<input name="q99" id="q99_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q99_2">
<input name="q99" id="q99_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q99_3">
<input name="q99" id="q99_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[100] = '<input onclick="mostrar(100);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LÂMPADAS E ILUMINAÇÃO GERAL" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q100_1">
<input name="q100" id="q100_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q100_2">
<input name="q100" id="q100_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q100_3">
<input name="q100" id="q100_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[101] = '<input onclick="mostrar(101);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="INTERRUPTORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q101_1">
<input name="q101" id="q101_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q101_2">
<input name="q101" id="q101_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q101_3">
<input name="q101" id="q101_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[102] = '<input onclick="mostrar(102);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TORNEIRAS E PIAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q102_1">
<input name="q102" id="q102_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q102_2">
<input name="q102" id="q102_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q102_3">
<input name="q102" id="q102_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[103] = '<input onclick="mostrar(103);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONTROLE DE GÁS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q103_1">
<input name="q103" id="q103_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q103_2">
<input name="q103" id="q103_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q103_3">
<input name="q103" id="q103_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[104] = '<input onclick="mostrar(104);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CAIXA DE INSPEÇÃO DE ÁGUA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q104_1">
<input name="q104" id="q104_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q104_2">
<input name="q104" id="q104_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q104_3">
<input name="q104" id="q104_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[105] = '<input onclick="mostrar(105);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TRATAMENTO DE PISCINA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q105_1">
<input name="q105" id="q105_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q105_2">
<input name="q105" id="q105_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q105_3">
<input name="q105" id="q105_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[106] = '<input onclick="mostrar(106);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="INTERFONES " readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q106_1">
<input name="q106" id="q106_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q106_2">
<input name="q106" id="q106_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q106_3">
<input name="q106" id="q106_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[107] = '<input onclick="mostrar(107);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EXTINTORES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q107_1">
<input name="q107" id="q107_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q107_2">
<input name="q107" id="q107_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q107_3">
<input name="q107" id="q107_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[108] = '<input onclick="mostrar(108);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="HIDRANTES" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q108_1">
<input name="q108" id="q108_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q108_2">
<input name="q108" id="q108_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q108_3">
<input name="q108" id="q108_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[109] = '<input onclick="mostrar(109);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ELEVADOR" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q109_1">
<input name="q109" id="q109_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q109_2">
<input name="q109" id="q109_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q109_3">
<input name="q109" id="q109_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[110] = '<input onclick="mostrar(110);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CERCA ELÉTRICA/ CONCERTINAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q110_1">
<input name="q110" id="q110_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q110_2">
<input name="q110" id="q110_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q110_3">
<input name="q110" id="q110_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[111] = '<input onclick="mostrar(111);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ANTENAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q111_1">
<input name="q111" id="q111_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q111_2">
<input name="q111" id="q111_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q111_3">
<input name="q111" id="q111_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[112] = '<input onclick="mostrar(112);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="TELHADO/ TETO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q112_1">
<input name="q112" id="q112_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q112_2">
<input name="q112" id="q112_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q112_3">
<input name="q112" id="q112_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[113] = '<input onclick="mostrar(113);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="UNIFORME / APRESENTAÇÃO PESSOAL" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q113_1">
<input name="q113" id="q113_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q113_2">
<input name="q113" id="q113_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q113_3">
<input name="q113" id="q113_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[114] = '<input onclick="mostrar(114);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="IDENTIFICAÇÃO DO COLABORADOR" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q114_1">
<input name="q114" id="q114_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q114_2">
<input name="q114" id="q114_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q114_3">
<input name="q114" id="q114_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[115] = '<input onclick="mostrar(115);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIVRO DE OCORRÊNCIA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q115_1">
<input name="q115" id="q115_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q115_2">
<input name="q115" id="q115_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q115_3">
<input name="q115" id="q115_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[116] = '<input onclick="mostrar(116);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ARMAMENTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q116_1">
<input name="q116" id="q116_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q116_2">
<input name="q116" id="q116_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q116_3">
<input name="q116" id="q116_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[117] = '<input onclick="mostrar(117);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="LIVRO DE ACHADOS E PERDIDOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q117_1">
<input name="q117" id="q117_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q117_2">
<input name="q117" id="q117_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q117_3">
<input name="q117" id="q117_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[118] = '<input onclick="mostrar(118);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESTACIONAMENTOS 1 E 2" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q118_1">
<input name="q118" id="q118_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q118_2">
<input name="q118" id="q118_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q118_3">
<input name="q118" id="q118_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[119] = '<input onclick="mostrar(119);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CASINHA DO LIXO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q119_1">
<input name="q119" id="q119_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q119_2">
<input name="q119" id="q119_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q119_3">
<input name="q119" id="q119_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[120] = '<input onclick="mostrar(120);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ENTRADAS  3, 4 E 5" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q120_1">
<input name="q120" id="q120_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q120_2">
<input name="q120" id="q120_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q120_3">
<input name="q120" id="q120_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[121] = '<input onclick="mostrar(121);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CANCELAS - ESTACIONAMENTOS 1 E 2" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q121_1">
<input name="q121" id="q121_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q121_2">
<input name="q121" id="q121_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q121_3">
<input name="q121" id="q121_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[122] = '<input onclick="mostrar(122);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ENTRADA DE PEDESTRES - ESTAC. 2" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q122_1">
<input name="q122" id="q122_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q122_2">
<input name="q122" id="q122_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q122_3">
<input name="q122" id="q122_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[123] = '<input onclick="mostrar(123);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESTACIONAMENTO 1 - GAIOLAS DE PAPELÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q123_1">
<input name="q123" id="q123_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q123_2">
<input name="q123" id="q123_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q123_3">
<input name="q123" id="q123_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[124] = '<input onclick="mostrar(124);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CORREDORES DAS COZINHAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q124_1">
<input name="q124" id="q124_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q124_2">
<input name="q124" id="q124_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q124_3">
<input name="q124" id="q124_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[125] = '<input onclick="mostrar(125);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CANALETAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q125_1">
<input name="q125" id="q125_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q125_2">
<input name="q125" id="q125_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q125_3">
<input name="q125" id="q125_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[126] = '<input onclick="mostrar(126);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="DOCA - GAIOLAS DE PAPELÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q126_1">
<input name="q126" id="q126_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q126_2">
<input name="q126" id="q126_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q126_3">
<input name="q126" id="q126_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[127] = '<input onclick="mostrar(127);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CANCELAS - ESTACIONAMNETO 1 E 2" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q127_1">
<input name="q127" id="q127_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q127_2">
<input name="q127" id="q127_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q127_3">
<input name="q127" id="q127_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[128] = '<input onclick="mostrar(128);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MOTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q128_1">
<input name="q128" id="q128_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q128_2">
<input name="q128" id="q128_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q128_3">
<input name="q128" id="q128_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[129] = '<input onclick="mostrar(129);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="GUARITA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q129_1">
<input name="q129" id="q129_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q129_2">
<input name="q129" id="q129_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q129_3">
<input name="q129" id="q129_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[130] = '<input onclick="mostrar(130);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="EQUIPAMENTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q130_1">
<input name="q130" id="q130_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q130_2">
<input name="q130" id="q130_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q130_3">
<input name="q130" id="q130_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[131] = '<input onclick="mostrar(131);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="OCORRÊNCIAS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q131_1">
<input name="q131" id="q131_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q131_2">
<input name="q131" id="q131_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q131_3">
<input name="q131" id="q131_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[132] = '<input onclick="mostrar(132);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="WC - ENTRADA PRÓX. DOCA" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q132_1">
<input name="q132" id="q132_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q132_2">
<input name="q132" id="q132_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q132_3">
<input name="q132" id="q132_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[133] = '<input onclick="mostrar(133);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="WC - PORTÃO 3" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q133_1">
<input name="q133" id="q133_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q133_2">
<input name="q133" id="q133_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q133_3">
<input name="q133" id="q133_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[134] = '<input onclick="mostrar(134);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CORREDORES - LADO A" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q134_1">
<input name="q134" id="q134_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q134_2">
<input name="q134" id="q134_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q134_3">
<input name="q134" id="q134_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[135] = '<input onclick="mostrar(135);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CORREDORES - LADO B" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q135_1">
<input name="q135" id="q135_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q135_2">
<input name="q135" id="q135_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q135_3">
<input name="q135" id="q135_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[136] = '<input onclick="mostrar(136);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PRAÇA DE ALIMENTAÇÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q136_1">
<input name="q136" id="q136_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q136_2">
<input name="q136" id="q136_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q136_3">
<input name="q136" id="q136_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[137] = '<input onclick="mostrar(137);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="SALA DE DESCANSO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q137_1">
<input name="q137" id="q137_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q137_2">
<input name="q137" id="q137_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q137_3">
<input name="q137" id="q137_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[138] = '<input onclick="mostrar(138);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="VESTIÁRIOS - MASC E FEMININO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q138_1">
<input name="q138" id="q138_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q138_2">
<input name="q138" id="q138_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q138_3">
<input name="q138" id="q138_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[139] = '<input onclick="mostrar(139);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="ESTOQUE" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q139_1">
<input name="q139" id="q139_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q139_2">
<input name="q139" id="q139_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q139_3">
<input name="q139" id="q139_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[140] = '<input onclick="mostrar(140);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="MÁQUINAS E EQUIPAMENTOS" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q140_1">
<input name="q140" id="q140_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q140_2">
<input name="q140" id="q140_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q140_3">
<input name="q140" id="q140_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[141] = '<input onclick="mostrar(141);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="SALA DA SUPERVISÃO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q141_1">
<input name="q141" id="q141_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q141_2">
<input name="q141" id="q141_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q141_3">
<input name="q141" id="q141_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[142] = '<input onclick="mostrar(142);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CARTÃO DE PONTO" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q142_1">
<input name="q142" id="q142_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q142_2">
<input name="q142" id="q142_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q142_3">
<input name="q142" id="q142_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[143] = '<input onclick="mostrar(143);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="CONDIÇÕES DO SUPORTE DE CHECK LIST" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q143_1">
<input name="q143" id="q143_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q143_2">
<input name="q143" id="q143_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q143_3">
<input name="q143" id="q143_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$perguntas[144] = '<input onclick="mostrar(144);" type="button" value="?" class="btn btn-primary col-md-1 col-sm-1 col-xs-1 "   style="margin-right:-15px !important; margin-left:15px !important; background-color:#F00; color:#FFF; font-weight:bolder"/>
<div class="col-md-5 col-sm-5 col-xs-11 text-center small-screen-center "   style="margin-right:-15px !important; margin-left:0px !important">
<input class="form-control" placeholder="PREENCHIMENTO DIÁRIO DO CHECK LIST" readonly>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 text-center small-screen-center "    style="margin-left:-15px !important">
<div class="row">
<div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
<label class="btn btn-success col-md-4 col-sm-4 col-xs-4" for="q144_1">
<input name="q144" id="q144_01" type="radio" required value="conf" >Conforme</label>
<label class="btn btn-danger col-md-4 col-sm-4 col-xs-4" for="q144_2">
<input name="q144" id="q144_2" type="radio" required value="inconf" >Não Conf.</label>
<label class="btn btn-warning col-md-4 col-sm-4 col-xs-4" for="q144_3">
<input name="q144" id="q144_3" type="radio" required value="naplica" >Não Aplica</label>
</div>
</div>
</div>';

$colorsuccess2 = "<td height='13' width='20%' style='background-color:#449d44;'></td>";
$colorwarning2 = "<td height='13' width='20%' style='background-color:#f0ad4e;'></td>";
$colordanger2 = "<td height='13' width='20%' style='background-color:#d9534f;'></td>";

if (isset($_POST)) {
$respostas = array();
$respostas[1] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>UNIFORME</td> ". ($_POST['q01']=="conf"?"$colorsuccess2":($_POST['q01'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[2] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>IDENTIFICAÇÃO COLABORADOR</td> ". ($_POST['q02']=="conf"?"$colorsuccess2":($_POST['q02'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[3] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CARTÃO DE PONTO</td> ". ($_POST['q03']=="conf"?"$colorsuccess2":($_POST['q03'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[4] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EPI</td> ". ($_POST['q04']=="conf"?"$colorsuccess2":($_POST['q04'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[5] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>APRESENTAÇÃO PESSOAL</td> ". ($_POST['q05']=="conf"?"$colorsuccess2":($_POST['q05'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[6] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>POSTURA</td> ". ($_POST['q06']=="conf"?"$colorsuccess2":($_POST['q06'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[7] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ROTINA DE TRABALHO</td> ". ($_POST['q07']=="conf"?"$colorsuccess2":($_POST['q07'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[8] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EXECUÇÃO DAS ATIVIDADES</td> ". ($_POST['q08']=="conf"?"$colorsuccess2":($_POST['q08'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[9] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTROLE DOS PORTÕES</td> ". ($_POST['q09']=="conf"?"$colorsuccess2":($_POST['q09'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[10] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>IDENTIFICAÇÃO DAS PESSOAS</td> ". ($_POST['q10']=="conf"?"$colorsuccess2":($_POST['q10'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[11] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTATO INTERFONE - CLIENTE</td> ". ($_POST['q11']=="conf"?"$colorsuccess2":($_POST['q11'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[12] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RONDA</td> ". ($_POST['q12']=="conf"?"$colorsuccess2":($_POST['q12'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[13] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>COMUNICAÇÃO</td> ". ($_POST['q13']=="conf"?"$colorsuccess2":($_POST['q13'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[14] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TROCA DE TURNO</td> ". ($_POST['q14']=="conf"?"$colorsuccess2":($_POST['q14'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[15] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PORTARIA/ GUARITA</td> ". ($_POST['q15']=="conf"?"$colorsuccess2":($_POST['q15'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[16] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CORRESPONDÊNCIAS</td> ". ($_POST['q16']=="conf"?"$colorsuccess2":($_POST['q16'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[17] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIVRO DE OCORRÊNCIA</td> ". ($_POST['q17']=="conf"?"$colorsuccess2":($_POST['q17'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[18] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTROLE DE ACESSO</td> ". ($_POST['q18']=="conf"?"$colorsuccess2":($_POST['q18'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[19] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MANUTENÇÃO EQUIPAMENTOS</td> ". ($_POST['q19']=="conf"?"$colorsuccess2":($_POST['q19'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[20] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EQUIPAMENTOS/FERRAMENTAS</td> ". ($_POST['q20']=="conf"?"$colorsuccess2":($_POST['q20'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[21] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ARMAZENAMENTO DE PROD./ EQUIP.</td> ". ($_POST['q21']=="conf"?"$colorsuccess2":($_POST['q21'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[22] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PRODUTOS</td> ". ($_POST['q22']=="conf"?"$colorsuccess2":($_POST['q22'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[23] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EQUIPAMENTOS</td> ". ($_POST['q23']=="conf"?"$colorsuccess2":($_POST['q23'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[24] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONSERVAÇÃO</td> ". ($_POST['q24']=="conf"?"$colorsuccess2":($_POST['q24'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[25] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOTO/ CARRO</td> ". ($_POST['q25']=="conf"?"$colorsuccess2":($_POST['q25'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[26] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ARMAZENAMENTO</td> ". ($_POST['q26']=="conf"?"$colorsuccess2":($_POST['q26'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[27] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>DILUIDOR DE PRODUTO</td> ". ($_POST['q27']=="conf"?"$colorsuccess2":($_POST['q27'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[28] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PORTÕES E GRADES</td> ". ($_POST['q28']=="conf"?"$colorsuccess2":($_POST['q28'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[29] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CERCA ELÉTRICA E CONCERTINA</td> ". ($_POST['q29']=="conf"?"$colorsuccess2":($_POST['q29'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[30] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CANCELA</td> ". ($_POST['q30']=="conf"?"$colorsuccess2":($_POST['q30'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[31] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTATO - CLIENTE/ SUPERVISÃO</td> ". ($_POST['q31']=="conf"?"$colorsuccess2":($_POST['q31'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[32] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>SOLICITAÇÕES DO CLIENTE</td> ". ($_POST['q32']=="conf"?"$colorsuccess2":($_POST['q32'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[33] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RECLAMAÇÃO DO CLIENTE</td> ". ($_POST['q33']=="conf"?"$colorsuccess2":($_POST['q33'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[34] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTROLE DE CHAVES</td> ". ($_POST['q34']=="conf"?"$colorsuccess2":($_POST['q34'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[35] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ENTRADA E SAÍDA DE EQUIPAMENTOS</td> ". ($_POST['q35']=="conf"?"$colorsuccess2":($_POST['q35'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[36] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTROLE DE VEÍCULOS</td> ". ($_POST['q36']=="conf"?"$colorsuccess2":($_POST['q36'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[37] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CADASTRO E LIBERAÇÃO DE CRACHÁS</td> ". ($_POST['q37']=="conf"?"$colorsuccess2":($_POST['q37'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[38] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ASPECTO DO GRAMADO</td> ". ($_POST['q38']=="conf"?"$colorsuccess2":($_POST['q38'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[39] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS/ JANELAS/ PERSIANAS</td> ". ($_POST['q39']=="conf"?"$colorsuccess2":($_POST['q39'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[40] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>JARDINS E CANTEIROS</td> ". ($_POST['q40']=="conf"?"$colorsuccess2":($_POST['q40'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[41] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ÁRVORES</td> ". ($_POST['q41']=="conf"?"$colorsuccess2":($_POST['q41'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[42] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISO/ CHÃO/ CORREDORES</td> ". ($_POST['q42']=="conf"?"$colorsuccess2":($_POST['q42'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[43] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PRODUTOS QUÍMICOS - JARDINAGEM 1</td> ". ($_POST['q43']=="conf"?"$colorsuccess2":($_POST['q43'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[44] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PRODUTOS QUÍMICOS - JARDINAGEM 2</td> ". ($_POST['q44']=="conf"?"$colorsuccess2":($_POST['q44'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[45] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PRODUTOS QUÍMICOS - JARDINAGEM 3</td> ". ($_POST['q45']=="conf"?"$colorsuccess2":($_POST['q45'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[46] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIXEIRAS EXTERNAS/ CAÇAMBAS</td> ". ($_POST['q46']=="conf"?"$colorsuccess2":($_POST['q46'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[47] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PAREDES / PORTAS / CANTOS</td> ". ($_POST['q47']=="conf"?"$colorsuccess2":($_POST['q47'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[48] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS/ JANELAS/ PERSIANAS</td> ". ($_POST['q48']=="conf"?"$colorsuccess2":($_POST['q48'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[49] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TETO/LUMINÁRIA/AR CONDICIONADO</td> ". ($_POST['q49']=="conf"?"$colorsuccess2":($_POST['q49'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[50] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIXEIRAS</td> ". ($_POST['q50']=="conf"?"$colorsuccess2":($_POST['q50'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[51] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOBÍLIA/ TELEFONES</td> ". ($_POST['q51']=="conf"?"$colorsuccess2":($_POST['q51'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[52] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISO/ CHÃO/ CORREDORES</td> ". ($_POST['q52']=="conf"?"$colorsuccess2":($_POST['q52'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[53] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>BANHEIRO</td> ". ($_POST['q53']=="conf"?"$colorsuccess2":($_POST['q53'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[54] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MATERIAL DE HIGIENE</td> ". ($_POST['q54']=="conf"?"$colorsuccess2":($_POST['q54'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[55] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RALOS E GRELHAS - PORTARIA</td> ". ($_POST['q55']=="conf"?"$colorsuccess2":($_POST['q55'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[56] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESCADA DE ACESSO/ RAMPA</td> ". ($_POST['q56']=="conf"?"$colorsuccess2":($_POST['q56'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[57] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESCADA DE ACESSO/ RAMPA</td> ". ($_POST['q57']=="conf"?"$colorsuccess2":($_POST['q57'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[58] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOBÍLIA - BANCOS E CADEIRAS</td> ". ($_POST['q58']=="conf"?"$colorsuccess2":($_POST['q58'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[59] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PAREDES / PORTAS / CANTOS</td> ". ($_POST['q59']=="conf"?"$colorsuccess2":($_POST['q59'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[60] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS/ JANELAS/ PERSIANAS</td> ". ($_POST['q60']=="conf"?"$colorsuccess2":($_POST['q60'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[61] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TETO/ LUMINÁRIA/ AR CONDICIONADO</td> ". ($_POST['q61']=="conf"?"$colorsuccess2":($_POST['q61'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[62] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIXEIRAS</td> ". ($_POST['q62']=="conf"?"$colorsuccess2":($_POST['q62'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[63] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISO/ CHÃO/ CORREDORES</td> ". ($_POST['q63']=="conf"?"$colorsuccess2":($_POST['q63'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[64] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>BANHEIROS SOCIAIS</td> ". ($_POST['q64']=="conf"?"$colorsuccess2":($_POST['q64'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[65] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MATERIAL DE HIGIENE</td> ". ($_POST['q65']=="conf"?"$colorsuccess2":($_POST['q65'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[66] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RALOS E GRELHAS</td> ". ($_POST['q66']=="conf"?"$colorsuccess2":($_POST['q66'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[67] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESCADAS / CORRIMÕES</td> ". ($_POST['q67']=="conf"?"$colorsuccess2":($_POST['q67'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[68] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOBÍLIA - SALÃO DE FESTAS</td> ". ($_POST['q68']=="conf"?"$colorsuccess2":($_POST['q68'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[69] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESCADAS / CORRIMÕES - ENTRADA</td> ". ($_POST['q69']=="conf"?"$colorsuccess2":($_POST['q69'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[70] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RUAS E CALÇADAS EXTERNAS</td> ". ($_POST['q70']=="conf"?"$colorsuccess2":($_POST['q70'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[71] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>DESCARTE DE RESÍDUOS</td> ". ($_POST['q71']=="conf"?"$colorsuccess2":($_POST['q71'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[72] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>FACHADA/ PAREDE EXTERNA</td> ". ($_POST['q72']=="conf"?"$colorsuccess2":($_POST['q72'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[73] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS E JANELAS EXTERNAS</td> ". ($_POST['q73']=="conf"?"$colorsuccess2":($_POST['q73'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[74] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CALÇADAS E PISO EXTERNO</td> ". ($_POST['q74']=="conf"?"$colorsuccess2":($_POST['q74'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[75] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIXEIRAS EXTERNAS</td> ". ($_POST['q75']=="conf"?"$colorsuccess2":($_POST['q75'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[76] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RALOS E GRELHAS</td> ". ($_POST['q76']=="conf"?"$colorsuccess2":($_POST['q76'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[77] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOBÍLIA - SALÃO DE FESTAS</td> ". ($_POST['q77']=="conf"?"$colorsuccess2":($_POST['q77'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[78] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>QUIOSQUE - CHURRASQUEIRAS</td> ". ($_POST['q78']=="conf"?"$colorsuccess2":($_POST['q78'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[79] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ÁREA DE LAZER/ QUADRA/PÁTIO</td> ". ($_POST['q79']=="conf"?"$colorsuccess2":($_POST['q79'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[80] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISCINA E ARREDORES</td> ". ($_POST['q80']=="conf"?"$colorsuccess2":($_POST['q80'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[81] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESCADAS DE ACESSO</td> ". ($_POST['q81']=="conf"?"$colorsuccess2":($_POST['q81'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[82] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>BANHEIROS SOCIAIS</td> ". ($_POST['q82']=="conf"?"$colorsuccess2":($_POST['q82'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[83] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PLAYGROUND/ TANQUE DE AREIA</td> ". ($_POST['q83']=="conf"?"$colorsuccess2":($_POST['q83'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[84] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LUMINÁRIA/ AR CONDICIONADO</td> ". ($_POST['q84']=="conf"?"$colorsuccess2":($_POST['q84'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[85] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PAREDES / PORTAS / CANTOS/ BIOMBOS</td> ". ($_POST['q85']=="conf"?"$colorsuccess2":($_POST['q85'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[86] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS/ JANELAS/ PERSIANAS</td> ". ($_POST['q86']=="conf"?"$colorsuccess2":($_POST['q86'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[87] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TETO/ LUMINÁRIA/ AR CONDICIONADO</td> ". ($_POST['q87']=="conf"?"$colorsuccess2":($_POST['q87'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[88] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOBÍLIA E OBJETOS DECORATIVOS</td> ". ($_POST['q88']=="conf"?"$colorsuccess2":($_POST['q88'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[89] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EXTINTORES</td> ". ($_POST['q89']=="conf"?"$colorsuccess2":($_POST['q89'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[90] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISO/ CHÃO/ TACO/ TAPETE</td> ". ($_POST['q90']=="conf"?"$colorsuccess2":($_POST['q90'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[91] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PAREDES / PORTAS / CANTOS</td> ". ($_POST['q91']=="conf"?"$colorsuccess2":($_POST['q91'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[92] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VIDROS/ JANELAS</td> ". ($_POST['q92']=="conf"?"$colorsuccess2":($_POST['q92'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[93] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TETO/ LUMINÁRIA</td> ". ($_POST['q93']=="conf"?"$colorsuccess2":($_POST['q93'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[94] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIXEIRAS</td> ". ($_POST['q94']=="conf"?"$colorsuccess2":($_POST['q94'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[95] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MICTÓRIOS/ SANITÁRIOS</td> ". ($_POST['q95']=="conf"?"$colorsuccess2":($_POST['q95'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[96] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PIAS E LAVATÓRIO</td> ". ($_POST['q96']=="conf"?"$colorsuccess2":($_POST['q96'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[97] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PISO/ CHÃO/ CORREDORES</td> ". ($_POST['q97']=="conf"?"$colorsuccess2":($_POST['q97'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[98] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MATERIAL DE HIGIENE</td> ". ($_POST['q98']=="conf"?"$colorsuccess2":($_POST['q98'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[99] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>RALOS E GRELHAS</td> ". ($_POST['q99']=="conf"?"$colorsuccess2":($_POST['q99'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[100] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LÂMPADAS E ILUMINAÇÃO GERAL</td> ". ($_POST['q100']=="conf"?"$colorsuccess2":($_POST['q100'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[101] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>INTERRUPTORES</td> ". ($_POST['q101']=="conf"?"$colorsuccess2":($_POST['q101'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[102] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TORNEIRAS E PIAS</td> ". ($_POST['q102']=="conf"?"$colorsuccess2":($_POST['q102'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[103] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CONTROLE DE GÁS</td> ". ($_POST['q103']=="conf"?"$colorsuccess2":($_POST['q103'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[104] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CAIXA DE INSPEÇÃO DE ÁGUA</td> ". ($_POST['q104']=="conf"?"$colorsuccess2":($_POST['q104'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[105] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TRATAMENTO DE PISCINA</td> ". ($_POST['q105']=="conf"?"$colorsuccess2":($_POST['q105'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[106] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>INTERFONES </td> ". ($_POST['q106']=="conf"?"$colorsuccess2":($_POST['q106'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[107] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EXTINTORES</td> ". ($_POST['q107']=="conf"?"$colorsuccess2":($_POST['q107'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[108] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>HIDRANTES</td> ". ($_POST['q108']=="conf"?"$colorsuccess2":($_POST['q108'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[109] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ELEVADOR</td> ". ($_POST['q109']=="conf"?"$colorsuccess2":($_POST['q109'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[110] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CERCA ELÉTRICA/ CONCERTINAS</td> ". ($_POST['q110']=="conf"?"$colorsuccess2":($_POST['q110'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[111] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ANTENAS</td> ". ($_POST['q111']=="conf"?"$colorsuccess2":($_POST['q111'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[112] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>TELHADO/ TETO</td> ". ($_POST['q112']=="conf"?"$colorsuccess2":($_POST['q112'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[113] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>UNIFORME / APRESENTAÇÃO PESSOAL</td> ". ($_POST['q113']=="conf"?"$colorsuccess2":($_POST['q113'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[114] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>IDENTIFICAÇÃO DO COLABORADOR</td> ". ($_POST['q114']=="conf"?"$colorsuccess2":($_POST['q114'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[115] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIVRO DE OCORRÊNCIA</td> ". ($_POST['q115']=="conf"?"$colorsuccess2":($_POST['q115'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[116] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ARMAMENTO</td> ". ($_POST['q116']=="conf"?"$colorsuccess2":($_POST['q116'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[117] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>LIVRO DE ACHADOS E PERDIDOS</td> ". ($_POST['q117']=="conf"?"$colorsuccess2":($_POST['q117'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[118] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESTACIONAMENTOS 1 E 2</td> ". ($_POST['q118']=="conf"?"$colorsuccess2":($_POST['q118'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[119] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CASINHA DO LIXO</td> ". ($_POST['q119']=="conf"?"$colorsuccess2":($_POST['q119'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[120] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ENTRADAS  3, 4 E 5</td> ". ($_POST['q120']=="conf"?"$colorsuccess2":($_POST['q120'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[121] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CANCELAS - ESTACIONAMENTOS 1 E 2</td> ". ($_POST['q121']=="conf"?"$colorsuccess2":($_POST['q121'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[122] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ENTRADA DE PEDESTRES - ESTAC. 2</td> ". ($_POST['q122']=="conf"?"$colorsuccess2":($_POST['q122'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[123] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESTACIONAMENTO 1 - GAIOLAS DE PAPELÃO</td> ". ($_POST['q123']=="conf"?"$colorsuccess2":($_POST['q123'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[124] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CORREDORES DAS COZINHAS</td> ". ($_POST['q124']=="conf"?"$colorsuccess2":($_POST['q124'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[125] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CANALETAS</td> ". ($_POST['q125']=="conf"?"$colorsuccess2":($_POST['q125'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[126] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>DOCA - GAIOLAS DE PAPELÃO</td> ". ($_POST['q126']=="conf"?"$colorsuccess2":($_POST['q126'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[127] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CANCELAS - ESTACIONAMNETO 1 E 2</td> ". ($_POST['q127']=="conf"?"$colorsuccess2":($_POST['q127'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[128] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MOTO</td> ". ($_POST['q128']=="conf"?"$colorsuccess2":($_POST['q128'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[129] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>GUARITA</td> ". ($_POST['q129']=="conf"?"$colorsuccess2":($_POST['q129'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[130] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>EQUIPAMENTOS</td> ". ($_POST['q130']=="conf"?"$colorsuccess2":($_POST['q130'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[131] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>OCORRÊNCIAS</td> ". ($_POST['q131']=="conf"?"$colorsuccess2":($_POST['q131'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[132] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>WC - ENTRADA PRÓX. DOCA</td> ". ($_POST['q132']=="conf"?"$colorsuccess2":($_POST['q132'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[133] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>WC - PORTÃO 3</td> ". ($_POST['q133']=="conf"?"$colorsuccess2":($_POST['q133'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[134] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CORREDORES - LADO A</td> ". ($_POST['q134']=="conf"?"$colorsuccess2":($_POST['q134'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[135] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CORREDORES - LADO B</td> ". ($_POST['q135']=="conf"?"$colorsuccess2":($_POST['q135'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[136] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>PRAÇA DE ALIMENTAÇÃO</td> ". ($_POST['q136']=="conf"?"$colorsuccess2":($_POST['q136'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[137] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>SALA DE DESCANSO</td> ". ($_POST['q137']=="conf"?"$colorsuccess2":($_POST['q137'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[138] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>VESTIÁRIOS - MASC E FEMININO</td> ". ($_POST['q138']=="conf"?"$colorsuccess2":($_POST['q138'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[139] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>ESTOQUE</td> ". ($_POST['q139']=="conf"?"$colorsuccess2":($_POST['q139'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[140] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>MÁQUINAS E EQUIPAMENTOS</td> ". ($_POST['q140']=="conf"?"$colorsuccess2":($_POST['q140'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[141] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>SALA DA SUPERVISÃO</td> ". ($_POST['q141']=="conf"?"$colorsuccess2":($_POST['q141'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[142] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CARTÃO DE PONTO</td> ". ($_POST['q142']=="conf"?"$colorsuccess2":($_POST['q142'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[143] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CARTÃO DE PONTO</td> ". ($_POST['q143']=="conf"?"$colorsuccess2":($_POST['q143'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
$respostas[144] = "<tr><td bgcolor='#E4E4E4' width='70%' align='left'>CARTÃO DE PONTO</td> ". ($_POST['q144']=="conf"?"$colorsuccess2":($_POST['q144'] == "naplica" ? "$colorwarning2" : "$colordanger2")) ."<td width='10%'></td></tr>";
}


$codfor2 = "$codfor";
switch ($codfor2) {
case "1": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Instalações:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					 for ($i = 28; $i <= 30; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode( $conteudo.= '</table>
				  
                  <br />
		          <br />
				  
				  <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '
					</table>
					
					</td>
 
 
                <td width="50%">
				
				<strong>Seguran&ccedil;a:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 9; $i <= 18; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
                 <br />
          	     <br />
				
                 <strong>Equipamentos / Materiais / Veículos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 23; $i <= 26; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "2": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Equipamentos / Materiais / Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 21; $i <= 23; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
                  <br />
		          <br />
				  
				  <strong>Limpeza Área Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 70; $i <= 81; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '
					</table>
					
					</td>
 
 
                <td width="50%">
				
				<strong>Limpeza Portaria:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 47; $i <= 55; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
                 <br />
          	     <br />
				
                 <strong>Limpeza Áreas Sociais - Salão de Festas:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 59; $i <= 68; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
                 <br />
          	     <br />
				
                 <strong>Preenchimento de Check List de Limpeza:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 143; $i <= 144; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
					
				 <br />
          	     <br />
				
                 <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "3": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Instalações:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					 for ($i = 28; $i <= 30; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode( $conteudo.= '</table>
				  
                  <br />
		          <br />
				  
				  <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '
					</table>
					
					</td>
 
 
                <td width="50%">
				
				<strong>Seguran&ccedil;a:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 9; $i <= 18; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
                 <br />
          	     <br />
				
                 <strong>Equipamentos / Materiais / Veículos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 23; $i <= 26; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "4": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Equipamentos / Materiais / Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                   ');
					for ($i = 21; $i <= 23; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
				  
                  <br />
          	     <br />
				
                 <strong>Preenchimento de Check List de Limpeza:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 143; $i <= 144; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
					
					<br />
		          <br />
				  
				  <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table> 
				  
                  <br />
		          <br />
				  
				  <strong>Limpeza Áreas Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 69; $i <= 69; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
                    for ($i = 72; $i <= 78; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					</td>
 
 
                <td width="50%">
									  
			      <strong>Limpeza Portaria:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 47; $i <= 55; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                 <strong>Limpeza Áreas Sociais - Salão de Festas:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 59; $i <= 68; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
					
				  <strong>Limpeza Hall Entrada:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 85; $i <= 90; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                 
				  
				  </td>
				</tr>
            </table>
'); break;

case "5": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Segurança:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					 for ($i = 9; $i <= 18; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode( $conteudo.= '</table>
				  
                  </td>
 
 
                <td width="50%">
				  
				  <strong>Equipamentos / Materiais / Veículos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 23; $i <= 26; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
				<br />
           		<br />
				
				  <strong>Controles e Procedimentos do Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 34; $i <= 37; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                 <strong>Instalações:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 28; $i <= 30; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
					
				<br />
          	    <br />
				
                  <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "6": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Equipamentos / Materiais / Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 21; $i <= 23; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
                  <br />
          	     <br />
				
                 <strong>Preenchimento de Check List de Limpeza:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 143; $i <= 144; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
					
					<br />
		          <br />
				  
				 <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
					
					
					<br />
		          <br />
				  
				  <strong>Limpeza Áreas Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 69; $i <= 69; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					for ($i = 72; $i <= 78; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					</td>
 
 
                <td width="50%">
				
				<strong>Limpeza Portaria:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 47; $i <= 55; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                 <strong>Limpeza Áreas Sociais - Salão de Festas:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 59; $i <= 68; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                  <strong>Limpeza Hall Entrada:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 85; $i <= 90; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "7": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Limpeza Áreas Sociais e Externas:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 70; $i <= 84; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
                 </td>
 
 
                <td width="50%"> 
				  
				  <strong>Manutenção Predial:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 100; $i <= 112; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
				  
				  <strong>Controles e Procedimentos do Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 34; $i <= 37; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
				
				<strong>Equipamentos / Materiais / Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 20; $i <= 22; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                				
                 <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "8": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Manutenção Jardins e Gramados:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 38; $i <= 42; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
                 </td>
 
 
                <td width="50%"> 
				  
				  <strong>Manuseio de Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 43; $i <= 46; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
				  
				  <strong>Equipamentos / Materiais / Produtos:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 19; $i <= 19; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					for ($i = 22; $i <= 23; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
              				
                 <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 31; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "9": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Limpeza Área Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 118; $i <= 126; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Portaria Área Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 127; $i <= 131; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
                 <br />
		          <br />
				  
				  <strong>Limpeza Área Interna:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 132; $i <= 136; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					</td>
 
 
                <td width="50%"> 
				  
				  <strong>Delta:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 137; $i <= 142; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
				
				<strong>Equipe Limpeza / Portaria:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 1; $i <= 2; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
                    for ($i = 4; $i <= 6; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                 <br />
          	     <br />
				
                				
                 <strong>Equipe Vigilância:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 113; $i <= 117; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;

case "10": utf8_encode($conteudo = '
<table width="100%">
              <tr>              
                <td width="50%" >
				
				<strong>Equipe:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
                      <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 1; $i <= 8; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
                  
                 <br />
           		 <br />
                  
                  <strong>Limpeza das Áreas:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 47; $i <= 56; $i++) { $conteudo.= utf8_decode($respostas[$i]);  };
					utf8_encode($conteudo.= '</table>
							
				  
               <br />
		          <br />  
				  
				  <strong>Limpeza Interna Salas Administrativas e Sanitários:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 91; $i <= 99; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					</td>
 
 
                <td width="50%"> 
				  
				  <strong>Limpeza Áreas Sociais - Espaço de Convivência:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 57; $i <= 66; $i++) { $conteudo.= utf8_decode($respostas[$i]); } ;
					utf8_encode($conteudo.= '</table>
					
					<br />
		          <br />
				
				<strong>DML:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
                    for ($i = 21; $i <= 23; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
                    for ($i = 27; $i <= 27; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '</table>
				  
                                 <br />
          	     <br />
				
                				
                 <strong>Limpeza Área Externa:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 70; $i <= 76; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
					
					<br />
          	     <br />
				
                 <strong>Preenchimento de Check List de Limpeza:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 143; $i <= 144; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
					
					<br />
          	     <br />
				
                				
                 <strong>Relacionamento com Cliente:</strong><br>
                  <table style="color: #fff; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0"><tr >
                      <td width="70%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Item Avaliado</strong></td>
                      <td width="20%" style="background-color: #D9534F;" align="center" valign="middle"><strong>Situa&ccedil;&atilde;o</strong></td>
					  <td width="10%" align="center" valign="middle"></td></tr></table>
                  <table style="color: #666666; font-family: Helvetica, Arial, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    ');
					for ($i = 32; $i <= 33; $i++) { $conteudo.= utf8_decode($respostas[$i]); };
					utf8_encode($conteudo.= '
					</table>
				  
				  </td>
				</tr>
            </table>
'); break;
}