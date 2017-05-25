<?php
require 'db.php';
$result = $mysqli->query("select * from schools ORDER BY School_name ASC");
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
                                <td><?php echo $row['School_name']; ?></td>
                                <td><a href='../Controller/deletesc.php?id=<?php echo $row['School_Id']; ?>' class="btn btn-block btn-danger"> delete</a></td>
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