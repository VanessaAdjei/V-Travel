<!DOCTYPE html>
<html>
<head>
	<title>V Visa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="images/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="override.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">

<br> <br><br><br><br><br><br>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand heading" href="homepage.php">V Visa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="destination.php">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="purpose.php">Requirement Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Traveldoc.php">Travel Documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="downloads.php">Download</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="in_nav">
                   
                    
                </li>
                <li class="nav-item" id="outl_nav">
                    <a class="nav-link" href="clogin.php">Login</a>
                </li>
                <li class="nav-item" id="outr_nav">
                    <a class="nav-link" href="index.php">Sign Up</a> 
                </li>
            </ul>
            <button onclick="history.back()">Go Back</button>
        </div>
    </nav>



  <?php

require 'connection.php';
$conn = Connect();

if(isset($_POST['submit'])){
        $Whereto =$conn->real_escape_string($_POST['whereto']);
        $Wherefrom =$conn->real_escape_string($_POST['wherefrom']);

        $query = "INSERT into country (Whereto,Wherefrom) VALUES('" . $Whereto . "','" . $Wherefrom . "')";
        $success = $conn->query($query);

        if (!$success){
          echo $conn->error;
           // die("Couldnt enter data: ".$conn->error);
        }
    }

   
?>


<div class="container">
  <div class="jumbotron" style="text-align: center;">
      <h2> <?php echo "Yay!" ?> </h2>
      <h1>You have submitted your destination.</h1>
      <p>Go back to home <a href="index.php">HERE</a></p>
  </div>
</div>

  </body>

<footer class="container-fluid bg-4 text-center">
<br>
<p> V Visa 2021 </p>

<br>
</footer>
</html>









