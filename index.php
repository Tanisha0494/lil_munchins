<?php 
$page ="Home";
require_once('includes/header.php');
 ?>


<nav id="subnav" ></nav>
<div class="orange"></div>


<main class="cf">

<section class="container">

<a href="javascript:;">
<div id="next">
<img src="images/next-01.png" alt="right facing arrow" title="next" height="50" width="50">
</div>
</a>

<section id="slideshow" class="cf">
	<figure class="cf slide">
		<img src="images/music-time.jpg" width="400" height="300" alt="children with instruments"/>
		<figcaption>
			<h1>Music Time</h1>
			<h2>Our activities help your lil' munchkin's development</h2>
			<h3 class="button"><a href="preschool.php">Learn More</a></h3>
		</figcaption>
	</figure>

	<figure class="cf slide">
		<img src="images/program-slide.jpg" width="400" height="300">
		<figcaption>
			<h1>Programs Galore</h1>
			<h2>We've got a program for all you munchkins</h2>
			<h3 class="button"><a href="preschool.php">Learn More</a></h3>
		</figcaption>
	</figure>

	<figure class="cf slide">
		<img src="images/pirate.jpg" width="400" height="300">
		<figcaption>
			<h1>Ahoy Maties!,</h1>
			<h2>Your treasure awaits come find it. </h2>
			<h3 class="button"><a href="preschool.php">Learn More</a></h3>
		</figcaption>
	</figure>

	<figure class="cf slide">
		<img src="images/batty.jpg" width="400" height="300">
		<figcaption>
			<h1>Something's Batty</h1>
			<h2>It's a bird, it's a plane, no it's this month's book. </h2>
			<h3 class="button"><a href="preschool.php">Learn More</a></h3>
		</figcaption>
	</figure>
</section>

<a href="javascript:;">
<div id="prev">
<img src="images/previous-01.png" alt="left facing arrow" title="previous" height="50" width="50">
</div>
</a>

</section>

<figure class="call one">
<img src="images/cta1.jpg" width="225" height="125" alt="A book in a circle" />
<figcaption>
	<h3 class="button"><a href="books.php"> Check out July's Book of the Month</a></h3>
</figcaption>
</figure>
 
<figure class="call two">
<img src="images/cta2.jpg" width="225" height="125" alt="Pen and paper" />
<figcaption>
	<h3 class="button"><a href="enroll.php"> Enroll your munchkin</a></h3>
</figcaption>
</figure>

<figure class="call three">
<img src="images/cta3.jpg" width="225" height="125" alt="A treasure map" />
<figcaption>
	<h3 class="button"><a href="event-cal.php"> Ahoy,the treasure hunts awaits!</a></h3>
</figcaption>
</figure>

<h2>Our Affiliates</h2>

<section class="afil">
<a href="http://www.toysrus.com/shop/index.jsp?categoryId=2255956&ab=TRU_Header:Utility1:TRU-Logo:Affiliate" target="_blank"><img src="images/affiliatebanner.jpg" width="720" height="300" title="Toy R Us / Baby R Us Affiliate Program"></a>

<a href="http://www.plattonline.com/webcampaign/lo-lux" target="_blank">
<img src="images/Lo_Lux-BannerAd.png" width="468" height="60">
</a>
</section>

</main>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/slider.js"></script>
<?php include_once('includes/footer.php'); ?>