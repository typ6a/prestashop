<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 16:21:55
         compiled from "/home/vagrant/Code/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144411819258d2dce3a1d795-75011014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73fe56a9c625aa22c76c7535b96f8db7ed93240d' => 
    array (
      0 => '/home/vagrant/Code/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1482153426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144411819258d2dce3a1d795-75011014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2dce3aa08c2_84235925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2dce3aa08c2_84235925')) {function content_58d2dce3aa08c2_84235925($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
