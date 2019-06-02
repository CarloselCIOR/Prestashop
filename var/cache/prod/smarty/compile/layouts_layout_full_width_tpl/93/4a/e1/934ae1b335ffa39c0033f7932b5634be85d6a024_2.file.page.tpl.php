<?php
/* Smarty version 3.1.33, created on 2019-06-01 12:24:01
  from 'C:\wamp64\www\prestashop_1.7.5.1\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf2b4b1ac5ee6_18680228',
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
function content_5cf2b4b1ac5ee6_18680228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13532421785cf2b4b1a99f97_54221939', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19317340635cf2b4b1aa1760_46482717 extends Smarty_Internal_Block
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
class Block_7272580675cf2b4b1a9cd03_69842103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19317340635cf2b4b1aa1760_46482717', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_723989225cf2b4b1ab2514_69912707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12303389085cf2b4b1ab6513_33631552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16812995245cf2b4b1aaf3f0_24496985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_723989225cf2b4b1ab2514_69912707', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12303389085cf2b4b1ab6513_33631552', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14369912095cf2b4b1abf260_55457408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10735617175cf2b4b1abc695_96027583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14369912095cf2b4b1abf260_55457408', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13532421785cf2b4b1a99f97_54221939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13532421785cf2b4b1a99f97_54221939',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7272580675cf2b4b1a9cd03_69842103',
  ),
  'page_title' => 
  array (
    0 => 'Block_19317340635cf2b4b1aa1760_46482717',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16812995245cf2b4b1aaf3f0_24496985',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_723989225cf2b4b1ab2514_69912707',
  ),
  'page_content' => 
  array (
    0 => 'Block_12303389085cf2b4b1ab6513_33631552',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10735617175cf2b4b1abc695_96027583',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14369912095cf2b4b1abf260_55457408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7272580675cf2b4b1a9cd03_69842103', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16812995245cf2b4b1aaf3f0_24496985', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10735617175cf2b4b1abc695_96027583', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
