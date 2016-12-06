<?php
/* Smarty version 3.1.30, created on 2016-12-06 09:30:37
  from "D:\xampp\htdocs\boomcar.local\views\boomcar\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5846772d44aa27_38740229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408bd82d7aa829f8c079b8bf2712672910f8802f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\product.tpl',
      1 => 1481013003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5846772d44aa27_38740229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">

                                                <a href="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['original_image'];?>
" class="simpleLens-lens-image">
                                                    <img width="100%" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['original_image'];?>
">
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
                                    <div class="aa-price-block">
                                        <span class="aa-product-view-price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 zł</span>
                                    </div>
                                    <div class="aa-prod-quantity">
                                        <p class="aa-prod-category">
                                            Kategorie: <a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</a>
                                        </p>
                                    </div>
                                    <p>Stan:

                                        <?php if ($_smarty_tpl->tpl_vars['rsProduct']->value['state'] == 0) {?>
                                            Używane
                                        <?php } else { ?>
                                            Nowe
                                        <?php }?>
                                        
                                        <br>Producent części: <?php echo $_smarty_tpl->tpl_vars['rsProducer']->value['name'];?>

                                        <br>Marka samochodu: <?php echo $_smarty_tpl->tpl_vars['rsCarModel']->value['name'];?>

                                    </p>
                                    <div class="aa-prod-quantity">
                                        <input type="number" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['quantity'];?>
" style="width: 50px; padding: 5px">
                                        <p class="aa-prod-category">z <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['quantity'];?>
 sztuk</p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a class="aa-add-to-cart-btn" href="#">do koszyka</a>
                                        <a class="aa-add-to-cart-btn" href="#">kup teraz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><h4>Opis</h4></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->
<?php }
}
