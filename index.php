<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="template.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script>
	$(document).ready(function() {
		$("a.navbar").click(function() {
			var x = $(this).attr("id");
			$("section.tab").slideUp(400, function() {
				// Get the id of the link, parse it and then show that section
				if (x==undefined) {
					alert("The link's id is undefined");
				}
				else {
					x=x.replace("_nav","_tab");
					$("section#" + x).delay(400).slideDown("slow");
			
				}
			});
		});
	});
	</script>
	
	<title>Lawrence Bautista</title>
</head>

<body>
<header>
	<a href="index.php" id="homelink"><h1>Lawrence Bautista</h1></a>
</header>

<nav>	
	<ul class="navbar">
		<li class="navbar"><a class="navbar" id="home_nav" href="#">Home</a></li>
		<li class="navbar"><a class="navbar" id="edm_nav" href="#">EDM</a></li>
		<li class="navbar"><a class="navbar" href="#">Classical</a></li>
		<li class="navbar"><a class="navbar" href="#">Computers</a></li>
		<li class="navbar"><a class="navbar" href="#">About</a></li>
		<li class="navbar"><a class="navbar" href="#">Contact</a></li>
		<li class="navbar"><a class="navbar" href="#">Site Info</a></li>
	</ul>
	<div style="clear: both;"></div>
</nav>

<aside>
	<p>Obligatory Social Media Links</p>
	<ul>
		<li>Facebook</li>
		<li>Twitter</li>
		<li>Google+</i>
		<li>Reddit</li>
		<li>Soundcloud</li>
		<li>Myspace</li>
	</ul>
</aside>

<section class="tab" id="home_tab">	
	<h3>This is my site prototype...</h3>
	<p>No unauthorized access. Seriously. This is far from complete.</p>
	<h3>Bio</h3>
	<p>I am a CS/Bio graduate of McGill University. I've taken a lot of courses such as Artificial Intelligence, Operating Systems, Algorithms and Data Structures, and Computer Networks. Having lived in Montreal and Mississauga, I want to someday live somewhere else in the world</p> 
	<p>Playing piano is one of my favourite hobbies. I'm currently scheduled to do my ARCT in Piano Performance this coming August.</p>
	<p>I also play guitar and produce my own EDM music. I will show my projects in the future</p>
	<p>If this site hasn't been updated for a while, <a href="mailto:lawrence1315@gmail.com?Subject=Update%20Your%20Site!">remind me</a> to update it!</p>



<h1>News!</h1>
<article>
	<h3>2013-06-11 Used HTML5 layout features</h3>
	<p>The new layout features for HTML5 remove the necessity of div and span elements. Instead these are replaced with the elements: header, footer, nav, aside, section, article. While typing this I just realized how annoying html &lt &gt signs are to type in HTML.</p> 
</article>
</section>

<section class="tab" id="edm_tab">
	<h3>EDM Section</h3>
	<p>This is the EDM section. Original tracks by yours truly a.k.a. DJ Gak 2 (not actually a DJ). Visit my <a href="https://soundcloud.com/gak2">SoundCloud</a> to listen to my tracks!</p>
</section>

<footer>
	<p>Website programmed by Lawrence Bautista. &copy;2013. All rights reserved.</p>
	<p>This is coded in HTML5 and CSS3. Please upgrade to the latest version of your browser if you haven't already</p>
</footer>

</body>
</html>
