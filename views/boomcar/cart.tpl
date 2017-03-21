<!-- Cart view section -->
<section id="cart-view" style="min-height: calc(100vh - 320px)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="/cart/order/" method="POST">
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

                                    {foreach $rsProducts as $item}

                                    <tr>
                                        <td>
                                            <a id="removeCart_{$item['id']}" onclick="removeFromCart({$item['id']}); return false;" class="aa-cart-title" href="#">z koszyka</a>
                                            <a id="addCart_{$item['id']}" onclick="addToCart({$item['id']}); return false;" class="aa-cart-title" style="display: none;" href="#">do koszyka</a>
                                        </td>
                                        <td><a id="productName_{$item['id']}" class="aa-cart-title" href="/product/{$item['id']}/" deleted="false">{$item['name']}</a></td>
                                        <td><span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span> zł</td>
                                        <td><input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" class="aa-cart-quantity" type="number" value="{$item['customQuantity']}" min="1" max="{$item['quantity']}" onchange="conversionPrice({$item['id']});"></td>
                                        <td><span id="itemRealPrice_{$item['id']}" value="{$item['realPrice']}">{$item['realPrice']}</span> zł</td>
                                    </tr>

                                    {/foreach}

                                    </tbody>
                                </table>
                            </div>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Total</th>
                                    <td><span id="totalCostId" value="{$totalCost}">{$totalCost}</span> zł</td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="submit" class="aa-cart-view-btn" value="złożyć zamówienie">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
