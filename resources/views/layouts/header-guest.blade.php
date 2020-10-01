<!-- header
================================================== -->
<header class="s-header">

    <div class="s-header__logo">
        <a href="/#hero">
            <span>sip</span>
        </a>
    </div>

    <div class="s-header__content">
        @if(Route::current()->getName() == 'home')
            @include('layouts.nav-guest')
        @endif
    </div> <!-- end header-content -->

    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

</header> <!-- end s-header -->
