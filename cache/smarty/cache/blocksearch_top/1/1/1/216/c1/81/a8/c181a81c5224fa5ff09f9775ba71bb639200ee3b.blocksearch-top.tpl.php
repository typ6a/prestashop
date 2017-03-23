<?php /*%%SmartyHeaderCode:191372666758d2da43bb16e2-24251994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c181a81c5224fa5ff09f9775ba71bb639200ee3b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191372666758d2da43bb16e2-24251994',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2da4420f252_59422302',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2da4420f252_59422302')) {function content_58d2da4420f252_59422302($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//prestashop.app/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
