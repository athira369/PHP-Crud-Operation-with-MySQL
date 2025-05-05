<?php
include('dbconnection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $query = mysqli_query($conn, "insert into crudoperation(Name,Email,Address) VALUES ('$name','$email','$address')");
    if ($query) {
        echo "<script>alert('successfully created record');</script>";
        echo"<script type='text/javascript'>document.location='View.php';</script>";
    } else {
        echo "<script>alert('there was an error');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Create User</title>
</head>

<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white w-50 rounded p-3">
            <h2>Fill Form</h2>
            <form method="POST">
                <div class="mb-2">
                    <input type="text" class="form-control" name="name" placeholder="enter name" />
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="email" placeholder="enter email" />
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="address" placeholder="enter address" />
                </div>

                <button class="btn btn-success" type="submit">
                    Create
                </button>
            </form>
        </div>
    </div>
</body>

</html>