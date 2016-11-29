<?php
/* Smarty version 3.1.30, created on 2016-11-25 11:40:50
  from "D:\myshop.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5837f912764171_23950350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a810c32a1844ed7643d146c3029b1aee8ee1e4b' => 
    array (
      0 => 'D:\\myshop.local\\views\\default\\header.tpl',
      1 => 1480063243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5837f912764171_23950350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
</head>
<body>

<div id="header">
    <h1>myshop - интернет магазин</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn">
<?php }
}
