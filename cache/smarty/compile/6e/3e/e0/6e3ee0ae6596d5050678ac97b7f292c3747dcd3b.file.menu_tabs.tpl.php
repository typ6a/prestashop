<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 17:05:54
         compiled from "/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/menu_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180157902158d2e73229de52-51835273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3ee0ae6596d5050678ac97b7f292c3747dcd3b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/menu_tabs.tpl',
      1 => 1490217864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180157902158d2e73229de52-51835273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SMSMenuLink' => 0,
    'SMSGetTab' => 0,
    'SMSIsAPIKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2e732697279_16427598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2e732697279_16427598')) {function content_58d2e732697279_16427598($_smarty_tpl) {?>
 
 <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smswelcome=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smswelcome') {?> activeSMSmenu <?php }?>">Welcome</a>&nbsp;
<?php if ($_smarty_tpl->tpl_vars['SMSIsAPIKey']->value!='') {?>
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configuration=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='configuration') {?> activeSMSmenu <?php }?>">Configuration</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smscampaign=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smscampaign') {?> activeSMSmenu <?php }?>">Send SMS</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smsrulesets=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smsrulesets') {?> activeSMSmenu <?php }?>">SMS Automation</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smstemplates=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smstemplates') {?> activeSMSmenu <?php }?>">Manage Templates</a><br>
<?php } else { ?>
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configuration=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='configuration') {?> activeSMSmenu <?php }?>">Configuration</a><br>

<?php }?>
<?php }} ?>
