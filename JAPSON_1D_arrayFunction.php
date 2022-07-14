<!doctype html>
<html>
<head>
	<title></title>
	<meta charset ="utf-8" />
	<style>
		body{
			background-color: #3A6B35;
		}
		table{
			border:2px ridge black;
			border-collapse: collapse;
			display:inline-table;
			
		}
	
		th,td{
			border:2px ridge black;
			background-color: #CBD18F;
			font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;
		}
		.title{
			background-color: #E3B448;
			font-size: 20px;
		}
		
	</style>
</head>
<body>
 	<link rel="stylesheet" type="text/css" href="" />
	
<table style ="width:100%">

<tr>
	<th colspan = "3" class = "title">Array Function For Sorting</th>
</tr>
<tr>
	<th >Function</th>
	<th>Initial Values</th>
	<th>Function name with the parameters applied: <br> Values of the array after</th>
</tr>

<tr>
	<td>Sort <br> Sort arrays in ascending order but destroys the keys.</td>
	<td>
	<?php  	
  $arr = [
    'Lebron James',
     'Kobe Bryant',
	'Michael Jordan',
	'Chris Paul',
	'Stephen Curry',
	'Scottie Pippen',
	'Anthony Davis',
	'Russell Westbrook',
	'Damian Lillard',
	'Carmelo Anthony'
  ];  
  
  echo "<pre>";	  
  print_r($arr);
  echo "</pre>";
  
?>
  	
	</td>
	<td>
	<?php  	
	
 $arr = [
   'Lebron James',
	'Kobe Bryant',
   'Michael Jordan',
   'Chris Paul',
   'Stephen Curry',
   'Scottie Pippen',
   'Anthony Davis',
   'Russell Westbrook',
   'Damian Lillard',
   'Carmelo Anthony'
 ];  
 
 sort($arr);
 echo "<pre>";	  
 print_r($arr);
 echo "</pre>";
 
?>
	</td>
</tr>
 <tr> 
 <td>asort <br><br> Sort associative arrays in ascending order, according to the value</td>
 <td>	<?php  	
	
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	
   ?></td>

   <td>	<?php  	
	
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	asort($arr);
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	
   ?></td>
</tr>
<tr>
<td>ksort <br><br> Sort Associative arrays in ascending order, according to the key.</td>
<td>	<?php  	
	
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	
   ?></td>
   <td>	<?php  	
	
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	ksort($arr);
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	
   ?></td>
</tr>

<br><br>

<th colspan = "3" class = "title">Adding and Removing an Array Element</th>


<tr>
	<th >Function</th>
	<th>Initial Values</th>
	<th>Function name with the parameters applied: <br> Values of the array after</th>
</tr>
	 
	<td>array_push <br><br> Adds one or more elements to the end of an array.</td>
	<td>
	<?php  	
	
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	
   ?>

	</td>
	<td> 
		<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	array_push($arr,'John Stockton','Karl Malone');
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>
</td>
 <tr>

	<td>array_pop <br><br> Deletes the last element of an array.</td>
	<td> 
	<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>
		
	</td>

	<td> 
	<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	array_pop($arr);
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>
	</td>
</tr>
 <tr>
	<td>array_shift <br><br> shifts the first value of the array off and returns it, <br> shortening the array by one element and moving everything down.<br> All numerical array keys will be modified to start counting from zero while literal keys won't be affected.</td>
	<td>
	<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>

	</td>
	<td>
	<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	array_shift($arr);
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>
	</td>
</tr>
<tr>
	<th colspan = "3" class = "title">Searching Arrays</th>
</tr>
<tr>
	<th >Function</th>
	<th>Initial Values</th>
	<th>Function name with the parameters applied: <br> Values of the array after</th>
</tr>
<tr>
<td>in_array <br><br> searches an array for a specific value.</td>



<td> 
<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	
	
	echo "<pre>";	  
	print_r($arr);
	echo "</pre>";
	?>
</td>

<td>
<?php
	$arr = [
	  'Lebron James',
	   'Kobe Bryant',
	  'Michael Jordan',
	  'Chris Paul',
	  'Stephen Curry',
	  'Scottie Pippen',
	  'Anthony Davis',
	  'Russell Westbrook',
	  'Damian Lillard',
	  'Carmelo Anthony'
	];  
	echo "Search for Lebron James, Kyrie Irving and Carmelo Anthony: ";
	echo "<br>";
	echo "<br>";
	if (in_array("Lebron James", $arr, TRUE))
  {
  echo "Match found for Lebron James<br>";
  }
else
  {
  echo "Match not found for Lebron James<br>";
  } 
if (in_array("Kyrie Irving",$arr, TRUE))
  {
  echo "$people Match found for kyrie Irving<br>";
  }
else
  {
  echo "Match not found for Kyrie Irving<br>";
  }

if (in_array("Carmelo Anthony",$arr, TRUE))
  {
  echo "Match found for Carmelo Anthony<br>";
  }
else
  {
  echo "Match not found for Carmelo Anthony<br>";
  }
?>

</td>

</tr>
<tr>
  <td>array_key_exists <br><br> Checks if the given key or index exists in the array</td>

  <td>
  <?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r($arr);
	  echo "</pre>";
	  ?>


  </td>

  <td>
  <?php
	$arr = array (
	  'Lakers' => 'Lebron James',
	  'Lakers' => 'Kobe Bryant',
	  'Chicago' => 'Michael Jordan',
	  'Phoenix' => 'Chris Paul',
	  'Golden State' => 'Stephen Curry',
	  'Chicago' => 'Scottie Pippen',
	  'Lakers' => 'Anthony Davis',
	  'Lakers' => 'Russell Westbrook',
	  'Portland' => 'Damian Lillard',
	  'Lakers' =>'Carmelo Anthony'
	);  
	
	echo "Search if the Lakers key exist:";
	echo "<br>";
	echo "<br>";
	if (array_key_exists("Lakers",$arr))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>	
  </td>
</tr>
<tr>
	<th colspan = "3" class = "title">Adding and Removing Elements within an Array</th>
</tr>
<tr>
	<th >Function</th>
	<th>Initial Values</th>
	<th>Function name with the parameters applied: <br> Values of the array after</th>
</tr>
<tr>
	<td>array_slice <br><br> returns the sequence of elements from the array array as specified by the offset and length parameters.</td>

  	<td>
	  <?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r($arr);
	  echo "</pre>";
	  ?>
	</td>

	<td>
	<?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  echo "array_slice(\$arr,2,-1)); <br><br>";
	  echo "<pre>";	  
	  print_r(array_slice($arr,2,-1));
	  echo "</pre>";
	  ?>
	</td>
</tr>
<tr>
	<td>array_splice <br><br> Remove a portion of the array and replace it with something else</td>
	  <td>
	  <?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r($arr);
	  echo "</pre>";
	  ?>

	  </td>

	  <td>
	  <?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  echo "array_splice(\$arr,0,5)); <br><br>";
	  echo "<pre>";	 
	  array_splice($arr,0,5);
	  print_r($arr);
	  echo "</pre>";
	  ?>
	  </td>
	</tr>
	<tr>
	<th colspan = "3" class = "title">Removing Duplicate Elements of an Array</th>
</tr>
<tr>
	<th >Function</th>
	<th>Initial Values</th>
	<th>Function name with the parameters applied: <br> Values of the array after</th>
</tr>

<tr>
	<td>array_unique <br><br> removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.</td>

	  <td><?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Stephen Curry',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r($arr);
	  echo "</pre>";
	  ?>
	  </td>
	  <td>
	  <?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Stephen Curry',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  echo "The Values <b>Stephen Curry</b> is repeated <br><br>";
	  echo "<pre>";	  
	  print_r(array_unique($arr));
	  echo "</pre>";
	  ?>
		
	  </td>
	</tr>
	<tr>
		<td>array_values <br><br> returns an array containing all the values of an array.</td>
		<td>
		<?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Stephen Curry',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r($arr);
	  echo "</pre>";
	  ?>

		</td>
		<td>
		<?php
	$arr = [
		'Lebron James',
		 'Kobe Bryant',
		'Michael Jordan',
		'Chris Paul',
		'Stephen Curry',
		'Scottie Pippen',
		'Anthony Davis',
		'Stephen Curry',
		'Russell Westbrook',
		'Damian Lillard',
		'Carmelo Anthony'
	  ];  
	  
	  
	  echo "<pre>";	  
	  print_r(array_values($arr));
	  echo "</pre>";
	  ?>
		</td>

	</tr>
</table>
<br><br>
</body>
</html>