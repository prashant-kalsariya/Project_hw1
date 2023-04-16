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
                echo "your records are " . $arr['price'];
            }
        }

        ?>

    </h1>
    <table>
        <tr>
            <th>Item name</th>
            <td></td>
        </tr>
        
    </table>

</body>

</html>