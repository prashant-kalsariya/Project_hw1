<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <!-- <link rel="stylesheet" href="\Project_practies\CSS\main_index.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ShopCart</title>
    <style>
        <?php
        // include 'C:\xampp\htdocs\Project_practies\CSS\main_index.css';
        include 'C:\xampp\htdocs\Project_practies\CSS\navbar.css';
        
        ?>
        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if(!isset($_SESSION['id'])){
        ?>
        <script>
            location.replace('/HTML/index.html');
        </script>
        <?php
    }
    include 'signup_connection.php';
    include 'C:\xampp\htdocs\Project_practies\PHP\admin_navbar.php';

    ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php
        $select_query = "select * from items";
        $query = mysqli_query($con, $select_query);
        while ($arr = mysqli_fetch_array($query)) {
        ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $arr['photo'];  ?>" class="card-img-top" alt="Samsung galaxy z-fold" height="400">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $arr['name']; ?></h5>
                        <p class="card-text"><?php echo $arr['description']; ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <form action="admin_update.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $arr['name'];  ?>">
                            <input type="hidden" name="price" value="<?php echo $arr['price'];  ?>">
                            <input type="hidden" name="disscount" value="<?php echo $arr['disscount'];  ?>">
                            <input type="hidden" name="photo" value="<?php echo $arr['photo'];  ?>">
                            <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                            <input type="submit" value="Update Now" class="add_cart" name="update">
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>