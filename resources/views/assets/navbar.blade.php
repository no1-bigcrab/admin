<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="" class="text-black h2 mb-0">Travelers</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block" id="menu">
                <li class="{{ Request::path()==='/' ? 'active' : '' }}">
                  <a href="/">Trang chủ</a>
                </li>
                <li class="has-children {{ Request::path()==='destination' ? 'active' : '' }}">
                  <a href="/destination">Điểm đến</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li>

                <li class="{{ Request::path()==='discount' ? 'active' : '' }}"><a href="/discount">Khuyến Mãi</a></li>
                <li class="{{ Request::path()==='about' ? 'active' : '' }}"><a href="/about">Về Chúng Tôi</a></li>
                <li class="{{ Request::path()==='blog' ? 'active' : '' }}"><a href="/blog">Blog</a></li>

                <li class="{{ Request::path()==='contact' ? 'active' : '' }}"><a href="/contact">Liên Hệ</a></li>
                <li class="{{ Request::path()==='booking' ? 'active' : '' }}"><a href="booking">Đặt Tour</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>

              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>
