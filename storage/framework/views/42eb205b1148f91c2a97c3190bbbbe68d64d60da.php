<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php echo $__env->make('webpages/include/head-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div class="site-wrapper" id="top">

        <?php echo $__env->make('webpages/include/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--=================================
        Hero Area
        ===================================== -->

                    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <h1><?php echo e($cd->position); ?> 
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <section class="hero-area hero-slider-1">
            <div class="sb-slick-slider" data-slick-setting='{
                            "autoplay": true,
                            "fade": true,
                            "autoplaySpeed": 3000,
                            "speed": 3000,
                            "slidesToShow": 1,
                            "dots":true
                            }'>
                <div class="single-slide bg-shade-whisper">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-right">
                                <img src="<?php echo e(asset('public/webpages/assets/image/bg-images/home-slider-2-ai.png')); ?>">

                            </div>
                            <div class="row no-gutters ">
                                <div class="col-xl-6 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-left-side">
                                        <h1>H.G. Wells<br>
                                            De Vengeance</h1>
                                        <h2>Cover Up Front Of Books and Leave Summary</h2>
                                        <a href="<?php echo e(url('#')); ?>" class="mt-5 btn btn-outlined--primary">
                                            ???200 - Order Now!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-ghost-white">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-left">

                                <img src="<?php echo e(asset('public/webpages/assets/image/bg-images/home-slider-1-ai.png')); ?>">

                            </div>
                            <div class="row align-items-center justify-content-start justify-content-md-end">
                                <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-right-side">
                                        <h1>J.D. Kurtness <br>
                                            De Vengeance</h1>
                                        <h2>Cover Up Front Of Books and Leave Summary</h2>
                                        <a href="<?php echo e(url('#')); ?>" class="mt-5 btn btn-outlined--primary">
                                            ???200 - Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Features Section
        ===================================== -->
        <section class="mb--30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over $500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Lorem ipsum dolor amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123.4567.89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Promotion Section One
        ===================================== -->
        <section class="section-margin">
            <h2 class="sr-only">Promotion Section</h2>
            <div class="container">
                <div class="row space-db--30">
                    <div class="col-lg-6 col-md-6 mb--30">
                        <a href="" class="promo-image promo-overlay">
                            <img src="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-with-text.jpg')); ?>">

                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 mb--30">
                        <a href="" class="promo-image promo-overlay">
                            <img src="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-with-text-2.jpg')); ?>">

                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Slider Tab
        ===================================== -->
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                <div class="sb-custom-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop" role="tab"
                                aria-controls="shop" aria-selected="true">
                                Featured Products
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                                aria-controls="men" aria-selected="true">
                                New Arrivals
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman" role="tab"
                                aria-controls="woman" aria-selected="false">
                                Most view products
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 2} },
                            {"breakpoint":320, "settings": {"slidesToShow": 2} }
                        ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                       
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">

                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">

                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-header">
                                            <a href="" class="author">
                                                jpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>">

                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>">

                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>">

                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>">

                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>">

                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Vpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-12.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                jpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Beats EP Wired On-Ear
                                                    Headphone-Black</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Apple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                jpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book/a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-9.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-10.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                Apple
                                            </a>
                                            <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?php echo e(asset('public/webpages/assets/image/products/product-12.jpg')); ?>" alt="">
                                                <div class="hover-contents">
                                                    <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>"
                                                            alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.php" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.php" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.php" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Deal of the day 
        ===================================== -->
        <section class="section-margin">
            <div class="container-fluid">
                <div class="promo-section-heading">
                    <h2>Deal of the day up to 20% off Special offer</h2>
                </div>
                <div class="product-slider with-countdown  slider-border-single-row sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 6,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1400, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":490, "settings": {"slidesToShow": 2} }
            ]'>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Ypple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Upple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Ypple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Epple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Rpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Tpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Mpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-13.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Best Seller Product
        ===================================== -->
        <section class="section-margin bg-image section-padding-top section-padding"
            data-bg="<?php echo e(asset('public/webpages/assets/image/bg-images/best-seller-bg.jpg')); ?>">

            <div class="container">
                <div class="section-title section-title--bordered mb-0">
                    <h2>Best BEST SELLER BOOKS</h2>
                </div>
                <div class="best-seller-block">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="author-image">
                                <img src="<?php echo e(asset('public/webpages/assets/image/others/best-seller-author.jpg')); ?>" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="sb-slick-slider product-slider product-list-slider multiple-row slider-border-multiple-row"
                                data-slick-setting='{
                                    "autoplay": false,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow":2,
                                    "rows":2,
                                    "dots":true
                                }' data-slick-responsive='[
                                    {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":992, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                ]'>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Rpple
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Epple
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book

                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Wpple
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book

                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Ypple
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book



                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Mople
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">What You Can Learn From Bill
                                                        Gates

                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    Cpple
                                                </a>
                                                <h3><a href="<?php echo e(url('product-details')); ?>">3 Ways Create Better BOOK With
                                                        Help

                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">???200</span>
                                                <del class="price-old">???200</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        CHILDREN???S BOOKS 
        ===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>CHILDRENS'S BOOKS</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 2} }
            ]'>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Lpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Jpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Wpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Epple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Hpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Bpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    zpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-13.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Promotion Section Two
        ===================================== -->
        <div class="section-margin">
            <div class="container">
                <div class="row space-db--30">
                    <div class="col-lg-8 mb--30">
                        <div class="promo-wrapper promo-type-one">
                      
                            <a href="#" class="promo-image  promo-overlay bg-image"
                                data-bg="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-mid.jpg')); ?>">
                               
                            </a>
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <h2>Buy 3. Get Free 1.</h2>
                                    <h3>50% off for selected products in Pustok.</h3>
                                    <a href="#" class="btn btn-outlined--red-faded">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb--30">
                        <div class="promo-wrapper promo-type-two ">
                            <a href="#" class="promo-image promo-overlay bg-image"
                                data-bg="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-small.jpg')); ?>">
                                <img src="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-small.jpg')); ?>" alt="">

                            </a>
                            
                            <div class="promo-text">
                                <div class="promo-text-inner">
                                    <span class="d-block price">$200</span>
                                    <h2>Praise for <br>
                                        The Night Child</h2>
                                    <a href="#" class="btn btn-outlined--primary">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        ARTS & PHOTOGRAPHY BOOKS
        ===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2>ARTS & PHOTOGRAPHY BOOKS</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 2} }
            ]'>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Lpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Jpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Wpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Epple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="" class="author">
                                    Hpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-6.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Bpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-8.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-7.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    zpple
                                </a>
                                <h3><a href="<?php echo e(url('product-details')); ?>">Demo Book
                                    </a>
                                </h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-13.jpg')); ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <img src="<?php echo e(asset('public/webpages/assets/image/products/product-11.jpg')); ?>" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="cart.php" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="wishlist.php" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.php" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">???200</span>
                                    <del class="price-old">???200</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
            Promotion Section Three
        ===================================== -->
        <section class="section-margin">
            <div class="promo-wrapper promo-type-three">
                <a href="#" class="promo-image promo-overlay bg-image"
                    data-bg="<?php echo e(asset('public/webpages/assets/image/bg-images/promo-banner-full.jpg')); ?>">
                </a>
                <div class="promo-text w-100 ml-0">
                    <div class="container">
                        <div class="row w-100">
                            <div class="col-lg-7">
                                <h2>I Love This Idea!</h2>
                                <h3>Cover up front of book and
                                    leave summary</h3>
                                <a href="#" class="btn btn--yellow">???200 - Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Blog Slider
        ===================================== -->
        <!--=================================
        Home Blog
        ===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title">
                    <h2>LATEST BLOGS</h2>
                </div>
                <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 2,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} }
            ]'>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="<?php echo e(asset('public/webpages/assets/image/others/blog-grid-1.jpg')); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            13
                                        </span>
                                        <span class="month">
                                            Aug
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">How to Water and Care for Mounted</a>
                                    </h3>
                                </div>
                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Virtual reality and 3-D technology are already well-established in the
                                        entertainment...</p>
                                </article>
                                <a href="blog-details.php" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="<?php echo e(asset('public/webpages/assets/image/others/blog-grid-2.jpg')); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            19
                                        </span>
                                        <span class="month">
                                            Jan
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">Why You Never See BLOG TITLE That </a>
                                    </h3>
                                </div>
                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Virtual reality and 3-D technology are already well-established in the
                                        entertainment...</p>
                                </article>
                                <a href="blog-details.php" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="<?php echo e(asset('public/webpages/assets/image/others/blog-grid-3.jpg')); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            31
                                        </span>
                                        <span class="month">
                                            Aug
                                        </span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php">What Everyone Must Know About </a>
                                    </h3>
                                </div>
                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Virtual reality and 3-D technology are already well-established in the
                                        entertainment...</p>
                                </article>
                                <a href="blog-details.php" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Footer
        ===================================== -->
        <!-- Modal -->
        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-1.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-2.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-3.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-5.jpg')); ?>" alt="">
                                    </div>
                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                    data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-1.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-2.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-3.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-5.jpg')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 border-left">
                        <div class="product-details-info w-100 h-100">
                            <!-- <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p> -->
                            <div class="border-bottom">
                                <h3 class="product-title mt-2">Swami Vivekananda</h3>
                                <p>by K Bhyrappa (Author),Sapna Book House (Publisher)</p>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                        <span>(88 Customers)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-7 border-right border-bottom">

                                    <div class="row">
                                        <div class="col-12 df-row-ss">

                                            <div class="w-50 df-col-ss">
                                                <span class="price-new my-price pl-2">???200</span>
                                                <small>inclusive all taxes</small>
                                            </div>
                                            <div class="w-50 df-col-ss qty-row pr-2">
                                                <div class="df-row-ee w-100">
                                                    <label for="Qty" class="pr-1">Qty</label>
                                                    <select class=" form-control h-25 w-50 ml-2 qty-control"
                                                        aria-label="Default select example">
                                                        <option selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>

                                                <p class="ml-auto qty-text">Buy in Bullk ?</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 df-row-cc mt-4">
                                            <div class="btn btn-primary product-buy-button">ADD TO CART</div>
                                            <div class="btn btn-primary product-buy-button">BUY NOW</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div>
                                        <p class="check-text mt-5"><strong>Check Delivery</strong> </p>
                                        <div>
                                            <i class="fas fa-truck"></i>
                                            <input type="number" placeholder="Enter Pincode" class="pincode-input"><i
                                                class="fas fa-arrow-right"></i>
                                        </div>
                                        <small class="pt-2">Enter pincode for exact delivery dates / charges and to know
                                            if express delivery is available</small>
                                    </div>
                                    <div class="mt-4 pincode-store df-row-ss">
                                        <img src="<?php echo e(asset('assets/image/shop.png')); ?>" alt="" class="shop-icon">

                                        <div class="">
                                            <a href="#">
                                                <p class="pincode-text"><strong>Check Availability at Stores</strong>
                                                </p>
                                            </a>
                                            <p class="pincode-text-1">CLICK HERE</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-7 border-right mt-4">

                                    <div class="p-3 delivery-div">
                                        <p class="m-0">Offers on the product</p>
                                        <div class="w-100 df-row-ss">
                                            <div class="mr-2">
                                                <i class="fas fa-tag"></i>
                                            </div>
                                            <div class="w-100">
                                                <p class="m-0">Coupon Code: AWESOME10</p>
                                                <p class="m-0">Get 10% off on minimum order of Rs 500 (max discount Rs
                                                    75). View Terms.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="w-100 df-row-cc">

                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('assets/image/box.png')); ?>" alt=""
                                                        class="delivery-icon">
                                                    <span class="delivery-span">In Stock</span>
                                                </div>
                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('assets/image/delivery-man.png')); ?>" alt=""
                                                        class="delivery-icon">
                                                    <span class="delivery-span">Guaranteed Services</span>
                                                </div>

                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('assets/image/international.png')); ?>" alt=""
                                                        class="delivery-icon">

                                                    <span class="delivery-span">International Shipping</span>
                                                </div>
                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('assets/image/delivery.png')); ?>" alt=""
                                                        class="delivery-icon">
                                                    <span class="delivery-span">Free Home Delivery</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-block">
                                <span class="price-new">???200</span>
                                <del class="price-old">???200</del> <br>
                                <small>inclusive all taxes</small>
                            </div> -->

                            <!-- <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="">(1 Reviews)</a> <span>|</span>
                                    <a href="">Write a review</a>
                                </div>
                            </div> -->
                            <!-- <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust
                                    with ruffles at the bottom of the
                                    dress.</p>
                            </article> -->
                            <div>

                            </div>
                            <!-- <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Qty</span>
                                    <input type="number" id="quantity" name="quantity" min="1" max="5">
                                    
                                </div>
                                <div class="add-cart-btn">
                                    <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to
                                        Cart</a>
                                </div>
                            </div> -->
                            <!-- <div class="compare-wishlist-row">
                                <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                            </div> -->
                        </div>
                    </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <div class="widget-social-share">
                            <span class="widget-label">Share:</span>
                            <div class="modal-social-share">
                                <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Brands Slider
    ===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Buy Books by Publisher & Author</h2>
            </div>

            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-1.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-2.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-3.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-4.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-5.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-6.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-1.jpg')); ?>" alt="">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/others/brand-2.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
    ===================================== -->
    <?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\albamart_admin\resources\views/webpages/index.blade.php ENDPATH**/ ?>