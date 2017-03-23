<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:10:18
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143845582958d2cc1a536261-48897177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f33c5b5b83533a0d33b83b9d6f45d701dc765a4b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/content.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143845582958d2cc1a536261-48897177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc1a6562e8_04580431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc1a6562e8_04580431')) {function content_58d2cc1a6562e8_04580431($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
