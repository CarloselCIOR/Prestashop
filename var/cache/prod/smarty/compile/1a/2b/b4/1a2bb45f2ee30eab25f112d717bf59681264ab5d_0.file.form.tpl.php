<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:27:33
  from 'C:\wamp64\www\prestashop_1.7.5.1\admin469ssd775\themes\default\template\controllers\employees\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf33415783567_19114701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a2bb45f2ee30eab25f112d717bf59681264ab5d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_1.7.5.1\\admin469ssd775\\themes\\default\\template\\controllers\\employees\\helpers\\form\\form.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf33415783567_19114701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9366285375cf334157111f5_90384729', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18647541555cf33415736548_20480275', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18493881825cf334157736f9_59526371', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_9366285375cf334157111f5_90384729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_9366285375cf334157111f5_90384729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'prestashop_addons') {?>
		<div id="addons-connection-container" class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {
echo intval($_smarty_tpl->tpl_vars['input']->value['col']);
} else { ?>9<?php }?> <?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>col-lg-offset-3<?php }?>">
			<?php if (isset($_smarty_tpl->tpl_vars['logged_on_addons']->value) && $_smarty_tpl->tpl_vars['logged_on_addons']->value) {?>
				<p><i class="icon-user"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are currently connected as %username%','sprintf'=>array('%username%'=>'$username_addons'),'d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</p>
				<a class="btn btn-default" href="#" id="addons_logout_button">
					<i class="icon-signout"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out from PrestaShop Addons','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>

				</a>
			<?php } else { ?>
				<a class="btn btn-default" data-toggle="modal" href="#" data-target="#modal_addons_connect">
					<i class="icon-signout"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>

				</a>
			<?php }?>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
/* {block "input"} */
class Block_18647541555cf33415736548_20480275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_18647541555cf33415736548_20480275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'default_tab') {?>
	<select id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="chosen fixed-width-xxl">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
			<?php if (isset($_smarty_tpl->tpl_vars['option']->value['children']) && count($_smarty_tpl->tpl_vars['option']->value['children'])) {?>
				<optgroup label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'],'html','UTF-8' ));?>
"></optgroup>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['children'], 'children');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['children']->value['id_tab'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['children']->value['id_tab']) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value['name'],'html','UTF-8' ));?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_tab'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value['id_tab']) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'],'html','UTF-8' ));?>
</option>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block 'script'} */
class Block_18493881825cf334157736f9_59526371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18493881825cf334157736f9_59526371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function(){
		$('select[name=id_profile]').change(function(){
			ifSuperAdmin($(this));

			$.ajax({
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'));?>
",
				cache: false,
				data : {
					ajax : '1',
					action : 'getTabByIdProfile',
					id_profile : $(this).val()
				},
				dataType : 'json',
				success : function(resp,textStatus,jqXHR)
				{
					if (resp != false)
					{
						$('select[name=default_tab]').html('');
						$.each(resp, function(key, r){
							if (r.id_parent == 0)
							{
								$('select[name=default_tab]').append('<optgroup label="'+r.name+'"></optgroup>');
								$.each(r.children, function(k, value){
									$('select[name=default_tab]').append('<option value="'+r.id_tab+'">'+value.name+'</option>')
								});
							}
						});
					}
				}
			});
		});
		ifSuperAdmin($('select[name=id_profile]'));
	});

	function ifSuperAdmin(el)
	{
		var val = $(el).val();

		if (!val || val == <?php echo @constant('_PS_ADMIN_PROFILE_');?>
)
		{
			$('.assoShop input[type=checkbox]').attr('disabled', true);
			$('.assoShop input[type=checkbox]').attr('checked', true);
		}
		else
			$('.assoShop input[type=checkbox]').attr('disabled', false);
	}
<?php
}
}
/* {/block 'script'} */
}
