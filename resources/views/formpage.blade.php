<!DOCTYPE HTML>
<!--
	Road Trip wit Mahasweta

-->
<html>
	<head>
		<title>Generic - Road Trip  with Mahasweta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
    <!-- Header -->
    <header id="header" class="alt">
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

    <!-- Content -->
    <!--
        Note: To show a background image, set the "data-bg" attribute below
        to the full filename of your image. This is used in each section to set
        the background image.
    -->
    <!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Me</h2>

					<form method="post" action="{{URL::to( ' /submit')}} "method="post">

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
						<input type="hidden" value={{csrf_token()}} name="token">
						
						<ul class="actions">
							<li><input value="submit" class="button alt" type="submit"></li>
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

	</body>
</html>
