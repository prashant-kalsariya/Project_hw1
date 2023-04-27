<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cart Data</title>
</head>

<body>
    <?php

    session_start();
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    include 'C:\xampp\htdocs\Project_practies\PHP\navbar.php';

    $id = $_SESSION['id'];

    $select_query = "select * from cart where id=$id";
    $query = mysqli_query($con, $select_query);

    while ($arr = mysqli_fetch_assoc($query)) {
        echo $arr['name'];
    ?>
        <a href="\Project_practies\PHP\main_remove_cart.php?id=<?php  echo $arr['id']; ?>&name=<?php echo $arr['name'] ?>">
            <img src="\Project_practies\images\delete_logo.png" alt="Delte logo" height="30">
        </a>
    <?php
        echo '<br>';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>