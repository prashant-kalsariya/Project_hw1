<?php
session_start();

$ids = $_SESSION['id'];

include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

$name = $_POST['name'];
$insert_query = "insert into cart(id,name) value($ids,'$name')";

$result = mysqli_query($con, $insert_query);
if($result){
    ?>
    <script>
        alert('add to cart successfully');
    </script>
    
    <?php
    header('location:\Project_practies\PHP\main_index.php');
}
?>