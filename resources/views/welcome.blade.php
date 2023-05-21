@extends('layouts.app')

@section('content')
    <div class="body-container margin-top-afternav">
        <div class="search-div">
            <form class="form">
                <div class="form-group">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" id="typed" class="searc_product_index">
                </div>
            </form>
        </div>
        <div class="wrap-cont">
            <div class="cont-land body-image-cont-land">
                <div class="welcome-m-1">
                    <span>Hi There !</span>
                </div>
                <div class="welcome-m-2">
                    <h1>Enjoy Your Online Shopping Experience</h1>
                </div>
                <div class="welcome-m-3">
                    <span>Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, libero. ipsum dolor sit amet consectetur adipisicing elit. Voluptate impedit officia nisi vitae eum optio temporibus neque eos quaerat? Sed vel molestiae libero perferendis tempore possimus maxime ullam, saepe num... 
                    <button id="viewmore">View More</button></span>
                </div>
                <div class="welcome-m-4">
                    <button id="shopnow">Shop Now</button>
                    <button id="signinbtn">Sign In</button>
                </div>
            </div>
            <div class="cont-land body-image-cont-image">
                <img src="{{ asset('image/logo2.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="body-container newest-prod-cont">
        <div class="new-prod-title">
            <h1>Halsey's New Arrivals</h1>
        </div>
        <div class="new-prod-body">
            <div class="grid-new-arrival">
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/tshirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/tshirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor.</p>
                            <span>$1000.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/tshirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/tshirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor.</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-new-arrival">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirt2.png') }}" alt="">
                    </div>
                    <div class="tshirt-footer">
                        <div>
                            <p>Lorem, ipsum dolor asd</p>
                            <span>$500.50</span>
                        </div>
                        <div>
                            <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-container about-cont">
        <div class="wrap-cont">
            <div class="cont-about body-about-cont-image">
                <img src="{{ asset('image/logo2.png') }}" alt="">
            </div>
            <div class="cont-about body-about-cont-about">
                <div class="about-m-1">
                    <span>About Us</span>
                </div>
                <div class="about-m-2">
                    <h1>Thank You For Shopping.</h1>
                    <h3>Halsey.Preloaved</h3>
                </div>
                <div class="about-m-3">
                    <span>Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, libero. ipsum dolor sit amet consectetur adipisicing elit. Voluptate impedit officia nisi vitae eum optio temporibus neque eos quaerat? Sed vel molestiae libero perferendis tempore possimus maxime ullam, saepe num... </span>
                </div>
                <div class="about-m-4">
                    <button id="readmore">Read More</button>
                </div>
            </div>
        </div>
    </div>
@endsection