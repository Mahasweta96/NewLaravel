@extends ('layout')

@section('content')

    <header id="header">
        <div class="logo"><a href="index.html">Road Trip <span>with Mahasweta</span></a></div>
        <a href="#menu"><span>Menu</span></a>
    </header>
 <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="home.html">Home</a></li>
            <li><a href="generic.html">INFO</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <!--
        Note: To show a background image, set the "data-bg" attribute below
        to the full filename of your image. This is used in each section to set
        the background image.
    -->
   <section id="banner" class="bg-img" data-bg="banner.jpg">
        <div class="inner">
            <header>
                <h1>MAHASWETA</h1>
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>My story</h2>
                    <p>09.09.2017</p>
                </header>
                <div class="content">
                    
                    <h2>{{ $forms->name }}</h2>
                    </div>
                 <footer>
                    <a href="generic.html" class="button alt">Thank you
                    <br>
                    {{ $forms->message }}
                    </a>
                </footer>
            </article>
        </div>
        
        <a href="#two" class="more">Visiting my page!</a>
        </section>


    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/jquery.scrollex.min.js"></script>
    <script src="/assets/js/skel.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>
@endsection
