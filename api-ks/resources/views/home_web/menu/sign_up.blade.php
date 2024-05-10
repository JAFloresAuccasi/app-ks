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
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                    style="top: -2rem; left: -1.4rem; transform: translate3d(0px, -3px, 0px);"></div>
                <figure class="rounded"><img src="img/photos/about4.jpg" srcset="img/photos/about4@2x.jpg 2x"
                        alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="img/icons/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="">
                <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
                <div class="col-lg-12">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body text-center">

                            <h3 class="mb-5">Sign in</h3>

                            <form role="form" method="POST" action="{{route('save_usario')}}" accept-charset="utf-8" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" class="form-control form-control-lg" required autocomplete="disabled" />
                                    <label class="form-label" for="typeEmailX-2">nombre</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control form-control-lg" required autocomplete="disabled"/>
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" required autocomplete="disabled"/>
                                    <label class="form-label" for="typePasswordX-2">Contraseña</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password_confirmation"
                                        class="form-control form-control-lg" required autocomplete="disabled"/>
                                    <label class="form-label" for="typePasswordX-2">confirmar Contraseña</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3">&nbsp; Remember password
                                    </label>
                                </div>

                                <div class="form-check d-flex justify-content-start mb-4">
                                    <a href="{{ route('menu_login') }}" class="form-check-label"
                                        style="color:red; text-decoration: underline;" for="form1Example3">Iniciar
                                        sesión</a>
                                </div>

                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </form>

                            <hr class="my-4">

                            <button class="btn btn-primary mb-2"
                                style="background-color: #dd4b39; font-weight: 100 !important; border-color: none;"
                                type="submit"><i class="fab fa-google me-2"></i> Inicia sesión con Google</button>
                            <button class="btn btn-primary"
                                style="background-color: #3b5998; font-weight: 100 !important; border-color: none;"
                                type="submit"><i class="fab fa-facebook-f me-2"></i>Inicia sesión con
                                Facebook</button>

                        </div>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
@include('home_web.layouts.footer')