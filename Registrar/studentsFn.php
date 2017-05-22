<?php

require '../Controller/db.php';
//$result = $mysqli->query("SELECT * FROM students");
$result=$mysqli->query("select students.*,programs.prog_name from students join programs on students.prog_id=programs.prog_id");

echo "<table border='1' class='table table-striped'>
    <div class='table responsive'>
        <thead>
<tr>
<th>Admission NO</th>
<th>Date Of Admission</th>
<th>Program</th>
<th>Name</th>
<th>Date Of Birth</th>
<th>ID NO</th>
<th>Email</th>
<th>Tel</th>
<th>Image</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td align='center'>" . $row['AdmNo'] . "</td>";
    echo "<td>" . $row['DOA'] . "</td>";
    echo "<td>" . $row['prog_name'] . "</td>";
    echo "<td>" . $row['Lname'] . '&nbsp;' . '&nbsp;' . $row['Mname'] . '&nbsp;' . '&nbsp;' . $row['Fname'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['IdNo'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Tel'] . "</td>";
    echo "<td>" . $row['Image'] . "</td>";
    echo"<td><button class='btn btn-ready'>Update</button></td>";
    echo"<td><button class='btn btn-danger'>Delete</button></td>";
    echo "</tr>";
}
echo "</tbody>
</table>";

$mysqli->close();


