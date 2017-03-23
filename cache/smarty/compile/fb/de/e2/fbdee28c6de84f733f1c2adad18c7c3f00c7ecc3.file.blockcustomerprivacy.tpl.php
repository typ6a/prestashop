<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:20
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50449906258d2cc586c72c2-27222061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbdee28c6de84f733f1c2adad18c7c3f00c7ecc3' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50449906258d2cc586c72c2-27222061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc58803f96_91396115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc58803f96_91396115')) {function content_58d2cc58803f96_91396115($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }} ?>
