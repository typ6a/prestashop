<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:12:07
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207850110158d2cc8720fb11-66738694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5208de8be4bc26a29bc72c7e40e35d17ed38ee79' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1482153424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207850110158d2cc8720fb11-66738694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2cc873115a9_56211852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2cc873115a9_56211852')) {function content_58d2cc873115a9_56211852($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/vagrant/Code/prestashop/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
