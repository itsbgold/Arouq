<?php

$get_id = $_GET['post_id'];

$get_com = "SELECT * FROM comments WHERE post_id='$get_id' ORDER BY 1 DESC" ;
$run_com = mysqli_query($con, $get_com);

while($row = mysqli_fetch_array($run_com))
{
	$com = $row['comment'];
	$com_name = $row['comment_author'];
	$date = $row['date'];

	echo "
	<div id='comments'>
	<h3>$com_name<h3><i><span>Said</span></i> on $date
	<p>$com</p>
	</div>
	";
	
}



?>