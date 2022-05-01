<?php

session_start();
if (!isset($_SESSION['employee_login'])) {
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="text-center mt-5">
        <div class="container">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <h1>Halaman Employee</h1>
            <hr>
            <h3>
                <?php if(isset($_SESSION['employee_login'])){ ?>
                Selamat Datang, <?php echo $_SESSION['employee_login']; } ?>
            </h3>
            <a href="../logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>

</html>