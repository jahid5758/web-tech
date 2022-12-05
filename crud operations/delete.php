<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
// sql to delete a record
$sql = "DELETE FROM ptb1 WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>