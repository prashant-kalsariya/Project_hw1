<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Data</title>
    <style>
        <?php
        include 'D:\xamp\htdocs\Project_practies\CSS\cart_data.css';
        ?>
    </style>
</head>

<body>

    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <input type="text" name="search" id="search" placeholder="Write your ID here">
            <input type="submit" value="Search" name="submit">
        </form>

        <h1>

            <?php

            if (isset($_POST['submit'])) {
                include 'D:\xamp\htdocs\Project_practies\PHP\connection.php';
                $ids = $_POST['search'];
                $select_query = "select * from practice2 where id='$ids'";
                $result = mysqli_query($con, $select_query);
                if (mysqli_num_rows($result) > 0) {
                    $arr = mysqli_fetch_assoc($result);
                    // echo "your records are " . $arr['price'];
                }
            }

            ?>
        </h1>
        <div class="cart_info">
            <?php
            if (isset($_POST['submit']) && !empty($_POST['search']) && !empty($arr['name'])) {
            ?>
                <table>
                    <tr>
                        <td colspan="2" id="image">
                            <img src="<?php echo $arr['photo']; ?>" alt="My_image">
                        </td>

                    </tr>
                    <tr>
                        <th>Item name</th>
                        <td><?php echo $arr['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Item price</th>
                        <td><?php echo $arr['price'] ?></td>
                    </tr>
                    <tr>
                        <th>Item disscount</th>
                        <td><?php echo $arr['disscount'] ?></td>
                    </tr>
                    <tr>
                        <th>Item getby</th>
                        <td><?php echo $arr['getby'] ?></td>
                    </tr>
                    <tr>
                        <td class="button">
                            <a href="remove_cart.php?id=<?php echo $arr['id']; ?>">Delete</a>
                        </td>
                        <td class="button">

                            <a href="/Project_practies/HTML/index.html">Home</a>
                        </td>
                    </tr>
                </table>
            <?php
            } else if (empty($_POST['search']) && isset($_POST['submit'])) {
                // echo "<h2>You have not enter your ID , Please enter your ID!</h2>";
            ?>
                <div class="danger">

                    <h2>You have not enter your ID,Please enter your ID!</h2>
                </div>

            <?php
            }
            ?>


        </div>
    </div>
</body>

</html>