<?php  
    $conn=mysqli_connect('sophia.cs.hku.hk', 'h3537516', '19971010') or die('Error! '.mysqli_error($conn));
    mysqli_select_db($conn, 'h3537516') or die('Error! '. mysqli_error($conn));
    $query = 'SELECT * FROM posts INNER JOIN friends ON posts.friendID = friends.friendID';
    $result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));

    $check = $_GET['show'];

    if ($check == 'three'){
        $count = 0;
        while($row = mysqli_fetch_array($result)){
            if ($count < 3){
                print "<tr>";
                print "Name: ".$row['name']."     "."<span class= \"star\" id=\"".$row['name']."\""." onclick=\"star_or_unstar(this);\">";
                if ($row['starred']=='Y'){
                    print "<img src=\"star.png\" width=\"20\" height=\"20\">";
                }else if($row['starred']=='N'){
                    print "<img src=\"unstar.png\" width=\"20\" height=\"20\">";
                }
                print "</span>";
                print "<br>";
                print "Time: ".$row['time']." ";
                print "Location: ".$row['location'];
                print "<br>";
                print "Post: ".$row['postID']." ";
                print "Content: ".$row['content'];
                print "<br>";
                print "<img src=".$row['image']." width=\"250\" height=\"80\" >";
                print "<br>";

                $query2 = 'select * from comments';
                $result2 =  mysqli_query($conn, $query2) or die('Error! '. mysql_error($conn));
                print "<span class=\"".$row['postID']."\"".">";
                while($row2 = mysqli_fetch_array($result2)){
                    if($row2["postID"]==$row["postID"]){
                        print "<span>You said: ".$row2['commContent'];
                        print "<br>";
                        print "Time: ".$row2['time'];
                        print "<br></span>";
                    }
                }
                print "<input id=\"".$row['postID']."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
                print "<br><br>";
                print "</tr>";
                $count+=1;
            }
        }
    }

    if ($check == 'more' && $_GET["value"] == 1){
        $count2 = 3;
        while($row = mysqli_fetch_array($result)){
            if($count2 < 6 && $row['postID'] > 3){
                print "<tr>";
                print "Name: ".$row['name']."     "."<span class= \"star\" id=\"".$row['name']."\""." onclick=\"star_or_unstar(this);\">";
                if ($row['starred']=='Y'){
                    print "<img src=\"star.png\" width=\"20\" height=\"20\">";
                }else if($row['starred']=='N'){
                    print "<img src=\"unstar.png\" width=\"20\" height=\"20\">";
                }
                print "</span>";
                print "<br>";
                print "Time: ".$row['time']." ";
                print "Location: ".$row['location'];
                print "<br>";
                print "Post: ".$row['postID']." ";
                print "Content: ".$row['content'];
                print "<br>";
                print "<img src=".$row['image']." width=\"250\" height=\"80\" >";
                print "<br>";
                
                $query2 = 'select * from comments';
                $result2 =  mysqli_query($conn, $query2) or die('Error! '. mysql_error($conn));
                print "<span class=\"".$row['postID']."\"".">";
                while($row2 = mysqli_fetch_array($result2)){
                    if($row2["postID"]==$row["postID"]){
                        print "<span>You said: ".$row2['commContent'];
                        print "<br>";
                        print "Time: ".$row2['time'];
                        print "<br></span>";
                    }
                }
                print "<input id=\"".$row['postID']."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
                print "<br><br>";
                print "</tr>";
                $count2+=1;
            }
        }
            
    }

    if ($check == 'more' && $_GET["value"] == 2){
        $count2 = 6;
        while($row = mysqli_fetch_array($result)){
            if($count2 < 9 && $row['postID'] > 6){
                print "<tr>";
                print "Name: ".$row['name']."     "."<span class= \"star\" id=\"".$row['name']."\""." onclick=\"star_or_unstar(this);\">";
                if ($row['starred']=='Y'){
                    print "<img src=\"star.png\" width=\"20\" height=\"20\">";
                }else if($row['starred']=='N'){
                    print "<img src=\"unstar.png\" width=\"20\" height=\"20\">";
                }
                print "</span>";
                print "<br>";
                print "Time: ".$row['time']." ";
                print "Location: ".$row['location'];
                print "<br>";
                print "Post: ".$row['postID']." ";
                print "Content: ".$row['content'];
                print "<br>";
                print "<img src=".$row['image']." width=\"250\" height=\"80\" >";
                print "<br>";
                
                $query2 = 'select * from comments';
                $result2 =  mysqli_query($conn, $query2) or die('Error! '. mysql_error($conn));
                print "<span class=\"".$row['postID']."\"".">";
                while($row2 = mysqli_fetch_array($result2)){
                    if($row2["postID"]==$row["postID"]){
                        print "<span>You said: ".$row2['commContent'];
                        print "<br>";
                        print "Time: ".$row2['time'];
                        print "<br></span>";
                    }
                }
                print "<input id=\"".$row['postID']."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
                print "<br><br>";
                print "</tr>";
                $count2+=1;
            }
        }
            
    }

    mysqli_close($conn);
?> 