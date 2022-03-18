<!DOCTYPE html>
<html>
<head>
	<title>Basic website </title>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
</head>
<body>

		<div class="headersection templete clear">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>MIT </h2>
				<p>Our website description</p>
			</div>
			<div class="social">
				<a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="navsection templete clear">
		<ul>
			<li><a id="active"  href="index.php">Home</a></li>
			<li><a  href="about.php">About</a></li>
			<li><a href="">Department</a>
				<ul>
					<li><a href="#">Computer Technology</a></li>
					<li><a href="#">Civil Technology</a></li>
					<li><a href="#">Mechanical Technology</a></li>
					<li><a href="#">Electrical Technology</a></li>
					<li><a href="#">Textile Technology</a></li>
					<li><a href="#">Electronics Technology</a></li>
				</ul>
			</li>
			<li><a href="notice.php">Notice</a></li>
			<li><a href="teacher.php">Teachers</a>
				<ul>
					<li><a href="#">Rabeya Nasrin [cmt]</a></li>
					<li><a href="#">Palash Chanro [cmt]</a></li>
					<li><a href="#">Shamima Nasrin [rs]</a></li>
					<li><a href="#">Emon Shikdar [cmt]</a></li>
					<li><a href="#">Milon Hussain [et]</a></li>
					<li><a href="#">Tahrima Sivee [et]</a></li>
				</ul>
			</li>
			<li><a href="student.php">Students</a></li>
			<li><a href="contact.php">Contact</a>

				</li>
		</ul>
		</div>

		<div class="contentsection templete clear">
			<div class="maincontent clear myitem">
				<div class="sorting">
					<h2>All Categories</h2>
					<div id="filters" class="button-group">
						 <button class="button is-checked" data-filter="*">show all</button>
						 <button class="button" data-filter=".metal">JAVA</button>
						 <button class="button" data-filter=".transition">PHP</button>
						 <button class="button" data-filter=".alkali, .alkaline-earth">HTML</button>
						 <button class="button" data-filter=":not(.transition)">CSS</button>

					</div>

					<div class="grid">
					  <div class="element-item transition metal " data-category="transition">
							<img src="images/javar.png"/>
					  </div>
					  <div class="element-item metalloid " data-category="metalloid">
							<img src="images/php.png"/>
					  </div>
					  <div class="element-item post-transition metal " data-category="post-transition">
							<img src="images/javar.png"/>
					  </div>
					  <div class="element-item post-transition metal " data-category="post-transition">
							<img src="images/php.png"/>
					  </div>
					  <div class="element-item transition metal " data-category="transition">
							<img src="images/javar.png"/>
					  </div>
					  <div class="element-item alkali metal " data-category="alkali">
							<img src="images/php.png"/>
					  </div>
					</div>
				</div>
			</div>

			<div class="sidebar clear">
				<div class="samesidebar clear">
					<h2>Latest articles</h2>
					<ul>
						<li><a href="">Post Title one will be go here.</a></li>
						<li><a href="">Post Title two will be go here.</a></li>
						<li><a href="">Post Title three will be go here.</a></li>
						<li><a href="">Post Title four will be go here.</a></li>
						<li><a href="">Post Title five will be go here.</a></li>
						<li><a href="">Post Title six will be go here.</a></li>

					</ul>
				</div>
				<div class="samesidebar clear">
					<h2>Popular articles</h2>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/at.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/aa.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/ac.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/at.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/at.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Post title will be go here..</a></h3>
					<a href=""><img src="images/at.jpg" alt="post image"/></a>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					</div>
				</div>
				<div class="samesidebar clear">
					<h2>Sidebar one Header</h2>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
					<p>
					   I am a person who is positive about every aspect of life. There are many
						things I like to do,<br /> to see, and to experience. I like to read.
					</p>
				</div>
			</div>

		</div>

		<div class="footersection templete clear">
			<div class="footermenu templete clear">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">Privacy</a></li>
				</ul>
			</div>
			<p>&copy;Copyright Training with live project</p>
		</div>
		<div class="fixedicon clear">
				<a href="http://www.facebook.com"><img src="images/facebook.png" alt="Facebook"/></a>
				<a href="http://www.twitter.com"><img src="images/twitter.png" alt="Twitter"/></a>
				<a href="http://www.linkedin.com"><img src="images/linkedin.png" alt="LinkedIn"/></a>
				<a href="http://www.google.com"><img src="images/google.png" alt="GooglePlus"/></a>

		</div>
		<script type="text/javascript" src="js/scrolltop.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/isotopoption.js"></script>
<script src="js/jquery.counterup.min.js"></script>

<script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 10000
            });
        });
    </script>
</body>

</html>
