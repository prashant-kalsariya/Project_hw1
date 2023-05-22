<?php
session_start();
include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

$id = $_SESSION['id'];

$select_query = "select * from profile where id = '$id'";
$query = mysqli_query($con, $select_query);
if (!$query) {
    echo "Connection failed Please try later";
    die();
}
$arr_data = mysqli_fetch_array($query);
if (isset($_POST['submit'])) {
    include 'C:\xampp\htdocs\Project_practies\PHP\upload_user_image.php';
    $name = mysqli_escape_string($con, $_POST['name']);
    $gender = mysqli_escape_string($con, $_POST['gender']);
    $mobile = mysqli_escape_string($con, $_POST['mobile']);
    $email = mysqli_escape_string($con, $_POST['email']);
    // $photo = mysqli_escape_string($con,$_POST['photo']);
    // $update_query = "update profile set (name,gender,mobile,email) values ('$name','$gender','$mobile','$email') where id='$id'";
    $update_query = "update profile set name ='$name', gender = '$gender', mobile = '$mobile', email ='$email' where id='$id'";
    $uqery = mysqli_query($con, $update_query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>

<body>
    <div class="form_container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="input_field">


                    <input type="file" name="fileUpload" id="chooseFile" value=" <?php if (isset($arr_data['photo'])) echo $arr_data['photo']; ?> ">
                </div>
                <div class="input_field">
                    <label for="name">Name</label>

                    <input type="text" name="name" id="name" value=" <?php if (isset($arr_data['name'])) echo $arr_data['name']; ?> ">
                </div>

                <div class="input_field">
                    <label for="mobile">Mobile no</label>

                    <input type="text" name="mobile" id="mobile" value=" <?php if (isset($arr_data['mobile'])) echo $arr_data['mobile']; ?> ">

                </div>

                <div class="input_field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value=" <?php if (isset($arr_data['email'])) echo $arr_data['email']; ?> ">
                </div>
                <div class="input_field">
                    <input type="radio" name="gender" id="male" value="male" <?php if (isset($arr_data['gender']) && $arr_data['gender'] == "male") echo "checked"; ?>>
                    <label for="male">male</label>
                    <input type="radio" name="gender" id="female" value="female" <?php if (isset($arr_data['gender']) && $arr_data['gender'] == "female") echo "checked"; ?>>
                    <label for="female">female</label>
                    <input type="radio" name="gender" id="other" value="other" <?php if (isset($arr_data['gender']) && $arr_data['gender'] == "other") echo "checked"; ?>>
                    <label for="other">other</label>
                </div>

                <div class="input_field">
                    <input type="submit" value="Update Now" name="submit">
                </div>

        </form>
    </div>
    <a href="\Project_practies\PHP\main_index.php">Home</a>

</body>

</html>