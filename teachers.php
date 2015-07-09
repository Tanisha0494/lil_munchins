<?php 
$page="Teachers";
$mainpage ="Learning-Center";
require_once('includes/header.php');
$query = "SELECT *
		  FROM teachers";
$result = $db->query($query);
 ?>

<nav id="subnav">
	<ul>
		<li id="owners"><a href="owners.php">Owners</a></li>
		<li id="educate"><a href="teachers.php">Teachers</a></li>
		<li id="enroll"><a href="enroll.php">Enrollment</a></li>
		<li id="tuition"><a href="tuition.php">Tuition & Deals</a></li>

	</ul>
</nav>
<div class="orange"></div>

<main class="cf">
<h1>Teachers</h1>
<h2>Preschool Teachers</h2>
<?php while($row = $result->fetch_assoc()){ ?>
<figure class="teacher">
	<img src="<?php echo $row['image'] ?>" title="<?php echo $row['name']; ?>" alt="<?php echo $row['name'];?>">
	<figcaption>
		<h4><?php echo $row['name'] ?></h4>
		<p class="degree"><?php echo $row['degrees'] ?></p>
		<p><?php echo $row['description'] ?></p>
	</figcaption>
</figure>
<?php } ?>

<?php 
$query_day="SELECT *
			FROM daycare_staff";
$result_day=$db->query($query_day);
 ?>
<h2>Daycare Teachers</h2>
<?php while($row = $result_day-> fetch_assoc()) {?>
<figure class="teacher">
	<img src="<?php echo $row['image']; ?>" title="<?php echo $row['name']; ?>" alt="<?php echo $row['name'];?>" >
	<figcaption>
		<h4><?php echo $row['name']; ?></h4>
		<p class="degree"><?php echo $row['degrees']; ?></p>
		<p><?php echo $row['description']; ?></p>
	</figcaption>
</figure>
<?php } ?>
</main>
<?php include_once('includes/footer.php'); ?>