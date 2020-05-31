<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?= base_url()?>/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="84px" data-xl-stick-up-offset="84px" data-xxl-stick-up-offset="84px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="<?= base_url() ?>/"><img class="brand-logo-dark" src="<?= base_url() ?>/images/logo.png" alt="" width="170" height="55"/><img class="brand-logo-light" src="<?= base_url()?>/images/logo.png" alt="" width="170" height="55"/></a>
                </div>
                <div class="rd-navbar-aside-box rd-navbar-collapse">
                  <!--RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <form class="rd-search search-with-select" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                      <select class="form-input" name="type" data-constraints="@Required">
                        <option>All</option>
                        <option>Health</option>
                        <option>Beauty</option>
                      </select>
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit material-icons-search" type="submit"></button>
                    </form>
                  </div>
                  <div class="rd-navbar-call">Call us today: <a href='tel:#'>(+91) 8722 040 200</a></div>
                  <ul class="rd-navbar-aside-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Why choose us?</a></li>
                  </ul>
<!--                  <ul class="rd-navbar-selects">
                    <li>
                      <select>
                        <option>English</option>
                        <option>Deutsch</option>
                        <option>Español</option>
                        <option>Français</option>
                      </select>
                    </li>
                    <li>
                      <select>
                        <option>USD</option>
                        <option>EUR</option>
                      </select>
                    </li>
                  </ul>-->
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="<?= base_url() ?>/">
                        <img class="brand-logo-dark" src="<?= base_url() ?>/images/logo.png" alt="" width="170" height="55"/>
                        <img class="brand-logo-light" src="<?= base_url() ?>/images/logo.png" alt="" width="170" height="55"/></a>
                  </div>
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">home medicine</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">diet &amp; nutrition</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">personal care</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">beauty</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">fitness &amp; vitamins</a>
                    </li>
<!--                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Shop</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-shop.html">Grid Shop</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="list-shop.html">List Shop</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="product-page.html">Product Page</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="shopping-cart.html">Shopping Cart</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="checkout.html">Checkout</a>
                        </li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="buttons.html">Buttons</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="forms.html">Forms</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-system.html">Grid System</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="progress-bars.html">Progress Bars</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="search-results.html">Search Results</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="tables.html">Tables</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="tabs-and-accordions.html">Tabs and Accordions</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="typography.html">Typography</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="under-construction.html">Under Construction</a>
                        </li>
                      </ul>
                    </li>-->
                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url()?>/contact-us">Contacts</a>
                    </li>
                  </ul>
                </div>
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <ul class="rd-navbar-nav-acc">
                    <li>
                      <button class="icon material-icons-favorite_border" data-toggle="modal" data-target="#modal-subscribe"></button>
                    </li>
                    <li>
                      <button class="icon material-icons-perm_identity" data-toggle="modal" data-target="#modal-login"></button>
                    </li>
                    <li>
                      <div class="rd-navbar-cart-button-wrap">
                        <button class="rd-navbar-cart-button icon material-icons-shopping_cart" data-rd-navbar-toggle="#cart-inline"></button>
                        <div class="rd-navbar-badge">2</div>
                      </div>
                      <!-- Cart Inline-->
                      <article class="cart-inline cart-inline-toggled" id="cart-inline">
                        <div class="cart-inline-inner">
                          <div class="cart-inline-header">
                            <h5 class="cart-inline-title">In cart: 2 products</h5>
                            <p class="cart-inline-subtitle">total price: $42.00</p>
                          </div>
                          <div class="cart-inline-main">
                                  <!-- Product inline-->
                                  <article class="product-inline">
                                    <div class="product-inline-aside"><a class="product-inline-figure" href="product-page.html"><img class="product-inline-image" src="images/product-01-174x199.png" alt="" width="174" height="199"/></a></div>
                                    <div class="product-inline-main">
                                      <div class="product-inline-title"><a href="product-page.html">Aamra Homemade Tomato Garlic Basil Pizza Pasta Sauce</a></div>
                                      <ul class="product-inline-meta">
                                        <li class="stepper-modern">
                                          <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                        </li>
                                        <li>
                                          <p class="product-inline-price">$28.00</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </article>
                                  <!-- Product inline-->
                                  <article class="product-inline">
                                    <div class="product-inline-aside"><a class="product-inline-figure" href="product-page.html"><img class="product-inline-image" src="images/product-02-174x199.png" alt="" width="174" height="199"/></a></div>
                                    <div class="product-inline-main">
                                      <div class="product-inline-title"><a href="product-page.html">Aamra Homemade Tomato Garlic Basil Pizza Pasta Sauce</a></div>
                                      <ul class="product-inline-meta">
                                        <li class="stepper-modern">
                                          <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                        </li>
                                        <li>
                                          <p class="product-inline-price">$14.00</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </article>
                          </div>
                          <div class="cart-inline-footer"><a class="btn btn-primary" href="shopping-cart.html">Go to Cart</a><a class="btn btn-primary" href="checkout.html">Checkout</a></div>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
