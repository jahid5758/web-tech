
<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name =$_POST["name"];
  $address =$_POST["address"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $age=$_POST["age"];

// sql to update a record
$sql = "UPDATE ptb1 SET name='$name', address = '$address', email='$email', phone='$phone', age='$age' WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>