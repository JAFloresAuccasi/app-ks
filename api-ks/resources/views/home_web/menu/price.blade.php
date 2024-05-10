@extends('home_web.layouts.templates')
@include('home_web.layouts.header')
<section class="wrapper bg-gradient-primary" style="
background: linear-gradient(180deg, #57578f, rgb(255 255 255 / 0%) 100%);
">
    <div class="container pt-10 pt-md-14">
      <div class="row gx-2 gy-10 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Create a powerful but effortless website for <br /><span class="typer text-primary text-nowrap" data-delay="100" data-delim=":" data-words="your business.:your portfolio.:your startup.:digital marketing."></span><span class="cursor text-primary" data-owner="typer"></span></h1>
          <p class="lead fs-23 mb-7">Build your website in minutes with the help of countless amazing features of Sandbox.</p>
          <div class="d-flex justify-content-center justify-content-lg-start mb-4" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a class="btn btn-lg btn-primary rounded-pill me-2 scroll" href="#demos">Check Demos</a></span>
          </div>
        </div>
        <!-- /column -->
        <div class="col-lg-6 ms-auto position-relative">
          <div class="row g-4">
            <div class="col-4 d-flex flex-column ms-auto" data-cues="fadeIn" data-group="col-start" data-delay="900">
              <div class="ms-auto mt-6"><img class="img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc1.jpg')}}" srcset="img/demos/vc1@2x.jpg 2x" alt="" /></div>
              <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc2.jpg')}}" srcset="img/demos/vc2@2x.jpg 2x" alt="" /></div>
              <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc3.jpg')}}" srcset="img/demos/vc3@2x.jpg 2x" alt="" /></div>
            </div>
            <!-- /column -->
            <div class="col-4" data-cues="fadeIn" data-group="col-middle">
              <div><img class="w-100 img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc4.jpg')}}" srcset="img/demos/vc4@2x.jpg 2x" alt="" /></div>
              <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc5.jpg')}}" srcset="img/demos/vc5@2x.jpg 2x" alt="" /></div>
              <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc6.jpg')}}" srcset="img/demos/vc6@2x.jpg 2x" alt="" /></div>
            </div>
            <!-- /column -->
            <div class="col-4 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
              <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc7.jpg')}}" srcset="img/demos/vc7@2x.jpg 2x" alt="" /></div>
              <div class="mt-4 mb-10"><img class="img-fluid rounded shadow-lg" src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc8.jpg')}}" srcset="img/demos/vc8@2x.jpg 2x" alt="" /></div>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="position-relative mt-n20 mb-20" data-cue="fadeIn" data-delay="1800">
            <div class="btn btn-circle btn-yellow disabled ripple position-absolute counter-wrapper flex-column d-none d-md-flex" style="bottom: 0; right: -8%; width: 120px; height: 120px;">
              <h3 class="text-white mt-n1 mb-0">su</h3>
              <p class="fs-14">Precio de descuento</p>
            </div>
          </div>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light wrapper-border">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
          <h2 class="fs-20 text-uppercase text-danger mb-3">Precios</h2>
          <h3 class="display-6 mb-15 mb-md-6 px-lg-10">Ten tu anuncio mejor posicionado, de esta manera se elevará la taza de clientes en tu ciudad.</h3>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="pricing-wrapper position-relative">
        <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem; transform: translate3d(0px, -3px, 0px);"></div>
        <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem; transform: translate3d(0px, 19px, 0px);"></div>
        <div class="row gy-6 mt-3 mt-md-5">
          <div class="col-md-6 col-lg-4">
            <div class="pricing card text-center">
              <div class="card-body">
                <img src="img/icons/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                <h4 class="card-title">Basic Plan</h4>
                <div class="prices text-dark">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">month</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">year</span></div>
                </div>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                  <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                  <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                  <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                  <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                  <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4 popular">
            <div class="pricing card text-center">
              <div class="card-body">
                <img src="img/icons/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                <h4 class="card-title">Premium Plan</h4>
                <div class="prices text-dark">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">month</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">year</span></div>
                </div>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                  <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                  <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                  <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                  <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                  <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
            <div class="pricing card text-center">
              <div class="card-body">
                <img src="img/icons/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="">
                <h4 class="card-title">Corporate Plan</h4>
                <div class="prices text-dark">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">month</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">year</span></div>
                </div>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                  <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                  <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                  <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                  <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                  <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
  </section>
@include('home_web.layouts.footer')