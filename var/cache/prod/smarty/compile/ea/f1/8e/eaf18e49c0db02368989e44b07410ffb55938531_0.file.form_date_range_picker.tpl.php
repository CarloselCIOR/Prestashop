<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:27:58
  from 'C:\wamp64\www\prestashop_1.7.5.1\admin469ssd775\themes\default\template\form_date_range_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf3342e8f11e9_81380346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf18e49c0db02368989e44b07410ffb55938531' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_1.7.5.1\\admin469ssd775\\themes\\default\\template\\form_date_range_picker.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf3342e8f11e9_81380346 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="calendar" class="panel">
	<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value ));?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
		<div class="row">
			<div class="col-lg-6">
				<div class="btn-group">
					<button type="submit" name="submitDateDay" class="btn btn-default submitDateDay"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
</button>
					<button type="submit" name="submitDateMonth" class="btn btn-default submitDateMonth"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
</button>
					<button type="submit" name="submitDateYear" class="btn btn-default submitDateYear"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
</button>
					<button type="submit" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1</button>
					<button type="submit" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1</button>
					<button type="submit" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev"><?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1</button>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-xs-6">
								<div class="input-group">
									<label class="input-group-addon"><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['From'])) {
echo $_smarty_tpl->tpl_vars['translations']->value['From'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:','d'=>'Admin.Global'),$_smarty_tpl ) );
}?></label>
									<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['datepickerFrom']->value ));?>
" class="datepicker  form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="input-group">
									<label class="input-group-addon"><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['To'])) {
echo $_smarty_tpl->tpl_vars['translations']->value['To'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:','d'=>'Admin.Global'),$_smarty_tpl ) );
}?></label>
									<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['datepickerTo']->value ));?>
" class="datepicker  form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		if ($("form#calendar_form .datepicker").length > 0)
			$("form#calendar_form .datepicker").datepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd'
			});
	});
<?php echo '</script'; ?>
>
<?php }
}
