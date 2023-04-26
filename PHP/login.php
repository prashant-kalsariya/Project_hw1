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

    if (isset($_POST['submit'])) {

        if (isset($_SESSION['name'])) {
            // header('location:home.php');
            // echo " <script>  location.replace('home.php'); </script>";
    ?>
            <script>
                location.replace('home.php');
            </script>
            <?php
        }
        $email = mysqli_escape_string($con, $_POST['email']);
        $password = mysqli_escape_string($con, $_POST['password']);

        $email_query = "select * from signup where email='$email'";
        $equery = mysqli_query($con, $email_query);
        $erow = mysqli_num_rows($equery);


        if ($erow) {
            $email_array = mysqli_fetch_assoc($equery);
            $pass = $email_array['password'];
            $_SESSION['name'] = $email_array['name'];
            $_SESSION['email'] = $email_array['email'];
            $_SESSION['mobile'] = $email_array['mobile'];
            $_SESSION['id'] = $email_array['id'];


            // $_SESSION['name']=$name;
            // $_SESSION['age']=$age;
            // $_SESSION['zender']=$zender;
            // $_SESSION['school']=$school;
            // $_SESSION['hobbie']=$hobbie;
            // $_SESSION['university']=$university;
            // $_SESSION['remark'] = $remark;

            $_SESSION['age'] = $email_array['age'];
            $_SESSION['zender'] = $email_array['zender'];
            $_SESSION['school'] = $email_array['school'];
            $_SESSION['hobbie'] = $email_array['hobbie'];
            $_SESSION['university'] = $email_array['university'];
            $_SESSION['remark'] = $email_array['remark'];
            // $_SESSION['name'] = $email_array['name'];


            $pass_varify = password_verify($password, $pass);
            if ($pass_varify) {
                //Login succesfully
                //Go to the home page
            ?>
                <script>
                    alert('Login successfully');
                    location.replace('home.php');
                </script>
            <?php
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
                location.replace('registration.php');
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
                <p style="text-align: center">Not Have an account?<a style="text-decoration: none;" href="registration.php">Sign Up Here</a></p>
            </form>
        </div>
    </div>
</body>

</html>