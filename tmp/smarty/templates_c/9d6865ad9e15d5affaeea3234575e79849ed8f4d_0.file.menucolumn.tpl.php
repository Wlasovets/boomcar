<?php
/* Smarty version 3.1.30, created on 2016-12-03 07:34:56
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\menucolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58426790116122_41636430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6865ad9e15d5affaeea3234575e79849ed8f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\menucolumn.tpl',
      1 => 1480746878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58426790116122_41636430 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
    <aside class="aa-sidebar">
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Kategorie</h3>
            <ul class="aa-catg-nav">

                <!-- Categories -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </ul>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Stan</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Nowe</a>
                <a href="#" onclick="selectTag(this)">Używane</a>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Cena (zł)</h3>
            <!-- price range -->
            <div class="aa-sidebar-price-range">
                <form action="">
                    <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>
                    <span id="skip-value-lower" class="example-val">30.00</span>
                    <span id="skip-value-upper" class="example-val">100.00</span>
                    <button class="aa-filter-btn" type="submit">Filter</button>
                </form>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Producent części</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Bosch</a>
                <a href="#" onclick="selectTag(this)">Filtron</a>
                <a href="#" onclick="selectTag(this)">Knecht</a>
                <a href="#" onclick="selectTag(this)">Mann Filter</a>
                <a href="#" onclick="selectTag(this)">Inny</a>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Marka samochodu</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Audi</a>
                <a href="#" onclick="selectTag(this)">Opel</a>
                <a href="#" onclick="selectTag(this)">Seat</a>
                <a href="#" onclick="selectTag(this)">Volkswagen</a>
                <a href="#" onclick="selectTag(this)">Inne marki</a>
            </div>
        </div>
    </aside>
</div><?php }
}
