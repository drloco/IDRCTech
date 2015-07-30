<?php
session_start();
$servername = "localhost";
$username = "mmoral41";
$password = "GOh1C19rUNbyh";
$DB = "mmoral41";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    //echo "Connected successfully";
}
$user = $_GET["user"];
$send = $_GET["friend"];
if($send==false)
    $send = "Friend:";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IDRC Travel Companion</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #3D3D3D;">

 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/~mmoral41/CEN4010/index.html">Travel Companion</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo "<a href='/~mmoral41/CEN4010/server/messages.php?user=".$user."'>Messaging</a>"; ?>
                    </li>
                    <li>
                        <?php echo "<a href='/~mmoral41/CEN4010/server/inbox.php?user=".$user."'>Inbox</a>"; ?>
                    </li>
                    <li>
                        <?php echo "<a href='/~mmoral41/CEN4010/server/friends.php?user=".$user."'>Friends</a>"; ?>
                    </li>
                     <li>
                        <?php echo "<a href='/~mmoral41/CEN4010/server/travelbook.php?user=".$user."'>Travel Book</a>"; ?>
                    </li>
                     <li>
                        <?php echo "<a href='/~mmoral41/CEN4010/server/itinerary.php?user=".$user."'>Itinerary</a>"; ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    

    
    
<div class="row">
<div class="col-md-4 portfolio-item" style="padding-left:5%;">
    <h1 style="color:white;">Send A Message!</h1>
    <form id="msgform" action="sendmsg.php" method="post">
        <input type="hidden" name="user" value="<?php echo $user; ?>">
        <input type="text" name="friendP" value="<?php echo $send; ?>">
        <input type="text" name="subject" value="Subject:"><br>
        <textarea  rows="10" cols="100" name="msg" form="msgform">Enter Message Here.</textarea><br>
        <input type="submit">
    </form>
    </div>
    </div>
        <hr>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; IDRC TECH 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>