<?php
$errors = array();
$missing = array();
if (isset($_POST['send'])) {
	$to = 'jake@example.com';
	$subject = 'Feedback from contact form';
	$expected = array('name', 'email', 'comments');
	$required = array('name', 'email');
	require './mailprocess.php';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Object</title>
</head>

<body>
<h1>Contact Us</h1>

<?php if ($errors || $missing) { ?>
<p class="warning">Please fix the item(s) indicated.</p>
<?php } ?>
	<form name= "contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<p>
			<label for="name">Name:
            <?php if ($missing && in_array('name', $missing)) { ?>
              <span class="warning">Please enter your name</span>
              <?php } ?>
            </label>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="email">Email:
            <?php if ($missing && in_array('email', missing)) { ?>
             <span class="warning">Please enter your email</span>
              <?php } ?>
            </label>
			<input type="text" name="email" id="email">
		</p>
		<p>
			<label for="comments">Comments:
              <?php if ($missing && in_array('comments', missing)) { ?>
             <span class="warning">Please enter a comment</span>
              <?php } ?>
            </label>
			<textarea name="comments" name="comments" id="comments"></textarea>
		</p>
		<p>
			<input type="submit" name="send" id="send" value="Send Comments">
		</p>

	</form>
	<pre>
    <?php
//	if ($_GET) {
		//echo 'Contents of the $_GET array: <br>';
		//print_r($_GET);
	//} elseif ($_POST) {
		//echo 'Contents of the $_POST array: <br>';
		//print_r($_POST);
	//};
	?>
    </pre>
</body>
</html>