<?php
include 'connection.php';
$id_delete = $_GET['id'];

$delete_query = "delete from practice2 where id = '$id_delete'";

$result = mysqli_query($con, $delete_query);

if($result){
    ?>
    <script>
        alert('Delete successfully');
        location.replace('/Project_Practies/HTML/index.html');
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Delete failed');
        location.replace('/Project_Practies/HTML/index.html');
    </script>
    <?php
}

?>