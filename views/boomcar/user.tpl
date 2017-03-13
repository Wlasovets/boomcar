<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Twoje dane rejestracyjne</h4>
                                <div id="registerBox" class="aa-login-form">
                                    <label for="">Login or Email address<span>*</span></label>
                                    <input id="username" name="username" type="text" placeholder="Username">
                                    <label for="">Name<span>*</span></label>
                                    <input id="name" name="name" type="text" placeholder="Name">
                                    <label for="">Phone<span>*</span></label>
                                    <input id="phone" name="phone" type="text" placeholder="Phone">
                                    <label for="">Address<span>*</span></label>
                                    <textarea id="address" name="address" placeholder="Address"></textarea>
                                    <label for="">New password<span>*</span></label>
                                    <input id="pwd1" name="pwd1" type="password" placeholder="Password">
                                    <label for="">Repeat password<span>*</span></label>
                                    <input id="pwd2" name="pwd2" type="password" placeholder="Password">
                                    <label for="">Old password<span>*</span></label>
                                    <input id="curPwd" name="curpwd" type="password" placeholder="Old assword">
                                    <button type="submit" class="aa-browse-btn" onclick="registerNewUser()">Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aa-myaccount-login">
                                <h4>Login</h4>
                                <div class="aa-login-form">
                                    <label for="">Username or Email address<span>*</span></label>
                                    <input id="loginEmail" type="text" placeholder="Username or email">
                                    <label for="">Password<span>*</span></label>
                                    <input id="loginPwd" type="password" placeholder="Password">
                                    <button type="submit" onclick="login('loginEmail', 'loginPwd');" class="aa-browse-btn">Login</button>
                                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
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
