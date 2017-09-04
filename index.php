<!DOCTYPE PHP>
<!-- FYRTARN_DEV_SITE-->
<html>
	<head>
        <title>Fyrtarn - It just works.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
     
        <!-- 2nd cusgtom CSS - ETE -->
        <link rel="stylesheet" href="assets/css/custom.css">
        
		<!-- Add to homescreen for Chrome on Android -->
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="192x192" href="images/android-desktop.png">

		<!-- Add to homescreen for Safari on iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Fyrtarn - It just works.">
		<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
		<meta name="msapplication-TileColor" content="#3372DF">

		<link rel="shortcut icon" href="images/favicon.png">

        
	
    </head>
	<body class="landing">
		<?
		require_once 'vendor/autoload.php';
		$elemeno = new \Elemeno\Client('6339f1b0-8caa-11e7-a31a-3feebadaf301');
		
		$page1 = $elemeno->getSingle('hero-line')->data->content
		?>

		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html"><img src="images/logo.png" height="40"></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html"><? print_r($page1->menu1); ?> </a></li>
							<li><a href="index.html"><? print_r($page1->menu2); ?></a></li>
                            <li><a href="index.html"><? print_r($page1->menu3); ?></a></li>
                            <li><a href="index.html"><? print_r($page1->menu4); ?></a></li>
							
<!--                            <li>
								<a href="#" class="icon fa-angle-down">Solutions</a>
								<ul>
									<li><a href="generic.html"></a></li>
									<li><a href="contact.html">Enterprise Mobility</a></li>
									<li><a href="elements.html">Conference Room</a></li>
									<li>
										<a href="#">Device Management</a>
										<ul>
											<li><a href="#">Deployment</a></li>
											<li><a href="#">BYOD Environment</a></li>
											<li><a href="#">CYOD Environment</a></li>
										</ul>
									</li>
								</ul>
							</li> -->
							<li><a href="#" class="button"><? print_r($page1->act1); ?></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2><? print_r($page1->heroTitle); ?></h2>
					<p><? print_r($page1->heroLine); ?></p>
					<ul class="actions">
						<li><a href="#" class="button special"><? print_r($page1->act2); ?></a></li>
						<li><a href="#" class="button"><? print_r($page1->act3); ?></a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Empower end users while making your life easier.</h2>
							<p>Fyrtarn is focused future ways of working and workplace transformation. Its purpose is to help organisations create a new employee experience through technology 		enablement to change the way in which people work, communicate and collaborate. Focused on technology solutions leveraging the Cisco and Apple ecosystem, Fyrtarn looks to provide integration of these solutions in an existing organisations enterprise capability.</p>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Apple Device Management</h3>
								<p>The most powerful computing platform requires the best Mac management solution.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Enterprise Mobility Management</h3>
								<p>Apple enterprise mobility management done right.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Conferenceroom Technology</h3>
								<p>Go beyond the blackboard with iPad classroom management tools for teachers.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Deployment</h3>
								<p>Zero-touch deployment. Go from new-in-box to hard-at-work, automatically.>/p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Zero Downtime Deployment</h3>
								<p>We know you like to start your day with an empty inbox and zero help tickets.  Provision the perfect Mac, iPad, iPhone or Apple TV with the right software, apps and settings, and deploy each device seamlessly with the workflow of your choosing.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>BYOD/ CYOD Environment</h3>
								<p>Lighten the load for employees and deliver a better bring your own device (BYOD) management experience.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Take Fyrtarn for a test drive.</h2>
					<p>Try Fyrtan, the number one Apple enterprise management solution for free for 30 days.</p>

					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Fyrtarn. All rights reserved.</li><li>2017 </li>
					</ul>
				</footer>
                
                <footer class="page-footer -primary">
    <div class="page-footer__inner">

        <div class="four -spaced">
                            
                            <div class="block block--footer four__item">
                    <h4 class="block__title">Fyrtarn Pty Ltd</h4>
                    <div class="block__body">
                        <ul class="list list--footer">
                                                            <li class="list__item">
                                                                            <a href="about/index.html" class="list__link">
                                            About                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="career/index.html" class="list__link">
                                            Careers                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="media/index.html" class="list__link">
                                            Press                                        </a>
                                                                    </li>
                                                            
                                                            <li class="list__item">
                                                                            <a href="blog/" class="list__link">
                                            Blog                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <span class="list__empty"></span>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <span class="list__empty"></span>
                                                                    </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="block block--footer four__item">
                    <h4 class="block__title">Download</h4>
                    <div class="block__body">
                        <ul class="list list--footer">
                                                          
                                                            <li class="list__item">
                                                                            <a href="https://play.google.com/store/apps/details?id=elliot.nav" class="list__link">
                                            Android                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="download/index.html" class="list__link">
                                            iPhone                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="download/index.html" class="list__link">
                                            Windows                                        </a>
                                                                    </li>
                        </ul>
                    </div>
                </div>
                            <div class="block block--footer four__item">
                    <h4 class="block__title">Support</h4>
                    <div class="block__body">
                        <ul class="list list--footer">
                                                            <li class="list__item">
                                                                            <a href="support/index.html" class="list__link">
                                            FAQ                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="https://twitter.com/elliotnav" class="list__link">
                                            Twitter                                        </a>
                                                                    </li>
                                                            <li class="list__item">
                                                                            <a href="https://www.facebook.com/profile.php?id=100012750822975" class="list__link">
                                            Facebook                                        </a>
                                                                    </li>
                                                           
                                                    </ul>
                    </div>
                </div>
                    </div>
    </div>
</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>