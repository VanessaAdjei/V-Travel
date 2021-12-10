<?php session_start() ?>
<html>
<head>
  <title>V Visa </title>
</head>

<link rel="stylesheet" type = "text/css" href ="../css/manager_registered_success.css">
<link rel="stylesheet" type = "text/css" href ="../css/bootstrap.min.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<body>



  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./php/homepage.php">V Visa</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active" ><a href="../php/homepage.php">Home</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
          <li><a href="../php/clogin.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
        </ul>
      </div>
      <button onclick="history.back()">Go Back</button>
    </div>
  </nav>

  <?php

require 'connection.php';
$conn = Connect();

if(isset($_POST['submit'])){
        $purpose =$conn->real_escape_string($_POST['purpose']);
        $age =$conn->real_escape_string($_POST['age']);
        $duration =$conn->real_escape_string($_POST['duration']);
        $visatype =$conn->real_escape_string($_POST['visatype']);
        $fullname =$conn->real_escape_string($_POST['fullname']);
        $email =$conn->real_escape_string($_POST['email']);
        $number =$conn->real_escape_string($_POST['number']);

        $query = "INSERT into requirements(purpose,age,duration,visatype,fullname,email,number) VALUES('" . $purpose . "','" . $age . "','" . $duration. "','" . $visatype . "','" . $fullname . "','" . $email. "','" . $number. "')";
        $success = $conn->query($query);

        if (!$success){
            die("Couldnt enter data: ".$conn->error);
        }
    }

   
?>


<div class="container">
  <div class="jumbotron" style="text-align: center;">
      <h2> <?php echo "Yay!" ?> </h2>
      <h1>You have submitted your form.</h1>
      <p>You can go to step 3 <a href="Traveldoc.php">HERE</a></p>
  </div>
</div>

  </body>

<footer class="container-fluid bg-4 text-center">
<br>
<p> V Visa 2021 </p>

<br>
</footer>
</html>

