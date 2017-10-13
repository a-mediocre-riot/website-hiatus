<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gina Ribniscky</title>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="manifest.json">
	<meta name="theme-color" content="#ffffff">

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa|Lato">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
	      integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>

<body>

	<!-- FLEXBOX VERTICAL ALIGNER FOR LG/XL SCREENS -->
	<div class="aligner">
		<div class="container text-center">
			<div class="row">

				<!-- DRAWING -->
				<div class="col-lg-6">
					<img src="<?php echo get_template_directory_uri(); ?>/images/drawing.png" alt="Illustration of Gina and her dog Winston" title="That's me and my dog Winston, drawn by @eelbunny on Instagram!">
				</div>

				<!-- INFO & LINKS -->
				<div class="col-lg-6 text-center">
					<h1>Gina Ribniscky</h1>
					<small>Full Stack Developer &amp; Aspiring Citizen of Mars</small>
					<p>Bonjour! Check out the links below to see examples of my work in both code and design, as well as my various social platforms.</p>
					<p>Get in touch at <strong>gina@ginamarie.tech</strong>.</p>

					<!-- PORTFOLIO LINKS -->
					<div class="row link-row">

						<!-- CODEPEN LINK -->
						<div class="col-4">
							<a href="https://www.codepen.io/ginamarie-tech" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/codepen.png" alt="CodePen">
							</a>
						</div>

						<!-- BEHANCE LINK -->
						<div class="col-4">
							<a href="https://www.behance.net/gina8928" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/behance.png" alt="Behance">
							</a>
						</div>

						<!-- GITHUB LINK -->
						<div class="col-4">
						<a href="https://www.github.com/a-mediocre-riot" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/images/github.png" alt="GitHub">
							</a>
						</div>
					</div><!--.row-->

					<!-- SOCIAL MEDIA LINKS -->
					<div class="social-links">
						<a href="https://www.facebook.com/ribasic" target="_blank">facebook</a>
						<span class="break"></span>
						<a href="https://www.twitter.com/ribasic" target="_blank">twitter</a>
						<span class="break"></span>
						<a href="https://www.linkedin.com/in/ginaribniscky" target="_blank">linkedin</a>
						<span class="break"></span>
						<a href="https://www.instagram.com/misplacedpixel" target="_blank">instagram</a>
					</div>

				</div>
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.aligner-->

	<?php wp_footer(); ?>
</body>
</html>
