<?php
/* Smarty version 3.1.30, created on 2016-11-29 15:55:22
  from "D:\xampp\htdocs\boomcar.local\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d96da487ab5_85976655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccbd2c3fdd6ef76d10be52d07d3afa1b6aa27f5a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\default\\leftcolumn.tpl',
      1 => 1480430820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583d96da487ab5_85976655 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                    --<a href="#"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

</div><?php }
}
