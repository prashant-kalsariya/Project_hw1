<?php
session_start();
$id = $_SESSION['id'];
include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

$select_query = "select * from profile where id='$id'";
$query = mysqli_query($con, $select_query);
if (!$query) {
    die();
}
$arr = mysqli_fetch_array($query);

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
    <?php if (isset($arr['photo']) && !empty($arr['photo'])) {
    ?>
        <img src="<?php echo $arr['photo']; ?>" alt="User Photo">
    <?php
    }
    ?>
    <p>Your name is : <?php echo $arr['name']; ?></p>
    <p>Your mobile number is : <?php echo $arr['mobile']; ?></p>
    <p>Your Email address is : <?php echo $arr['email']; ?></p>
    <p>Your gender is : <?php echo $arr['gender']; ?></p>
    <a href="\Project_practies\PHP\update_profile.php" class="">Update Profile</a>
    <a href="\Project_practies\PHP\main_index.php">Home</a>
</body>

</html>