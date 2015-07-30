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
echo $user;

$sql= "SELECT DISTINCT account.username,account.age,account.firstname,account.location
FROM account,friends WHERE account.username = friends.friendname and friends.username='".$user."'";
    
    
$result = $conn->query($sql);
//echo $sql;
//echo "<br>";
//echo $result;
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

<style>
    td { background-color: white;}
    p {color:white;}
    
</style>
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
    <h1 style="color:white;">Add a Friend!</h1>
<form action='friendadd.php' method='get'>
        <input type='hidden' name='user' value=<?php echo "'".$user."'"; ?>></input>
       <input type='text' name='friend' value="Enter Friend's name:"></input>
       <input type='submit' value="Click here to Add Friend!"></form>

<p><?php if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'><tr><td>Username</td><td>Age</td><td>Firstname</td><td>Location</td>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>". $row["age"]."</td><td>". $row["firstname"]."</td><td>". $row["location"]."</td><td>
        <a href='/~mmoral41/CEN4010/server/messages.php?user=".$user."&friend=".$row["username"]."'>Message</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>You have no friends :(.</p>";
}?></p>
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
