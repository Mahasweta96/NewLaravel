@extends ('layout')

@section('content')

    <header id="header">
        <div class="logo"><a href="home.html">Road Trip <span>with Mahasweta</span></a></div>
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
                <h1>This is Road Trip</h1>
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>How to survive road trip with friends</h2>
                    <p>01.01.2017</p>
                </header>
                <div class="content">
                    <p>The thing is, travelling with friends, in general, can be risky. By the end you will either end up worst enemies or with a stronger bond than most families have. Roadtrips are on a whole other level, but there is no need to stress as I’m here to help you survive your epic roadtrip without you and your bestie killing each other or at least prevent you from losing your sanity (unless you are like me and lost that a long time ago).</p>
                </div>
                <footer>
                    <a href="generic.html" class="button alt">Learn More</a>
                </footer>
            </article>
        </div>
        <a href="#two" class="more">Learn More</a>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Take turns driving</h2>
                    <p>12.21.2016</p>
                </header>
                <div class="content">
                    <p>Not only is this also one of the safest ways to roadtrip but also takes a lot of pressure off the primary driver which, from experience can lead to a major breakdown (and I’m not talking about the vehicle).

                        Of course this will only work if both you and your bestie can legally drive. However, if you aren’t breaking any laws, this can not only save a friendship but also your life.</p>
                </div>
                <footer>
                    <a href="generic.html" class="button alt">Learn More</a>
                </footer>
            </article>
        </div>
        <a href="#three" class="more">Learn More</a>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Turn the Music up!</h2>
                    <p>11.11.2016</p>
                </header>
                <div class="content">
                    <p>Everyone knows that one of the best things about a roadtrip is performing your own concert in the comfort of your vehicle.

                        The problem is when your solo career becomes a duet and one, or more likely both, of you are practically tone deaf.

                        Although it can be hilariously enjoyable for the most part, this is always one of the riskiest ways to drive each other mental. So, all you have to do is drown out those painful shrieks that you each try to pass off as singing with some loud and funky tunes and you’re good to go!</p>
                </div>
                <footer>
                    <a href="generic.html" class="button alt">Learn More</a>
                </footer>
            </article>
        </div>
        <a href="#four" class="more">Learn More</a>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper post bg-img" data-bg="banner3.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Do your own things!</h2>
                    <p>10.30.2016</p>
                </header>
                <div class="content">
                    <p>I’m not saying that you should be driving in separate cars or not doing anything together at all for your entire trip. What I am trying to say is it is okay and you should actually be encouraged to do your own thing every now and then.

                        Whether you want to have a day to rest and recover while your friend continues to party or vice versa this is the perfect way to feel refreshed and often leave you more excited than ever to get back on the road with your bestie.</p>
                </div>
                <footer>
                    <a href="generic.html" class="button alt">Learn More</a>
                </footer>
            </article>
        </div>
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
                <li><a href="Facebook.com" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="Instagram.com" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
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
