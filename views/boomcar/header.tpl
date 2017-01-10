
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
                                <p><span class="fa fa-phone"></span>+48-577-344-611</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">

                                {if isset($arUser)}

                                    <li><a id="userLink" href="/user/">My Account</a></li>
                                    <li id="logoutLink"><a href="/user/logout/">Logout</a></li>

                                {else}

                                    <li><a id="userLink" href="/user/account/">My Account</a></li>
                                    <li id="loginLink"><a href="" data-toggle="modal" data-target="#login-modal">Zaloguj</a></li>
                                    <li id="logoutLink" style="display: none;"><a href="/user/logout/">Logout</a></li>

                                {/if}

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
                            <!-- <a href="index.html"><img src="images/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="/cart/">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">Koszyk</span>
                                <span id="cartCntItems" class="aa-cart-notify">{$cartCntItems}</span>
                            </a>
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