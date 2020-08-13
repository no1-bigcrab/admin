<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travalers &mdash; Big Crab Blog About</title>

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

        <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light">About Travelers</h1>
                        <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span
                                class="text-white">About</span></div>

                    </div>
                </div>
            </div>
        </div>

        @include("layout.about.company")



        @include("layout.about.content")

        <div class="site-section block-13 bg-light">

            @include("layout.about.experience")

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