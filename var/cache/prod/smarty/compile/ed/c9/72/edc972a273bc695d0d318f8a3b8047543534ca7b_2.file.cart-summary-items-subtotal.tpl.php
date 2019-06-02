<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:25:47
  from 'C:\wamp64\www\prestashop_1.7.5.1\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf333abd779c4_69812487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc972a273bc695d0d318f8a3b8047543534ca7b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_1.7.5.1\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf333abd779c4_69812487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11518658145cf333abd71365_78657824', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_11518658145cf333abd71365_78657824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_11518658145cf333abd71365_78657824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
