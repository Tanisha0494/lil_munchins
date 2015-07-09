<?php 
require('includes/db-connect.php');
include_once('includes/functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width = device-width, initial-scale = 1">

<title>Lil Munchkin's - <?php echo $page; ?></title>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


<link rel="icon" type="image/ico" href="images/hands.ico"/>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/format.css">
</head>

<body id="<?php echo $page; ?>" class="<?php echo $mainpage ?>">
<header class="cf">
	<h1><a href="index.php">Lil Munchkin's</a></h1>

	<section class="social cf">

		<h2>Let's Stay Connected:</h2>

		<img src="images/phone.png" width="33" height="33" alt="telephone icon" />

		<h3>619 - 209 - 8920</h3>

		<img src="images/social-media.png" width="117" height="33" alt="facebook, twitter, and google plus social media icons"/>

	</section>
	<form id="searchform" action="search.php" method="get" value="<?php echo $_GET['phrase'] ?>">
		<input type="text" name="search" id="search">

	<input type="submit" value="Search">
	</form>

</header>

<section id="gnav" class="cf">
	<nav class="cf">
		<ul id="global" class="cf">
			<li id="gprograms"><a href="programs.php">Programs</a>
			</li>
			<li id="gcenter"><a href="center.php">Center</a>
			</li>
			<li id="gresources"><a href="resources.php">Resources</a></li>
			<li id="gabout"><a href="about.php">About</a></li>
			<li id="gcontact"><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</section>