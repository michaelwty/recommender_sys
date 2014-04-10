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

    <body id="whole">
        <div id="wrapper">
            <div id="banner">     
                
                <div class="container">
      <h2>New Courses Are Coming!!!</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="../Images/logo_small.png" alt="Apple iPhone 5S">
            <div class="carousel-caption">
              <h3>The Data Scientist’s Toolbox</h3>
              <p>In this course you will get an introduction to the main tools and ideas in the data scientists toolbox. The course gives an overview of the data, 
                  questions, and tools that data analysts and data scientists work with. There are two components to this course. The first is a conceptual introduction 
                  to the ideas behind turning data into actionable knowledge. The second is a practical introduction to the tools that will be used in the program like
                   version control, markdown, git, Github, R, and Rstudio.</p>
            </div>
          </div>
          <div class="item">
            <img src="../Images/logo_small (1).png" alt="Samsung Galaxy Note 3">
            <div class="carousel-caption">
              <h3>Mobile Cloud Computing with Android</h3>
              <p>In this course----the third in a trans-institution sequence of MOOCs on Mobile Cloud Computing with Android--we will learn how to connect Android mobile
                   devices to cloud computing and data storage resources, essentially turning a device into an extension of powerful cloud-based services on popular cloud 
                  computing platforms, such as Google App Engine and Amazon EC2.</p>
            </div>
          </div>
          <div class="item">
            <img src="../Images/logo_small (2).png" alt="Apple iPhone 5S">
            <div class="carousel-caption">
              <h3>Reasoning, Data Analysis and Writing</h3>
              <p>Reasoning is important. This course will teach you how to do it well. You will learn some simple but vital rules to follow in thinking about any topic at 
                  all and some common and tempting mistakes to avoid in reasoning. We will discuss how to identify, analyze, and evaluate arguments by other people 
                  (including politicians, used car salesmen, and teachers) and how to construct arguments of your own in order to help you decide what to believe or what to do.
                   These skills will be useful in dealing with whatever matters most to you.</p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>          
            </div>

            
              <div id="navig-bar" style="background-color:#a9a6a6">
               <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="Course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <!--<li>
                      <a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span>
                  </a>
                      <ul class="dropdown-menu" >
                        <li><a href="difficulty.php">Difficulty &nbsp</a></li>
                         <li><a href="difficulty.php">Advanced &nbsp</a></li>
                       </ul>
                  </li>-->
                   <!--<li><a href="study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>-->
                    <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                   <li><a href="contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                    <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                </ul>
                </div>


            <form action="login.php" method="post">
                <div class="input-group">
                <label>Username</label>
                 <input class="form-control" type="text" name="username" placeholder="Username or E-mail address"><br>
               <label>Password</label>
                  <input class="form-control" type="password" name="password" placeholder="password"><br>
                    <br/>
                <button class="btn btn-primary" type="submit" name="Login">Log In</button>
                    </div>
             </form>
            
            <div id="content_area">
                <?php echo $content; ?>
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
