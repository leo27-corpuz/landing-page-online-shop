@extends('layouts.app')

@section('content')
   
    <div class="banner-shop">
        <div class="banner-images">
           <div class="img-slide">
                <img src="{{ asset('image/b6.jpg') }}" alt="" id="imageslide">
                <input type="hidden" class="imghide" name="imghide[]" value="http://127.0.0.1:8000/image/b2.jpg">
                <input type="hidden" class="imghide" name="imghide[]" value="http://127.0.0.1:8000/image/b1.jpg">
                <input type="hidden" class="imghide" name="imghide[]" value="http://127.0.0.1:8000/image/b3.jpg">
                <input type="hidden" class="imghide" name="imghide[]" value="http://127.0.0.1:8000/image/b4.jpg">
                <input type="hidden" class="imghide" name="imghide[]" value="http://127.0.0.1:8000/image/b6.jpg">
           </div>
        </div>
    </div>
    <div class="body-container shop-search">
        <div class="search-shop">
            <form class="form-shop">
                <div class="form-group-shop">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="searc_product_index" placeholder="Search Product">
                </div>
            </form>
        </div>
    </div>
    <div class="body-container shop-cont">
        <div class="shop-category">
           <div class="ul-cat">
                <div class="shop-cat-tit">
                    <h3>Categories</h3>
                </div>
                <hr>
                <div class="li-cat">
                    <a class="activecat" href="">New Arrival</a>
                    <a class="notactivecat" href="">Top</a>
                    <a class="notactivecat" href="">For Mens</a>
                    <a class="notactivecat" href="">For Womens</a>
                    <a class="notactivecat" href="">For Kids</a>
                </div>
           </div>
        </div>
        <div class="shop-list">
            <div class="grid-shop-list">
                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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

                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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

                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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

                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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

                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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

                <div class="col-shop-list">
                    <div class="img-shirt">
                        <img src="{{ asset('image/shirtgirl.png') }}" alt="">
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
            </div>
        </div>
    </div>
@endsection
