<?php 
$page ="Event-Calendar";
$mainpage ="Resources";
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

<main>
<h1>Event Calendar</h1>
<img src="images/event-cal.jpg" width="300" height="150" alt="A mom and her children playing outside" />

<iframe src="https://www.google.com/calendar/embed?title=Our%20Events&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=17mflqlum4iphrob6s3iunaa1s%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="480" height="400"></iframe>

</main>
<?php include_once('includes/footer.php'); ?>