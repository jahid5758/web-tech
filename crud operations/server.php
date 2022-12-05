<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', ' ', 'project');
	// initialize variables
	$id = 0;
	$name = "";
	$address = "";
	$email= "";
    $phone= "";
    $age= "";
	
	$update = false;

	// insert data
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email=$_POST['email'];
        $phone=$_POST['phone'];
        $age=$_POST['age'];

		mysqli_query($db, "INSERT INTO info (name, address, email, phone, age) VALUES ('$name', '$address', '$email', '$phone', '$age')"); 
		$_SESSION['message'] = "Name saved"; 
		$_SESSION['message'] = "Address saved"; 
		$_SESSION['message'] = "Email saved"; 
		$_SESSION['message'] = "Phone saved"; 
		$_SESSION['message'] = "Age saved"; 

		header('location: index.php');
	}


	//update data
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email= $_POST['email'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address', email='$email', phone='$phone', age='$age' WHERE id=$id");
	$_SESSION['message'] = "Name updated!";
	$_SESSION['message'] = "Address updated!";
	$_SESSION['message'] = "Email updated!"; 
    $_SESSION['message'] = "Phone updated!"; 
	$_SESSION['message'] = "Age updated!"; 
	header('location: index.php');
    }
    // delete data
    if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Name deleted!"; 
	$_SESSION['message'] = "Address deleted!"; 
	$_SESSION['message'] = "Email deleted!"; 
    $_SESSION['message'] = "Phone deleted!"; 
	$_SESSION['message'] = "Age deleted!deleted!";

	header('location: index.php');
   }
?>