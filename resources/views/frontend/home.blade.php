<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Martfury</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/owl-carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/technology.css')}}">
</head>

<body>
    <header class="header header--standard header--technology" data-sticky="true">
        <div class="header__top">
            <div class="container">
                <div class="header__left">
                    <p>SHOPPING CENTER <strong>for all orders over $100</strong></p>
                </div>
                <div class="header__right">
                    <ul class="header__top-links">
                        <li><a href="#">Store Location</a></li>
                        <li><a href="#">Track Your Order</a></li>
                        <li>
                            <div class="ps-dropdown"><a href="#">US Dollar</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="ps-block--user-header">
                                <div class="ps-block__left"><i class="icon-user"></i></div>
                                <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-left"><a class="ps-logo" href="index.html"><img src="{{asset('frontend/assets/img/logo.png')}}" alt=""></a>
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li><a href="#">New Arrivals</a>
                                </li>
                                <li><a href="#">Best Sellers</a>
                                </li>
                                <li><a href="#">Smartphone</a>
                                </li>
                                <li><a href="#">Tablets</a>
                                </li>
                                <li><a href="#">Laptops</a>
                                </li>
                                <li><a href="#">Sounds</a>
                                </li>
                                <li><a href="#">Technology Toys</a>
                                </li>
                                <li><a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__content-center">
                    <form class="ps-form--quick-search" action="index.html" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control">
                                <option value="1">All</option>
                                <option value="1">Smartphone</option>
                                <option value="1">Sounds</option>
                                <option value="1">Technology toys</option>
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for...">
                        <button>Search</button>
                    </form>
                </div>
                <div class="header__content-right">
                    <div class="header__actions"><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/assets/img/products/clothing/7.jpg')}}" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/assets/img/products/clothing/5.jpg')}}" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="#">Login</a><a href="#">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <ul class="menu menu--technology">
                    <li><a href="homepage-10.html"><i class="icon-star"></i> Hot Deal</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="icon-smartphone"></i> Smartphone</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="ion-ipad"></i> Tablets</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="icon-laptop"></i> Laptop</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="icon-headphone"></i> Sounds</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="icon-mic2"></i> Technology Toys</a>
                    </li>
                    <li><a href="homepage-10.html"><i class="icon-headphones"></i> Accesories</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <header class="header header--mobile technology" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">Sell on Martfury</a></li>
                    <li><a href="#">Tract your order</a></li>
                    <li>
                        <div class="ps-dropdown"><a href="#">US Dollar</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#">Us Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="ps-dropdown language"><a href="#"><img src="{{asset('frontend/assets/img/flag/en.png')}}" alt="">English</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#"><img src="{{asset('frontend/assets/img/flag/germany.png')}}" alt=""> Germany</a></li>
                                <li><a href="#"><img src="{{asset('frontend/assets/img/flag/fr.png')}}" alt=""> France</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="{{asset('frontend/assets/img/logo-technology.png')}}" alt=""></a></div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                        <div class="ps-cart__content">
                            <div class="ps-cart__items">
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/assets/img/products/clothing/7.jpg')}}" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/assets/img/products/clothing/5.jpg')}}" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__footer">
                                <h3>Sub Total:<strong>$59.99</strong></h3>
                                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('frontend/assets/img/products/clothing/7.jpg')}}" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li><a href="#">Hot Promotions</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Electronic<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Home Audio &amp; Theathers</a>
                                </li>
                                <li><a href="#">TV &amp; Videos</a>
                                </li>
                                <li><a href="#">Camera, Photos &amp; Videos</a>
                                </li>
                                <li><a href="#">Cellphones &amp; Accessories</a>
                                </li>
                                <li><a href="#">Headphones</a>
                                </li>
                                <li><a href="#">Videosgames</a>
                                </li>
                                <li><a href="#">Wireless Speakers</a>
                                </li>
                                <li><a href="#">Office Electronic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Digital Cables</a>
                                </li>
                                <li><a href="#">Audio &amp; Video Cables</a>
                                </li>
                                <li><a href="#">Batteries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Clothing &amp; Apparel</a>
                </li>
                <li><a href="#">Home, Garden &amp; Kitchen</a>
                </li>
                <li><a href="#">Health &amp; Beauty</a>
                </li>
                <li><a href="#">Yewelry &amp; Watches</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Computer &amp; Tablets</a>
                                </li>
                                <li><a href="#">Laptop</a>
                                </li>
                                <li><a href="#">Monitors</a>
                                </li>
                                <li><a href="#">Networking</a>
                                </li>
                                <li><a href="#">Drive &amp; Storages</a>
                                </li>
                                <li><a href="#">Computer Components</a>
                                </li>
                                <li><a href="#">Security &amp; Protection</a>
                                </li>
                                <li><a href="#">Gaming Laptop</a>
                                </li>
                                <li><a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Babies &amp; Moms</a>
                </li>
                <li><a href="#">Sport &amp; Outdoor</a>
                </li>
                <li><a href="#">Phones &amp; Accessories</a>
                </li>
                <li><a href="#">Books &amp; Office</a>
                </li>
                <li><a href="#">Cars &amp; Motocycles</a>
                </li>
                <li><a href="#">Home Improments</a>
                </li>
                <li><a href="#">Vouchers &amp; Services</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li><a href="homepage-2.html">Home Auto Parts</a>
                        </li>
                        <li><a href="homepage-10.html">Home Technology</a>
                        </li>
                        <li><a href="homepage-9.html">Home Organic</a>
                        </li>
                        <li><a href="homepage-3.html">Home Marketplace V1</a>
                        </li>
                        <li><a href="homepage-4.html">Home Marketplace V2</a>
                        </li>
                        <li><a href="homepage-5.html">Home Marketplace V3</a>
                        </li>
                        <li><a href="homepage-6.html">Home Marketplace V4</a>
                        </li>
                        <li><a href="homepage-7.html">Home Electronic</a>
                        </li>
                        <li><a href="homepage-8.html">Home Furniture</a>
                        </li>
                        <li><a href="homepage-kids.html">Home Kids</a>
                        </li>
                        <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                        <li><a href="home-medical.html">Home Medical</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Default</a>
                                </li>
                                <li><a href="product-extend.html">Extended</a>
                                </li>
                                <li><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li><a href="product-box.html">Boxed</a>
                                </li>
                                <li><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Simple</a>
                                </li>
                                <li><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li><a href="product-image-swatches.html">Images Swatches</a>
                                </li>
                                <li><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li><a href="product-video.html">Video Featured</a>
                                </li>
                                <li><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                                <li><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li><a href="compare.html">Compare</a>
                                </li>
                                <li><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li><a href="my-account.html">My Account</a>
                                </li>
                                <li><a href="checkout-2.html">Checkout 2</a>
                                </li>
                                <li><a href="shipping.html">Shipping</a>
                                </li>
                                <li><a href="payment.html">Payment</a>
                                </li>
                                <li><a href="payment-success.html">Payment Success</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="about-us.html">About Us</a>
                                </li>
                                <li><a href="contact-us.html">Contact</a>
                                </li>
                                <li><a href="faqs.html">Faqs</a>
                                </li>
                                <li><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                                <li><a href="store-list.html">Store List</a>
                                </li>
                                <li><a href="store-list.html">Store List 2</a>
                                </li>
                                <li><a href="store-detail.html">Store Detail</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Account Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="user-information.html">User Information</a>
                                </li>
                                <li><a href="addresses.html">Addresses</a>
                                </li>
                                <li><a href="invoices.html">Invoices</a>
                                </li>
                                <li><a href="invoice-detail.html">Invoice Detail</a>
                                </li>
                                <li><a href="notifications.html">Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-grid.html">Grid</a>
                                </li>
                                <li><a href="blog-list.html">Listing</a>
                                </li>
                                <li><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="homepage-10">
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-banner--technology" data-background="{{asset('frontend/assets/img/slider/home-10/1.jpg')}}"><img src="{{asset('frontend/assets/img/slider/home-10/1.jpg')}}" alt="">
                    <div class="ps-banner__content">
                        <h4>Weekend Promotions</h4>
                        <h3>Mini Helicopter <br /> Mini Helicopter <br /> sale<strong> 40% Off</strong></h3><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
                <div class="ps-banner--technology" data-background="{{asset('backend/assets/img/slider/home-10/2.jpg')}}"><img src="{{asset('frontend/assets/img/slider/home-10/2.jpg')}}" alt="">
                    <div class="ps-banner__content">
                        <h4>Weekend Promotions</h4>
                        <h3>iLuv Aud Mini & <br /> Ultra Slim Pocket-Sized <br /> speaker just<strong> 40% Off</strong></h3><a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-site-features">
            <div class="container">
                <div class="ps-block--site-features ps-block--site-features-2">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Free Delivery</h4>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>90 Days Return</h4>
                            <p>If goods have problems</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-deal-of-day">
            <div class="container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Deal of the day</h3>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>End in:</figcaption>
                                <ul class="ps-countdown" data-time="December 30, 2021 15:37:25">
                                    <li><span class="days"></span></li>
                                    <li><span class="hours"></span></li>
                                    <li><span class="minutes"></span></li>
                                    <li><span class="seconds"></span></li>
                                </ul>
                            </figure>
                        </div>
                    </div><a href="shop-default.html">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/1.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">11%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone X 256GB T-Mobile – Black</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="0">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:65</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/2.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">11%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$820.99 <del>$893.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone 7 Plus 128 GB – Red Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="9">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:89</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/3.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">21%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="94">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:57</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/4.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">18%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$64.99 <del>$80.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="11">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:77</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/5.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">18%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$42.99 <del>$52.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Bose Bluetooth &amp; Wireless Speaker 2.0 – Blue</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="95">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:62</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/6.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">17%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$542.99 <del>$592.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="45">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/7.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">17%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$542.99 <del>$592.00</del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="75">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:51</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-home-promotions">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('frontend/assets/img/promotions/home-10/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{asset('frontend/assets/img/promotions/home-10/2.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-top-categories">
            <div class="container">
                <h3>Top categories of the month</h3>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/1.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Smartphone</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/2.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Tables</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/3.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Laptops</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/4.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Sounds</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/5.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Technology Toys</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{asset('frontend/assets/img/categories/technology/6.jpg')}}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Accessories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Popular Smartphones & Tablets</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Iphone</a></li>
                        <li><a href="shop-grid.html">IPad</a></li>
                        <li><a href="shop-grid.html">Samsung</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/2.jpg')}}" alt="" /></a>
                                <div class="ps-product__badge">11%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone 7 Plus 128 GB – Red Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone 7 Plus 128 GB – Red Color</a>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/6.jpg')}}" alt="" /></a>
                                <div class="ps-product__badge">17%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                    <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/7.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Yuntab K107 10.1 Inch Quad Core CPU MT6580</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$99.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Yuntab K107 10.1 Inch Quad Core CPU MT6580</a>
                                    <p class="ps-product__price">$99.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/7.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB – Gold</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$899.99 </p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB – Gold</a>
                                    <p class="ps-product__price">$899.99 </p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/8.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Android Tablet 10” 16GB Marshmallow</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$95.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Android Tablet 10” 16GB Marshmallow</a>
                                    <p class="ps-product__price">$95.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Best Seller Laptops & Sounds</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Iphone</a></li>
                        <li><a href="shop-grid.html">Apple</a></li>
                        <li><a href="shop-grid.html">Laptop</a></li>
                        <li><a href="shop-grid.html">Asus</a></li>
                        <li><a href="shop-grid.html">Marshall</a></li>
                        <li><a href="shop-grid.html">Speaker</a></li>
                        <li><a href="shop-grid.html">JBL</a></li>
                        <li><a href="shop-grid.html">Speaker</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/3.jpg')}}" alt="" /></a>
                                <div class="ps-product__badge">11%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/9.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$42.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                    <p class="ps-product__price">$42.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/12.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 12-Inch Laptop</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$942.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 12-Inch Laptop</a>
                                    <p class="ps-product__price">$942.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/5.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Bose Bluetooth &amp; Wireless Speaker 2.0 – Blue</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$92.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Bose Bluetooth &amp; Wireless Speaker 2.0 – Blue</a>
                                    <p class="ps-product__price">$92.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/6.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Bose Ear-Phone Bluetooth &amp; Wireless</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$392.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Bose Ear-Phone Bluetooth &amp; Wireless</a>
                                    <p class="ps-product__price">$392.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/11.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Bose Ear-Phone Bluetooth &amp; Wireless</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$102.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Bose Ear-Phone Bluetooth &amp; Wireless</a>
                                    <p class="ps-product__price">$102.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Technology Toys Recommended For You</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">Micro</a></li>
                        <li><a href="shop-grid.html">Drone/Flycam</a></li>
                        <li><a href="shop-grid.html">Microphone</a></li>
                        <li><a href="shop-grid.html">iQOS</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/4.jpg')}}" alt="" /></a>
                                <div class="ps-product__badge">11%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/13.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">iQOS 2.4 Plus Kit, Holder &amp; Chargers – White</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$42.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">iQOS 2.4 Plus Kit, Holder &amp; Chargers – White</a>
                                    <p class="ps-product__price">$42.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/14.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">DJI Phantom 4 Quadcopter Drone</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$942.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">DJI Phantom 4 Quadcopter Drone</a>
                                    <p class="ps-product__price">$942.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/15.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple TV 4k – 32 GB (4th Generation)</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$92.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple TV 4k – 32 GB (4th Generation)</a>
                                    <p class="ps-product__price">$92.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/16.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">GoPro Karman 4 Channels Quadcopter Drone</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$392.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">GoPro Karman 4 Channels Quadcopter Drone</a>
                                    <p class="ps-product__price">$392.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/17.jpg')}}" alt="" /></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$102.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <p class="ps-product__price">$102.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Good Price Accessories</h3>
                    <ul class="ps-section__links">
                        <li><a href="shop-grid.html">HeadPhone</a></li>
                        <li><a href="shop-grid.html">Charge</a></li>
                        <li><a href="shop-grid.html">Case USB</a></li>
                        <li><a href="shop-grid.html">Hard Drive</a></li>
                        <li><a href="shop-grid.html">TV Box</a></li>
                        <li><a href="shop-grid.html">View All</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/18.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">HP Chromebook CB 10014 Desktop</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$820.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/19.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Acrylic Cover Case for iPhone X- (Clear)</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$49.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/20.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">B&amp;O Play Mini Bluetooth Speaker</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$49.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/21.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beats Mini On Ear Bluetooth, Wireless Headphone</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$64.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/22.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Package 2 iClever Bootscube Mini Chargers</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$12.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="ps-product--horizontal">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('frontend/assets/img/products/technology/17.jpg')}}" alt="" /></a></div>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$12.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="ps-footer ps-footer--2 ps-footer--technology">
            <div class="container">
                <div class="ps-footer__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Quick links</h4>
                                <ul class="ps-list--link">
                                    <li><a href="policy.html">Policy</a></li>
                                    <li><a href="term-condition.html">Term & Condition</a></li>
                                    <li><a href="shipping.html">Shipping</a></li>
                                    <li><a href="return.html">Return</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Company</h4>
                                <ul class="ps-list--link">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="affilate.html">Affilate</a></li>
                                    <li><a href="shipping.html">Career</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Bussiness</h4>
                                <ul class="ps-list--link">
                                    <li><a href="our-press.html">Our Press</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
                            <aside class="widget widget_newletters widget_footer">
                                <h4 class="widget-title">Newsletter</h4>
                                <p>Register now to get updates on promotions & coupons</p>
                                <form class="ps-form--newletter" action="#" method="get">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="text" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                    <ul class="ps-list--social">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="ps-footer__copyright">
                    <p>© 2022 express. All Rights Reserved</p>
                    <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{asset('frontend/assets/img/payment-method/1.jpg')}}" alt=""></a><a href="#"><img src="{{asset('frontend/assets/img/payment-method/2.jpg')}}" alt=""></a><a href="#"><img src="{{asset('frontend/assets/img/payment-method/3.jpg')}}" alt=""></a><a href="#"><img src="{{asset('frontend/assets/img/payment-method/4.jpg')}}" alt=""></a><a href="#"><img src="{{asset('frontend/assets/img/payment-method/5.jpg')}}" alt=""></a></p>
                </div>
            </div>
        </footer>
    </div>
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="{{asset('frontend/assets/img/products/detail/fullwidth/1.jpg')}}" alt=""></div>
                                <div class="item"><img src="{{asset('frontend/assets/img/products/detail/fullwidth/2.jpg')}}" alt=""></div>
                                <div class="item"><img src="{{asset('frontend/assets/img/products/detail/fullwidth/3.jpg')}}" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a href="shop-default.html">Sony</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">$36.78 – $56.99</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/assets/plugins/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/gmap3.min.js')}}"></script>
    <!-- custom scripts-->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>