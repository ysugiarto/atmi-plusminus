<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ATMI-Plusminus App</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('landing/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/vendor/aos/aos.css" rel="stylesheet') }}" />
    <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('landing/assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="#" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('landing/assets/img/logo.png') }}" alt="" />
                <h1 class="sitename">ATMI-Plusminus</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            @if (Route::has('login'))
                @auth
                    <a class="btn-getstarted" href="{{ url('/dashboard') }}">Your Dashboard</a>
                @else
                    <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
                @endauth
            @endif
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="{{ asset('landing/assets/img/background.png') }}" alt="" />
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Welcome to <span>ATMI-Plusminus</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Monitor your time and organize your routines for success<br />
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        @if (Route::has('login'))
                            @auth
                                <a class="btn-get-started" href="{{ url('/dashboard') }}">Your Dashboard</a>
                            @else
                                <a class="btn-get-started" href="{{ route('login') }}">Login</a>
                            @endauth
                        @endif
                        <a href="https://www.youtube.com/watch?v=xrsn4ZAoNDA&t=21s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                    <img src="{{ asset('landing/assets/img/illustration.png') }}" class="img-fluid hero-img"
                        alt="" data-aos="zoom-out" data-aos-delay="300" />
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-clipboard-plus"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">Plus</a>
                                </h4>
                                <p class="description">
                                    Calculation of plus hours that can be used for planned leaves.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-clipboard-minus"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">Minus</a>
                                </h4>
                                <p class="description">
                                    Calculation of minus hours that must be replaced with competency improvement
                                    activities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-exclamation-octagon"></i>
                            </div>
                            <div>
                                <h4 class="title">
                                    <a href="#" class="stretched-link">Compensation</a>
                                </h4>
                                <p class="description">
                                    Compensation calculation is a form of responsibility.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>
                    Learn more about our application, its features, and how it can simplify and enhance your daily
                    tasks.
                </p>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">ATMI-Plusminus App</p>
                        <h3>Discipline in Time Management Paves The Way to Success</h3>
                        <p class="fst-italic">
                            ATMI-Plusminus application is time management app designed to streamline your practical
                            hours and balance your study. <br>Key features include:
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Hour Tracking: Easily record plus hours, minus hours, and compensation time to
                                    keep accurate track of your hours.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Time Report: Generate detailed reports with adjustable time frames to analyze your
                                    hours.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Overtime Opening: Identify potential overtime opportunities that fit your
                                    schedule.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Overtime Registration: Simplify the process of requesting overtime with a
                                    user-friendly interface designed to submit and manage your overtime
                                    applications.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="{{ asset('landing/assets/img/about-company-1.jpg') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('landing/assets/img/about-company-2.jpg') }}"
                                            class="img-fluid" alt="" />
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="{{ asset('landing/assets/img/about-company-3.jpg') }}"
                                            class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>
                    Feel free to reach out to us anytime. We're here to help with any
                    questions or concerns you may have.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>
                                Politeknik ATMI Surakarta - Jl. Adi Sucipto Km 9.5, Blulukan,
                                Colomadu, Karanganyar 57174
                            </p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+62 271-7686220</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>politeknik@atmi.ac.id</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1866.6583300899113!2d110.76593163257387!3d-7.541021479900619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a146498c69e6d%3A0x576c8e980f30871e!2sATMI%20Polytechnic%20Surakarta!5e0!3m2!1sen!2sus!4v1719592301082!5m2!1sen!2sus"
                            frameborder="0" style="border: 0; width: 100%; height: 400px" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="" />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="" />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="" />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>

                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-6 footer-about">
                    <a href="#" class="logo d-flex align-items-center">
                        <span class="sitename">ATMI-Plusminus</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Politeknik ATMI Surakarta</p>
                        <p>
                            Jl. Adi Sucipto Km 9.5, Blulukan, Colomadu, Karanganyar 57174
                        </p>
                        <p class="mt-3">
                            <strong>Phone:</strong> <span>+62 271-7686220</span>
                        </p>
                        <p><strong>Email:</strong> <span>politeknik@atmi.ac.id</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/PolikteknikAtmiSurakarta" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/politeknikatmi" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/politeknik-atmi-surakarta" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <a href="https://atmi.ac.id" target="_blank">Politeknik ATMI Surakarta</a>
                        </li>
                        <li>
                            <a href="https://atmi.ac.id/student-portal.html" target="_blank">Student Portal</a>
                        </li>
                        <li><a href="https://e-learning.atmi.ac.id/" target="_blank">E-Learning</a></li>
                        <li><a href="https://jobfair.atmi.online/" target="_blank">Career</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Our Study Programs</h4>
                    <ul>
                        <li>
                            <a href="https://tmi.atmi.ac.id/" target="_blank">D3 Teknik Mesin Industri</a>
                        </li>
                        <li>
                            <a href="https://tmk.atmi.ac.id/" target="_blank">D3 Teknik Mekatronika</a>
                        </li>
                        <li>
                            <a href="https://tpm.atmi.ac.id/" target="_blank">D3 Teknik Perancangan Mekanik dan
                                Mesin</a>
                        </li>
                        <li>
                            <a href="https://rtm.atmi.ac.id/" target="_blank">D4 Rekayasa Teknologi Manufaktur</a>
                        </li>
                        <li>
                            <a href="https://trmk.atmi.ac.id/" target="_blank">D4 Teknologi Rekayasa Mekatronika</a>
                        </li>
                        <li>
                            <a href="https://pm.atmi.ac.id/" target="_blank">D4 Perancangan Manufaktur</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">Politeknik ATMI Surakarta</strong><span>- All Rights Reserved.</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/form/validate.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
</body>

</html>
