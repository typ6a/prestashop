<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:57
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38416939658d2cc7d673cb9-23130297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16bb6d8016a6922d455966e6956c4f072fe12af7' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38416939658d2cc7d673cb9-23130297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc7d816706_03792891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc7d816706_03792891')) {function content_58d2cc7d816706_03792891($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
