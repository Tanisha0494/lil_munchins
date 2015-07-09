<?php 
$page ="Resources";
require_once('includes/header.php');
 ?>

<nav id="subnav">
	<ul>
		<li id="eventc"><a href="event-cal.php">Event Calendar</a></li>
		<li id="activities"><a href="activities.php">Home Activities</a></li>
		<li id="books"><a href="books.php">Recommended Books</a></li>
	</ul>
</nav>
<div class="orange"></div>

<main class="cf">
<h1>Resources for You</h1>
<img src="images/parents1.jpg" width="300" height="199" alt="A smiling child holding bloacks that spell out learn" />
<p>Parenting is one of the toughest jobs out there and we're here to help make your job easier. We make sure to keep you up to date with all the happenings at school especially in the classroom. We want to make sure you know everything that is going on with your lil munchkin.</p>
<p>We also try to provide that helping hand through our site as well by giving you some helpful resources that our teachers have put together to further the knowledge and fun you have with your munchkin at home.</p>

<a href="event-cal.php">
<figure class="ecal">
<img src="images/cal-01.jpg" width="250" height="150">
</figure>
</a>

<a href="activities.php">
<figure class="fact">
<img src="images/act-01.jpg" width="250" height="150">
</figure>
</a>

<a href="books.php">
<figure class="fbook">
<img src="images/book-01.jpg" width="250" height="150">
</figure>
</a>

</main>
<?php include_once('includes/footer.php'); ?>