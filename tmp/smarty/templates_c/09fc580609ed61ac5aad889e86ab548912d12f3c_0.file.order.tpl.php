<?php
/* Smarty version 3.1.30, created on 2017-04-17 16:52:44
  from "D:\xampp\htdocs\boomcar.local\views\boomcar\order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f4d6bc1ab3f2_83986399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09fc580609ed61ac5aad889e86ab548912d12f3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\order.tpl',
      1 => 1492440745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f4d6bc1ab3f2_83986399 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">
                    <form id="frmOrder" action="/cart/order/" method="POST">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">

                                        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>

                                        <?php $_smarty_tpl->_assignInScope('buttonClass', '');
?>

                                        <!-- Shipping Address -->
                                        <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Shippping Address
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input id="name" name="name" type="text" placeholder="Name*" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input id="phone" name="phone" type="tel" placeholder="Phone*" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea id="address" name="address" cols="8" rows="3" placeholder="Address*"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea id="specnotes" name="specnotes" cols="8" rows="3" placeholder="Special Notes"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } else { ?>

                                        <!-- Shipping Address -->
                                        <div class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Shippping Address
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" id="name" name="name" value="" placeholder="Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="tel" id="phone" name="phone" value="" placeholder="Phone*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea id="address" name="address" value="" cols="8" rows="3" placeholder="Address*"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea id="specnotes" name="specnotes" value="" cols="8" rows="3" placeholder="Special Notes"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Login section -->
                                        <div id="loginBox" class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Login
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <input type="text"id="loginEmail" name="loginEmail" placeholder="Login or email">
                                                    <input type="password" id="loginPwd" name="loginPwd" placeholder="Password">
                                                    <input type="button" class="aa-browse-btn" value="Login" onclick="login('loginEmail', 'loginPwd');">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Registration section -->
                                        <div id="registerBox" class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Or registrate
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <input type="text" id="email" name="email" value="" placeholder="Login or email">
                                                    <input type="password" id="pwd1" name="pwd1" value="" placeholder="Password">
                                                    <input type="password" id="pwd2" name="pwd2" value="" placeholder="Repeat password">
                                                    <input type="button" class="aa-browse-btn" value="Registrate" onclick="registerNewUser();">
                                                </div>
                                            </div>
                                        </div>

                                        <?php $_smarty_tpl->_assignInScope('buttonClass', "style='display: none'");
?>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkout-right">
                                    <h4>Order Summary</h4>
                                    <div class="aa-order-summary-area">
                                        <table class="table table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                                <tr>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                                        <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                            <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
" />
                                                            <strong> x  <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                            <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
" />
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <td><?php echo $_smarty_tpl->tpl_vars['totalCost']->value;?>
</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h4>Payment Method</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                                        <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">
                                        <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 type="button" id="btnSaveOrder" value="Place Order" class="aa-browse-btn" onclick="saveOrder();">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
<?php }
}
