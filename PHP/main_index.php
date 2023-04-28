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
        include 'C:\xampp\htdocs\Project_practies\CSS\main_index.css';
        ?>
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
    ?>
        <script>
            location.replace('\\Project_practies\\HTML\\index.html');
        </script>
    <?php
    }
    include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';

    $id = $_SESSION['id'];

    $select_query = "select * from signup where id=$id";
    $query = mysqli_query($con, $select_query);
    $arr_data = mysqli_fetch_assoc($query);

    ?>
    <div class="container">
        <?php
        include 'C:\xampp\htdocs\Project_practies\PHP\navbar.php';
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="d-block w-100 " alt="..." width="90">
                </div>
                <div class="carousel-item">
                    <a href="hello"> <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- <h1>Hello, world!</h1> -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 15-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 16-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 17-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 18-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 19-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://cdn.wallpapersafari.com/79/45/iQw0qH.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="HP 20-s">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </div>
</body>

</html>