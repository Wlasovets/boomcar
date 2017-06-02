<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Dane rejestracyjne {$arUser['email']}</h4>
                                <div id="registerBox" class="aa-login-form">
                                    <label for="">Name</label>
                                    <input id="newName" name="newName" type="text" placeholder="New name" value="{$arUser['name']}">
                                    <label for="">Phone</label>
                                    <input id="newPhone" name="newPhone" type="text" placeholder="New phone" value="{$arUser['phone']}">
                                    <label for="">Address</label>
                                    <textarea id="newAddress" name="newAddress" placeholder="New address">{$arUser['address']}</textarea>
                                    <label for="">New password</label>
                                    <input id="newPwd1" name="newPwd1" type="password" placeholder="New password">
                                    <label for="">Repeat new password</label>
                                    <input id="newPwd2" name="newPwd2" type="password" placeholder="New password">
                                    <label for="">Old password</label>
                                    <input id="curPwd" name="curPwd" type="password" placeholder="Old assword">
                                    <button type="submit" class="aa-browse-btn" onclick="updateUserData();">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aa-myaccount-login">
                                <h4>Orders</h4>
                                <div class="aa-login-form">

                                    {if ! $rsUserOrders}
                                        No orders
                                    {else}

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Status</th>
                                            <th>Pay date</th>
                                            <th>Information</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {foreach $rsUserOrders as $item name=orders}

                                        <tr>
                                            <td width="20%"><a href="#" onclick="showProducts('{$item['id']}'); return false;" style="color: #970001;">Order of {$item['date_created']}</a></td>
                                            <td>{$item['status']}</td>
                                            <td>{$item['date_payment']}&nbsp;</td>
                                            <td>{$item['comment']}</td>
                                        </tr>

                                            <tr style="display: none" id="purchasesForOrderId_{$item['id']}">
                                                <td colspan="4">
                                                    {if($item['children'])}
                                                        <table class="table" width="100%">
                                                            <tr>
                                                                <th>Название</th>
                                                                <th>Цена</th>
                                                                <th>Количество</th>
                                                            </tr>

                                                            {foreach $item['children'] as $itemChild name=products}
                                                                <tr>
                                                                    <td><a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
                                                                    <td>{$itemChild['price']}</td>
                                                                    <td>{$itemChild['amount']}</td>
                                                                </tr>
                                                            {/foreach}

                                                        </table>
                                                    {/if}
                                                </td>
                                            </tr>

                                        {/foreach}

                                        </tbody>
                                    </table>

                                    {/if}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
