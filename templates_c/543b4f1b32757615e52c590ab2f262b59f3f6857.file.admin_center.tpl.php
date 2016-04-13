<?php /* Smarty version Smarty-3.1.15, created on 2016-04-12 12:52:55
         compiled from "template\admin_center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15785570c90afef3609-96239969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '543b4f1b32757615e52c590ab2f262b59f3f6857' => 
    array (
      0 => 'template\\admin_center.tpl',
      1 => 1460458372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15785570c90afef3609-96239969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_570c90aff18446_58976134',
  'variables' => 
  array (
    'admin_name' => 0,
    'admin_id' => 0,
    'admin_password' => 0,
    'yhq_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570c90aff18446_58976134')) {function content_570c90aff18446_58976134($_smarty_tpl) {?><body>
	管理员用户名：<?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
&nbsp管理员id：&nbsp<?php echo $_smarty_tpl->tpl_vars['admin_id']->value;?>
&nbsp管理员密码：&nbsp<?php echo $_smarty_tpl->tpl_vars['admin_password']->value;?>

	<br>
	<?php echo $_smarty_tpl->tpl_vars['yhq_data']->value[0]['name'];?>

</body><?php }} ?>
