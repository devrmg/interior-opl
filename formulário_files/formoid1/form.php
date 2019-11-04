<?php

define('EMAIL_FOR_REPORTS', 'renanmendescontact@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://www.google.com');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-red" style="background-color:#f3f3f3;font-size:16px;font-family:Tahoma,Geneva,sans-serif;color:#34495E;max-width:710px;min-width:150px" method="post"><div class="title"><h2>ENTRE EM CONTATO</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Digite seu Nome Completo"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Nome:"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Digite seu EndereÃ§o"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Endereço:"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>" title="Digite o CEP"><label class="title"></label><div class="item-cont"><input class="medium" type="text" min="7" max="9" name="number" placeholder="CEP:" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>" title="Digite seu telefone/celular"><label class="title"></label><div class="item-cont"><input class="medium" type="text" min="10" max="10" name="number1" placeholder="Celular/Telefone:" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Selecione a Marca"><label class="title"></label><div class="item-cont"><div class="medium"><span><select name="select" >

		<option value="Selecione..">Selecione..</option>
		<option value="LG">LG</option>
		<option value="Samsung">Samsung</option>
		<option value="Sony">Sony</option>
		<option value="Phillips">Phillips</option>
		<option value="Panasonic">Panasonic</option>
		<option value="Outro">Outro</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>" title="Descreva o modelo"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input3" placeholder="Modelo:"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>" title="Marque os defeitos"><label class="title">Defeito</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="NãoLiga"/ ><span>NãoLiga</span></label><label><input type="checkbox" name="checkbox[]" value="Sem imagem"/ ><span>Sem imagem</span></label><label><input type="checkbox" name="checkbox[]" value="Tela quebrada"/ ><span>Tela quebrada</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Liga e Desliga"/ ><span>Liga e Desliga</span></label><label><input type="checkbox" name="checkbox[]" value="Sem som"/ ><span>Sem som</span></label><label><input type="checkbox" name="checkbox[]" value="Outro"/ ><span>Outro</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Escreva sua Mensagem"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="small" name="textarea" cols="20" rows="5" required="required" placeholder="Mensagem"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>