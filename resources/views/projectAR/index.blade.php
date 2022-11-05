<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accounting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('theme/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('theme/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .imgP{
      width: 70%;
    }
  </style>
</head>

<body dir="rtl">

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">passelhamed50@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>01097708229</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>تركي العتيبي<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">المكتب</a></li>
          <li><a href="#about">تعريف لنا</a></li>
          <li><a href="#services">خدماتنا</a></li>
          <li><a href="#team">فريق العمل</a></li>
          <li><a href="#Map-Office">خريطه المكتب</a></li>
          <li><a href="#contact">تواصل معنا</a></li>
            <li><a href="/">English</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2 class="text-center">مرحبًا بك <span> في مكتبي</span></h2>
          <p class="text-center">هذا المكتب يحتوي علي جميع الخدمات المحاسبيه</p>
          <div class="d-flex justify-content-center justify-content-lg-center">
            <a href="#about" class="btn-get-started">البدء</a>
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>شاهد الفيديو</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('theme/img/clients/ezgif.com-gif-maker.webp') }}" class="img-fluid imgP" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="#contact" class="stretched-link">تواصل معنا</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">خدماتنا</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#Map-Office" class="stretched-link">خريطه المكتب</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="#team" class="stretched-link">فريق المكتب</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header mb-4">
          <h2>من نحن!؟</h2>
          <p>مكتب تركي العتيبي . . . محاسبون ومراجعون قانونيون</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7">
            <div class="content ps-0 ps-lg-5">
              <h4 class="fst-italic mb-3">
                المكتب يقوم علي ترسيخ العلاقه بيننا وبين عملائنا
              </h4>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><h3>الالتزام بمبادئ المهنه (الصدق-الامانه-النزاهه)</h3></li>
                <li><i class="bi bi-check-circle-fill"></i><h3>الدقه : العمل طبقا لقوانين المهنه والقوانين والنظم المهنيه</h3></li>
                <li><i class="bi bi-check-circle-fill"></i><h3>المحافظه علي اسرار العملاء والعمل والمهنه</h3></li>
                <li><i class="bi bi-check-circle-fill"></i><h3>التميز وجوده العمل</h3></li>
              </ul>
              <h4>
                  {{-- // --}}
              </h4>
            </div>
          </div>
          <div class="col-lg-5">
            <img src="{{ asset('theme/img/clients/ezgif.com-gif-maker.webp') }}" class="img-fluid imgP" alt="" data-aos="zoom-out" data-aos-delay="100">
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('theme/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section --> 

    <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('theme/img/stats-img.svg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section --> --}}

    <!-- ======= Call To Action Section ======= -->
    {{-- <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- End Call To Action Section --> --}}

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الخدمات التي نقدمها</h2>
          <p>في مكتب تركي العتيبي نقدم الخدمات التاليه </p>
        </div>

        <div class="row gy-4 accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="{{ asset('download.jpg') }}">
              </div>
              <h3>مراجعه وتدقيق</h3>
              <p>خدمه المراجعه والتدقيق طبقا لمعايير المراجعه المعتمده</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  خدمه المراجعه والتدقيق طبقا لمعايير المراجعه المعتمده من هيئه المحاسبين السعوديه ويقوم بها محاسب قانوني معتمد ويتم امداد تقرير مراجع يوضح ما اذا كانت القوائم الماليه تعرض بشكل عادل من جميع الجوانب الجوهريه
                </div>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top w-100 mb-3" src="{{ asset('download (10).jpg') }}">
              </div>
              <h3>زكاة وضرائب</h3>
              <p>قسم متخصص في تقديم المشوره والتوجيه السليم وفقا لقاونين الهيئات والمؤسسات</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - تقديم اقرار الزكاة الشرعي<br>- تقديم اقرار ضريبه القيمه المضافه<br>- ضريبه السفر<br>- الاستقطاع القريب<br>- ضريبه التصرفات العقاريه<br>- تقديم الاعتراضات علي مستوي اللجان المتخصصه والاستئناف علي الاقمام لدي الجهات القضائيه
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="{{ asset('download (1).jpg') }}">
              </div>
              <h3>مسك الدفاتر المحاسبيه</h3>
              <p>المكتب يقوم بخدمه مسك الدفاتر المحاسبيه ويقوم بالتالي..</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - مراجعه ادخال القوائم المحاسبيه<br>- تقديم كشوف حسابات دقيقه ومراجعه موثوقه<br>- تجهيز القوائم والتقارير الماليه اللازمه بشكل دوري<br>- تجهيز قيود الاقفال والتدخير وفقا للسياسات والاجراءات الماليه<br>- تقديم التقارير الدوريه(الشهريه-السنويه-ربع سنويه-نصف سنويه)
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="{{ asset('download (8).jpg') }}">
              </div>
              <h3>استشارات ماليه واداريه</h3>
              <p>قسم مخصص فريق عمل مدرب يقوم بالاتي</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - الاستشارات الماليه والاداريه لاعاده الشكل التنظيمي<br>- الاستشارات في المجالات الحكوميه<br>- الاستشارات المنطقيه بحساب الشهره والاندماج والانفصال<br>- جميع الاستشارات الماليه والاداريه
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="{{ asset('برنامج-محاسبة-مفتوح-المصدر-access.webp') }}">
              </div>
              <h3>المحاسبه القضائيه</h3>
              <p>نقوم بخدمه المحاسبه القضائيه وتقديم تقرير للجهاد القضائيه</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  خدمه المحاسبه القضائيه وتقديم تقرير للجهاد القضائيه ولكل الجهات الحكوميه وشركات التأمين والمصارف
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="{{ asset('9485.jpg_wh300.jpg') }}">
              </div>
              <h3>تاسيس الشركات</h3>
              <p>مكتب تركي العتيبي يقوم بتاسيس جميع انواع الشركات</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                اقرا المزيد<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  يقوم المكتب بتاسيس الشركات بانواعها وتصفيه الشركات والتخارج منها
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('theme/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('theme/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('theme/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('theme/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('theme/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item --> --}}

          {{-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/app-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/product-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/books-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/app-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/product-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/books-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/app-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/product-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('theme/img/portfolio/books-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الفريق الذي يعمل معنا</h2>
          <p>هذا هو الفريق الذي يعمل في المكتب</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('theme/img/team/blank-profile-picture-973460_1280.webp') }}" class="img-fluid" alt="">
              <h4>قسم المسؤل</h4>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('theme/img/team/blank-profile-picture-973460_1280.webp') }}" class="img-fluid" alt="">
              <h4>قسم ألمراجعين</h4>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('theme/img/team/blank-profile-picture-973460_1280.webp') }}" class="img-fluid" alt="">
              <h4>قسم المحاسبين</h4>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('theme/img/team/blank-profile-picture-973460_1280.webp') }}" class="img-fluid" alt="">
              <h4>قسم اداره الدعم والمسانده</h4>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الاسعار والعروض</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="Map-Office" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>مكان المكتب </h2>
          <p>مكان المكتب علي الخريطه في السعوديه (الطائف)</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.701647565732!2d40.41822848523209!3d21.283274385861038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e9893bfd81ec53%3A0x868bc626c9601ee1!2z2K7Zitin2Lcg2LHZitiq2LQg2YXYp9mGINmE2YTYrtmK2KfYt9ipINin2YTYsdis2KfZhNmK2Kk!5e0!3m2!1sar!2seg!4v1663528114837!5m2!1sar!2seg" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
          </div>
        </div>
      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>تواصل معنا</h2>
          <p>يمكنك التواصل معنا وارسال لنا ايميل خاص به جميع خدماتك التي تريدها وسوف نتواص معك</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>الموقع:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>البريد الاكتروني:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>تلفون المكتب:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>ساعات فتح المكتب:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="shadow p-4 border-3 col-lg-8">
            <form action="/mail" method="post">
              @csrf
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                      {{ Session::get('error') }}
                    </div>
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">
                      {{ Session::get('success') }}
                    </div>
                @endif

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="اسمك">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="بريدك الاكتروني">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" value="{{ old('subject') }}" class="form-control" name="subject" id="subject" placeholder="اسم الشركه">
                  @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" value="{{ old('message') }}" name="message" rows="7" placeholder="الرساله"></textarea>
                  @error('message')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-outline-success btn-lg mt-4">Send Mail</button>
                </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a class="logo d-flex align-items-center mb-5">
            <span>مكتب تركي العتيبي</span>
          </a>
          <div class="social-links d-flex mt-5">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>تركي العتيبي</h4>
          <ul>
            <li><a href="#hero">المكتب</a></li>
            <li><a href="#about">تعريف لنا</a></li>
            <li><a href="#services">خدماتنا</a></li>
            <li><a href="#team">فريق العمل</a></li>
            <li><a href="#Map-Office">خريطه المكتب</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>خدماتنا</h4>
          <ul>
            <li><a id="service1">مراجعه وتدقيق</a></li>
            <li><a id="service2">زكاة وضرائب</a></li>
            <li><a id="service3">مسك الدفاتر المحاسبيه</a></li>
            <li><a id="service4">استشارات ماليه واداريه</a></li>
            <li><a id="service5">المحاسبه القضائيه</a></li>
            <li><a id="service6">تاسيس الشركات</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>تواصل معنا</h4>
          <p>
            A108 Adam Street <br>
            EGYPT, NY 535022<br>
            CAIRO <br><br>
            <strong>Phone:</strong>01097708229<br>
            <strong>Email:</strong> passelhamed@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('theme/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('theme/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('theme/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('theme/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('theme/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('theme/vendor/php-email-form/validate.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('theme/js/main.js') }}"></script>

  <script>
    document.getElementById("service1").onclick = function() {myFunction1()};

    function myFunction1() {
      Swal.fire('خدمه المراجعه والتدقيق طبقا لمعايير المراجعه المعتمده من هيئه المحاسبين السعوديه ويقوم بها محاسب قانوني معتمد ويتم امداد تقرير مراجع يوضح ما اذا كانت القوائم الماليه تعرض بشكل عادل من جميع الجوانب الجوهريه');
    }

    document.getElementById("service2").onclick = function() {myFunction2()};

    function myFunction2() {
      Swal.fire('- تقديم اقرار الزكاة الشرعي<br>- تقديم اقرار ضريبه القيمه المضافه<br>- ضريبه السفر<br>- الاستقطاع القريب<br>- ضريبه التصرفات العقاريه<br>- تقديم الاعتراضات علي مستوي اللجان المتخصصه والاستئناف علي الاقمام لدي الجهات القضائيه');
    }

    document.getElementById("service3").onclick = function() {myFunction3()};

    function myFunction3() {
      Swal.fire('- مراجعه ادخال القوائم المحاسبيه<br>- تقديم كشوف حسابات دقيقه ومراجعه موثوقه<br>- تجهيز القوائم والتقارير الماليه اللازمه بشكل دوري<br>- تجهيز قيود الاقفال والتدخير وفقا للسياسات والاجراءات الماليه<br>- تقديم التقارير الدوريه(الشهريه-السنويه-ربع سنويه-نصف سنويه)');
    }

    document.getElementById("service4").onclick = function() {myFunction4()};

    function myFunction4() {
      Swal.fire('- الاستشارات الماليه والاداريه لاعاده الشكل التنظيمي<br>- الاستشارات في المجالات الحكوميه<br>- الاستشارات المنطقيه بحساب الشهره والاندماج والانفصال<br>- جميع الاستشارات الماليه والاداريه');
    }

    document.getElementById("service5").onclick = function() {myFunction5()};

    function myFunction5() {
      Swal.fire('خدمه المحاسبه القضائيه وتقديم تقرير للجهاد القضائيه ولكل الجهات الحكوميه وشركات التأمين والمصارف');
    }

    document.getElementById("service6").onclick = function() {myFunction6()};

    function myFunction6() {
      Swal.fire('يقوم المكتب بتاسيس الشركات بانواعها وتصفيه الشركات والتخارج منها');
    }
    </script>

</body>

</html>