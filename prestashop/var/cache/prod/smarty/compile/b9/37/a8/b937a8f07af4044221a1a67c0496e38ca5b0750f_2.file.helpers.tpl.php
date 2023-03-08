<?php
/* Smarty version 3.1.47, created on 2023-03-08 10:01:23
  from '/app/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64085cf36ee244_50034755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b937a8f07af4044221a1a67c0496e38ca5b0750f' => 
    array (
      0 => '/app/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1678269606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64085cf36ee244_50034755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/prestashop/var/cache/prod/smarty/compile/b9/37/a8/b937a8f07af4044221a1a67c0496e38ca5b0750f_2.file.helpers.tpl.php',
    'uid' => 'b937a8f07af4044221a1a67c0496e38ca5b0750f',
    'call_name' => 'smarty_template_function_renderLogo_124848734164085cf36e72e0_07315003',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_124848734164085cf36e72e0_07315003 */
if (!function_exists('smarty_template_function_renderLogo_124848734164085cf36e72e0_07315003')) {
function smarty_template_function_renderLogo_124848734164085cf36e72e0_07315003(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_124848734164085cf36e72e0_07315003 */
}
