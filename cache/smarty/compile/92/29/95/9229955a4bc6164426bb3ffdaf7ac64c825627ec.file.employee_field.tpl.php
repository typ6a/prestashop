<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:25
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15453912058d2cc5d604685-50099209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9229955a4bc6164426bb3ffdaf7ac64c825627ec' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15453912058d2cc5d604685-50099209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc5d6aafb1_89439597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc5d6aafb1_89439597')) {function content_58d2cc5d6aafb1_89439597($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
