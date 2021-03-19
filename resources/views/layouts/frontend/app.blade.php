@include('layouts.frontend.header')
<body>
    <!-- Top bar Start -->
    @include('layouts.frontend.partials.topbar')
    <!-- Top bar End -->
     @include('layouts.frontend.partials.navbar')
    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('frontend')}}/img/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="wishlist.html" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>(0)</span>
                        </a>
                        <a href="cart.html" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>(0)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->

    <!-- Main Slider Start -->
    @include('layouts.frontend.partials.menu')
    <!-- Main Slider End -->
    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="{{asset('frontend')}}/img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->
    @include('layouts.frontend.partials.feature')

    @include('layouts.frontend.partials.category')
    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>call us for any queries</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:0123456789">+012-345-6789</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <!-- Featured Product Start -->
    @include('layouts.frontend.partials.featured_product')
    <!-- Featured Product End -->

    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Subscribe Our Newsletter</h1>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <input type="email" value="Your email here">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Recent Product Start -->
    @include('layouts.frontend.partials.recent')
    <!-- Recent Product End -->
    <!-- Review Start -->
    @include('layouts.frontend.partials.testimonial')
    <!-- Review End -->
    @include('layouts.frontend.footer')
