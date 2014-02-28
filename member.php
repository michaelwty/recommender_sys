<?php
$title = "Home";
$content = '
        <img src="Images/coffee1.png" class="imgLeft" />
        <h3>New courses are coming!!!</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna,
            viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque
            velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent
            per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum
            dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper.
            Vestibulum consectetur cursus dui sit amet pretium.
        </p>

        <img src="Images/coffee2.png" class="imgRight" />
        <h3>Title 2</h3>
        <p>
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
            himenaeos. Donec porttitor placerat nunc a consectetur. Ut fermentum eleifend molestie.
            Donec fermentum risus sit amet ante cursus cursus. In hac habitasse platea dictumst.
            Praesent semper ante ut felis molestie aliquet. Nam quis dui a magna molestie blandit
            id et justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
            per inceptos himenaeos. Sed felis mauris, mattis a vulputate a, gravida nec metus.
            Vivamus elit augue, ullamcorper eget scelerisque vitae, tincidunt eget lorem. Curabitur
            id nibh libero, sed pulvinar nisi. Curabitur ultrices, neque in dignissim viverra,
            justo nisl dignissim magna, a tempor eros turpis in diam. Suspendisse potenti. Sed
            tincidunt est ac elit bibendum nec varius ante vestibulum.
         </p>

         <img src="Images/coffee3.png" class="imgLeft" />
         <h3>Title 3</h3>
         <p>
            In hac habitasse platea dictumst. In purus leo, consequat nec porta a, varius sed
            dui. Nulla placerat mollis tincidunt. Praesent at elit mi, a posuere quam. Suspendisse
            vel leo eu orci lacinia vestibulum. Fusce vel sem fermentum lectus tempus ultrices.
            Morbi arcu sem, rhoncus sit amet rutrum eget, interdum sit amet leo. Ut mattis lorem
            vitae dolor tincidunt mattis a lacinia velit. Cras sed nibh at urna imperdiet laoreet
            quis a risus.
         </p>';




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
            echo "<a href='logout.php'>Logout</a>";
        }
        else{
             echo "You are logged out. <a href='index.php'>Click</a> here to return.";
        }
          
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
