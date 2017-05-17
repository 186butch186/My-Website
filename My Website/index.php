<!DOCTYPE HTML>
<!--
	Miniport design by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	
	//@author Michael Butchko - (PHP/JavaScript) Email Functions and Validation
-->

<?php
//@author Michael Butchko / PHP with Form Validation
include('email_handle.php'); // Includes Email Script

//display errors
ini_set('display_errors', True); 
error_reporting(E_ALL | E_STRICT); 
?>





<html>
	<head>
		<title>Michael Butchko</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#AboutMe">About Me</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><img src="images/win.png" alt="" /></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1>Hi, I'm <strong>Mike</strong>.</h1>
							</header>
							<p>Im a software engineer who likes to create cool products!
							This website was made off of HTML 5 up's language, and I added PHP 
							and Javascript into the mix.</p>
							<p>You can see how I developed this website on my GitHub account listed below!</p>
							<a href="#AboutMe" class="button big scrolly">Learn about me</a>
						</div>
					</div>
				</article>
			</div>

		<!-- About me -->
			<div class="wrapper style2">
				<article id="AboutMe">
					<header>
						<h2>About Me</h2>
						<p>I am a Radford University graduate with a degree in Computer Science and a concentration in Software Engineering.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-comments-o"></span>-->
									<h3>Clubs and Activites</h3>
									<p>I was the 2015 Vice President for the Radford Rugby football club and helped organize multiple charities 
									and fundraisers for the team. I was also an active member of the Radford Jiu-Jitsu club and helped organize 
									classes.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-camera-retro"></span> -->
									<h3>Hobbies</h3>
									<p>In my free time I enjoy coding, going to the gym, participating in combat based sports such as mixed martial
									arts, Wrestling, and Jiu-Jitsu. I also enjoy playing guitar and listening to all different types of music.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-thumbs-o-up"></span> -->
									<h3><a href="MyResume.htm">View My Resume</a></h3>
									<p>Throughout college I have learned to utilize both Waterfall and Agile methodologies to complete large scale 
									projects. Listed here is a more detailed description of my skill set, work experience, and accomplishments.</p>
								</section>
							</div>
                            
						</div>
					</div>
                    
                    <div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-comments-o"></span>-->
									<h3><a href="https://www.facebook.com/michael.butchko.54" class="icon fa-facebook"><span class="label">Facebook</span></a></h3>
                                    
									<p>View my Facebook profile</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-camera-retro"></span> -->
									<h3><a href="https://www.linkedin.com/in/michael-butchko-8b910412a" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></h3>
									<p>View my Linkedin profile</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
								<!--	<span class="icon featured fa-thumbs-o-up"></span> -->
									<h3><a href="https://github.com/186butch186" class="icon fa-github"><span class="label">GitHub</span></a></h3>
									<p>View my GitHub profile</p>
								</section>
							</div>
                           
						</div>
					</div>
                    
					<footer>
                       <!-- <a href="Michael%20Butchko%20Resume%20copy.htm" class="button big scrolly">Full Resume</a> <br /> -->
						<a href="#portfolio" class="button big scrolly">See some of my projects</a>
					</footer>
				</article>
			</div>
        
        		

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Here are some projects I made in College.</h2>
						<p>These projects consisted of Java, Html, CSS, Javascript, PHP, MYSQL, and Bootstrap.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="https://php.radford.edu/~mbutchko/471/index.php" class="image featured"><img src="images/foodbuddies.jpg" alt="" /></a>
									<h3><a href="https://php.radford.edu/~mbutchko/471/index.php">Food Buddies Website Application Project</a></h3>
									<p>This was a spike exercise project that consisted of HTML, CSS, JavaScript, PHP, and SQL.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="https://php.radford.edu/~mbutchko/login_with_twitter_using_php/index.php" class="image featured"><img src="images/Marketing-Strategy.jpg" alt="" /></a>
									<h3><a href="https://php.radford.edu/~mbutchko/login_with_twitter_using_php/index.php">Advertisment Interactive Project</a></h3>
									<p>For this project I had relied heavily on twitters API, as well as the programming languages SQL and PHP.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="" class="image featured"><img src="images/java.jpg" alt="" /></a><p></p>
                                    <h3>Stickman Adventure Game</h3>
									<p>I developed a stick figure side scroller animation game in Java. This game included collision detection, keyboard events, and basic enemy A.I.</p>
								</article>
							</div>
						</div>
						
					</div>
					<footer>
						<a href="#contact" class="button big scrolly">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
                        <h2>Lets work together</h2>
                        <!--Variable stored in email_handle.php
                        	Used to alert the user of a successful email or error-->
						<?php echo "$mail_status";?>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#contact">
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" required/>
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email (format: xxx@xxx.xxx)"
												pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" required/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" required />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" name="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
										          </ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>Miniport Design By: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>