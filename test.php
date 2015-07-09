<?php 
$page="Tuition-Deals";
$mainpage ="Learning-Center";
require_once('includes/header.php');

$valid = true;
//parse form
if($_POST['did_submit']){
	$fname= clean_input($_POST['fname']);
	$lname= clean_input($_POST['lname']);
	$femail= clean_input($_POST['femail']);

	$valid = true;

	if(strlen($fname) == 0){
		$valid = false;
		$errors['fname'] ='Please fill in your first name';
	}

	if(strlen($lname) == 0){
		$valid = false;
		$errors['lname'] ='Please fill in your last name';
	}

	if(! filter_var($femail, FILTER_VALIDATE_EMAIL)){
		$valid = false;
		$errors['email'] = 'Please provide a vaild email address like name@email.com';
	}

	if($valid){
		$query_insert = "INSERT INTO form
						(fname, lname,email)
						VALUES
						('$fname', '$lname', '$femail')";

		$result_insert= $db->query($query_insert);
	}

	if($db->affected_rows == 1){
		$status = 'success';
		$message = 'Success your form has been sent you will receive a conformation email shortly.';
	}else{
		$status='error';
		$message ="Your form couldn't be sent. Please fix any errors beloww and try again.";
	}	
}
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

<main>
<h1>Tuition & Deals</h1>
<h2>Current Rates</h2>

<p>Learn about the rates and deals we offer, you can call us to get the inforamtion or recieve an email detailing tuition rate and deals.</p>
<?php //show feedback message if it exists
			if( isset($message) ){ ?>
				<div class="<?php echo $status; ?> message">
					<?php 
					echo $message;
					//check to see if there were validation errors
					if(isset($errors)){ ?>
					<ul>
						<?php foreach( $errors as $error ){ ?>
							<li><?php echo $error; ?></li>
						<?php } ?>
					</ul>
					<?php } //end if validation errors exist ?>
				</div>
			<?php }//end if message exists ?> 
<section id="form">



<img src="images/formicon.png" width="200" height="200" title="emailicon" alt="emailicon">

<form name="tuitionform" id="tform" action="#form" method="post">

	<label for="fname">First Name:</label>
	<input type="text" name="fname" id="fname" required>
	
	<label for="lname">Last Name:</label>
	<input type="text" name="lname" id="lname" required>
	
	<label for="femail">Email:</label>
	<input type="email" name="femail" id="femail" required>
	
	<label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="privacy">I would like special deals form Lil' Munchkins. Please read our <a href="privacy">Privacy Policy</a></label>

	<input type="hidden" value="did_submit">
	
	<input type="submit" value="Submit Form">

</form>
</section>

</main>
<?php include_once('includes/footer.php'); ?>