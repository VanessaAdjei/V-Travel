<?php include ('filesLogic.php');?> 
<!DOCTYPE html>
<html>
<head>
	<title>V Visa</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" href="images/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/override.css">
    <link rel="stylesheet" type="text/css" href="../css/downloads.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">
	<!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand heading" href="../php/homepage.php">V Visa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../php/homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../php/destination.php">Destination</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="../php/purpose.php">Requirement Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../php/Traveldoc.php">Travel Documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../php/downloads.php">Downloads</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="in_nav">
                   
                    
                </li>
                <li class="nav-item" id="outl_nav">
                    <a class="nav-link" href="../php/c.php">Login</a>
                </li>
                <li class="nav-item" id="outr_nav">
                    <a class="nav-link" href="../php/index.php">Sign Up</a> 
                </li>
            </ul>
            <button onclick="history.back()">Go Back</button>
        </div>
    </nav>
<br> <br><br><br><br><br><br><br> <br><br><br><br><br><br>
<table class="container">
<thead >
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

  </body>

<br> <br><br><br><br><br><br> <br> <br><br><br><br><br>
<footer class="page-footer font-small pt-4">

    	<div class="container-fluid text-center text-md-left">
      		<div class="row">
        		<div class="col-md-6 mt-md-0 mt-3">
          			<h6 class="footerText">Contact Us</h6>
          			<p class="footerText"><i class="fa fa-envelope icon" aria-hidden="true"></i> help@vvisa.com</p>
          			<p class="footerText"><i class="fa fa-phone icon" aria-hidden="true"></i> 0504518047 (9:00 am to 9:00 pm)</p>	
        		</div>
        		<hr class="clearfix w-100 d-md-none pb-3">
        		<div class="col-md-3 mb-md-0 mb-3">
          		</div>
         	 	<div class="col-md-3 mb-md-0 mb-3">
            		<ul class="list-unstyled">
             			<li><a href="#" class=" footerText">About Us</a></li>
              			<li><a href="#" class=" footerText">Terms and Conditions</a></li>
              			<li><a href="#" class=" footerText">Privacy Policy</a></li>
            		</ul>
          		</div>
      		</div>
    	</div>
    	
    	<div class="text-center py-3">
    		<a class="social-icon" href="https://www.facebook.com/"><i class="fa fa-facebook mr-md-5 mr-3 social-icon"> </i></a>
          	<a class="social-icon" href="https://www.twitter.com/"><i class="fa fa-twitter mr-md-5 mr-3 social-icon"> </i></a>
       		<a class="social-icon" href="https://www.instagram.com/"><i class="fa fa-instagram mr-md-5 mr-3 social-icon"> </i></a>
    	</div>
    	<div class="footer-copyright text-center py-3 madeby">
    		Made by<p> Vanessa Adjei</p>
    	</div>
  	</footer>
<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
  window.onload=function(){
    if(window.location.href.indexOf("status=loggedin")!=-1)
    {
      document.getElementById('in_nav').style.display = "block";
      document.getElementById('outl_nav').style.display = "none";
      document.getElementById('outr_nav').style.display = "none";
    }
    else
    {

      document.getElementById('outl_nav').style.display = "block";
      document.getElementById('outr_nav').style.display = "block";
    }
  }

  function toggleText()
  {
    var but = document.getElementById("VABtn");
    if(but.innerHTML=="View All")
      but.innerHTML="Hide";
    else if(but.innerHTML=="Hide")
      but.innerHTML="View All";
  }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/animations.js"></script>
</body>
</html>


