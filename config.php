<?php // the line below is setting the work environment to display errors on our dom, this is good for testing 
// but we want to either delete or change the 1 to a 0 when making the site public?>
<?php ini_set('display_errors', '1'); ?>
<html>
 <head>
  <title>PHP Intro</title>
 </head>
 <body>
 <?php 
 $name = 'Jake';
 $last = 'Gibs';
 
 //this is how we can make a new line appear in the dom by using php.. we can also use \n too
 $newLine = "\r";
 
 //below is how we declare arrays and how we can add to the array 
 $array = array();
 $array[] = 'Marvin';
 $array[] = 'Bob';
 //print_r($array);
 
 //below is an associative array, similar to a hash in ruby
 $descriptions = array(
     'Earth' => 'mostly harmless',
	 'Marvin' => 'the paranoid andro9d',
	 'Mars' => 'nothing but desert');

//here we are adding the key "zaphod" and value associated to that key "president" to the associative array "$descriptions"
$descriptions['Zaphod'] = 'President';
 echo "Earth is described as {$descriptions ['Earth']}";
 
 //below is how to concat strings to the original string in php
 $name .= $newLine;
 $name .= $last;
 //echo $name;
 ?> 
 
<p>below is similar to an erb tag but is how we call variables in php</p> 
 <h1> <?= $name ?></h1>
  
  <?php 
  
  //below is a standard while loop for php
  $i = 0;
  while ($i < 10) {
	//echo $i . '<br>';  
	$i ++;
  };
  
  //regualr for loop like in javascript
  for ($i = 0; $i < count($array); $i++) {
     if ($i == 1) {
		continue; 
	 };
    // echo '<li>' . $array[$i] . '</li>';
  };
  
  //echo "sort";
  sort($array); 
  foreach ($array as $value) {
	//echo "<li>$value</li>  ";
  };
  
//echo "www.php.net/manual/en/" ;

//similar to a regualr for loop in ruby , access to the key and value of 
//a (hash in ruby language) an associative array (in php language)   
  foreach ($descriptions as $key => $value) {
	//echo "<li>$key is $value</li> "; 
  };
  
  //below is declaring a variable then ucfirst is like Uppercase first char
  // when passed the argument string to lower aka strtolower 
  //when passed in the variable name containg the value "JAKE"
  $name = "JAKE";
  $name = ucfirst(strtolower($name));
  //echo $name;
  ?>
  
  <p>
  <?php
  
  //below is require from external file, which contains function
  // which we then call later
  //in this case both require and include work similarly in equivalent ways
  require './convertseconds.php';
  echo convertSeconds(2347); 

//include simply includes a snippet from another external file
  include './paragraph.html';
  
  //below use var_dump to find out what is contained in a variable
  var_dump($descriptions);
  ?>
  </p>
 </body>
</html>
