<?php
/* Smarty version 3.1.30, created on 2017-06-01 11:42:36
  from "D:\xampp\htdocs\boomcar.local\views\boomcar\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592fe18c000009_39635323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a5203d1a14ff85d4ef9b6f36d74c756b23240d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\user.tpl',
      1 => 1496310153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592fe18c000009_39635323 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <h4>Dane rejestracyjne <?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</h4>
                                <div id="registerBox" class="aa-login-form">
                                    <label for="">Name</label>
                                    <input id="newName" name="newName" type="text" placeholder="New name" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
">
                                    <label for="">Phone</label>
                                    <input id="newPhone" name="newPhone" type="text" placeholder="New phone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
">
                                    <label for="">Address</label>
                                    <textarea id="newAddress" name="newAddress" placeholder="New address"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
</textarea>
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

                                    <?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
                                        No orders
                                    <?php } else { ?>

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

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                                        <tr>
                                            <td width="20%"><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;" style="color: #970001;">Order of <?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                                        </tr>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                        </tbody>
                                    </table>

                                    <?php }?>

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
