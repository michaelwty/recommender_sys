<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="public/css/main.css" />
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

             <div id="navig-bar" style="background-color:#a9a6a6">
             <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="member_index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="member_course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span></a>
                  <ul class="dropdown-menu" >
                        <li><a href="member_difficulty.php">Difficulty &nbsp</a></li>
                        <li><a href="member_recommend.php">Advanced &nbsp</a></li></ul></li>
                  <li><a href="member_study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                  <li><a href="member_contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                  <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                  <li><a href="member_management.php">Management &nbsp <span class="glyphicon glyphicon-wrench"></span></a></li>
              </ul>
              </div>
            </br>

           
            </div>

            <div id="content_area"  width="100%">
              <div id="chatstyle" style="height:100px;width:100%" align="center"">
            <font color="black" size="5"><div align="center">&nbsp &nbsp <span class="label label-danger">Chat and study GEEKSS!</span></span>&nbsp &nbsp</div></font>
            </div>

            <table width="100%">
            <tr>
            <td>



            
               





                <div id="input">
			    <div id="feedback"></div>
			<form action="#" method="post" id="form_input">
				

                <div class="input-group">
                  <span class="input-group-addon">Username</span>
                  <!--<input type="text" name="sender" id="sender" class="form-control" style="max-width: 80%">-->
                    <?php
                        echo $_SESSION['username'];
                    ?>
                </div>

                </br>
                <div class="input-group">
                  <span class="input-group-addon">Message&nbsp&nbsp</span>
                  <input type="text" id="message" class="form-control" placeholder="Click Submit" style="height:100px;max-width:80%;">
                </div>

                </br>
				
				


                <button class="btn btn-primary" id="send" value="Send Message" type="submit" name="Login">Send Message</button>



			</form>
		</div>
	
		<div class="well" id="messages">
		
		</div>


           
            </td>

            <td>
            <center><iframe style="opacity:0.9;"src="http://students.cse.tamu.edu/meghz17/index.html" src="demo_iframe.htm" name="iframe_a" width=800 height=550 style="float: left"></iframe></center>
            </td>
            </tr>
            </table>
            
        </div>


        <script type="text/javascript" src="scripts/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
		<script type="text/javascript" src="scripts/js/send.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
      
          
    </body>
</html>
