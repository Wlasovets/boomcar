<?php
/* Smarty version 3.1.30, created on 2016-11-29 11:46:13
  from "C:\xampp\htdocs\boomcar.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d5c7558b6a9_36718227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd009cb756cc31569493248596c09ea7b58e62646' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\default\\header.tpl',
      1 => 1480416093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_583d5c7558b6a9_36718227 (Smarty_Internal_Template $_smarty_tpl) {
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
