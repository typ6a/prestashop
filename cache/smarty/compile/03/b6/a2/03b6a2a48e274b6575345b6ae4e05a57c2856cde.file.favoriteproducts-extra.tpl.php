<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:11:51
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125177082658d2cc7737de31-38650393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b6a2a48e274b6575345b6ae4e05a57c2856cde' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125177082658d2cc7737de31-38650393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc7756c166_15230846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc7756c166_15230846')) {function content_58d2cc7756c166_15230846($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>
