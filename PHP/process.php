<?php

// if($_SERVER['method'] == 'POST'){
    if(isset($_POST['submit'])){
        include 'C:\xampp\htdocs\Project_practies\PHP\connection.php';
        $price =mysqli_real_escape_string($con, $_POST['price']);
        $insert_query = "insert into practice (price) values ('$price')";
        $_SESSION['price'] = $_POST['price'];

        $query = mysqli_query($con,$insert_query);
        if($query){
            ?>
            <script>
                alert('Add item to cart succesfully');
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('can not add item into cart');
            </script>
            <?php
        }

        $select_query = "select * from practice where price='$price'";
        $query2 = mysqli_query($con,$select_query);
        $arrdata = mysqli_fetch_array($query2);
        $_SESSION['price'] = $arrdata['price'];
    }
// }

?>