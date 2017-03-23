<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:55
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203483943058d2ccb701d682-84302583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b471334741d2d3b3e9bfb10ab049179532c1dde2' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203483943058d2ccb701d682-84302583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2ccb71371a2_44030276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccb71371a2_44030276')) {function content_58d2ccb71371a2_44030276($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
