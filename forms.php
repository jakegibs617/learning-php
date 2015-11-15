<?php
$errors = array();
$missing = array();
if (isset($_POST['send'])) {
	$to = 'jake@example.com';
	$subject = 'Feedback from contact form';
	$expected = array('name', 'email', 'comments');
	$required = array('name', 'comments', 'email');
	$headers = "From: webmaster@example.com\r\n";
	$headers = "Content-type: text/plain; charset-utf-8";

//check with hosting platform to see if this line below is needed
	// $authenticate = '-femail@email.com';
	// otherwise you can just do :
	$authenticate = null;
	require './mailprocess.php';
	if ($mailSent) {
		header('Location: thanks.php');
		exit;
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Object</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Contact Us</h1>
    
    <?php if ($_POST && $suspect) || ($_POST && isset($errors['mailfail'])) {?>
	    <p class="warning">Sorry, your mail could not be sent</p>
    <?php } elseif ($errors || $missing) {?>
		<p class="warning">Please fix the item(s) indicated.</p>
	<?php } ?>

	<form name="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	    <p>
	        <label for="name">Name:
	        <?php if ($missing && in_array('name', $missing)) { ?>
	        <span class="warning">Please enter your name</span>
	        <?php } ?>
	        </label>
	        <input type="text" name="name" id="name"
	        <?php 
	        	if ($errors || $missing) {
	        		echo 'value="' . htmlentities($name, ENT_COMPAT, 'utf-8') . '"';
	        	}
	        ?>
	        >
	    </p>
	    <p>
	        <label for="email">Email:
	        <?php if ($missing && in_array('email', $missing)) { ?>
	        <span class="warning">Please enter your email address</span>
	        <?php } elseif (isset($errors['email'])) {?>
	        <span class="warning">Invalid email address</span>
	        <?php  } ?>
	        </label>
	        <input type="text" name="email" id="email"
	        <?php 
	        	if ($errors || $missing) {
	        		echo 'value="' . htmlentities($email, ENT_COMPAT, 'utf-8') . '"';
	        	}
	        ?>
	        >
	    </p>
	    <p>
	        <label for="comments">Comments:
	        <?php if ($missing && in_array('comments', $missing)) { ?>
	        <span class="warning">You forgot to add your comments</span>
	        <?php } ?>
	        </label>
	        <textarea name="comments" id="comments"><?php 
	        	if ($errors || $missing) {
	        		echo htmlentities($comments, ENT_COMPAT, 'utf-8');
	        	}?></textarea> 
	    </p>
	    <p>
	        <input type="submit" name="send" id="send" value="Send Comments">
	    </p>
	</form>
</body>
</html>