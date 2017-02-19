<?php
/* Smarty version 3.1.30, created on 2017-02-19 18:51:16
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a9db1472a970_93847091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80381346333d2d167cc9c55c59713440b636e841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\registration.tpl',
      1 => 1487526672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a9db1472a970_93847091 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Register</h4>
                                <div id="registerBox" class="aa-login-form">
                                    <label for="">Username<span>*</span></label>
                                    <input id="username" name="username" type="text" placeholder="Username">
                                    <label for="">Password<span>*</span></label>
                                    <input id="pwd1" name="pwd1" type="password" placeholder="Password">
                                    <label for="">Password<span>*</span></label>
                                    <input id="pwd2" name="pwd2" type="password" placeholder="Password">
                                    <label for="">Email address</label>
                                    <input id="email" name="email" type="text" placeholder="Email">
                                    <label for="">Phone number</label>
                                    <input id="phonenumber" name="phonenumber" type="text" placeholder="Phone number">
                                    <label for="">Address</label>
                                    <textarea id="address" name="address" placeholder="Address"></textarea>
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
<?php }
}
