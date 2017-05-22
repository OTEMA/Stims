<?php
require '../Controller/db.php';
$result = $mysqli->query("select students.*,programs.prog_name from students join programs on students.prog_id=programs.prog_id");
?>
 <table class="table table-striped">
    <div class='table responsive'>
        <thead class="thead-inverse">
            <tr>
                <th></th>
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

        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tbody>
                <tr>
                    <td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row['AdmNo']; ?>"></td>
                    <td><?php echo $row['AdmNo']; ?></td>
                    <td><?php echo $row['DOA']; ?></td>
                    <td><?php echo $row['prog_name']; ?></td>
                    <td><?php echo $row['Lname'] . '&nbsp;' . '&nbsp;' . $row['Mname'] . '&nbsp;' . '&nbsp;' . $row['Fname']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['IdNo']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Tel']; ?></td>
                    <td><?php echo $row['Image']; ?></td>
                </tr>
                <?php
            }
            $mysqli->close();
            ?>
            <tr>
                <td colspan="3" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete" class="btn btn-block btn-danger"></td>
            </tr>
        </tbody>
    </div>
 </table>