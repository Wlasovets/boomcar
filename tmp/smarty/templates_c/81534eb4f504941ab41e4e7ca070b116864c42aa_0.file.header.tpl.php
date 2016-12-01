<?php
/* Smarty version 3.1.30, created on 2016-11-29 15:55:22
  from "D:\xampp\htdocs\boomcar.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d96da40d998_18101138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81534eb4f504941ab41e4e7ca070b116864c42aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\default\\header.tpl',
      1 => 1480430820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_583d96da40d998_18101138 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>boomcar - Części samochodowe</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn">
<?php }
}
