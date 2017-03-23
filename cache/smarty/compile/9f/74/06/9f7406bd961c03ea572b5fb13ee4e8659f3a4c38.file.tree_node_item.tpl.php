<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:41
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106532988658d2cce533b5c3-75566297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7406bd961c03ea572b5fb13ee4e8659f3a4c38' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106532988658d2cce533b5c3-75566297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cce5370c06_39644806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cce5370c06_39644806')) {function content_58d2cce5370c06_39644806($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
