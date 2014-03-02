<?php
    
    session_start();
    require("Model/Credentials.php");
    //check user&pwd
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    mysql_connect($host, $user, $passwd) or die(mysql_error());
    mysql_select_db($database);

    //Get course info from database.
    $result1 = mysql_query("SELECT * FROM `course`") or die(mysql_error());
    $courselist = array();
    $courselink = array();

    while ($row = mysql_fetch_array($result1)) {
        $i=0;
        array_push($courselist, $row['coursename']);
        array_push($courselink, $row['link']);
        $i++;
    }

    //Get recommendation info from database
    //$result2 = mysql_query("SELECT * FROM `review` INNER JOIN `attribute` INNER JOIN `preference` WHERE `review`.`username`='$username' AND `preference`.`username`='$username'      //                        AND `review`.`coursename` = `attribute`.`coursename`") or die(mysql_error());
    //$courselist = array();
    //$courselink = array();

    //while($row = mysql_fetch_array($result2)){
    //    ;
    //}



    //close    
    mysql_close();

    $title = "Recommendation";

?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>

    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
    <?php
        //session_start();
        if($_SESSION['username']){
            echo $_SESSION['username'].", you are a member.";
            echo "Welcome, ". $_SESSION['username']."!", '<br>';
        
        }
        else{
             echo "You are logged out. <a href='index.php'>Click</a> here to return.";
        }
        echo "<a href='logout.php'>Logout</a>"; 
    ?>

            <nav id="navigation">
                <ul id="nav">
                    <li><a href="member_index.php">Home</a></li>
                    <li><a href="member_course.php">Course</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="member_recommend.php">Recommendation</a></li><li>                    
                    <li><a href="member_management.php">Management</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php 
                    echo 'Course List','<br>';
                    for($j = 0; $j < count($courselist); $j++){
                        echo '<li><a href="'.$courselink[$j].'">'.$courselist[$j].'</a></li>','<br>';
                    }
             
                ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>