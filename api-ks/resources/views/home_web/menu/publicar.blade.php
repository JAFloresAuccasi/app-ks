@extends('home_web.layouts.templates')
@include('home_web.layouts.header')
<section class="wrapper bg-gradient-primary"
    style="
background: linear-gradient(180deg, #57578f, rgb(255 255 255 / 0%) 100%);
">
    <div class="container pt-10 pt-md-14">
        <div class="row gx-2 gy-10 align-items-center">
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0"
                data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Create a powerful but effortless website for <br /><span
                        class="typer text-primary text-nowrap" data-delay="100" data-delim=":"
                        data-words="your business.:your portfolio.:your startup.:digital marketing."></span><span
                        class="cursor text-primary" data-owner="typer"></span></h1>
                <p class="lead fs-23 mb-7">Build your website in minutes with the help of countless amazing features of
                    Sandbox.</p>
                <div class="d-flex justify-content-center justify-content-lg-start mb-4" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900">
                    <span><a class="btn btn-lg btn-primary rounded-pill me-2 scroll" href="#demos">Check
                            Demos</a></span>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6 ms-auto position-relative">
                <div class="row g-4">
                    <div class="col-4 d-flex flex-column ms-auto" data-cues="fadeIn" data-group="col-start"
                        data-delay="900">
                        <div class="ms-auto mt-6"><img class="img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc1.jpg') }}"
                                srcset="img/demos/vc1@2x.jpg 2x" alt="" /></div>
                        <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc2.jpg') }}"
                                srcset="img/demos/vc2@2x.jpg 2x" alt="" /></div>
                        <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc3.jpg') }}"
                                srcset="img/demos/vc3@2x.jpg 2x" alt="" /></div>
                    </div>
                    <!-- /column -->
                    <div class="col-4" data-cues="fadeIn" data-group="col-middle">
                        <div><img class="w-100 img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc4.jpg') }}"
                                srcset="img/demos/vc4@2x.jpg 2x" alt="" /></div>
                        <div><img class="w-100 img-fluid rounded shadow-lg mt-4"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc5.jpg') }}"
                                srcset="img/demos/vc5@2x.jpg 2x" alt="" /></div>
                        <div><img class="w-100 img-fluid rounded shadow-lg mt-4"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc6.jpg') }}"
                                srcset="img/demos/vc6@2x.jpg 2x" alt="" /></div>
                    </div>
                    <!-- /column -->
                    <div class="col-4 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
                        <div class="mt-8"><img class="img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc7.jpg') }}"
                                srcset="img/demos/vc7@2x.jpg 2x" alt="" /></div>
                        <div class="mt-4 mb-10"><img class="img-fluid rounded shadow-lg"
                                src="{{ asset('Theme\sandbox\assets\dev\img\demos\vc8.jpg') }}"
                                srcset="img/demos/vc8@2x.jpg 2x" alt="" /></div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="position-relative mt-n20 mb-20" data-cue="fadeIn" data-delay="1800">
                    <div class="btn btn-circle btn-yellow disabled ripple position-absolute counter-wrapper flex-column d-none d-md-flex"
                        style="bottom: 0; right: -8%; width: 120px; height: 120px;">
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
        <div class="blog grid grid-view">
            <div class="row isotope gx-md-8 gy-8 mb-8" style="position: relative; height: 1359.25px;">
                <article class="item post col-md-6" style="position: absolute; left: 25% !important; top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Deseas publicar anuncio?</a>
                                </div>
                                <h3 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Debes
                                        crear una cuenta de usuario para poder publicar tu anuncio.</a></h3>
                            </div>
                            <div class="text-center">
                              <div class="post-content mb-3">
                                <a href="{{route('menu_login')}}"
                                class="btn btn-soft-primary rounded-pill me-1 mb-2 mb-md-0">Ya tengo una cuenta</a>
                              </div>
                              <div class="post-content">
                                <a href="{{route('menu_sign_up')}}"
                                class="btn btn-soft-primary rounded-pill me-1 mb-2 mb-md-0">Crear una nueva cuenta</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@include('home_web.layouts.footer')
