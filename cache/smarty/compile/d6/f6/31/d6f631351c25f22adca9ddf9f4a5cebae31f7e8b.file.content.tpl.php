<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:45
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111862464758d2ccadb81177-82129660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f631351c25f22adca9ddf9f4a5cebae31f7e8b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111862464758d2ccadb81177-82129660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2ccadc628f8_64234530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccadc628f8_64234530')) {function content_58d2ccadc628f8_64234530($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
