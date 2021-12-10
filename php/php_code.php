<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'visa');

	// initialize variables
	$Whereto = "";
	$Wherefrom= "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {

		$Whereto = $_POST['Whereto'];
		$Wherefrom= $_POST['Wherefrom'];

		mysqli_query($db, "INSERT INTO country (Whereto,Wherefrom) VALUES ('$Whereto', '$Wherefrom')"); 
		$_SESSION['message'] = "Destination saved"; 
		header('location: destination.php');
	}

    if (isset($_POST['update'])) {
        $id=$_POST['id'];
        $Whereto= $_POST['Whereto'];
        $Wherefrom = $_POST['Wherefrom'];
    
       $sql= mysqli_query($db, "UPDATE country SET Whereto='$Whereto', Wherefrom='$Wherefrom' WHERE  id=$id");
    
        $_SESSION['message'] = "Address updated!"; 
        header('location: destination.php');
    }


    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM country WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: destination.php');
    }

    ?>