<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:40
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15928921458d2cce4c07457-70149996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7273aec60114bb9f4b48cbfc31ec2558aab3f535' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder_checkbox_shops.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15928921458d2cce4c07457-70149996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cce4de84c5_19197781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cce4de84c5_19197781')) {function content_58d2cce4de84c5_19197781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/vagrant/Code/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
