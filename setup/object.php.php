<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Object</title>
</head>

<body>
  <ul>
	<?php 
 	 $now = new DateTime();
  	 echo "Boston time: " . $now->format('F j, Y h:ia') . '<br>';

	 $tokyo = new DateTimeZone('Asia/Tokyo');
	 $now->setTimezone($tokyo);

     echo "Tokyo time: " . $now->format('F j, Y h:ia');
     ?>
  </ul>

  <div>
    
  </div>
</body>
</html>