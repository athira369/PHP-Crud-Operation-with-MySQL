<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Records</title>
</head>

<body>
    <div class="bg-dark d-flex justify-content-center align-items-center vh-100 w-100">
        <div class="bg-white p-4 w-75 rounded">
            <a href ="Create.php" class = "btn btn-success">ADD +</a>
            <h3 class="mb-3">User Records</h3>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('dbconnection.php');
                    $fetch = mysqli_query($conn, "select * from crudoperation");
                    $row = mysqli_num_rows($fetch);
                    if ($row > 0) {
                        while ($r = mysqli_fetch_array($fetch)) {
                    ?>
                            <tr>
                                <td><?php echo $r['Name']; ?></td>
                                <td><?php echo $r['Email'] ;?></td>
                                <td><?php echo $r['Address']; ?></td>
                                <td><a href="update.php? id=<?php echo $r['ID']; ?>" class="btn btn-sm btn-info">Update</button>
                                        <a href="delete.php? delid=<?php echo $r['ID']; ?>" class="btn btn-sm  btn-danger">Delete</button>
                                </td>
                            </tr>
                            
                    <?php

                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>