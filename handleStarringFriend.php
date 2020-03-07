<?php
	$conn=mysqli_connect('sophia.cs.hku.hk', '', '') or die('Error! first'.mysqli_error($conn));
	    mysqli_select_db($conn, 'h3537516') or die('Error! second'. mysqli_error($conn));
	    $query = 'select * from Z_friends_3322';
	    $result = mysqli_query($conn, $query) or die('Error! third'. mysql_error($conn));
		
		if($_GET['show']=="change"){
			while($row = mysqli_fetch_array($result)){
				if($_GET['friendname']==$row['name']){
					if ($row['starred'] == 'N'){
						print "<img src=\"star.png\" alt=\"star\" width=\"20\" height=\"20\" onload=\"show_starred();\">";
						$query2 = "update Z_friends_3322 set starred=\"Y\" where name="."\"".$_GET['friendname']."\"";
						mysqli_query($conn, $query2) or die('Error! four1'. mysql_error($conn));
					}else{
						print "<img src=\"unstar.png\" alt=\"unstar\" width=\"20\" height=\"20\" onload=\"show_starred();\">";
						$query2 = "update Z_friends_3322 set starred=\"N\" where name="."\"".$_GET['friendname']."\""; 
						mysqli_query($conn, $query2) or die('Error! four2'. mysql_error($conn));
					}
				}
			}
		}
	mysqli_close($conn);
?>
