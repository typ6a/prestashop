<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 17:05:53
         compiled from "/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/mymodule_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164812189658d2e731b9a0b3-55241563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc96a5c3ada18649072ed5161168f67b29db16e' => 
    array (
      0 => '/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/mymodule_page.tpl',
      1 => 1490217864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164812189658d2e731b9a0b3-55241563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2e731df3377_85696958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2e731df3377_85696958')) {function content_58d2e731df3377_85696958($_smarty_tpl) {?>
<link href="../modules/onehopsmsservice/views/css/onehopsmsservice.css" rel="stylesheet" />
<?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value!='') {?>
	<p style="display: none;" id="customBreadcrumbs"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }?>


	<script type="text/javascript">
	  	$(".menu li").removeClass("active");
        $("#maintab-onehopsmsservice").addClass("active");
        var custoBreadcrumbs = $("#customBreadcrumbs").text();
		$(".page-title").text('');
		$(".page-title").text(custoBreadcrumbs);
		$(".breadcrumb li:last-child").text('');
		$(".breadcrumb li:last-child").html(custoBreadcrumbs);		
	</script>


<?php }} ?>
