<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:46
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193211790758d2ccae3aa266-71862088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39ea9d62973019bdabf128fe62be0ca9a77b298c' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193211790758d2ccae3aa266-71862088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'id_shop' => 0,
    'shops_having_dependencies' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2ccae5e8148_63680417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2ccae5e8148_63680417')) {function content_58d2ccae5e8148_63680417($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
"
	<?php if (in_array($_smarty_tpl->tpl_vars['id_shop']->value,$_smarty_tpl->tpl_vars['shops_having_dependencies']->value)) {?>
		onclick="jAlert('<?php echo smartyTranslate(array('s'=>'You cannot delete this shop\'s (customer and/or order dependency)','js'=>1),$_smarty_tpl);?>
'); return false;"
	<?php } elseif (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?>
		onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"
	<?php }?>>
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
