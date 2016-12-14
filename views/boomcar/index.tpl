
<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">

                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg list">

                            {foreach $rsProducts as $item}

                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="/product/{$item['id']}/">
                                        <img src="/images/products/{$item['image']}" alt="product img">
                                    </a>
                                    <a id="addCart_{$item['id']}" {if $item['itemInCart']} style="display: none;" {/if} onclick="addToCart({$item['id']}); return false" class="aa-add-card-btn" href="#">do koszyka</a>
                                    <a id="removeCart_{$item['id']}" {if ! $item['itemInCart']} style="display: none;" {/if} onclick="removeFromCart({$item['id']}); return false" class="aa-add-card-btn" href="#">z koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title">
                                            <a href="/product/{$item['id']}/">{$item['name']}</a>
                                        </h4>
                                        <span class="aa-product-price">{$item['price']} zł</span>
                                        <p class="aa-product-descrip">

                                            {if $item['state'] = 0}
                                                Stan: Używane <br>
                                            {else}
                                                Stan: Nowe <br>
                                            {/if}

                                            Kategorie: {$item['categoryName']} <br>
                                            Producent części: {$item['producerName']} <br>
                                            Marka samochodu: {$item['carModelName']}
                                        </p>
                                    </figcaption>
                                </figure>
                            </li>

                            {/foreach}

                        </ul>

                    </div>
                    <div class="aa-product-catg-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            {include file="menucolumn.tpl"}

        </div>
    </div>
</section>
<!-- / product category -->
