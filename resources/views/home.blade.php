@extends('frontend.master')

@section('body')
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>Welcome to BdFC Cafe, where great food and good times come together. Our restaurant is a family-owned business located in the heart of the city, serving delicious food inspired by Bangladeshi and international cuisines. <br><br>We also offer catering services for events and parties, so whether you're planning a wedding, corporate event, or private party, BdFC Cafe can provide delicious food that will impress your guests..</p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/about-thumb-01.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-02.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.food')
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
@include('frontend.chefs')
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Reservation Us Area Starts ***** -->
@include('frontend.reservation')
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Special Week</h6>
                    <h2>This Week’s Special Meal Offers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                        <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Fresh Chicken Salad is a delicious and healthy dish made with tender chicken, crisp vegetables, and a flavorful dressing.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Orange juice is a refreshing beverage made from freshly squeezed oranges.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Fruit salad is a healthy and delicious dish made with a variety of fresh fruits.</p>
                                                        <div class="price">
                                                            <h6>$9.90</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Egg omelette: whisked eggs cooked with fillings.</p>
                                                        <div class="price">
                                                            <h6>$6.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Is a delicious breakfast food specially for good nutritions</p>
                                                        <div class="price">
                                                            <h6>$5.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Omelette and cheese is a popular breakfast dish made by whisking eggs, cooking them with cheese.</p>
                                                        <div class="price">
                                                            <h6>$4.10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$18</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$22</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$30</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$18</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$9</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$11</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection