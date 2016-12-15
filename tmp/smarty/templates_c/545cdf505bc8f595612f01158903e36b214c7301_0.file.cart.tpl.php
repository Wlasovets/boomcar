<?php
/* Smarty version 3.1.30, created on 2016-12-15 19:53:22
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5852e6a2638c82_11630446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545cdf505bc8f595612f01158903e36b214c7301' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\cart.tpl',
      1 => 1481827998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5852e6a2638c82_11630446 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Cart view section -->
<section id="cart-view" style="min-height: calc(100vh - 320px)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                                    <tr>
                                        <td>
                                            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" class="aa-cart-title" href="#">z koszyka</a>
                                            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" class="aa-cart-title" style="display: none;" href="#">do koszyka</a>
                                        </td>
                                        <td><a class="aa-cart-title" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                                        <td><span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span> zł</td>
                                        <td><input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="aa-cart-quantity" type="number" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"></td>
                                        <td><span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span> zł</td>
                                    </tr>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Total</th>
                                    <td>$450</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
<?php }
}
