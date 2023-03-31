<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best Chefs for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($foodChefs as $foodChefs )
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <!-- <img src="assets/images/chefs-01.jpg" alt="Chef #1"> -->
                        <img style="background-image: url('/images/{{$foodChefs->image}}'); background-position: center center; background-size: cover; " class='card'>
                    </div>
                    <div class="down-content">
                        <h4>{{ $foodChefs->name }}</h4>
                        <span>{{ $foodChefs->speciality }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>