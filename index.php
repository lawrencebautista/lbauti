<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="template.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script>
	var currentTab = "home_tab";
	var isSliding = false;

	$(document).ready(function() {
		$("a.navbar").click(function() {
			if (!isSliding) {
				isSliding = true;
				var x = $(this).attr("id");
				$("section#" + currentTab).slideUp(function() {
					// Get the id of the link, parse it and then show that section
					
					if (x==undefined) {
						alert("Sorry, this section is not available yet!");
						isSliding = false;
					}
					else {
						var y=x.replace("_nav","_tab");
						$("section#" + y).slideDown(function() {
							currentTab = y;
							isSliding = false;
						}); 
					}
				});
			}
		});
	});
	</script>
	
	<title>Lawrence Bautista</title>
</head>

<body>
<header>
	<a href="index.php" id="homelink"><h1 id="banner">Lawrence Bautista</h1></a>
</header>

<div id="bodycontainer">
<aside>
	<p>Obligatory Social Media Links</p>
	<ul class="links">
		<li>Facebook</li>
		<li>Twitter</li>
		<li>Google+</i>
		<li>Reddit</li>
		<li>Soundcloud</li>
		<li>Myspace</li>
	</ul>
</aside>

<div id="mainsection">
<nav>	
	<ul class="navbar">
		<li class="navbar"><a class="navbar" id="home_nav" href="#">Home</a></li>
		<li class="navbar"><a class="navbar" id="edm_nav" href="#">EDM</a></li>
		<li class="navbar"><a class="navbar" id="classical_nav" href="#">Classical</a></li>
		<li class="navbar"><a class="navbar" href="#">Computers</a></li>
		<li class="navbar"><a class="navbar" href="#">About</a></li>
		<li class="navbar"><a class="navbar" href="#">Contact</a></li>
		<li class="navbar"><a class="navbar" href="#">Site Info</a></li>
	</ul>
	<!--<div style="clear: both;"></div>-->
</nav>


<section class="tab" id="home_tab">	
	<h2>Website Prototype</h2>
	<p>This is currently an experimental site which may or not be fully utilized in the future.</p>
	<h3>Biography</h3>
	<p>I am a CS/Bio graduate of McGill University. I've taken a lot of courses such as Artificial Intelligence, Operating Systems, Algorithms and Data Structures, and Computer Networks.</p> 
	<p>Playing piano is one of my favourite hobbies. I'm currently scheduled to do my ARCT in Piano Performance this coming August.</p>
	<p>I also play guitar and produce my own EDM music. I will show my projects in the future</p>
	<p>If this site hasn't been updated for a while, <a href="mailto:lawrence1315@gmail.com?Subject=Update%20Your%20Site!">remind me</a> to update it!</p>



<h2>News!</h2>
<?php
$db = new SQLite3('sqlite3/blog.db');

$result = $db->query('SELECT * from Entries');

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    //var_dump($row);
    $id = $row['Id'];
    $author = $row['Author'];
    $date = $row['Date'];
    $title = $row['Title'];
    $content = $row['Content'];
echo
"<article id=\"blog" . $id . "\">
	<h3 class=\"blogtext\">" . $title . "</h3>
	<small>Posted by " . $author . " on " . $date . "</small>
	<p class=\"blogtext\">" . $content . "</p>
</article>";
}
?>

</section>

<section class="tab" id="edm_tab">
	<h2>EDM Section</h2>
	<p>This is the EDM section. Original tracks by yours truly a.k.a. DJ Gak 2 (not actually a DJ). Visit my <a href="https://soundcloud.com/gak2">SoundCloud</a> to listen to my tracks!</p>
	<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F82818231&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>
</section>

<section class="tab" id="classical_tab">
	<h2>Classical Section</h2>
	<p>Here I will be posting my awesome classical music videos. Usually me playing the piano.</p>
	<h3>Franz Liszt: Hungarian Rhapsody No. 2</h3>
	<iframe width="560" height="315" src="http://www.youtube.com/embed/5hha3veKirA" frameborder="0" allowfullscreen></iframe>
</section>
</div>
</div>

<footer>
	<p>Website programmed by Lawrence Bautista. &copy;2013 All rights reserved.</p>
	<p>This is coded in HTML5 and CSS3. Please upgrade to the latest version of your browser if you haven't already</p>
</footer>

</body>
</html>
