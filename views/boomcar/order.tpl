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
                                                                <input type="text" placeholder="Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="tel" placeholder="Phone*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea cols="8" rows="3" placeholder="Address*"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea cols="8" rows="3" placeholder="Special Notes"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Login section -->
                                        <div class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Login
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <input type="text" placeholder="Login or email">
                                                    <input type="password" placeholder="Password">
                                                    <button type="submit" class="aa-browse-btn">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Registration section -->
                                        <div class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Or registrate
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <input type="text" placeholder="Login or email">
                                                    <input type="password" placeholder="Password">
                                                    <input type="password" placeholder="Repeat password">
                                                    <button type="submit" class="aa-browse-btn">Registrate</button>
                                                </div>
                                            </div>
                                        </div>
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

                                            {foreach $rsProducts as $item name=products}
                                                <tr>
                                                    <td>
                                                        <a href="/product/{$item['id']}/">{$item['name']}</a>
                                                        <span id="itemCnt_{$item['id']}">
                                                            <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}" />
                                                            <strong> x  {$item['cnt']}</strong>
                                                        </span>
                                                    </td>

                                                    <td>$150</td>
                                                </tr>
                                            {/foreach}

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <td>$785</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h4>Payment Method</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                                        <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">
                                        <input type="submit" value="Place Order" class="aa-browse-btn">
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
