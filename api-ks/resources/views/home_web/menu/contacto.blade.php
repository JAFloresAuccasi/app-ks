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
        <div class="col-xl-10 mx-auto">
          <div class="row gy-10 gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
              <form class="contact-form" method="post" action="php/contact.php" novalidate="true">
                <div class="messages"></div>
                <div class="controls">
                  <div class="row gx-4">
                    <div class="col-md-6">
                      <div class="form-label-group mb-4">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required="required" data-error="Nombre requerido.">
                        <label for="form_name">Nombre</label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                      <div class="form-label-group mb-4">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="required" data-error="Email requerido">
                        <label for="form_email">Email</label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                      <div class="form-label-group mb-4">
                        <input id="form_lastname" type="text" name="asunto" class="form-control" placeholder="asunto" required="required" data-error="Asunto requerido.">
                        <label for="form_lastname">Asunto</label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group mb-4">
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Your phone number">
                        <label for="form_phone">Teléfono
                        </label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <!-- /column -->
                    <!-- /column -->
                    <div class="col-12">
                      <div class="form-label-group mb-4">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="5" required="required" data-error="El mensaje es obligatorio."></textarea>
                        <label for="form_message">Mensaje </label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Enviar mensaje">
                      <p class="text-muted"><strong>*</strong>Todos los campos son obligatorios.</p>
                    </div>
                    <!-- /column -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.controls -->
              </form>
              <!-- /form -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
              <div class="d-flex flex-row">
                <div>
                  <h3 class="mb-2">Contactanos</h3>
                  <address>Envíanos tus datos de usuario y en breve te responderemos</address>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Phone</h5>
                  <p>00 (123) 456 78 90 <br class="d-none d-md-block">00 (987) 654 32 10</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:sandbox@email.com" class="text-body">sandbox@email.com</a></p>
                  <p><a href="mailto:help@sandbox.com" class="text-body">help@sandbox.com</a></p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@include('home_web.layouts.footer')