<?php
session_start();

$ids = $_SESSION['id'];
// $_SESSION[$ids]['cart-count']++;

include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

$select_query = "select * from signup where id = $ids";

$res = mysqli_query($con, $select_query);

$arr = mysqli_fetch_assoc($res);
$cnt = $arr['count'];
if (!empty($arr['count'])) {
    $cnt++;
}else{
    $cnt = 1;
}
$update_query = "update signup set count = $cnt where id = $ids";
$query = mysqli_query($con,$update_query);
$name = $_POST['name'];
$insert_query = "insert into cart(id,name) value($ids,'$name')";

$result = mysqli_query($con, $insert_query);
if ($result) {
?>
    <script>
        // alert('add to cart successfully');
        // window.location = '\\Project_practies\\PHP\\main_index.php';
        location.replace('\\Project_practies\\PHP\\main_index.php');
    </script>
<?php
}
?>