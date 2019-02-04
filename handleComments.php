<?php  
    $conn=mysqli_connect('sophia.cs.hku.hk', 'h3537516', '19971010') or die('Error! 1'.mysqli_error($conn));
    mysqli_select_db($conn,'h3537516') or die('Error! 2'.mysqli_error($conn));
    
    $postid = $_GET['postID'];
    $TIME = date("Y/m/d")."-".date("h:i");
    $comment_content = $_GET['comment'];

    $query = "select * from comments";
    $result = mysqli_query($conn,$query) or die('Error! 3'.mysqli_error($conn));
    
    $largest = 0;
    while($row = mysqli_fetch_array($result)){
        $largest = $row["commentID"];
        $query3 = "select * from comments";
        $result3 = mysqli_query($conn,$query3) or die('Error! 4'.mysqli_error($conn));
        while($row2 = mysqli_fetch_array($result3)){
            if($row2["commentID"] > $largest){
                $largest = $row2["commentID"];
            }
        }
    }
    $largest += 1;
    $query2 = "INSERT INTO comments (commentID, postID, time, commContent) VALUES ('$largest', '$postid', '$TIME', '$comment_content')";
    $result2 = mysqli_query($conn,$query2) or die('Error! 5'.mysqli_error($conn));
    
    mysqli_close($conn);
?>









    <!-- // $query3 = "select * from comments";
    // $result3 = mysqli_query($conn,$query3) or die('Error! 3'.mysqli_error($conn));
    // while($row = mysqli_fetch_array($result3)){
    //     //if($row["postID"]==$postid){
    //         print "<span>You said:".$row['commContent'];
    //         print "<br>";
    //         print "time:".$row['time'];
    //         print "<br></span>";
    //     //}
    // }
    // print "<input id=\"".$postid."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
    
    
    // if($postid>= 1 && $postid <= 9){
    //     $query4 = "select * from comments";
    //     $result4 = mysqli_query($conn,$query4) or die('Error! 3'.mysqli_error($conn));
    //     $query5 = "select * from comments";
    //     $result5 = mysqli_query($conn,$query4) or die('Error! 3'.mysqli_error($conn));
    //     //this is to assign the postID so that commentID would be unique for every comment.
    //     $count = 0;
    //     while($row = mysqli_fetch_array($result4)){
    //         $compare = $row["commentID"];
    //         while($row2 = mysqli_fetch_array($result5)){
    //             if($compare <= $row2["commentID"]){
    //                 $count = $row2["commentID"];
    //             }
    //         }
    //     }
    //     $count += 9;
    //     print "<input id=\"".$count."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
    // }else{
    //     print "<input id=\"".$postid."\""." type=\"text\" onkeypress=\"exec_show_comments(event,this);\" placeholder=\"write a comment here...\">";
    // } -->