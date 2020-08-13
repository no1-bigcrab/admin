<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travalers &mdash; BigCrab in Here!!!</title>

    @include("assets.header")

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include("assets.navbar")

        @include("layout.index.slideshow")

        <div class="site-section">
            <div class="container overlap-section">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="#" class="unit-1 text-center">
                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading">Write Down Your Experience</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="#" class="unit-1 text-center">
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading">Explore Asian Mountains</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="#" class="unit-1 text-center">
                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                            <div class="unit-1-text">
                                <h3 class="unit-1-heading">Safe Trip With Airasia</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
                            <div>
                                <h3>Air Ticketing</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
                            <div>
                                <h3>Cruises</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
                            <div>
                                <h3>Tour Packages</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                    vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section block-13 bg-light">

            @include("layout.index.destination")

            @include("layout.index.carouselTrave")

            <div class="site-blocks-cover overlay inner-page-cover"
                style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                            <a href="https://vimeo.com/channels/staffpicks/93951774"
                                class="play-single-big mb-4 d-inline-block popup-vimeo"><span
                                    class="icon-play"></span></a>
                            <h2 class="text-white font-weight-light mb-5 h1">Experience Our Outstanding Services</h2>

                        </div>
                    </div>
                </div>
            </div>

            @include("layout.index.ourService")

            @include("layout.index.view-blog")

            <div class="site-section border-top">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="mb-5 text-black">Want To Travel With Us?</h2>
                            <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Book
                                    Now</a></p>
                        </div>
                    </div>
                </div>
            </div>

            @include("assets.footer")

        </div>
        @include("assets.script")

</body>

</html>