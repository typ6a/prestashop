<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:34
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24857123858d2cc66995314-17207502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e3002eacbf1b290786fe10229e48ce2029aaa04' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24857123858d2cc66995314-17207502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc66c96dc4_68491059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc66c96dc4_68491059')) {function content_58d2cc66c96dc4_68491059($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
