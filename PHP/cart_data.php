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
        include 'C:\xampp\htdocs\Project_practies\CSS\cart_data.css';
        ?>
    </style>
</head>

<body>



    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="text" name="search" id="search" placeholder="Write your ID here">
        <input type="submit" value="Search" name="submit">
    </form>

    <h1>

        <?php

        if (isset($_POST['submit'])) {
            include 'C:\xampp\htdocs\Project_practies\PHP\connection.php';
            $ids = $_POST['search'];
            $select_query = "select * from practice where id='$ids'";
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
        if (isset($_POST['submit']) && !empty($_POST['search'])) {
        ?>
            <table>
                <tr>
                    <th>Item name</th>
                    <td><?php echo $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <th>Item price</th>
                    <td><?php echo $_SESSION['price'] ?></td>
                </tr>
                <tr>
                    <th>Item disscount</th>
                    <td><?php echo $_SESSION['disscount'] ?></td>
                </tr>
                <tr>
                    <th>Item getby</th>
                    <td><?php echo $_SESSION['getby'] ?></td>
                </tr>

            </table>
        <?php
        }else if(empty($_POST['search']) && isset($_POST['submit'])){
            echo "Someting went wrong";
        }
        ?>
    </div>
    <!-- 
        $_SESSION['name'] = $_POST['name'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['disscount'] = $_POST['disscount'];
$_SESSION['getby'] = $_POST['getby'];
     -->
<a href="/Project_practies/HTML/index.php">Home</a>
</body>

</html>