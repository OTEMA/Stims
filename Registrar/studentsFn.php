<?php
require '../Controller/db.php';
$result = $mysqli->query("select students.*,programs.prog_name from students join programs on students.prog_id=programs.prog_id");
?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <form name="form1" method="post" action="">
                <table class="table table-bordered table-striped table-hover table-responsive">
                    <thead>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Admission NO</th>
                            <th>Date Of Admission</th>
                            <th>Program</th>
                            <th>Name</th>
                            <th>Date Of Birth</th>
                            <th>ID NO</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Image</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <?php
                    $a = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <td align="center"><?php echo $a++; ?></td>
                                <td><?php echo $row['AdmNo']; ?></td>
                                <td><?php echo $row['DOA']; ?></td>
                                <td><?php echo $row['prog_name']; ?></td>
                                <td><?php echo $row['Lname'] . '&nbsp;' . '&nbsp;' . $row['Mname'] . '&nbsp;' . '&nbsp;' . $row['Fname']; ?></td>
                                <td><?php echo $row['DOB']; ?></td>
                                <td><?php echo $row['IdNo']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Tel']; ?></td>
                                <td><?php echo $row['Image']; ?></td>
                                <td><a href='../Controller/delete.php?admno=<?php echo $row['AdmNo']; ?>' class="btn btn-block btn-danger"> delete</a></td>
                            </tr>
                            <?php
                        }
                        $mysqli->close();
                        ?>
                    </tbody>
                </table>
            </form>
        </td>
    </tr>
</table>