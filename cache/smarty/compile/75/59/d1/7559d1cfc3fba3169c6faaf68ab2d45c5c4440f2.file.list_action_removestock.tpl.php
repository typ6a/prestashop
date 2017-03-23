<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:27
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15129034358d2ccd730f6a7-57057831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7559d1cfc3fba3169c6faaf68ab2d45c5c4440f2' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15129034358d2ccd730f6a7-57057831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2ccd745d555_82797533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccd745d555_82797533')) {function content_58d2ccd745d555_82797533($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
