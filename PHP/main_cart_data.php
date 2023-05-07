<!doctype html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="\Project_practies\CSS\main_cart_data.css"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cart Data</title>

    <style>
        <?php
        include 'D:\xamp\htdocs\Project_practies\CSS\main_cart_data.css';
        ?>
    </style>


</head>

<body>
    <?php

    session_start();
    include 'D:\xamp\htdocs\Project_practies\PHP\signup_connection.php';

    include 'D:\xamp\htdocs\Project_practies\PHP\navbar.php';

    if ($arr_data['count'] == 0) {
    ?>
        <h2 id="no_cart">No data found</h2>
    <?php
    }

    $id = $_SESSION['id'];

    $select_query = "select * from cart where id=$id";
    $query = mysqli_query($con, $select_query);
    ?>
    <div class="container">
        <?php
        while ($arr = mysqli_fetch_assoc($query)) {
            // echo $arr['name'];
        ?>

            <div class="cart_info">
                <table>
                    <tr>
                        <td colspan="2">
                            <img src="<?php echo $arr['photo']; ?>" alt="<?php echo $arr['name']; ?>" height="200">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo  $arr['name']; ?></td>
                    </tr>
                    <tr>
                        <td>quantity</td>
                        <td>
                            <a href="\Project_practies\PHP\minus.php?name=<?php echo $arr['name']
                                                                            ?>">
                                <img src="\Project_practies\images\minus-logo.png" alt="Delte logo" title="Decrease quantity" height="30">

                            </a><?php echo $arr['quantity']; ?><a href="\Project_practies\PHP\plus.php?name=<?php echo $arr['name']
                                                                                                            ?>">
                                <img src="\Project_practies\images\plus-logo.png" alt="Delte logo" title="Increase quantity" height="30">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>price</td>
                        <td><?php echo  '₹' . $arr['price'] * $arr['quantity'];  ?></td>
                    </tr>
                    <tr>
                        <td>disscount</td>
                        <td><?php echo  $arr['disscount']; ?></td>
                    </tr>
                    <tr>
                        <td id="delete" colspan="2">
                            <a href="\Project_practies\PHP\main_remove_cart.php?name=<?php echo $arr['name']
                                                                                        ?>">
                                <img src="\Project_practies\images\delete_logo.png" alt="Delte logo" title="Delete" height="30">
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td id="button" colspan="2">
                            <a href="#">
                                <button>Buy</button>
                            </a>
                        </td>
                    </tr>

                </table>
            </div>

        <?php
            // echo '<br>';
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>