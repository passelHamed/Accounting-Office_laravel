<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accounting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('theme/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('theme/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('theme/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('theme/css/main.css')); ?>" rel="stylesheet">

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

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">passelhamed@example.com</a></i>
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
        <h1>hamed abdallah<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#Map-Office">Map Office</a></li>
          <li><a href="#contact">Contact</a></li>
            <li><a href="/ar">عربي</a></li>
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
          <h2>Welcome to <span>My Office</span></h2>
          <p>This office contains all accounting services.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="<?php echo e(asset('theme/img/clients/ezgif.com-gif-maker.webp')); ?>" class="img-fluid imgP" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="#contact" class="stretched-link">contact us</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">services</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#Map-Office" class="stretched-link">Map Office</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="#team" class="stretched-link">Our Team</a></h4>
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

        <div class="section-header">
          <h2>About Us</h2>
          <p>Turki Al-Otaibi office. . . Chartered accountants and auditors</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="<?php echo e(asset('theme/img/clients/ezgif.com-gif-maker.webp')); ?>" class="img-fluid imgP" alt="" data-aos="zoom-out" data-aos-delay="100">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                The office is based on consolidating the relationship between us and our clients
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Commitment to the principles of the profession (honesty - honesty - integrity)</li>
                <li><i class="bi bi-check-circle-fill"></i> Accuracy: working in accordance with the laws of the profession and professional laws and regulations</li>
                <li><i class="bi bi-check-circle-fill"></i> Maintaining the secrets of clients, work and profession</li>
                <li><i class="bi bi-check-circle-fill"></i> Excellence and quality of work</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    

    <!-- ======= Stats Counter Section ======= -->
    

    <!-- ======= Call To Action Section ======= -->
    

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>In Turki Al-Otaibi office, we offer the following services</p>
        </div>

        <div class="row gy-4 accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="<?php echo e(asset('download.jpg')); ?>">
              </div>
              <h3>Review and audit</h3>
              <p>Auditing and auditing services according to approved auditing standards</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  The auditing and auditing service is in accordance with the auditing standards approved by the Saudi Accountants Organization and is carried out by a certified public accountant. An audit report is provided indicating whether the financial statements are presented fairly in all material aspects.
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-4">
                <img class="card-img-top" src="<?php echo e(asset('download (10).jpg')); ?>">
              </div>
              <h3>zakat and taxes</h3>
              <p>A department specialized in providing advice and proper guidance in accordance with the law of bodies and institutions</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - Submitting the legal zakat declaration<br>- Submit a value-added tax return<br>- travel tax<br>- near deduction<br>- Real estate transaction tax<br>- Submitting objections at the level of specialized committees and appealing to the judicial authorities
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="<?php echo e(asset('download (1).jpg')); ?>">
              </div>
              <h3>Accounting bookkeeping</h3>
              <p>The office serves it by keeping the accounting books and thus..</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - Review the accounting statements entry<br>- Provide accurate and reliable audited statements of accounts<br>- Preparing the necessary financial statements and reports on a regular basis<br>- Preparing closing and saving restrictions in accordance with the financial policies and procedures<br>- Submitting periodic reports (monthly - annual - quarterly - semi-annual)
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="<?php echo e(asset('download (8).jpg')); ?>">
              </div>
              <h3>Financial and management consulting</h3>
              <p>A dedicated department, a trained team that does the following</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  - Financial and administrative advice to restore the organizational form<br>- Consulting in governmental fields<br>- Logical consultations on the calculation of goodwill, merger and separation<br>- All financial and administrative advice
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="<?php echo e(asset('برنامج-محاسبة-مفتوح-المصدر-access.webp')); ?>">
              </div>
              <h3>forensic accounting</h3>
              <p>We provide forensic accounting and report to judicial authorities</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Judicial accounting service and submitting a report to the judicial jihad and to all government agencies, insurance companies and banks
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 accordion-item">
            <div class="service-item  position-relative">
              <div class="mb-3">
                <img class="card-img-top" src="<?php echo e(asset('9485.jpg_wh300.jpg')); ?>">
              </div>
              <h3>Establishment of companies</h3>
              <p>Turki Al-Otaibi office establishes all kinds of companies</p>
              <button class="readmore stretched-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                read more<i class="bi bi-arrow-right"></i>
              </button>
              <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  The office establishes companies of all kinds, liquidates and exits companies
                </div>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    

            

            

            

            

          

    <!-- ======= Portfolio Section ======= -->
    

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>This is the team that works in the office</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?php echo e(asset('theme/img/team/blank-profile-picture-973460_1280.webp')); ?>" class="img-fluid" alt="">
              <h4>Admin department</h4>
              
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
              <img src="<?php echo e(asset('theme/img/team/blank-profile-picture-973460_1280.webp')); ?>" class="img-fluid" alt="">
              <h4>Reviewers</h4>
              
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
              <img src="<?php echo e(asset('theme/img/team/blank-profile-picture-973460_1280.webp')); ?>" class="img-fluid" alt="">
              <h4>Accountants Department</h4>
              
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
              <img src="<?php echo e(asset('theme/img/team/blank-profile-picture-973460_1280.webp')); ?>" class="img-fluid" alt="">
              <h4>Support department</h4>
              
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
    

    <!-- ======= Frequently Asked Questions Section ======= -->
    

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="Map-Office" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Map Office</h2>
          <p>The location of the office on the map in Saudi Arabia (Taif)</p>
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
          <h2>Contact</h2>
          <p>You can contact us and send us an email with all your services that you want and we will communicate with you</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="shadow p-4 border-3 col-lg-8">
            <form action="/mail" method="post">
              <?php echo csrf_field(); ?>
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                      <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                      <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control" id="name" placeholder="Your Name">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" value="<?php echo e(old('email')); ?>" class="form-control" name="email" id="email" placeholder="Your Email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" value="<?php echo e(old('subject')); ?>" class="form-control" name="subject" id="subject" placeholder="Company Name">
                  <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" value="<?php echo e(old('message')); ?>" name="message" rows="7" placeholder="Message"></textarea>
                  <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
            <span>Turki Al-Otaibi</span>
          </a>
          
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#team">team</a></li>
            <li><a href="#Map-Office">Map Office</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a >Review and audit</a></li>
            <li><a >zakat and taxes</a></li>
            <li><a >Accounting bookkeeping</a></li>
            <li><a >Financial and management consulting</a></li>
            <li><a >forensic accounting</a></li>
            <li><a >Establishment of companies</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
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
  <script src="<?php echo e(asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('theme/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\server\1-web devlopment\2-back_end\2-laravel\Accounting-office\resources\views/projectEN/index.blade.php ENDPATH**/ ?>