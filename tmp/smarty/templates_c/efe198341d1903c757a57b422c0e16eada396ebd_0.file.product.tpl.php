<?php
/* Smarty version 3.1.30, created on 2016-12-04 16:27:27
  from "C:\xampp\htdocs\boomcar.local\views\boomcar\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584435dfac8898_81323459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efe198341d1903c757a57b422c0e16eada396ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\boomcar.local\\views\\boomcar\\product.tpl',
      1 => 1480865241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584435dfac8898_81323459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">

                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">
                                                <a href="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['original_image'];?>
" class="simpleLens-lens-image">
                                                    <img width="100%" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['original_image'];?>
">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
                                    <div class="aa-price-block">
                                        <span class="aa-product-view-price"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 zł</span>
                                    </div>
                                    <div class="aa-prod-quantity">
                                        <p class="aa-prod-category">
                                            Kategorie: <a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</a>
                                        </p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                    <div class="aa-prod-quantity">
                                        <input type="number" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['quantity'];?>
" style="width: 50px; padding: 5px">
                                        <p class="aa-prod-category">z <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['quantity'];?>
 sztuk</p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a class="aa-add-to-cart-btn" href="#">do koszyka</a>
                                        <a class="aa-add-to-cart-btn" href="#">kup teraz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><h4>Description</h4></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->
<?php }
}
