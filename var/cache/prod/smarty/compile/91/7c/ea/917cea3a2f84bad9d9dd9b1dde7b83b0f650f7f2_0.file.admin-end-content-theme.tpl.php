<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:22:39
  from 'C:\wamp64\www\prestashop_1.7.5.1\modules\ps_mbo\views\templates\admin\admin-end-content-theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf332efb8b138_70804270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917cea3a2f84bad9d9dd9b1dde7b83b0f650f7f2' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_1.7.5.1\\modules\\ps_mbo\\views\\templates\\admin\\admin-end-content-theme.tpl',
      1 => 1554248315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf332efb8b138_70804270 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="panel clearfix" id="prestastore-content"></div>
<?php echo '<script'; ?>
 type="text/javascript">
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
',
		async: true,
		cache: false,
		dataType : "html",
		data: {
			ajax: '1',
			action:'getMboAddonsThemes',
		},
		success: function(htmlData) {
			$("#prestastore-content").html("<h3><i class='icon-picture-o'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live from PrestaShop Addons!'),$_smarty_tpl ) );?>
</h3>"+htmlData);
		}
	});

	// These variable will move the form to another location
	var formToMove = "appearance";
	var formDestination = "js_theme_form_container";
<?php echo '</script'; ?>
><?php }
}
