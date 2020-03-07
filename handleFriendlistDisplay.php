<?php
	$conn=mysqli_connect('sophia.cs.hku.hk', '', '') or die('Error! '.mysqli_error($conn));
	    mysqli_select_db($conn, 'h3537516') or die('Error! '. mysqli_error($conn));
	    $query = 'select * from Z_friends_3322';
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
