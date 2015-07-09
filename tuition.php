<?php 
$page="Tuition-Deals";
$mainpage ="Learning-Center";
require_once('includes/header.php');

$valid = true;

//parse form
if($_POST['did_submit']){
	$fname= clean_input($_POST['fname']);
	$lname= clean_input($_POST['lname']);
	$email= clean_input($_POST['email']);
	$deals= clean_input($_POST['deals']);
	$privacy= clean_input($_POST['privacy']);

	$valid = true;

	if(strlen($fname) == 0){
		$valid = false;
		$errors['fname'] ='Please fill in your first name';
	}

	if(strlen($lname) == 0){
		$valid = false;
		$errors['lname'] ='Please fill in your last name';
	}

	if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
		$valid = false;
		$errors['email'] = 'Please provide a vaild email address like name@email.com';
	}

	if ( $deals != 1 ) {
		$valid = true;
		$deals=0;

	}

	if ( $privacy != 1 ) {
		$valid = false;
		$errors['privacy'] = 'You must agree to the Terms of Service and Privacy Policy.';
	}

	if ($valid) {
		 $query_add = "INSERT INTO form
						(first, last, email, privacy,deals)
						VALUES 
						('$fname', '$lname', '$email', '$privacy', '$deals')";
		$result_add = $db->query ($query_add);
	}else{
			$errors['db'] = 'Something went wrong during submission. We\'re sorry, try again later.';
		}//end if valid


	if($db->affected_rows == 1){
		$status = 'success';
		$message = 'Success your form has been sent you will receive a conformation email shortly.';

		$body = "Tuition info for $fname $lname";

		$subject= "Tuition information request";


	}else{
		$status='error';
		$message ="Your form couldn't be sent. Please fix any errors below and try again.";
	}

	if($valid){
		mail ("randomness2784@yahoo.com","$subject","$body","$email");

		mail ("$email","$subject","$body","randomness2784@yahoo.com");
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

<p>Learn about the rates and deals we offer, you can call us to get the inforamtion or recieve an email detailing the current tuition rate and deals.</p>

<section id="form">

	<?php 
	if( isset($message) ){ ?>

<div class="<?php echo $status; ?>message">
	<p><?php echo $message; ?></p>
	<ul id ="errors">
<?php 
	if( isset($errors) ){ ?>
		<?php foreach( $errors as $error ){ ?>
		<li><?php echo $error; ?></li>
						<?php } ?>
		<?php } ?>
	</ul>
	
</div>
		<?php }//end if message exists ?>
	



<img src="images/formicon.png" width="200" height="200" title="emailicon" alt="emailicon">

<form name="tform" id="tform" action="#form" method="post">

	<label for="fname">First Name:</label>
	<input type="text" name="fname" id="fname">
	
	<label for="lname">Last Name:</label>
	<input type="text" name="lname" id="lname">
	
	<label for="email">Email:</label>
	<input type="email" name="email" id="email">

	<label for="deals"><input type="checkbox" name="deals" id="deals" value="1"> I would like special deals and newsletters from Lil' Munchkins.</label>
	
	<label for="privacy"><input type="checkbox" name="privacy" id="privacy" value="1"> I have read the <a href="javascript:;">Terms of Use and Privacy Policy</a></label>

	<input type="submit" value="Submit Form">

	<input type="hidden" name="did_submit" value="1">
</form>
</section>

</main>
<?php include_once('includes/footer.php'); ?>