<?php
    
//session_start();
$title = "Management";

$content = '<h3>Coffee</h3>
            <a href="CourseAdd.php">Add a new course</a><br/>
            <a href="">Upload Image</a><br/>
            <a href="">Course Overview</a><br/>';

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
        session_start();
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Course.php">Course</a></li>
                    <li><a href="#">Recommendation</a></li><li>
                    <li><a href="#">About</a></li>
                    <li><a href="Management.php">Management</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>