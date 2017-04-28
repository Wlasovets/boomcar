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
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Status</th>
                                            <th>Pay date</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#" style="color: #970001;">Order of 27.04.2017</a></td>
                                            <td>Paid for</td>
                                            <td>28.04.2017</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" style="color: #970001;">Order of 27.04.2017</a></td>
                                            <td>Paid for</td>
                                            <td>28.04.2017</td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" style="color: #970001;">Order of 27.04.2017</a></td>
                                            <td>Paid for</td>
                                            <td>28.04.2017</td>
                                            <td>$350</td>
                                        </tr>
                                        </tbody>
                                    </table>
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
