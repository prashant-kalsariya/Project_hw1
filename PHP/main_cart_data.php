<!doctype html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="\Project_practies\CSS\main_cart_data.css"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cart Data</title>

    <style>
        <?php
        include 'C:\xampp\htdocs\Project_practies\CSS\main_cart_data.css';
        include 'C:\xampp\htdocs\Project_practies\CSS\navbar.css';

        ?>
    </style>


</head>

<body>
    <?php
    //This is just a checkin After generet new ssh key-

    session_start();
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    include 'C:\xampp\htdocs\Project_practies\PHP\navbar.php';

    if ($arr_data['count'] == 0) {
    ?>
        <h2 id="no_cart">No data found</h2>
    <?php
    }else{

    $id = $_SESSION['id'];

    $select_query = "select * from cart where id=$id";
    $query = mysqli_query($con, $select_query);
    ?>
    <div class="data_container">
        <main class="main">
            <?php
            $price = 0;
            while ($arr = mysqli_fetch_assoc($query)) {
                // echo $arr['name'];
            ?>
                <div class="container">
                    <left class="left">
                        <img src="<?php echo $arr['photo']; ?>" alt="<?php echo $arr['name']; ?>">
                    </left>
                    <right class="right">
                        <div class="top">
                            <div class="top_contain"><span>Name : <?php echo  $arr['name']; ?></span></div>
                            <div class="top_contain"><span>Qunatity : <a href="\Project_practies\PHP\minus.php?name=<?php echo $arr['name']
                                                                                                                    ?>">
                                        <img src="\Project_practies\images\minus-logo.png" alt="reduce item" title="Decrease quantity" height="30">

                                    </a><?php echo $arr['quantity']; ?><a href="\Project_practies\PHP\plus.php?name=<?php echo $arr['name']
                                                                                                                    ?>">
                                        <img src="\Project_practies\images\plus-logo.png" alt="increase item" title="Increase quantity" height="30">
                                    </a></span></div>
                            <div class="top_contain"><span>Price : <?php echo  '₹' . $arr['price'] * $arr['quantity'];  ?></span></div>
                            <div class="top_contain"> <a href="\Project_practies\PHP\main_remove_cart.php?name=<?php echo $arr['name']
                                                                                                                ?>">
                                    <img src="\Project_practies\images\delete_logo.png" alt="Delte logo" title="Delete" height="30">
                                </a></div>
                        </div>
                        <a href="\Project_practies\PHP\buy.php?id=<?php echo $id; ?>" class="bottom">Buy</a>
                    </right>

                </div>
            <?php
            }
            ?>
        </main>
        <div class="left_item">
            <h1>Summary of the cart</h1>
        </div>
    </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>