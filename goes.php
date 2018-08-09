<?php

    $dbhost = 'sql304.byethost.com';
    $dbname = 'b11_22536593_couple';
    $dbuser = 'b11_22536593';
    $dbpass = 'Umbrella@B';


 $goesurl = $_POST['goesurl']; 
	
     $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

      $sql = "SELECT * FROM longshort WHERE `shorts`='$goesurl'";
        

	$result = mysqli_query($link, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
 	$redir = $row['longs'];

	}

	  header("Location: ".$redir.""); 
	?>
     
