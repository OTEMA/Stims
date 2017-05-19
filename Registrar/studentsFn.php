<?php

require '../Controller/db.php';
$result = $mysqli->query("SELECT * FROM students");

echo "<table border='1'>
<tr>
<th>Admission NO</th>
<th>Date Of Admission</th>
<th>Last Name</th>
<th>Middle Name</th>
<th>First Name</th>
<th>Date Of Birth</th>
<th>ID NO</th>
<th>Email</th>
<th>Tel</th>
<th>Image</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['AdmNo'] . "</td>";
    echo "<td>" . $row['DOA'] . "</td>";
    echo "<td>" . $row['Lname'] . "</td>";
    echo "<td>" . $row['Mname'] . "</td>";
    echo "<td>" . $row['Fname'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['IdNo'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Tel'] . "</td>";
    echo "<td>" . $row['Image'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();


