<?php
session_start();
//This is new content
$ids = $_SESSION['id'];
// $_SESSION[$ids]['cart-count']++;

include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';
$name = $_POST['name'];

$s_query = "select * from cart where name ='$name' and id ='$ids'";
$qu = mysqli_query($con, $s_query);
if (!mysqli_num_rows($qu)) {

    $select_query = "select * from signup where id = $ids";

    $res = mysqli_query($con, $select_query);

    $arr = mysqli_fetch_assoc($res);
    $cnt = $arr['count'];
    if (!empty($arr['count'])) {
        $cnt++;
    } else {
        $cnt = 1;
    }
    $update_query = "update signup set count = $cnt where id = $ids";

    $query = mysqli_query($con, $update_query);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $disscount = mysqli_real_escape_string($con, $_POST['disscount']);
    $photo = mysqli_real_escape_string($con, $_POST['photo']);
    $quantity = 1;
    $insert_query = "insert into cart(id,name,price,disscount,photo,quantity) value($ids,'$name','$price','$disscount','$photo',$quantity)";

    $result = mysqli_query($con, $insert_query);
    if ($result) {
?>
        <script>
            alert('add to cart an item successfully ');
            // window.location = '\\Project_practies\\PHP\\main_index.php';
            location.replace('\\Project_practies\\PHP\\main_index.php');
        </script>
    <?php
    }else{
        ?>
        <script>
            alert('add to cart an item not successfully ');
            // window.location = '\\Project_practies\\PHP\\main_index.php';
            location.replace('\\Project_practies\\PHP\\main_index.php');
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert('Item is already in cart');
        location.replace('\\Project_practies\\PHP\\main_index.php');
    </script>
<?php
}
?>