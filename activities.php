<?php 
$page ="Home-Activities";
$mainpage ="Resources";
require_once('includes/header.php');
$query="SELECT *
		FROM activities
		";
$result= $db->query($query);
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
<h1>Home Activities</h1>

<p>We know your munchkin loves activities so here are some from our favorite resource education.com. They have all kinds of activities for every occassion and every munchkin.</p>

<?php while($row = $result->fetch_assoc()) { ?>
<a href="<?php echo $row['link'] ?>" target="new">
<figure class="act">
	<figcaption>
		<img src="<?php echo $row['image'] ?>" alt="<?php echo $row['name']; ?>" title="<?php echo $row['name'] ?>">
		<h3 class="button"><?php echo $row['name'] ?></h3>
	</figcaption>
</figure>
</a>
<?php } ?>
</main>
<?php include_once('includes/footer.php'); ?>