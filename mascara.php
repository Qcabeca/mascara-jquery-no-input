<?php
/**
/** Adicionando máscara aos inputs (DATA, CEP, CPF, CNPJ, TELEFONE, VALOR)

* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com/mascara-com-jquery-no-input
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://quebrandoacabeca.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Máscara com jQuery no input</title>
<!-- CHAMANDO O JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- CHAMANDO O MASKEDINPUT.JS -->
<script type="text/javascript" src="https://raw.github.com/digitalBush/jquery.maskedinput/1.3.1/dist/jquery.maskedinput.js"></script>
<!-- CHAMANDO O MASKMONEY.JS | CASO NÃO VÁ FORMATAR VALORES (R$) RETIRE ESSE PLUGIN -->
<script type="text/javascript" src="https://raw.githubusercontent.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>

<script type="text/javascript">
var $j = jQuery.noConflict();
// Use jQuery com a variavel $j para evitar conflitos
$j(document).ready(function(){
$j("#data").mask("99/99/9999"); // onde #data é o id do campo
$j("#cep").mask("99.999-999"); // onde #cep é o id do campo
$j("#cpf").mask("999.999.999-99"); // onde #cpf é o id do campo
$j("#cnpj").mask("99.999.999/9999-99"); // onde #cnpj é o id do campo
$j("#telefone").mask("(99) 9999-9999"); // onde #telefone é o id do campo

});
</script>
</head>

<body>
<h2>Máscara com jQuery no input</h2>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

<!-- CAMPO DATA -->
<p>
<label>Data</label>
<input type="text" id="data" />
</p>
<!-- CAMPO CEP -->
<p>
<label>CEP</label>
<input type="text" id="cep" />
</p>
<!-- CAMPO CPF -->
<p>
<label>CPF</label>
<input type="text" id="cpf" />
</p>
<!-- CAMPO CNPJ -->
<p>
<label>CNPJ</label>
<input type="text" id="cnpj" />
</p>
<!-- CAMPO TELEFONE -->
<p>
<label>Telefone fixo</label>
<input type="text" id="telefone" />
</p>

<!-- CAMPO VALOR -->
<p>
<label>Valor</label>
<input type="text" id="valor" />
</p>

</body>
</html>
