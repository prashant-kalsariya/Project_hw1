<?php
session_start();
include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        img {
            height: 30vh;
        }
    </style>
</head>

<body>

    <?php
    // if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $select_query = "select * from items where id = '$id'";
        $query = mysqli_query($con, $select_query);
        $arr_data = mysqli_fetch_assoc($query);
        if (isset($_POST['submit'])) {
            // $id = $_GET['idupdate'];
            $name = mysqli_escape_string($con, $_POST['name']);
            $price = mysqli_escape_string($con, $_POST['price']);
            $disscount = mysqli_escape_string($con, $_POST['disscount']);
            $description = mysqli_escape_string($con, $_POST['description']);
            // include 'upload_item_image.php';
            // $insert_query = "insert into items (name,price,disscount,description,photo) value ('$name','$price','$disscount','$description','$target_file')";
            // $iquery = mysqli_query($con,$insert_query);
            // $select_query = "select * from items where name = '$name'";
            // $squery = mysqli_query($con,$select_query);
            // $sarr = mysqli_fetch_array($squery);
            // $id_update = $sarr['id'];
            $update_query = "update items set name = '$name', price = '$price', disscount = '$disscount', description = '$description' where id='$id'";
            $uquery = mysqli_query($con, $update_query);
        }


    ?>
        <div class="form_container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="input_field">

                    <label for="chooseFile">Upload image</label>
                    <input type="file" name="fileUpload" id="chooseFile">
                </div>
                <div class="input_field">
                    <label for="name">Item name</label>
                    <input type="text" name="name" id="name" value="<?php echo $arr_data['name'] ?>">
                </div>

                <div class="input_field">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" value="<?php echo $arr_data['price'] ?>">

                </div>

                <div class="input_field">
                    <label for="disscount">Disscount</label>
                    <input type="text" name="disscount" id="disscount" value="<?php echo $arr_data['disscount'] ?>">
                </div>
                <div class="input_field">
                    <label for="description">About Item</label><br>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Write something here about for your product"><?php echo $arr_data['description'] ?></textarea>
                </div>
                <div class="input_field">
                    <input type="submit" value="Update Now" name="submit">
                </div>

            </form>
        </div>
    <?php
    // }
    ?>
    <a href="\Project_practies\PHP\admin_index.php">Home</a>

</body>

</html>