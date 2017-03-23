<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:27
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213580020958d2ccd79f3669-34346534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1cb75c2df260aca69172afdb9b05a91bc4e9880' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213580020958d2ccd79f3669-34346534',
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
  'unifunc' => 'content_58d2ccd7afd1a8_19547506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccd7afd1a8_19547506')) {function content_58d2ccd7afd1a8_19547506($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
