<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:24
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102696307758d2ccd4c81bc6-92957468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7cb4a276c6e4bd28062d6a96dbf4954dcea6d4f' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102696307758d2ccd4c81bc6-92957468',
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
  'unifunc' => 'content_58d2ccd4d999b8_18863052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccd4d999b8_18863052')) {function content_58d2ccd4d999b8_18863052($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
