<!-- product category -->
<section id="aa-product-details" style="min-height: calc(100vh - 320px)">
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
                                    <p>Stan:

                                        {if $rsProduct['state'] == 0}
                                            Używane
                                        {else}
                                            Nowe
                                        {/if}

                                        <br>Producent części: {$rsProducer['name']}
                                        <br>Marka samochodu: {$rsCarModel['name']}
                                    </p>
                                    <div class="aa-prod-quantity">
                                        <input type="number" value="1" min="1" max="{$rsProduct['quantity']}" style="width: 50px; padding: 5px">
                                        <p class="aa-prod-category">z {$rsProduct['quantity']} sztuk</p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a id="addCart_{$rsProduct['id']}" {if $itemInCart} style="display: none" {/if} href="#" onclick="addToCart({$rsProduct['id']}); return false" class="aa-add-to-cart-btn" alt="do koszyka">do koszyka</a>
                                        <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart} style="display: none" {/if} href="#" onclick="removeFromCart({$rsProduct['id']}); return false" class="aa-add-to-cart-btn" alt="z koszyka">z koszyka</a>
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
                        <div class="tab-content" style="min-height: 90px">
                            <div class="tab-pane fade in active" id="description">
                                <p>{$rsProduct['description']}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->
