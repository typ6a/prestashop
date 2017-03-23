<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:48
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204137172258d2cc7468d094-36182200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15172f32e1a7f4cc0b5f31ef54d06758206d251' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204137172258d2cc7468d094-36182200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc748205f5_90368580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc748205f5_90368580')) {function content_58d2cc748205f5_90368580($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
