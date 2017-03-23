<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:40
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89828594858d2cc6c1dab89-46267612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5e04684aac0db8cc8fb8fa1b4a1e46c4d834f0' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89828594858d2cc6c1dab89-46267612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc6c317993_58083023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc6c317993_58083023')) {function content_58d2cc6c317993_58083023($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
