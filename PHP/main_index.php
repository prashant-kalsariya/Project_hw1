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
        include 'D:\xamp\htdocs\Project_practies\CSS\main_index.css';
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
    include 'D:\xamp\htdocs\Project_practies\PHP\signup_connection.php';

    $id = $_SESSION['id'];

    $select_query = "select * from signup where id=$id";
    $query = mysqli_query($con, $select_query);
    $arr_data = mysqli_fetch_assoc($query);

    ?>
    <div class="container">
        <?php
        include 'D:\xamp\htdocs\Project_practies\PHP\navbar.php';
        ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="\Project_practies\images\HP-15s.avif" class="d-block w-100" alt="Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="\Project_practies\images\Air-conditionar.jpeg" class="d-block w-100" alt="Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="\Project_practies\images\television.jpg" class="d-block w-100" alt="Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- <h1>Hello, world!</h1> -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- <a href="#"> -->
            <div class="col">
                <div class="card h-100">

                    <img src="\Project_practies\images\iphone14Promax.jpg" class="card-img-top" alt="iPhone14 Pro max">
                    <div class="card-body">
                        <h5 class="card-title">iPhone14 Pro max</h5>
                        <p class="card-text">From ₹22317.00/mo.Per Month with instant savings§§ and No Cost EMI§Footnote or₹139900.00Footnote‡</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="iPhone14 Pro max">
                            <input type="hidden" name="price" value="139900">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\iphone14Promax.jpg">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <!-- </a> -->
            <div class="col">
                <div class="card h-100">
                    <img src="\Project_practies\images\macbook.jpg" class="card-img-top" alt="macbook pro">
                    <div class="card-body">
                        <h5 class="card-title">Macbook Pro</h5>
                        <p class="card-text">16-core Neural Engine
                            35.97 cm (14.2-inch) Liquid Retina XDR display²
                            Three Thunderbolt 4 ports, HDMI port, SDXC card slot, headphone jack, MagSafe 3 port
                            Magic Keyboard with Touch ID
                            Force Touch trackpad
                            67W USB-C Power Adapter
                            From ₹31983.00/mo.Per Month with instant savings§§ and No Cost EMI§Footnote
                            or
                            ₹199900.00‡
                            Select</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="Macbook">
                            <input type="hidden" name="price" value="199900">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\macbook.jpg">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="\Project_practies\images\Asus-ROG-Phone.webp" class="card-img-top" alt="Asus Rog6">
                    <div class="card-body">
                        <h5 class="card-title">Asus Rog6</h5>
                        <p class="card-text">
                            ASUS ROG Phone 6 Pro
                            Operating System Android 12.0
                            Cellular Technology 5G
                            Memory Storage Capacity 512 GB
                            Connectivity Technology USB
                            Screen Size 6.78 Inches
                            Wireless network technology GSM
                        From ₹88,999</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="Asus Rog6">
                            <input type="hidden" name="price" value="88999">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\Asus-ROG-Phone.webp">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="\Project_practies\images\Asus_Rog.jpg" class="card-img-top" alt="Asus Rog strix G17">
                    <div class="card-body">
                        <h5 class="card-title">Asus Rog strix G17</h5>
                        <p class="card-text">17.3-inch (43.94 cms) FHD 144Hz, AMD Ryzen 7 4800H, RTX 3050 Ti 4GB Graphics, Gaming Laptop (16GB/1TB SSD/Windows 11//Gray/2.4 kg), G713IE-HX040W From  ₹84,989</p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="Asus Rog Stix G17">
                            <input type="hidden" name="price" value="84989">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\Asus_Rog.jpg">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="\Project_practies\images\s21_ultra.jpg" class="card-img-top" alt="Samsung galaxy s21 ultra">
                    <div class="card-body">
                        <h5 class="card-title">Samsung galaxy s21 ulta</h5>
                        <p class="card-text">SAMSUNG Galaxy S21 Ultra (Phantom Black, 256 GB)  (12 GB RAM)
                            From ₹1,28,999
                        </p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="Samsung s21 ulta">
                            <input type="hidden" name="price" value="128999">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\s21_ultra.jpg">
                            <input type="submit" value="Add to cart" class="add_cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="\Project_practies\images\Samsung_galaxy_z-fold.jpg" class="card-img-top" alt="Samsung galaxy z-fold">
                    <div class="card-body">
                        <h5 class="card-title">Samsung galaxy z-fold</h5>
                        <p class="card-text">SAMSUNG Galaxy Z Fold3 5G (Phantom Green, 256 GB)  (12 GB RAM)
                            From ₹1,25,900
                        </p>
                    </div>
                    <div class="card-footer">
                        <form action="\Project_practies\PHP\add_to_cart.php" method="post">
                            <input type="hidden" name="name" value="Samsung galaxy z fold">
                            <input type="hidden" name="price" value="125900">
                            <input type="hidden" name="disscount" value="22%">
                            <input type="hidden" name="photo" value="\Project_practies\images\Samsung_galaxy_z-fold.jpg">
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