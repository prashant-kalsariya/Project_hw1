<?php
session_start();
include 'D:\xamp\htdocs\Project_practies\PHP\signup_connection.php';

// $id = $_GET['id'];
$id = $_SESSION['id'];
$name = $_GET['name'];

$select_query = "select * from signup where id='$id'";
$squery = mysqli_query($con, $select_query);

if ($squery) {
    $arr_data = mysqli_fetch_assoc($squery);

    if ($arr_data != null) {
        $cnt = $arr_data['count'];
        $cnt--;
        $update_query = "update signup set count=$cnt where id=$id";

        $uquery = mysqli_query($con, $update_query);
        if ($uquery) {
            $delete_query = "delete from cart where name='$name' and id='$id'";
            $query = mysqli_query($con, $delete_query);

            if ($query) {
?>
                <script>
                    alert('Delete successfully');
                    location.replace('\\Project_practies\\PHP\\main_cart_data.php');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Can not delte successfully');
                    location.replace('\\Project_practies\\PHP\\main_cart_data.php');
                </script>
<?php
                // echo "Error deleting record: " . mysqli_error($con);
            }
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
    } else {
        echo "No data found for name $name";
    }
} else {
    echo "Error querying database: " . mysqli_error($con);
}
?>