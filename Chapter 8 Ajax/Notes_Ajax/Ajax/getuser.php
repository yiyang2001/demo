<?php
$q=$_GET["q"]; // 1

$con = mysqli_connect('localhost', 'root', '','ajax_demo') OR
  die('Could not connect: ' . mysqli_error($con));
  
$sql="SELECT * FROM users WHERE firstname = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['hometown'] . "</td>";
  echo "<td>" . $row['job'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>