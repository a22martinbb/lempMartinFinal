<?php
/* Smarty version 3.1.47, created on 2023-03-08 10:01:23
  from '/app/prestashop/themes/classic/templates/customer/discount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64085cf36665d1_08179967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2413442d86f5ef05d1d605e7a7e397a229162f3' => 
    array (
      0 => '/app/prestashop/themes/classic/templates/customer/discount.tpl',
      1 => 1678269606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64085cf36665d1_08179967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101418536264085cf365b441_94048969', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87299488564085cf365c085_85011559', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_101418536264085cf365b441_94048969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_101418536264085cf365b441_94048969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_87299488564085cf365c085_85011559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_87299488564085cf365c085_85011559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['cart_rules']->value) {?>
    <table class="table table-striped table-bordered hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cumulative','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_rules']->value, 'cart_rule');
$_smarty_tpl->tpl_vars['cart_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['code'], ENT_QUOTES, 'UTF-8');?>
</th>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['quantity_for_user'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_minimal'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_cumulable'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_date'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div class="cart-rules hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_rules']->value, 'cart_rule');
$_smarty_tpl->tpl_vars['cart_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->do_else = false;
?>
        <div class="cart-rule">
          <ul>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['code'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['name'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['quantity_for_user'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['value'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_minimal'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cumulative','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_cumulable'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_date'], ENT_QUOTES, 'UTF-8');?>

            </li>
          </ul>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }
}
}
/* {/block 'page_content'} */
}
