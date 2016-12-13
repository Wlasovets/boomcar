<?php
/* Smarty version 3.1.30, created on 2016-12-12 16:19:32
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ec004b69042_39010424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef4113c029de9fd95f13077638895cec6049d39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\index.tpl',
      1 => 1481555945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menucolumn.tpl' => 1,
  ),
),false)) {
function content_584ec004b69042_39010424 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">

                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg list">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="product img">
                                    </a>
                                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false" class="aa-add-card-btn" href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title">
                                            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                        </h4>
                                        <span class="aa-product-price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 zł</span>
                                        <p class="aa-product-descrip">

                                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['state'] = 0;
$_smarty_tpl->_assignInScope('item', $_tmp_array);
if (0) {?>
                                                Stan: Używane <br>
                                            <?php } else { ?>
                                                Stan: Nowe <br>
                                            <?php }?>

                                            Kategorie: <?php echo $_smarty_tpl->tpl_vars['item']->value['categoryName'];?>
 <br>
                                            Producent części: <?php echo $_smarty_tpl->tpl_vars['item']->value['producerName'];?>
 <br>
                                            Marka samochodu: <?php echo $_smarty_tpl->tpl_vars['item']->value['carModelName'];?>

                                        </p>
                                    </figcaption>
                                </figure>
                            </li>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        </ul>

                    </div>
                    <div class="aa-product-catg-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("file:menucolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
    </div>
</section>
<!-- / product category -->
<?php }
}
