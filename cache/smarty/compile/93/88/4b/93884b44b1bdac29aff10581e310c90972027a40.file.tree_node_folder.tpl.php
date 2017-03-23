<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:40
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31792497758d2cce450da41-78083662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93884b44b1bdac29aff10581e310c90972027a40' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31792497758d2cce450da41-78083662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cce4647717_77389080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cce4647717_77389080')) {function content_58d2cce4647717_77389080($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/vagrant/Code/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
