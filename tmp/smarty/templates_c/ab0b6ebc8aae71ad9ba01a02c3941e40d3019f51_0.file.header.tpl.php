<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:20:27
  from "C:\myshop.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58382c8b1302d8_11140313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0b6ebc8aae71ad9ba01a02c3941e40d3019f51' => 
    array (
      0 => 'C:\\myshop.local\\views\\default\\header.tpl',
      1 => 1480076368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_58382c8b1302d8_11140313 (Smarty_Internal_Template $_smarty_tpl) {
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
