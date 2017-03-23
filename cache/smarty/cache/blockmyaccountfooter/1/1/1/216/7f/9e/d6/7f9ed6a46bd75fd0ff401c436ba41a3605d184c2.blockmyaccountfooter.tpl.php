<?php /*%%SmartyHeaderCode:51147509258d2da502d6a73-77917442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9ed6a46bd75fd0ff401c436ba41a3605d184c2' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51147509258d2da502d6a73-77917442',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2da506bb730_40146086',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2da506bb730_40146086')) {function content_58d2da506bb730_40146086($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://prestashop.app/index.php?controller=my-account" title="Управление моей учетной записью" rel="nofollow">Моя учетная запись</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://prestashop.app/index.php?controller=history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://prestashop.app/index.php?controller=order-slip" title="Мои платёжные квитанции" rel="nofollow">Мои платёжные квитанции</a></li>
			<li><a href="http://prestashop.app/index.php?controller=addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://prestashop.app/index.php?controller=identity" title="Управление моими персональными данными" rel="nofollow">Моя личная информация</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
