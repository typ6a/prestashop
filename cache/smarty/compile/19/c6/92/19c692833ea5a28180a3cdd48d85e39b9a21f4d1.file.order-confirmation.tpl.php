<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:08
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174340871558d2cc8853b111-44724009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19c692833ea5a28180a3cdd48d85e39b9a21f4d1' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174340871558d2cc8853b111-44724009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc886267c0_51489959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc886267c0_51489959')) {function content_58d2cc886267c0_51489959($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
