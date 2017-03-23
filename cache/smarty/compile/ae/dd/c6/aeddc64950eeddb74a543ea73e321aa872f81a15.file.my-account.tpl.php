<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:39
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100790545658d2cc6b639436-59786000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeddc64950eeddb74a543ea73e321aa872f81a15' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100790545658d2cc6b639436-59786000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc6b75f885_84020172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc6b75f885_84020172')) {function content_58d2cc6b75f885_84020172($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
