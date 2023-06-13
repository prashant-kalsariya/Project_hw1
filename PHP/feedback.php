<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        h1 {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            display: inline-block;
        }
        body{
            background-color: aquamarine;
        }
        .con{
            text-align: center;
            align-items: center;
            justify-content: center;
            width: 450px;
            margin: auto;
            margin-top: 5%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 1rem;
            background-color:  rgb(239, 139, 239);
            
        }
        .btn{
            background-color: deepskyblue;
            border-radius: 1rem;
        }
        .btn:hover{
            background-color: white;
        }
        select{
            border-radius: 1rem;
            background:grey;
            color: white;
        }
    </style>
</head>

<body>
    <?php

    include 'signup_connection.php';
    if(isset($_POST['submit'])){
        // $opinion = $_POST['opinion'];
        // $country = $_POST['country'];
        // $feedback = $_POST['Feedback'];
        $opinion = mysqli_real_escape_string($con,$_POST['opinion']);
        $country = mysqli_real_escape_string($con,$_POST['country']);
        $feedback = mysqli_real_escape_string($con,$_POST['feedback']);
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);

        $query = "insert into feedback (opinion,country,Feedback,name,mobile,email) values('$opinion', '$country', '$feedback','$name','$mobile','$email')";

        $check = mysqli_query($con,$query);

        if($check){
            ?>
            <script>
                alert('Feedback is given succesfully');
            </script>
            <?php
        }
    }


    ?>

    <div class="con">
        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <marquee>
                    <h1>Feedback Form !</h1>
                </marquee>

                
                <h3><b>Please share your opinion for my previous website:</b></h3>
                <label for="name">Name</label>
                <input type="text" name="name" id="name"><br>
                <label for="name">Email</label>
                <input type="email" name="email" id="email"><br>
                <label for="name">Mobile</label>
                <input type="text" name="mobile" id="mobile"><br>

                <label for="id3">
                    <b>Bad</b> <input type="radio" name="opinion" value="bad" id="id3">
                </label>

                <label for="id4">
                    <b>Not so good</b> <input type="radio" name="opinion" value="not so good" id="id4">
                </label>

                <label for="id5">
                    <b>Good</b> <input type="radio" name="opinion" value="good" id="id5">
                </label>

                <label for="id6">
                    <b>Exelent</b> <input type="radio" name="opinion" value="Exelent" id="id6">
                </label>
                <br><br><br>
                <b>Country</b> <select name="country" id="x">
                    <option value="India"><b>India</b></option>
                    <option value="U.S.A"><b>U.S.A</b></option>
                    <option value="Australia"><b>Australia</b></option>
                    <option value="Africa"><b>Africa</b></option>
                    <option value="Japan"><b>Japan</b></option>
                    <option value="U.K"><b>U.K</b></option>
                </select>
                <br><br>
                <h2><b>Feedback</b></h2>

                <textarea name="feedback" id="y" cols="45" rows="9" placeholder="Enter Your Feedback Here" required></textarea>
                <br><br>
                <input type="submit" value="Submit" name="submit" class="btn">
                <input type="reset" value="Reset" name="Reset" class="btn">
            </form>
        
    </div>



</body>

</html>