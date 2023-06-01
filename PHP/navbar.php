<?php
session_start();
//I am adding new commits
$id = $_SESSION['id'];

$select_query = "select * from signup where id=$id";
$query = mysqli_query($con, $select_query);
$arr_data = mysqli_fetch_assoc($query);

$select_query2 = "select * from profile where id= $id";
$query2 = mysqli_query($con, $select_query2);
$arr2 = mysqli_fetch_assoc($query2);
$imagepath = '\Project_practies\images\no_profile_photo.webp';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style="border-radius: 50%;" src="https://t3.ftcdn.net/jpg/02/47/48/00/360_F_247480017_ST4hotATsrcErAja0VzdUsrrVBMIcE4u.jpg" alt="Logo" height="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\Project_practies\PHP\main_index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="\Project_practies\PHP\logout.php">Log Out</a></li>
                    </ul>
                </li>
                

            </ul>
            <form class="d-flex" id="search" name="nav_submit">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                <button class="btn btn-outline-success" type="submit" id="searchButton">Search</button>
            </form>
            <form class="d-flex">

                <a href="\Project_practies\PHP\main_cart_data.php" class="btn btn-primary position-relative">
                    Cart
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo $arr_data['count'];  ?>

                    </span>
                </a>
                <a href="\Project_practies\PHP\profile.php" class="user_photo">
                    <img src="<?php if(isset($arr2['photo']) && !empty($arr2['photo'])){ echo $arr2['photo']; }else{ echo $imagepath; }?>" alt="Profile photo" height="40" style="border-radius:50% " ; title="Profile">
                </a>
            </form>
        </div>
    </div>
</nav>