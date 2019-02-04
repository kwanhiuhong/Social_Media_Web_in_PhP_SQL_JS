<?php
	$conn=mysqli_connect('sophia.cs.hku.hk', 'h3537516', '19971010') or die('Error! '.mysqli_error($conn));
	    mysqli_select_db($conn, 'h3537516') or die('Error! '. mysqli_error($conn));
	    $query = 'select * from friends';
	    $result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));
	    

	    print "<ol>";
	    while($row = mysqli_fetch_array($result)){
		    if ($row['starred'] == 'Y'){
		    	print "<li>".$row['name'];
		    	print "</li>";
		    }
		}
	    print "</ol>";
	    mysqli_close($conn);
?>