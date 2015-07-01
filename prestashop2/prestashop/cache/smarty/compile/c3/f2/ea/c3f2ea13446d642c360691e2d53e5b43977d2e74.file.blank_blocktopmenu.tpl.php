<?php /* Smarty version Smarty-3.1.19, created on 2015-06-29 11:42:37
         compiled from "C:\wamp\www\prestashop2\prestashop\modules\blank_blocktopmenu\blank_blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162575590e1d522fd49-50150284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3f2ea13446d642c360691e2d53e5b43977d2e74' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop2\\prestashop\\modules\\blank_blocktopmenu\\blank_blocktopmenu.tpl',
      1 => 1435558316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162575590e1d522fd49-50150284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5590e1d52903c6_02683223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590e1d52903c6_02683223')) {function content_5590e1d52903c6_02683223($_smarty_tpl) {?>       
       <?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	  
				<!-- Menu -->
			
        <div class="g960">
          <ul class="sf-menu">
            <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

            </ul>
         </div>
        
        <?php }?>	<?php }} ?>
