<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 17:05:54
         compiled from "/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/screen_magic_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32532699358d2e7329e5362-38435418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71043129f044be577aa79eed5e1276df092f8d45' => 
    array (
      0 => '/home/vagrant/Code/prestashop/modules/onehopsmsservice/views/templates/front/screen_magic_details.tpl',
      1 => 1490217864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32532699358d2e7329e5362-38435418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2e732b3f1b8_61911593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2e732b3f1b8_61911593')) {function content_58d2e732b3f1b8_61911593($_smarty_tpl) {?>
<div class="oneHop_wrapper">
<div class="welwrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="acc_banner">
                    <img alt="Welcome to Onehop" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imagepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/acc_banner.png" usemap="#onehopmap" />
                    <map name="onehopmap">
                        <area shape="rect" coords="601,4,771,63" alt="Onehop.co" title="Onehop.co" href="http://www.onehop.co" target="_blank"/>
                    </map>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="custom_container">
                    <div class="onehop_list">
                        <h2>With Onehop on PrestaShop, you can SMS all your:</h2>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <ul>
                                <li>Order Confirmations</li>
                                <li>Shipment Confirmations</li>
                                <li>Delivery Confirmations</li>
                            </ul>
                        </div>
                    
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <ul>
                                <li>Out of Stock Product Alerts</li>
                                <li>Back in Stock Product Alerts</li>
                                <li>Offers & Promotions</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h2 class="acc_title">Get Started with Onehop on PrestaShop</h2>
                    
                    <div class="panel-group" id="accordion">
                        
                        <div class="panel panel-default">
                            <div>
                                <div class="panel-body">
                                    <ul class="acc_1_list">
                                        <li>You will receive an email including an <span class="stronger">API Key</span> within 24 hours of installing <span class="stronger">Onehop SMS Services</span> module.<br/><br/>
                                        </li>
                                        
                                        <li>You will also receive an email with the login credentials for your Onehop account. Login to your Onehop account at <a href="https://www.onehop.co">www.onehop.co</a>. Here you will be able to manage your account details, access your API key, purchase SMS credits and view SMS history.<br/><br/>
                                        </li>
                                        
                                        <li>
                                            In the <span class="stronger">Configuration</span> tab:
                                            <ul>
                                                <li>Copy and paste the <span class="stronger">API Key</span> from the email, in the <span class="stronger">API Key</span> Section</li>
                                                <li>Include the mobile number of the person who will receive the <span class="stronger">Out of Stock Alerts</span> in the <span class="stronger">Admin Mobile Section</span> </li>
                                            </ul> <br>  
                                        </li>
                                        
                                        <li>
                                            After clicking on the <span class="stronger">Save</span> button, the following additional tabs will appear in the Onehop SMS menu:<br/><br/>
                                            <ul>
                                                <li><span class="stronger">Send SMS :</span> You can send a single SMS using the <span class="stronger">Send SMS</span> tab on the menu screen <br/><br/></li>
                                                <li><span class="stronger">Manage Templates :</span> You can add, edit or delete templates with placeholder texts using <span class="stronger">Manage Templates</span> tab <br/><br/></li>
                                                <li><span class="stronger">SMS Automation :</span> Set automated rules for sending SMS with <span class="stronger">SMS Automation</span> tab</li>
                                            </ul>
                                        </li>                                    
                                    </ul>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="onehop_docs">
                    <h2 class="acc_title productdoc_title">Product Documentation</h2>
                    <ul class="download_sec">
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imagepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/pdf_icon.png" /> <a href="http://www.onehop.co/partners/prestashop/Onehop_Configuration_on_Prestashop_Quick_UserGuide.pdf" target="_blank">Onehop for PrestaShop user guide</a> </li> 
                        <li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imagepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/pdf_icon.png" /> <a href="http://api.onehop.co/api-docs/" target="_blank">API documentation for custom development</a></li> 
                    </ul>
                    </div>
                    <h2 class="acc_title support_title">Contact Support</h2>
                    <div class="contact_info">
                        <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imagepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/email_icon.png" />For Sales and Support queries contact us <span class="stronger"><a target="_blank" href="https://addons.prestashop.com/en/contact-us">here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
function toggleInstructions(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i")
        .toggleClass('icon-caret-down icon-caret-right');
}
$('#accordion').on('hidden.bs.collapse', toggleInstructions);
$('#accordion').on('shown.bs.collapse', toggleInstructions);
</script>

<?php }} ?>
