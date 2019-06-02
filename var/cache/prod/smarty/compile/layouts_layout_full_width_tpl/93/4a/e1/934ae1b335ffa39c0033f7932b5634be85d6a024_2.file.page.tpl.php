<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:22:20
  from 'C:\wamp64\www\prestashop_1.7.5.1\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf332dcbe7945_76196771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '934ae1b335ffa39c0033f7932b5634be85d6a024' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_1.7.5.1\\themes\\classic\\templates\\page.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf332dcbe7945_76196771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19892290575cf332dcbd1fa3_46976887', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_603107225cf332dcbd5007_35878865 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_11959943745cf332dcbd37c3_91673446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_603107225cf332dcbd5007_35878865', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19172884995cf332dcbdb281_25490469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9885886505cf332dcbdd2e4_42721771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10064881385cf332dcbd9ba3_42091823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19172884995cf332dcbdb281_25490469', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9885886505cf332dcbdd2e4_42721771', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6762659775cf332dcbe3493_02251713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2748055725cf332dcbe1537_51257922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6762659775cf332dcbe3493_02251713', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19892290575cf332dcbd1fa3_46976887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19892290575cf332dcbd1fa3_46976887',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11959943745cf332dcbd37c3_91673446',
  ),
  'page_title' => 
  array (
    0 => 'Block_603107225cf332dcbd5007_35878865',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10064881385cf332dcbd9ba3_42091823',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19172884995cf332dcbdb281_25490469',
  ),
  'page_content' => 
  array (
    0 => 'Block_9885886505cf332dcbdd2e4_42721771',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2748055725cf332dcbe1537_51257922',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6762659775cf332dcbe3493_02251713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11959943745cf332dcbd37c3_91673446', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10064881385cf332dcbd9ba3_42091823', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2748055725cf332dcbe1537_51257922', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
