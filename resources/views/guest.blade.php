@extends('layouts.app')

@section('content')
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
                @if(session()->has('error'))
                    <div class="alert-box alert-box--error hideit">
                        <p>{{ session('error') }}</p>
                        <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                    </div>
                @endif
                <h1>Hello</h1>
                <div class="s-hero__content-about">

                    <p>
                        We are Sip. We love <br>
                        telling great stories <br>
                        creatively.
                    </p>

                    <footer>
                        <div class="s-hero__content-social">
                            <a href="https://www.facebook.com/SiP-Creative-Galaxy-106004214220668/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/sipcreativegalaxy/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
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
                    SiP Creative Galaxy is a storytelling agency based in Kenya that offers high quality video production services, original films and content creation platforms to its clients.
                </h1>

                <p class="lead" data-aos="fade-up">
                    At SiP, we aim to empower content creators with tools and channels to present bold, edifying, and powerful narratives from Africa to the world through high quality video production and video content creation.
                </p>
            </div>

            <div class="column large-6 w-900-stack s-about__photo-block">
                <div class="s-about__photo" data-aos="fade-up"></div>
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
                    Offering cinematic excellence for corporate communication and personal branding.
                </h1>
            </div>
            <div class="column large-6 w-900-stack">
                <div class="column item item-service" data-aos="fade-up">
                    <span class="service-icon service-icon--product-design"></span>
                    <h3 class="item-title">SSTORYTELLER</h3>
                    <p>
                        Our video production team aims to empower content creators with high quality cinematography for their communication strategy needs.
                    </p>
                </div>
                {{--        <div class="column item item-service" data-aos="fade-up">--}}
                {{--            <span class="service-icon service-icon--research"></span>--}}
                {{--            <h3 class="item-title">SSTREAM</h3>--}}
                {{--            <p>This is an app that provides livestream and video on demand.</p>--}}
                {{--        </div>--}}
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
                    Here are some of the projects we've done lately. Feel
                    free to check them out.
                </h1>
            </div>
        </div> <!-- end s-portfolio__top-->

        <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('images/portfolio/gallery/g-the-predator.jpg')}}" title="The Predator" data-size="1050x700">
                            <img src="{{ asset('images/portfolio/the-predator.jpg') }}"
                                 srcset="{{ asset('images/portfolio/thepredators.jpg') }} 1x, {{ asset('images/portfolio/thepredators@2x.jpg') }} 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">SSTORYTELLING</div>
                        <h4 class="folio-item__title">The Predators</h4>
                    </div>
                    {{--                <a href="#" title="Project Link" class="folio-item__project-link">Project Link</a>--}}
                    <div class="folio-item__caption">
                        <p>'The Predators' book by Hon. Lady Justice Ruth N. Sitati; a project which included a launch event and storytelling for digital media from November 2019.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('images/portfolio/gallery/g-nakupenda.jpg')}}" title="Nakupenda" data-size="1050x700">
                            <img src="{{ asset('images/portfolio/nakupenda.jpg') }}"
                                 srcset="{{ asset('images/portfolio/nakupenda.jpg') }} 1x, {{ asset('images/portfolio/nakupenda@2x.jpg') }} 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">SSTORYTELLING - Cinematography</div>
                        <h4 class="folio-item__title">The Nakupenda Short Film</h4>
                    </div>
                    <div class="folio-item__caption">
                        <p>'The NakuPenda Short Film' Capsule in November 2018; which comprised of a fashion film, bridal collection and theme song showcased at The Foundry, Viking House in Westlands, and screened by DOCUBOX at their monthly event, "Shorts, Shorts and Shots" at the Prestige Plaza in February 2019.</p>
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
                    <a href="https://youtu.be/ltxwMrfatM0" target="_blank" title="" class="clients__slide"><img src="{{ asset('images/avatars/blackforesthouse.jpg') }}" /></a>
                    <a href="https://youtu.be/ltxwMrfatM0" target="_blank" title="" class="clients__slide"><img src="{{ asset('images/avatars/alice.jpg') }}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{ asset('images/avatars/kitchen-mechuka.jpg') }}" /></a>
                    <a href="https://www.instagram.com/tv/CGaHDfxAsTX/?igshid=123ibq3dd0f0r" target="_blank" title="" class="clients__slide"><img src="{{ asset('images/avatars/jesusgirl.jpg') }}" /></a>
                </div> <!-- end clients -->
            </div> <!-- end column -->
        </div> <!-- end clients-outer -->

        <div class="row testimonials collapse">

            <div class="column large-12">
                <div class="row narrower s-clients__top h-text-center">
                    <div class="column">
                        <h1 class="display-1" data-aos="fade-up">
                            A note from the CEO
                        </h1>
                    </div>
                </div>

                <div class="testimonial-slider" data-aos="fade-up">

                    <div class="testimonial-slider__slide">
                        <p>
                            SiP Creative Galaxy can be likened to the large groups of stars and associated matter that are
                            found throughout the universe. We are an assemblage of brilliant and notable innovators - key
                            persons in the creative sector who develop and curate narratives of excellence for the world to
                            see. Each individual within the team is outstandingly talented and appointed to illuminate,
                            edify and immerse listeners and viewers with wonder, talent and inspiration through their role
                            within the firm.

                            The explorers within the SiP Creative Galaxy are known as the Sstorytellers. They are the space
                            explorers who visit the Galaxy to discover creative options by which they choose to display authentic,
                            bold and powerful narratives to the world.

                            Our dynamic and highly anticipated team of visiting Sstorytellers are our clients, while our resident Sstorytellers are our vibrant and excellent team members.
                            The resident explorers take up the stewardship of the Galaxy as experimenters, historians, custodians, builders and keepers of the Galaxy’s terrain.

                            Lastly, SiP Creative Galaxy exists and thrives as a galaxy, not as a universe.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="{{ asset('images/avatars/ceo.jpg') }}" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Florence Sitati,</strong>
                                <span>
                                Founder & C.E.O.
                                SiP Creative Galaxy.
                            </span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonial-slider__slide">
                        <p>
                            As the founder of this company, I believe in the existence and dominion of God Almighty; the
                            Creator of the Universe, under whom all beings exist. In light of this belief, the team effort
                            within the company is orchestrated to create significant impact through the combined illumination
                            of many stars, geared to shine into the dark spaces of our world through creative thinking and
                            content creation. These starry lights are the people who make SiP Creative Galaxy - a young and
                            energetic team based in Kenya, enthusiastic to give of themselves in providing services to our
                            esteemed clients, and sharing stories with a global audience. Together, we are a Galaxy among
                            many other galaxies, building an ecosystem whose beauty is enriched by the inclusion and
                            participation of other diverse and gifted personalities within the video content realm.

                            I cannot wait to take this exciting journey with you.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="{{ asset('images/avatars/ceo.jpg') }}" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Florence Sitati,</strong>
                                <span>
                                Founder & C.E.O.
                                SiP Creative Galaxy.
                            </span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->

                </div> <!-- end testimonial slider -->

            </div> <!-- end column -->

        </div> <!-- end row -->

{{--        <div class="row narrower s-clients__top h-text-center">--}}
{{--            <div class="column">--}}
{{--                <h1 class="display-1" data-aos="fade-up">--}}
{{--                    Our Instagram--}}
{{--                </h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row clients-outer">--}}
{{--            <div class="column">--}}
{{--                <div data-aos="fade-up">--}}
{{--                    <!-- LightWidget WIDGET -->--}}
{{--                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>--}}
{{--                    <iframe src="//lightwidget.com/widgets/390a2f03ce455224967182560a55b381.html" scrolling="yes" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

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
                            Nairobi<br>
                            Kenya<br>
                            <a href="tel:+254742036493">+254 742036493</a>
                        </p>
                    </div>

                    <div class="column large-5 tab-12 s-footer__block">
                        <h4 class="h6">Follow Us</h4>

                        <ul class="s-footer__list">
                            <li>
                                <a href="https://www.facebook.com/SiP-Creative-Galaxy-106004214220668/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/sipcreativegalaxy/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i>
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
                        <input name="email" class="h-full-width" type="email" placeholder="email" id="email" required>
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
@endsection
