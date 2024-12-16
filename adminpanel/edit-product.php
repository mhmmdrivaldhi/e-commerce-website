<?php

include '../conn.php';
include 'navbar.php';

$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id' ");
$product = mysqli_fetch_array($sql);

if (isset($_POST['saveProduct'])) {
    $name = $_POST['productName'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if ($name && $price && $description == true) {
        $sql = "UPDATE produk SET name = '$name', harga = '$price', detail = '$description' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<div class='alert alert-success text-center' role='alert'>
                    <strong>Success!</strong>
                    Data Berhasil Di Edit
                  </div>";
        } else {
            echo "<div class='alert alert-danger text-center' role='alert'>
                    <strong>Failed!</strong>
                    Data Gagal Di Edit
                  </div>";
        }
    }
}

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

    <title>Category Edit - Toko Online</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-home me-1"></i><a href="index.php" class="text-secondary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-cart-shopping me-1"></i>Product</li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-cart-shopping me-1"></i>Product Edit</li>
                </ol>
            </nav>
        </div>

        <h3 class="fw-bold text-secondary mt-5">Product Edit</h3>

        <form action="" method="POST">
            <div class="mb-3 mt-4">
                <label for="productName" class="form-label fw-bold">Product Name</label>
                <input type="text" class="form-control" name="productName" id="productName" placeholder="Enter Product Name . . ." value="<?php echo $product['name']; ?>">
            </div>
            <div class="mb-3 mt-4">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price . . ." value="<?php echo $product['harga']; ?>">
            </div>
            <div class="mb-3 mt-4">
                <label for="description" class="form-label fw-bold">Description</label>
                <input type="text" class="form-control" name="description" id="categoryName" placeholder="Enter Description . . ." value="<?php echo $product['detail']; ?>">
            </div>
            <button type="submit" name="saveProduct" class="btn btn-outline-info fw-bold">Submit</button>
        </form>
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>