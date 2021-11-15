<?php
/* Smarty version 3.1.39, created on 2021-11-15 11:11:20
  from 'C:\wamp64\www\prestashop\modules\ps_metrics\views\templates\admin\metricsSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619232488d3d51_78390461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8987debb179fb324257e477517d21e195f05f6ee' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_metrics\\views\\templates\\admin\\metricsSettings.tpl',
      1 => 1636968054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619232488d3d51_78390461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://js.chargebee.com/v2/chargebee.js" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="settingsApp"></div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://js.chargebee.com/v2/chargebee.js"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
