<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sip Creative Galaxy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!-- Fontawesome
    ==================================================== -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script defer src="{{ asset('js/fontawesome/all.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>

<body id="top">


<!-- preloader
================================================== -->
<div id="preloader"> {{--todo: make preloader--}}
    <div id="loader" class="dots-pulse">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- header
================================================== -->
<header class="s-header">

    <div class="s-header__logo">
        <a href="#hero">
            <img src="{{asset('images/logo.png')}}" alt="Sip">
        </a>
    </div>

    <div class="s-header__content">

        <nav class="s-header__nav-wrap">
            <ul class="s-header__nav">
                <li><a class="smoothscroll" href="#hero" title="Intro">Home</a></li>
                <li><a class="smoothscroll" href="#about" title="About">About</a></li>
                <li><a class="smoothscroll" href="#services" title="Services">Services</a></li>
                <li><a class="smoothscroll" href="#portfolio" title="Works">Portfolio</a></li>
            </ul>
        </nav> <!-- end s-header__nav-wrap -->

        <a href="mailto:#0" class="btn btn--primary btn--small">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
            Get In Touch
        </a>

    </div> <!-- end header-content -->

    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

</header> <!-- end s-header -->


<!-- hero
================================================== -->
<section id="hero" class="s-hero target-section">

    <div class="s-hero__bg">
        <div class="gradient-overlay"></div>
    </div>

    <div class="row s-hero__content">
        <div class="column">
            @if(session()->has('success'))
                <div class="alert-box alert-box--success hideit">
                    <p>{{ session('success') }}</p>
                    <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                </div><!-- end success -->
            @endif

            <h1>Hello.</h1>
            <div class="s-hero__content-about">

                <p>
                    We are Sip. We love <br>
                    telling great stories <br>
                    creatively.
                </p>

                <footer>
                    <div class="s-hero__content-social">
                        <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </footer>
            </div>

        </div>
    </div>

    <div class="s-hero__video">
        <a class="s-hero__video-link" href="{{ asset('videos/hero-video.mp4') }}" data-lity="">
            <i class="fa fa-play fa-5x"></i>
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg>--}}
            <span class="s-hero__video-text">Play Video</span>
        </a>
    </div>

    <div class="s-hero__scroll">
        <a href="#about" class="s-hero__scroll-link smoothscroll">
            Scroll Down
        </a>
    </div>

</section> <!-- end s-hero -->


<!-- about
================================================== -->
<section id="about" class="s-about">

    <div class="horizontal-line"></div>

    <div class="row">
        <div class="column large-12">

            <div class="section-title" data-num="01" data-aos="fade-up">
                <h3 class="h6">Who We Are</h3>
            </div>

        </div>

        <div class="column large-6 w-900-stack s-about__intro-text">
            <h1 class="display-1" data-aos="fade-up">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id enim a quam rhoncus rhoncus in nec velit. Ut nisi dolor, ornare vel urna id, eleifend tempus felis.
            </h1>

            <p class="lead" data-aos="fade-up">
                Non amet venenatis dolor id pellentesque mattis erat. Fermentum nunc,
                tincidunt sit elit amet scelerisque. Ac quisque quis eu nibh rutrum
                risus tellus egestas neque. Vestibulum ante ipsum primis in faucibus
                orci luctus et.
            </p>
        </div>

        <div class="column large-6 w-900-stack s-about__photo-block">
            <div class="s-about__photo" data-aos="fade-up"></div>
        </div>
    </div>

    <div class="row block-large-1-2 block-tab-full s-about__process item-list">
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Step</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Step 1</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Step 2</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-process" data-aos="fade-up">
            <h3 class="item-title">Step 3</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
    </div>

</section> <!-- end s-about -->


<!-- services
================================================== -->
<section id="services" class="s-services">

    <div class="row">
        <div class="column large-12">
            <div class="section-title" data-num="02" data-aos="fade-up">
                <h3 class="h6">Our Services</h3>
            </div>
        </div>
        <div class="column large-6 w-900-stack">
            <h1 class="display-1" data-aos="fade-up">
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus.
            </h1>
        </div>
        <div class="column large-6 w-900-stack">
            <p class="lead" data-aos="fade-up">
                Velit deleniti harum sit beatae sint repellendus expedita. Omnis possimus
                sed rerum tenetur ea ab aut minima magnam. Deserunt sit cupiditate
                similique eveniet earum. Consectetur dolores maxime quisquam voluptate magni.
                Ut ex unde rem quod ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
    </div>

    <div class="row block-large-1-2 block-tab-full s-services__services item-list">
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--product-design"></span>
            <h3 class="item-title">Service 1</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--branding"></span>
            <h3 class="item-title">Service 2</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--frontend"></span>
            <h3 class="item-title">Service 3</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--research"></span>
            <h3 class="item-title">Service 4</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--illustration"></span>
            <h3 class="item-title">Service 5</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
        <div class="column item item-service" data-aos="fade-up">
            <span class="service-icon service-icon--ecommerce"></span>
            <h3 class="item-title">Service 6</h3>
            <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque.
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
            </p>
        </div>
    </div>

</section> <!-- end s-services -->

<section id="portfolio" class="s-portfolio">

    <div class="row s-porfolio__top">
        <div class="column large-6 w-900-stack">
            <div class="section-title" data-num="03" data-aos="fade-up">
                <h3 class="h6">Recent Works</h3>
            </div>
        </div>
        <div class="column large-6 w-900-stack">
            <h1 class="display-1" data-aos="fade-up">
                Here are some of our projects we done lately. Feel
                free to check them out.
            </h1>
        </div>
    </div> <!-- end s-portfolio__top-->

    <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">

        <div class="column" data-aos="fade-up">
            <div class="folio-item">
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="{{asset('images/portfolio/gallery/g-red-wheel.jpg')}}" title="Project 1 title" data-size="1050x700">
                        <img src="{{ asset('images/portfolio/red-wheel.jpg') }}"
                             srcset="{{ asset('images/portfolio/red-wheel.jpg') }} 1x, {{ asset('images/portfolio/red-wheel@2x.jpg') }} 2x" alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Service 1</div>
                    <h4 class="folio-item__title">Project 1</h4>
                </div>
                <a href="#" title="Project Link" class="folio-item__project-link">Project Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column" data-aos="fade-up">
            <div class="folio-item">
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="{{asset('images/portfolio/gallery/g-red-wheel.jpg')}}" title="Project 2 title" data-size="1050x700">
                        <img src="{{ asset('images/portfolio/red-wheel.jpg') }}"
                             srcset="{{ asset('images/portfolio/red-wheel.jpg') }} 1x, {{ asset('images/portfolio/red-wheel@2x.jpg') }} 2x" alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Service 2</div>
                    <h4 class="folio-item__title">Project</h4>
                </div>
                <a href="#" title="Project Link" class="folio-item__project-link">Project Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column" data-aos="fade-up">
            <div class="folio-item">
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="{{asset('images/portfolio/gallery/g-red-wheel.jpg')}}" title="Project 1 title" data-size="1050x700">
                        <img src="{{ asset('images/portfolio/red-wheel.jpg') }}"
                             srcset="{{ asset('images/portfolio/red-wheel.jpg') }} 1x, {{ asset('images/portfolio/red-wheel@2x.jpg') }} 2x" alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Service</div>
                    <h4 class="folio-item__title">Project</h4>
                </div>
                <a href="#" title="Project Link" class="folio-item__project-link">Project Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
    </div> <!-- folio-list -->

</section> <!-- end s-portfolio -->

<!-- clients
================================================== -->
<div id="clients" class="section s-clients">

    <div class="row narrower s-clients__top h-text-center">
        <div class="column">
            <h1 class="display-1" data-aos="fade-up">
                Some of the clients we've had the privilege of working with
            </h1>
        </div>
    </div> <!-- s-clients__top -->

    <div class="row clients-outer">
        <div class="column">
            <div class="clients" data-aos="fade-up">
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
                <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/user-02.jpg') }}" /></a>
            </div> <!-- end clients -->
        </div> <!-- end column -->
    </div> <!-- end clients-outer -->

    <div class="row testimonials collapse">

        <div class="column large-12">

            <div class="testimonial-slider" data-aos="fade-up">

                <div class="testimonial-slider__slide">
                    <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                    </p>
                    <div class="testimonial-slider__author">
                        <img src="{{ asset('images/avatars/user-01.jpg') }}" alt="Author image" class="testimonial-slider__avatar">
                        <cite class="testimonial-slider__cite">
                            <strong>Client Name</strong>
                            <span>Title</span>
                        </cite>
                    </div>
                </div> <!-- end testimonials__slide -->

                <div class="testimonial-slider__slide">
                    <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                    </p>
                    <div class="testimonial-slider__author">
                        <img src="{{ asset('images/avatars/user-01.jpg') }}" alt="Author image" class="testimonial-slider__avatar">
                        <cite class="testimonial-slider__cite">
                            <strong>Client Name</strong>
                            <span>Title</span>
                        </cite>
                    </div>
                </div> <!-- end testimonials__slide -->

            </div> <!-- end testimonial slider -->

        </div> <!-- end column -->

    </div> <!-- end row -->

</div> <!-- end s-clients -->


<!-- contact
================================================== -->
<section class="s-contact">

    <div class="row narrower s-contact__top h-text-center">
        <div class="column">
            <h3 class="h6">Get In Touch</h3>
            <h1 class="display-1">
                Have a story you want to be told? Reach out
                to us and let us do it for you.
            </h1>
        </div>
    </div> <!-- s-footer__top -->

    <div class="row h-text-center">
        <div class="column">
            <p class="s-contact__email">
                <a href="mailto:hello@sipcreativegalaxy.com">hello@sipcreativegalaxy.com</a>
            </p>
        </div>
    </div>

</section>  <!-- end s-contact -->

<!-- footer
================================================== -->
<footer class="s-footer">
    <div class="row row-y-top">

        <div class="column large-8 medium-12">
            <div class="row">
                <div class="column large-7 tab-12 s-footer__block">
                    <h4 class="h6">Where to Find Us</h4>

                    <p>
                        Building and street<br>
                        City<br>
                        Country<br>
                        <a href="tel:{{--todo: enter phone number here --}}">+254 XXX XXX XXX</a>
                    </p>
                </div>

                <div class="column large-5 tab-12 s-footer__block">
                    <h4 class="h6">Follow Us</h4>

                    <ul class="s-footer__list">
                        <li>
                            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column large-4 medium-12 s-footer__block--end">
            <form action="{{ route('subscribe') }}" method="post">
                {{ csrf_field() }}
                <div>
                    <input class="h-full-width" type="email" placeholder="email" id="email" required>
                </div>
                <button class="btn h-full-width">Stay in the know</button>
            </form>

            <div class="ss-copyright">
                <span>&copy; Sip Creative Galaxy {{ date('Y') }}</span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                top
            </a>
        </div> <!-- end ss-go-top -->

    </div>
</footer>


<!-- photoswipe background
================================================== -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                "Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
            "Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->


<!-- Java Script
================================================== -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
