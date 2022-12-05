<!DOCTYPE html>
<html>
<head>
 
  <title></title>
  <style>
table, th, td {
  border: 1px solid;
  text-align: center;
}

table {
  width: 100%;
}
</style>
</head>
<body>
<a href="insertForm.php">Add Data</a> </br></br>
<a href="updateForm.php">Update Data</a> </br></br>
<a href="deleteForm.php">Delete Data</a> </br></br>
<form name = "Update" method="post" action="deleteForm.php">
  Id: <input type="number" name="id"><br><br>
  Name: <input type="text" name="name"><br><br>
  Address: <input type="text" name="address"><br><br>
  E-mail: <input type="text" name="email"><br><br>
  Phone: <input type="number" name="phone"><br><br>
  Age: <input type="number" name="age"><br><br>
  <input type="submit" name="submitDelete" value="Delete">
</form>



<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT ID, NAME, ADDRESS, EMAIL, PHONE, AGE FROM ptb1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>ID</th> <th>NAME</th> <th>ADDRESS</th> <th>E-MAIL</th> <th>PHONE</th> <th>AGE</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["ID"]. "</td> 
         <td>" . $row["NAME"]. "</td>
         <td>" . $row["ADDRESS"]. "</td>
         <td>" . $row["EMAIL"]. "</td>
         <td>" . $row["PHONE"]. "</td>
         <td>" . $row["AGE"]. "</td>


        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</body>
</html>