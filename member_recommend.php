<?php
    
    session_start();
    require("Model/Credentials.php");
    //check user&pwd
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    mysql_connect($host, $user, $passwd) or die(mysql_error());
    mysql_select_db($database);

    //Get course info from database.
    $result1 = mysql_query("SELECT * FROM `review` INNER JOIN `course` WHERE `review`.`username`='$username' AND `review`.`coursename` = `course`.`coursename`") or die(mysql_error());
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
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

             <div id="navig-bar" style="background-color:#a9a6a6">
             <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="member_index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="member_course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a data-toggle="dropdown" href="#">Recommendation &nbsp <span class="glyphicon glyphicon-volume-up"><span class="caret" ></span></span></a>
                  <ul class="dropdown-menu" >
                        <li><a href="member_recommend.php">Course Recommend &nbsp</a></li>
                        <li><a href="#">Group Recommend &nbsp</a></li></ul></li>
                  <li><a href="member_study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                  <li><a href="member_contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                  <li><a data-toggle="dropdown" href="#">Search &nbsp <span class="glyphicon glyphicon-globe"><span class="caret" ></span></span></a>
                  <ul class="dropdown-menu" >
                       <li><a href="member_search.php">Course Name Search &nbsp</a></li>
                       <li><a href="member_difficulty.php">Course Difficulty Search &nbsp</a></li></ul></li>
                  <li><a href="member_management.php">Management &nbsp <span class="glyphicon glyphicon-wrench"></span></a></li>
              </ul>
              </div>
            
            <div id="content_area">
                <?php 
                    echo '<h2>Your Course History</h2>','<br>';
                    for($j = 0; $j < count($courselist); $j++){
                        echo '<li><a href="'.$courselink[$j].'">'.$courselist[$j].'</a></li>','<br>';
                    }
                    
                    echo '<h2>Course You May Like</h2>','<br>';           
                    echo '<li><a href="https://www.coursera.org/course/pkubioinfo">'.'Bioinformatics: Introduction and Methods'.'</a></li>','<br>';
                    echo '<li><a href="https://www.coursera.org/course/interactivepython">'.'An Introduction to Interactive Programming in Python'.'</a></li>','<br>';    
                ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>