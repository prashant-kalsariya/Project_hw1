
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="/Project_practies/CSS/signup.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        $email_query = "select * from signup where email='$email'";
        $equery = mysqli_query($con, $email_query);
        $erow = mysqli_num_rows($equery);
        if ($erow > 0) {
            // echo "Email exist";
    ?>
            <script>
                alert('Email already exits');
            </script>
            <?php
        } else {
            if ($password === $cpassword) {
                $pass = password_hash($password, PASSWORD_BCRYPT);
                $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

                //Write query here
                $insert_query = "insert into signup(name,email,mobile,password,cpassword) value ('$name','$email','$mobile','$pass','$cpass')";
                $query = mysqli_query($con, $insert_query);
                if ($query) {
            ?>
                    <script>
                        alert('Sign Up succesfully');
                        location.replace('login.php'); // This is use for change the current web page of our website!! i.e, if we are in sign up page,it will go for the login page after sign up!!
                    </script>

                <?php
                // header('location : login.php');
                }
            } else {
                // echo "password are not match";
                ?>
                <script>
                    alert('cannot Sign Up');
                </script>
    <?php
            }
        }
    }
    ?>

    <div class="container">


        <div class="form_field">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <header>
                    <h1>Sign Up</h1>
                </header>
                <div class="input_field">
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    <img src="\Project_practies\images\name_logo.png" alt="image">
                </div>
                <div class="input_field">
                    <input type="email" name="email" id="eamil" placeholder="Enter your email address" required>
                    <img src="https://seeklogo.com/images/M/mail-envelope-symbol-logo-4AB011B4E0-seeklogo.com.png" alt="image">
                </div>
                <div class="input_field">
                    <input type="text" name="mobile" id="mobile" placeholder="Enter your mobile number" required>
                    <img src="https://icon2.cleanpng.com/20180422/kee/kisspng-telephone-number-computer-icons-telephone-symbol-5adc94abe20134.1155473815244054199257.jpg" alt="image">
                </div>
                <div class="input_field">
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <img src="https://e7.pngegg.com/pngimages/778/12/png-clipart-computer-icons-skype-icon-design-change-password-logo-internet.png" alt="image">
                </div>
                <div class="input_field">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Repeat your password" required>
                    <img src="https://e7.pngegg.com/pngimages/778/12/png-clipart-computer-icons-skype-icon-design-change-password-logo-internet.png" alt="image">
                </div>
                <div class="input_field">
                    <input type="submit" value="Sign Up" name="submit" id="submit">
                </div>
                <p style="text-align: center">Have an account?<a style="text-decoration: none;" href="login.php">Login Here</a></p>
            </form>
        </div>
    </div>
</body>

</html>