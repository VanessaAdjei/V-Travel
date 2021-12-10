<?php  include('connection.php'); ?>
<?php  include('php_code.php'); ?>


<br><br><br><br> <br> <br>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM country WHERE id=$id");

		if ($record->num_rows == 1 ) {
			$n = mysqli_fetch_array($record);
			$Whereto = $n['Whereto'];
			$Wherefrom = $n['Wherefrom'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>V Visa</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/destination.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/override.css">
  <link rel="stylesheet" type="text/css" href="../css/features.css">
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<!--navigation bar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand heading" href="homepage.php">V Visa</a>
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
                    <a class="nav-link" href="https://www.google.com">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="in_nav">
                   
                    
                </li>
                <li class="nav-item" id="outl_nav">
                    <a class="nav-link" href="../php/clogin.php">Login</a>
                </li>
                <li class="nav-item" id="outr_nav">
                    <a class="nav-link" href="../php/index.php">Sign Up</a> 
                </li>
            </ul>
			<button onclick="history.back()">Go Back</button>
        </div>
    </nav>

<div>

<?php $results = mysqli_query($db, "SELECT * FROM country" ); ?>

<table>
	<thead>
		<tr>
			<th>Where To</th>
			<th>Where From</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['Whereto']; ?></td>
			<td><?php echo $row['Wherefrom']; ?></td>
			<td>
				<a href="destination.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


<form method="post" action="">
<div class="input-group">  
<input type="hidden" name="id" value="<?php echo $id; ?>">
</div>
<div class="input-group">
			<label>Where To</label>
			<input type="text" name="Whereto" value="<?php echo $Whereto; ?>">
		</div>
		<div class="input-group">
			<label>Where From</label>
			<input type="text" name="Wherefrom" value="<?php echo $Wherefrom; ?>">
		</div>

		<div class="input-group">
        <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
	
</form>
</div>
<!--Link to step two-->
<div>
                <p>	<a class="fcc-btn" href="purpose.php">Step Two</a>    </p> 
            
</div>

	
 
<!--footer-->
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


