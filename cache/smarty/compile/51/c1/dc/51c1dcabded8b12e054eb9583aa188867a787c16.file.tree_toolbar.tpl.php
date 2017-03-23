<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:13:42
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25028425558d2cce619ebe8-08808735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c1dcabded8b12e054eb9583aa188867a787c16' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25028425558d2cce619ebe8-08808735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cce628a5d7_78380034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cce628a5d7_78380034')) {function content_58d2cce628a5d7_78380034($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
