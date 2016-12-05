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
                                                <a href="/images/products/{$rsProduct['original_image']}" class="simpleLens-lens-image">
                                                    <img width="100%" src="/images/products/{$rsProduct['original_image']}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3>{$rsProduct['name']}</h3>
                                    <div class="aa-price-block">
                                        <span class="aa-product-view-price">{$rsProduct['price']} zł</span>
                                    </div>
                                    <div class="aa-prod-quantity">
                                        <p class="aa-prod-category">
                                            Kategorie: <a href="/category/{$rsCategory['id']}/">{$rsCategory['name']}</a>
                                        </p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                    <div class="aa-prod-quantity">
                                        <input type="number" value="1" min="1" max="{$rsProduct['quantity']}" style="width: 50px; padding: 5px">
                                        <p class="aa-prod-category">z {$rsProduct['quantity']} sztuk</p>
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
                            <li><h4>Opis</h4></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <p>{$rsProduct['description']}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->
