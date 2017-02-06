<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>

<p><a href="index.php">to index</a> </br> </br></p>

<table>

<?php 
echo 'start of chess board with two loops </br></br>';

for ($i=0; $i<8; $i++){
	echo '<tr>';
		for ($j=0; $j<8; $j++){
			$k=$i+$j;
				if ($k%2==0)
					{
					echo '<td style="background:red" width="35px" height="35px"></td>';
					}
					else
					{
					echo '<td style="background:yellow" width="35px" height="35px"></td>';
				}
				}

	echo '</tr>';
}

?>

</table>
<table>
</br></br>
<?php

echo 'start of chess board in one line with one loop </br></br>';
for ($i=0; $i<72; $i++) {
	if ($i%9==0) {
		//echo '<tr>  ';
	}else{ 
		if ($i%2==0) {
			echo '<td style="background:red" width="35px" height="35px"></td>';
		}else {
			echo '<td style="background:yellow" width="35px" height="35px"></td>';
		}
		if ($i%9==0) {
		//echo ' </tr> ';
		}
	}
}


?>
</table>

</br></br>
<table>

<?php

echo 'start of chess board with one loop</br></br>';
for ($i=0; $i<72; $i++) {
	if ($i%9==0) {
		echo '<tr>  ';
	}else{ 
		if ($i%2==0) {
			echo '<td style="background:red" width="35px" height="35px"></td>';
		}else {
			echo '<td style="background:yellow" width="35px" height="35px"></td>';
		}
		if ($i%9==0) {
		echo ' </tr> ';
		}
	}
}

?>
</table>

</br></br>


<?php 
	echo 'start of Fibonacci sequence </br> </br>';
	$a=0;
	$b=1;
	echo 'Fibonacci sequence : ' . $a . "; " . $b . '; ';
	for ($i=1; $i<30; $i++) {
		$c = $a + $b; 
		echo $c . '; '; 
		$a = $b;
		$b = $c;
	}

	?>
<?php 
echo '</br> </br> chess html </br> </br>';
?>



<table>
<tr >
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
</tr>
<tr>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
</tr>
<tr >
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
</tr>
<tr>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
</tr>
<tr >
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
</tr>
<tr>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
</tr>
<tr >
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
</tr>
<tr>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
	<td style="background:yellow" width="35px" height="35px"></td>
	<td style="background:red" width="35px" height="35px"></td>
</tr>
</table>

 </body>
</html>


