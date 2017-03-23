<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:55
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70330963758d2cc7b56edb6-16851487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b646a941796ca90496386431227b251351127' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70330963758d2cc7b56edb6-16851487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'payment_modules' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc7b81f2b0_65401559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc7b81f2b0_65401559')) {function content_58d2cc7b81f2b0_65401559($_smarty_tpl) {?>
<select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name'])&&$_smarty_tpl->tpl_vars['module']->value->name==$_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php } ?>
  <?php } else { ?>
      <option value="<?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
</option>
  <?php }?>
</select>
<?php }} ?>
