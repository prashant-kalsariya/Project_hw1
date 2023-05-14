<?php

session_start();

?>

<?php
if (isset($_POST['submit'])) {
    include 'C:\xampp\htdocs\Project_practies\PHP\connection.php';
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $disscount = mysqli_real_escape_string($con, $_POST['disscount']);
    $getby = mysqli_real_escape_string($con, $_POST['getby']);
    $photo = mysqli_real_escape_string($con, $_POST['photo']);
    $select_query = "select * from practice2 where name = '$name'";
    $squery = mysqli_query($con, $select_query);
    if (mysqli_num_rows($squery) > 0) {
?>
        <script>
            alert('It is already exist in Cart');
            location.replace('/Project_practies/HTML/index.html');
        </script>
        <?php
    } else {
        $insert_query = "insert into practice2 (price,name,disscount,getby,photo) values ('$price','$name','$disscount','$getby','$photo')";
        $query = mysqli_query($con, $insert_query);
        if ($query) {
            $select_query = "select * from practice2 where name='$name'";

            $query2 = mysqli_query($con, $select_query);
            $arrdata = mysqli_fetch_array($query2);
        ?>
            <script>
                alert('Add item to cart succesfully!! Your id is <?php echo $arrdata['id']; ?> Please not down it for future uses');
                location.replace('/Project_practies/HTML/index.html');
            </script>
        <?php
            // header('location : /Project_practies/HTML/index.html');
        } else {
        ?>
            <script>
                alert('can not add item into cart');
            </script>
<?php
        }
    }
    // }
}
?>