<?php
require 'db.php';
$result = $mysqli->query("select department.*,schools.School_name from department join schools on department.School_id=schools.School_id");
?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <form name="form1" method="post" action="">
                <table class="table table-bordered table-striped table-hover table-responsive">
                    <thead>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Name</th>
                            <th>School</th>
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
                                <td><?php echo $row['Dept_Name']; ?></td>
                                <td><?php echo $row['School_name']; ?></td>
                                <td><a href='../Controller/deletedp.php?id=<?php echo $row['Department_id']; ?>' class="btn btn-block btn-danger"> delete</a></td>
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