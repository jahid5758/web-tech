<?php
include 'conn.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$name = $_POST['name'];
$address = $_POST['address'];
$email=$_POST["email"];
$phone=$_POST["phone"];
$age=$_POST["age"];

$sql = "INSERT INTO ptb1 (name, address, email, phone, age)
VALUES ('$name', '$address', '$email', '$phone', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  // select or read data start
header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}
?>