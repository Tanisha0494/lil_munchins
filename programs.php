<?php 
$page ="Programs";
require_once('includes/header.php');
 ?>

<nav id="subnav">
	<ul>
		<li id="preschool"><a href="preschool.php">Preschool</a></li>
		<li id="daycare"><a href="daycare.php">Daycare</a></li>
		<li id="summer"><a href="summer.php">Summer Camp</a></li>
	</ul>
</nav>
<div class="orange"></div>

<main class="cf">
<h1>Programs</h1>
<img id="iprograms" src="images/programs.jpg" width="300" height="199" alt="A smiling child holding blocks that spell out learn" />
<p>Our curriculum and activities are to enhance the development mind of your munchkin. We encourage asking questions, exploration and creativity in all our programs. Those skills are important for building self confidence and making collaborating much easier for your munchkin. Our programs carter to all ages from infants to kindergarten munchkins.</p>

<a href="preschool.php">
<figure class="preschool">
<img src="images/pre-01.jpg" width="201" height="151">
</figure>
</a>

<a href="daycare.php">
<figure class="daycare">
<img src="images/day-01.jpg" width="201" height="151">
</figure>
</a>

<a href="summer.php">
<figure class="summercamp">
<img src="images/sum-01.jpg" width="201" height="151">
</figure>
</a>

</main>
<?php include_once('includes/footer.php'); ?>