<!DOCTYPE html>
<html>
<head>
	<title>Website of mit</title>
	<meta name="Language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="ssc result, hsc result">
	<meta name="author" content="Arifa Lubna">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

		<div class="headersection templete clear">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>MIT</h2>
				<p>Savar,Dhaka</p>
			</div>
			<div class="social">
				<a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a target="_blank" href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="navsection templete">
			<ul>
			<li><a id="active"  href="index.php">Home</a></li>
			<li><a  href="about.php">About</a></li>
			<li><a href="#">Department</a>
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
					<li><a href="#">Tahrima silvee [et]</a></li>
				</ul>
			</li>
			<li><a href="student.php">Students</a></li>
			<li><a href="contact.php">Contact</a>

				</li>
		</ul>
		</div>
		<div class="slidersection templete clear">
		<div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="" /></a>
        </div>
		</div>
		<div class="contentsection templete clear">
			<div class="maincontent clear">
			<div class="samepost clear">
			<h2><marquee>Micro Institute of Technology(MIT)</marquee></h2>
			 <a href=""><img src="images/clg1.PNG" alt="post image"/></a>
				<p>
					Micro Institute of Technology. We were born in 2001 at Dhaka as a privet
					 polytechnic institute for providing Diploma-in-Engineering course under
					  Bangladesh Technical Education Board.
				</p>
				<div class="readmore clear">
					<a href="post.php">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
			<h2><marquee>Shahidul Chowdhury (Ashoka Fellow)</marquee></h2>
			 <a href=""><img src="images/sir1.jpg" alt="post image"/></a>
			 <p>Every college has a principal and the principal sees to it that
 				 everybody in the college obeys to the rules and regulations of
 					the college. He would be in charge of all the responsibilities
 					 of the college on a day to day basis and he has the powers
 				 for all the major decisions in the college.</p>
				<div class="readmore clear">
					<a href="item.php">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
			<h2><marquee>Engineering is a fabulous career.</marquee></h2>
			 <a href=""><img src="images/car1.PNG" alt="post image"/></a>
				<p>
				  Engineering careers are constantly varied in terms of their
					job responsibilities, but also in their working locations.
				  As an engineer you could be working in an office, in a laboratory,
				 	on an oil rig in the middle of the ocean,in a factory, or even
				  in outer space. Each engineering discipline requires professionals
					with very specific skill-sets.
				</p>
				<div class="readmore clear">
					<a href="itemTwo.php">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
			<h2><marquee>Taking technical education matches work all over the world.</marquee></h2>
			 <a href=""><img src="images/cou1.PNG" alt="post image"/></a>
				<p>
				  Education changes lives. It's a fact. Data shows that just
					 a single extra year of schooling can increase an individual's
					 earnings by up to 10%, and if all students in low income countries
					  left school with basic reading skills, it could pull 171 million
						 people out of poverty.

				</p>
				<div class="readmore clear">
					<a href="itemThree.php">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
			<h2><marquee>Technical education to change lives.</marquee></h2>
			 <a href=""><img src="images/ta12.PNG" alt="post image"/></a>
				<p>
				  You gain knowledge, skills and experience to help you both in
					 your career and in life in general. On top of that, by
					 gaining additional skills in communication and problem solving
					 and achieving your goals, you can also increase your confidence.

				</p>
				<div class="readmore clear">
					<a href="itemfour.php">Read More</a>
				</div>
			</div>

			</div>

			<div class="sidebar clear">
				<div class="samesidebar clear">
					<h2>Latest articles</h2>
					<ul>
						<li><a href="">How education changes a person's life</a></li>
						<li><a href="">How can education make you a better person</a></li>
						<li><a href="">Why is education so important in our life</a></li>
						<li><a href="">How does education impact your future</a></li>
						<li><a href="">What is the power of education</a></li>
						<li><a href="">What is education and why is it important</a></li>

					</ul>
				</div>
				<div class="samesidebar clear">
					<h2>Popular articles</h2>
					<div class="popular clear">
					<h3><a href="">How education changes a person's life</a></h3>
					<a href=""><img src="images/s1.png" alt="post image"/></a>
					<p>
						Education Helps in Creation of a better society.</br>

						An educated person is more likely to develop better moral and
						 ethical values as compared to an uneducated
 					 person. Lack of education creates problems like superstition,
					  domestic violence, poor health, and poor living standards.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">How can education make you a better person</a></h3>
					<a href=""><img src="images/s4.png" alt="post image"/></a>
					<p>
						Education can make you a better person in certain ways which are discussed in this article.
						Education gives a new direction to people. ...
						Education helps in fighting with the odds in society. ...
						Education grooms personality. ...
						Education gives moral values and ethics. ...
						Education helps in making right decisions.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">Why is education so important in our life</a></h3>
					<a href=""><img src="images/s2.jpg" alt="post image"/></a>
					<p>
					  It helps people become better citizens, get a better-paid job,
						 shows the difference between good and bad. Education shows us
						 the importance of hard work and, at the same time, helps us grow
						 and develop. Thus, we are able to shape a better society to live
						 in by knowing and respecting rights, laws, and regulations.
					</p>
					</div>
					<div class="popular clear">
					<h3><a href="">How does education impact your future</a></h3>
					<a href=""><img src="images/s3.jpg" alt="post image"/></a>
					<p>
					   You gain knowledge, skills and experience to help you both
						 in your career and in life in general. On top of that, by gaining
						  additional skills in communication and problem solving and achieving
							 your goals, you can also increase your confidence.
					</p>
					</div>

				</div>
				<div class="samesidebar clear">
					<h2>Sidebar one Header</h2>
					<p>
					  Proper and good education is very important for all of us.
						 It facilitates quality learning all through the life among
						 people of any age group,cast, creed, religion and region. It
						 is the process of achieving knowledge, values, skills, beliefs,
						 and moral habits.
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

		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','gaAPI');

			  gaAPI('create', 'UA-XXXXXXXX-X', 'auto');
			  gaAPI('create', 'UA-XXXXXXXX-X', 'auto', {'name': 'ta'});
			  gaAPI('create', 'UA-XXXXXXXX-X', 'auto', {'name': 'tw'});
			  gaAPI('set', 'appName', 'Analytics');
			  gaAPI('send', 'pageveiw');
			  gaAPI('set', 'appVersion', preload.globals.buildLabel);
		</script>

<script type="text/javascript" src="js/scrolltop.js"></script>


</body>

</html>
