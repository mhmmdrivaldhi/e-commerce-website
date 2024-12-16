<?php 

session_start();
include '../conn.php';
include 'navbar.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
    $queryUser = mysqli_query($conn, "SELECT * FROM users");
    $countUser = mysqli_num_rows($queryUser);

    $queryCategory = mysqli_query($conn, "SELECT * FROM kategori");
    $countCategory = mysqli_num_rows($queryCategory);

    $queryProduct = mysqli_query($conn, "SELECT * FROM produk");
    $countProduct = mysqli_num_rows($queryProduct);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Home - Toko Online</title>
</head>
<body>

    <!-- Sale & Revenue Start -->
<div class="container mb-5">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-home me-1"></i>Home</li>
            </ol>
        </nav>
    </div>
</div>
<div class="px-5 pt-5 pb-5 container bg-secondary rounded-3">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 fw-bold">User</p>
                    <h6 class="mb-0"><?php echo $countUser ?></h6>
                    <a href="../adminpanel/" class="btn btn-outline-primary mt-3 btn-sm fw-bold">See More <i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                <i class="fa fa-layer-group fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 fw-bold">Category</p>
                    <h6 class="mb-0"><?php echo $countCategory; ?></h6>
                    <a href="category.php" class="btn btn-outline-primary mt-3 btn-sm fw-bold">See More <i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                <i class="fa-solid fa-cart-shopping fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2 fw-bold">Product</p>
                    <h6 class="mb-0"><?php echo $countProduct ?></h6>
                    <a href="product.php" class="btn btn-outline-primary mt-3 btn-sm fw-bold">See More <i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- Sale & Revenue End -->


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>