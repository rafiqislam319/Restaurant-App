<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">

            <div class="owl-menu-item owl-carousel">
                @foreach ($allFoods as $allFood )
                <form action="{{ url('add/cart', $allFood->id) }}" method="post">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('/images/{{$allFood->image}}'); background-position: center center; background-size: cover;" class='card'> <!-- this will keep the image style same type but if we use img tag image style will be changed -->
                            <!-- <img src="{{ asset('images/' . $allFood->image) }}" alt="image"> -->
                            <div class="price">
                                <h6>${{ $allFood->price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $allFood->title }}</h1>
                                <p class='description'>{{ $allFood->description }}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <input type="number" name="quantity" min="1" value="1" style="width: 80px;" class="bg-secondary text-white">
                        <input type="submit" value="Add to Cart" class="bg-success text-white">
                    </div>
                </form>
                @endforeach
            </div>



        </div>
    </div>
</section>