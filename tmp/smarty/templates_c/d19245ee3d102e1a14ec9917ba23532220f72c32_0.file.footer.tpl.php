<?php
/* Smarty version 3.1.30, created on 2017-01-09 20:09:08
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5873dfd44864d8_34813033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19245ee3d102e1a14ec9917ba23532220f72c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\footer.tpl',
      1 => 1483988919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5873dfd44864d8_34813033 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <address>
                                        <p> 25 Astor Pl, NY 10003, USA</p>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <address>
                                        <p><span class="fa fa-phone"></span>+48-577-344-611</p>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <address>
                                        <p><span class="fa fa-envelope"></span>boomCar@gmail.com</p>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <address>
                                        <p><span class="fa fa-skype"></span>boomCar-shop</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->
<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <div class="aa-login-form">
                    <label for="">Username or Email address<span>*</span></label>
                    <input id="modalEmail" type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input id="modalPwd" type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit" onclick="login('modalEmail', 'modalPwd')">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="/user/account/">Register now!</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<!-- jQuery library -->
<?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="/js/bootstrap.js"><?php echo '</script'; ?>
>
<!-- SmartMenus jQuery plugin -->
<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.smartmenus.js"><?php echo '</script'; ?>
>
<!-- SmartMenus jQuery Bootstrap Addon -->
<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.smartmenus.bootstrap.js"><?php echo '</script'; ?>
>
<!-- Product view slider -->
<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.simpleGallery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.simpleLens.js"><?php echo '</script'; ?>
>
<!-- slick slider -->
<?php echo '<script'; ?>
 type="text/javascript" src="/js/slick.js"><?php echo '</script'; ?>
>
<!-- Price picker slider -->
<?php echo '<script'; ?>
 type="text/javascript" src="/js/nouislider.js"><?php echo '</script'; ?>
>

<!-- Custom js -->
<?php echo '<script'; ?>
 src="/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/addscripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>


</body>
</html><?php }
}
