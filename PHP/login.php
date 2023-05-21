<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/Project_practies/CSS/signup.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';
    // include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    if (isset($_POST['submit'])) {



        $email = mysqli_escape_string($con, $_POST['email']);
        $password = mysqli_escape_string($con, $_POST['password']);

        $email_query = "select * from signup where email='$email'";
        $equery = mysqli_query($con, $email_query);
        $erow = mysqli_num_rows($equery);


        if ($erow) {

            $email_array = mysqli_fetch_assoc($equery);
            $_SESSION['id'] = $email_array['id'];
            $pass = $email_array['password'];
            $pass_varify = password_verify($password, $pass);
            if ($pass_varify) {

    ?>
                <script>
                    alert('Login successfully');
                    location.replace('\\Project_practies\\PHP\\main_index.php');
                </script>
            <?php
                // header('location:\Project_practies\PHP\main_index.php');
            } else {
            ?>
                <script>
                    alert("Password is wrong");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Email address is not exists, Please sign up first");
                location.replace('\\Project_practies\\PHP\\signup.php');
            </script>
    <?php
        }
    }

    ?>

    <div class="container">


        <div class="form_field">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <header>
                    <h1>Login</h1>
                </header>

                <div class="input_field">
                    <input type="email" name="email" id="eamil" placeholder="Enter your email address" required>
                    <img src="https://seeklogo.com/images/M/mail-envelope-symbol-logo-4AB011B4E0-seeklogo.com.png" alt="image">
                </div>

                <div class="input_field">
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <img src="https://e7.pngegg.com/pngimages/778/12/png-clipart-computer-icons-skype-icon-design-change-password-logo-internet.png" alt="image">
                </div>

                <div class="input_field">
                    <input type="submit" value="Login" name="submit" id="submit">
                </div>
                <p style="text-align: center">Not Have an account?<a style="text-decoration: none;" href="\Project_practies\PHP\signup.php">Sign Up Here</a></p>
            </form>
        </div>
    </div>
</body>

</html>