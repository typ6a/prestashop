<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:52
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20831352958d2cc781465c3-24390888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5879a5b85c6196727d29161c7b37e3c2370a0d92' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20831352958d2cc781465c3-24390888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc783347b0_33893881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc783347b0_33893881')) {function content_58d2cc783347b0_33893881($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>
