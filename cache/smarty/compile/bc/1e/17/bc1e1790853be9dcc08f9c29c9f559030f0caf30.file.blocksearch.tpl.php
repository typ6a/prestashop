<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:30
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56627070958d2cc62bfc9a4-61629817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc1e1790853be9dcc08f9c29c9f559030f0caf30' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56627070958d2cc62bfc9a4-61629817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc62dcba38_56465392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc62dcba38_56465392')) {function content_58d2cc62dcba38_56465392($_smarty_tpl) {?>

<!-- Block search module -->
<div id="search_block_left" class="block exclusive">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</p>
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
    	<label for="search_query_block"><?php echo smartyTranslate(array('s'=>'Search products:','mod'=>'blocksearch'),$_smarty_tpl);?>
</label>
		<p class="block_content clearfix">
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control grey" type="text" id="search_query_block" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="icon-search"></i></span></button>
		</p>
	</form>
</div>
<!-- /Block search module --><?php }} ?>
