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
            
    <form action="login.php" method="post">
        Username: <input type="text" name="username" placeholder="Username or E-mail address"><br>
        Password : <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Log in">
    </form>

            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Course.php">Course</a></li>
                    <!--<li><a href="#">Recommendation</a></li><li>-->
                    <li><a href="#">About</a></li>
                    <!--<li><a href="Management.php">Management</a></li>-->
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
