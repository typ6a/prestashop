<?php /* Smarty version Smarty-3.1.19, created on 2017-03-23 05:31:23
         compiled from "/home/vagrant/Code/prestashop/admin575zomuuf/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97537055558d395eb947073-48242757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6144b9b1db127f9823ba6a8241d699fbc018f861' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin575zomuuf/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1482153420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97537055558d395eb947073-48242757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d395eba043d2_44261497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d395eba043d2_44261497')) {function content_58d395eba043d2_44261497($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>confirm_link('', '<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
', '<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
', '<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
')<?php } else { ?>document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php }?>">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
