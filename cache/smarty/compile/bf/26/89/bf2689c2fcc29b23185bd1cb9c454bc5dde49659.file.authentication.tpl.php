<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:07
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62190364358d2cc878ba6a5-42237094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf2689c2fcc29b23185bd1cb9c454bc5dde49659' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62190364358d2cc878ba6a5-42237094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc879b9654_36236430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc879b9654_36236430')) {function content_58d2cc879b9654_36236430($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
