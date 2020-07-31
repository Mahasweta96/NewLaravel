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
                <iframe src="tryhow_css_custom_scrollbar.htm" style="width:100%;border:5px solid #ddd"></iframe>
                <header>
                    <h2>How to survive road trip with friends</h2>
                    <p>01.01.2017</p>
                </header>

                @foreach ($forms as $forms)
                <div class="content">
                    <h2>
                        <a href="/forms/{{ $forms->id}}">{{ $forms->name }}</a>
                    </h2>
                    <p><a href="#">{{ $forms->message }}</a></p>
                    </div>
                @endforeach

             <footer>
                    <a href="generic.html" class="button alt">Learn More</a>
                </footer>
            </article>
        </div>
        <a href="#two" class="more">Learn More</a>
        </section>

<!-- Footer -->
    <footer id="footer">
        <div class="inner">

            <h2>Contact Me</h2>

            <form action="#" method="post">

                <div class="field half first">
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" placeholder="Name">
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" placeholder="Email">
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                </div>
                <ul class="actions">
                    <li><input value="Submit" class="button alt" type="submit"></li>
                </ul>
            </form>

            <ul class="icons">
                <li><a href="Twitter.com" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="facebook.com" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="Instagram" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>

            <div class="copyright">
                &copy; Untitled. Design: <a href="https://templated.co"></a>. Images: <a href="https://unsplash.com">Unsplash</a>.
            </div>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
@endsection
