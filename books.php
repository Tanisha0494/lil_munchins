<?php 
$page ="Recommended-Books";
$mainpage ="Resources";

require_once('includes/header.php');

$query="SELECT *
		FROM books
		WHERE month_book = 0";
$result=$db->query($query);
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

<?php 
$query_mon ="SELECT *
			FROM books
			WHERE month_book=1";
$result_mon=$db->query($query_mon);
 ?>

<?php while($row = $result_mon->fetch_assoc() ){ ?>

	<figure class="monbook cf">
		<img src="<?php echo $row['image']; ?>" >
			<figcaption>
				<h2><?php echo $row['title']; ?></h2>
				<h4><?php echo $row['author']; ?></h4>
				<p><?php echo $row['description']; ?></p>
			</figcaption>
	</figure>

<?php } ?>

<?php while( $row = $result->fetch_assoc() ) {?>

<figure class="book">
	<img src="<?php echo $row['image']; ?>" >
		<figcaption>
			<h2><?php echo $row['title']; ?></h2>
			<h4><?php echo $row['author']; ?></h4>
			<p><?php echo $row['description']; ?></p>
		</figcaption>
</figure>

<?php } ?>
</main>
<?php include_once('includes/footer.php'); ?>