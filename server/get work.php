<p><a href="index.php">to index</a> </br> </br></p>


<ul>
	<li><a href="?page=home">Home</a></li>
	<li><a href="?page=about">About</a></li>
	<li><a href="?page=Blog">Blog</a></li>
	<li><a href="?page=Contact">Contact</a></li>
</ul>
<?php

if (isset($_GET['page'])) {
	echo  $_GET['page'];
	}
?>