
<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Azency - Creative Marketing Agency & eCommerce HTML Template</title>
	<meta name="keywords" content="marketing, digital, shop, ecommerce" />
    <meta name="description" content="Creative Marketing Agency & eCommerce HTML Template">

	<link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="16x16">
	<link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="18x18">
	<link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="20x20">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/shop.responsive.css')}}">

	<!-- index-3 css -->
	<link rel="stylesheet" href="{{asset('assets/css/index-4.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/shop.css')}}">

</head>
<body class="home-4 shop">
	<!-- Preeloader -->
	<div id="loading">
	    <div id="loading-center">
	        <div id="loading-center-absolute">
	            <div class="object" id="object_one"></div>
	            <div class="object" id="object_two"></div>
	            <div class="object" id="object_three"></div>
	            <div class="object" id="object_four"></div>
	            <div class="object" id="object_five"></div>
	        </div>
	    </div>
	</div>
	<!-- Click Sarch bar -->
	<div class="common-overlay"></div>
	<!-- Preeloader -->
	<!-- Start Header Area -->
	<header>
		<div class="header-top-v4 header-shop-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-3">
						<div class="top-bar-left">
							<ul class="shop">
								<li><a href="#">about us</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Wish List</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-3">
						<div class="text-center">
                                <div id="news-flash" class="d-inline-block">
                                    <ul>     
                                    	<li>100% Secure delivery without contacting the courier</li>
                                    </ul>
                                </div>
                            </div>
					</div>
					<div class="col-lg-4 col-md-3  text-right">

						<div class="menu">
							<nav>
								<ul>
									<li><a href="#">English <i class="icofont-simple-down"></i></a>
										<ul>
											<li><a href="#">Français</a></li>
											<li><a href="#">Deutsch</a></li>
											<li><a href="#">Pусский</a></li>
										</ul>
									</li>
									<li><a href="services.html">USD <i class="icofont-simple-down"></i></a>
										<ul>
											<li><a href="#">INR</a></li>
											<li><a href="#">MBP</a></li>
											<li><a href="#">EU</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class=" header-menu-4 header sticky-header ">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="col-lg-2 align-self-center">
						<div class="logo">
							<a href="shop.html">
								<img src="{{asset('assets/img/white-logo.png')}}" alt="logo">
							</a>
						</div>
						<div class="canvas_open">
					        <a href="javascript:void(0)">
					        	<span></span>
					        	<span></span>
					        	<span></span>
					        </a>
					    </div>
					</div>
					<!-- Menu -->
					<div class="col-lg-6 ">
						<!-- Menu -->
						<div class="shop-search-style">
							<select  id="selectcat">
								<option value="0">All Category</option>
								<option value="1">Digital Products</option>
								<option value="2">Downloadable Products</option>
								<option value="3">Physical Products</option>
							</select>
							<input type="search" placeholder="Search items here....."><i class="fas fa-search"></i>
						</div>
					</div>
					<div class="col-lg-4 text-right">
						<div class="shop-menu-right">
							<ul>
								<li class="wishlist"><a href="#"><i class="far fa-heart"></i>Wishlist</a></li>
								<li class="cart"><a href="cart.html"><i class="fas fa-cart-plus"></i>Cart</a>
									<div class="cart-dropdown-wrap cart-dropdown-hm2">
											<ul>
												<li>
													<div class="shopping-cart-img">
														<a href="single-product.html"><img alt="AzecnyShop" src="{{asset('assets/img/shop/headphone1.png')}}"></a>
													</div>
													<div class="shopping-cart-title">
														<h4><a href="single-product.html">Smart Headphone</a></h4>
														<h4><span>1 × </span>$80.00</h4>
													</div>
													<div class="shopping-cart-delete">
														<a href="#"><i class="fas fa-times"></i></a>
													</div>
												</li>
												<li>
													<div class="shopping-cart-img">
														<a href="single-product.html"><img alt="AzecnyShop" src="{{asset('assets/img/shop/headphone2.png')}}"></a>
													</div>
													<div class="shopping-cart-title">
														<h4><a href="single-product.html">Corduroy Shirts</a></h4>
														<h4><span>1 × </span>$300.00</h4>
													</div>
													<div class="shopping-cart-delete">
														<a href="#"><i class="fas fa-times"></i></a>
													</div>
												</li>
											</ul>
											<div class="shopping-cart-footer">
												<div class="shopping-cart-total">
													<h4>Total <span>$380.00</span></h4>
												</div>
												<div class="shopping-cart-button">
													<a href="cart.html" class="outline">View cart</a>
													<a href="checkout.html">Checkout</a>
												</div>
											</div>
										</div>
								</li>
								<li class="account"><a href="#"><i class="far fa-user"></i>Account</a>
									<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
										<ul>
											<li><a href="#"><i class="far fa-user mr-10"></i>My Account</a></li>
											<li><a href="#"><i class="fas fa-map-marker-alt mr-10"></i>Order Tracking</a></li>
											<li><a href="#"><i class="fas fa-ribbon mr-10"></i>My Voucher</a></li>
											<li><a href="#"><i class="fas fa-heart mr-10"></i>My Wishlist</a></li>
											<li><a href="#"><i class="fas fa-sliders-h mr-10"></i>Setting</a></li>
											<li><a href="#"><i class="fas fa-sign-out-alt mr-10"></i>Sign out</a></li>
										</ul>											
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom header-style-1 header-bottom-bg-color">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="header-nav d-none d-lg-flex">
                        	<div class="main-categori-wrap d-none d-lg-block">
                                <a class="categories-button-active open" href="#">
                                    <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/category-1.svg')}}" alt="">Electronics</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/category-2.svg')}}" alt="">Computer</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/category-3.svg')}}" alt="">Mobile & Smartphone</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/category-4.svg')}}" alt="">Headphone</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/category-5.svg')}}" alt="">Charger</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more_slide_open" style="display: none">
                                        <div class="d-flex categori-dropdown-inner">
                                            <ul>
                                                <li>
                                                    <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/icon-1.svg')}}" alt="">Television</a>
                                                </li>
                                                <li>
                                                    <a href="single-product.html"> <img src="{{asset('assets/imgs/theme/icons/icon-2.svg')}}" alt="">Refregerator</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                                </div>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="active" href="index.html">Home <i class="icofont-simple-down"></i></a>
                                            <ul class="sub-menu">
												<li><a href="index.html">Seo Agency</a></li>
												<li><a href="index6.html">Seo Agency Dark</a></li>
												<li><a href="index2.html">Sass Agency</a></li>
												<li><a href="index7.html">Sass Agency Dark</a></li>
												<li><a href="index3.html">Marketing Agency</a></li>
												<li><a href="index8.html">Marketing Agency Dark</a></li>
												<li><a href="index4.html">Digital Agency</a></li>
												<li><a href="index5.html">Digital Agency dark</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Services<i class="icofont-simple-down"></i></a>
                                            <ul class="sub-menu">
												<li><a href="services.html">Services-V1</a></li>
												<li><a href="services-2.html">Services-V2</a></li>
												<li><a href="service-3.html">Services-V3</a></li>
												<li><a href="services-details.html">Services Details-V1</a></li>
												<li><a href="services-details-2.html">Services Details-V2</a></li>
                                            </ul>
                                        </li>
										<li><a href="portfolio.html">Project <i class="icofont-simple-down"></i></a>
											<ul class="sub-menu">
												<li><a href="portfolio.html">Project</a></li>
												<li><a href="portfolio-details.html">Project Details</a></li>
											</ul>
										</li>
                                        <li>
                                            <a href="blog.html">Blog <i class="icofont-simple-down"></i></a>
                                            <ul class="sub-menu">
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages <i class="icofont-simple-down"></i></a>
                                            <ul class="sub-menu">
												<li><a href="about.html">About Us </a></li>
												<li><a href="team.html">Team </a></li>
												<li><a href="team-details.html">Team Details</a></li>
												<li><a href="testimonials.html">Testimonials</a></li>
												<li><a href="pricingplan.html">pricing & Plan</a></li>
												<li><a href="faqs.html">Faqs</a></li>
												<li><a href="product-left-sidebar.html">products Left sidebar</a></li>
												<li><a href="products.html">products Right sidebar</a></li>
												<li><a href="products-full-width.html">products full width</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="404.html">404 Page</a></li>
												<li><a href="comming-soon.html">Comming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</header>
	<!-- End Header Area -->
	<!-- Start Mobile Menu Area -->
	<div class="mobile-menu-area">
		
		<!--offcanvas menu area start-->
	    <div class="off_canvars_overlay">
	                
	    </div>
	    <div class="offcanvas_menu">
	        <div class="offcanvas_menu_wrapper">
	            <div class="canvas_close">
	                <a href="javascript:void(0)"><i class="icofont-close-line"></i></a>  
	            </div>
	            <div class="mobile-logo text-center mb-30">
	            	<a href="index.html">
	            		<img src="{{asset('assets/img/white-logo.png')}}" alt="logo">
	            	</a>
	            </div>
	            <div id="menu" class="text-left ">
	                <ul class="offcanvas_main_menu">
	                    <li class="menu-item-has-children active">
	                        <a href="#">Home</a>
	                        <ul class="sub-menu">
								<li><a href="index.html">Seo Agency</a></li>
								<li><a href="index6.html">Seo Agency Dark</a></li>
								<li><a href="index2.html">Sass Agency</a></li>
								<li><a href="index7.html">Sass Agency Dark</a></li>
								<li><a href="index3.html">Marketing Agency</a></li>
								<li><a href="index8.html">Marketing Agency Dark</a></li>
								<li><a href="index4.html">Digital Agency</a></li>
								<li><a href="index5.html">Digital Agency dark</a></li>
	                        </ul>
	                    </li>
	                    <li class="menu-item-has-children">
	                        <a href="#">Services</a>
	                        <ul class="sub-menu">
	                        	<li><a href="services.html">Services-V1</a></li>
	                        	<li><a href="services-2.html">Services-V2</a></li>
	                        	<li><a href="service-3.html">Services-V3</a></li>
								<li><a href="services-details.html">Services Details-V1</a></li>
								<li><a href="services-details-2.html">Services Details-V2</a></li>
	                        </ul>
	                    </li>
	                    <li class="menu-item-has-children">
	                        <a href="#"> Project</a> 
	                        <ul class="sub-menu">
	                        	<li><a href="portfolio.html">Project</a></li>
								<li><a href="portfolio-details.html">Project Details</a></li>
	                        </ul>
	                    </li>
	                    <li class="menu-item-has-children">
	                        <a href="#">Page</a>
                            <ul class="sub-menu">
								<li><a href="about.html">About Us </a></li>
								<li><a href="team.html">Team </a></li>
								<li><a href="team-details.html">Team Details</a></li>
								<li><a href="testimonials.html">Testimonials</a></li>
								<li><a href="pricingplan.html">pricing & Plan</a></li>
								<li><a href="faqs.html">Faqs</a></li>
								<li><a href="products.html">products Right sidebar</a></li>
								<li><a href="products-full-width.html">products full width</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="404.html">404 Page</a></li>
								<li><a href="comming-soon.html">Comming Soon</a></li>
                            </ul>
	                    </li>
	                    <li class="menu-item-has-children">
	                        <a href="#">Blog</a>
	                        <ul class="sub-menu">
	                        	<li><a href="blog.html">Blog</a></li>
								<li><a href="single.html">Blog Details</a></li>
	                        </ul>
	                    </li>
						<li class="menu-item-has-children">
							<a href="#">Shop</a>
							<ul class="sub-menu">
								<li><a href="shop.html">shop </a></li>
								<li><a href="products.html">Products Right Sidebar </a></li>
								<li><a href="products-full-width.html">products Full Width</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout </a></li>
								<li><a href="login.html">Login</a></li>
								<li><a href="register.html">Register</a></li>
							</ul>
						</li>
	                    <li class="menu-item-has-children">
	                        <a href="contact.html">Contact </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
    </div>
    <!--offcanvas menu area end-->
	<!-- End Mobile Menu Area -->

<!-- Shop Hero area Start -->
<section class="shop-hero-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="shop-hero-items hero-slider owl-carousel">
					<div class="shop-hero-content hero-bg1">
                        <h1 class="hero-title mb-40">
                            Don’t miss amazing<br>
                            Today Offer
                        </h1>
                        <a href="products.html" class="btn shop-btn">Shop Now</a>
                        <p class="mb-65">Sign up for the daily newsletter</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Your emaill address">
                            <button class="btn" type="submit" >Subscribe</button>
                        </form>
                    </div>
					<div class="shop-hero-content hero-bg2">
                        <h1 class="hero-title mb-40">
                            Don’t miss amazing<br>
                            Today Offer
                        </h1>
                        <a href="products.html" class="btn shop-btn">Shop Now</a>
                        <p class="mb-65">Sign up for the daily newsletter</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Your emaill address">
                            <button class="btn" type="submit" >Subscribe</button>
                        </form>
                    </div>
					<div class="shop-hero-content hero-bg3">
                        <h1 class="hero-title mb-40">
                            Don’t miss amazing<br>
                            Today Offer
                        </h1>
                        <a href="products.html" class="btn shop-btn">Shop Now</a>
                        <p class="mb-65">Sign up for the daily newsletter</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Your emaill address">
                            <button class="btn" type="submit" >Subscribe</button>
                        </form>
                    </div>
					<div class="shop-hero-content hero-bg4">
                        <h1 class="hero-title mb-40">
                            Don’t miss amazing<br>
                            Today Offer
                        </h1>
                        <a href="products.html" class="btn shop-btn">Shop Now</a>
                        <p class="mb-65">Sign up for the daily newsletter</p>
                        <form class="form-subcriber d-flex">
                            <input type="email" placeholder="Your emaill address">
                            <button class="btn" type="submit" >Subscribe</button>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shop Hero area End -->

	<!-- Featured category start -->
	<section class="featured-category-area pt-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="featured-title">
						<h2 class="colum-title">Featured Categories</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 feature-cat owl-carousel">
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/headphone1.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Headphone</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/laptop4.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Laptop</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/smartphone4.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Smartphone</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/watch5.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Watch</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/charger1.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Charger</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/laptop2.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Laptop</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/charger3.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Charger</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/headphone2.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Headphone</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/smartphone3.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Samsung</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/watch1.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Watch</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/smartphone2.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Smartphone</a></h6>
                        <span>14 items</span>
                    </div>
					<div class="single-feature-items" >
                        <div class="img-hover-scale overflow-hidden">
                            <a href="shoppage-html" ><img src="{{asset('assets/img/shop/laptop3.png')}}" alt=""></a>
                        </div>
                        <h6><a href="shoppage-html">Laptop</a></h6>
                        <span>14 items</span>
                    </div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Featured category end -->

	<!-- Products Tab Start -->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Popular Products</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Electronics</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Computers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Laptop</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Smartphone</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">Smartwatch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Headphone</button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="poulartabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 ">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.5)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Vegetables</a>
                                    </div>
                                    <h2><a href="single-product.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">HeadPhone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired  Stereo Sound Headphones </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (2.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
                <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.5)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (2.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab two-->
                <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Phone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab three-->
                <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Phone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab four-->
                <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Phone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab five-->
                <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Phone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab six-->
                <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                    <div class="row product-grid-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch6.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone7.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Phone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/charger3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Charger</a>
                                    </div>
                                    <h2><a href="single-product.html">mophie Wireless Charging Stand+ Wireless Charger</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch3.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab seven-->
            </div>
            <!--End tab-content-->
        </div>
    </section>
	<!-- Products Tab End -->

	<!-- Daily Best Selling Products start -->

    <section class="product-tabs best-sells-products section-padding position-relative">
        <div class="container">
            <div class="section-title style-2">
                <h3>Today Best Sells</h3>
                <ul class="nav nav-tabs links" id="dbsell" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-feature" data-bs-toggle="tab" data-bs-target="#tab-feature" type="button" role="tab" aria-controls="tab-feature" aria-selected="true">Feature</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-popular" data-bs-toggle="tab" data-bs-target="#tab-popular" type="button" role="tab" aria-controls="tab-popular" aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-new" data-bs-toggle="tab" data-bs-target="#tab-new" type="button" role="tab" aria-controls="tab-new" aria-selected="false">New Added</button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-feature" role="tabpanel" aria-labelledby="tab-feature">
                    <div class="row product-grid-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 best-selling-slider owl-carousel">
                           <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Vegetables</a>
                                    </div>
                                    <h2><a href="single-product.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">HeadPhone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired  Stereo Sound Headphones </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (2.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one-->
                <div class="tab-pane fade" id="tab-popular" role="tabpanel" aria-labelledby="tab-popular">
                    <div class="row product-grid-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 best-selling-slider owl-carousel">
                           <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Vegetables</a>
                                    </div>
                                    <h2><a href="single-product.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">HeadPhone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired  Stereo Sound Headphones </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (2.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab two-->
                <div class="tab-pane fade" id="tab-new" role="tabpanel" aria-labelledby="tab-new">
                    <div class="row product-grid-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 best-selling-slider owl-carousel">
                           <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$35.85</span>
                                            <span class="old-price">$37.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop3.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Vegetables</a>
                                    </div>
                                    <h2><a href="single-product.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                            <span class="old-price">$19.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">HeadPhone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired  Stereo Sound Headphones </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                            <span class="old-price">$25.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                            <span class="old-price">$52.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/smartphone2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="single-product.html">
                                            <img class="default-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                            <img class="hover-img" src="{{asset('assets/img/shop/watch5.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fas fa-random"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#shopViewModal"><i class="far fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Watch</a>
                                    </div>
                                    <h2><a href="single-product.html">Donerton Smart Watch, Fitness Tracker for Android Phones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (2.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">AzecnyShop</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$22.85</span>
                                            <span class="old-price">$24.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="cart.html"><i class="fas fa-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>                    
                    <!--End product-grid-4-->
                </div>
                <!--En tab three-->
            </div>
            <!--End tab-content-->
        </div>
    </section>
	<!-- Daily Best Selling Products End -->

	<!-- trending products start -->
	<section class="section-padding trending">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-colum-items">
						<h2 class="colum-title">Top Selling</h2>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/laptop1.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Lapton</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/Laptop2.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/Laptop3.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/laptop4.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/laptop2.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Laptop</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Galaxy Chromebook Go Laptop</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-colum-items">
						<h2 class="colum-title">Trending Products</h2>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/headphone2.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/headphone3.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/headphone4.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/headphone1.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Headphone</a>
                                    </div>
                                    <h2><a href="single-product.html">bopmen T3 Wired Over Ear- Stereo Sound Headphones</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-colum-items">
						<h2 class="colum-title">Recently added</h2>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/smartphone7.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/smartphone6.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/smartphone5.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/smartphone4.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
						<div class="single-colum-item">
							<img src="{{asset('assets/img/shop/smartphone3.png')}}" alt="">
							<div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="single-product.html">Phone</a>
                                    </div>
                                    <h2><a href="single-product.html">Samsung Electronics Samsung Galaxy S21 5G Smartphone</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating">
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            	<i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$32.85</span>
                                            <span class="old-price">$33.8</span>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- trending products start -->

	<section class="call-to-action shop-hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-slider-one">
						<div class="shop-hero-items">
							<div class="shop-hero-content">
	                            <h1 class="hero-title mb-40">
	                                Start Your Daily Shopping<br>
	                                With us
	                            </h1>
	                            <p class="mb-65">Sign up for the daily newsletter</p>
	                            <form class="form-subcriber d-flex">
	                                <input type="email" placeholder="Your emaill address">
	                                <button class="btn" type="submit" >Subscribe</button>
	                            </form>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start Footer Area -->
	
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="logo mb-30">
                                    <a href="index.html" class="mb-15"><img src="{{asset('assets/img/logo.png')}}" alt="logo" /></a>
                                    <p class="font-lg text-heading">Awesome E-commerce shop Template</p>
                                </div>
                                <ul class="contact-infor">
                                    <li><i class="fas fa-map-marker-alt"></i><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                    <li><i class="fas fa-headphones-alt"></i><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    <li><i class="far fa-envelope"></i><strong>Email:</strong> info@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    <div class="footer-link-widget col ">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col " >
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col " >
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Smart Mobilephone</a></li>
                            <li><a href="#">Laptop & Computer</a></li>
                            <li><a href="#">Smart Watch</a></li>
                            <li><a href="#">Television</a></li>
                            <li><a href="#">Room Heater</a></li>
                            <li><a href="#">Water Heater</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <h4 class="widget-title">Install App</h4>
                        <p class="">From App Store or Google Play</p>
                        <div class="download-app">
                            <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="{{asset('assets/img/btn/app-store.jpg')}}" alt="" /></a>
                            <a href="#" class="hover-up mb-sm-2"><img src="{{asset('assets/img/btn/google-play.jpg')}}" alt="" /></a>
                        </div>
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class="" src="{{asset('assets/img/btn/payment-method.png')}}" alt="" />
                    </div>
                </div>
              </div>
          </section>
	<!-- End Footer Area -->
	<div class="scroll-area">
       <i class="icofont-arrow-up"></i>
    </div>
    <!-- Js File -->
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/typeit.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{asset('assets/js/vticker.js')}}"></script>
    <script src="{{asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/js/mobile-menu.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>