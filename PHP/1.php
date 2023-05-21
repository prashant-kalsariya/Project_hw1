<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
</head>

<body>
    <?php

    if (isset($_POST['submit'])) {
        $code = $_POST['captcha'];
        if ($code) {
            if ($_POST['captcha'] == $_SESSION['CAPTCHA_CODE']) {
                echo "correct";
            } else {
                echo "not valid";
            }
        } else {
            echo "not filled";
        }
    }

    ?>
    <form action="assignment.php" method="POST">
        <label for="nm">Name</label>
        <input type="text" placeholder="enter your name">
        <br>
        <label for="email">E-mail</label>
        <input type="email" placeholder="enter your email">
        <br>

        <form action="assignment.php" method="post">
            <label for="cap">Enter captcha</label>
            <input type="text" placeholder="enter captcha" name="captcha">
            <br>
            <label>captcha</label>
            <img src="captcha.php" alt="Captcha code"><br>
            <button onclick="reload()">Reload</button>

        </form>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <script>
        function reload() {
            window.location.reload();
        }
    </script>


</body>

</html>