<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:48
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98109115458d2cc74c0d982-14729127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fbe885821899a1e12c6852f73e1151a2ef5472b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98109115458d2cc74c0d982-14729127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc74ebdc08_62814574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc74ebdc08_62814574')) {function content_58d2cc74ebdc08_62814574($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
