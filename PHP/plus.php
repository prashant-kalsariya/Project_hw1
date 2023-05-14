<?php

session_start();

include 'D:\xamp\htdocs\Project_practies\PHP\signup_connection.php';
$id = $_SESSION['id'];
$name = $_GET['name'];
$select_query = "select * from cart where id=$id and name='$name'";

$squery = mysqli_query($con, $select_query);

if ($squery) {
    $arr = mysqli_fetch_assoc($squery);
    $quantity = $arr['quantity'];
    $quantity++;
    $update_query = "update cart set quantity='$quantity' where id='$id' and name='$name'";
    $uqery = mysqli_query($con, $update_query);
    if ($uqery) {
    ?>
        <script>
            location.replace('\\Project_practies\\PHP\\main_cart_data.php')
        </script>
<?php
    }
}

?>