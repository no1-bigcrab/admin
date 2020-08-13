<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travalers &mdash; Colorlib Website Template</title>
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
                        <h1 class="text-white font-weight-light">Get In Touch</h1>
                        <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span
                                class="text-white">Contact</span></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">

                    @include("layout.contact.form-contact")
                    @include("layout.contact.information")

                </div>
            </div>
        </div>

        @include("assets.footer")
    </div>

    @include("assets.script")

</body>

</html>