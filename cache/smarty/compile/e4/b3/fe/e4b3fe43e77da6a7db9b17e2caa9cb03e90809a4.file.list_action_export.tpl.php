<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:43
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100340463158d2ccab1cba73-58207233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b3fe43e77da6a7db9b17e2caa9cb03e90809a4' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100340463158d2ccab1cba73-58207233',
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
  'unifunc' => 'content_58d2ccab2c9667_82885152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccab2c9667_82885152')) {function content_58d2ccab2c9667_82885152($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
