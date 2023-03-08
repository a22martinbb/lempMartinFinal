<?php
/* Smarty version 3.1.47, created on 2023-03-08 10:01:24
  from '/app/prestashop/admin/themes/default/template/content-legacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64085cf43130b1_68014274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d349c8805a7294d4f5dd8351e0b15191639fcd' => 
    array (
      0 => '/app/prestashop/admin/themes/default/template/content-legacy.tpl',
      1 => 1678269606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64085cf43130b1_68014274 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
