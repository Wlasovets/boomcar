<?php
/* Smarty version 3.1.30, created on 2016-12-15 08:07:16
  from "D:\xampp\htdocs\boomcar.local\views\boomcar\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58524124487ab1_42020156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c88f3adc4624490d78de23f4f6ac035506df76' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\cart.tpl',
      1 => 1481785629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58524124487ab1_42020156 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Cart view section -->
<section id="cart-view">
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
                                    <tr>
                                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                                        <td>$250</td>
                                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                                        <td>$250</td>
                                    </tr>
                                    <tr>
                                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                                        <td>$150</td>
                                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                                        <td>$150</td>
                                    </tr>
                                    <tr>
                                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                                        <td>$50</td>
                                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                                        <td>$50</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$450</td>
                                </tr>
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
