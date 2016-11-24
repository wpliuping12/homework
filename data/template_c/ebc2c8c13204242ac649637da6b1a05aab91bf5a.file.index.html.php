<?php /* Smarty version Smarty-3.1.16, created on 2016-11-23 21:57:06
         compiled from "template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1692358358714bc7d39-63622418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc2c8c13204242ac649637da6b1a05aab91bf5a' => 
    array (
      0 => 'template\\index.html',
      1 => 1479909421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1692358358714bc7d39-63622418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58358714cbce39_19637605',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358714cbce39_19637605')) {function content_58358714cbce39_19637605($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="index.php?controller=index&method=nameadd">
    xingming:<input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="submit">
</form>
</body>
</html><?php }} ?>
