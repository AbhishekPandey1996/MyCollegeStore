<?php /* Smarty version Smarty-3.1.19, created on 2015-06-29 11:42:37
         compiled from "C:\wamp\www\prestashop2\prestashop\modules\blank_contactinfo\blank_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20865590e1d52d8333-28858821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5a0104f8e3273b66d48d6902f3f95648e3d78de' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop2\\prestashop\\modules\\blank_contactinfo\\blank_contactinfo.tpl',
      1 => 1435558316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20865590e1d52d8333-28858821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_name' => 0,
    'shop_name' => 0,
    'info_address' => 0,
    'info_phone' => 0,
    'info_email' => 0,
    'info_hours' => 0,
    'info_facebook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5590e1d5398b35_83774726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590e1d5398b35_83774726')) {function content_5590e1d5398b35_83774726($_smarty_tpl) {?>﻿<div id="contact">
<div class="kontakt"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockcartview'),$_smarty_tpl);?>
</div>
		<div class="c_column ">
		<?php if ($_smarty_tpl->tpl_vars['info_name']->value) {?>
   <p class="name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['info_address']->value) {?>
   <p class="address"><?php echo $_smarty_tpl->tpl_vars['info_address']->value;?>
</p><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['info_phone']->value) {?>
   <p class="phone"><?php echo smartyTranslate(array('s'=>"Telephone:",'module'=>"blank_contactinfo"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['info_phone']->value;?>
</p><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['info_email']->value) {?>
   <p class="email"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['info_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['info_email']->value;?>
</a></p><?php }?>
   </div>
   <div class="c_column">
   
   <?php if ($_smarty_tpl->tpl_vars['info_hours']->value) {?>
   <p class="hours"><b><?php echo smartyTranslate(array('s'=>"Customer service:",'module'=>"blank_contactinfo"),$_smarty_tpl);?>
 <br /></b><?php echo $_smarty_tpl->tpl_vars['info_hours']->value;?>
</p><?php }?>
   
   <?php if ($_smarty_tpl->tpl_vars['info_facebook']->value!='') {?>
  
   <div class="facebook">
   <div class="addthis_toolbox addthis_default_style">
   <a href="<?php echo $_smarty_tpl->tpl_vars['info_facebook']->value;?>
" target="_blank" id="facebook"><span>Facebook</span></a>
   <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode($_smarty_tpl->tpl_vars['info_facebook']->value);?>
&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>

</div>
   </div>
    <?php }?>
  </div>
   </div><?php }} ?>
