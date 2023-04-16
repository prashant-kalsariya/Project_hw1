<?php

session_start();

?>

<?php

// if($_SERVER['method'] == 'POST'){
if (isset($_POST['submit'])) {
    include 'C:\xampp\htdocs\Project_practies\PHP\connection.php';
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $insert_query = "insert into practice (price) values ('$price')";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['disscount'] = $_POST['disscount'];
    $_SESSION['getby'] = $_POST['getby'];
    // $_SESSION['price'] = $_POST['price'];



    $query = mysqli_query($con, $insert_query);
    if ($query) {
        $select_query = "select * from practice where price='$price'";
        $query2 = mysqli_query($con, $select_query);
        $arrdata = mysqli_fetch_array($query2);
        $_SESSION['price'] = $arrdata['price'];
        $_SESSION['id'] = $arrdata['id'];
?>
        <script>
            alert('Add item to cart succesfully!! Your id is <?php echo $arrdata['id']; ?> Please not down it for future uses');
            location.replace('index.php');
        </script>
    <?php
        // header('location : index.php');
    } else {
    ?>
        <script>
            alert('can not add item into cart');
        </script>
<?php
    }
}
// }

?>