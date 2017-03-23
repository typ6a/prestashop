<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:08:28
         compiled from "/home/vagrant/Code/prestashop/modules/oneandonehosting/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68401711358d303ec9b2245-23585494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186063818eca1e4b4b31608b93e9992e19a8e9b3' => 
    array (
      0 => '/home/vagrant/Code/prestashop/modules/oneandonehosting/views/templates/admin/configure.tpl',
      1 => 1490225255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68401711358d303ec9b2245-23585494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'screenshot' => 0,
    'landing_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d303ecbe3479_56721548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d303ecbe3479_56721548')) {function content_58d303ecbe3479_56721548($_smarty_tpl) {?>

<div class="panel">
	<div class="row moduleconfig-header">
		<div class="col-xs-5 text-right">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/oneandone.png" />
		</div>
		<div class="col-xs-7 text-left">
			<br /><br /><h4><?php echo smartyTranslate(array('s'=>'PrestaShop Official hosting partner','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</h4>
		</div>
	</div>

	<hr />

	<div class="moduleconfig-content">
		<div class="row">
			<div class="col-xs-7 text-left">
				<p>
					<h4><strong><?php echo smartyTranslate(array('s'=>'To install PrestaShop click on "Create an account on 1&1", choose Linux Unlimited , Unlimited Plus or Unlimited Pro. Then go on the 1&1 App Center, select "Click & Build" and look for PrestaShop','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</strong></h4>
					<ul class="ul-spaced">
						<li><?php echo smartyTranslate(array('s'=>'1&1 Expert App Support available 24 hours a day, 7 days a week – with advice and practical help specific to the application you’re using','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Maximum availability thanks to the geo-redundant hosting of your website in two geographically separate data centres','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'1&1 SiteLock included, keeping your website virus-free','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Guaranteed performance from 2 GB RAM (with the 1&1 Unlimited Plus package)','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Domain included free with select packages (.co.uk, .com, .net, .org, .me.uk or .org.uk)','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Unlimited Webspace','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Unlimited Websites','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</li>
					</ul>
				</p>
			</div>
			<div class="col-xs-5 text-right">
			<img class="img-responsive" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.png" />
			</div>
		</div>
				<br />
				<p class="text-center">
					<strong>
						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['landing_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_blank" class="btn btn-primary" id="create-account-btn"><?php echo smartyTranslate(array('s'=>'Create an account on 1&1','mod'=>'oneandonehosting'),$_smarty_tpl);?>
</a>
					</strong>
				</p>
			</div>
	</div>
</div>
<?php }} ?>
