
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BoomCar</title>

    <!-- Font awesome -->
    <link href="{$templateWebPath}css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{$templateWebPath}css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{$templateWebPath}css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{$templateWebPath}css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{$templateWebPath}css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{$templateWebPath}css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{$templateWebPath}css/theme-color/default-theme.css" rel="stylesheet">


    <!-- Main style sheet -->
    <link href="{$templateWebPath}css/style.css" rel="stylesheet">

    <!-- BoomCar version addition -->
    <link href="{$templateWebPath}css/addStyle.css" rel="stylesheet">
    <!-- / BoomCar version addition -->

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- !Important notice -->
<!-- Only for product page body tag have to added .productPage class -->
<body class="productPage">
<!-- wpf loader Two -->
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">

                            <!-- start cellphone -->
                            <div class="cellphone">
                                <p><span class="fa fa-phone"></span>+48-570-537-162</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="" data-toggle="modal" data-target="#login-modal">Zaloguj</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.html">
                                <span class="fa fa-car"></span>
                                <p>boom<strong>Car</strong> <span>Części samochodowe</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="#">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">Koszyk</span>
                                <span class="aa-cart-notify">2</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="{$templateWebPath}img/product-small-2.jpg" alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="{$templateWebPath}img/product-small-1.jpg" alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                                        <span class="aa-cartbox-total-price">
                        $500
                      </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Szukaj tutaj">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->

<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-head">
                        <div class="aa-product-catg-head-left">
                            <form action="" class="aa-sort-form">
                                <label for="">Sort by</label>
                                <select name="">
                                    <option value="1" selected="Default">Default</option>
                                    <option value="2">Name</option>
                                    <option value="3">Price</option>
                                    <option value="4">Date</option>
                                </select>
                            </form>
                            <form action="" class="aa-show-form">
                                <label for="">Show</label>
                                <select name="">
                                    <option value="1" selected="12">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </form>
                        </div>
                        <div class="aa-product-catg-head-right">
                            <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                            <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg list">
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">o koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <!-- product badge -->
                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="{$templateWebPath}img/250x200.gif" alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn"href="#">do koszyka</a>
                                    <a class="aa-add-card-btn bay-btn"href="#">kup teraz</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                            </li>
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
            <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                <aside class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Podkategorie</h3>
                        <ul class="aa-catg-nav">
                            <li><a href="#">Wszystkie</a></li>
                            <li><a href="">Kola & Felgi samochodowe</a></li>
                            <li><a href="">Filtry</a></li>
                            <li><a href="">Karoseria</a></li>
                            <li><a href="">Klimatyzacja & Wentylacja</a></li>
                            <li><a href="">Oświetlenie</a></li>
                            <li><a href="">Silniki & Części</a></li>
                            <li><a href="">Układ elektryczny</a></li>
                            <li><a href="">Układ hamulcowy</a></li>
                            <li><a href="">Układ kierowniczy</a></li>
                            <li><a href="">Układ napędowy</a></li>
                            <li><a href="">Układ paliwowy</a></li>
                            <li><a href="">Układ wydechowy</a></li>
                            <li><a href="">Zawieszenie samochodowe</a></li>
                            <li><a href="">Pozostałe</a></li>
                        </ul>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Stan</h3>
                        <div class="tag-cloud">
                            <a href="#" onclick="selectTag(this)">Nowe</a>
                            <a href="#" onclick="selectTag(this)">Używane</a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Cena (zł)</h3>
                        <!-- price range -->
                        <div class="aa-sidebar-price-range">
                            <form action="">
                                <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                </div>
                                <span id="skip-value-lower" class="example-val">30.00</span>
                                <span id="skip-value-upper" class="example-val">100.00</span>
                                <button class="aa-filter-btn" type="submit">Filter</button>
                            </form>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Producent części</h3>
                        <div class="tag-cloud">
                            <a href="#" onclick="selectTag(this)">Bosch</a>
                            <a href="#" onclick="selectTag(this)">Filtron</a>
                            <a href="#" onclick="selectTag(this)">Knecht</a>
                            <a href="#" onclick="selectTag(this)">Mann Filter</a>
                            <a href="#" onclick="selectTag(this)">Inny</a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Marka samochodu</h3>
                        <div class="tag-cloud">
                            <a href="#" onclick="selectTag(this)">Audi</a>
                            <a href="#" onclick="selectTag(this)">Opel</a>
                            <a href="#" onclick="selectTag(this)">Seat</a>
                            <a href="#" onclick="selectTag(this)">Volkswagen</a>
                            <a href="#" onclick="selectTag(this)">Inne marki</a>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
</section>
<!-- / product category -->

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
                                        <p><span class="fa fa-phone"></span>+48-570-537-162</p>
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
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="js/nouislider.js"></script>

<!-- Custom js -->
<script src="js/custom.js"></script>
<script src="js/addscripts.js"></script>


</body>
</html>